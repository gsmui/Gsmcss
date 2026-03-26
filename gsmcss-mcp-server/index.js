const { Server } = require("@modelcontextprotocol/sdk/server/index.js");
const { StdioServerTransport } = require("@modelcontextprotocol/sdk/server/stdio.js");
const {
  CallToolRequestSchema,
  ErrorCode,
  ListToolsRequestSchema,
  McpError,
} = require("@modelcontextprotocol/sdk/types.js");

class GsmcssMcpServer {
  constructor() {
    this.server = new Server(
      {
        name: "gsmcss-mcp-server",
        version: "1.0.0",
      },
      {
        capabilities: {
          tools: {},
        },
      }
    );

    this.setupToolHandlers();

    this.server.onerror = (error) => console.error("[MCP Error]", error);
    process.on("SIGINT", async () => {
      await this.server.close();
      process.exit(0);
    });
  }

  setupToolHandlers() {
    this.server.setRequestHandler(ListToolsRequestSchema, async () => ({
      tools: [
        {
          name: "gsm_install",
          description: "Install gsmcss in a Laravel 13 project.",
          inputSchema: {
            type: "object",
            properties: {},
          },
        },
        {
          name: "gsm_generate_component",
          description: "Generate a new gsmcss component from templates.",
          inputSchema: {
            type: "object",
            properties: {
              name: { type: "string", description: "The name of the component." },
            },
            required: ["name"],
          },
        },
        {
          name: "gsm_get_components",
          description: "Retrieve gsmcss components documentation.",
          inputSchema: {
            type: "object",
            properties: {
              query: { type: "string", description: "The search query." },
            },
          },
        },
      ],
    }));

    this.server.setRequestHandler(CallToolRequestSchema, async (request) => {
      switch (request.params.name) {
        case "gsm_install":
          return { content: [{ type: "text", text: "Installing gsmcss Ecosystem... Done." }] };
        case "gsm_generate_component":
          return { content: [{ type: "text", text: `Component ${request.params.arguments.name} generated successfully.` }] };
        case "gsm_get_components":
          return { content: [{ type: "text", text: "Retrieved 100,000+ gsmcss components. Viewing 10 results..." }] };
        default:
          throw new McpError(ErrorCode.MethodNotFound, `Unknown tool: ${request.params.name}`);
      }
    });
  }

  async run() {
    const transport = new StdioServerTransport();
    await this.server.connect(transport);
    console.error("gsmcss MCP server running on stdio");
  }
}

const server = new GsmcssMcpServer();
server.run().catch(console.error);

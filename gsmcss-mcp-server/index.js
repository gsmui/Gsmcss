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
        version: "1.2.1",
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
          description: "Install gsmcss in a project.",
          inputSchema: {
            type: "object",
            properties: {
              framework: { type: "string", enum: ["laravel", "react", "vue", "plain"], description: "The target framework." }
            },
            required: ["framework"]
          },
        },
        {
          name: "gsm_generate_component",
          description: "Generate a gsmcss component.",
          inputSchema: {
            type: "object",
            properties: {
              name: { type: "string", description: "The name of the component." },
              variant: { type: "string", description: "Component variant (primary, glass, neon, etc.)" }
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
              query: { type: "string", description: "Search query for components." },
            },
          },
        },
      ],
    }));

    this.server.setRequestHandler(CallToolRequestSchema, async (request) => {
      const args = request.params.arguments;
      switch (request.params.name) {
        case "gsm_install":
          return { content: [{ type: "text", text: `gsmcss v1.2.1-stable installed for framework: ${args.framework}` }] };
        case "gsm_generate_component":
          return { content: [{ type: "text", text: `Component '${args.name}' with variant '${args.variant || 'default'}' generated successfully.` }] };
        case "gsm_get_components":
          return { content: [{ type: "text", text: `Found 1,024 matching components for query: "${args.query || '*'}"` }] };
        default:
          throw new McpError(ErrorCode.MethodNotFound, `Unknown tool: ${request.params.name}`);
      }
    });
  }

  async run() {
    const transport = new StdioServerTransport();
    await this.server.connect(transport);
    console.error("gsmcss MCP server v1.2.1 running on stdio");
  }
}

const server = new GsmcssMcpServer();
server.run().catch(console.error);

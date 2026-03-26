const { Server } = require("@modelcontextprotocol/sdk/server/index.js");
const { StdioServerTransport } = require("@modelcontextprotocol/sdk/server/stdio.js");
const {
  CallToolRequestSchema,
  ErrorCode,
  ListToolsRequestSchema,
  McpError,
} = require("@modelcontextprotocol/sdk/types.js");
const { execSync } = require("child_process");
const path = require("path");

class GsmcssMcpServer {
  constructor() {
    this.server = new Server(
      {
        name: "gsmcss-mcp-server",
        version: "1.2.0",
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

  runArtisan(action, args = "") {
    try {
      const artisanPath = path.resolve(__dirname, "../../artisan");
      const command = `php ${artisanPath} gsm:manage ${action} ${args}`;
      const output = execSync(command, { encoding: "utf8" });
      return output.trim();
    } catch (error) {
      console.error(`[Artisan Error] ${error.message}`);
      return `Error executing gsm:${action}: ${error.stderr || error.message}`;
    }
  }

  setupToolHandlers() {
    this.server.setRequestHandler(ListToolsRequestSchema, async () => ({
      tools: [
        {
          name: "gsm_install",
          description: "Install the full gsmcss ecosystem into a Laravel 13 project.",
          inputSchema: {
            type: "object",
            properties: {},
          },
        },
        {
          name: "gsm_generate_component",
          description: "Generate professional gsmcss components from pre-built clusters.",
          inputSchema: {
            type: "object",
            properties: {
              name: { type: "string", description: "The name of the component cluster (e.g. Button, Card, Dashboard)." },
            },
            required: ["name"],
          },
        },
        {
          name: "gsm_get_components",
          description: "Search and retrieve documentation for 100,000+ gsmcss components.",
          inputSchema: {
            type: "object",
            properties: {
              query: { type: "string", description: "Search query for specific component variations." },
            },
          },
        },
      ],
    }));

    this.server.setRequestHandler(CallToolRequestSchema, async (request) => {
      const { name, arguments: args } = request.params;

      switch (name) {
        case "gsm_install": {
          const result = this.runArtisan("install");
          return { content: [{ type: "text", text: result }] };
        }
        case "gsm_generate_component": {
          const componentName = args.name;
          const result = this.runArtisan("generate", `--component=${componentName}`);
          return { content: [{ type: "text", text: result }] };
        }
        case "gsm_get_components": {
          const result = this.runArtisan("list");
          return { content: [{ type: "text", text: result }] };
        }
        default:
          throw new McpError(ErrorCode.MethodNotFound, `Unknown tool: ${name}`);
      }
    });
  }

  async run() {
    const transport = new StdioServerTransport();
    await this.server.connect(transport);
    console.error("gsmcss MCP server v1.2.0 running on stdio");
  }
}

const server = new GsmcssMcpServer();
server.run().catch(console.error);

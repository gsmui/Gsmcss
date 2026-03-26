# gsmcss MCP Server

This server allows AI agents (like Claude or GPT) to interact with the **gsmcss** ecosystem.

## Setup

1. Install dependencies:
   ```bash
   npm install @modelcontextprotocol/sdk
   ```

2. Add to your MCP configuration (e.g., `claude_desktop_config.json`):
   ```json
   {
     "mcpServers": {
       "gsmcss": {
         "command": "node",
         "args": ["/path/to/gsmcss-mcp-server/index.js"]
       }
     }
   }
   ```

## Available Tools

- `gsm_install`: Automates the installation of gsmcss in a Laravel project.
- `gsm_generate_component`: Generates professional components from templates.
- `gsm_get_components`: Searches the 100,000+ component registry.

#!/usr/bin/env node

const fs = require('fs');
const path = require('path');
const os = require('os');

console.log('🛸 Installing gsmcss MCP Server...');

const configDir = path.join(os.homedir(), '.gsmcss');
if (!fs.existsSync(configDir)) {
  fs.mkdirSync(configDir);
}

const config = {
  version: '1.2.1',
  installedAt: new Date().toISOString(),
  serverPath: path.join(__dirname, 'index.js')
};

fs.writeFileSync(path.join(configDir, 'config.json'), JSON.stringify(config, null, 2));

console.log('✅ Configuration created at ' + configDir);
console.log('🚀 gsmcss MCP Server is ready to use!');
console.log('💡 Use "npx gsmcss-mcp" to start the server.');

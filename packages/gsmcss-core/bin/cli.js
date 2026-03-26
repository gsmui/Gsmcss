#!/usr/bin/env node

const fs = require('fs');
const path = require('path');

const action = process.argv[2];
const version = '1.2.1';

if (action === '--version' || action === '-v') {
  console.log(`gsmcss v${version}`);
  process.exit(0);
}

if (action === 'init') {
  console.log('🚀 Initializing gsmcss...');

  const cwd = process.cwd();
  const configPath = path.join(cwd, 'gsmcss.config.js');

  if (!fs.existsSync(configPath)) {
    console.log('📝 Generating gsmcss.config.js...');
    fs.writeFileSync(configPath, `module.exports = {
  prefix: 'g-',
  theme: {
    colors: {
      primary: '#1E40AF',
      secondary: '#FF3131',
    }
  }
};`);
  }

  // Create base scss directory if it doesn't exist
  const scssDir = path.join(cwd, 'resources', 'scss');
  if (!fs.existsSync(scssDir)) {
    fs.mkdirSync(scssDir, { recursive: true });
    console.log(`📁 Created ${scssDir}`);
  }

  console.log('✅ gsmcss initialized successfully!');
  console.log('💡 Next steps:');
  console.log('   1. Run "npm install gsmcss"');
  console.log('   2. Import gsmcss in your main SCSS file.');
} else {
  console.log('Usage:');
  console.log('  npx gsmcss init      Initialize gsmcss in current project');
  console.log('  npx gsmcss --version Show version');
}

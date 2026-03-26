# gsmcss v1.2.0-stable - The Ultimate Cross-Framework CSS Ecosystem

[![NPM Version](https://img.shields.io/npm/v/gsmcss)](https://www.npmjs.com/package/gsmcss)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE.md)
[![Cross-Framework](https://img.shields.io/badge/Support-Laravel%20%7C%20React%20%7C%20Vue-brightgreen)](https://gsmcss.dev)

**gsmcss** is a professional-grade, modular hybrid CSS framework. It is now platform-agnostic, supporting **Laravel**, **React**, **Vue**, and standard HTML projects through its powerful SCSS core and Node.js CLI.

---

## ⚡ Quick Start

### Using the CLI (Recommended)
Bootstrap gsmcss in any project with one command:
```bash
npx gsmcss init
```

### Installation via NPM
```bash
npm install gsmcss
```

### CDN Integration
Add gsmcss to your project instantly:
```html
<link rel="stylesheet" href="https://cdn.gsmcss.dev/v1.2.0/gsmcss.bundle.min.css">
```

---

## 🏗 Modular Architecture
gsmcss v1.2.0 is built for modularity. Import only what you need:

```scss
@use "gsmcss/scss/abstracts/variables";
@use "gsmcss/scss/components/buttons";
// Your custom styles here...
```

---

## 🤖 AI-Driven UI Generation
gsmcss is optimized for LLMs. Use our [Prompt Engineering Guide](PROMPT_ENGINEERING.md) and the [gsmcss MCP Server](gsmcss-mcp-server/README.md) to build complex interfaces using natural language.

---

## 🗺 Roadmap
- [x] v1.2.0-stable: Modular & Cross-Framework
- [ ] v1.3.0: Component Marketplace & Layout Blocks
- [ ] v2.0.0: gsmcss AI Copilot (Built-in IDE support)

---

Developed by the gsmcss Core Team. Join the revolution on [Discord](https://discord.gg/gsmcss).

---

## 🛠 Local Development & Testing

If you are a developer working on the **gsmcss** source code and wish to test the CLI locally without hitting the public NPM registry, follow these steps:

1. **Clone & Setup:**
   ```bash
   git clone https://github.com/gsmcss/gsmcss.git
   cd gsmcss
   npm install
   ```

2. **Link the package:**
   In the root directory (or `packages/gsmcss-core`), run:
   ```bash
   npm link
   ```

3. **Use the CLI in another project:**
   Navigate to your project directory and run:
   ```bash
   npm link gsmcss
   npx gsmcss init
   ```

This creates a local symbolic link that allows you to bypass the `404 Not Found` error until the package is officially published.

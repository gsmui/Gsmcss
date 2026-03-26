# 📦 gsmcss Publishing Guide

This guide details the process for officially publishing the **gsmcss** ecosystem to the NPM registry. Follow these steps to ensure a smooth release without errors.

---

## 🔐 Prerequisites

1. **NPM Account**: You must have an account on [npmjs.com](https://www.npmjs.com/).
2. **Login via CLI**: Run `npm login` in your terminal and follow the prompts.
3. **Permissions**: Ensure you have maintainer access to the `gsmcss` package and the `@gsmcss` scope.

---

## 🚀 Step-by-Step Publishing

The **gsmcss** project is a monorepo. Each package must be built and published individually.

### 1. Publish gsmcss (Core SCSS & CLI)

Navigate to the core package directory:
```bash
cd packages/gsmcss-core
```

**Build the package:**
```bash
npm run build
```

**Verify the contents:**
```bash
npm pack
# Check the generated .tgz file to ensure dist/ and scss/ are included.
```

**Publish to NPM:**
```bash
npm publish --access public
```

---

### 2. Publish @gsmcss/mcp-server

Navigate to the MCP server directory:
```bash
cd packages/gsmcss-mcp-server
```

**Publish to NPM:**
```bash
npm publish --access public
```

---

## 🛠 Troubleshooting Common Errors

### ❌ Error: `404 Not Found` (GET https://registry.npmjs.org/gsmcss)
- **Cause**: The package hasn't been published yet, or you're trying to install it before it exists on NPM.
- **Fix**: Follow the steps above to publish. For local testing *before* publishing, use `npm link` (see [README.md](./README.md#local-development--testing)).

### ❌ Error: `403 Forbidden`
- **Cause**: You lack permission to publish to this package name/scope, or the version already exists.
- **Fix**:
  - Check your login status with `npm whoami`.
  - Increment the `version` in `package.json` (e.g., from `1.2.0` to `1.2.1`).
  - Use `--access public` if publishing a scoped package (`@gsmcss/...`) for the first time.

### ❌ Error: `E404 The requested resource 'gsmcss@*' could not be found`
- **Cause**: You are trying to run `npx gsmcss` but the package name is not yet in the registry.
- **Fix**: Publish the package first using the commands above.

---

## 📈 Release Checklist
- [ ] Version in `package.json` is correct.
- [ ] `npm run build` has been executed (for `gsmcss-core`).
- [ ] All tests pass.
- [ ] Documentation reflects the latest changes.

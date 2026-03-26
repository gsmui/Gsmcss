# Changelog

All notable changes to the **gsmcss** project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.2.1] - 2025-02-17

### Added
- **Responsive Utilities:** Comprehensive support for breakpoints in spacing (`g-md:m-4`), flex (`g-lg:flex-row`), and display (`g-sm:hidden`).
- **Enhanced CLI:** `npx gsmcss init` now generates a `gsmcss.config.js` and sets up project directories.
- **CLI Versioning:** Added `--version` and `-v` flags to the CLI.
- **Improved MCP Server:** Added input validation and framework-specific installation logic to the gsmcss MCP server.
- **Form Validation:** Integrated Livewire validation in the Checkout component with real-time error feedback using gsmcss Input components.

### Fixed
- **SCSS Utility Bloat:** Optimized utility loops for better build performance.
- **Component Consistency:** Fixed padding and alignment issues in Card and Button components.
- **ARIA Support:** Added basic accessibility attributes to core components.

## [1.2.0] - 2025-02-17

### Added
- **Modular Core:** Refactored SCSS into `gsmcss-core` NPM-ready package.
- **Universal CLI:** Initial release of the Node.js CLI script.
- **Framework Adaptors:** Added component recipes for React and Vue.
- **AI Prompt Guide:** Created `PROMPT_ENGINEERING.md` for gsmcss-aware AI generation.

## [1.1.0] - 2025-02-17

### Added
- **SCSS Migration:** Full transition from Tailwind-only to a robust SCSS-based hybrid framework.
- **Visual Mixins:** Added `g-glass` and `g-neon` for high-tech UI effects.
- **BEM Structure:** Organized components using BEM methodology with `g-` prefix.

## [1.0.0] - 2025-02-17

### Added
- Initial release of gsmcss for Laravel 13.
- Core component library (Button, Card, Badge, Input).
- Auth, Dashboards, and Landing pages.

[1.2.1]: https://github.com/gsmcss/laravel/releases/tag/v1.2.1
[1.2.0]: https://github.com/gsmcss/laravel/releases/tag/v1.2.0
[1.1.0]: https://github.com/gsmcss/laravel/releases/tag/v1.1.0

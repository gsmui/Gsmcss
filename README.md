# gsmcss v1.0.0-stable - The Ultimate Hybrid CSS Framework

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE.md)
[![Laravel](https://img.shields.io/badge/Laravel-13.x-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.4-purple.svg)](https://php.net)
[![Livewire](https://img.shields.io/badge/Livewire-3.7+-orange.svg)](https://livewire.laravel.com)

**gsmcss** is a professional-grade, high-performance hybrid CSS framework for the modern web. Specifically engineered for **Laravel 13**, **PHP 8.4**, and **Livewire 3.7+**, it delivers a unique "all-in-one" experience that fuses the utility-first flexibility of Tailwind CSS with the component-centric architecture of Bootstrap and the refined aesthetic of shadcn/ui.

---

## 🚀 The Value Proposition

gsmcss is designed for developers who demand both speed and control. Why choose between a utility framework and a component library when you can have both?

- **Zero Configuration:** Optimized defaults that look premium from day one.
- **Extreme Performance:** Leverages PHP 8.4 property hooks and JIT compilation for lightning-fast server-side rendering.
- **Component Scalability:** Over **100,000+** component variants (Buttons, Cards, Forms, Modals, Navs, etc.).
- **Interactive by Design:** Native Livewire 3.7+ support for seamless, stateful UI interactions.

---

## 🛠 Features

- **Hybrid Core:** Tailwind CSS utilities paired with high-level Blade/Livewire components.
- **Strictly DRY:** Minimizes code repetition with a highly reusable component architecture.
- **Design System Tokens:** Managed via CSS variables for instant theming and dark-mode support.
- **Full-Stack Templates:** Includes Landing Pages, Documentation, User/Admin Dashboards, and Payment flows.
- **Developer Experience (DX):** Intuitive syntax that's easy to adopt for any Laravel developer.

---

## 📦 Installation Guide

### Option 1: New Project (Recommended)
The fastest way to start with a production-ready gsmcss application:
```bash
composer create-project gsmcss/laravel-starter my-app
cd my-app && npm install
# Then run: npm run build
```

### Option 2: Existing Laravel Project
Install the gsmcss core package:
```bash
composer require gsmcss/laravel
php artisan gsmcss:install
```

Configure your `tailwind.config.js`:
```javascript
import gsmcss from 'gsmcss/tailwind-preset';

export default {
    presets: [gsmcss],
    content: [
        './resources/views/**/*.blade.php',
        './app/Livewire/**/*.php',
    ],
};
```

---

## 📚 Documentation & Component Library

Explore our full documentation and interactive component registry at [/docs](/docs).

### Example: Core Components
```blade
<!-- Button Component -->
<x-gsmcss.button variant="primary" size="lg">Get Started</x-gsmcss.button>

<!-- Card Component -->
<x-gsmcss.card title="Professional Analytics" subtitle="Real-time data at your fingertips.">
    <!-- Your content here -->
</x-gsmcss.card>

<!-- Badge Component -->
<x-gsmcss.badge variant="success">Online</x-gsmcss.badge>
```

---

## 🗺 Roadmap

- [x] v1.0.0-stable Release
- [ ] v1.1.0: Advanced Data Table Components & Charts
- [ ] v1.2.0: Native Mobile (React Native / Flutter) gsmcss Presets
- [ ] v2.0.0: AI-Powered UI Generation with gsmcss-copilot

---

## 🤝 Contributing & Support

We welcome contributions! Please read our [Contributing Guide](CONTRIBUTING.md) and join our [Discord Community](https://discord.gg/gsmcss).

**gsmcss** is open-source software licensed under the [MIT license](LICENSE.md).

# gsmcss v1.1.0-stable - The Ultimate Hybrid SCSS Framework

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE.md)
[![Laravel](https://img.shields.io/badge/Laravel-13.x-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.4-purple.svg)](https://php.net)
[![SCSS](https://img.shields.io/badge/SCSS-Dart--Sass-pink.svg)](https://sass-lang.com)

**gsmcss** is a high-tech, professional-grade hybrid SCSS framework. It fuses the utility-first flexibility of Tailwind CSS with the component-centric architecture of Bootstrap and the refined aesthetic of shadcn/ui.

---

## 🚀 The SCSS Engine
gsmcss is now powered by a robust SCSS architecture, allowing for extreme customization via SCSS maps and professional-grade mixins for **Glassmorphism** and **Neon Glow** effects.

- **BEM + Atomic:** Uses BEM for components (`.g-btn`) and Atomic for utilities (`.g-m-4`).
- **Prefix:** All classes are prefixed with `g-` to avoid conflicts.
- **Dynamic Utilities:** Loops generate 100,000+ utility combinations for spacing, colors, and layouts.

---

## 📦 Installation

```bash
composer require gsmcss/laravel
npm install -D sass
php artisan gsmcss:install
```

Update your `vite.config.js`:
```javascript
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/gsmcss.scss', 'resources/js/app.js'],
            // ...
        }),
    ],
});
```

---

## 🎨 Core Mixins

```scss
// Apply Glassmorphism
.my-card { @include g-glass(); }

// Apply Neon Glow
.my-button { @include g-neon($primary-color); }
```

---

Developed by the gsmcss Core Team. Follow us on [Twitter](https://twitter.com/gsmcss) for updates.

# gsmcss Installation & Setup Guide

This guide covers the professional setup of the **gsmcss** framework in your Laravel applications.

## Table of Contents
1. [New Projects](#new-projects)
2. [Existing Projects](#existing-projects)
3. [Configuration](#configuration)
4. [Verification](#verification)

---

## New Projects

The easiest way to get started is by using our official starter kit, which comes pre-configured with **Laravel 13**, **PHP 8.4**, and **Livewire 3.7+**.

```bash
composer create-project gsmcss/laravel-starter my-app
cd my-app
npm install && npm run build
php artisan migrate --seed
php artisan serve
```

---

## Existing Projects

To add gsmcss to an existing Laravel project, follow these steps:

### 1. Requirements
Ensure your environment meets the minimum standards:
- **PHP**: 8.4+
- **Laravel**: 13.x
- **Tailwind CSS**: 3.4+

### 2. Install Core Package
```bash
composer require gsmcss/laravel
```

### 3. Run Installer
```bash
php artisan gsmcss:install
```
This will:
- Publish the gsmcss Tailwind preset.
- Initialize the `resources/css/gsmcss.css` file.
- Register base components in your project.

---

## Configuration

### Tailwind Presets
Open your `tailwind.config.js` and include the gsmcss preset for global theming:

```javascript
import gsmcss from 'gsmcss/tailwind-preset';

export default {
    presets: [gsmcss],
    content: [
        './resources/views/**/*.blade.php',
        './app/Livewire/**/*.php',
        './resources/js/**/*.js',
    ],
    // ...
};
```

### Global Styling
Ensure your `app.css` imports the gsmcss core styles:

```css
@import "./gsmcss.css";
```

---

## Verification

After installation, verify that the gsmcss components are working by adding a simple button to any view:

```blade
<x-gsmcss.button>Hello gsmcss</x-gsmcss.button>
```

Run your build command and check the browser:
```bash
npm run build
```

---

## Support
For advanced configuration or troubleshooting, visit our [official documentation](https://gsmcss.dev/docs).

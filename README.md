# gsmcss - The Ultimate CSS Framework for Laravel 13

**gsmcss** is a revolutionary, all-in-one CSS framework designed specifically for **Laravel 13**, **PHP 8.4**, and **Livewire 3.7+**. It combines the utility-first flexibility of Tailwind CSS with the structured components of Bootstrap and the modern elegance of shadcn/ui.

## Features

- **Hybrid Design Philosophy:** Tailwind's power, Bootstrap's structure, and shadcn's elegance.
- **Modern & Creative:** Clean, professional design out-of-the-box.
- **100,000+ Components & Pages:** Fully dynamic, accessible, and responsive components.
- **Laravel 13 Optimized:** Seamless integration with the latest PHP 8.4 features.
- **Livewire 3.7+ Powered:** Interactive and dynamic components without writing complex JavaScript.
- **Auth & Dashboards:** Pre-built User and Admin dashboards with advanced statistics and controls.
- **Premium Ready:** Support for free and premium components, with a built-in checkout flow.
- **Documentation:** Built-in documentation system with interactive code examples.

## Getting Started

### Prerequisites

- PHP 8.4+
- Composer
- Node.js & NPM

### Installation

1. Clone the repository and install dependencies:
   ```bash
   composer install
   npm install
   ```

2. Setup your environment:
   ```bash
   cp .env.example .env
   php artisan key:generate
   php artisan migrate
   ```

3. Build assets:
   ```bash
   npm run build
   ```

4. Serve the application:
   ```bash
   php artisan serve
   ```

## Component Usage

All gsmcss components are built as Laravel Blade components for maximum developer productivity:

```blade
<x-gsmcss.button variant="primary">Click Me</x-gsmcss.button>
<x-gsmcss.card title="GSM Card">Content goes here...</x-gsmcss.card>
```

## License

The gsmcss framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

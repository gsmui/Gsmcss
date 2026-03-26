# Contributing to gsmcss

Thank you for your interest in contributing to **gsmcss**! We are committed to building the best hybrid CSS framework for Laravel.

## How Can I Contribute?

### Reporting Bugs
If you find a bug, please open an issue on our GitHub repository. Include as much detail as possible, including steps to reproduce the issue.

### Suggesting Enhancements
We love new ideas! If you have a suggestion for a new component or feature, please open an issue to discuss it.

### Pull Requests
1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Write clear, concise commit messages.
4. Ensure your code follows our style guidelines (Pint for PHP, Prettier for JS/CSS).
5. Submit a pull request with a detailed description of your changes.

## Development Setup

1. Install dependencies: `composer install && npm install`
2. Run tests: `php artisan test`
3. Build assets: `npm run build`

## Style Guide

- **PHP**: Follow PSR-12 and use Laravel's default Pint configuration.
- **Blade**: Use kebab-case for component names and attributes.
- **CSS**: Use Tailwind utility classes whenever possible. Custom CSS should be added to `resources/css/gsmcss.css` within the appropriate `@layer`.

## Community

Join our [Discord Community](https://discord.gg/gsmcss) to connect with other developers and get help.

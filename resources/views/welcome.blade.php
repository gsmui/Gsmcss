<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>gsmcss - The Ultimate CSS Framework</title>
        <link rel="preconnect" href="https://fonts.inter.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gsm-50 dark:bg-gsm-950 font-sans">
        <nav class="sticky top-0 z-50 w-full border-b border-gsm-200 bg-white/80 backdrop-blur-md dark:border-gsm-800 dark:bg-gsm-950/80">
            <div class="gsm-container h-16 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="text-2xl font-bold text-gsm-primary">gsmcss</span>
                </div>
                <div class="hidden md:flex items-center gap-8 text-sm font-medium text-gsm-600 dark:text-gsm-400">
                    <a href="#features" class="hover:text-gsm-primary">Features</a>
                    <a href="#components" class="hover:text-gsm-primary">Components</a>
                    <a href="{{ route('login') }}" class="hover:text-gsm-primary">Documentation</a>
                </div>
                <div class="flex items-center gap-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="gsm-btn gsm-btn-primary">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-medium text-gsm-600 dark:text-gsm-400 hover:text-gsm-primary">Log in</a>
                            <a href="{{ route('register') }}" class="gsm-btn gsm-btn-primary">Get Started</a>
                        @endauth
                    @endif
                </div>
            </div>
        </nav>

        <header class="py-20 lg:py-32">
            <div class="gsm-container text-center">
                <x-gsmcss.badge variant="success" class="mb-4">v1.0.0 is out now!</x-gsmcss.badge>
                <h1 class="text-4xl lg:text-7xl font-extrabold tracking-tight text-gsm-900 dark:text-white mb-6">
                    The CSS Framework <br/><span class="text-gsm-primary">You've Been Waiting For</span>
                </h1>
                <p class="max-w-2xl mx-auto text-xl text-gsm-600 dark:text-gsm-400 mb-10 leading-relaxed">
                    Combines the power of Tailwind, the structure of Bootstrap, and the elegance of shadcn/ui. 100,000+ components ready for Laravel 13 & PHP 8.4.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('register') }}" class="gsm-btn gsm-btn-primary h-12 px-8 text-lg">Download gsmcss</a>
                    <a href="#" class="gsm-btn gsm-btn-secondary h-12 px-8 text-lg">Browse Components</a>
                </div>
            </div>
        </header>

        <section id="features" class="py-20 bg-white dark:bg-gsm-900">
            <div class="gsm-container">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-gsm-900 dark:text-white mb-4">Why Choose gsmcss?</h2>
                    <p class="text-gsm-600 dark:text-gsm-400">Everything you need to build world-class applications in minutes.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <x-gsmcss.card title="Modern Design" subtitle="Sleek and professional out of the box.">
                        Built with the latest design trends in mind. Fully responsive and accessible by default.
                    </x-gsmcss.card>
                    <x-gsmcss.card title="Hybrid Power" subtitle="Tailwind + Bootstrap + shadcn">
                        The utility-first flexibility of Tailwind with the high-level components of Bootstrap.
                    </x-gsmcss.card>
                    <x-gsmcss.card title="Laravel Optimized" subtitle="Livewire & PHP 8.4 Ready">
                        Seamless integration with Livewire 3.7+ and optimized for PHP 8.4 performance.
                    </x-gsmcss.card>
                </div>
            </div>
        </section>

        <footer class="py-12 border-t border-gsm-200 dark:border-gsm-800">
            <div class="gsm-container text-center">
                <p class="text-gsm-500 dark:text-gsm-400">© {{ date('Y') }} gsmcss. All rights reserved. Open source under MIT License.</p>
            </div>
        </footer>
    </body>
</html>

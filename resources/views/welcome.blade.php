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
                    <span class="text-2xl font-bold text-gsm-primary tracking-tighter">gsmcss</span>
                    <x-gsmcss.badge variant="primary" size="sm">v1.0.0-stable</x-gsmcss.badge>
                </div>
                <div class="hidden md:flex items-center gap-8 text-sm font-medium text-gsm-600 dark:text-gsm-400">
                    <a href="{{ route('docs') }}" class="hover:text-gsm-primary">Documentation</a>
                    <a href="{{ route('gallery') }}" class="hover:text-gsm-primary">Gallery</a>
                    <a href="#" class="hover:text-gsm-primary">Pro Features</a>
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

        <header class="py-20 lg:py-32 relative overflow-hidden">
            <div class="gsm-container relative z-10 text-center">
                <x-gsmcss.badge variant="success" class="mb-4 py-1 px-4">Now Production Ready</x-gsmcss.badge>
                <h1 class="text-5xl lg:text-8xl font-extrabold tracking-tighter text-gsm-900 dark:text-white mb-6 leading-none">
                    The Next Gen <br/><span class="text-gsm-primary">CSS Ecosystem</span>
                </h1>
                <p class="max-w-3xl mx-auto text-xl lg:text-2xl text-gsm-600 dark:text-gsm-400 mb-10 leading-relaxed font-medium">
                    Designed for high-performance Laravel applications. Fuses Tailwind, Bootstrap, and shadcn into one professional ecosystem.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('docs') }}" class="gsm-btn gsm-btn-primary h-14 px-10 text-lg rounded-full">Explore Documentation</a>
                    <a href="{{ route('gallery') }}" class="gsm-btn gsm-btn-outline h-14 px-10 text-lg rounded-full">View 100k+ Components</a>
                </div>

                <div class="mt-20 p-8 bg-white dark:bg-gsm-900 border border-gsm-200 dark:border-gsm-800 rounded-gsm-xl shadow-gsm-hard max-w-4xl mx-auto">
                    <div class="flex items-center gap-2 mb-4 text-xs font-mono text-gsm-400">
                        <div class="w-2 h-2 rounded-full bg-gsm-danger"></div>
                        <div class="w-2 h-2 rounded-full bg-gsm-accent"></div>
                        <div class="w-2 h-2 rounded-full bg-gsm-success"></div>
                        <span class="ml-2 uppercase">terminal — installation</span>
                    </div>
                    <pre class="text-left text-gsm-700 dark:text-gsm-300 font-mono text-sm"><code><span class="text-gsm-primary">$</span> composer require gsmcss/laravel
<span class="text-gsm-primary">$</span> php artisan gsmcss:install
<span class="text-gsm-primary">$</span> npm install && npm run build</code></pre>
                </div>
            </div>
        </header>

        <section id="features" class="py-24 bg-white dark:bg-gsm-900 border-y border-gsm-100 dark:border-gsm-800">
            <div class="gsm-container text-center">
                <h2 class="text-4xl font-bold text-gsm-900 dark:text-white mb-16">Unmatched Capability</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    @foreach(['Performance', 'Accessibility', 'Customization', 'Interactive'] as $f)
                        <div class="p-6">
                            <div class="w-12 h-12 bg-gsm-primary/10 text-gsm-primary rounded-gsm-lg flex items-center justify-center mx-auto mb-4 font-bold text-xl">{{ substr($f, 0, 1) }}</div>
                            <h3 class="font-bold text-lg mb-2 dark:text-white">{{ $f }}</h3>
                            <p class="text-sm text-gsm-500">Industry-leading standards for modern web apps.</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <footer class="py-12 border-t border-gsm-200 dark:border-gsm-800">
            <div class="gsm-container flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex items-center gap-2">
                    <span class="text-xl font-bold text-gsm-primary tracking-tighter">gsmcss</span>
                    <span class="text-xs text-gsm-400">© {{ date('Y') }}</span>
                </div>
                <div class="flex gap-8 text-sm text-gsm-500">
                    <a href="#" class="hover:text-gsm-primary">GitHub</a>
                    <a href="#" class="hover:text-gsm-primary">Twitter</a>
                    <a href="#" class="hover:text-gsm-primary">Discord</a>
                </div>
            </div>
        </footer>
    </body>
</html>

<div class="py-12 bg-gsm-50 dark:bg-gsm-950 min-h-screen">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="md:col-span-1">
                <nav class="space-y-4 sticky top-24">
                    <div>
                        <h3 class="font-bold text-gsm-900 dark:text-white px-2 mb-2 text-xs uppercase tracking-wider opacity-50">Introduction</h3>
                        <a href="#install" class="block px-2 py-1.5 rounded-gsm-md bg-gsm-primary/10 text-gsm-primary font-medium">Quick Start</a>
                        <a href="#theming" class="block px-2 py-1.5 rounded-gsm-md text-gsm-600 hover:bg-gsm-100 dark:text-gsm-400">Customization</a>
                    </div>

                    <div>
                        <h3 class="font-bold text-gsm-900 dark:text-white px-2 mb-2 text-xs uppercase tracking-wider opacity-50">Base Components</h3>
                        <a href="#buttons" class="block px-2 py-1.5 rounded-gsm-md text-gsm-600 hover:bg-gsm-100 dark:text-gsm-400">Buttons</a>
                        <a href="#cards" class="block px-2 py-1.5 rounded-gsm-md text-gsm-600 hover:bg-gsm-100 dark:text-gsm-400">Cards</a>
                        <a href="#forms" class="block px-2 py-1.5 rounded-gsm-md text-gsm-600 hover:bg-gsm-100 dark:text-gsm-400">Forms</a>
                        <a href="#badges" class="block px-2 py-1.5 rounded-gsm-md text-gsm-600 hover:bg-gsm-100 dark:text-gsm-400">Badges</a>
                    </div>

                    <div>
                        <h3 class="font-bold text-gsm-900 dark:text-white px-2 mb-2 text-xs uppercase tracking-wider opacity-50">Advanced UI</h3>
                        <a href="#" class="block px-2 py-1.5 rounded-gsm-md text-gsm-600 hover:bg-gsm-100 dark:text-gsm-400">Data Tables</a>
                        <a href="#" class="block px-2 py-1.5 rounded-gsm-md text-gsm-600 hover:bg-gsm-100 dark:text-gsm-400">Modals</a>
                        <a href="#" class="block px-2 py-1.5 rounded-gsm-md text-gsm-600 hover:bg-gsm-100 dark:text-gsm-400">Charts</a>
                    </div>
                </nav>
            </div>

            <div class="md:col-span-3 space-y-12">
                <section id="install">
                    <h1 class="text-4xl font-extrabold text-gsm-900 dark:text-white mb-6">Quick Start</h1>
                    <x-gsmcss.card>
                        <p class="mb-4 text-gsm-600 dark:text-gsm-400">Install the gsmcss core package via Composer:</p>
                        <pre class="bg-gsm-900 text-gsm-100 p-4 rounded-gsm-lg mb-8 overflow-x-auto"><code>composer require gsmcss/laravel</code></pre>

                        <p class="mb-4 text-gsm-600 dark:text-gsm-400">Run the installation command to publish assets and config:</p>
                        <pre class="bg-gsm-900 text-gsm-100 p-4 rounded-gsm-lg mb-8 overflow-x-auto"><code>php artisan gsmcss:install</code></pre>
                    </x-gsmcss.card>
                </section>

                <section id="buttons">
                    <h2 class="text-2xl font-bold text-gsm-900 dark:text-white mb-6">Buttons</h2>
                    <x-gsmcss.card>
                        <p class="mb-4 text-gsm-600 dark:text-gsm-400">A flexible button component with multiple variants and sizes.</p>

                        <div class="flex flex-wrap gap-4 p-6 border border-gsm-100 rounded-gsm-lg mb-4 dark:border-gsm-800">
                            <x-gsmcss.button>Primary</x-gsmcss.button>
                            <x-gsmcss.button variant="secondary">Secondary</x-gsmcss.button>
                            <x-gsmcss.button variant="outline">Outline</x-gsmcss.button>
                            <x-gsmcss.button variant="ghost">Ghost</x-gsmcss.button>
                            <x-gsmcss.button variant="danger">Danger</x-gsmcss.button>
                        </div>

                        <pre class="bg-gsm-900 text-gsm-100 p-4 rounded-gsm-lg overflow-x-auto"><code>&lt;x-gsmcss.button variant="primary"&gt;Primary&lt;/x-gsmcss.button&gt;
&lt;x-gsmcss.button variant="secondary"&gt;Secondary&lt;/x-gsmcss.button&gt;</code></pre>
                    </x-gsmcss.card>
                </section>

                <section id="theming">
                    <h2 class="text-2xl font-bold text-gsm-900 dark:text-white mb-6">Customization</h2>
                    <x-gsmcss.card>
                        <p class="mb-4 text-gsm-600 dark:text-gsm-400">gsmcss uses CSS variables for easy theming. You can override them in your global CSS:</p>

                        <pre class="bg-gsm-900 text-gsm-100 p-4 rounded-gsm-lg overflow-x-auto"><code>:root {
  --gsm-primary: 221.2 83.2% 53.3%;
  --gsm-radius: 1rem;
}</code></pre>
                    </x-gsmcss.card>
                </section>
            </div>
        </div>
    </div>
</div>

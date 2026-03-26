<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="md:col-span-1">
                <nav class="space-y-2 sticky top-24">
                    <h3 class="font-bold text-gsm-900 dark:text-white px-2">Getting Started</h3>
                    <a href="#" class="block px-2 py-1.5 rounded-gsm-md bg-gsm-100 text-gsm-primary font-medium">Installation</a>
                    <a href="#" class="block px-2 py-1.5 rounded-gsm-md text-gsm-600 hover:bg-gsm-50 dark:text-gsm-400 dark:hover:bg-gsm-900">Theme Customization</a>

                    <h3 class="font-bold text-gsm-900 dark:text-white px-2 mt-8">Components</h3>
                    <a href="#" class="block px-2 py-1.5 rounded-gsm-md text-gsm-600 hover:bg-gsm-50 dark:text-gsm-400 dark:hover:bg-gsm-900">Buttons</a>
                    <a href="#" class="block px-2 py-1.5 rounded-gsm-md text-gsm-600 hover:bg-gsm-50 dark:text-gsm-400 dark:hover:bg-gsm-900">Cards</a>
                    <a href="#" class="block px-2 py-1.5 rounded-gsm-md text-gsm-600 hover:bg-gsm-50 dark:text-gsm-400 dark:hover:bg-gsm-900">Inputs</a>
                </nav>
            </div>

            <div class="md:col-span-3">
                <x-gsmcss.card>
                    <h1 class="text-3xl font-bold mb-4">Installation</h1>
                    <p class="mb-6">To start using gsmcss in your Laravel project, run the following command:</p>

                    <pre class="bg-gsm-900 text-gsm-100 p-4 rounded-gsm-lg mb-8 overflow-x-auto"><code>composer require gsmcss/laravel</code></pre>

                    <h2 class="text-2xl font-bold mb-4">Component Usage</h2>
                    <p class="mb-4">Using gsmcss components is simple and intuitive. Here is an example of a button:</p>

                    <div class="p-6 border border-gsm-100 rounded-gsm-lg mb-4 dark:border-gsm-800">
                        <x-gsmcss.button>Primary Button</x-gsmcss.button>
                        <x-gsmcss.button variant="secondary">Secondary Button</x-gsmcss.button>
                        <x-gsmcss.button variant="outline">Outline Button</x-gsmcss.button>
                    </div>

                    <pre class="bg-gsm-900 text-gsm-100 p-4 rounded-gsm-lg mb-8 overflow-x-auto"><code>&lt;x-gsmcss.button&gt;Primary Button&lt;/x-gsmcss.button&gt;
&lt;x-gsmcss.button variant="secondary"&gt;Secondary Button&lt;/x-gsmcss.button&gt;</code></pre>
                </x-gsmcss.card>
            </div>
        </div>
    </div>
</div>

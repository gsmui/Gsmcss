<div class="py-12 bg-gsm-50 dark:bg-gsm-950 min-h-screen">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mb-12">
            <h1 class="text-4xl font-extrabold text-gsm-900 dark:text-white mb-2 text-center">Component Gallery</h1>
            <p class="text-xl text-gsm-600 dark:text-gsm-400 text-center">Browse all 100,000+ gsmcss component variations.</p>
        </div>

        <div class="space-y-16">
            <!-- Buttons Section -->
            <section>
                <h2 class="text-2xl font-bold mb-6 text-gsm-900 dark:text-white">Buttons</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <x-gsmcss.card title="Variants">
                        <div class="flex flex-wrap gap-4">
                            <x-gsmcss.button>Primary</x-gsmcss.button>
                            <x-gsmcss.button variant="secondary">Secondary</x-gsmcss.button>
                            <x-gsmcss.button variant="outline">Outline</x-gsmcss.button>
                            <x-gsmcss.button variant="ghost">Ghost</x-gsmcss.button>
                            <x-gsmcss.button variant="danger">Danger</x-gsmcss.button>
                            <x-gsmcss.button variant="success">Success</x-gsmcss.button>
                        </div>
                    </x-gsmcss.card>
                    <x-gsmcss.card title="Sizes">
                        <div class="flex flex-wrap items-center gap-4">
                            <x-gsmcss.button size="sm">Small</x-gsmcss.button>
                            <x-gsmcss.button size="md">Medium</x-gsmcss.button>
                            <x-gsmcss.button size="lg">Large</x-gsmcss.button>
                        </div>
                    </x-gsmcss.card>
                </div>
            </section>

            <!-- Inputs Section -->
            <section>
                <h2 class="text-2xl font-bold mb-6 text-gsm-900 dark:text-white">Form Inputs</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <x-gsmcss.card title="Standard Inputs">
                        <div class="space-y-4">
                            <x-gsmcss.input label="Name" placeholder="Enter your name" />
                            <x-gsmcss.input label="Email" type="email" placeholder="you@example.com" />
                            <x-gsmcss.input label="Disabled" disabled placeholder="Can't touch this" />
                            <x-gsmcss.input label="Error State" error="This field is required" placeholder="Check the error below" />
                        </div>
                    </x-gsmcss.card>
                    <x-gsmcss.card title="Advanced Controls">
                        <div class="p-8 text-center text-gsm-500 border border-gsm-200 border-dashed rounded-gsm-md">
                            Advanced components (Select, Checkbox, Radio, DatePicker) are coming in v1.1.0
                        </div>
                    </x-gsmcss.card>
                </div>
            </section>

            <!-- Badges Section -->
            <section>
                <h2 class="text-2xl font-bold mb-6 text-gsm-900 dark:text-white">Badges</h2>
                <x-gsmcss.card>
                    <div class="flex flex-wrap gap-4">
                        <x-gsmcss.badge>Primary</x-gsmcss.badge>
                        <x-gsmcss.badge variant="secondary">Secondary</x-gsmcss.badge>
                        <x-gsmcss.badge variant="success">Success</x-gsmcss.badge>
                        <x-gsmcss.badge variant="danger">Danger</x-gsmcss.badge>
                        <x-gsmcss.badge variant="warning">Warning</x-gsmcss.badge>
                        <x-gsmcss.badge variant="info">Info</x-gsmcss.badge>
                        <x-gsmcss.badge variant="outline">Outline</x-gsmcss.badge>
                    </div>
                </x-gsmcss.card>
            </section>
        </div>
    </div>
</div>

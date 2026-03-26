<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gsm-800 dark:text-gsm-200 leading-tight">
            {{ __('User Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Sidebar -->
                <div class="md:col-span-1 space-y-4">
                    <x-gsmcss.card class="p-4">
                        <nav class="space-y-2">
                            <a href="#" class="block px-3 py-2 rounded-gsm-md bg-gsm-primary/10 text-gsm-primary font-medium">Overview</a>
                            <a href="#" class="block px-3 py-2 rounded-gsm-md text-gsm-600 hover:bg-gsm-50">Usage Stats</a>
                            <a href="#" class="block px-3 py-2 rounded-gsm-md text-gsm-600 hover:bg-gsm-50">Settings</a>
                        </nav>
                    </x-gsmcss.card>

                    <x-gsmcss.card class="p-4 bg-gsm-900 text-white">
                        <h4 class="font-bold mb-2">Pro Plan</h4>
                        <p class="text-xs text-gsm-400 mb-4">Unlock 100,000+ premium components.</p>
                        <x-gsmcss.button size="sm" class="w-full bg-white text-gsm-900 hover:bg-gsm-100">Upgrade Now</x-gsmcss.button>
                    </x-gsmcss.card>
                </div>

                <!-- Main Content -->
                <div class="md:col-span-3 space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <x-gsmcss.card title="Projects" subtitle="Total active projects">
                            <span class="text-3xl font-bold">12</span>
                        </x-gsmcss.card>
                        <x-gsmcss.card title="Components" subtitle="Used this month">
                            <span class="text-3xl font-bold">1,248</span>
                        </x-gsmcss.card>
                        <x-gsmcss.card title="Storage" subtitle="Assets and configs">
                            <span class="text-3xl font-bold">84%</span>
                        </x-gsmcss.card>
                    </div>

                    <x-gsmcss.card title="Recent Activity">
                        <div class="space-y-4">
                            @foreach([1, 2, 3] as $i)
                                <div class="flex items-center justify-between py-2 border-b border-gsm-50 last:border-0">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-gsm-100 flex items-center justify-center">
                                            <span class="text-gsm-600">P</span>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium">Project Alpha Update</p>
                                            <p class="text-xs text-gsm-500">2 hours ago</p>
                                        </div>
                                    </div>
                                    <x-gsmcss.badge variant="success">Completed</x-gsmcss.badge>
                                </div>
                            @endforeach
                        </div>
                    </x-gsmcss.card>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

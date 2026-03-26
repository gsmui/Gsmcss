<div class="py-12 bg-gsm-50 dark:bg-gsm-950 min-h-screen">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-2xl font-bold text-gsm-900 dark:text-white">Admin Dashboard</h1>
            <div class="flex gap-2">
                <x-gsmcss.button variant="outline">Export Logs</x-gsmcss.button>
                <x-gsmcss.button>System Status</x-gsmcss.button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <x-gsmcss.card class="bg-gsm-primary text-white">
                <p class="text-gsm-100 text-sm">Total Users</p>
                <h2 class="text-3xl font-bold">45,284</h2>
                <p class="text-xs mt-2">+12% from last month</p>
            </x-gsmcss.card>
            <x-gsmcss.card>
                <p class="text-gsm-500 text-sm">Active Premium</p>
                <h2 class="text-3xl font-bold">12,402</h2>
            </x-gsmcss.card>
            <x-gsmcss.card>
                <p class="text-gsm-500 text-sm">Monthly Revenue</p>
                <h2 class="text-3xl font-bold">24,500</h2>
            </x-gsmcss.card>
            <x-gsmcss.card>
                <p class="text-gsm-500 text-sm">System Load</p>
                <h2 class="text-3xl font-bold">14%</h2>
            </x-gsmcss.card>
        </div>

        <x-gsmcss.card title="Manage Users">
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="border-b border-gsm-100 dark:border-gsm-800">
                            <th class="py-3 px-4 text-sm font-semibold text-gsm-900 dark:text-white">User</th>
                            <th class="py-3 px-4 text-sm font-semibold text-gsm-900 dark:text-white">Status</th>
                            <th class="py-3 px-4 text-sm font-semibold text-gsm-900 dark:text-white">Plan</th>
                            <th class="py-3 px-4 text-sm font-semibold text-gsm-900 dark:text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(['John Doe', 'Jane Smith', 'Alex Johnson'] as $user)
                            <tr class="border-b border-gsm-50 dark:border-gsm-900 last:border-0">
                                <td class="py-3 px-4 text-sm">{{ $user }}</td>
                                <td class="py-3 px-4">
                                    <x-gsmcss.badge variant="success">Active</x-gsmcss.badge>
                                </td>
                                <td class="py-3 px-4 text-sm">Premium</td>
                                <td class="py-3 px-4">
                                    <x-gsmcss.button variant="ghost" size="sm">Edit</x-gsmcss.button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </x-gsmcss.card>
    </div>
</div>

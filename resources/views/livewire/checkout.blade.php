<div class="py-12">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <x-gsmcss.card title="Upgrade to gsmcss Pro" subtitle="Complete your payment to unlock 100,000+ components.">
            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <x-gsmcss.input label="Full Name" placeholder="John Doe" />
                    <x-gsmcss.input label="Email Address" type="email" placeholder="john@example.com" />
                </div>

                <x-gsmcss.card class="bg-gsm-50 border-gsm-200">
                    <h4 class="text-sm font-semibold mb-4">Payment Method</h4>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3 p-3 border border-gsm-primary bg-white rounded-gsm-md">
                            <div class="w-4 h-4 rounded-full border-4 border-gsm-primary"></div>
                            <span class="text-sm font-medium">Credit Card</span>
                        </div>
                        <x-gsmcss.input label="Card Number" placeholder="**** **** **** 1234" />
                        <div class="grid grid-cols-2 gap-4">
                            <x-gsmcss.input label="Expiry" placeholder="MM/YY" />
                            <x-gsmcss.input label="CVC" placeholder="***" />
                        </div>
                    </div>
                </x-gsmcss.card>

                <div class="flex items-center justify-between pt-4">
                    <div>
                        <p class="text-sm text-gsm-500">Total Due</p>
                        <p class="text-2xl font-bold">9.00 <span class="text-sm font-normal text-gsm-400">/ one-time</span></p>
                    </div>
                    <x-gsmcss.button size="lg" class="px-12">Pay Now</x-gsmcss.button>
                </div>
            </form>
        </x-gsmcss.card>
    </div>
</div>

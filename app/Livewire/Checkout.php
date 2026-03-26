<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class Checkout extends Component
{
    #[Validate('required|min:3')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required|min:16')]
    public $cardNumber = '';

    public function submit()
    {
        $this->validate();

        session()->flash('success', 'Payment successful! gsmcss Pro activated.');
        return redirect()->to('/dashboard');
    }

    public function render()
    {
        return view('livewire.checkout');
    }
}

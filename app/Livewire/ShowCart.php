<?php

namespace App\Livewire;

use App\Factories\CartFactory;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ShowCart extends Component
{

    #[Computed]
    public function items()
    {
        return CartFactory::make()->items()->with(['variant', 'product'])->get();
    }

    public function render()
    {
        return view('livewire.show-cart');
    }
}

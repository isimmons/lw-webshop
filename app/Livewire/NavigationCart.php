<?php

namespace App\Livewire;

use Livewire\Attributes\{ Computed, On };
use App\Factories\CartFactory;
use Livewire\Component;

class NavigationCart extends Component
{
    #[Computed]
    #[On('productAddedToCart')]
    public function count()
    {
        return CartFactory::make()->items()->sum('quantity');
    }

    public function render()
    {
        return view('livewire.navigation-cart');
    }
}

<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\Product;

class ShowProduct extends Component
{
    public Product $product;
    public $variant;

    public $rules = [
        'variant' => ['required', 'exists:App\Models\ProductVariant,id'],
    ];

    public function addToCart(): void
    {
        $this->validate();

    }

    public function render(): View
    {
        return view('livewire.product');
    }
}

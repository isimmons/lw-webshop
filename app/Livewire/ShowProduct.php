<?php

namespace App\Livewire;

use App\Actions\Webshop\AddProductVariantToCart;
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

    public function addToCart(AddProductVariantToCart $action): void
    {
        $this->validate();

        $action->add(variantId: $this->variant);
    }

    public function render(): View
    {
        return view('livewire.product');
    }
}

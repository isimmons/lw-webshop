<?php

namespace App\Actions\Webshop;

use App\Factories\CartFactory;

class AddProductVariantToCart
{
    public function add($variantId): void
    {
        CartFactory::make()->items()->create([
            'product_variant_id' => $variantId,
            'quantity' => 1,
        ]);
    }
}

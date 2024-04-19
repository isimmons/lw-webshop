<?php

namespace App\Livewire;

use App\Factories\CartFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ShowCart extends Component
{

    #[Computed]
    public function items(): Collection
    {
        return CartFactory::make()->items()->with(['variant', 'product'])->get();
    }

    public function increment($itemId): void
    {
        CartFactory::make()->items()->find($itemId)?->increment('quantity');
        $this->dispatch('quantity.incremented');
    }

    public function decrement($itemId): void
    {
        $item = CartFactory::make()->items()->find($itemId);

        if($item && $item->quantity > 1)
        {
            $item->decrement('quantity');
            $this->dispatch('quantity.decremented');
        }
    }

    public function deleteItem($itemId): void
    {
        CartFactory::make()->items()->where('id', $itemId)->delete();

        $this->dispatch('product.deleted');
    }

    public function render(): View
    {
        return view('livewire.show-cart');
    }
}

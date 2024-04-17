<?php

namespace App\Livewire;

use App\Models\Product;
use Attribute;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

class StoreFront extends Component
{
    #[Computed]
    public function products(): Collection|array
    {
        return Product::with(['images', 'featured_image'])->get();
    }

    public function render(): View
    {
        return view('livewire.store-front');
    }
}

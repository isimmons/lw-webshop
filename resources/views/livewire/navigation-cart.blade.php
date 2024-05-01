<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link wire:navigate href="{{ route('cart.show') }}" :active="$this->isActive">
        {{ __('Cart') }} ({{ $this->count() }})
    </x-nav-link>
</div>

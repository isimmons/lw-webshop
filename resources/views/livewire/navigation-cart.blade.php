<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link href="{{ route('cart.show') }}" :active="request()->routeIs('home')">
        {{ __('Cart') }} ({{ $this->count() }})
    </x-nav-link>
</div>

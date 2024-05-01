<div class="mt-12">
    <div class="flex justify-between">
        <h1 class="text-lg font-medium dark:text-slate-300">Our Products</h1>
        <div>
            <x-input wire:model.live.debounce="searchQuery" type="text" placeholder="Search Products" />
        </div>
    </div>
    <div class="grid grid-cols-4 gap-4 mt-12">
        @foreach($this->products as $product)
            <x-panel class="relative">
                <a wire:navigate href="{{ route('product.show', $product) }}" class="absolute inset-0 size-full"></a>
                <img src="{{ $product->featured_image->path }}" alt="Picture of {{ $product->name }}">
                <h2 class="font-medium text-lg text-slate-800 ">
                    {{ $product->name }}
                </h2>
                <span class=" text-sm text-slate-600 dark:text-slate-400">{{ $product->price }}</span>
            </x-panel>
        @endforeach
    </div>
    <div class="mt-6">
        {{ $this->products()->links() }}
    </div>
</div>

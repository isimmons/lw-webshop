<div class="grid grid-cols-4 gap-4 mt-12">
    @foreach($this->products as $product)
        <x-panel>
            <a href="{{ route('product.show', $product) }}" class="absolute inset-0 size-full"></a>
            <img src="{{ $product->featured_image->path }}" alt="Picture of {{ $product->name }}">
            <h2 class="font-medium text-lg text-slate-800 ">
                {{ $product->name }}
            </h2>
            <span class=" text-sm text-slate-600 dark:text-slate-400">{{ $product->price }}</span>
        </x-panel>
    @endforeach
</div>

<div class="grid grid-cols-4 gap-4 mt-12">
    @foreach($this->products as $product)
        <div>
            <img src="{{ $product->featured_image->path }}" alt="Picture of {{ $product->name }}">
            <h2 class="font-medium text-lg text-slate-900 dark:text-slate-200">
                {{ $product->name }}
            </h2>
            <span class=" text-sm text-slate-600 dark:text-slate-400">{{ $product->price }}</span>
        </div>
    @endforeach
</div>

<div class="grid grid-cols-2 gap-10 py-12">
    <div class="space-y-4">
        <div class="bg-white p-5 rounded-lg shadow dark:shadow-slate-200">
            <img src="{{ $this->product->featured_image->path }}" alt="Picture of {{ $this->product->name }}">
        </div>

        <div class="grid grid-cols-4 gap-4">
            @foreach($this->product->images as $image)
                <div class="rounded bg-white p-2 shadow dark:shadow-slate-200">
                    <img src="{{ $image->path }}" alt="Picture of {{ $this->product->name }}">
                </div>
            @endforeach
        </div>
    </div>
    <div>
        <h1 class="text-3xl font-medium text-slate-900 dark:text-slate-300">
            {{ $this->product->name }}
        </h1>
        <div class="text-xl text-slate-700 dark:text-slate-400">
            {{ $this->product->price }}
        </div>
        <div class="mt-4 text-slate-900 dark:text-slate-300">
            {{ $this->product->description }}
        </div>
        <div class="mt-4 space-y-4">
            <select name="" id="" class="block w-full rounded-md border-0 py-1.15 pl-3 pr-10 text-slate-800 dark:bg-slate-200">
                @foreach($this->product->variants as $variant)
                    <option value="{{ $variant->id }}">{{ $variant->size }} / {{ $variant->color }}</option>
                @endforeach
            </select>

            <x-button type="button">Add To Cart</x-button>
        </div>
    </div>
</div>

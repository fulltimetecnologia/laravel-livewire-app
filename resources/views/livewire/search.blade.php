<div>
    <div>
        <input type="text" wire:model.live="searchTerm" placeholder="Search products...">

        <select wire:model.live="selectedCategories" multiple>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <button wire:click="clearCategories">Clear Categories</button>

        <select wire:model.live="selectedBrands" multiple>
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>

        <button wire:click="clearBrands">Clear Brands</button>

        <button wire:click="clearFilters">Clear All</button>
    </div>

    <div>
        @foreach($products as $product)
            <h1>{{ $product->name }}</h1>
            <p>Category: {{ $product->category->name }}</p>
            <p>Brand: {{ $product->brand->name }}</p>
            <p>Price: ${{ $product->price }}</p>
            <br>
        @endforeach
    </div>
</div>

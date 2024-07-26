<div>
    <div>
        <input type="text" wire:model.live="searchTerm" placeholder="Search products...">
        <select wire:model.live="selectedCategory">
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <select wire:model.live="selectedBrand">
            <option value="">Select Brand</option>
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>
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

<div>
    <div id="filter" class="flex gap-4">
        <label class="input input-bordered flex items-center gap-2">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 16 16"
              fill="currentColor"
              class="h-4 w-4 opacity-70">
              <path
                fill-rule="evenodd"
                d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                clip-rule="evenodd" />
            </svg>
            <input wire:model.live="searchTerm" type="text" class="grow" placeholder="Search" />
        </label>
        <x-dropdown label="Bread {{count($selectedBrands) > 0 ? '(' .count($selectedBrands) . ')' : '' }}" class="input input-bordered">
            <x-menu-item title="Clear" wire:click="clearBrands" />
            <x-menu-separator />
            @foreach ($brands as $brand)
            <x-menu-item @click.stop="">
                <x-checkbox wire:model.live="selectedBrands" label="{{ $brand->name }}" value="{{ $brand->id }}" />
            </x-menu-item>
            @endforeach
        </x-dropdown>
        <x-dropdown label="Category {{count($selectedCategories) > 0 ? '(' .count($selectedCategories) . ')' : '' }}" class="input input-bordered">
            <x-menu-item title="Clear" wire:click="clearCategories" />
            <x-menu-separator />
            @foreach ($categories as $category)
            <x-menu-item @click.stop="">
                <x-checkbox wire:model.live="selectedCategories" label="{{ $category->name }}" value="{{ $category->id }}" />
            </x-menu-item>
            @endforeach
        </x-dropdown>
        <x-button wire:click="clearFilters" label="Clear" icon="o-x-mark" />
    </div>
    <hr class="my-5">
    <div id="content" class="grid grid-cols-4 gap-4">
        @foreach ($products as $key => $product)
        <x-card title="$ {{ $product->price }}">
            {{ $product->name }}
            <p>Brand: {{ $product->brand->name }}</p>
            <p>Category: {{ $product->category->name }}</p>
            <x-slot:figure>
                <img src="https://picsum.photos/500/350?random={{ $key }}" />
            </x-slot:figure>
            <x-slot:menu>
                <x-button icon="o-heart" class="btn-circle btn-sm" />
            </x-slot:menu>
        </x-card>
        @endforeach
    </div>
</div>

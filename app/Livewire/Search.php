<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

class Search extends Component
{
    public function render()
    {
        $brands = Brand::get();
        $categories = Category::get();
        $products = Product::get();

        return view('livewire.search')->with([
            'brands' => $brands,
            'products' => $products,
            'categories' => $categories
        ]);
    }
}

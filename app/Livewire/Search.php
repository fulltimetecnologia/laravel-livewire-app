<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

class Search extends Component
{
    public $searchTerm = '';
    public $selectedCategory = null;
    public $selectedBrand = null;
    protected $updatesQueryString = ['searchTerm', 'selectedCategory', 'selectedBrand'];

    public function render()
    {
        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::query()
            ->when($this->searchTerm, function ($query) {
                $query->where('name', 'like', '%' . $this->searchTerm . '%');
            })
            ->when($this->selectedCategory, function ($query) {
                $query->where('category_id', $this->selectedCategory);
            })
            ->when($this->selectedBrand, function ($query) {
                $query->where('brand_id', $this->selectedBrand);
            })
            ->get();

        return view('livewire.search', [
            'brands' => $brands,
            'categories' => $categories,
            'products' => $products
        ]);
    }
}

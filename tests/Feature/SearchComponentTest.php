<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Livewire\Livewire;
use App\Livewire\Search;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use PHPUnit\Framework\Attributes\Test;

class SearchComponentTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_searches_by_product_name()
    {
        $productA = Product::factory()->create(['name' => 'ProductA']);
        $productB = Product::factory()->create(['name' => 'ProductB']);

        Livewire::test(Search::class)
            ->set('searchTerm', 'ProductA')
            ->assertSee($productA->name)
            ->assertDontSee($productB->name);
    }

    #[Test]
    public function it_searches_by_category()
    {
        $categoryA = Category::factory()->create(['name' => 'CategoryA']);
        $categoryB = Category::factory()->create(['name' => 'CategoryB']);
        $productA = Product::factory()->create(['category_id' => $categoryA->id]);
        $productB = Product::factory()->create(['category_id' => $categoryB->id]);

        Livewire::test(Search::class)
            ->set('selectedCategories', [$categoryA->id])
            ->assertSee($productA->name)
            ->assertDontSee($productB->name);
    }

    #[Test]
    public function it_searches_by_brand()
    {
        $brandA = Brand::factory()->create(['name' => 'BrandA']);
        $brandB = Brand::factory()->create(['name' => 'BrandB']);
        $productA = Product::factory()->create(['brand_id' => $brandA->id]);
        $productB = Product::factory()->create(['brand_id' => $brandB->id]);

        Livewire::test(Search::class)
            ->set('selectedBrands', [$brandA->id])
            ->assertSee($productA->name)
            ->assertDontSee($productB->name);
    }

    #[Test]
    public function it_does_not_show_products_from_other_brands()
    {
        $brandA = Brand::factory()->create(['name' => 'BrandA']);
        $brandB = Brand::factory()->create(['name' => 'BrandB']);
        $productA = Product::factory()->create(['brand_id' => $brandA->id]);
        $productB = Product::factory()->create(['brand_id' => $brandB->id]);

        Livewire::test(Search::class)
            ->set('selectedBrands', [$brandA->id])
            ->assertSee($productA->name)
            ->assertDontSee($productB->name);

        Livewire::test(Search::class)
            ->set('selectedBrands', [$brandB->id])
            ->assertSee($productB->name)
            ->assertDontSee($productA->name);
    }


    #[Test]
    public function it_searches_by_name_category_and_brand()
    {
        $category = Category::factory()->create(['name' => 'Category']);
        $brand = Brand::factory()->create(['name' => 'Brand']);
        $product = Product::factory()->create([
            'name' => 'Product',
            'category_id' => $category->id,
            'brand_id' => $brand->id,
        ]);

        Livewire::test(Search::class)
            ->set('searchTerm', 'Product')
            ->set('selectedCategories', [$category->id])
            ->set('selectedBrands', [$brand->id])
            ->assertSee($product->name);
    }

    #[Test]
    public function it_clears_filters()
    {
        $category = Category::factory()->create(['name' => 'Category']);
        $brand = Brand::factory()->create(['name' => 'Brand']);
        Product::factory()->create([
            'name' => 'Product',
            'category_id' => $category->id,
            'brand_id' => $brand->id,
        ]);

        Livewire::test(Search::class)
            ->set('searchTerm', 'Product')
            ->set('selectedCategories', [$category->id])
            ->set('selectedBrands', [$brand->id])
            ->call('clearFilters')
            ->assertSet('searchTerm', '')
            ->assertSet('selectedCategories', [])
            ->assertSet('selectedBrands', []);
    }
}

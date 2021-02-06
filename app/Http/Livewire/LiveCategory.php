<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Category;
use App\Product;

class LiveCategory extends Component
{
    public $category;
    public $subCategories;
    public $search = '';

    public function mount($id)
    {
        $category = Category::find($id);
        $this->category = $category;

        $subCategories = Category::where('parent_id', $id)->get();
        $this->subCategories    =   $subCategories;
    }

    public function render()
    {
        $products = !empty($this->search) ? Product::where('name', 'like', '%'.$this->search.'%')->where('category_id', $this->category->id)->get() : Product::where('category_id', $this->category->id)->get();

        return view('livewire.live-category', compact('category','products', 'subCategories'));
    }
}

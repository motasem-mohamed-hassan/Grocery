<?php

namespace App\Http\Livewire;
use App\Category;
use App\Product;
use Livewire\Component;

class LiveHome extends Component
{

    public $search = '';

    public function render()
    {
        $products = !empty($this->search) ? Product::where('name', 'like', '%'.$this->search.'%')
        ->where('status', '1')
        ->get() : Product::where('status', '1')->get();

        $categories = Category::where('parent_id', null)->get();
        // $subCategories = Category::where('parent_id')

        return view('livewire.live-home', compact('categories', 'products'));
    }

}

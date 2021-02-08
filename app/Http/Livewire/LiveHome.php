<?php

namespace App\Http\Livewire;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Livewire\Component;

class LiveHome extends Component
{

    public $search = '';
    public $productss;

    public function mount(Request $request)
    {
        if($request->min && $request->max){
            $products = Product::whereBetween('price', [$request->min, $request->max])->get();
            $this->productss = $products;
        }
    }

    public function render()
    {
        if(isset($this->productss)){
            $products = $this->productss;
        }else{
            $products = !empty($this->search) ? Product::where('name', 'like', '%'.$this->search.'%')
            ->where('status', '1')
            ->get() : Product::where('status', '1')->get();
        }

        $categories = Category::where('parent_id', null)->get();


        return view('livewire.live-home', compact('categories', 'products'));
    }

}

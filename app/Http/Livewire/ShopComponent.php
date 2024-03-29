<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Livewire\WithPagination;
class ShopComponent extends Component
{
    public $sorting;
    public $pagesize;
    public $search;
    public $product_cat;
    public $product_cat_id;

    public function mount()
    {
        $this->sorting ="default";
        $this->pagesize=12;
        $this->fill(request()->only('search','product','product_cat','product_cat_id'));

    }

    public function store($product_id,$product_name,$product_price)
    {
       Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
       session()->flash('success_message','Item added in Cart');
       return redirect()->route('product.cart');

    }
    use WithPagination;
    public function render()
    {
        if ($this->sorting=='date')
        {
            $products =Product::where('name','like','%'.$this->search.'%')->where('category_id',$this->product_cat_id)->orderBy('created_at'.'DESC')->paginate($this->pagesize);
        }
        elseif ($this->sorting=="price")
        {
            $products =Product::where('name','like','%'.$this->search.'%')->where('category_id',$this->product_cat_id)->orderBy('created_at'.'ASC')->paginate($this->pagesize);

        }
        elseif ($this->sorting==="price-desc")
        {
            $products =Product::where('name','like','%'.$this->search.'%')->where('category_id',$this->product_cat_id)->orderBy('created_at'.'DESC')->paginate($this->pagesize);
        }
        else
        {
            $products = Product::paginate($this->pagesize);
        }
        $categories= Category::all();

        return view('livewire.shop-component',['products'=>$products,'categories'=>$categories])->layout("layouts.base");
    }
}

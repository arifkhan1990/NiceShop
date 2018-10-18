<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ShopController extends Controller
{
    public function index(){
        $products = Product::inRandomOrder()->take(12)->get();
        return view('shop',['products'=>$products]);
    }
    
    public function show($slug){
        $product = Product::where('slug',$slug)->firstOrFail();
        $mightAlsoLike = Product::Where('slug', '!=', $slug)->inRandomOrder()->take(4)->get();
        return view('product')->with(['product'=>$product,'mightAlsoLike'=>$mightAlsoLike]);
    }
}

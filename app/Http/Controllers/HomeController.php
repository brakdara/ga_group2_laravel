<?php

namespace App\Http\Controllers;

use App\Models\AddToCart;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
class HomeController extends Controller
{
    public function redirect(){
        $usertype=Auth::user()->usertype;
        
        if($usertype=='1'){
        
        return view('back_end.home');
        
        }else if ($usertype==null){
            return $this->index();
        }else{
            return $this->index();
        }
    }

    public function index(){
        $products = Product::all();
        return view('front_end.userpage',compact('products'));
    }
    
    public function shop(){
        $products = Product::all();
        $category= Category::all();
        return view('front_end.shop',compact('category'),compact('products'));
    }
    
    public function cart(){
        $products = Product::all();
        $category= Category::all();
        return view('front_end.cart',compact('category'),compact('products'));
    }

    public function product_detail($id){
        $product = product::find($id);
        return view('front_end.product_detail', compact('product'));
    }

    public function add_cart(Request $request, $id){
        if(Auth::id()){

            $user=Auth::user();
            $product = product::find($id);
            $cart = new AddToCart;
            
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;

            $cart->pro_name = $product->name;
            $cart->price = $product->price;
            $cart->category = $product->category;
            $cart->detail = $product->detail;
            $cart->image = $product->image;

            $cart->quantity = $request->quantity;

            $cart->save();

            return redirect()->back();

        }else{
            return redirect('login');
        }
    }
}

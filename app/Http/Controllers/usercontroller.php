<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Product;
use\App\Cart;
use\App\Order;
use Auth;

use Illuminate\Support\Facades\Storage;
use Session;
//use Illuminate\Support\Facades\Session;


class usercontroller extends Controller
{
    public function index()
    {

        $products = Product::all();
        return view('user.index')->with('products', $products);
    }



    public function add(Request $request,  $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
       // dd($request->session()->get('cart'));
        return redirect()->route('user');

 
    }
    public function Cart(Request $request){
        if (!Session::has('cart')){
            return view('user.shoppingCart');
        }
           $oldCart = Session::get('cart');
           $cart = new Cart($oldCart);
          // return view('user.shoppingCart', ['products' => $cart->items, 'totalprice' => $cart->totalprice]);


         $order = new Order();

         $order->cart = serialize($cart);
       //  $order->name = $request->input('name');

         Auth::user()->orders()->save($order);

         return view('user.shoppingCart');//, 
         //['products' => $cart->items, 'totalprice' => $cart->totalprice]);
    }


    public function view()
    {
        $orders = Order::all();
        return view('user.shoppingCart')->with('orders', $orders);
    }

   // $order = new Order();
   // $order->cart
   public function delete($id)
   {
       $orders = Order::findorFail($id);
       $orders->delete();

      return redirect('/shoppingCart')->with('Status', 'Client is Deleted');
   }

  

  }

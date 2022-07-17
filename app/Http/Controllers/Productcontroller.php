<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Storage;


class Productcontroller extends Controller
{
    public function index()
    {
return view('product');
    }

    public function store(Request $request)
    {
        $product = new product();
        $product->product = $request->input('id');
        $product->product = $request->input('product');
        $product->price = $request->input('price');


       if ($request->hasfile('image')){
           $file = $request->file('image');
           $extension = $file->getClientoriginalExtension();
        $filename = time(). '.' . $extension;

           //$filename = $file->getClientoriginalName();
          // $filename = time(). '.' . $filename;
        
         //  $file->move('storage/product/'. $filename);

         $path = $file->storeAs('public', $filename);
          $product->image = $filename;
           
         
        

          //  Product::create([
         //       'filename' => $path,
         //   ]);

       } else {
           return $request;
           $product->image = '';
       }
        
       $product->save();

      // return view('product')->with('product', $product);

       return redirect()->route('displayprod')->with('success','client Add Successfully');

    }

    public function display()
    {
        $products = Product::all();
        return view('productview')->with('products', $products);
    }

    public function edit($id)
    {
        $products = Product::find($id);
        return view('productupdate')->with('products', $products);
    }

    public function update(Request $request,$id)
    {
        $products = Product::find($id);


        $products->product = $request->input('product');
        $products->price = $request->input('price');


       if ($request->hasfile('image')){
           $file = $request->file('image');
           $extension = $file->getClientoriginalExtension();
        $filename = time(). '.' . $extension;
         $path = $file->storeAs('public', $filename);
          $products->image = $filename;

       } else {
           return $request;
           $products->image = '';
       }
        
       $products->save();
       return redirect()->route('displayprod')->with('success','client Add Successfully');

    }

    
}

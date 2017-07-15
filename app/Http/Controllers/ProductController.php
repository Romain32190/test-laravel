<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  public function getAllProducts(){
    $products = DB::table('products')->get();
    return view('products', ['products' => $products]);
  }
  public function getProduct($id){
    $product = DB::table('products')->where('id', $id)->get();
    return view('product_detail', ['product' => $product]);
  }
  public function addProduct(Request $request){
    $name = $request->input('name');
    $quantity = $request->input('quantity');
    $price = $request->input('price');
    DB::table('products')->insert([
      'name' => $name,
      'quantity' => $quantity,
      'price' => $price,
    ]);
    return redirect('/products');
  }
  public function deleteProduct($id){
    DB::table('products')->where('id', $id)->delete();
    return redirect('/products');
  }
  public function updateProduct(Request $request, $id){
    $name = $request->input('name');
    $quantity = $request->input('quantity');
    $price = $request->input('price');
    DB::table('products')->where('id', $id)->update(['name' => $name, 'quantity' => $quantity, 'price' => $price]);
    return redirect('/products');
  }
}

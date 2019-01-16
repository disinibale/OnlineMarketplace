<?php

namespace App\Http\Controllers;

use Session;
use Auth;

use App\ProductCategory;
use App\Product;
use App\Cart;
use App\Wishlist;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $products = Product::orderBy('created_at', 'desc')->get();

    return view('manage.products.index', compact('products'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $productCategories = ProductCategory::orderBy('name')->get();

    return view('manage.products.create', compact('productCategories'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
      'name'        => 'required|min:2|max:255',
      'price'       => 'required',
      'description' => 'required',
      'category'    => 'required',
      'condition'   => 'required',
      'stock'       => 'required'
    ]);

    $slug = str_replace(' ', '-', $request->name);

    $product = new Product;
    $product->name = $request->name;
    $product->slug = $slug;
    $product->price = $request->price;
    $product->description = $request->description;
    $product->category_id = $request->category;
    $product->condition = $request->condition;
    $product->stock = $request->stock;
    $product->save();

    Session::flash('success', 'Produk berhasil ditambahkan.');

    return redirect()->route('products.show', $product->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function show(Product $product)
  {
    return view('manage.products.show', compact('product'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function edit(Product $product)
  {
    $productCategories = ProductCategory::orderBy('name')->get();

    return view('manage.products.edit', compact('product', 'productCategories'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Product $product)
  {
    $this->validate($request, [
      'name'        => 'required|min:2|max:255',
      'price'       => 'required',
      'description' => 'required',
      'category'    => 'required',
      'condition'   => 'required',
      'stock'       => 'required'
    ]);

    $slug = str_replace(' ', '-', $request->name);

    $product->name = $request->name;
    $product->slug = $slug;
    $product->price = $request->price;
    $product->description = $request->description;
    $product->category_id = $request->category;
    $product->condition = $request->condition;
    $product->stock = $request->stock;
    $product->save();

    Session::flash('success', 'Produk berhasil diubah.');

    return redirect()->route('products.show', $product->id);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Product  $product
   * @return \Illuminate\Http\Response
   */
  public function destroy(Product $product)
  {
    $product->delete();

    Session::flash('success', 'Produk Berhasil dihapus.');

    return redirect()->route('products.index');
  }

  // Search
  public function search(Request $request)
  {
    $keyword = $request->keyword;
    $products = Product::search($keyword)->paginate(20);

    return view('search.index', compact('keyword', 'products'));
  }

  // Product Operation
  public function addToCart(Request $request)
  {
    $data = new Cart();
    $data->id_user = $request->id_user;
    $data->product_id = $request->product_id;
    $data->amount_of_item = $request->amount_of_item;
    $data->save();

    return response()->json($data);
  }

  public function addToWishlist(Request $request)
  {
    $data = new Wishlist();
    $data->id_user = $request->id_user;
    $data->product_id = $request->product_id;
    $data->save();

    return response()->json($data);
  }
}

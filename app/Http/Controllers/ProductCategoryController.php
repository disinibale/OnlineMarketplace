<?php

namespace App\Http\Controllers;

use Session;
use App\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $productCategories = ProductCategory::all();

    return view('manage.productCategories.index', compact('productCategories'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('manage.productCategories.create');
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
      'name' => 'required|min:2|max:255|unique:product_categories'
    ]);

    $productCategory = new ProductCategory;
    $productCategory->name = $request->name;
    $productCategory->save();

    Session::flash('success', 'Kategori berhasil ditambahkan.');

    return redirect()->route('productCategories.show', $productCategory->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\ProductCategory  $productCategory
   * @return \Illuminate\Http\Response
   */
  public function show(ProductCategory $productCategory)
  {
    return view('manage.productCategories.show', compact('productCategory'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\ProductCategory  $productCategory
   * @return \Illuminate\Http\Response
   */
  public function edit(ProductCategory $productCategory)
  {
    return view('manage.productCategories.edit', compact('productCategory'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\ProductCategory  $productCategory
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, ProductCategory $productCategory)
  {
    $this->validate($request, [
      'name' => 'required|min:2|max:255|unique:product_categories,id'
    ]);

    $productCategory->name = $request->name;
    $productCategory->save();

    Session::flash('success', 'Kategori berhasil diubah.');

    return redirect()->route('productCategories.show', $productCategory->id);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\ProductCategory  $productCategory
   * @return \Illuminate\Http\Response
   */
  public function destroy(ProductCategory $productCategory)
  {
    $productCategory->delete();

    Session::flash('success', 'Kategori Berhasil dihapus.');

    return redirect()->route('productCategories.index');
  }
}
@extends('layouts.master')

@section('title', 'Produk')

@section('content')
	<div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12">
				<div class="card">
					<div class="row">
						<div class="col">
							<h4 class="h4"><b>Product Data</b></h4>
						</div>
						<div class="col">
							<button id="btnAdd" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalAdd">Add Item</button>
						</div>
					</div>
				  <div class="card-body p-0">
				    <table class="table mb-3 table-bordered" id="products-table">
				      <thead>
				        <tr>
				          <th class="text-center border-top-0">#</th>
				          <th class="text-center border-top-0">Nama</th>
				          <th class="text-center border-top-0">Harga</th>
				          <th class="text-center border-top-0">Kategori</th>
				          <th class="text-center border-top-0">Kondisi</th>
				          <th class="text-center border-top-0">Stock</th>
				          <th class="text-center border-top-0">Tanggal Ditambahkan</th>
				          <th class="text-center border-top-0">Pilihan</th>
				        </tr>
				      </thead>
				      <tbody>
				        @foreach ($products as $product)
				          <tr>
				            <th>{{ $loop->iteration }}</th>
				            <td>
				              <span title="{{ $product->name }}" class="text-dark">
				                {{ substr(strip_tags($product->name), 0, 10) }}
				                {{ strlen(strip_tags($product->name)) > 10 ? '...' : '' }}
				              </span>
				            </td>
				            <td class="text-dark">{{ $product->price }}</td>
				            <td class="text-dark">{{ is_null($product->category_id) ? 'Uncategorized' : $product->category->name }}</td>
				            <td class="text-dark">{{ $product->condition }}</td>
				            <td class="text-dark">{{ $product->stock }}</td>
				            <td class="text-dark">{{ $product->created_at->toFormattedDateString() }}</td>
				            <td>
				              <div class="d-flex justify-content-center">
<<<<<<< HEAD
				                <button class="btnShow btn btn-primary"
				                				data-name="{{ $product->name }}"
				                				data-stock="{{ $product->stock }}"
				                				data-views="{{ $product->views }}"
				                				data-category="{{ is_null($product->category_id) ? 'Uncategorized' : $product->category->name }}"
				                				data-condition="{{ $product->condition }}"
				                				data-price="{{ $product->price }}"
				                				data-description="{{ $product->description }}">Show</button>
				                <button class="btnEdit btn btn-warning mx-1"
				                				data-id="{{ $product->id }}"
				                				data-name="{{ $product->name }}"
				                				data-stock="{{ $product->stock }}"
				                				data-views="{{ $product->views }}"
				                				data-category="{{ $product->category_id }}"
				                				data-condition="{{ $product->condition }}"
				                				data-price="{{ $product->price }}"
				                				data-description="{{ $product->description }}">Edit</button>
				                <button class="btnDelete btn btn-danger" data-id="{{ $product->id }}">Delete</button>
=======
				                <button class="btnShow btn btn-primary" data-toggle="modal" data-target="#modalShow" 
				                				data-name="{{ $product->name }}" 
				                				data-category="{{ is_null($product->category_id) ? 'Uncategorized' : $product->category->name }}" 
				                				data-condition="{{ $product->condition }}" 
				                				data-price="{{ $product->price }}" 
				                				data-weight="{{ $product->weight }}" 
				                				data-stock="{{ $product->stock }}" 
				                				data-views="{{ $product->views }}" 
				                				data-description="{{ $product->description }}" 
				                				data-thumbnail="{{ $product->thumbnail }}" 
				                				data-images="{{ $product->images }}">Show</button>
				                <button class="btnEdit btn btn-warning mx-1" data-toggle="modal" data-target="#modalEdit" 
				                				data-id="{{ $product->id }}" 
				                				data-name="{{ $product->name }}" 
				                				data-category="{{ $product->category_id }}" 
				                				data-condition="{{ $product->condition }}" 
				                				data-price="{{ $product->price }}" 
				                				data-weight="{{ $product->weight }}" 
				                				data-stock="{{ $product->stock }}" 
				                				data-views="{{ $product->views }}" 
				                				data-description="{{ $product->description }}" 
				                				data-thumbnail="{{ $product->thumbnail }}" 
				                				data-images="{{ $product->images }}">Edit</button>
				                <button class="btnDelete btn btn-danger" data-toggle="modal" data-target="#modalDelete"  data-id="{{ $product->id }}">Delete</button>
>>>>>>> 89f29a75eef3ef49c3c8ed4d85a64bc59285f2a6
				              </div>
				            </td>
				          </tr>
				        @endforeach
				      </tbody>
				    </table>
				  </div>

				</div>
				@include('_extends.product-add')
				@include('_extends.product-show')
				@include('_extends.product-edit')
				@include('_extends.delete')
				@include('_extends.product-cropper')
      </div>
    </div>
  </div>
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/main/cropper.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/product-image.css') }}">
@endsection

@section('scripts')
	<script src="{{ asset('js/main/cropper.min.js') }}"></script>
  <script src="{{ asset('js/main/jquery-cropper.min.js') }}"></script>
  <script src="{{ asset('js/productManagement.js') }}"></script>
	{{-- <script>
    $(document).ready(function () {
    	// Modal
      var modal = new tingle.modal();

      // Add Product
      $('#btnAdd').click(function() {
        var content = $('#modalAdd').html();
        modal.setContent(content);

        modal.open();
      });

      // Show Product
      $('.btnShow').click(function() {
        var content = $('#modalShow').html();
        modal.setContent(content);

        $('#name').text($(this).data('name'));
        $('#stock').text($(this).data('stock'));
        $('#views').text($(this).data('views'));
        $('#category').text($(this).data('category'));
        $('#condition').text($(this).data('condition'));
        $('#price').text($(this).data('price'));
        $('#description').text($(this).data('description'));

        modal.open();
      });

      // Edit Product
      $('.btnEdit').click(function() {
        var content = $('#modalEdit').html();
        modal.setContent(content);

        $('#formEdit').attr('action', '/manage/products/' + $(this).data('id'));
        $('#name').val($(this).data('name'));
        $('#stock').val($(this).data('stock'));
        $('#views').val($(this).data('views'));
        $('#category').val($(this).data('category'));
        $('#condition').val($(this).data('condition'));
        $('#price').val($(this).data('price'));
        $('#description').val($(this).data('description'));

        modal.open();
      });

      // Delete Product
      $('.btnDelete').click(function() {
        var content = $('#modalDelete').html();
        modal.setContent(content);

        $('#formDelete').attr('action', '/manage/products/' + $(this).data('id'));

        modal.open();
      });

      // Close Modal
      // $('#btnClose').click(function() {
      //   modal.close();
      // });
      
      // Datatables
      $('#products-table').DataTable();
    });
<<<<<<< HEAD
  </script>
@endsection
=======
  </script> --}}
@endsection
>>>>>>> 89f29a75eef3ef49c3c8ed4d85a64bc59285f2a6

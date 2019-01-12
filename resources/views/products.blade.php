@extends('layouts.app')

@section('content')

<div class="container-fluid px-4 mt-4">
  <nav class="navbar navbar-expand-md aqua-gradient mdb-color my-3 mx-5">
    <div class="mr-auto">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-inline-flex pl-0 pt-0">
          <li class="breadcrumb-item"><a class="white-text" href="#!">Home</a></li>
          <li class="breadcrumb-item active">All Products</li>
        </ol>
      </nav>
    </div>
  </nav>
</div>

<div class="container-fluid px-4">
  <div class="mx-5 px-2 py-0">
    <div class="row">
      <div class="col-sm-6">
        <p class="pt-2">Showing 1 - 20 of 100 Items</p>
      </div>
      <div class="col-sm-6 float-right">
        <div class="row justify-content-end">
          <div class="col-sm-3">
            <select class="browser-default custom-select">
              <option selected>Show : 20</option>
              <option value="1">Show : 50</option>
              <option value="2">Show : 100</option>
            </select>
          </div>
          <div class="col-sm-4">
            <select class="browser-default custom-select">
              <option selected>Sort By</option>
              <option value="1">Price: Lowest First</option>
              <option value="2">Price: Highest First</option>
              <option value="3">Product Name: A to Z</option>
              <option value="4">Product Name: Z to A</option>
              <option value="4">In Stock</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <hr class="mt-0">

    <div class="row mt-4">
      <div class="col-sm">
        <div class="card card-cascade">

          <!--Card image-->
          <div class="view view-cascade">
            <img src="{{ asset('img/user.jpg') }}" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--/.Card image-->

          <!--Card content-->
          <div class="card-body card-body-cascade">
            <a href="#" class="text-dark">
              <h5 class="card-title mb-0"><strong>Product Name</strong></h5>
            </a>
            <p class="lead text-primary">Rp. xxx.xxx.xxx</p>
            <hr>

            <div class="text-center">
              <div class="row">
                <div class="col-sm">
                  <div class="float-left">
                    <a href class="" data-toggle="tooltip" title="Add to Cart"><i class="mdi mdi-24px mdi-cart-plus text-dark"></i></a>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="float-right">
                    <a href class="" data-toggle="tooltip" title="Add to Wishlist"><i class="mdi mdi-24px mdi-heart-outline text-danger"></i></a>
                    <a href class="" data-toggle="tooltip" title="Copy Link to Clipboard"><i class="mdi mdi-24px mdi-share-variant text-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--/.Card content-->
        </div>
      </div>

      <div class="col-sm">
        <div class="card card-cascade">

          <!--Card image-->
          <div class="view view-cascade">
            <img src="{{ asset('img/user.jpg') }}" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--/.Card image-->

          <!--Card content-->
          <div class="card-body card-body-cascade">
            <a href="#" class="text-dark">
              <h5 class="card-title mb-0"><strong>Product Name</strong></h5>
            </a>
            <p class="lead text-primary">Rp. xxx.xxx.xxx</p>
            <hr>

            <div class="text-center">
              <div class="row">
                <div class="col-sm">
                  <div class="float-left">
                    <a href data-toggle="tooltip" title="Add to Cart" class=""><i class="mdi mdi-24px mdi-cart-plus text-dark"></i></a>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="float-right">
                    <a href data-toggle="tooltip" title="Add to Wishlist" class=""><i class="mdi mdi-24px mdi-heart-outline text-danger"></i></a>
                    <a href data-toggle="tooltip" title="Copy Link to Clipboard" class=""><i class="mdi mdi-24px mdi-share-variant text-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--/.Card content-->
        </div>
      </div>

      <div class="col-sm">
        <div class="card card-cascade">

          <!--Card image-->
          <div class="view view-cascade">
            <img src="{{ asset('img/user.jpg') }}" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--/.Card image-->

          <!--Card content-->
          <div class="card-body card-body-cascade">
            <a href="#" class="text-dark">
              <h5 class="card-title mb-0"><strong>Product Name</strong></h5>
            </a>
            <p class="lead text-primary">Rp. xxx.xxx.xxx</p>
            <hr>

            <div class="text-center">
              <div class="row">
                <div class="col-sm">
                  <div class="float-left">
                    <a href data-toggle="tooltip" title="Add to Cart" class=""><i class="mdi mdi-24px mdi-cart-plus text-dark"></i></a>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="float-right">
                    <a href data-toggle="tooltip" title="Add to Wishlist" class=""><i class="mdi mdi-24px mdi-heart-outline text-danger"></i></a>
                    <a href data-toggle="tooltip" title="Copy Link to Clipboard" class=""><i class="mdi mdi-24px mdi-share-variant text-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--/.Card content-->
        </div>
      </div>

      <div class="col-sm">
        <div class="card card-cascade">

          <!--Card image-->
          <div class="view view-cascade">
            <img src="{{ asset('img/user.jpg') }}" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--/.Card image-->

          <!--Card content-->
          <div class="card-body card-body-cascade">
            <a href="#" class="text-dark">
              <h5 class="card-title mb-0"><strong>Product Name</strong></h5>
            </a>
            <p class="lead text-primary">Rp. xxx.xxx.xxx</p>
            <hr>

            <div class="text-center">
              <div class="row">
                <div class="col-sm">
                  <div class="float-left">
                    <a href data-toggle="tooltip" title="Add to Cart" class=""><i class="mdi mdi-24px mdi-cart-plus text-dark"></i></a>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="float-right">
                    <a href data-toggle="tooltip" title="Add to Wishlist" class=""><i class="mdi mdi-24px mdi-heart-outline text-danger"></i></a>
                    <a href data-toggle="tooltip" title="Copy Link to Clipboard" class=""><i class="mdi mdi-24px mdi-share-variant text-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--/.Card content-->
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-sm">
        <div class="card card-cascade">

          <!--Card image-->
          <div class="view view-cascade">
            <img src="{{ asset('img/user.jpg') }}" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--/.Card image-->

          <!--Card content-->
          <div class="card-body card-body-cascade">
            <a href="#" class="text-dark">
              <h5 class="card-title mb-0"><strong>Product Name</strong></h5>
            </a>
            <p class="lead text-primary">Rp. xxx.xxx.xxx</p>
            <hr>

            <div class="text-center">
              <div class="row">
                <div class="col-sm">
                  <div class="float-left">
                    <a href class="" data-toggle="tooltip" title="Add to Cart"><i class="mdi mdi-24px mdi-cart-plus text-dark"></i></a>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="float-right">
                    <a href class="" data-toggle="tooltip" title="Add to Wishlist"><i class="mdi mdi-24px mdi-heart-outline text-danger"></i></a>
                    <a href class="" data-toggle="tooltip" title="Copy Link to Clipboard"><i class="mdi mdi-24px mdi-share-variant text-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--/.Card content-->
        </div>
      </div>

      <div class="col-sm">
        <div class="card card-cascade">

          <!--Card image-->
          <div class="view view-cascade">
            <img src="{{ asset('img/user.jpg') }}" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--/.Card image-->

          <!--Card content-->
          <div class="card-body card-body-cascade">
            <a href="#" class="text-dark">
              <h5 class="card-title mb-0"><strong>Product Name</strong></h5>
            </a>
            <p class="lead text-primary">Rp. xxx.xxx.xxx</p>
            <hr>

            <div class="text-center">
              <div class="row">
                <div class="col-sm">
                  <div class="float-left">
                    <a href data-toggle="tooltip" title="Add to Cart" class=""><i class="mdi mdi-24px mdi-cart-plus text-dark"></i></a>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="float-right">
                    <a href data-toggle="tooltip" title="Add to Wishlist" class=""><i class="mdi mdi-24px mdi-heart-outline text-danger"></i></a>
                    <a href data-toggle="tooltip" title="Copy Link to Clipboard" class=""><i class="mdi mdi-24px mdi-share-variant text-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--/.Card content-->
        </div>
      </div>

      <div class="col-sm">
        <div class="card card-cascade">

          <!--Card image-->
          <div class="view view-cascade">
            <img src="{{ asset('img/user.jpg') }}" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--/.Card image-->

          <!--Card content-->
          <div class="card-body card-body-cascade">
            <a href="#" class="text-dark">
              <h5 class="card-title mb-0"><strong>Product Name</strong></h5>
            </a>
            <p class="lead text-primary">Rp. xxx.xxx.xxx</p>
            <hr>

            <div class="text-center">
              <div class="row">
                <div class="col-sm">
                  <div class="float-left">
                    <a href data-toggle="tooltip" title="Add to Cart" class=""><i class="mdi mdi-24px mdi-cart-plus text-dark"></i></a>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="float-right">
                    <a href data-toggle="tooltip" title="Add to Wishlist" class=""><i class="mdi mdi-24px mdi-heart-outline text-danger"></i></a>
                    <a href data-toggle="tooltip" title="Copy Link to Clipboard" class=""><i class="mdi mdi-24px mdi-share-variant text-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--/.Card content-->
        </div>
      </div>

      <div class="col-sm">
        <div class="card card-cascade">

          <!--Card image-->
          <div class="view view-cascade">
            <img src="{{ asset('img/user.jpg') }}" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--/.Card image-->

          <!--Card content-->
          <div class="card-body card-body-cascade">
            <a href="#" class="text-dark">
              <h5 class="card-title mb-0"><strong>Product Name</strong></h5>
            </a>
            <p class="lead text-primary">Rp. xxx.xxx.xxx</p>
            <hr>

            <div class="text-center">
              <div class="row">
                <div class="col-sm">
                  <div class="float-left">
                    <a href data-toggle="tooltip" title="Add to Cart" class=""><i class="mdi mdi-24px mdi-cart-plus text-dark"></i></a>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="float-right">
                    <a href data-toggle="tooltip" title="Add to Wishlist" class=""><i class="mdi mdi-24px mdi-heart-outline text-danger"></i></a>
                    <a href data-toggle="tooltip" title="Copy Link to Clipboard" class=""><i class="mdi mdi-24px mdi-share-variant text-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--/.Card content-->
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-sm">
        <div class="card card-cascade">

          <!--Card image-->
          <div class="view view-cascade">
            <img src="{{ asset('img/user.jpg') }}" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--/.Card image-->

          <!--Card content-->
          <div class="card-body card-body-cascade">
            <a href="#" class="text-dark">
              <h5 class="card-title mb-0"><strong>Product Name</strong></h5>
            </a>
            <p class="lead text-primary">Rp. xxx.xxx.xxx</p>
            <hr>

            <div class="text-center">
              <div class="row">
                <div class="col-sm">
                  <div class="float-left">
                    <a href class="" data-toggle="tooltip" title="Add to Cart"><i class="mdi mdi-24px mdi-cart-plus text-dark"></i></a>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="float-right">
                    <a href class="" data-toggle="tooltip" title="Add to Wishlist"><i class="mdi mdi-24px mdi-heart-outline text-danger"></i></a>
                    <a href class="" data-toggle="tooltip" title="Copy Link to Clipboard"><i class="mdi mdi-24px mdi-share-variant text-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--/.Card content-->
        </div>
      </div>

      <div class="col-sm">
        <div class="card card-cascade">

          <!--Card image-->
          <div class="view view-cascade">
            <img src="{{ asset('img/user.jpg') }}" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--/.Card image-->

          <!--Card content-->
          <div class="card-body card-body-cascade">
            <a href="#" class="text-dark">
              <h5 class="card-title mb-0"><strong>Product Name</strong></h5>
            </a>
            <p class="lead text-primary">Rp. xxx.xxx.xxx</p>
            <hr>

            <div class="text-center">
              <div class="row">
                <div class="col-sm">
                  <div class="float-left">
                    <a href data-toggle="tooltip" title="Add to Cart" class=""><i class="mdi mdi-24px mdi-cart-plus text-dark"></i></a>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="float-right">
                    <a href data-toggle="tooltip" title="Add to Wishlist" class=""><i class="mdi mdi-24px mdi-heart-outline text-danger"></i></a>
                    <a href data-toggle="tooltip" title="Copy Link to Clipboard" class=""><i class="mdi mdi-24px mdi-share-variant text-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--/.Card content-->
        </div>
      </div>

      <div class="col-sm">
        <div class="card card-cascade">

          <!--Card image-->
          <div class="view view-cascade">
            <img src="{{ asset('img/user.jpg') }}" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--/.Card image-->

          <!--Card content-->
          <div class="card-body card-body-cascade">
            <a href="#" class="text-dark">
              <h5 class="card-title mb-0"><strong>Product Name</strong></h5>
            </a>
            <p class="lead text-primary">Rp. xxx.xxx.xxx</p>
            <hr>

            <div class="text-center">
              <div class="row">
                <div class="col-sm">
                  <div class="float-left">
                    <a href data-toggle="tooltip" title="Add to Cart" class=""><i class="mdi mdi-24px mdi-cart-plus text-dark"></i></a>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="float-right">
                    <a href data-toggle="tooltip" title="Add to Wishlist" class=""><i class="mdi mdi-24px mdi-heart-outline text-danger"></i></a>
                    <a href data-toggle="tooltip" title="Copy Link to Clipboard" class=""><i class="mdi mdi-24px mdi-share-variant text-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--/.Card content-->
        </div>
      </div>

      <div class="col-sm">
        <div class="card card-cascade">

          <!--Card image-->
          <div class="view view-cascade">
            <img src="{{ asset('img/user.jpg') }}" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--/.Card image-->

          <!--Card content-->
          <div class="card-body card-body-cascade">
            <a href="#" class="text-dark">
              <h5 class="card-title mb-0"><strong>Product Name</strong></h5>
            </a>
            <p class="lead text-primary">Rp. xxx.xxx.xxx</p>
            <hr>

            <div class="text-center">
              <div class="row">
                <div class="col-sm">
                  <div class="float-left">
                    <a href data-toggle="tooltip" title="Add to Cart" class=""><i class="mdi mdi-24px mdi-cart-plus text-dark"></i></a>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="float-right">
                    <a href data-toggle="tooltip" title="Add to Wishlist" class=""><i class="mdi mdi-24px mdi-heart-outline text-danger"></i></a>
                    <a href data-toggle="tooltip" title="Copy Link to Clipboard" class=""><i class="mdi mdi-24px mdi-share-variant text-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--/.Card content-->
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-sm">
        <div class="card card-cascade">

          <!--Card image-->
          <div class="view view-cascade">
            <img src="{{ asset('img/user.jpg') }}" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--/.Card image-->

          <!--Card content-->
          <div class="card-body card-body-cascade">
            <a href="#" class="text-dark">
              <h5 class="card-title mb-0"><strong>Product Name</strong></h5>
            </a>
            <p class="lead text-primary">Rp. xxx.xxx.xxx</p>
            <hr>

            <div class="text-center">
              <div class="row">
                <div class="col-sm">
                  <div class="float-left">
                    <a href class="" data-toggle="tooltip" title="Add to Cart"><i class="mdi mdi-24px mdi-cart-plus text-dark"></i></a>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="float-right">
                    <a href class="" data-toggle="tooltip" title="Add to Wishlist"><i class="mdi mdi-24px mdi-heart-outline text-danger"></i></a>
                    <a href class="" data-toggle="tooltip" title="Copy Link to Clipboard"><i class="mdi mdi-24px mdi-share-variant text-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--/.Card content-->
        </div>
      </div>

      <div class="col-sm">
        <div class="card card-cascade">

          <!--Card image-->
          <div class="view view-cascade">
            <img src="{{ asset('img/user.jpg') }}" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--/.Card image-->

          <!--Card content-->
          <div class="card-body card-body-cascade">
            <a href="#" class="text-dark">
              <h5 class="card-title mb-0"><strong>Product Name</strong></h5>
            </a>
            <p class="lead text-primary">Rp. xxx.xxx.xxx</p>
            <hr>

            <div class="text-center">
              <div class="row">
                <div class="col-sm">
                  <div class="float-left">
                    <a href data-toggle="tooltip" title="Add to Cart" class=""><i class="mdi mdi-24px mdi-cart-plus text-dark"></i></a>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="float-right">
                    <a href data-toggle="tooltip" title="Add to Wishlist" class=""><i class="mdi mdi-24px mdi-heart-outline text-danger"></i></a>
                    <a href data-toggle="tooltip" title="Copy Link to Clipboard" class=""><i class="mdi mdi-24px mdi-share-variant text-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--/.Card content-->
        </div>
      </div>

      <div class="col-sm">
        <div class="card card-cascade">

          <!--Card image-->
          <div class="view view-cascade">
            <img src="{{ asset('img/user.jpg') }}" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--/.Card image-->

          <!--Card content-->
          <div class="card-body card-body-cascade">
            <a href="#" class="text-dark">
              <h5 class="card-title mb-0"><strong>Product Name</strong></h5>
            </a>
            <p class="lead text-primary">Rp. xxx.xxx.xxx</p>
            <hr>

            <div class="text-center">
              <div class="row">
                <div class="col-sm">
                  <div class="float-left">
                    <a href data-toggle="tooltip" title="Add to Cart" class=""><i class="mdi mdi-24px mdi-cart-plus text-dark"></i></a>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="float-right">
                    <a href data-toggle="tooltip" title="Add to Wishlist" class=""><i class="mdi mdi-24px mdi-heart-outline text-danger"></i></a>
                    <a href data-toggle="tooltip" title="Copy Link to Clipboard" class=""><i class="mdi mdi-24px mdi-share-variant text-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--/.Card content-->
        </div>
      </div>

      <div class="col-sm">
        <div class="card card-cascade">

          <!--Card image-->
          <div class="view view-cascade">
            <img src="{{ asset('img/user.jpg') }}" class="card-img-top" alt="">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--/.Card image-->

          <!--Card content-->
          <div class="card-body card-body-cascade">
            <a href="#" class="text-dark">
              <h5 class="card-title mb-0"><strong>Product Name</strong></h5>
            </a>
            <p class="lead text-primary">Rp. xxx.xxx.xxx</p>
            <hr>

            <div class="text-center">
              <div class="row">
                <div class="col-sm">
                  <div class="float-left">
                    <a href data-toggle="tooltip" title="Add to Cart" class=""><i class="mdi mdi-24px mdi-cart-plus text-dark"></i></a>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="float-right">
                    <a href data-toggle="tooltip" title="Add to Wishlist" class=""><i class="mdi mdi-24px mdi-heart-outline text-danger"></i></a>
                    <a href data-toggle="tooltip" title="Copy Link to Clipboard" class=""><i class="mdi mdi-24px mdi-share-variant text-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!--/.Card content-->
        </div>
      </div>
    </div>

    <nav aria-label="Page Navigation" class="mt-5">
      <ul class="pagination pg-blue justify-content-end pagination-md">
        <li class="page-item disabled">
          <a class="page-link" tabindex="-1">Previous</a>
        </li>
        <li class="page-item active"><a class="page-link">1</a></li>
        <li class="page-item"><a class="page-link">2</a></li>
        <li class="page-item"><a class="page-link">3</a></li>
        <li class="page-item">
          <a class="page-link">Next</a>
        </li>
      </ul>
    </nav>
  </div>
</div>
@endsection
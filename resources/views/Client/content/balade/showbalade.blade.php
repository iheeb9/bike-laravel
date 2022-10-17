@extends('Client/layouts/Client_commonMaster')


@section('content')

  <!-- BREADCRUMB -->
  <div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb-tree">
            <li><a href="#">Home</a></li>
            <li><a href="{{route('clientbalade.index')}}">Balade</a></li>
            <li><a >Réserver votre place</a></li>
          </ul>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /BREADCRUMB -->

  <!-- SECTION -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- Product main img -->
        <div class=" col-md-8  ">
          <div id="product-main-img">
            <div class="product-preview">
              <img src="{{asset('images/'.$balade->image)}}" alt="">
            </div>

          </div>      <br> <br> <br>
          <div class="product-details">
            <h2 class="product-name">Informations Générales</h2>
            <div>
              <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
              </div>
              <a class="review-link" href="#">10 Review(s) | Add your review</a>
            </div>
            <div>
              <h3 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h3>
              <span class="product-available">In Stock</span>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>


            <ul class="product-btns">
              <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
              <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
            </ul>

            <ul class="product-links">
              <li>Category:</li>
              <li><a href="#">Headphones</a></li>
              <li><a href="#">Accessories</a></li>
            </ul>

            <ul class="product-links">
              <li>Share:</li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-envelope"></i></a></li>
            </ul>
            <li class="text-start"><a data-toggle="tab" >Description:</a></li>
          </div>

        </div>
        <!-- /Product main img -->

        <!-- /Product thumb imgs -->

        <!-- Product details -->
        <div class="sticky col-md-4">

          <div class="product-details">
            <h2 class="product-name">{{$balade->titre}}</h2>
            <div>

              <a class="review-link" style="color: #D10024" >choisir votre velo et réserver votre place</a>
            </div>




            <div class="add-to-cart " id="sticky">
              <div class="product-options " >
                <label>
                  <select class="input-select " id="velo-dropdown" style="width: 360px">
                    <option value="">None...</option>
                    @foreach ($velo as $v)
                      <option value="{{$v->id}}">
                        {{$v->nom}}
                      </option>
                    @endforeach
                  </select>
                </label>

              </div>
            </div>



          </div>














<div id="detail_velo">
{{--          <div class="col-md-12 order-details" >--}}
{{--            <div class="section-title text-center">--}}
{{--              <h3 class="title">Your Order</h3>--}}
{{--            </div>--}}
{{--            <div class="order-summary">--}}
{{--              <div class="order-col">--}}
{{--                <div><strong>PRODUCT</strong></div>--}}
{{--                <div><strong>TOTAL</strong></div>--}}
{{--              </div>--}}
{{--              <div class="order-products">--}}
{{--                <div class="order-col">--}}
{{--                  <div>1x Product Name Goes Here</div>--}}
{{--                  <div>$980.00</div>--}}
{{--                </div>--}}
{{--                <div class="order-col">--}}
{{--                  <div>2x Product Name Goes Here</div>--}}
{{--                  <div>$980.00</div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="order-col">--}}
{{--                <div>Shiping</div>--}}
{{--                <div><strong>FREE</strong></div>--}}
{{--              </div>--}}
{{--              <div class="order-col">--}}
{{--                <div><strong>TOTAL</strong></div>--}}
{{--                <div><strong class="order-total">$2940.00</strong></div>--}}
{{--              </div>--}}
{{--            </div>--}}

{{--            <div class="input-checkbox">--}}
{{--              <input type="checkbox" id="terms">--}}
{{--              <label for="terms">--}}
{{--                <span></span>--}}
{{--                I've read and accept the <a href="#">terms & conditions</a>--}}
{{--              </label>--}}
{{--            </div>--}}
{{--            <a href="#" class="primary-btn order-submit">Place order</a>--}}
          </div>



          </div>
          <!-- /Order Details -->



        </div>

  </div>
      <script src="{{ asset('assets/Client/js/jquery.min.js') }}"></script>
      <script>
        $(document).ready(function () {
          $('#velo-dropdown').on('change', function () {
            $("#detail_velo").empty();
            var idvelo = this.value;
            console.log(idvelo)
            let ea = {!! json_encode($velo->toArray()) !!};
              $("#detail_velo").append(
                "<div class='col-md-12 order-details'><li class='text-danger'> "+ea[idvelo].nom+"</li></div></div>"


              );
            })})

            // $("#detail_velo").append(
            //
            //   "<li>veloo</li>"
            //
            // );


      </script>
@endsection

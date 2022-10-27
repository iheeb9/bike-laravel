@extends('Client.layouts.Client_commonMaster')

@section('content')
  <div class="header">
    <!-- container -->
    <div class="container mb-3">
      <div class="mb-3">
        <h4>cat velo</h4>
        <div id="aside" class="col-md-3">
          <!-- aside Widget -->
          <div class="aside">


            <h3 class="aside-title" style="color:red">Categories</h3>
            <!-- NAV -->   @foreach($categories as $category)

              <div class="checkbox-filter">
                <div class="input-checkbox">
                  <input type="checkbox" id="category-1">
                  <label for="category-1">
                    <span></span>
                    <a href="{{url('/allcategories/'. $category->slug)}}">{{$category->nom}}</a>

                  </label>
                </div>
              </div>
            @endforeach

            <div class="checkbox-filter">



            </div>
          </div>
      </div>
        <div id="store" class="col-md-9">
          <!-- store top filter -->
          <div class="store-filter clearfix">


          </div>
          <!-- /store top filter -->

          <!-- store products -->

          <div class="row">
    @forelse($vel as $v )
      <div class="col-md-4 col-xs-6">
        <div class="product">
          <div class="product-img">
            <img src="{{asset($v->veloImages[0]->image)}}" alt="{{$v->nom}}">
            <div class="product-label">

            </div>
          </div>
          <div class="product-body">
            <p class="product-category">{{$v->Category->nom}}</p>
            <h3 class="product-name"><a href="{{url('/allcategories/'.$v->Category->slug.'/'.$v->slug)}}">{{$v->nom}}</a></h3>
            <h4 class="product-price">{{$v->prix_heure}} <del class="product-old-price">$990.00</del></h4>

            <div class="product-btns">
            </div>
          </div>
          <div class="add-to-cart">
            <button  class="add-to-cart-btn"> <i class="fa fa-eye"></i> <a href="{{ url ('detailsvelo/'.$v->id.'/details') }}">Voir details</a></button>
          </div>
          </div>

      </div>

      @empty
      <div class="col-md-12">
        <div class="p-2">
          <h4>Pas de velo pour la categorie {{$cat->nom}}</h4>
        </div>
      </div>
      @endforelse
    </div>
        </div>
      </div>

      </div>
  <div>
    <br>
    <br>
    <br>
    <br>
    <ul class="text-center">
      {{$vel->links()}}
    </ul>
  </div>


  <style >
    element.style {
    }
    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
      background-color: #D10024 !important;
      border-color: #D10024 !important  ;
      color: white !important;
    }
    .pagination>li>a, .pagination>li>span {
      color: #333 !important;
    }</style>
@endsection

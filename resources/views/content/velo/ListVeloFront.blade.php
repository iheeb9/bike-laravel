@extends('Client.layouts.Client_commonMaster')

@section('content')
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">

        <!-- section title -->
        <div class="col-md-12">
          <div class="section-title">
            <h3 class="title">New Products</h3>

          </div>
        </div>
        <!-- /section title -->

        <!-- Products tab & slick -->
        <div class="col-md-12">
          <div class="row">

            <div class="products-tabs">
              <!-- tab -->
              <div id="tab1" class="tab-pane active">
                <div class="products-slick" data-nav="#slick-nav-1">
                  @if(!empty($data)&& $data->count())
                    @foreach ($data as $v)
                  <!-- product -->
                  <div class="product" >
                    @foreach($v->veloImages as $im)

                    <div class="product-img" >
                      <img src="{{asset($im->image)}}" alt="">
                      <div class="product-label">
                        <span class="sale">-30%</span>
                        <span class="new">NEW</span>
                      </div>
                      @endforeach

                    </div>
                    <div class="product-body">
                      <p class="product-category"> {{$v->Category->nom}}</p>
                      <h3 class="product-name"><a href="#">{{$v->nom}}</a></h3>
                      <h4 class="product-price">{{$v->prix_heure}}DT </h4>

                      <div class="product-btns">
                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                      </div>
                    </div>

                  </div>
                  <!-- /product -->



                    @endforeach

                </div>
{{--                 <div id="slick-nav-1" class="products-slick-nav">h1</div>--}}
              </div>
              <!-- /tab -->
              </div>
            @else

                <p colspan="6">There are  no data</p>
            @endif
          </div>
        </div>
        <!-- Products tab & slick -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>

@endsection

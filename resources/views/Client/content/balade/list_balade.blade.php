

@extends('Client/layouts/Client_commonMaster')
@section('content')

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <div class="col-md-3">
        <ul class="breadcrumb-tree">
          <li><a href="#">Home</a></li>
          <li><a href="#">Balade</a></li>
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
    <div class="col-md-8">
    <!-- row -->
    @foreach($ListBalade as $balade)
    <div class="row">

      <!-- Product main img -->
      <div class="col-md-3 ">
        <div id="product-main-img">
          <div class="product-preview">
            <img src="{{asset('images/'.$balade->image)}}" alt="">
          </div>

        </div>
      </div>

      <!-- Product details -->
      <div class="col-md-9">
        <div class="product-details">
          <h2 class="product-name">{{$balade->titre}}</h2>
          <div><i class="fa fa-calendar" aria-hidden="true"></i>
              <span class="text-start" style="color:#333 ; font-style: oblique; font-size: 13px " >{{$balade->date}}</span>


          </div>
          <div>
            <h4 class="product-price" style="font-size: 17px">     <span class="text-start" style="color:#333 ; font-style: oblique; font-size: 13px;margin-right: 10px " >à partir de  </span> {{$balade->prix}} DT</h4>
{{--            <span class="product-available">{{$balade->disponible}}</span>--}}
          </div>
          <p>{{$balade->description}}</p>



          <div class="add-to-cart text-right">



           @if($balade->disponible=='Disponible')

                  <a href="{{ route('clientbalade.show',$balade->id)}}"><button class="add-to-cart-btn justify-content-end "  ><i  class="fa fa-shopping-cart"></i>  Reserver</button>
                  </a>

           @else
              <span class="product-available">{{$balade->disponible}}</span>
           @endif

            </div>



          <div class="fb-share-button" data-href="http://127.0.0.1:8000/clientbalade/{{$balade->id}}" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>


{{--            <ul class="product-links">--}}
{{--            <li>Share:</li>--}}
{{--            <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F127.0.0.1%3A8000%2Fclientbalade%2F4&display=popup&ref=plugin&src=like&kid_directed_site=0"><i class="fa fa-facebook"></i></a></li>--}}
{{--            <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
{{--            <li><a href="#"><i class="fa fa-envelope"></i></a></li>--}}
{{--          </ul>--}}

        </div>
      </div>
      <!-- /Product details -->


    <!-- /row -->
  </div>
      <hr>
  @endforeach
  <!-- /container -->
</div>


    <div class="col-md-4">

      <div class="fb-page" style="height: 20px" data-href="https://www.facebook.com/profile.php?id=100080344955458" data-tabs="timeline" data-width="600" data-height="700" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/profile.php?id=100080344955458/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/infintyseekers/">velo</a></blockquote></div>


    </div>
    </div>
<!-- /SECTION -->
  <ul class="text-center">
{!! $ListBalade->links() !!}
  </ul>

    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /Section -->

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
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v15.0&appId=686660839040879&autoLogAppEvents=1" nonce="WVPQ5ryF"></script>

@endsection

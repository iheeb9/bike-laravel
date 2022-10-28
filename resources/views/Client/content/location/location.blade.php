@extends('Client/layouts/Client_commonMaster')

@section('content')
  <!-- SECTION -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        @foreach($ListLocation as $loc)

        <!-- shop -->
        <div class="col-md-4 col-xs-6">
          <div class="shop">
            <div class="shop-img">
              <img src="{{asset('assets/Client/img/shop01.png')}}" alt="">
            </div>
            <div class="shop-body">
              <h3>Velo :<br>{{$loc->velo->nom}}</h3>
              <a class="cta-btn">Dès le {{date('j F, Y', strtotime($loc->date_start))}} et jusqu'au {{date('j F, Y', strtotime($loc->date_end))}}

                <a style="color: white; margin-top: 1em;" href="{{ route('c_location.edit',$loc->id) }}"><i class="fa fa-edit"></i> Edit</a>

              </a>
            </div>
          </div>
        </div>
        <!-- /shop -->
        @endforeach

      </div>
      <!-- /row -->
      <br class="my-5">
      <div class="row">
        {{-- <div class=col-3>
          <div>
            Showing {{$ListLocation->firstItem()}} - {{$ListLocation->lastItem() }}
          </div>
        </div> --}}
        <div class=col-3>
          <div class="d-flex justify-content-end me-5">
              {!! $ListLocation->links() !!}
          </div>
        </div>
        <div class=col-3>
          <a href={{route("c_location.create")}} type="submit" style="background-color: #D10024; color :white" class="btn">Ajouter une nouvelle location</a>

        </div>
      
      </div>
    </div>
    <!-- /container -->

  </div>
  <!-- /SECTION -->
@endsection

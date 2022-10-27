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
            <h2 class="product-name" >Informations Générales</h2>
            <div style="display: flex !important; margin-bottom: 20px ;margin-top: 20px"    >
              <p   class="col-md-4" >     <span class="text-start" style="color:#333 ; font-style: oblique; ;margin-right: 10px ;font-weight: bold" >Guide Accompagnateur:  </span> {{$balade->guide_accompagnateur}} DT</p>
              <p  class="col-md-4"  >     <span class="text-start" style="color:#333 ; font-style: oblique; ;margin-right: 10px ;font-weight: bold" >Départ:  </span> {{$balade->depart}} </p>
              <p  class="col-md-4"  >     <span class="text-start" style="color:#333 ; font-style: oblique; ;margin-right: 10px ;font-weight: bold" >arrive:  </span> {{$balade->arrive}} </p>
            </div>


            <div style="display: flex !important; margin-bottom: 20px "   >
              <p   class="col-md-4" >     <span class="text-start" style="color:#333 ; font-style: oblique; ;margin-right: 10px ;font-weight: bold" >nombre maximal:  </span> {{$balade->nombre}} participants.</p>
              <p  class="col-md-4"  >     <span class="text-start" style="color:#333 ; font-style: oblique; ;margin-right: 10px ;font-weight: bold" >Départ à partir de:  </span> {{$balade->jauge}} participants.</p>
              <p  class="col-md-4"  >     <span class="text-start" style="color:#333 ; font-style: oblique; ;margin-right: 10px ;font-weight: bold" >Distance:  </span> {{$balade->distance}} km</p>
            </div>
            <div style="display: flex !important; margin-bottom: 20px " >
              <p   class="col-md-4"  >     <span class="text-start" style="color:#333 ; font-style: oblique; ;margin-right: 10px ;font-weight: bold" >participants:  </span> {{$balade->nbre_participant}} participants.</p>
              <p   class="col-md-4"  >     <span class="text-start" style="color:#333 ; font-style: oblique; ;margin-right: 10px ;font-weight: bold" >info_billetterie:  </span> {{$balade->info_billetterie}} .</p>
              <p  class="col-md-4"  >     <span class="text-start" style="color:#333 ; font-style: oblique; ;margin-right: 10px ;font-weight: bold" >Date:  </span> {{$balade->date}} .</p>
            </div>

            <span class="text-start" style="color:#333 ; font-style: oblique; ;margin-right: 10px ;font-weight: bold" >service:  </span>
            <p> {{$balade->Services}}</p>
            <span class="text-start" style="color:#333 ; font-style: oblique; ;margin-right: 10px ;font-weight: bold" >description:  </span>
          <p>
            <p> {{$balade->description}}</p>
          </p>




          </div>

        </div>
        <!-- /Product main img -->

        <!-- /Product thumb imgs -->

        <!-- Product details -->
        <form action="{{ route('addparticipation',$balade) }}" method="POST">
          @csrf

        <div class="sticky col-md-4">

          <div class="product-details">
            <h2 class="product-name">{{$balade->titre}}</h2>
            <div>

              <a class="review-link" style="color: #D10024" >choisir votre velo et réserver votre place</a>
            </div>




            <div class="add-to-cart " id="sticky">
              <div class="product-options " >
                @php
                  $i = false
                @endphp
                @foreach($balade->Participations as $participation)
                 @if( \Illuminate\Support\Facades\Auth::check())
                  @if($participation->balade_id==$balade->id && $participation->user_id==Auth::user()->id)
                      <span class="product-available">deja reservé</span>
                    @php
                      $i =true;
                    @endphp
                  @endif
                  @endif
                @endforeach
                @if($i==false)

                  <label>
                    <select  name="velo_id" class="input-select " id="velo-dropdown" style="width: 360px">
                      <option >None...</option>
                      @foreach ($velo as $v)
                        <option value="{{$v->id}}">
                          {{$v->nom}}
                        </option>
                      @endforeach
                    </select>
                  </label>
                @endif

              </div>
            </div>



          </div>














  <div  id="detail_velo"  >
    @csrf
<div id="formulaire">
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
</div>

    <div   id="valid" hidden>
    <button    type='submit' class='primary-btn' style='margin-top: 50px;margin-bottom: -50px;margin-left: 110px'>valider</button>
    </div>
  </div>



          </div>
          <!-- /Order Details -->

        </form>

        </div>

  </div>
      <script src="{{ asset('assets/Client/js/jquery.min.js') }}"></script>
      <script>
        $(document).ready(function () {

          $('#velo-dropdown').on('change', function () {

            $("#formulaire").empty();
            $("#valid").hide();
            var idvelo = this.value;
            console.log(idvelo)
            let ea = {!! json_encode($velo->toArray()) !!};
            if (ea[idvelo-1] !=null){
            $("#formulaire").append(
                "<div class='col-md-12 order-details'><li class='review-link my'>"+ea[idvelo-1].nom+"</li>" +
                "<div style='display: flex !important; justify-content: space-between'><li class='review-link d-f col'>PrixTotale:</li><h4 class='product-price' style='color: #D10024'>50d</h4></div>"+
                "</div>"
            );
         $("#valid").show();
            }
            })})

            // $("#detail_velo").append(
            //
            //   "<li>veloo</li>"
            //
            // );


      </script>
@endsection

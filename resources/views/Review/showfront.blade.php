@extends('Client/layouts/Client_commonMaster')
@section('content')

<div class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <!-- Product main img -->
      <div class="col-md-7">
        <div id="product-main-img">

            <img src="{{asset('images/'.$review->image)}}" alt="">          </div>



      </div>
      <!-- /Product main img -->

      <!-- Product thumb imgs -->
      <div class="col-md-1 ">
        <div id="product-imgs">







        </div>
      </div>
      <!-- /Product thumb imgs -->

      <!-- Product details -->
      <div class="col-md-5">
        <div class="product-details">
          <h2 class="product-name"> {{$review->nom}}</h2>

          <div>
            <h3 class="product-price">{{$balades->titre}} </h3>
          </div>
          <p>{{$review->Description}}





          <ul class="product-links">
            <li>Share:</li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
          </ul>

        </div>
      </div>
      <!-- /Product details -->

      <!-- Product tab -->
      <div class="col-md-12">
        <div id="product-tab">
          <!-- product tab nav -->
          <ul class="tab-nav">
            <li><a data-toggle="tab" href="#tab3">Reviews ({{$wordCount}})</a></li>
          </ul>
          <!-- /product tab nav -->

          <!-- product tab content -->
          <div class="tab-content">
            <!-- tab1  -->

            <!-- /tab2  -->

            <!-- tab3  -->
            <div id="tab3" class="tab-pane fade in">
              <div class="row">
                <!-- Rating -->
                <div class="col-md-2">

                </div>
                <!-- /Rating -->

                <!-- Reviews -->
                <div class="col-md-6">

                  <div>
                    @foreach($posts as $p)
                    <ul>
                      <li>
                        <div class="review-heading">
                          <h5 class="name">{{$p->user->name}}</h5>

                        </div>

                        <div class="review-body">
                          <p>{{$p->Commentaire}} </p>
                        </div>
                        <div>
                          <img class="img-fluid" src="{{asset('images/'.$p->image)}}" alt="Card image cap" style="height:160px;
width: 70% ;
margin-left:15%;"/>
                        </div><br>
                        <p class="date">{{$p->created_at}}</p>
<div style="
  text-align: center;"> @if($p->user_id==Auth::user()->id)
    <form action="{{ route('clientpost.destroy',$p->id) }}" method="POST">
      @csrf
      @method('DELETE')

      <button  type="submit" class="btn bg-transparent"  style="padding-left: 1px; margin-top: 1px">     <a class="dropdown-item"   ><i class="bx bx-trash me-1"></i>   Delete         </a></button>

    </form>                        @endif</div>
                        -----------------------------------------------------------------------------------------------------
                        <br>
                      </li>
                    </ul>
                    @endforeach
                    <ul class="reviews-pagination">
                      <li class="active">1</li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                  </div>

                </div>
                <!-- /Reviews -->

                <!-- Review Form -->
                <div class="col-md-3">
                  <div id="review-form">
                    <form class="review-form" action="{{ route('clientpost.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <input hidden class="input" type="text" value='{{Auth::user()->id}}' name="user">
                      <input hidden class="input" type="text" value='{{$review->id}}' name="review">
                      <input class="input" id="Subject" type="text" placeholder="Subject"  name="Subject">
                      @error('Subject')
                      <small class="text-danger" style="font-size: 10px;font-style: italic">{{$message}} </small>
                      @enderror
                      <textarea name="Commentaire" id="Commentaire" class="input" placeholder="Commentaire" aria-label="description" aria-describedby="basic-icon-default-message2"></textarea>
                      @error('Commentaire')
                      <small class="text-danger  " style="font-size: 10px;font-style: italic">{{$message}} </small>
                      @enderror
                      <input name="image" class="input" type="file" id="image">
                      @error('image')
                      <small class="text-danger  " style="font-size: 10px;font-style: italic">{{$message}} </small>
                      @enderror
                      <button class="primary-btn">Submit</button>
                    </form>
                  </div>
                </div>
                <!-- /Review Form -->
              </div>
            </div>
            <!-- /tab3  -->
          </div>
          <!-- /product tab content  -->
        </div>
      </div>
      <!-- /product tab -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
@endsection

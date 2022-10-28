@extends('Client/layouts/Client_commonMaster')

@section('content')

<div style="text-align: center;">

<h2>Evennement & Tarifs</h2>
<p>Louez votre trottinette électrique tout terrain pour une balade inoubliable entre Terre et Mer !! Sur réservation !! N'hésitez pas à nous contacter pour connaitre les disponibilités. Ouvert toute l'année</p>
</div>

<div class="container">
  <div class="row">

  <?php foreach ($events as $u) {?>
  <!-- col-md-2  -->
    <div class="col-md-4 mt-4">
      <div class="card">
        <div class="card-body">
        <img class="img-fluid" src="{{asset('images/'.$u->image)}}" alt="Card image cap" style="height:290px;
width: 70% ;"/>

           <h5 class="card-title font-weight-bold  ">{{$u->title}}</h5>
           <p class="card-text" style="display: -webkit-box; overflow: hidden;
           text-overflow:ellipsis;
           -webkit-line-clamp: 2;
           -webkit-box-orient :vertical;
           ">{{$u->description}}</p>
           <a class="btn btn-primary" href="/events/{{$u->id}}" >Decouvrir</a>

        </div>
      </div>
    </div>
    <!-- col-md-2 end -->
    <?php }?>

  </div>
</div>

@endsection
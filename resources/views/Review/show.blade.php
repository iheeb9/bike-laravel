@extends('layouts/contentNavbarLayout')
@section('page-script')
  <script src="{{asset('assets/js/ui-toasts.js')}}"></script>
  <script>
    $(document).ready(function() {
      @if (Session::has('success'))
      document.getElementById('showToastPlacement').click();

      @endif
    });</script>
@endsection
@section('title', 'Cards basic   - UI elements')

@section('vendor-script')
  <script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

@section('content')
  @if ($message =Session::has('success'))
    <div class="bs-toast toast toast-placement-ex m-2" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
      <div class="toast-header">
        <i class='bx bx-bell me-2'></i>
        <div class="me-auto fw-semibold">success</div>
        <small>1 min</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        opération effectuée avec succès
      </div>
    </div>
  @endif
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Review /</span> Posts</h4>

  <!-- Examples -->
  <div class="row mb-5">
    <div class="col-md-12 col-lg-12 mb-8">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title"> titre : {{$review->nom}}</h5>
          <h6 class="card-subtitle text-muted">{{$review->Description}}</h6>
        </div>
      <img class="img-fluid" src="{{asset('images/'.$review->image)}}" alt="Card image cap" style="height:290px;
width: 70% ;
margin-left:15%;"/>
        <div class="card-body">
          <h5 class="card-title"> Balade : {{$balades->titre}}</h5>
          <p class="card-text"> date :{{$review->date}}</p>

        </div>
      </div>
    </div>
  </div>
  <!-- Examples -->

  <div class="d-none">
    <select id="selectTypeOpt" class="form-select color-dropdown">
      <option value="bg-success" selected>Primary</option></select>
    <select class="form-select placement-dropdown" id="selectPlacement">
      <option value="top-0 end-0">Top left</option></select>
    <button id="showToastPlacement" class="btn btn-primary d-block">Show Toast</button>
  </div>


  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Reviews /</span> List Posts

  </h4>

  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">List Post</h5>

    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
        <tr>
          <th>Titre</th>
          <th>date</th>
          <th>Description</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        </tbody>
      </table>
    </div>
    <br class="my-5">
    <br class="my-5">
    <div class="d-flex justify-content-end me-5">
    <!--/  { $ListReview->links() !!}-->
    </div>
  </div>

  <!--/ Card layout -->
@endsection
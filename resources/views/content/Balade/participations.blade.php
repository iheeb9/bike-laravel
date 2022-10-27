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
  <div class="d-none">
    <select id="selectTypeOpt" class="form-select color-dropdown">
      <option value="bg-success" selected>Primary</option></select>
    <select class="form-select placement-dropdown" id="selectPlacement">
      <option value="top-0 end-0">Top left</option></select>
    <button id="showToastPlacement" class="btn btn-primary d-block">Show Toast</button>
  </div>


  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Balade /</span> Participation information

  </h4>
  <div class="row">
    <div class="col-sm-10">

    </div>
  </div>
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Participation information</h5>

    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
        <tr>
          <th> utilisateur</th>
          <th> balade</th>
          <th> velo</th>

          <th>prix totale</th>
        </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @foreach($participations as $participation)
          <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$participation->name}}</strong></td>
            <td>{{$participation->titre}}</td>
            <td>{{$participation->nom}}</td>
            <td>{{$participation->prixtotale}}</td>

            {{--          <td>--}}
            {{--            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">--}}
            {{--              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">--}}
            {{--                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">--}}
            {{--              </li>--}}
            {{--              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">--}}
            {{--                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">--}}
            {{--              </li>--}}
            {{--              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">--}}
            {{--                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">--}}
            {{--              </li>--}}
            {{--            </ul>--}}
            {{--          </td>--}}

          </tr>
          <tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <br class="my-5">
    <br class="my-5">
    <div class="d-flex justify-content-end me-5">
      {!! $participations->links() !!}
    </div>
  </div>

  <!--/ Basic Bootstrap Table -->

  <hr class="my-5">


@endsection

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
    <span class="text-muted fw-light">Balade /</span> List Balade

  </h4>
  <div class="row">
    <div class="col-sm-10">
      <a href={{route("balade.create")}} type="submit" class="btn btn-primary">Ajouter</a>
    </div>
  </div>
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">List Balade</h5>

    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
        <tr>
          <th>Titre</th>
          <th>Guide</th>
          <th>Participant</th>

          <th>Status</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @foreach($ListBalade as $balade)
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$balade->titre}}</strong></td>
          <td>{{$balade->guide_accompagnateur}}</td>
          <td>c</td>

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
          @if($balade->disponible=='Disponible')
            <td><span class="badge bg-label-success me-1">{{$balade->disponible}}</span></td>
          @elseif($balade->disponible=='Reporté')
            <td><span class="badge bg-label-warning me-1">{{$balade->disponible}}</span></td>
          @else
            <td><span class="badge bg-label-danger me-1">{{$balade->disponible}}</span></td>
          @endif

          <td>

            <form  action="{{ route('balade.destroy',$balade) }}" method="POST">
              @csrf
              @method('DELETE')

            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">

                <a class="dropdown-item"  href="{{ route('balade.edit',$balade) }}"><i class="bx bx-edit me-1"></i> Edit</a>


                <button  class="dropdown-item" type="submit"><i class="bx bx-edit me-1"></i>delete </button>
              </div>
            </div>
            </form>

          </td>
        </tr>
        <tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <br class="my-5">
    <br class="my-5">
    <div class="d-flex justify-content-end me-5">
      {!! $ListBalade->links() !!}
    </div>
  </div>

  <!--/ Basic Bootstrap Table -->

  <hr class="my-5">

@endsection

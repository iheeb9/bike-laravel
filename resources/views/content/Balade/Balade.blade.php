@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')

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
          <td>{{$balade->nbre_participant}}</td>

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
          @if($balade->disponible=='Illo.')
            <td><span class="badge bg-label-success me-1">{{$balade->disponible}}</span></td>
          @else
            <td><span class="badge bg-label-primary me-1">{{$balade->disponible}}</span></td>
          @endif

          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Detail</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
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

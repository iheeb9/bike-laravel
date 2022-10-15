@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Location /</span> List
</h4>
<!-- Button  -->

<div class="row">
  <div class="col-sm-10">
    <a href={{route("location.create")}} type="submit" class="btn btn-primary">Ajouter une nouvelle location</a>
  </div>
</div>
<br class="my-5">
<br class="my-5">

<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">Table Basic</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Index</th>
          <th>Date debut</th>
          <th>Date fin</th>
          <th>utilisateur</th>
          <th>velo</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @php
        $count = 0;
        @endphp
        @foreach($ListLocation as $loc)
        @php $count++;@endphp

        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$count}}</strong></td>
          <td>{{ $loc->date_start}}</td>
          <td>{{$loc->date_end}}</td>

          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title={{$loc->user->name}}>
                <img src="{{asset('assets/img/avatars/2.png')}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td> <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title={{$loc->velo->nom}}>
              <img src="{{asset('assets/img/illustrations/old.jpg')}}" alt="Avatar" class="rounded-circle">
            </li>
          </ul>
        </td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->
<br class="my-5">
<div class="d-flex justify-content-end me-5">
  {!! $ListLocation->links() !!}
</div>
</div>
@endsection

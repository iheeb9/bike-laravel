@extends('layouts/contentNavbarLayout')

@section('title', 'Liste Categories - Forms')

@section('content')


  <div>
    <h1>Liste des Velo</h1>
    <div class="card">
      @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
      @endif
      <h5 class="card-header">Table Caption <a href="{{url ('admin/velo/create')}}" class="btn btn-primary btn-md  float-end ">Ajouter Velo</a></h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <caption class="ms-4">List of Projects</caption>
          <thead>
          <tr>
            <th>Nom</th>
            <th>Slug</th>
            <th>Description</th>
            <th>meta title</th>
            <th>meta keyword</th>
          </tr>
          </thead>
          <tbody>

              <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong></strong></td>
                <td></td>
                <td></td>
                <td><span class="badge bg-label-primary me-1"></span></td>
                <td></td>
                <td>
                  <a href="" class="btn btn-success">Modifier</a>
                  <a href="#" class="btn btn-danger">Supprimer</a>
                </td>
              </tr>

            <tr>
              <td colspan="6">There are  no data</td>
            </tr>

          </tbody>
        </table>
        <div>
{{--          {{$data->links()}}--}}
        </div>
      </div>
    </div>

  </div>
@endsection


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
            <th>Serie</th>
            <th>Description</th>
            <th>Quantite</th>
            <th>prix_heure</th>
            <th>Disponibilite</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          @if(!empty($data)&& $data->count())
            @foreach ($data as $v)

              <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$v->nom}}</strong></td>
                <td>{{$v->serie}}</td>
                <td>{{$v->description}}</td>


                <td><span class="badge bg-label-primary me-1">{{$v->quantite}}</span></td>
                <td>{{$v->prix_heure}}</td>
                <td>{{$v->Disponibilite}}</td>
                <td>
                  <a href="{{ url ('admin/velo/'.$v->id.'/edit') }}" class="btn btn-success">Modifier</a>
                  <a href="{{url('admin/velo/'.$v->id.'/delete')}}" onclick="return confirm('Supprimer !!!!!')"  class="btn btn-danger">Supprimer</a>
                </td>
              </tr>
            @endforeach
          @else
            <tr>
              <td colspan="6">There are  no data</td>
            </tr>
          @endif
          </tbody>
        </table>
        <div>

          {{$data->links()}}
        </div>
      </div>
    </div>

  </div>


@endsection


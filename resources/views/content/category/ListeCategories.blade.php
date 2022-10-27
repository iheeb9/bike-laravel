@extends('layouts/contentNavbarLayout')

@section('title', 'Liste Categories - Forms')

@section('content')


  <div>
    <div>
      <div wire:ignore.self class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Supprimer Categorie</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form wire:submit="Supprimercategorie">
              <div class="modal-body">
                <p>êtes-vous sûr de vouloir supprimer cette categorie.</p>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Oui,  Supprimer </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <h1>Liste des categories</h1>
    <div class="card">
      @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
      @endif
      <h5 class="card-header">Table Caption <a href="{{url ('admin/category/create')}}" class="btn btn-primary btn-md  float-end ">Ajouter categorie</a></h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <caption class="ms-4">List of Projects</caption>
          <thead>
          <tr>
            <th>Nom</th>
            <th>Slug</th>
            <th>Description</th>
          </tr>
          </thead>
          <tbody>
          @if(!empty($data)&& $data->count())
            @foreach ($data as $c)

              <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$c->nom}}</strong></td>
                <td>{{$c->slug}}</td>
                <td>{{$c->description}}</td>
                <td>
                  <a href="{{ url ('admin/category/'.$c->id.'/edit') }}" class="btn btn-success">Modifier</a>
                  <a href="{{url('admin/category/'.$c->id.'/delete')}}" onclick="return confirm('Supprimer !!!!!')"  class="btn btn-danger">Supprimer</a>
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


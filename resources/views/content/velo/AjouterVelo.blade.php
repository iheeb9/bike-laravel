@extends('layouts/contentNavbarLayout')

@section('title', 'Liste des velos - Forms')

@section('content')
  <h1>Ajouter des Velos</h1>
  <div class="col-md-12">
    <div class="card mb-4">

      <h5 class="card-header">Merged  <a href="{{url ('admin/velo')}}" class="btn btn-primary btn-md  float-end ">Liste des velos</a></h5>
      <div class="card-body demo-vertical-spacing demo-only-element">

        <form method="POST" action="{{url ('admin/velo')}}"  enctype="multipart/form-data">
          @csrf
            @method('POST')
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="defaultFormControlInput" class="form-label">Nom</label>
              <input type="text" name="nom" class="form-control" id="defaultFormControlInput" placeholder="Nom de velo" aria-describedby="defaultFormControlHelp" />
              @error('nom') <small class="text-danger">{{$message}}</small>  @enderror
            </div>
            <div class="col-md-6 mb-3">
              <label for="defaultFormControlInput" class="form-label">Serie</label>
              <input type="text" name="serie" class="form-control" id="defaultFormControlInput" placeholder="Nom de velo" aria-describedby="defaultFormControlHelp" />
              @error('serie') <small class="text-danger">{{$message}}</small>  @enderror
            </div>
          </div>

          <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Telecharger des images de vélo</label>
            <input class="form-control" name="image[]" type="file" id="formFileMultiple" multiple>
          </div>

          <div class="row">
          <div class="div mb-3  col-md-6">
            <label>category</label>
            <select name="categorie_id" class="form-control">
              @foreach($categories as $c )
                <option value="{{$c->id}}">{{$c->nom}}</option>
              @endforeach
            </select>
          </div>
            <div class="col-md-3 mb-3">
              <label for="defaultFormControlInput" class="form-label">Quantite</label>
              <input  name="quantite" type="text" class="form-control" id="defaultFormControlInput" placeholder="Status" aria-describedby="defaultFormControlHelp" />
              @error('quantite') <small class="text-danger">{{$message}}</small>  @enderror
            </div>
          </div>


          <label for="defaultFormControlInput" class="form-label">Description</label>
          <div class="input-group input-group-merge">
            <span class="input-group-text">With textarea</span>
            <textarea name="description" class="form-control" aria-label="With textarea"></textarea>
            @error('description') <small class="text-danger">{{$message}}</small>  @enderror
          </div>




          <div class="col-md-6 mb-3">
            <label for="defaultFormControlInput" class="form-label">Prix_heure</label>
            <input  name="prix_heure" type="text" class="form-control" id="defaultFormControlInput" placeholder="Status" aria-describedby="defaultFormControlHelp" />
            @error('prix_heure') <small class="text-danger">{{$message}}</small>  @enderror
          </div>

          <div class="col-md-6 mb-3">
            <label for="defaultFormControlInput" class="form-label">Disponibilite</label>
            <input  name="Disponibilite" type="text" class="form-control" id="defaultFormControlInput" placeholder="Status" aria-describedby="defaultFormControlHelp" />
            @error('Disponibilite') <small class="text-danger">{{$message}}</small>  @enderror
          </div>


          <div class=" mb-5">
            <button type="submit" class="btn btn-primary float-end">Ajouter</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection


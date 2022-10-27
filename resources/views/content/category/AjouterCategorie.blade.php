@extends('layouts/contentNavbarLayout')

@section('title', 'Liste Categories - Forms')

@section('content')
  <h1>Ajouter des categories</h1>
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Merged  <a href="{{url ('admin/category')}}" class="btn btn-primary btn-md  float-end ">Liste categories</a></h5>
      <div class="card-body demo-vertical-spacing demo-only-element">

        <form method="POST" action="{{url ('admin/category')}}"  enctype="multipart/form-data">
                @csrf
                @method('POST')
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="defaultFormControlInput" class="form-label">Nom</label>
              <input type="text" name="nom" class="form-control" id="defaultFormControlInput" placeholder="Nom de velo" aria-describedby="defaultFormControlHelp" />
                @error('nom') <small class="text-danger">{{$message}}</small>  @enderror
            </div>
            <div class="col-md-6 mb-3">
              <label for="defaultFormControlInput" class="form-label">Slug</label>
              <input type="text" name="slug" class="form-control" id="defaultFormControlInput" placeholder="Nom de velo" aria-describedby="defaultFormControlHelp" />
              @error('slug') <small class="text-danger">{{$message}}</small>  @enderror
            </div>
          </div>


        <label for="defaultFormControlInput" class="form-label">Description</label>
        <div class="input-group input-group-merge">
          <span class="input-group-text">With textarea</span>
          <textarea name="description" class="form-control" aria-label="With textarea"></textarea>
          @error('description') <small class="text-danger">{{$message}}</small>  @enderror
        </div>

        <div class=" mb-5">
          <button type="submit" class="btn btn-primary float-end">Ajouter</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection


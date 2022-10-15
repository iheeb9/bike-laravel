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
            </div>
            <div class="col-md-6 mb-3">
              <label for="defaultFormControlInput" class="form-label">Slug</label>
              <input type="text" name="slug" class="form-control" id="defaultFormControlInput" placeholder="Nom de velo" aria-describedby="defaultFormControlHelp" />
            </div>
          </div>


        <label for="defaultFormControlInput" class="form-label">Description</label>
        <div class="input-group input-group-merge">
          <span class="input-group-text">With textarea</span>
          <textarea name="description" class="form-control" aria-label="With textarea"></textarea>
        </div>

          <div class="col-md-6 mb-3">
            <label for="defaultFormControlInput" class="form-label">Status</label>
            <input  name="status" type="text" class="form-control" id="defaultFormControlInput" placeholder="Status" aria-describedby="defaultFormControlHelp" />
         </div>

          <h4>SEO Tags</h4>
          <div class="col-md-6 mb-3">
            <label for="defaultFormControlInput" class="form-label">Mete Title</label>
            <input type="text" name="meta_title" class="form-control" id="defaultFormControlInput" placeholder="Meta title" aria-describedby="defaultFormControlHelp" />
          </div>
          <label for="defaultFormControlInput" class="form-label">Meta Keyword</label>
          <div class="input-group input-group-merge mb-5">
            <span class="input-group-text">With textarea</span>
            <textarea class="form-control" name="meta_keyword" aria-label="With textarea"></textarea>
          </div>
        <label for="defaultFormControlInput" class="form-label">Meta Description</label>
        <div class="input-group input-group-merge mb-5">
          <span class="input-group-text">With textarea</span>
          <textarea class="form-control" name="meta_description" aria-label="With textarea"></textarea>
        </div>

        <div class=" mb-5">
          <button type="submit" class="btn btn-primary float-end">Ajouter</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection


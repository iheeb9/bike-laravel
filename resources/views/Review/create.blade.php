@extends('layouts/contentNavbarLayout')

<script src="{{ asset('assets/Client/js/jquery.min.js') }}"></script>
@section('title', ' Horizontal Layouts - Forms')
<script>
  jQuery( document ).ready(function() {
    // event for click on input (also you can use click)
    //better to change form to .yourFormClass

    $('form input,textarea,select ').focus(function(){
      // get selected input error container
      $(this).siblings(".text-danger").hide();
    });
  });
</script>
@section('content')
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Review/</span> Ajouter Review</h4>

  <!-- Basic Layout & Basic with Icons -->
  <div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">

        </div>
        <div class="card-body">
          <form action="{{ route('review.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3 ">
              <label class="col-sm-2 col-form-label " for="Titre">Titre</label>
              <div class="col-sm-4">
                <input type="text"  name="nom" class="form-control " id="nom" placeholder="Titre.." />
                @error('nom')
                <small class="text-danger" style="font-size: 10px;font-style: italic">{{$message}} </small>
                @enderror

              </div>
              <label for="  billetterie"  class="col-sm-2 col-form-label" > Balade Titres </label>
              <div class="col-sm-4">
                <select class="form-select" name="balade_id" id="balade_id" aria-label="Default select example">
                  @foreach($balades as $balades)
                    <option value="{{ $balades->id }}"
                      {{ in_array($balades->id,
                      old('cats') ?: []) ? 'selected' : '' }}>
                      {{ $balades->titre }}</option>
                  @endforeach
                </select>
                @error('balade_id')
                <small class="text-danger  " style="font-size: 10px;font-style: italic">{{$message}} </small>
                @enderror

              </div>
            </div>

            <div class=" row mb-3">
              <label for="formFile" class="col-sm-2 col-form-label">Image</label>
              <div class="col-sm-6">
                <input name="image" class="form-control" type="file" id="formFile">
                @error('image')
                <small class="text-danger  " style="font-size: 10px;font-style: italic">{{$message}} </small>
                @enderror
              </div>
              <label for="html5-datetime-local-input" class="col-md-2 col-form-label">Datetime</label>
              <div class="col-md-2">
                <input name="date" class="form-control" type="date" value="2021-06-18T12:30:00" id="html5-datetime-local-input" />
                @error('date')
                <small class="text-danger  " style="font-size: 10px;font-style: italic">{{$message}} </small>
                @enderror
              </div></div>



            <div class="mb-3 row">

            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="Description">Description</label>
              <div class="col-sm-10">

                <textarea name="Description" id="Description" class="form-control" placeholder="Description" aria-label="description" aria-describedby="basic-icon-default-message2"></textarea>
                @error('Description')
                <small class="text-danger  " style="font-size: 10px;font-style: italic">{{$message}} </small>
                @enderror
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Basic with Icons -->
    <div class="col-xxl-2">

    </div>
  </div>
@endsection

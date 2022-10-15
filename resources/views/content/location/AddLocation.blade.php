@extends('layouts/contentNavbarLayout')

@section('title', ' Horizontal Layouts - Forms')

@section('content')
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Location/</span> Ajouter Location</h4>

  <!-- Basic Layout & Basic with Icons -->
  <div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Ajouter Location</h5> <small class="text-muted float-end">+</small>
        </div>
        <div class="card-body">
          <form action="{{ route('location.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3 ">
              <label for="  billetterie"  class="col-sm-2 col-form-label" > Utilisateur</label>
              <div class="col-sm-4">
                <select class="form-select" name="user" id="billetterie" aria-label="Default select example">
                  <option selected value="{{null}}">.....</option>
                  @foreach($ListUser as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                  @endforeach
                </select>
                <div class="alert-danger"> {{ $errors->first('user')}}</div>

              </div>
              <label for="  billetterie"  class="col-sm-2 col-form-label" > Velo</label>
              <div class="col-sm-4">
                <select class="form-select" name="velo" id="billetterie" aria-label="Default select example">
                  <option selected value="{{null}}">.....</option>
                  @foreach($ListVelo as $velo)
                  <option value="{{$velo->id}}">{{$velo->nom}}</option>
                    @endforeach
                  </select>
                  <div class="alert-danger"> {{ $errors->first('velo')}}</div>

              </div>
            </div>
            <div class=" row mb-3">
              <label for="html5-datetime-local-input" class="col-md-2 col-form-label">Date Start</label>
              <div class="col-md-4">
                <input name="date_start" class="form-control" type="date" min="2022-10-15" id="html5-datetime-local-input" />
                <div class="alert-danger"> {{ $errors->first('date_start')}}</div>
              </div>
              <label for="html5-datetime-local-input" class="col-md-2 col-form-label">Date End</label>
              <div class="col-md-4">
                <input name="date_end" class="form-control" type="date" min="2022-10-15" id="html5-datetime-local-input" />
                <div class="alert-danger"> {{ $errors->first('date_end')}}</div>
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Send</button>
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
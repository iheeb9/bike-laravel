@extends('layouts/contentNavbarLayout')

<script src="{{ asset('assets/Client/js/jquery.min.js') }}"></script>
@section('title', ' Horizontal Layouts - Forms')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Balade/</span> Modifier Balade</h4>

<!-- Basic Layout & Basic with Icons -->
<div class="row">
  <!-- Basic Layout -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">

      </div>
      <div class="card-body">
        <form action="{{ route('location.update',$location) }}" method="POST" enctype="multipart/form-data">
          @csrf
    @method('PUT')
          <div class="row mb-3 ">
            <label class="col-sm-2 col-form-label " for="Titre">Utilisateur</label>
            <div class="col-sm-4">
              <select class="form-select" name="user" id="billetterie" aria-label="Default select example">
                <option selected value="{{$location->user_id->id }}">{{$location->user_id->name}} </option>
                @foreach($ListUser as $user)
              <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
              </select>
              <div class="alert-danger"> {{ $errors->first('user')}}</div>
            </div>
            <label class="col-sm-2 col-form-label " for="Titre">Velo</label>
            <div class="col-sm-4">
              <select class="form-select" name="velo" id="billetterie" aria-label="Default select example">
                <option selected value="{{$location->velo_id->id }}">{{ $location->velo_id->nom }} </option>
                @foreach($ListVelo as $velo)
                <option value="{{$velo->id}}">{{$velo->nom}}</option>
                  @endforeach
                </select>
                <div class="alert-danger"> {{ $errors->first('velo')}}</div>
            </div>
          </div>
          <div class="row mb-3 ">
            <label class="col-sm-2 col-form-label " for="Titre">Date Debut</label>
            <div class="col-sm-4">
              <input name="date_start" class="form-control" value="{{ $location->date_start }}" type="date" min="{{$mytime}}" id="html5-datetime-local-input" />
              <div class="alert-danger"> {{ $errors->first('date_start')}}</div>
                        </div>
            <label class="col-sm-2 col-form-label " for="Titre">Date Fin</label>
            <div class="col-sm-4">
              <input name="date_end" class="form-control" value="{{ $location->date_end }}" type="date" min="{{$mytime}}" id="html5-datetime-local-input" />
              <div class="alert-danger"> {{ $errors->first('date_end')}}</div>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Modifier</button>
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
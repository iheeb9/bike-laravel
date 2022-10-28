@extends('Client/layouts/Client_commonMaster')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset(mix('assets/vendor/fonts/boxicons.css')) }}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/core.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/theme-default.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/css/demo.css')) }}" />

<link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')) }}" />

<!-- Vendor Styles -->
@yield('vendor-style')
<style>
    #navigation{
        display: none;
    }
    </style>
@section('content')
<div class="container">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Balade/</span> Modifier Balade</h4>

<!-- Basic Layout & Basic with Icons -->
<div class="row">
  <!-- Basic Layout -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">

      </div>
      <div class="card-body">
        <form action="{{ route('c_location.update',$location) }}" method="POST" enctype="multipart/form-data">
          @csrf
    @method('PUT')
          <div class="row mb-3 ">     
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
</div>
@endsection
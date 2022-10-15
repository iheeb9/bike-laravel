@extends('layouts/contentNavbarLayout')

@section('title', ' Horizontal Layouts - Forms')

@section('content')
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Balade/</span> Ajouter Balade</h4>

  <!-- Basic Layout & Basic with Icons -->
  <div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Ajouter Balade</h5> <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
          <form action="{{ route('balade.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3 ">
              <label class="col-sm-2 col-form-label" for="Titre">Titre</label>
              <div class="col-sm-4">
                <input type="text"  name="titre" class="form-control" id="Titree" placeholder="Titre.." />
              </div>
              <label for="  billetterie"  class="col-sm-2 col-form-label" > Info billetterie</label>
              <div class="col-sm-4">
                <select class="form-select" name="info_billetterie" id="billetterie" aria-label="Default select example">
                  <option selected>.....</option>
                  <option value="Disponible à la réservation">Disponible à la réservation</option>
                  <option value="Disponible sur place">Disponible sur place</option>

                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="maximum">Nombre Maximal</label>
              <div class="col-sm-2">
                <input type="number" name="nombre" min="0"  max="50" class="form-control" id="maximum" placeholder="maximum." />
              </div>
              <label class="col-sm-2 col-form-label" for="Minimum">Nombre Minimum</label>
              <div class="col-sm-2">
                <input type="number" name="jauge" min="0"  max="50" class="form-control" id="Minimum" placeholder="minimum." />
              </div>
              <label class="col-sm-2 col-form-label" for="distance">distance</label>
              <div class="col-sm-2">
                <input type="number" min="0"  name="distance" max="50" class="form-control" id="distance" placeholder="km." />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="Guide">Guide</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="Guide" name="guide_accompagnateur" placeholder="Guide.." />
              </div>
              <label for="  Disponiblite"  class="col-sm-2 col-form-label" > Disponiblite</label>
              <div class="col-sm-4">
                <select class="form-select"  name="disponible" id="Disponiblite" aria-label="Default select example">
                  <option value="Disponible" selected>Disponible</option>
                  <option value="Non_disponible">Non disponible</option>
                  <option value="Reporté">Reporté</option>

                </select>
              </div>


            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="Depart">Depart</label>
              <div class="col-sm-3">
                <input type="text" name="depart" class="form-control" id="Depart" placeholder="Depart.." />
              </div>
              <label class="col-sm-1 col-form-label" for="Arrivé">Arrivé</label>
              <div class="col-sm-3">
                <input type="text" name="arrive" class="form-control" id="Arrivé" placeholder="Arrivé.." />
              </div>
              <label class="col-sm-1 col-form-label" for="prix">prix</label>
              <div class="col-sm-2">
                <input type="number" min="0"  name="prix" max="50" class="form-control" id="prix" placeholder="dinars." />
              </div>
            </div>
            <div class=" row mb-3">
              <label for="formFile" class="col-sm-2 col-form-label">Image</label>
              <div class="col-sm-6">
              <input name="image" class="form-control" type="file" id="formFile">
              </div>
              <label for="html5-datetime-local-input" class="col-md-2 col-form-label">Datetime</label>
              <div class="col-md-2">
                <input name="date" class="form-control" type="date" value="2021-06-18T12:30:00" id="html5-datetime-local-input" />
              </div></div>


            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="Service">Service</label>
              <div class="col-sm-10">
                <input type="text"  name="Services" id="Service" class="form-control phone-mask" placeholder="Service" aria-label="658 799 8941" aria-describedby="basic-default-phone" />
              </div>
            </div>
            <div class="mb-3 row">

            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="Description">Description</label>
              <div class="col-sm-10">
                <textarea name="description" id="Description" class="form-control" placeholder="Description" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
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

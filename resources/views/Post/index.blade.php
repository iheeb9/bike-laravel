@extends('layouts/contentNavbarLayout')
@section('page-script')
  <script src="{{asset('assets/js/ui-toasts.js')}}"></script>
  <script>
    $(document).ready(function() {
      @if (Session::has('success'))
      document.getElementById('showToastPlacement').click();

      @endif
    });</script>
@endsection

@section('content')
  @if ($message =Session::has('success'))
    <div class="bs-toast toast toast-placement-ex m-2" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
      <div class="toast-header">
        <i class='bx bx-bell me-2'></i>
        <div class="me-auto fw-semibold">success</div>
        <small>1 min</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        opération effectuée avec succès
      </div>
    </div>
  @endif
  <div class="d-none">
    <select id="selectTypeOpt" class="form-select color-dropdown">
      <option value="bg-success" selected>Primary</option></select>
    <select class="form-select placement-dropdown" id="selectPlacement">
      <option value="top-0 end-0">Top left</option></select>
    <button id="showToastPlacement" class="btn btn-primary d-block">Show Toast</button>
  </div>


  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Posts /</span> List Posts

  </h4>

  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">List Posts</h5>

    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
        <tr>
          <th>Subject</th>
          <th>date</th>
          <th></th>
          <th>User</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @foreach($ListPost as $review)
          <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$review->Subject}}</strong></td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{$review->created_at}}</td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <img class="img-fluid" src="{{asset('images/'.$review->image)}}" alt="Card image cap" style="height:200px;
width: 70% ;
margin-left:15%;"/></td>

            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{$review->user->name}}</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">

                 <form action="{{ route('post.destroy',$review->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button  type="submit" class="btn bg-transparent"  style="padding-left: 1px; margin-top: 1px">     <a class="dropdown-item"   ><i class="bx bx-trash me-1"></i>   Delete         </a></button>

                  </form>

                </div>
              </div>
            </td>
          </tr>
          <tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <br class="my-5">
    <br class="my-5">
    <div class="d-flex justify-content-end me-5">
      {!! $ListPost->links() !!}
    </div>
  </div>

  <!--/ Basic Bootstrap Table -->

  <hr class="my-5">

@endsection

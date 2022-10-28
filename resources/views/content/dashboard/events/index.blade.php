@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')

<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Events /</span> Managament Events
</h4>
<a type="submit" href="{{route('events.create')}}" class="btn btn-primary">Add Event</a>
@if(Session::has('success'))
<p class="alert alert-info">{{ Session::get('success') }}</p>
@endif
@if(Session::has('danger'))
<p class="alert alert-danger">{{ Session::get('danger') }}</p>
@endif
<div class="card">
    <h5 class="card-header">Events List</h5>
    <div class="table-responsive text-nowrap">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Image</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @foreach ($events as $item)

                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$item->title}}</strong></td>
                    <td>{{date('d-M-y',strtotime($item->start_date))}} </td>
                    <td>{{date('d-M-y',strtotime($item->end_date))}}</td>
                    <td><li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="{{asset('storage/public/image/$item->image.jpg')}}" alt="Avatar" class="rounded-circle">
              </li></td>
                    <td>{{$item->phone}}</td>
                    <td>
                        
                                <a  href="/admin/events/edit/{{$item->id}}"><i class="bx bx-edit-alt me-1"></i></a>
                               

                                <a  href="{{route('events.delete',$item->id)}}" onclick="return confirm('Are you sure?')"><i class="bx bx-trash me-1"></i></a>


                               
                    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
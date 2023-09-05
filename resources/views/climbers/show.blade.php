@extends('layouts.app')
@section('content')
<div class="container">
        <h1>Climbers Details</title>
                <h3> First name: {{$climbers -> first_name}}</h3>
                <h3> Last name: {{$climbers-> last_name}}</h3>
                <h3> Age: {{$climbers -> age}}</h3>
                <h3> Email: {{$climbers -> email}}</h3>

                <p><a class="btn btn-primary" href="{{route('climbers.index')}}">Back to list</a></p>
                <p><a class="btn btn-primary" href="{{route('climbers.edit', ['climber' => $climbers->id])}}">Edit</a></p>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteClimbersModal"> Delete</button>
                </form>

</div>
<div class="modal" tabindex="-1" id="deleteClimbersModal">
   <div class="modal-dialog">
                <div class="modal-content">
                        <form action="{{route('climbers.destroy', $climbers->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                                <div class="modal-header">
                                        <h5 class="modal-title">Delete Employee Confirmation</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <p>Are you sure you want to delete?</p>
                                </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                        </form>
                </div>
        </div>
</div>
@endsection
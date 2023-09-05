@extends('layouts.app')
  @section('content')
    <div class="container">
        <h1>Edit Profile</h1>

        <form action="{{route('climbers.update', $climbers->id)}}" method="post">
            @method('PUT') 
            @csrf
            <div class="mb-3 col-md-4">
                <label class="form-label">First Name</label>
                <input class="form-control" type="text" name="first_name" value="{{$climbers->first_name}}">
            </div>

            <div class="mb-3 col-md-4">
                <label class="form-label">Last Name</label>
                <input class="form-control" type="text" name="last_name" value="{{$climbers->last_name}}">
            </div>

            <div class="mb-3 col-md-4">
                <label class="form-label">Email</label>
                <input class="form-control" type="text" name="email" value="{{$climbers->email}}">
            </div>

            <div class="mb-3 col-md-4">
            <label class="form-label">Phone Number</label>
            <input class="form-control" type="text" name="phone_number" value="{{$climbers->phone_number}}">
        </div>

            <div class="mb-3 col-md-4">
                <label class="form-label">Age</label>
                <input class="form-control" type="number" name="age" value="{{$climbers->age}}">
            </div>

            <div class="mb-3 col-md-4">
            <label class="form-label">Address</label>
            <input class="form-control" type="text" name="address" value="{{$climbers->address}}">
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label">Gender</label>
            <select class="form-select" name="gender">
                <option disabled value="" selected>{{$climbers->gender}}</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label">Citizenship</label>
            <select class="form-select" name="citizenship">
                <option disabled value="" selected>Please Select</option>
                <option value="Local">Local</option>
                <option value="Foreigner">Foreinger</option>
            </select>
        </div>

            <input class="btn btn-primary" type="submit">
            <a class="btn btn-secondary" href="{{url()->previous()}}">Cancel</a>

        
        </form>

        @include('partials.error-list-footer')
    </div>
    @endsection
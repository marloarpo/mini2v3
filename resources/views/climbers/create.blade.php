@extends('layouts.app')
@section('content')
<div class="container">

    <h1>Registration</h1>

    @include('partials.error-list-footer')
    <form action="{{route('climbers.store')}}" method="POST">
        @csrf
        <div class="mb-3 col-md-4">
            <label class="form-label">First Name</label>
            <input class="form-control" type="text" name="first_name">
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label" >Last Name</label>
            <input class="form-control" type="text" name="last_name">
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label">Email</label>
            <input class="form-control" type="text" name="email" value="{{ old('email') }}">
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label">Phone Number</label>
            <input class="form-control" type="text" name="phone_number">
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label">Age</label>
            <input class="form-control" type="number" name="age">
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label">Address</label>
            <input class="form-control" type="text" name="address">
        </div>

        <div class="mb-3 col-md-4">
            <label class="form-label">Gender</label>
            <select class="form-select" name="gender">
                <option disabled value="" selected>Select Gender</option>
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

        <input class="btn btn-primary" type="submit" value="save">
        <a class="btn btn-secondary" href="{{url()->previous()}}">Cancel</a>

    </form>
   
    
</div>
@endsection
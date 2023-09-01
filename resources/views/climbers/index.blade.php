@extends('layouts.app')
@section('content')

<div class="container">
    <table class="table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Citizenship</th>
        </tr>
        @foreach ($climbers as $climber)
        <tr>
            <td>{{$climber->first_name}}</td>
            <td>{{$climber->last_name}}</td>
            <td>{{$climber->email}}</td>
            <td>{{$climber->age}}</td>
            <td>{{$climber->gender}}</td>
            <td>{{$climber->citizenship}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
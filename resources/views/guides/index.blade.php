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
            <th>Status</th>
        </tr>
        @foreach ($guides as $guide)
        <tr>
            <td>{{$guide->first_name}}</td>
            <td>{{$guide->last_name}}</td>
            <td>{{$guide->email}}</td>
            <td>{{$guide->age}}</td>
            <td>{{$guide->gender}}</td>
            <td>{{$guide->citizenship}}</td>
        </tr>
        @endforeach
    </table>
    {{$guides->links()}}
</div>
@endsection
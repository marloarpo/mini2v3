@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if(auth()->user()->is_officer == 1)
                    <a href="{{url('officer/routes')}}">Officer</a>
                    @else
                    <div class="panel-heading">Welcome Viewers</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

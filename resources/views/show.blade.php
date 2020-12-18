@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $listing->name }} <span><a class="float-right btn btn-warning btn-xs " href="{{route('home')}}">Go Back</a></span></div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Address:{{$listing->address}}</li>
                        <li class="list-group-item">Website: <a href="{{$listing->website}}" target="_blank">{{$listing->website}}</a></li>
                        <li class="list-group-item">Email:{{$listing->email}}</li>
                        <li class="list-group-item">Phone:{{$listing->phone}}</li>
                    </ul><hr>
                    <div class="well">{{$listing->bio}}</div>

                </div>
            </div>
        </div>
    </div>
@endsection

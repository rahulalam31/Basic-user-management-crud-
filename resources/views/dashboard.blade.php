@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span class="float-right"> <a class="btn btn-warning btn-xs" href="{{route('listings.create')}}"> Create listing</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Your Listings</h3>
                    @if (count($listings))
                    <table class="table -striped">
                        <tr>
                            <th>Company</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($listings as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td><a href="{{ route('listings.edit',$item->id) }}" class="btn btn-warning float-right">Edit</a></td>
                            <td>
                                <form action="{{ route('listings.destroy',$item->id) }}" method="POST">@csrf @method('DELETE') <button class="btn btn-danger float-right btn xs">Delete</button></form>
                            </td>
                        </tr>

                        @endforeach
                    </table>

                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

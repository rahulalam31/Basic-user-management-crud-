@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Latest Listings</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (count($listing))

                        @foreach ($listing as $item)
                        <li class="list-group-item"><a href="{{ route('listings.show',$item->id) }}">{{ $item->name }}</a></li>

                        @endforeach
                        @else
                        <p>No listings Found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

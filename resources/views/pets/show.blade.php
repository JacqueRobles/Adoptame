@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $pet->name }}</h2>
                    </div>
                    <div class="card-body">
                        <p>{{ $pet->description }}</p>
                        <p>Age: {{ $pet->age }}</p>
                        <p>Species: {{ $pet->species }}</p>
                        <p>Breed: {{ $pet->breed }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

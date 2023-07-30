@extends('layouts.app')

@section('content')

    <div class="bg-color-main">
        <div class="container">
            <div class="row py-5 position-relative">
                @foreach($comics as $id => $comic)
                    <div class="col-2 py-3">
                        <a href="{{ route('comics.show', $id) }}">
                            <div class="card bg-color-main">
                                <img class="thumbnail-size" src="{{ $comic['thumb'] }}">
                                <h5 class="fs-6 text-uppercase text-white mt-2">{{ $comic['series'] }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    <button type="button">LOAD MORE</button>
                </div>
                <div class="col-2 current-series">CURRENT SERIES</div>
            </div>
        </div>
    </div>
        
@endsection
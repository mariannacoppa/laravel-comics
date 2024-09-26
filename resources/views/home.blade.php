@extends('layouts.app')

@section('content')
<main>
    <div id="jumbotron">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center"></h2>
                </div>
            </div>
        </div>
    </div>
    <div id="comics-container">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-12 col-md-3 col-lg-2">
                <div class="comic-card m-1 border-0">
                    <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <div class="card-body">
                        <span class="text-uppercase">{{ $comic['title'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection
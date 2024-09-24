@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
            <ul class="list-unstyled d-flex">
                <li class="text-capitalize text-decoration-none">characters</li>
                <li class="text-capitalize text-decoration-none">comics</li>
                <li class="text-capitalize text-decoration-none">movies</li>
                <li class="text-capitalize text-decoration-none">tv</li>
                <li class="text-capitalize text-decoration-none">games</li>
                <li class="text-capitalize text-decoration-none">collectibles</li>
                <li class="text-capitalize text-decoration-none">videos</li>
                <li class="text-capitalize text-decoration-none">fans</li>
                <li class="text-capitalize text-decoration-none">news</li>
                <li class="d-flex">
                    <div class="text-capitalize text-decoration-none">shop</div>
                    <i class="bi bi-chevron-down"></i>
                </li>
                <li class="d-flex">
                    <input type="search" name="search" placeholder="Search">
                    <i class="bi bi-search"></i>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
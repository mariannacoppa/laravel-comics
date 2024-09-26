@extends('layouts.app')
<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="list-unstyled d-flex justify-content-around">
                    <li class="text-decoration-none">
                        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo" class="logo">
                    </li>
                    <li class="text-decoration-none"><a href="#" class="nav-link text-uppercase">characters</a></li>
                    <li class="text-decoration-none"><a href="#" class="nav-link text-uppercase">comics</a></li>
                    <li class="text-decoration-none"><a href="#" class="nav-link text-uppercase">movies</a></li>
                    <li class="text-decoration-none"><a href="#" class="nav-link text-uppercase">tv</a></li>
                    <li class="text-decoration-none"><a href="#" class="nav-link text-uppercase">games</a></li>
                    <li class="text-decoration-none"><a href="#" class="nav-link text-uppercase">collectibles</a></li>
                    <li class="text-decoration-none"><a href="#" class="nav-link text-uppercase">videos</a></li>
                    <li class="text-decoration-none"><a href="#" class="nav-link text-uppercase">fans</a></li>
                    <li class="text-decoration-none"><a href="#" class="nav-link text-uppercase">news</a></li>
                    <li class="d-flex">
                        <div class="text-decoration-none"><a href="#" class="nav-link text-uppercase">shop</a></div>
                        <i class="bi bi-chevron-down"></i>
                    </li>
                    <li class="d-flex">
                        <input type="search" name="search" class="search" placeholder="Search">
                        <i class="bi bi-search"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
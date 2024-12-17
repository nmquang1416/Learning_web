@extends('layout.layout-default')

@section('content')
    <div class="hero py-4">
        <div class="container">
            <h1 class="fw-bold">Learning creative skill</h1>
            <p class="col-4">Explore thousands of tutorials, tips and tricks from leading industry experts. Totally free.</p>
            <form class="d-flex col-4" role="search">
                @csrf
                <i class="bi bi-search icon-search"></i>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
@endsection

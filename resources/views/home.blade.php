@extends('layouts.app')

@section('content')
<main class="container pt-5">
    <div class="row">
        <div class="col-md-12 mt-4 mb-4">
            <h1 class="display-4 text-center"><u>Ranking DJs</u></h1>
        </div>
        
        <div class="col-md-8 mx-auto">
            <div class="card bg-dark text-white mb-3">
                <img class="card-img" src="{{ asset('images/dj1.jpg') }}" alt="Card image">
                <div class="card-img-overlay">
                    <h1 class="card-title text-right font-weight-bold"><a href=" {{ route('profile') }}"> Dj Alex</a></h1>
                    <h1 class="card-title text-right font-weight-bold"># 1</h1>
                    <h1 class="card-title text-right font-weight-bold">Puntos 98</h1>
                </div>
            </div>
            <div class="card bg-dark text-white mb-3">
                <img class="card-img" src="{{ asset('images/dj2.jpeg') }}" alt="Card image">
                <div class="card-img-overlay">
                    <h1 class="card-title text-right font-weight-bold"><a href="#"> Dj Alex</a></h1>
                    <h1 class="card-title text-right font-weight-bold"># 1</h1>
                    <h1 class="card-title text-right font-weight-bold">Puntos 98</h1>
                </div>
            </div>
            <div class="card bg-dark text-white mb-3">
                <img class="card-img" src="{{ asset('images/dj3.jpg') }}" alt="Card image">
                <div class="card-img-overlay">
                    <h1 class="card-title text-right font-weight-bold"><a href="#"> Dj Alex</a></h1>
                    <h1 class="card-title text-right font-weight-bold"># 1</h1>
                    <h1 class="card-title text-right font-weight-bold">Puntos 98</h1>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
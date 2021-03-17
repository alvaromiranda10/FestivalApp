@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 5em;">
    <div class="row ">
        <div class="col-md-7 mx-auto">
            <div class="card mb-3">
                <img class="card-img-top" src="{{ asset('images/dj3.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <h1 class="card-title">Nombre DJ <i class="text-muted h3">#1</i></p></h2>
                  <p class="card-text">Edad: 36</p>
                  <p class="card-text"><strong>Ultimos 2 conciertos:</strong></p>
                </div>
                <div class="card-footer">
                  <p class="card-text text-muted">Tomorroland</p>
                </div>
                <div class="card-footer">
                  <p class="card-text text-muted">Awakening</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

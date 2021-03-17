@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 5em;">
    <div class="row ">
        <div class="col-md-7 mx-auto">
            <div class="card mb-3">
              @if(empty($user->image_src))
                <img class="card-img-top" src="{{ asset( 'images/example.jpg') }}" alt="Card image cap">
              @else
                <img class="card-img-top" src="{{ asset( 'images/' .$user->image_src) }}" alt="Card image cap">
              @endif
                <div class="card-body">
                  <h1 class="card-title">{{ $user->name}} <i class="text-muted h3"># {{ $position }}</i></p></h2>
                  <p class="card-text"><strong>Edad: </strong>{{ $user->age .' años'}}</p>
                  <p class="card-text"><strong>Ultimos 2 conciertos:</strong></p>
                </div>
                <div class="card-footer">
                  @if (count($latestsFestivals))
                    @foreach ($latestsFestivals as $festival)
                      <p class="card-text text-muted">{{ $festival->name}}</p>  
                    @endforeach
                  @else
                    <p class="card-text text-muted">No se registra participaciones</p>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

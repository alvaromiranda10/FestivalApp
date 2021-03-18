@extends('layouts.app')

@section('content')
<main class="container pt-5">
    <div class="row">
        <div class="col-md-12 mt-4 mb-4">
            <h1 class="display-2 text-center">Ranking DJ´s</h1>
        </div>
        
        @foreach ($users as $user)
        <div class="col-md-8 mx-auto">
            <div class="card bg-dark text-white mb-3">

                @if(empty($user->image_src))
                    <img class="card-img" src="{{ asset( 'images/example.jpg') }}" alt="Card image">
                @else
                    <img class="card-img" src="{{ asset('images/' .$user->image_src) }}" alt="Card image">
                @endif

                <div class="card-img-overlay">
                    <h1 class="card-title text-right font-weight-bold"><a href=" {{ route('profile', $user->id) }}">{{ $user->name}}</a></h1>
                    <h1 class="card-title text-right font-weight-bold">#{{ $loop->iteration  }}</h1>
                   
                    @if(empty($user->festivals_sum_points))
                        <h1 class="card-title text-right font-weight-bold"> 0 Pts.</h1>
                    @else
                        <h1 class="card-title text-right font-weight-bold">{{ $user->festivals_sum_points}} Pts.</h1>
                    @endif

                </div>
            </div>  
        </div>
        @endforeach

    </div>
</main>

@endsection
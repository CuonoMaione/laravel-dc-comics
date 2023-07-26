@extends('layouts.app')

@section('title', 'Welcome')

@section('main-content')

<main>
    <section>
        <img id="jumbotron" src="../assets/img/jumbotron.jpg" alt="">
        <span class="info"> CURRENT SERIES</span>
    </section>    
    <div class="container">

        @foreach ($dcComics as $card)
        <div class="cards">
                
            <img src="{{ $card['thumb'] }}" alt="">
            <h2>{{ $card['series'] }}</h2>

        </div>
        @endforeach
        
        
            
        <button> LOAD MORE </button>
        
    </div>
</main>

@endsection
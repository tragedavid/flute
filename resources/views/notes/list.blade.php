@extends('master')

@section('content')
<h1 class="center">Liste des notes</h1>

@foreach ($notes as $note)
    
<div class="card float-left" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Note : {{$note->name}}</h5>
        <p class="card-text">{{$note->doigté}}</p>
        <div class="doigte">
            {{-- @for ($i = 0; $i < 6; $i++) --}}
            @if ($note->trou1 == 0)
                {!! '<div class="vide"></div>' !!} 
            @elseif ($note->trou1 == 1)
                {!! '<div class="plein"></div>' !!} 
            @endif
            @if ($note->trou2 == 0)
                {!! '<div class="vide"></div>' !!} 
            @elseif ($note->trou2 == 1)
                {!! '<div class="plein"></div>' !!} 
            @endif
            @if ($note->trou3 == 0)
                {!! '<div class="vide"></div>' !!} 
            @elseif ($note->trou3 == 1)
                {!! '<div class="plein"></div>' !!} 
            @endif  
            @if ($note->trou4 == 0)
                {!! '<div class="vide"></div>' !!} 
            @elseif ($note->trou4 == 1)
                {!! '<div class="plein"></div>' !!} 
            @endif
            @if ($note->trou5 == 0)
                {!! '<div class="vide"></div>' !!} 
            @elseif ($note->trou5 == 1)
                {!! '<div class="plein"></div>' !!} 
            @endif
            @if ($note->trou6 == 0)
                {!! '<div class="vide"></div>' !!} 
            @elseif ($note->trou6 == 1)
                {!! '<div class="plein"></div>' !!} 
            @endif    
            {{-- @endfor --}}
        </div>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </div>
</div>

@endforeach


@endsection

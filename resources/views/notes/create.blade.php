@extends('master')

@section('content')
    
    <form action="{{ url('/note/insert') }}" method="post">

    @csrf


    <div class="form-group">
        <label for="exampleFormControlInput1">Nom de la note</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ old('name') }}" required>
        @error('name')
            {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Doigté</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="doigté" value="{{ old('doigté') }}">
        @error('doigté')
            {{ $message }}
        @enderror
    </div>
    @for ($i = 0; $i < 6; $i++)
        
    <div class="radio-box float-left">
    <h3>Trou {{$i+1}}</h3>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="trou{{$i+1}}" id="exampleRadios1" value="0">
        <label class="form-check-label" for="exampleRadios1">
    Libre
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="trou{{$i+1}}" id="exampleRadios2" value="1">
        <label class="form-check-label" for="exampleRadios2">
    Bouché
        </label>
    </div>
    </div>
    @endfor

    </div>

    <div class="row">
        <div class="col text-center">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </div>

  </form>


@endsection
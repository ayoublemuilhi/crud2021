@extends('master')

@section('content')
    <form method="post" action="{{route('branche.store')}}">
        @csrf

        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder=" name_branche" name="branche">
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>


        </div>
    </form>

@endsection


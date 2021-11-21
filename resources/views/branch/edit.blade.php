@extends('master')

@section('content')
    <form method="post" action="{{route('branche.update',$branche->id)}}">
        @csrf
@method('PUT')
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder=" name_branche" name="branche" value="{{$branche->branche}}">
            </div>

            <button type="submit" class="btn btn-primary">update</button>


        </div>
    </form>

@endsection


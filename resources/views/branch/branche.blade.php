@extends('master')

@section('content')
    <a href="{{route('create')}}" class="btn btn-primary">ajouter branche</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">branche</th>
            <th scope="col">created</th>
            <th scope="col">action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($branches as $b)
            <tr>
                <th scope="row">{{$b->id}}</th>
                <td>{{$b->branche}}</td>
                <td>{{$b->created_at->diffForHumans()}}</td>
                <td>sdfd</td>
            </tr>
        @endforeach


        </tbody>
    </table>

@endsection

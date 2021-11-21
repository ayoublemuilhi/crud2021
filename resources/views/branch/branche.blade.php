@extends('master')

@section('content')
    <a href="{{route('branche.create')}}" class="btn btn-primary">ajouter branche</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">branche</th>
            <th scope="col">Createur</th>
            <th scope="col">created</th>
            <th scope="col">action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($branches as $b)
            <tr>
                <th scope="row">{{$b->id}}</th>
                <td>{{$b->branche}}</td>
                <td><a href="{{url('/user/'.$b->user->id)}}">{{$b->user->name}}</a></td>
                <td>{{$b->created_at->diffForHumans()}}</td>
                <td>
                    <a href="{{route('branche.edit',$b->id)}}">update</a>
                    <!-- del -->
                    <form method="post" action="{{route('branche.destroy',$b->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    <!-- del -->
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>

@endsection

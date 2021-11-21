@extends('master')

@section('content')


    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">created at</th>

        </tr>
        </thead>
        <tbody>



             <tr>

                 <td>{{$info->id}}</td>
                 <td>{{$info->name}}</td>
                 <td>{{$info->email}}</td>
                 <td>{{$info->created_at->diffForHumans()}}</td>
             </tr>



        </tbody>
    </table>

@endsection

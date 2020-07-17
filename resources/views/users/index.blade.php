@extends('layouts.template')
@section('content')
    <div class="container">
        <div class="row">
            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                <strong>Success:</strong>{{Session::get('success')}}
            </div>
            @endif
        </div>
        <div class="row">
        <a href="{{route('users.create')}}" class="btn btn-primary">CREATE</a>
                <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                            <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-secondary">EDIT</a></td>
                                <td> <form action="{{route('users.destroy',$user->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" class="btn btn-danger" value="DELETE">
                                    </form></td>
                            </tr>
                            @endforeach
                          </tbody>
                      </table>
        </div>
    </div>
@endsection
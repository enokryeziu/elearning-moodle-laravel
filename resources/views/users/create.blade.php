@extends('layouts.template')

@section('content')
    
    
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <form action="{{route('users.store')}}" method="POST">
                @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter name" name="name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Enter password" name="password">
                    </div>
                    <div class="form-group">
                        <select name="role" id="role">
                            @foreach ($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Create">
                </form> 
            </div>
        </div>
    </div>

    @endsection
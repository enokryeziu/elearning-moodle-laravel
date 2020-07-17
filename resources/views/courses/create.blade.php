@extends('layouts.template')

@section('content')
<br>

<div class="container">
    <br>
    <h1>Create a course</h1>
    <div class="row">
        <div class="col-md-8">
            <form action="{{route('courses.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="enter name">
                </div>
                <div class="form-group">
                    <input type="text" name="description" class="form-control" placeholder="enter description">
                </div>
                <div class="form-group">
                    <select name="profesori" id="profesori">
                        @foreach ($profesors as $profesor)
                            <option value="{{$profesor->id}}">{{$profesor->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="CREATE" class="btn btn-primary">
                </div>
                
            </form>
        </div>
    </div>
<br>
</div>
    
@endsection
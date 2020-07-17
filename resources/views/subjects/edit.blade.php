@extends('layouts.template')

@section('content')
<br>

<div class="container">
    <div class="row">
        <div class="col-md-8">
        <form action="{{route('subjects.update',$subject->id)}}" method="POST">
            @method('PATCH')
            @csrf
                <div class="form-group">
                <input type="text" name="title" value="{{$subject->title}}" class="form-control">
                </div>
                <div class="form-group">
                <input type="text" name="description" value="{{$subject->description}}" class="form-control">
                </div>
                <div class="form-group">
                <input type="submit" value="update" class="form-control">
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
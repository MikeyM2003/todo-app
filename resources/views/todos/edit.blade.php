@extends('layouts.myapp')

@section('content')
<h3>
    Edit Todos
</h3>




<form action="{{ route('todos.update', $todo->id) }}" method="post">
    @csrf
    @method('PUT')
    <div>
        <Label>Title</Label>
        <input type ="text" name="title" id="title" value="{{old('title')?:$todo->title}}"/>
        @if($errors->has('title'))
        <span>{{$errors->first('title')}}</span>
        @endif
    </div>
    <div>
        <Label>Description</Label>
        <input type ="text" name="body" id="body"  value="{{old('body')?:$todo->body}}"/>
        @if($errors->has('body'))
        <span>{{$errors->first('body')}}</span>
        @endif
    </div>
    <button type="submit">Edit</button>
    
</form>
@endsection
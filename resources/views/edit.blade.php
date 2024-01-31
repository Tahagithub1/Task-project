@extends('Layouts.app')

@section('title','Edit New Task')


@section('content')
@if ($errors->any())

<div>
    <ul>
        @foreach ($errors->all() as $error)
             <li>
                {{ $error }}
             </li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('tasks.update' , ['task' => $task->id]) }}" method="post">
@csrf
@method('PUT')

<label for="title">
    title
</label>
<input type="text" id="title" name="title" value="{{ $task->title }}">


<label for="description">
    description
</label>
<textarea rows="8" type="text" id="description" name="description">{{ $task->description }}</textarea>


<label for="long_description">
    long_description
</label>
<textarea rows="15" type="text" id="long_description" name="long_description">{{ $task->long_description }}</textarea>


<button type="submit"> Edit Task </button>
</form>


@endsection

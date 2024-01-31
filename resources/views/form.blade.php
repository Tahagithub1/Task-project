@extends('Layouts.app')

@section('title',isset($task) ? 'Edit New Task' : 'Add Task')


@section('content')

{{-- @if ($errors->any())
<div>
    <ul id="error">
        @foreach ($errors->all() as $error)
             <li class="error">
                {{ $error }}
             </li>
        @endforeach
    </ul>
</div>
@endif --}}

<form action="{{ isset($task) ? route('tasks.update' , ['task' => $task->id]) : route('tasks.store') }}" method="post">
@csrf
@isset($task)
@method('PUT')
@endisset


<label for="title">
    title
</label>
<input type="text" id="title" name="title" value="{{ $task->title ?? old('title') }}">
@error('title')
<div>
    {{ $message }}
</div>
@enderror

<label for="description">
    description
</label>
<textarea rows="8" type="text" id="description" name="description">{{ $task->description ?? old('description') }}</textarea>

@error('description')
<div>
    {{ $message }}
</div>
@enderror

<label for="long_description">
    long_description
</label>
<textarea rows="15" type="text" id="long_description" name="long_description">{{ $task->long_description ?? old('long_description') }}</textarea>

@error('long_description')
<div>
    {{ $message }}
</div>
@enderror

<button type="submit">
@isset($task)
Update Task
@else
Add Task
@endisset

     </button>
</form>


@endsection

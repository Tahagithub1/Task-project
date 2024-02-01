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
<div class="py-10 px-10 ">


<form action="{{ isset($task) ? route('tasks.update' , ['task' => $task->id]) : route('tasks.store') }}" method="post">
    
@csrf
@isset($task)
@method('PUT')
@endisset

<div class="mb-4">


<label  for="title">
    title
</label>
<input type="text" id="title" name="title" value="{{ $task->title ?? old('title') }}" @class(['border-red-500' => $errors->has('title')])>
@error('title')
<div class="error">
    {{ $message }}
</div>
@enderror
</div>
<div class="mb-4">


<label for="description">
    description
</label>
<textarea rows="8" type="text" id="description" name="description" @class(['border-red-500' => $errors->has('description')])>{{ $task->description ?? old('description') }}</textarea>

@error('description')
<div class="error">
    {{ $message }}
</div>
@enderror
</div>

<div class="mb-4">


<label for="long_description">
    long_description
</label>
<textarea  rows="15" type="text" id="long_description" name="long_description" @class(['border-red-500' => $errors->has('long_description')])>{{ $task->long_description ?? old('long_description') }}</textarea>

@error('long_description')
<div class="error">
    {{ $message }}
</div>
@enderror

</div>
<div class="flex gap-2 items-center ">

<button type="submit" class="btn">

@isset($task)
Update Task
@else
Add Task
@endisset
     </button>

     <div>
        <a class="link" href="{{ route('tasks.index') }}">Cansel</a>
     </div>

</div>
</form>
</div>
@endsection

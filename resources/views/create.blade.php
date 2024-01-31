@extends('Layouts.app')

{{-- @section('title','Add New Task') --}}

@section('content')


@include('form')

@endsection




{{--
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
@endif --}}

{{-- <form action="{{ route('tasks.store')}}" method="post">

@csrf

<label for="title">
    title
</label>

<input type="text" id="title" name="title" value="{{ old('title') }}">
@error('title')
<p>{{ $message}}</p>
@enderror


<label for="description">
    description
</label>
<textarea rows="8" type="text" id="description" name="description">{{ old('description') }}</textarea>
@error('description')
<p>{{ $message}}</p>
@enderror

<label for="long_description">

    long_description

</label>
<textarea rows="15" type="text" id="long_description" name="long_description">{{ old('long_description') }}</textarea>
@error('long_description')
<p>{{ $message}}</p>
@enderror

<button type="submit"> Add Task </button>

</form>
 --}}

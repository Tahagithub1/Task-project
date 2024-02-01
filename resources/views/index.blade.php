@extends('Layouts.app')

@section('title' ,'The list of tasks')


@section('content')

{{--
@if(session()->has('success'))
<div>{{ session('success') }}</div>
    @endif --}}
<nav class="mb-4">
    <a href="{{ route('tasks.create') }}" class="link">Add Task</a>
</nav>


@forelse ( $tasks as $task )

<div class="text-slate-700">
    <a href="{{ route('tasks.show' , ['task'=>$task->id]) }}" @class(['line-through decoration-red-700 decoration-2' => $task->completed])> {{$task->title}}</a>
   </div>

   @empty
   <div style="color: red">
       there are not tasks
   </div>
   @endforelse
<nav class="mt-4 ">
    @if ($tasks->count())
    {{ $tasks->links() }}
    @endif
</nav>


</div>

@endsection







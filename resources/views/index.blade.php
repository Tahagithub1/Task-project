@extends('Layouts.app')

@section('title' ,'The list of tasks')


@section('content')
@if(session()->has('success'))
<div>{{ session('success') }}</div>
    @endif
@forelse ( $tasks as $task )

<div>
    <a href="{{ route('tasks.show' , ['task'=>$task->id]) }}"> {{$task->title}}</a>
   </div>

   @empty
   <div>
       there are not tasks
   </div>
   @endforelse
   
@if ($tasks->count())
{{ $tasks->links() }}
@endif

</div>

@endsection







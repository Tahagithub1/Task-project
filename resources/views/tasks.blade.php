@extends('Layouts.app')

@section('title' , $task->title)

@section('content')

<nav class="mb-6 ">
    <a href="{{ route('tasks.index') }}" class="link">  Go Back To The Task List  </a>
</nav>

{{-- <section id="sec-order-left" class="flex items-center justify-center mt-4">
    <a href="../index.php" class="w-10 h-10 p-2 rounded-full bg-[#0E91E3] flex items-center justify-center m-1 animated bounceInUp">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="color:white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
         class="w-5 bg-[#0E91E3] rounded-xl h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
          </svg>
    </a>
    <a class="text-white bg-[#0E91E3] rounded-3xl py-2 px-5 animated bounceInUp">بازگشت</a>
</section> --}}

<p class="mb-4 text-slate-700">{{ $task->description }}</p>
<p class="mb-4 text-slate-700">{{ $task->long_description }}</p>

{{-- <p class="mb-4 text-slate-700">{{ $task->created_at }}</p>
<p class="mb-4 text-slate-700">{{ $task->updated_at }}</p> --}}


<p class="mb-4 text-sm text-slate-500">Created {{ $task->created_at->diffForHumans() }} - Updated {{ $task->updated_at->diffForHumans() }}</p>



<div>
    <p class="mb-4 text-slate-700">

    @if ($task->completed)
    <span class="font-medium text-green-500">   completed</span>

    @else
    <span class="font-medium text-red-500"> Not completed</span>


    @endif

    </p>
<div class="flex gap-4">

<a class="btn" href="{{ route('tasks.edit' ,['task' => $task]) }}">Edit Task</a>

<form action="{{route('task.toggel-complete' , ['task'=> $task])}}" method="post">
@csrf
@method('PUT')
<button class="btn" type="submit">Mark as {{ $task->completed ? 'not completed' : 'completed'  }}</button>
</form>
{{-- $task->id --}}
    <form action="{{route('tasks.destroy',['task' => $task->id])}}" method="post">
    @csrf
@method('DELETE')

<button class="btn" type="submit">Delete</button>

    </form>
</div>
@endsection

<h1>
    task list
</h1>

 <div>

    @if(session()->has('success'))
<div>{{ session('success') }}</div>
    @endif
</div>

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

<div>

    @forelse ( $tasks as $task )
    <div>
        <a href="{{ route('tasks.show' , ['task'=>$task->id]) }}"> {{$task->title}}</a>
       </div>

    @empty
    <div>
        there are not tasks
    </div>
    @endforelse


</div>

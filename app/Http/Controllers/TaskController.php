<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;

// use Illuminate\Console\View\Components\Task;
use App\Models\Task;


class TaskController extends Controller
{

    public function View()
    {

            return view('index',[
                'tasks' => Task::all()
            ]);

    }

   public function TaskID(Task $task) {

        return view('tasks',[
            'task' => $task
        ]);
    }

     public  function EditID(Task $task) {

        return view('edit',[
            'task'=> $task
            // ->id
         ]);

    }
  public function TaskCreate(TaskRequest $request){
       $task = Task::create($request->validated());
        // $validator = $request->validated();
        // Task::create([
        //   'title'=>$validator['title'],
        //   'description' => $validator['description'],
        //   'long_description' => $validator['long_description']
        // ]);
        // $task = new Task;
        return redirect()->route('tasks.index',['task'=>$task->id])
        ->with('success','Task craeted successfully!');
    }
    public function TaskUpdate(Task $task,TaskRequest $request){
        // $validator = Task::findOrfail($id);
        // $validator = $request->validated();
        // Task::updated([
        //   'title'=>$validator['title'],
        //   'description' => $validator['description'],
        //   'long_description' => $validator['long_description']
        // ]);
        // $task = new Task;
        $task->update($request->validated());
        return redirect()->route('tasks.index',['task'=>$task->id])
        ->with('success','Task update successfully!');
    }

    public function TaskDelete(Task $task)  {
        $task->delete();
        return redirect()->route('tasks.index',['task'=>$task->id])
        ->with('success','Task deleted successfully!');
    }

}

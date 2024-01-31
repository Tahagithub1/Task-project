<?php

//  use App\Models\Task;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;


// class Task
// {
//   public function __construct(
//     public int $id,
//     public string $title,
//     public string $description,
//     public ?string $long_description,
//     public bool $completed,
//     public string $created_at,
//     public string $updated_at
//   ) {
//   }
// }

// $tasks = [
//   new Task(
//     1,
//     'Buy groceries',
//     'Task 1 description',
//     'Task 1 long description',
//     false,
//     '2023-03-01 12:00:00',
//     '2023-03-01 12:00:00'
//   ),
//   new Task(
//     2,
//     'Sell old stuff',
//     'Task 2 description',
//     null,
//     false,
//     '2023-03-02 12:00:00',
//     '2023-03-02 12:00:00'
//   ),
//   new Task(
//     3,
//     'Learn programming',
//     'Task 3 description',
//     'Task 3 long description',
//     true,
//     '2023-03-03 12:00:00',
//     '2023-03-03 12:00:00'
//   ),
//   new Task(
//     4,
//     'Take dogs for a walk',
//     'Task 4 description',
//     null,
//     false,
//     '2023-03-04 12:00:00',
//     '2023-03-04 12:00:00'
//   ),
// ];
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function () use ($tasks) {
//     return view('index',[
//         'tasks' => $tasks
//     ]);
// })->name('tasks.index');

// Route::get('/{id}', function ($id) use ($tasks) {
//    $tasks = collect($tasks)->firstWhere('id',$id);
//    if(!$tasks){
//     abort(Response::HTTP_NOT_FOUND);
//    }
//    return view('tasks',['tasks'=>$tasks]);

// })->name('tasks.show');


Route::get('/','\App\Http\Controllers\TaskController@View')->name('tasks.index');



Route::prefix('tasks')->group(function () {

    Route::view('/create', 'create');

    Route::get('/{task}','\App\Http\Controllers\TaskController@TaskID')->name('tasks.show');

    Route::get('/{task}/edit', '\App\Http\Controllers\TaskController@EditID')->name('tasks.edit');

    Route::post('/','\App\Http\Controllers\TaskController@TaskCreate')->name('tasks.store');

    Route::put('/{task}','\App\Http\Controllers\TaskController@TaskUpdate')->name('tasks.update');

    Route::delete('/{task}','\App\Http\Controllers\TaskController@TaskDelete')->name('tasks.destroy');

});




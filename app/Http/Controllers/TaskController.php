<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Gate;

class TaskController extends Controller
{
    public function index() {
        return view("tasks")->with(["tasks" => Task::paginate(5)]);
    }

    public function create($name) {
        Task::create([
            "task_name" => $name,
            "task_duration" => 20
        ]);
    }

    public function edit($id) {
        $task = Task::find($id);
        $user = auth()->user();
        if($user->can('update', $task)) {
            abort(403);
        }
        echo $task->id;
    }
}

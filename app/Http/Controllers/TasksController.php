<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tasks;
use Symfony\Component\Console\Input\Input;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = tasks::all();
        return view('pages.home', ['tasks' => $tasks]);
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $task = new tasks();
        $task->task_name = $request->input('task_name');
        $task->status = "In Progress";
        $task->save();
        return redirect('/');
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {

    }

    public function update($id)
    {
        $task = tasks::find($id);
        $task->status = 'Completed';
        $task->save();
        return redirect()->route('/');
    }
    public function destroy($id)
    {
        $task = tasks::findOrFail($id);
        $task->delete();
        return redirect()->route('/');
    }
}

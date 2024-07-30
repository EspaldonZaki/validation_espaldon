<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserTask;

class UserTaskController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('user_task');
    }

    public function store(Request $request)
    {
        $request->validate([
            'task_name' => 'required',
            'status' => 'required',
            'description' => 'required',
            'deadline' => 'required'

        ]);

        $task

        return back()->with('success', 'Data saved successfully');
    }

    public function show (string $id)
    {

    }
}

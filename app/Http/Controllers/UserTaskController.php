<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return back()->with('success', 'Data saved successfully');
    }

    public function show (string $id)
    {

    }
}

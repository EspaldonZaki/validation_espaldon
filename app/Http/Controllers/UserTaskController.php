<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserTask;
use App\Providers\Paginator;

class UserTaskController extends Controller
{
    public function index()
    {
      // $data ['tasks'] = UserTask::all();
      // return view('index', $data);

      $data ['tasks'] = $task = UserTask::paginate(10);
      return view('index', $data);
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

       

        return redirect()->to('user_task.index');

        return back()->with('success', 'Data saved successfully');
    }

    public function show (string $id)
    {

    }
}

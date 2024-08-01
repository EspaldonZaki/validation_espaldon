<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>task_name</th>
                                <th>status</th>
                                <th>description</th>
                                <th>deadline</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($task as $tasks)
                            <tr>
                                <td>{{ $task->task_name }}</td>
                                <td>{{ $task->status }}</td>
                                <td>{{ $task->description }}</td>
                                <td>{{ $task->deadline }}</td>
                                <td>
                                <a href="{{ url('user_tasks', $task->id) }}/edit" class="btn btn-outline-success btn-sm"></a>
                                <form action="{{ url('user_tasks'), $task->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')">delete</button>
                               </form> 
                                </td>
                               @endforeach
                               <tr>
                                <td colspan="8">

                                </td>
                               </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\UserTaskController;

class UserTask extends Model
{
    use HasFactory;

    protected $table = "user_task";
    protected $fillable = [
        'user_id',
        'task_name',
        'status',
        'description',
        'published',
        'deadline',
        'completed_at'
    ]; 
}

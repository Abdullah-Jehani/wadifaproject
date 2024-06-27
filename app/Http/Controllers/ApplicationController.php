<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Employee;
use App\Models\Post;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function sendApplication(Post $post, Employee $employee)
    {

        if (!Application::where('post_id', $post->id)->where('employee_id', $employee->id)->exists()) {
            Application::create([
                'post_id' => $post->id,
                'employee_id' => $employee->id,
            ]);
        }

        return redirect('/jobs');
    }
}

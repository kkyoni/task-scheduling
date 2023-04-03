<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddTask;

class TaskAddController extends Controller
{
   public function addTask(Request $request)
   {
       $data = $request->all();
       $task = new AddTask();
       $task->e_id = $data['e_id'];
       $task->e_name = $data['e_name'];
       $task->e_email = $data['e_email'];
       $task->manager_email = 'jayminsm@infusionanalysts.com';
       $task->t_mon = $data['t_mon'];
       $task->t_tue = $data['t_tue'];
       $task->t_wed = $data['t_wed'];
       $task->t_thu = $data['t_thu'];
       $task->t_fri = $data['t_fri'];
       $task->save();
       return back()->with('status','Data added successfully');
   }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{

    public function store(Request $request){
         $task=new Task;
        //validate
         $this->validate($request,[
             'task'=>'required|max:20|min:5',
         ]);
        //save
         $task->task=$request->task;
         $task->save();

         //get data
         $data=Task::all();
         //dd($data);
         return view('task')->with('task',$data);

        //  return redirect()->back();
        //  return view('/name');
    }
    public function updateTaskAsCompleted($id){
        $task=Task::find($id);
        $task->isCompleted=1;
        $task->save();
        return redirect()->back();
    }

    public function updateTaskAsNotCompleted($id){
        $task=Task::find($id);
        $task->isCompleted=0;
        $task->save();
        return redirect()->back();
    }

    public function deleteTask($id){
        $task=Task::find($id);
        $task->delete();
        return redirect()->back();
    }

    public function updateTask($id){
        $task=Task::find($id);
        return view('updateTask')->with('taskdata',$task);
    } 

    public function update(Request $request){
        $task=new Task;
        //validate
         $this->validate($request,[
             'task'=>'required|max:20|min:5',
         ]);
        //update
        $id=$request->id;
        $task=$request->task;
        $data=Task::find($id);
        $data->task=$task;
        $data->save();

        $data=Task::all();
        return view('task')->with('task',$data);
    }

    public function cancelUpdate(){
        $data=Task::all();
        return view('task')->with('task',$data);
    } 
}

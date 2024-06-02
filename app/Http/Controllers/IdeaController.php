<?php

namespace App\Http\Controllers;

use App\Models\idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function show(Idea $idea){

        return view('ideas.show',compact('idea'));
    }
    public function store(){
        $validated=request()->validate([
            'content'=> 'required|min:5|max:260'
        // dump();
]);


         $validated['user_id']=auth()->id();
         idea::create($validated);


         return redirect()->route('dashboard')->with('success','idea created successfully');
    }
    public function destroy(Idea $idea){
        if(auth()->id() !=$idea->user_id){
            abort(404);
        }

         $idea->delete();

        return redirect()->route('dashboard')->with('success','idea deleted successfully');


    }
    public function edit(Idea $idea){
        if(auth()->id() !=$idea->user_id){
            abort(404);
        }


        $editing=true;
        return view('ideas.show',compact('idea','editing'));
    }
    public function update(Idea $idea){

        if(auth()->id() !=$idea->user_id){
            abort(404);
        }
        request()->validate([
            'idea'=>'require|min:3|max:240'
        ]);
        $idea->content = request()->get('content','');
        $idea->save();
        return redirect()->route('idea.show',$idea->id)->with('success',"Idea updated successfully!");
    }
}

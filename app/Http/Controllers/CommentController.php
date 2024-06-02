<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\idea;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(idea $idea){
$comments= new Comment();
$comments->Idea_id = $idea->id;
$comments->user_id=auth()->id();
$comments->content=request()->get('content');
$comments->save();
return redirect()->route('idea.show',$idea->id)->with('success',"Comment posted!");

    }
    public function destroy(Comment $comment){
        if(auth()->id() !=$comment->user_id){
            abort(404);
        }

         $comment->delete();

        return redirect()->route('dashboard')->with('success','comment deleted successfully');


    }
    public function edit(Comment $comment){
        if(auth()->id() !=$comment->user_id){
            abort(404);
        }


        $editing=true;
        return view('ideas.show',compact('comment','editing'));
    }
    public function update(Comment $comment){

        if(auth()->id() !=$comment->user_id){
            abort(404);
        }
        request()->validate([
            'idea'=>'require|min:3|max:240'
        ]);
        $comment->content = request()->get('content','');
        $comment->save();
        return redirect()->route('idea.show',$comment->id)->with('success',"Idea updated successfully!");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index(){
    $idea=Idea::orderBy('created_at','DESC');
    if(request()->has('search')){
        $idea=$idea->where('content','like','%',request()->get('search',''),'%');
    }


    return view('dashboard',[
         'ideas' => idea::orderBy('created_at','DESC')->paginate(5)
    ]);
   }
}

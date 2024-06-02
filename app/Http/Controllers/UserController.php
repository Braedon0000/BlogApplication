<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{


    public function show(User $user)
    {
        $ideas =$user->idea()->paginate(5);
        return view('users.show',compact('user','ideas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $editing=true;
        $ideas =$user->idea()->paginate(5);
        return view('users.edit',compact('user','editing','ideas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
        $validated= request()->validate(
            [
                'name'=> 'required|min:3|max:40',
                'bio'=> 'nullable|min:1|max:300',
                'image '=>'image'
            ]
            );

            if(request()->has('image')){
                $imagePath=request()->file('image')->store('profile','public');
                $validated['image']=$imagePath;

                // storage::disk('public')->delete($user->image);
            }


            $user->update($validated);
            return redirect()->route('profile');
    }

    public function profile(){
        return $this->show(auth()->user());
    }



}

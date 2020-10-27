<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use App\User;

class EditController extends Controller
{
 
    public function edit(User $user, $id){
        $data= User::find($id);
        return view('edit',['data'=>$data]);
     }
     public function update(Request $request, $id)
        {
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);
                User::whereId($id)->update($validatedData);

                return redirect('/home')->with('success', 'Corona Case Data is successfully updated');
        }
}

<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Validator;
class DeleteController extends Controller
{
   
     public function destroy(User $user, $id) {
        User::destroy(array('id',$id));
        return redirect('/home');
     }
       //DB::delete('delete from users where id = ?',[$id]);
       //echo "Record deleted successfully.<br/>";
        //echo '<a href = "/delete-records">Click Here</a> to go back.';
     
        public function edit( $id){
         $data= User::find($id);
         return view('edit',['data'=>$data]);
      }

      public function update(Request $req){
         $data=User::find($req->id);
         $data->name=$req->name;
         $data->email=$req->email;
         
         $data->save();
         return redirect('/home');
      }
         
      
    }




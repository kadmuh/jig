<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function index() {
        $users = DB::select('select * from users');
        return view('/home',['users'=>$users]);
     }
     public function destroy($id) {
        DB::delete('delete from users where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/delete-records">Click Here</a> to go back.';
     }
}

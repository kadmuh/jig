<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function destroy($id) {
        DB::delete('delete from student where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
       // echo '<a href = "/home">Click Here</a> to go back.';
     }
    public function index()
    {
        $users = User::all();
        return view('home',compact('users'));
    }
}

<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Controller methods here
    public function index(){
        return view('index');
    }

    public function list()
    {
        $data = User::all();
        return view('list', ["data" => $data]);
    }

    public function add(Request $req)
    {
        //return $req->input();
        $user = new User;
        $user->first_name=$req->input('first_name');
        $user->last_name=$req->input('last_name');
        $user->email=$req->input('email');
        $user->address=$req->input('address');
        $user->phone=$req->input('phone');
        $user->pic=$req->input('pic');
        $user->save();
        $req->session()->flash('status', 'user added successfully');
        
        return redirect('list');
        
    }
    public function delete($id)
    {
        User::find($id)->delete();
        Session::flash('status', 'user deleted successfully');
    
        return redirect('list');
    }
    
    public function edit($id)
    {
        $data=User::find($id);
        return view('edit',["data"=>$data]);
         
    }

    public function update(Request $req)
    {
        
        $user = User::find($req->input('id'));
        $user->first_name=$req->input('first_name');
        $user->last_name=$req->input('last_name');
        $user->email=$req->input('email');
        $user->address=$req->input('address');
        $user->phone=$req->input('phone');
        $user->pic=$req->input('pic');
        $user->save();
        $req->session()->flash('status', 'user updated successfully');
        
        return redirect('list');
        
    }
}


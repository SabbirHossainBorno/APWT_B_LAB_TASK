<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users = $this->getUserList();
        return view('user.list')->with('userList', $users);
    }

    public function create(){
        return view('user.create');
    }

    public function insert(Request $req){

        $users = $this->getUserList();
        $user = ['id' =>$req->id, 'name'=>$req->uname, 'email'=>$req->email,];

        array_push($users, $user);
        return view('user.list')->with('userList', $users);
    }

    public function getUserList(){
        return [
            ['id'=>1, 'name'=>'Borno', 'email'=>'borno@gmail.com'],
            ['id'=>2, 'name'=>'Faiyaz', 'email'=>'faiyaz@gmail.com'],
            ['id'=>3, 'name'=>'Ashik', 'email'=>'ashik@gmail.com'],
        ];
    }

    public function details($id){
        $users = $this->getUserList();
        $user = '';

        foreach($users as $u){
            if($u['id'] == $id){
                $user = $u;
                break;
            }
        }
        return view('user.details')->with('user', $user);
    }

    public function edit($id){
        //Find User Id From User List $user

        return view('user.edit')->with('user', $user);
    }

    public function update(Request $req, $id){
        //Create ne user array & add to listen
        //new user list

        return view('user.list')->with('userList', $users);
    }

    public function delete($id){
        //Confirm window
        //nFind user by id $user

        return redirect()->route('user.index');
    }

    public function destroy($id){
        //Remove user from list
        //Create New list and display

        return view('user.list')->with('userList', $users);
    }

    public function register(){
        
        return view('user.register');
    }
}

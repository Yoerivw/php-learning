<?php 

namespace App\Controllers;

use App\core\App;



class UsersController
{

    public function index()
    {

        $users = App::get('database')->selectAll('users');

        return view('users' , compact('users'));
    }

    public function store(){
        //insert the user associated with the request
        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);
        
        return redirect('users');
    }

}
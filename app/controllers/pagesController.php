<?php 

//a controller is responsible for receiving a request
//delegating in some form 
// returning a response

namespace App\Controllers;

class PagesController{
    
    public function home(){
        //receive the request.
        //Delegate.
        //return a response
        

        return view('index');


    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }


}
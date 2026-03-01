<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //langkah 2
    public function hello(){ 
        return('Hello World'); 
    } 
    public function greeting(){ 
        return view('blog.hello')
            ->with('name','Fanani')
            ->with('occupation','Astronaut');
    } 
}

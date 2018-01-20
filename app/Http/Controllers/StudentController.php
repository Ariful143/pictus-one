<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
//        return 'Hello world from controller';
        $name='Arif';
        $age=24;
//        return view('demo',compact('name','age'));
//        return view('demo')
//            ->with('name',$name)
//            ->with('age',$age);

        return view('demo',[
            'name' => $name,
            'age' => $age
        ]);

    }
    public function newOne(){
        return "Hello New One";
    }
    public function newTwo(){
        return "Hello New Two";
    }
}

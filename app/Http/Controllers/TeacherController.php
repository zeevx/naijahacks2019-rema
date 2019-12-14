<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Teachers;


class TeacherController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.teacher.index');
    }
    public function add()
    {
        return view('dashboard.teacher.add');
    }
    public function store(request $request, \Nexmo\Client $nexmo)
    {
        
        Teachers::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "password" => $request->password,
            "class" => $request->class,
            "subject" => $request->subject
            ]);
        
            $message = $nexmo->message()->send([
                'to' => $request->phone,
                'from' => env('NEXMO_NUMBER'),
                'text' => 'A account have been created for you by your school. Your password is:'.$request->password
            ]);
            
        return redirect("teacher")->with('success','Teacher Profile created successfully');
    }
}

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
    public function store(request $request)
    {
        Teachers::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "class" => $request->class,
            "subject" => $request->subject
            ]);
        return redirect("teacher");
    }
}

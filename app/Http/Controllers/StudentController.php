<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
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
        return view('dashboard.student.index');
    }
    public function add()
    {
        return view('dashboard.student.add');
    }

    public function store(request $request)
    {
        Students::create([
            "name" => $request->name,
            "class" => $request->class
                        ]);
        return redirect("student");
    }
}

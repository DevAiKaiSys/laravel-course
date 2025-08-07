<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function index()
    {
        return 'hello from StudentController';
    }

    /* public function aboutUs()
    {
        return 'code with aryumi';
    } */
    public function aboutUs($id, $name)
    {
        /* return 'ID No ' . $id . ' and Name is ' . $name; */
        return view('aboutus', compact('id', 'name'));
    }
}

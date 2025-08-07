<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    protected $name;
    private $age;

    public function __construct()
    {
        $this->name = 'My Name';
        $this->age = 20;
    }

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

        /* $name = $this->privateFunction();
        return $name; */
        /* return $this->name; */
        return $this->age;

        return view('aboutus', compact('id', 'name'));
    }

    private function privateFunction()
    {
        return 'hello world';
    }
}

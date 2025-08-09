<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //

    // protected $name;
    // private $age;

    // public function __construct()
    // {
    //     $this->name = 'My Name';
    //     $this->age = 20;
    // }

    // public function index()
    // {
    //     return 'hello from StudentController';
    // }

    // /* public function aboutUs()
    // {
    //     return 'code with aryumi';
    // } */
    // public function aboutUs($id, $name)
    // {
    //     /* return 'ID No ' . $id . ' and Name is ' . $name; */

    //     /* $name = $this->privateFunction();
    //     return $name; */
    //     /* return $this->name; */
    //     return $this->age;

    //     return view('aboutus', compact('id', 'name'));
    // }

    // private function privateFunction()
    // {
    //     return 'hello world';
    // }

    public function addData()
    {
        DB::table('students')->insert([
            [
                'name' => 'tester2',
                'email' => 'tester2@example.com',
                'age' => 16,
                'date_of_birth' => '2010-01-01',
                'gender' => 'f'
            ],
            [
                'name' => 'tester3',
                'email' => 'tester3@example.com',
                'age' => 17,
                'date_of_birth' => '2010-01-01',
                'gender' => 'f'
            ]
        ]);

        return 'added successfully';
    }

    public function getData()
    {
        $items = DB::table('students')
            /* ->limit(2)
            ->get(); */
            /* ->first(); */
            /* ->where('id', 3) */
            /* ->where('id', '>=', 2) */
            /* ->where('id', 2)
            ->orWhere('id', 1)
            ->get(); */
            /* ->select('id', 'name')
            ->where('id', 3)
            ->first(); */
            /* ->count(); */
            /* ->max('score'); */
            /* ->min('score'); */
            ->avg('score');

        return $items;
    }

    public function updateData()
    {
        DB::table('students')
            ->where('id', 3)
            ->update([
                'name' => 'updated name',
                'age' => 20,
                'email' => 'updated@email.com'
            ]);

        return 'Updated Successfully';
    }

    public function deleteData()
    {
        DB::table('students')
            /* ->where('id', 3) */
            ->where('id', '>', 3)
            ->delete();

        return 'Deleted Successfully';
    }
}

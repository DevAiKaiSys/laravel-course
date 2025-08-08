<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    //
    public function index()
    {
        return Teachers::all();
    }

    public function add()
    {
        $teacher = new Teachers();
        $teacher->name = 'Test Name';
        $teacher->save();

        return 'Added Successfully';
    }

    public function show($id)
    {
        $item = Teachers::findOrFail($id);

        return $item;
    }

    public function update($id)
    {
        $teacher = Teachers::findOrFail($id);
        $teacher->name = 'Updated Teacher';
        $teacher->save();

        return 'Updated Successfully';
    }

    public function delete($id)
    {
        $teacher = Teachers::findOrFail($id);
        $teacher->delete();

        return 'Deleted Successfully';
    }
}

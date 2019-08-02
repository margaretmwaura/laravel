<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Http\Requests;
use App\Student;

class StudentController extends Controller
{
    //
    public function index()
    {
        return Student::all();
    }
 
    public function show($id)
    {
        return Student::find($id);
    }

    public function store(Request $request)
    {
        return Student::create($request->all());
   
    }

    public function update(Request $request, $id)
    {
        $Student = Student::findOrFail($id);
        $Student->update($request->all());

        return $Student;
    }

    public function delete(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return 204;
    }

}

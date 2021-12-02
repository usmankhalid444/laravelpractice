<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class testController extends Controller
{
    function index (){
        return view('usman');
    }
    function addData(Request $req){
        // code for adding new student

        // $student = new Student;
        // $student -> email=$req->email;
        // $student -> password=$req->password;
        // $student -> number=$req->number;
        // $student-> save();
        // return redirect('/');

        // code for getting all students
        // return Student::all();

        // Code for puting data into html
        $students =  Student::all();
        return view('welcome',['students' => $students]);

    }
    function delete($id){
        $data = Student::find($id);
        $data->delete();
        return 'data deleted successfully';
    }
}

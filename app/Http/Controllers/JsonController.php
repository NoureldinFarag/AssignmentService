<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class JsonController extends Controller
{
    //
    public function show(){
        return [
            "students" => [
                'student_1' => [
                    "id" => "1",
                    "name" => "One"
                ],
                'student_2' => [
                    "id" => "2",
                    "name" => "Two"
                ]
            ]
        ];
    }

    public function index(){
        return Student::all();
    }
}

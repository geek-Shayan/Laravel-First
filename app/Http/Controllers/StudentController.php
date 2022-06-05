<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function insertStudentList()
    {
        $student1 = new Student();
        //$student1->id= 5; 
        $student1->name= 'sadi'; 
        $student1->age= 20; 
        $student1->city= 'dhaka'; 
        $student1->country = 'Bangladesh'; 
        $student1->save();


        $student2 = new Student();
        //$student2->id= 6; 
        $student2->name= 'tahmeed'; 
        $student2->age= 22; 
        $student2->city= 'dhaka'; 
        $student2->country = 'Bangladesh'; 
        $student2->save();

        $student3 = new Student();
        //$student2->id= 6; 
        $student3->name= 'asmira'; 
        $student3->age= 23; 
        $student3->city= 'dhaka'; 
        $student3->country = 'Bangladesh'; 
        $student3->save();

    }

    public function showStudentList()
    {
       // @foreach
       $students = Student::all();
       return view('show', compact('students'));
    //    $students = Student();
    //    return view('show', 'students');

    }

    public function findStudent($id)
    {
       
       $student = Student::find($id);
       return $student;

       //dd($student);
       //return view('preview', compact('student'));

    }

    public function addStudent()
    {
        return view('add_student');
    }

    public function addSave(Request $req)
    {
        $student = new Student();
        $student -> name = $req -> name;
        $student -> age = $req -> age;
        $student -> city = $req -> city;
        $student -> country = $req -> country;
        $student -> save();
        
        //return view('internals.students');
        //return view('students',['students' => $students]);
        //return view('show');
        //return redirect('students/show');
        return view('preview', compact('student')) ;
        
    }

    public function updateStudent($id)
    {
        $student = Student::find($id);
        return view('update_student', compact('id'));
    }

    public function updateSave(Request $req , $id)
    {
        
       
        $student = Student::find($id);

        $student -> name = $req -> name;
        $student -> age = $req -> age;
        $student -> city = $req -> city;
        $student -> country = $req -> country;
        $student -> save();
        // return view('show', compact('student'));
        $students = Student::all();
        return view('show', compact('students'));
    }

    public function deleteStudent($id)
    {
        $student = Student::find($id)->delete();
        return redirect ('/students/show');
    }
}

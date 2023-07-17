<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create()
    {
        $obj = new Student;
        $obj->name = 'Robin';
        $obj->email = 'robin@gmail.com';
        $obj->age = '25';
        $obj->country = 'Italy';
        $obj->save();
    }

    public function show()
    {
        //$all_data = Student::get();
        //$all_data = Student::all();
        // $all_data = Student::where('country','USA')->orderBy('name','asc')->get();
        // foreach($all_data as $item) {
        //     echo $item->name.' - ';
        //     echo $item->email.' - ';
        //     echo $item->age.' - ';
        //     echo $item->country.'<br>';
        // }
        
        // $single = Student::find(3);
        // echo $single->name.'<br>';
        // echo $single->email.'<br>';
        // echo $single->age.'<br>';
        // echo $single->country;

        $single = Student::where('name','Smith')->first();
        echo $single->name.'<br>';
        echo $single->email.'<br>';
        echo $single->age.'<br>';
        echo $single->country;

    }

    public function update()
    {
        //$single = Student::find(3);
        $single = Student::where('id',3)->first();
        $single->age = '28';
        $single->save();
        //$single->update();
    }

    public function delete()
    {
        $single = Student::find(3);
        $single->delete();
    }

    public function mass()
    {
        // $obj = new Student;
        // $obj->name = 'Robin';
        // $obj->email = 'robin@gmail.com';
        // $obj->age = '25';
        // $obj->country = 'Italy';
        // $obj->save();

        // Student::create([
        //     'name' => 'Brent',
        //     'email' => 'brent@gmail.com',
        //     'age' => '32',
        //     'country' => 'Italy'
        // ]);
        
        $student = Student::find(1);
        $student->update([
            'name' => 'Mr. Smith',
            'email' => 'smith11@gmail.com'
        ]);

    }

    public function index()
    {
        // Student::firstOrCreate([
        //     'name' => 'John',
        //     'email' => 'john100@gmail.com',
        //     'age' => '30',
        //     'country' => 'Italy'
        // ]);

        // $std = Student::firstOrNew(['email' => 'john99@gmail.com']);
        // $std->name = 'John 99';
        // $std->age = '39';
        // $std->country = 'Ireland';
        // $std->save();

        $student = Student::findOrFail(100);

        $country = 'Bangladesh';
        echo $country;

    }
}

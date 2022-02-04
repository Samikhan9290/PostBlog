<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $students=Student::all();
        $students=DB::table('students')->get();
        return view('student.index',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $student=new Student;
        // $student->name=$request->name;
        // $student->city=$request->city;
        // $student->marks=$request->marks;
        // $student->save();
        DB::table('students')->insert([
            'name'=>$request->name,
            'city'=>$request->city,

            'marks'=>$request->marks,


        ]);
        return redirect(route('index'))->with('status',"student added");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // $students=Student::find($id);
        $students=DB::table('students')->find($id);
        return view('student.edit',['students'=>$students]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $students=Student::find($id);
        // $students->name=$request->name;
        // $students->city=$request->city;

        // $students->marks=$request->marks;
        // $students->Save();
        $students=
        DB::table('students')->where(['id'=>$id])->update([
            'name'=>$request->name,
            'city'=>$request->city,

            'marks'=>$request->marks,

        ]);
        return redirect(route('index'))->with('status',"student updated");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // student::destroy($id);
        DB::table('students')->delete($id);
        return redirect(route('index'))->with('status',"student deleted");

    }
}

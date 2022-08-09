<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Model\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $students = DB::table('students')->join('classes', 'students.class_id', 'classes.id')->get();
        // return view('admin.students.index', compact('students'));
        //$students=DB::table('students')->orderBy('roll', 'ASC')->get();
        $students=Student::all();
        return response()->json($students);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = DB::table('classes')->get();
        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'class_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'roll' => 'required',

        ]);
        $data = array(
            'class_id' => $request->class_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'roll' => $request->roll,

        );
        DB::table('students')->where('id', $id)->update($data);
        return redirect()->back()->with('success', 'Successfully inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $student=BD::table('students')->where('id', $id)->first();
        $student = BD::table('students')->pluck('phone');
        //$student=BD::table('students')->where('id', $id)->value('phone');
        return view('admin.student.view', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classes = DB::table('classes')->get();
        $student = DB::table('students')->where('id', $id)->first();
        return view('admin.students.edit', compact('classes', 'student'));
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
        $request->validate([

            'class_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'roll' => 'required',

        ]);
        $data = array(
            'class_id' => $request->class_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'roll' => $request->roll,

        );
        DB::table('students')->where('id', $id)->update($data);
        return redirect()->route('students.index')->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Successfully deleted');
    }
}

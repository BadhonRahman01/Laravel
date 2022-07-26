<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Contracts\Container\BindingResolutionException;

class ClassController extends Controller
{
   //construct
    public function __construct()
    {
        $this->middleware('auth');
    }
    //index method for all class
    public function index()
    {
        $class=DB::table('classes')->get();
        return view('admin.class.index', compact('class'));
    }
    public function create()
    {

        return view('admin.class.create');
    }
    public function store(Request $request)
    {

        $request->validate([

            'class_name' => 'required|unique:classes',

            ]);
            $data=array(
                'class_name' => $request->class_name,
            );
            DB::table('classes')->insert($data);
            return redirect()->back()->with('success','Successfully Inserted');
    }
    public function delete($id)
    {

        DB::table('classes')->where('id',$id)->delete();
        return redirect()->back()->with('success','Successfully Deleted');
    }
    public function update(Request $request,$id)
    {

        $request->validate([

            'class_name' => 'required',

            ]);
            $data=array(
                'class_name' => $request->class_name,
            );
            DB::table('classes')->where('id', $id)->update($data);
            return redirect()->back()->with('success','Successfully updated');
    }
    
}

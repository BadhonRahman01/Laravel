<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //index
    public function index(){
        //query builder
        $category=DB::table('categories')->get();
        //eloquent
        $category=Category::all();
        return view('admin.category.index', compact('category'));
    }
}

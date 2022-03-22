<?php

namespace App\Http\Controllers;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //
    public function add(Request $req)
    {
        $department = new Department();
        $department->name = $req->name;
        $department->save();
        return response($department, 200);
    }
    public function get($id)
    {
        $department = Department::where('id', $id)->first();
        if (!$department) return response("not found", 404);
        $department->courses = $department->courses;
        return response($department, 200);
    }
}

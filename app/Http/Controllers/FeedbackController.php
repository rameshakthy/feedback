<?php

namespace App\Http\Controllers;
use App\Batch;
use App\Department;
use App\Semester;
use App\Section;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /*
     * Create method
     */
    public function create(){
        $batches = Batch::orderBy('year','DESC')->get();
        $departments = Department::orderBy('name','ASC')->get();
        $semester = Semester::orderBy('name','ASC')->get();
        $sections = Section::orderBy('name','ASC')->get();
        return view('feedback.create',compact('batches','departments','semester','sections'));
    }
    /*
     * Store method 
     */
    public function store(Request $request){
        return $request;
    }
}

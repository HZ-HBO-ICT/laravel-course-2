<?php

namespace App\Http\Controllers;

use App\Course;
use App\Term;
use Illuminate\Http\Request;

class CoursesController extends Controller
{

    public function __construct()
    {
        //middleware to check if you are authenticated, except for the index page.
        $this->middleware('auth')->except(['index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = \App\Course::all();

        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $terms = Term::all();
        return view('courses.create', compact('terms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $course = new Course();
        $course->name = $request->name;
        $course->start_date = $request->start_date;
        $course->end_date = $request->end_date;
        $termId = Term::where('title', $request->term)->first()->id;
        $course->term_id = $termId;
        $course->save();

        return redirect('/courses');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $terms = Term::all();
        $course = Course::findOrFail($id);
        return view('courses.edit', compact('course', 'terms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}

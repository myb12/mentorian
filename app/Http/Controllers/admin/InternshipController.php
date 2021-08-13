<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\Internship;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Internship\InternshipStoreRequest;
use App\Http\Requests\Internship\InternshipUpdateRequest;

class InternshipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $internships = Internship::all();
        return view('admin.internship.index', compact('internships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.internship.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InternshipStoreRequest $request, Internship $internship)
    {
        $internship->title = $request->title;
        $internship->category_id = $request->cat_id;
        $internship->company_name = $request->company_name;
        $internship->duration = $request->duration;

        if($request->hasFile('company_logo')){
            $logoPath = $request->company_logo->store('public/images/internship');
            $internship->company_logo = $logoPath;
        }
        if($request->work_at=='on'){
            $internship->work_at = 1;
        }else{
            $internship->work_at = 0;
        }

        $internship->salary = $request->salary;
        $internship->deadline = $request->deadline;
        $internship->details = $request->details;
        $internship->save();
        return redirect()->to(route('internship.index'));
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
        $internship = Internship::find($id);
        $categories = Category::all();
        return view('admin.internship.edit', compact('internship','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InternshipUpdateRequest $request)
    {
        $internship = Internship::find($request->id);
        $internship->title = $request->title;
        $internship->category_id = $request->cat_id;
        $internship->company_name = $request->company_name;
        $internship->duration = $request->duration;

        if($request->hasFile('company_logo')){
            Storage::delete('/'.$request->old_logo);
            $logoPath = $request->company_logo->store('public/images/internship');
            $internship->company_logo = $logoPath;
        }else{
             $internship->company_logo = $request->old_logo;
        }

        if($request->work_at=='on'){
            $internship->work_at = 1;
        }else{
            $internship->work_at = 0;
        }

        $internship->salary = $request->salary;
        $internship->deadline = $request->deadline;
        $internship->details = $request->details;
        $internship->save();
        return redirect()->to(route('internship.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Internship $internship)
    {
       if($internship->company_logo){
            Storage::delete('/'.$internship->company_logo);
        }
        $internship->delete();
        return redirect()->to(route('internship.index'));
    }
}

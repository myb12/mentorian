<?php

namespace App\Http\Controllers\admin;

use App\Models\Job;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Job\JobStoreRequest;
use App\Http\Requests\Job\JobUpdateRequest;

class JobController extends Controller
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
        $jobs = Job::all();
        return view('admin.job.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.job.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobStoreRequest $request, Job $job)
    {
        $job->title = $request->title;
        $job->category_id = $request->cat_id;
        $job->company_name = $request->company_name;

        if($request->hasFile('company_logo')){
            $logoPath = $request->company_logo->store('public/images/job');
            $job->company_logo = $logoPath;
        }
        if($request->work_at=='on'){
            $job->work_at = 1;
        }else{
            $job->work_at = 0;
        }

        $job->salary = $request->salary;
        $job->deadline = $request->deadline;
        $job->details = $request->details;
        $job->save();
        return redirect()->route('job.index');
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
        $job = Job::find($id);
        $categories = Category::all();
        return view('admin.job.edit', compact('job','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobUpdateRequest $request)
    {
        $job = Job::find($request->id);
        $job->title = $request->title;
        $job->category_id = $request->cat_id;
        $job->company_name = $request->company_name;

        if($request->hasFile('company_logo')){
            Storage::delete('/'.$request->old_logo);
            $logoPath = $request->company_logo->store('public/images/job');
            $job->company_logo = $logoPath;
        }else{
             $job->company_logo = $request->old_logo;
        }

        if($request->work_at=='on'){
            $job->work_at = 1;
        }else{
            $job->work_at = 0;
        }

        $job->salary = $request->salary;
        $job->deadline = $request->deadline;
        $job->details = $request->details;
        $job->save();
        return redirect()->route('job.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        if($job->company_logo){
            Storage::delete('/'.$job->company_logo);
        }
        $job->delete();
        return redirect()->route('job.index');
    }

}

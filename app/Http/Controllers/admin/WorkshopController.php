<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\Workshop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Workshop\WorkshopStoreRequest;
use App\Http\Requests\Workshop\WorkshopUpdateRequest;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workshops = Workshop::all();
        return view('admin.workshop.index', compact('workshops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.workshop.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkshopStoreRequest $request, Workshop $workshop)
    {
        $workshop->title = $request->title;
        $workshop->category_id = $request->cat_id;
        $workshop->organization_name = $request->organization_name;

        if($request->hasFile('banner')){
            $bannerPath = $request->banner->store('public/images/workshop');
            $workshop->banner = $bannerPath;
        }

        $workshop->start_date = $request->start_date;
        $workshop->end_date = $request->end_date;
        $workshop->start_time = $request->start_time;
        $workshop->location = $request->location;
        $workshop->workshop_link = $request->workshop_link;
        $workshop->details = $request->details;
        $workshop->save();
        return redirect()->to(route('workshop.index'));
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
        $workshop = Workshop::find($id);
        $categories = Category::all();
        return view('admin.workshop.edit', compact('workshop','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkshopUpdateRequest $request)
    {
        $workshop = Workshop::find($request->id);
        $workshop->title = $request->title;
        $workshop->category_id = $request->cat_id;
        $workshop->organization_name = $request->organization_name;

        if($request->hasFile('banner')){
            Storage::delete('/'.$request->old_banner);
            $bannerPath = $request->banner->store('public/images/workshop');
            $workshop->banner = $bannerPath;
        }else{
             $workshop->banner = $request->old_banner;
        }

        $workshop->start_date = $request->start_date;
        $workshop->end_date = $request->end_date;
        $workshop->start_time = $request->start_time;
        $workshop->location = $request->location;
        $workshop->workshop_link = $request->workshop_link;
        $workshop->details = $request->details;
        $workshop->save();
        return redirect()->to(route('workshop.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workshop $workshop)
    {
         if($workshop->banner){
            Storage::delete('/'.$workshop->banner);
        }
        $workshop->delete();
        return redirect()->to(route('workshop.index'));
    }
}

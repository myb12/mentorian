<?php

namespace App\Http\Controllers\admin;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Event\EventStoreRequest;
use App\Http\Requests\Event\EventUpdateRequest;

class EventController extends Controller
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
        $events = Event::all();
        return view('admin.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.event.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventStoreRequest $request, Event $event)
    {
        $event->title = $request->title;
        $event->category_id = $request->cat_id;
        $event->organization_name = $request->organization_name;

        if($request->hasFile('banner')){
            $bannerPath = $request->banner->store('public/images/event');
            $event->banner = $bannerPath;
        }

        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->start_time = $request->start_time;
        $event->location = $request->location;
        $event->event_link = $request->event_link;
        $event->details = $request->details;
        $event->save();
        return redirect()->to(route('event.index'));
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
        $event = Event::find($id);
        $categories = Category::all();
        return view('admin.event.edit', compact('event','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventUpdateRequest $request)
    {
        $event = Event::find($request->id);
        $event->title = $request->title;
        $event->category_id = $request->cat_id;
        $event->organization_name = $request->organization_name;

        if($request->hasFile('banner')){
            Storage::delete('/'.$request->old_banner);
            $bannerPath = $request->banner->store('public/images/event');
            $event->banner = $bannerPath;
        }else{
             $event->banner = $request->old_banner;
        }

        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->start_time = $request->start_time;
        $event->location = $request->location;
        $event->event_link = $request->event_link;
        $event->details = $request->details;
        $event->save();
        return redirect()->to(route('event.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if($event->banner){
            Storage::delete('/'.$event->banner);
        }
        $event->delete();
        return redirect()->to(route('event.index'));
    }
}

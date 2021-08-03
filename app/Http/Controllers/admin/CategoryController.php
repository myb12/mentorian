<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Category\CategoryStoreRequest;
use App\Http\Requests\Category\CategoryUpdateRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categories = Category::all();
       return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request, Category $category)
    {
        $category->title = $request->title;
        if($request->hasFile('logo')){
            $logoPath = $request->logo->store('public/images/category');
            $category->logo = $logoPath;
        }
        if($request->hasFile('banner')){
            $bannerPath = $request->banner->store('public/images/category');
            $category->banner = $bannerPath;
        }

        $category->save();
        return redirect()->to(route('category.index'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request)
    {
        $category = Category::find($request->id);
       //dd($category->id);
       $category->title = $request->title;
        if($request->hasFile('logo')){
            Storage::delete('/'.$request->old_logo);
            $logoPath = $request->logo->store('public/images/category');
            $category->logo = $logoPath;
        }else{
            $category->logo = $request->old_logo;
        }

        if($request->hasFile('banner')){
            Storage::delete('/'.$request->old_banner);
            $bannerPath = $request->banner->store('public/images/category');
            $category->banner = $bannerPath;
        }else{
            $category->banner = $request->old_banner;
        }

        $category->save();
        return redirect()->to(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if($category->logo){
            Storage::delete('/'.$category->logo);
        }

        if($category->banner){
            Storage::delete('/'.$category->banner);
        }
        $category->delete();
        return redirect()->route('category.index');
    }

    public function editCategory(Request $request){
         $category = Category::find($request->id);
        // dd($category);
        $html='';
        $html = '
                <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="hidden" id="id_edit" name="id" value="'. $category->id .'">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Enter Title..." value="'. $category->title .'">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label  for="old_logo">Old Logo</label>
                                <img class="form-control-file"  id="old_logo" src="'.Storage::url($category->logo).'" alt="">
                                <input type="hidden" name="old_logo" value=" '.$category->logo.'">
                            </div>
                        </div>    

                        <div class="col-md-6">
                            <div class="form-group">
                                <label  for="old_banner">Old Banner</label>
                                <img class="form-control-file"  id="old_banner" src="'.Storage::url($category->banner).'" alt="">
                                <input type="hidden" name="old_banner" value=" '.$category->banner.'">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="logo">Update Your Logo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                    <input type="file" name="logo" id="logo" class="custom-file-input"  onchange="previewFile3(this);">
                                    <label class="custom-file-label" for="logo">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            </span>
                                <img style="width:100px;" id="previewImg3" src="">
                            <span>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="banner">Update Your Banner</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                    <input type="file" name="banner" id="banner" class="custom-file-input"  onchange="previewFile4(this);">
                                    <label class="custom-file-label" for="banner">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            </span>
                                <img style="width:100px;" id="previewImg4" src="">
                            <span>
                        </div>
                </div>
        ';
        return response()->json([
            'data' => $html,
        ]);
    }

}

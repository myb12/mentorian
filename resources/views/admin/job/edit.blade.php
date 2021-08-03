@extends('admin.layout.master')
@section('title','edit job')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Job</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('job.index')}}">Jobs</a></li>
                    <li class="breadcrumb-item active">Edit Job</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">

    <div class="container-fluid w-75">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Job</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('job.update',$job->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{$job->id}}">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="Enter Title..." value="{{$job->title}}">
                                        @error('title')
                                        <p class="alert alert-danger" style="margin-top: 5px;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Select Category</label>
                                       
                                       <select class="form-control" name="cat_id" >
                                           <option value="none" selected disabled>Please Select a category</option>
                                         @if($categories)
                                         @foreach($categories as $category)
                                          <option value="{{$category->id}}" {{($category->id==$job->category_id) ? 'selected':''}}>{{$category->title}}</option>
                                         @endforeach
                                         @endif
                                       </select>
                                      

                                       @error('title')
                                        <p class="alert alert-danger" style="margin-top: 5px;">{{$message}}</p>
                                        @enderror
                                     </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company_name">Commpany Name</label>
                                        <input type="text" class="form-control" id="company_name" name="company_name"
                                            placeholder="Enter Company Name..." value="{{$job->title}}">
                                        @error('company_name')
                                        <p class="alert alert-danger" style="margin-top: 5px;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company_logo">Update Company Logo</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                              <input type="file" name="company_logo" id="company_logo" class="custom-file-input" value="" onchange="previewFile(this);">
                                              <label class="custom-file-label" for="company_logo">Choose file</label>
                                            </div>
                                        </div>
                                        <img class="mt-3" style="width:100px;" id="previewImg" src="">
                                    
                                        @error('image')
                                        <p class="alert alert-danger" style="margin-top: 5px;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="checkbox"  id="work_at" name="work_at" class="mr-1"{{($job->work_at == 1) ? 'checked':''}}>
                                        <label for="work_at">Work at home?</label>
                                        @error('category')
                                        <p class="alert alert-danger" style="margin-top: 5px;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  for="old_logo">Old Logo</label>
                                        <img class="form-control-file"  id="old_logo" src="{{Storage::url($job->company_logo)}}" alt="">
                                        <input type="hidden" name="old_logo" value="{{$job->company_logo}}">
                                    </div>
                                </div> 

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="salary">Salary</label>
                                        <input type="text" class="form-control" id="salary" name="salary"
                                            placeholder="Enter Salary..." value="{{$job->salary}}">
                                        @error('salary')
                                        <p class="alert alert-danger" style="margin-top: 5px;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="deadline">Deadline</label>
                                        <input type="date" class="form-control" id="deadline" name="deadline"
                                            placeholder="Enter Deadline..." value="{{$job->deadline}}">
                                        @error('deadline')
                                        <p class="alert alert-danger" style="margin-top: 5px;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">Details</label>
                                        <textarea  class="textarea ckeditor" 
                                            name="details">{!!$job->details!!}</textarea>
                                        @error('description')
                                        <p class="alert alert-danger" style="margin-top: 5px;">{{$message}}</p>
                                        @enderror
                                        
                                    </div>
                                </div>

                            </div> 

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
<!-- /.content-wrapper -->
@section('script')
<script>
        function previewFile(input){
            var file = $("input[type=file]").get(0).files[0];

            if(file){
                var reader = new FileReader();

                reader.onload = function(){
                    $("#previewImg").attr("src", reader.result);
                }

                reader.readAsDataURL(file);
            }
        }
</script>
@endsection

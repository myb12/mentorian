@extends('admin.layout.master')
@section('title','job')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add Job</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('job.index')}}">Jobs</a></li>
                    <li class="breadcrumb-item active">Add Job</li>
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
                        <h3 class="card-title">Add Job</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('job.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="Enter Title..." value="{{old('title')}}">
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
                                          <option value="{{$category->id}}">{{$category->title}}</option>
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
                                            placeholder="Enter Company Name..." value="{{old('company_name')}}">
                                        @error('company_name')
                                        <p class="alert alert-danger" style="margin-top: 5px;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company_logo">Upload Company Logo</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                              <input type="file" name="company_logo" id="company_logo" class="custom-file-input" value="{{old('company_logo')}}" onchange="previewFile(this);" required>
                                              <label class="custom-file-label" for="company_logo">Choose file</label>
                                            </div>
                                        </div>
                                        <img class="mt-3" style="width:100px;" id="previewImg" src="">
                                    
                                        @error('image')
                                        <p class="alert alert-danger" style="margin-top: 5px;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="checkbox"  id="work_at" name="work_at" class="mr-1">
                                        <label for="work_at">Work at home?</label>
                                        @error('category')
                                        <p class="alert alert-danger" style="margin-top: 5px;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="salary">Salary</label>
                                        <input type="text" class="form-control" id="salary" name="salary"
                                            placeholder="Enter Salary..." value="{{old('salary')}}">
                                        @error('salary')
                                        <p class="alert alert-danger" style="margin-top: 5px;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="deadline">Deadline</label>
                                        <input type="date" class="form-control" id="deadline" name="deadline"
                                            placeholder="Enter Deadline..." value="{{old('deadline')}}">
                                        @error('deadline')
                                        <p class="alert alert-danger" style="margin-top: 5px;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">Details</label>
                                        <textarea  class="textarea ckeditor" 
                                            name="details">{{old('description')}}</textarea>
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

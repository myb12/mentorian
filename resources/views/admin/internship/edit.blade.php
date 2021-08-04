@extends('admin.layout.master')
@section('title','edit internship')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Internship</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('internship.index')}}">Internships</a></li>
                    <li class="breadcrumb-item active">Edit Internship</li>
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
                        <h3 class="card-title">Edit Internship</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('internship.update',$internship->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{$internship->id}}">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="Enter Title..." value="{{$internship->title}}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Select Category</label>
                                       
                                       <select class="form-control" name="cat_id" required>
                                         <option value="" selected disabled>Please Select a category</option>
                                         @if($categories)
                                         @foreach($categories as $category)
                                         <option value="{{$category->id}}" {{($category->id==$internship->category_id) ? 'selected':''}}>{{$category->title}}</option>
                                         @endforeach
                                         @endif
                                       </select>
                                     </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company_name">Commpany Name</label>
                                        <input type="text" class="form-control" id="company_name" name="company_name"
                                            placeholder="Enter Company Name..." value="{{$internship->title}}" required>
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
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="checkbox"  id="work_at" name="work_at" class="mr-1"{{($internship->work_at == 1) ? 'checked':''}}>
                                        <label for="work_at">Work at home?</label>
                                        @error('category')
                                        <p class="alert alert-danger" style="margin-top: 5px;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  for="old_logo">Old Logo</label>
                                        <img class="form-control-file"  id="old_logo" src="{{Storage::url($internship->company_logo)}}" alt="">
                                        <input type="hidden" name="old_logo" value="{{$internship->company_logo}}">
                                    </div>
                                </div> 

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="duration">Duration</label>
                                        <input type="text" class="form-control" id="duration" name="duration"
                                            placeholder="Enter duration..." value="{{$internship->duration}}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="salary">Salary</label>
                                        <input type="text" class="form-control" id="salary" name="salary"
                                            placeholder="Enter Salary..." value="{{$internship->salary}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="deadline">Deadline</label>
                                        <input type="date" class="form-control" id="deadline" name="deadline"
                                            placeholder="Enter Deadline..." value="{{$internship->deadline}}" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="details">Details</label>
                                        <textarea  class="textarea ckeditor" 
                                            name="details">{!!$internship->details!!}</textarea>
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

<script>
        CKEDITOR.replace( 'details' );
        $("form").submit( function(e) {
            var messageLength = CKEDITOR.instances['details'].getData().replace(/<[^>]*>/gi, '').length;
            if( !messageLength ) {
                alert( 'Please enter details :)' );
                e.preventDefault();
            }
        });
</script>
@endsection

@extends('admin.layout.master')
@section('title','edit event')
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
                    <li class="breadcrumb-item"><a href="{{route('job.index')}}">Events</a></li>
                    <li class="breadcrumb-item active">Edit Event</li>
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
                        <h3 class="card-title">Edit Event</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('event.update',$event->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{$event->id}}">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="Enter Title..." value="{{$event->id}}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Select Category</label>
                                       <select class="form-control" name="cat_id" required>
                                         <option value="" selected disabled>Please Select a category</option>
                                         @if($categories)
                                         @foreach($categories as $category)
                                         <option value="{{$category->id}}" {{($category->id==$event->category_id) ? 'selected':''}}>{{$category->title}}</option>
                                         @endforeach
                                         @endif
                                       </select>
                                     </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="organization_name">Organization Name</label>
                                        <input type="text" class="form-control" id="organization_name" name="organization_name"
                                            placeholder="Enter Organization Name..." value="{{$event->organization_name}}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="banner">Upload Banner</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                              <input type="file" name="banner" id="banner" class="custom-file-input" value="{{old('banner')}}" onchange="previewFile(this);">
                                              <label class="custom-file-label" for="banner">Choose file</label>
                                            </div>
                                        </div>
                                        <img class="mt-3" style="width:100px;" id="previewImg" src="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row justify-content-end">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="old_banner">Old Banner</label>
                                                <img class="d-block"  width="200" id="old_banner" src="{{Storage::url($event->banner)}}" alt="">
                                                <input type="hidden" name="old_banner" value="{{$event->banner}}">
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="start_date">Start Date</label>
                                        <input type="date" class="form-control" id="start_date" name="start_date"
                                            placeholder="Enter Start date..." value="{{$event->start_date}}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="end_date">End Date</label>
                                        <input type="date" class="form-control" id="end_date" name="end_date"
                                            placeholder="Enter End date..." value="{{$event->end_date}}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="start_time">Start Time</label>
                                        <input type="time" class="form-control" id="start_time" name="start_time"
                                            placeholder="Enter Start time..." value="{{$event->start_time}}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input type="text" class="form-control" id="location" name="location"
                                            placeholder="Enter Event Location..." value="{{$event->location}}" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="event_link">Event Link</label>
                                        <input type="text" class="form-control" id="event_link" name="event_link"
                                            placeholder="Enter Event link..." value="{{$event->event_link}}" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="details">Details</label>
                                        <textarea  class="textarea ckeditor" 
                                            name="details">{!!$event->details!!}</textarea>
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

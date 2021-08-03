@extends('admin.layout.master')
@section('title', 'category')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Category</h1>
      </div>
      <div class="col-sm-6"></div>
    </div>
  </div>
</section>


<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-secondary">
          <div class="card-header d-flex align-items-center ">
            <h3 class="card-title">Category</h3>
            <a
              href=""
              class="btn btn-outline-dark ml-auto"
              data-toggle="modal"
              data-target="#createModal"
              ><i class="fas fa-plus"></i
            ></a>
          </div>
          <div class="card-body table-responsive">
            <table id="example1" class="table table-hover">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Logo</th>
                  <th>Banner</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if($categories)
                @foreach($categories as $category)
                <tr>
                  <td>{{$category->title}}</td>

                  <td>
                    <img width="100px" height="100px" src="{{Storage::url($category->logo)}}" alt="picture of logo">
                  </td>

                  <td>
                    <img width="100px" height="100px" src="{{Storage::url($category->banner)}}" alt="picture of banner">
                  </td>

                  <td class="d-flex justify-content-center">
                      <a href="javaScript:void(0)" class="btn btn-icon btn-warning mr-1" onclick="editCategory({{$category->id}})"><i class="fa fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-danger" onclick="
                      if (confirm('are you sure to delete?')) {
                        document.getElementById('delete_form_{{$category->id}}').submit();
                      }
                      "><i class="fa fa-trash"></i></a>
                      <form action="{{route('category.destroy',$category->id)}}" id="delete_form_{{$category->id}}" method="post">
                         @csrf
                         @method('DELETE')
                      </form>
                  </td>
                </tr>
              </tbody>
                @endforeach
                @endif
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Category create Modal -->
<div
  class="modal fade"
  id="createModal"
  tabindex="-1"
  role="dialog"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form
        class="form"
        action="{{route('category.store')}}"
        method="post"
        enctype="multipart/form-data"
      >
        @csrf
        <div class="modal-body">
          <div class="row">

            <div class="col-md-12">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{old('title')}}" />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="logo">Upload Your Logo</label>
                <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="logo" id="logo" class="custom-file-input" value="{{old('logo')}}" onchange="previewFile(this);" required>
                      <label class="custom-file-label" for="logo">Choose file</label>
                    </div>
                </div>
              </div>
              </span>
                <img style="width:100px;" id="previewImg" src="">
              <span>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="banner">Upload Your Banner</label>
                <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="banner" id="banner" class="custom-file-input" value="{{old('banner')}}" onchange="previewFile2(this);" required>
                      <label class="custom-file-label" for="banner">Choose file</label>
                    </div>
                </div>
              </div>
              </span>
                <img style="width:100px;" id="previewImg2" src="">
              <span>
            </div>

          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
            Close
          </button>
          <input type="submit" class="btn btn-outline-secondary" />
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Category edit modal -->
<div class="modal fade" id="editModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="category-name">Edit Category</h2>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form
        class="form"
        action="{{route('category.update',$category->id ?? '')}}"
        method="post"
        enctype="multipart/form-data"
      >
        @csrf 
        @method('PUT')
        <div class="modal-body" id="edit-form"></div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
            Close
          </button>
          <input type="submit" class="btn btn-outline-secondary" />
        </div>
      </form>
    </div>
  </div>
</div>


@endsection

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

        function previewFile2(input){
            var file = $("input[type=file]").get(1).files[0];

            if(file){
                var reader = new FileReader();

                reader.onload = function(){
                    $("#previewImg2").attr("src", reader.result);
                }

                reader.readAsDataURL(file);
            }
        }
        function previewFile3(input){
            var file = $("input[type=file]").get(2).files[0];

            if(file){
                var reader = new FileReader();

                reader.onload = function(){
                    $("#previewImg3").attr("src", reader.result);
                }

                reader.readAsDataURL(file);
            }
        }
        function previewFile4(input){
            var file = $("input[type=file]").get(3).files[0];

            if(file){
                var reader = new FileReader();

                reader.onload = function(){
                    $("#previewImg4").attr("src", reader.result);
                }

                reader.readAsDataURL(file);
            }
        }
</script>

<script type="text/javascript">
       async function editCategory(id){
          const res = await fetch('{{route('edit_category')}}', 
          { 
            method: 'POST',
            headers : { 
                       'Content-Type': 'application/json'
                       },
            body:JSON.stringify({'id':id ,'_token': '{{csrf_token()}}'})
            });

            const data = await res.json();

            $('#edit-form').html(data.data)
            $('#editModal').modal('show')
        }
</script>
@endsection
<!-- /.content-wrapper -->



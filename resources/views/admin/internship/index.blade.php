@extends('admin.layout.master')
@section('title', 'internships')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Internships</h1>
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
            <h3 class="card-title">Internships</h3>
            <a
              href="{{route('internship.create')}}"
              class="btn btn-outline-dark ml-auto"
              ><i class="fas fa-plus"></i
            ></a>
          </div>
          <div class="card-body table-responsive">
            <table id="example1" class="table table-hover ">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Category ID</th>
                  <th>Company Name</th>
                  <th>Company Logo</th>
                  <th>Duration</th>
                  <th>Work At</th>
                  <th>Salary</th>
                  <th>Deadline</th>
                  <th>Details</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @if($internships)
                @foreach($internships as $internship)
                <tr>
                  <td>{{$internship->title}}</td>
                  <td>{{$internship->category_id}}</td>
                  <td>{{$internship->company_name}}</td>
                  <td>
                    <img width="100px" height="100px" src="{{Storage::url($internship->company_logo)}}" alt="company logo">
                  </td>
                  <td>{{$internship->duration}}</td>
                  <td>{{$internship->work_at}}</td>
                  <td>{{$internship->salary}}</td>
                  <td>{{$internship->deadline}}</td>
                  <td>{!! Str::words($internship->details, '5') !!}</td>
                  <td class="d-flex justify-content-center">
                        <a href="{{route('internship.edit',$internship->id)}}" class="btn btn-icon btn-warning mr-1"><i class="fa fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-danger" onclick="
                      if (confirm('are you sure to delete?')) {
                        document.getElementById('delete_form_{{$internship->id}}').submit();
                      }
                      "><i class="fa fa-trash"></i></a>
                      <form action="{{route('internship.destroy',$internship->id)}}" id="delete_form_{{$internship->id}}" method="post">
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


@endsection

@section('script')
@endsection
<!-- /.content-wrapper -->



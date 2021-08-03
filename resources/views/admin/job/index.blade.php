@extends('admin.layout.master')
@section('title', 'jobs')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Jobs</h1>
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
            <h3 class="card-title">Jobs</h3>
            <a
              href="{{route('job.create')}}"
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
                  <th>Work At</th>
                  <th>Salary</th>
                  <th>Deadline</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody>
                @if($jobs)
                @foreach($jobs as $job)
                <tr>
                  <td>{{$job->title}}</td>
                  <td>{{$job->category_id}}</td>
                  <td>{{$job->company_name}}</td>
                  <td>
                    <img width="100px" height="100px" src="{{Storage::url($job->company_logo)}}" alt="company logo">
                  </td>
                  <td>{{$job->work_at}}</td>
                  <td>{{$job->salary}}</td>
                  <td>{{$job->deadline}}</td>
                  <td>{!! Str::words($job->details, '15') !!}</td>
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



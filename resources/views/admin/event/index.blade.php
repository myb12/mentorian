@extends('admin.layout.master')
@section('title', 'events')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Events</h1>
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
            <h3 class="card-title">Events</h3>
            <a
              href="{{route('event.create')}}"
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
                  <th>Organization Name</th>
                  <th>Banner</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Start Time</th>
                  <th>Location</th>
                  <th>Event Link</th>
                  <th>Details</th>
                  <th class="d-flex align-items-end" style=" height: 3rem;">Actions</th>
                </tr>
              </thead>
              <tbody>
                @if($events)
                @foreach($events as $event)
                <tr>
                  <td>{{$event->title}}</td>
                  <td>{{$event->category_id}}</td>
                  <td>{{$event->organization_name}}</td>
                  <td>
                    <img width="100px" height="100px" src="{{Storage::url($event->banner)}}" alt="Event Banner">
                  </td>
                  <td>{{$event->start_date}}</td>
                  <td>{{$event->end_date}}</td>
                  <td>{{$event->start_time}}</td>
                  <td>{{$event->location}}</td>
                  <td>{{$event->event_link}}</td>
                  <td>{!! Str::words($event->details, '5') !!}</td>
                  <td class="d-flex justify-content-center">
                        <a href="{{route('event.edit',$event->id)}}" class="btn btn-icon btn-warning mr-1"><i class="fa fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-danger" onclick="
                      if (confirm('are you sure to delete?')) {
                        document.getElementById('delete_form_{{$event->id}}').submit();
                      }
                      "><i class="fa fa-trash"></i></a>
                      <form action="{{route('event.destroy',$event->id)}}" id="delete_form_{{$event->id}}" method="post">
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



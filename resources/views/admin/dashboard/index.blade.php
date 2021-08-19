@extends('admin.layout.master')
@section('title','dashboard')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin Dashboard</h1>
          </div>
          <div class="col-sm-6">
           
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          @if($categories)
          @foreach($categories as $category)
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner d-flex justify-content-center">
                <h3>{{$category->title}}</h3>
              </div>
              <div class="icon d-flex justify-content-center">
                <!-- <i class="ion ion-bag"></i> -->
                <img src="{{Storage::url($category->logo)}}" alt="" width="50">
              </div>
              <a href="{{route('category.index')}}" class="small-box-footer mt-3">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          @endforeach
          @endif
          <!-- ./col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
  <!-- /.content-wrapper -->

  

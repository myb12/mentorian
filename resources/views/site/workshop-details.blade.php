@extends('site.layout.master')
@section('title','Explore Workshops Worldwide!')
@section('content')
      <!-- Banner section-->
      <section class="banner-margin-top" id="job">
        <div class="jumbotron jumbotron-fluid workshop-details-bg">
          <div class="container">
            <h1 class="banner-title">{{$workshop->title}}</h1>
          </div>
        </div>
      </section>
    </header>

    <main>   
      <!-- Workshop details section-->
      <section class="container workshops-container my-5 border rounded p-3">
        <header class="workshops-header mb-4">
          <img src="{{Storage::url($workshop->banner)}}" alt="">
        </header>

        <div class="row">

          <div class="col-6 my-2 col-md-4 mt-3">
            <div class="d-flex flex-column">
              <span class="m-0 text-muted">
                <i class="fas fa-users mr-2"></i>ORGANIZATION
              </span>
              <span class="m-0">{{$workshop->organization_name}}</span>
            </div>
          </div>

          <div class="col-6 my-2 col-md-4 mt-3">
            <div class="d-flex flex-column">
              <span class="m-0 text-muted">
                <i class="fas fa-map-marker-alt mr-2"></i>LOCATION
              </span>
              <span class="m-0">{{$workshop->location}}</span>
            </div>
          </div>

          <div class="col-6 my-2 col-md-4 mt-3">
            <div class="d-flex flex-column">
              <span class="m-0 text-muted">
                <i class="fas fa-calendar-alt mr-2"></i>START DATE
              </span>
              <span class="m-0">{{$workshop->start_date}}</span>
            </div>
          </div>

          <div class="col-6 my-2 col-md-4 mt-3">
            <div class="d-flex flex-column">
              <span class="m-0 text-muted">
                <i class="far fa-calendar-times"></i>END DATE
              </span>
              <span class="m-0">{{$workshop->end_date}}</span>
            </div>
          </div>

          <div class="col-6 my-2 col-md-4 mt-3">
            <div class="d-flex flex-column">
              <span class="m-0 text-muted">
                <i class="fas fa-hourglass-start mr-2"></i>START TIME
              </span>
              <span class="m-0">{{$workshop->start_time}}</span>
            </div>
          </div>

        </div>
        <hr class="my-5" />

          <div class="workshop-details">{!!$workshop->details!!}</div>
            
            <div class="application-process">
              <div class="d-flex flex-column align-items-center">
                <h3><i class="fas fa-arrow-right mr-3"></i>Application Process</h3>
                <p>Apply through the given link.</p>
                <a href="{{$workshop->workshop_link}}">
                  <button class="btn btn-mentorian mb-3">Apply Now</button>
                </a>
              </div>
            </div>
      </section>
    </main>

@endsection

@section('script')

@endsection

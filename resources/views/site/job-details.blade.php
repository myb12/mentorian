@extends('site.layout.master')
@section('title','Explore Job')
@section('content')
      <!-- Banner section-->
      <section class="banner-margin-top" id="job">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <img
              class="img-fluid banner-image"
              src="{{asset('assets/site/images/job.svg')}}"
              alt=""
            />
          </div>
        </div>
      </section>
    </header>

    <main>
      @if($job)
      <div class="d-flex justify-content-center">
        <h2 class="section-title mb-4">
          <span>{{$job->title}}</span>&nbsp;at&nbsp;<span> {{$job->company_name}}</span>
        </h2>
      </div>

      <!-- Job section-->
      <section class="container my-5 border rounded p-4">
        <header class="d-flex justify-content-between mb-4">
          <div>
            <h4 class="job-title mb-1">{{$job->title}}</h4>
            <a
              class="company-name text-muted"
              target="_blank"
              href="https://mentorianbd.com/"
              >{{$job->company_name}}</a
            >
          </div>
          <img class="company-logo img-fluid" src="{{Storage::url($job->company_logo)}}" alt="" />
        </header>

        <div class="row">
          <div class="col-6 my-2 col-md-3">
            <div class="d-flex flex-column">
              <span class="m-0 text-muted"
                ><i class="fas fa-laptop-house mr-2"></i>WORK AT</span
              >
              <span class="m-0">
                @if ($job->work_at == 1)
                       Office
                @else
                       Home
                @endif
              </span>
            </div>
          </div>

          <div class="col-6 my-2 col-md-3">
            <div class="d-flex flex-column">
              <span class="m-0 text-muted"
                ><i class="far fa-money-bill-alt mr-2"></i>SALARY</span
              >
              <span class="m-0">{{$job->salary}}</span>
            </div>
          </div>

          <div class="col-6 my-2 col-md-3">
            <div class="d-flex flex-column">
              <span class="m-0 text-muted"
                ><i class="fas fa-hourglass-end mr-2"></i>DEADLINE</span
              >
              <span class="m-0">{{$job->deadline}}</span>
            </div>
          </div>

          <div class="col-6 my-2 col-md-3">
            <div class="d-flex flex-column">
              <span class="m-0 text-muted"
                ><i class="fas fa-briefcase mr-2"></i>EMPLOYMENT STATUS</span
              >
              <span class="m-0">
                @if ($job->duration)
                      Internship
                @else
                      Full Time
                @endif                
              </span>
            </div>
          </div>

          @if ($job->duration)
          <div class="col-6 my-2 col-md-3">
            <div class="d-flex flex-column">
              <span class="m-0 text-muted"
                ><i class="fas fa-stopwatch mr-2"></i>DURATION</span
              >
              <span class="m-0">{{$job->duration}}</span>
            </div>
          </div>
          @endif      
        </div>
        
        <hr class="my-5" />

        <div class="job-details">{!!$job->details!!}</div>

        <div class="application-process">
          <div class="d-flex flex-column align-items-center">
            <h3><i class="fas fa-arrow-right mr-3"></i>Application Process</h3>
            <p>Apply through the given link.</p>
            <a href="">
              <button class="btn btn-mentorian mb-3">Apply Now</button>
            </a>
          </div>
        </div>
      </section>
      @endif
    </main>

@endsection

@section('script')

@endsection
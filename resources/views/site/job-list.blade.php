@extends('site.layout.master')
@section('title','Explore Jobs')
@section('content')
      <!-- Banner section-->
      <section class="banner-margin-top" id="job">
        <div class="jumbotron jumbotron-fluid">
            <img
              class="img-fluid banner-image"
              src="{{asset('assets/site/images/jobs.svg')}}"
              alt=""
            />
        </div>
      </section>
    </header>

    <main>
      <!-- Jobs section-->
      <!-- <div class="helper-div" id="jobs"></div> -->
      <section class="container mb-5">
        <div class="row jobs mx-0">
          
          <div class="col-12 col-md-4 my-2 categories px-0 pl-md-0 pr-md-3">
            <h3 class="section-title mb-3">Categories</h3>
            <div class="card">
              <ul class="list-unstyled">
                @if($categories)
                @foreach($categories as $category)
                <a href="">
                  <li class="mt-3">{{$category->title}}</li>
                </a>
                @endforeach
                @endif
              </ul>
            </div>
          </div>

          <div class="col-12 col-md-8 my-2 job-list px-0 pl-md-3 pr-md-0">
            <h3 class="section-title mb-3">Job Circulars</h3>
            
            @if($jobs)
            @foreach($jobs as $job)
            <div class="card">
              <header class="d-flex justify-content-between">
                <div>
                  <h4 class="job-title mb-1">{{$job->title}}</h4>
                  <a
                    class="company-name text-muted"
                    target="_blank"
                    href=""
                    >{{$job->company_name}}</a>
                </div>
                <img class="company-logo img-fluid" src="{{Storage::url($job->company_logo)}}" alt="" />
              </header>

              <div class="row my-4">
                <div class="col-6 my-2 col-lg-4">
                  <div class="d-flex flex-column">
                    <span class="m-0 text-muted"
                      ><i class="fas fa-laptop-house"></i> &nbsp;WORK AT</span
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

                <div class="col-6 my-2 col-lg-4">
                  <div class="d-flex flex-column">
                    <span class="m-0 text-muted"
                      ><i class="far fa-money-bill-alt"></i> &nbsp;SALARY</span
                    >
                    <span class="m-0">{{$job->salary}}</span>
                  </div>
                </div>

                <div class="col-6 my-2 col-lg-4">
                  <div class="d-flex flex-column">
                    <span class="m-0 text-muted"
                      ><i class="fas fa-hourglass-end"></i> &nbsp;DEADLINE</span
                    >
                    <span class="m-0">{{$job->deadline}}</span>
                  </div>
                </div>

                @if ($job->duration)
                <div class="col-6 my-2 col-md-3">
                  <div class="d-flex flex-column">
                    <span class="m-0 text-muted">
                      <i class="fas fa-stopwatch"></i> &nbsp;DURATION</span>
                    <span class="m-0">{{$job->duration}}</span>
                  </div>
                </div>
                @endif                  

              </div>

              <div class="row justify-content-between">
                <div class="job-type">
                      @if ($job->duration)
                            Internship
                      @else
                            Full Time
                      @endif                 
                </div>

                      @if ($job->duration)
                            <a href="{{route('internship_details',$job->id)}}">
                              <button class="btn btn-sm btn-mentorian mr-3" type="submit">View details</button>
                            </a>
                      @else
                            <a href="{{route('job_details',$job->id)}}">
                              <button class="btn btn-sm btn-mentorian mr-3" type="submit">View details</button>
                            </a>
                      @endif
              </div>
             
            </div>
            @endforeach
            @endif
          </div>
          
        </div>
      </section>
    </main>

@endsection

@section('script')

@endsection
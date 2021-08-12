@extends('site.layout.master')
@section('title','mentorian opportunities')
@section('content')
      <!-- banner section  -->
      <section class="banner-margin-top" id="banner">
        <div class="jumbotron jumbotron-fluid">
          <img
            class="img-fluid banner-image"
            src="{{asset('assets/site/images/banner.svg')}}"
            alt=""
          />
        </div>
      </section>
    </header>

    <main>
      <!-- Opportunities section-->
      <div class="helper-div" id="opportunities"></div>
      <section class="container mb-5">
        <h3 class="section-title mb-4">Opportunities</h3>
        <div class="row opportunities">

          <div class="col-12 col-md-4 my-3">
            <div class="card">
              <img class="img-fluid" src="{{asset('assets/site/images/job.gif')}}" alt="Card image cap"/>
              <h2 class="opportunity-title font-weight-bold text-center">Jobs</h2>
             
              <a href="{{route('job_list')}}">
                  <div class="see-more">
                     <button class="btn btn-sm btn-mentorian">
                       <i class="far fa-arrow-alt-circle-right"></i> See more
                      </button>
                  </div>
              </a>
            </div>
          </div>

          <div class="col-12 col-md-4 my-3">
            <div class="card">
              <img class="img-fluid" src="{{asset('assets/site/images/internship.gif')}}" alt="Card image cap"/>
              <h2 class="opportunity-title font-weight-bold text-center">Internships</h2>
             
              <a href="{{route('internship_list')}}">
                  <div class="see-more">
                     <button class="btn btn-sm btn-mentorian">
                       <i class="far fa-arrow-alt-circle-right"></i> See more
                      </button>
                  </div>
              </a>
            </div>
          </div>

          <div class="col-12 col-md-4 my-3">
            <div class="card">
              <img class="img-fluid" src="{{asset('assets/site/images/workshop.gif')}}" alt="Card image cap"/>
              <h2 class="opportunity-title font-weight-bold text-center">Workshops</h2>
             
              <a href="{{route('workshop_list')}}">
                  <div class="see-more">
                     <button class="btn btn-sm btn-mentorian">
                       <i class="far fa-arrow-alt-circle-right"></i> See more
                      </button>
                  </div>
              </a>
            </div>
          </div>

          <!-- <div class="col-12 col-md-4 my-3">
            <div class="card">
              <img
                class="img-fluid m-3"
                src="{{asset('assets/site/images/category.jpg')}}"
                alt="Card image cap"
              />
              <div class="card-body">
                <h3 class="card-title text-center">Internships</h3>
              </div>

              <a href="{{route('internship_list')}}">
                  <div class="see-more">
                     <button class="btn btn-sm btn-mentorian">
                       <i class="far fa-arrow-alt-circle-right"></i> See more
                      </button>
                  </div>
              </a>

            </div>
          </div>

          <div class="col-12 col-md-4 my-3">
            <div class="card">
              <img
                class="img-fluid m-3"
                src="{{asset('assets/site/images/category.jpg')}}"
                alt="Card image cap"
              />
              <div class="card-body">
                <h3 class="card-title text-center">Workshops</h3>
              </div>
              
              <a href="{{route('workshop_list')}}">
                  <div class="see-more">
                     <button class="btn btn-sm btn-mentorian">
                       <i class="far fa-arrow-alt-circle-right"></i> See more
                      </button>
                  </div>
              </a>
              
            </div>
          </div> -->
          
        </div>
      </section>
    </main>
@endsection

@section('script')

@endsection

@extends('site.layout.master')
@section('title','Explore Job')
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
                <a href="">
                  <li class="mt-3">Category-1</li>
                </a>
                <a href="">
                  <li class="mt-3">Category-2</li>
                </a>
                <a href="">
                  <li class="mt-3">Category-3</li>
                </a>
                <a href="">
                  <li class="mt-3">Category-1</li>
                </a>
                <a href="">
                  <li class="mt-3">Category-4</li>
                </a>
              </ul>
            </div>
          </div>
          <div class="col-12 col-md-8 my-2 job-list px-0 pl-md-3 pr-md-0">
            <h3 class="section-title mb-3">Job Circulars</h3>
            <div class="card">
              <header class="d-flex justify-content-between">
                <div>
                  <h4 class="job-title mb-1">Web Development</h4>
                  <a
                    class="company-name text-muted"
                    target="_blank"
                    href="https://mentorianbd.com/"
                    >Mentorian</a
                  >
                </div>
                <img class="company-logo" src="{{asset('assets/site/images/logo.png')}}" alt="" />
              </header>

              <div class="row my-4">
                <div class="col-6 my-2 col-lg-4">
                  <div class="d-flex flex-column">
                    <span class="m-0 text-muted"
                      ><i class="far fa-play-circle"></i> &nbsp;WORK AT</span
                    >
                    <span class="m-0">Office</span>
                  </div>
                </div>

                <div class="col-6 my-2 col-lg-4">
                  <div class="d-flex flex-column">
                    <span class="m-0 text-muted"
                      ><i class="far fa-money-bill-alt"></i> &nbsp;SALARY</span
                    >
                    <span class="m-0">Negotiable</span>
                  </div>
                </div>

                <div class="col-6 my-2 col-lg-4">
                  <div class="d-flex flex-column">
                    <span class="m-0 text-muted"
                      ><i class="fas fa-hourglass-end"></i> &nbsp;DEADLINE</span
                    >
                    <span class="m-0">30 Jul 2021</span>
                  </div>
                </div>
              </div>
              <div class="row justify-content-between">
                <div class="job-type">Internship</div>
                <a href="job-details.html">
                  <button class="btn btn-sm btn-mentorian mr-3" type="submit">
                    View details
                  </button>
                </a>
              </div>
            </div>

            <div class="card">
              <header class="d-flex justify-content-between">
                <div>
                  <h4 class="job-title mb-1">Web Development</h4>
                  <a
                    class="company-name text-muted"
                    target="_blank"
                    href="https://mentorianbd.com/"
                    >Mentorian</a
                  >
                </div>
                <img class="company-logo" src="{{asset('assets/site/images/logo.png')}}" alt="" />
              </header>

              <div class="row my-4">
                <div class="col-6 my-2 col-lg-4">
                  <div class="d-flex flex-column">
                    <span class="m-0 text-muted"
                      ><i class="far fa-play-circle"></i> &nbsp;WORK AT</span
                    >
                    <span class="m-0">Office</span>
                  </div>
                </div>

                <div class="col-6 my-2 col-lg-4">
                  <div class="d-flex flex-column">
                    <span class="m-0 text-muted"
                      ><i class="far fa-money-bill-alt"></i> &nbsp;SALARY</span
                    >
                    <span class="m-0">Negotiable</span>
                  </div>
                </div>

                <div class="col-6 my-2 col-lg-4">
                  <div class="d-flex flex-column">
                    <span class="m-0 text-muted"
                      ><i class="fas fa-hourglass-end"></i> &nbsp;DEADLINE</span
                    >
                    <span class="m-0">30 Jul 2021</span>
                  </div>
                </div>
              </div>
              <div class="row justify-content-between">
                <div class="job-type">Full Time</div>
                <a href="job-details.html">
                  <button class="btn btn-sm btn-mentorian mr-3" type="submit">
                    View details
                  </button>
                </a>
              </div>
            </div>

            <div class="card">
              <header class="d-flex justify-content-between">
                <div>
                  <h4 class="job-title mb-1">Web Development</h4>
                  <a
                    class="company-name text-muted"
                    target="_blank"
                    href="https://mentorianbd.com/"
                    >Mentorian</a
                  >
                </div>
                <img class="company-logo" src="{{asset('assets/site/images/logo.png')}}" alt="" />
              </header>

              <div class="row my-4">
                <div class="col-6 my-2 col-lg-4">
                  <div class="d-flex flex-column">
                    <span class="m-0 text-muted"
                      ><i class="far fa-play-circle"></i> &nbsp;WORK AT</span
                    >
                    <span class="m-0">Office</span>
                  </div>
                </div>

                <div class="col-6 my-2 col-lg-4">
                  <div class="d-flex flex-column">
                    <span class="m-0 text-muted"
                      ><i class="far fa-money-bill-alt"></i> &nbsp;SALARY</span
                    >
                    <span class="m-0">Negotiable</span>
                  </div>
                </div>

                <div class="col-6 my-2 col-lg-4">
                  <div class="d-flex flex-column">
                    <span class="m-0 text-muted"
                      ><i class="fas fa-hourglass-end"></i> &nbsp;DEADLINE</span
                    >
                    <span class="m-0">30 Jul 2021</span>
                  </div>
                </div>
              </div>
              <div class="row justify-content-between">
                <div class="job-type">Full Time</div>
                <a href="job-details.html">
                  <button class="btn btn-sm btn-mentorian mr-3" type="submit">
                    View details
                  </button>
                </a>
              </div>
            </div>

            <div class="card">
              <header class="d-flex justify-content-between">
                <div>
                  <h4 class="job-title mb-1">Web Development</h4>
                  <a
                    class="company-name text-muted"
                    target="_blank"
                    href="https://mentorianbd.com/"
                    >Mentorian</a
                  >
                </div>
                <img class="company-logo" src="{{asset('assets/site/images/logo.png')}}" alt="" />
              </header>

              <div class="row my-4">
                <div class="col-6 my-2 col-lg-4">
                  <div class="d-flex flex-column">
                    <span class="m-0 text-muted"
                      ><i class="far fa-play-circle"></i> &nbsp;WORK AT</span
                    >
                    <span class="m-0">Office</span>
                  </div>
                </div>

                <div class="col-6 my-2 col-lg-4">
                  <div class="d-flex flex-column">
                    <span class="m-0 text-muted"
                      ><i class="far fa-money-bill-alt"></i> &nbsp;SALARY</span
                    >
                    <span class="m-0">Negotiable</span>
                  </div>
                </div>

                <div class="col-6 my-2 col-lg-4">
                  <div class="d-flex flex-column">
                    <span class="m-0 text-muted"
                      ><i class="fas fa-hourglass-end"></i> &nbsp;DEADLINE</span
                    >
                    <span class="m-0">30 Jul 2021</span>
                  </div>
                </div>
              </div>
              <div class="row justify-content-between">
                <div class="job-type">Full Time</div>
                <a href="job-details.html">
                  <button class="btn btn-sm btn-mentorian mr-3" type="submit">
                    View details
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

@endsection

@section('script')

@endsection
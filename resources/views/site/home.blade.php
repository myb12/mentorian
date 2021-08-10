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
          <div class="col-12 col-md-6 my-3">
            <div class="card">
              <img
                class="img-fluid m-3"
                src="{{asset('assets/site/images/category.jpg')}}"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">Job Circulars</h5>
                <p class="card-text">
                  With supporting text below as a natural lead-in to additional
                  content..
                </p>
              </div>
              <div class="see-more">
                <a href="job-list.html" class="btn btn-mentorian"
                  ><i class="far fa-arrow-alt-circle-right"></i> See more
                </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 my-3">
            <div class="card">
              <img
                class="img-fluid m-3"
                src="{{asset('assets/site/images/category.jpg')}}"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">Internship</h5>
                <p class="card-text">
                  With supporting text below as a natural lead-in to additional
                  content.
                </p>
              </div>
              <div class="see-more">
                <a href="internship-list.html" class="btn btn-mentorian"
                  ><i class="far fa-arrow-alt-circle-right"></i> See more
                </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 my-3">
            <div class="card">
              <img
                class="img-fluid m-3"
                src="{{asset('assets/site/images/category.jpg')}}"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">Workshops</h5>
                <p class="card-text">
                  With supporting text below as a natural lead-in to additional
                  content.
                </p>
              </div>
              <div class="see-more">
                <a href="workshop-list.html" class="btn btn-mentorian"
                  ><i class="far fa-arrow-alt-circle-right"></i> See more
                </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 my-3">
            <div class="card">
              <img
                class="img-fluid m-3"
                src="{{asset('assets/site/images/category.jpg')}}"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title">Events</h5>
                <p class="card-text">
                  With supporting text below as a natural lead-in to additional
                  content.
                </p>
              </div>
              <div class="see-more">
                <a href="" class="btn btn-mentorian"
                  ><i class="far fa-arrow-alt-circle-right"></i> See more
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

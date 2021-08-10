@extends('site.layout.master')
@section('title','Explore Workshops Worldwide!')
@section('content')
      <!-- banner section  -->
      <section class="banner-margin-top" id="banner">
        <div class="jumbotron jumbotron-fluid">
          <img
            class="img-fluid banner-image"
            src="{{asset('assets/site/images/workshop.svg')}}"
            alt=""
          />
        </div>
      </section>
    </header>

    <main>
      <!-- Workshops list section-->
      <div class="helper-div" id="opportunities"></div>
      <section class="container mb-5">
        <h3 class="section-title mb-4">Workshops</h3>
        <div class="row workshops">
            @if($workshops)
            @foreach($workshops as $workshop)         
          <div class="col-12 col-md-6 col-lg-3 my-2 px-2">

            <div class="card">
              <div class="workshop-image">
                <div class="workshop-ribbon">
                  <small><i class="far fa-hourglass"></i> On Going</small>
                </div>
                <img
                  class="img-fluid"
                  src="{{Storage::url($workshop->banner)}}"
                  alt="Card image cap"
                />
                <a href="workshop-details.html">
                  <div class="see-more-workshops">
                      <i class="fas fa-plus btn btn-sm btn-mentorian"></i>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{$workshop->title}}</h5>
              </div>
              <div class="card-footer text-center">
                  <span>{{$workshop->organization_name}}</span>
              </div>
            </div>
          </div>
          @endforeach
          @endif

        </div>
      </section>
    </main>

@endsection

@section('script')

@endsection

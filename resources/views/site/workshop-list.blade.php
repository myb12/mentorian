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
    <!-- <div class="helper-div" id="opportunities"></div> -->
    <section class="container mb-5">

      <div class="row  mx-0">
          
          <div class="col-12 col-md-3 my-2 categories px-0 pr-md-0 pl-md-3 order-md-2">
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

      <div class="col-12 col-md-9 my-2 job-list px-0 pr-md-3 pl-md-0 order-md-1">     
        <h3 class="section-title mb-3">Workshops</h3>
        <div class="row workshops">
            @if($workshops)
            @foreach($workshops as $workshop)         
          <div class="col-12 col-md-6 col-lg-4 mb-3 px-2">

            <div class="card">
              <div class="workshop-image">
                <div class="workshop-ribbon">
                  <small><i class="far fa-hourglass mr-1"></i>
                   @if ($workshop->end_date < date('Y-m-d'))
                      Deadline Over
                   @else
                      On Going
                   @endif 
                </small>
                </div>
                <img
                  class="img-fluid"
                  src="{{Storage::url($workshop->banner)}}"
                  alt="Card image cap"
                />
                <a href="{{route('workshop_details',$workshop->id)}}">
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
      </div>
    </section>
  </main>

@endsection

@section('script')

@endsection

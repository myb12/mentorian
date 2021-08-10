@extends('site.layout.master')
@section('title','Explore Workshops Worldwide!')
@section('content')
      <!-- Banner section-->
      <section class="banner-margin-top" id="job">
        <div class="jumbotron jumbotron-fluid workshop-details-bg">
          <div class="container">
            <h1 class="banner-title">
              Your Professional Development Opportunity
            </h1>
            <p class="banner-paragraph">
              Your Big Year works with people from every background and provides
              them with inspiration, peer network, innovation and
              entrepreneurial skills to build their own action plan and make an
              impact in their life and in their world.
            </p>
          </div>
        </div>
      </section>
    </header>

    <main>
      <!-- Workshop details section-->
      <section class="container workshops-container my-5 border rounded p-3">
        <header class="workshops-header mb-4">
          <img src="{{asset('assets/site/images/workshop-1.jpg')}}" alt="">
        </header>

        <div class="row">

          <div class="col-6 my-2 col-md-4 mt-3">
            <div class="d-flex flex-column">
              <span class="m-0 text-muted">
                <i class="fas fa-users"></i>&nbsp;&nbsp;ORGANIZATION
              </span>
              <span class="m-0">Stemei Makers Africa</span>
            </div>
          </div>

          <div class="col-6 my-2 col-md-4 mt-3">
            <div class="d-flex flex-column">
              <span class="m-0 text-muted">
                <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;LOCATION
              </span>
              <span class="m-0">Chattogram</span>
            </div>
          </div>

          <div class="col-6 my-2 col-md-4 mt-3">
            <div class="d-flex flex-column">
              <span class="m-0 text-muted">
                <i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;START DATE
              </span>
              <span class="m-0">1st July, 2021</span>
            </div>
          </div>

          <div class="col-6 my-2 col-md-4 mt-3">
            <div class="d-flex flex-column">
              <span class="m-0 text-muted">
                <i class="fas fa-hourglass-start"></i>&nbsp;&nbsp;START TIME
              </span>
              <span class="m-0">10:00 AM</span>
            </div>
          </div>

          <div class="col-6 my-2 col-md-4 mt-3">
            <div class="d-flex flex-column">
              <span class="m-0 text-muted">
                <i class="fas fa-hourglass-end"></i>&nbsp;&nbsp;END TIME
              </span>
              <span class="m-0">4:00 PM</span>
            </div>
          </div>

        </div>
        <hr class="my-5" />

          <div class="workshop-details">

            <p>South Asia, home to more than one-fourth of the world’s population, is set to be one of the hardest-hit regions in the world by COVID-19, as the region endures prolonged lockdowns. The economic impact here is likely to be greater than the health impact, as countries in the region do not have the fiscal space or safety nets for flattening the curve by halting production and economic activity.</p>
            <p>To facilitate a conversation on the adaptation that will be required to address the current crisis, Bangladesh Youth Leadership Center (BYLC) is organizing the South Asia Youth Resilience Summit 2020, between April 16 to 18, to be hosted live on Facebook. On each of the three days, there will be a moderated conversation with a global expert for an hour on how young people in South Asia can build resilience and navigate the complexities of present times caused by COVID-19. In addition, there will be workshops and panel discussions on each of the three days on issues ranging from mental health, leadership, to entrepreneurial realities during a global pandemic.</p>

            <br>

            <h5>Speakers:</h5>
            <p>Ronald Heifetz, Member, International Advisory Board, BYLC; Founder, Center for Public Leadership, Harvard Kennedy School Omar Ishrak, Chairman and CEO, Medtronic; Chairman of the Board, Intel Tarun Khanna, Jorge Paulo Lemann Professor, Harvard Business School</p>

            <br>

            <h5>Moderator</h5>
            <p>Ejaj Ahmad, Founder, and President, Bangladesh Youth Leadership Center</p>
     
            <br>

            <h5>Benefits</h5>
            <p>The Summit is open to all participants at no cost.</p>

            <br>

            <h5>Eligibilities</h5>
            <p>Open for all.</p>

            <br>
            
            <div class="application-process">
              <div class="d-flex flex-column align-items-center">
                <h3><i class="fas fa-arrow-right mr-3"></i>Application Process</h3>
                <p>Apply through the given link.</p>
                <button class="btn btn-mentorian mb-3">Apply Now</button>
              </div>
            </div>
      </section>
    </main>

@endsection

@section('script')

@endsection

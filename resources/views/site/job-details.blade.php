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
      <div class="d-flex justify-content-center">
        <h2 class="section-title mb-4">
          <span>Web Development</span>&nbsp;at&nbsp;<span> Mentorian</span>
        </h2>
      </div>

      <!-- Job section-->
      <section class="container my-5 border rounded p-4">
        <header class="d-flex justify-content-between mb-4">
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

        <div class="row">
          <div class="col-6 my-2 col-md-3">
            <div class="d-flex flex-column">
              <span class="m-0 text-muted"
                ><i class="far fa-play-circle"></i> &nbsp;START DATE</span
              >
              <span class="m-0">Immediately</span>
            </div>
          </div>

          <div class="col-6 my-2 col-md-3">
            <div class="d-flex flex-column">
              <span class="m-0 text-muted"
                ><i class="fas fa-briefcase"></i> &nbsp;EMPLOYMENT STATUS</span
              >
              <span class="m-0">Full-time</span>
            </div>
          </div>

          <div class="col-6 my-2 col-md-3">
            <div class="d-flex flex-column">
              <span class="m-0 text-muted"
                ><i class="far fa-money-bill-alt"></i> &nbsp;SALARY</span
              >
              <span class="m-0">Negotiable</span>
            </div>
          </div>

          <div class="col-6 my-2 col-md-3">
            <div class="d-flex flex-column">
              <span class="m-0 text-muted"
                ><i class="fas fa-hourglass-end"></i> &nbsp;APPLICATION
                DEADLINE</span
              >
              <span class="m-0">30 Jul 2021</span>
            </div>
          </div>
        </div>
        <hr class="my-5" />

        <div class="job-details">
          <h5>Job Responsibilities</h5>
          <ul>
            <li>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius,
              iste.
            </li>
            <li>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius,
              iste.
            </li>
            <li>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius,
              iste.
            </li>
            <li>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius,
              iste.
            </li>
            <li>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius,
              iste.
            </li>
          </ul>

          <br />

          <h5>Wrokplace</h5>
          <ul>
            <li>Chattogram</li>
          </ul>

          <br />

          <h5>Educational Requirements</h5>
          <ul>
            <li>Bachelor degree in any discipline</li>
          </ul>

          <h5>Experience Requirements</h5>
          <ul>
            <li>At least 5 year(s)</li>
          </ul>

          <br />

          <h5>Additional Requirements</h5>
          <ul>
            <li>Age 25 to 35 years</li>
            <li>Both males and females are allowed to apply</li>
            <li>
              Strong programming skills in Object Oriented Python Development
            </li>
            <li>
              Basic knowledge on database, web development, Git & Linux commands
            </li>
            <li>Strong analytic and problem-solving skills</li>
            <li>
              Ability to communicate, obtain requirements, find solutions, and
              implement them in a clean
            </li>
            <li>Ability to adapt to an ever-changing environment.</li>
            <li>
              Self-starter attitude with the ability to work independently.
            </li>
          </ul>

          <br />

          <h5>Number of openings</h5>
          <ul>
            <li>Not specific</li>
          </ul>
        </div>

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
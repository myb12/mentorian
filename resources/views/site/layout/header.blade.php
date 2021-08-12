<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      @yield('title')
    </title>
    <!-- bootstrap stylesheet  -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <!-- custom css stylesheet  -->
    <link rel="stylesheet" href="{{asset('assets/site/css/custom.css')}}" />
  </head>

  <body>
    <!-- header section  -->
    <header>
      <!-- navbar-section -->
      <section class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="#">
              <img src="{{asset('assets/site/images/logo.png')}}" alt="" width="100"
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
              <ul class="navbar-nav ml-auto">
                <li class="nav-item mb-2 mb-lg-0">
                  <a class="nav-link" href="{{route('home')}}"
                    >Home <span class="sr-only">(current)</span></a
                  >
                </li>
                <li class="nav-item mb-2 mb-lg-0">
                  <a class="nav-link" href="{{route('job_list')}}"
                    >Jobs <span class="sr-only">(current)</span></a
                  >
                </li>
                <li class="nav-item mb-2 mb-lg-0">
                  <a class="nav-link" href="{{route('internship_list')}}"
                    >Internships<span class="sr-only">(current)</span></a
                  >
                </li>
                <li class="nav-item mb-2 mb-lg-0">
                  <a class="nav-link" href="{{route('workshop_list')}}"
                    >Workshops <span class="sr-only">(current)</span></a
                  >
                </li>
                @if (Auth::check())
                <li class="nav-item dropdown order-first order-lg-last">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle user" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <i class="fas fa-user-circle"></i>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right mb-2 mb-lg-0" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="">{{ Auth::user()->name }}</a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt mr-1"></i>{{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                          </form>
                      </div>
                </li>
                @else
                <li class="nav-item dropdown order-first order-lg-last mb-2 mb-lg-0">
                      <a id="navbarDropdown" class="nav-link user" href="{{ route('login') }}">
                        <i class="fas fa-sign-in-alt mr-2"></i>Log in
                      </a>
                </li>
                @endif

              </ul>
            </div>
          </div>
        </nav>
      </section>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mentorian-opportunities</title>
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
                <li class="nav-item active">
                  <a class="nav-link" href="index.html"
                    >Home <span class="sr-only">(current)</span></a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="job-list.html"
                    >Job Circular <span class="sr-only">(current)</span></a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="internship-list.html"
                    >Internship<span class="sr-only">(current)</span></a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="workshop-list.html"
                    >Workshops <span class="sr-only">(current)</span></a
                  >
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </section>

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

    <!-- footer section  -->
    <div class="helper-div"></div>
    <footer class="new_footer_area bg_color">
      <div class="new_footer_top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div
                class="f_widget company_widget wow fadeInLeft"
                data-wow-delay="0.2s"
                style="
                  visibility: visible;
                  animation-delay: 0.2s;
                  animation-name: fadeInLeft;
                "
              >
                <h3 class="f-title f_600 t_color f_size_18 mt-4">
                  Get in Touch
                </h3>
                <p>
                  Don???t miss any updates of our new templates and extensions.!
                </p>
                <form
                  action="#"
                  class="f_subscribe_two mailchimp"
                  method="post"
                  novalidate="true"
                  _lpchecked="1"
                >
                  <input
                    type="text"
                    name="EMAIL"
                    class="form-control memail"
                    placeholder="Email"
                  />
                  <button class="btn btn_get btn-mentorian" type="submit">
                    Subscribe
                  </button>
                  <p class="mchimp-errmessage" style="display: none"></p>
                  <p class="mchimp-sucmessage" style="display: none"></p>
                </form>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div
                class="f_widget about-widget pl_70 wow fadeInLeft"
                data-wow-delay="0.4s"
                style="
                  visibility: visible;
                  animation-delay: 0.4s;
                  animation-name: fadeInLeft;
                "
              >
                <h3 class="f-title f_600 t_color f_size_18 mt-4">Download</h3>
                <ul class="list-unstyled f_list">
                  <li><a href="#">Company</a></li>
                  <li><a href="#">Android App</a></li>
                  <li><a href="#">ios App</a></li>
                  <li><a href="#">Desktop</a></li>
                  <li><a href="#">Projects</a></li>
                  <li><a href="#">My tasks</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div
                class="f_widget about-widget pl_70 wow fadeInLeft"
                data-wow-delay="0.6s"
                style="
                  visibility: visible;
                  animation-delay: 0.6s;
                  animation-name: fadeInLeft;
                "
              >
                <h3 class="f-title f_600 t_color f_size_18 mt-4">Help</h3>
                <ul class="list-unstyled f_list">
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Term &amp; conditions</a></li>
                  <li><a href="#">Reporting</a></li>
                  <li><a href="#">Documentation</a></li>
                  <li><a href="#">Support Policy</a></li>
                  <li><a href="#">Privacy</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div
                class="f_widget social-widget pl_70 wow fadeInLeft"
                data-wow-delay="0.8s"
                style="
                  visibility: visible;
                  animation-delay: 0.8s;
                  animation-name: fadeInLeft;
                "
              >
                <h3 class="f-title f_600 t_color f_size_18 mt-4">
                  Team Solutions
                </h3>
                <div class="f_social_icon">
                  <a href="#" class="fab fa-facebook"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-linkedin"></a>
                  <a href="#" class="fab fa-pinterest"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- bootstrap javascript -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <!-- fontawesome -->
    <script
      src="https://kit.fontawesome.com/634ac0fe7a.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

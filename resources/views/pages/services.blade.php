@extends('layouts.app')

@section('content')


  <!-- Page Content -->
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Our Services</h1>
          <span>We are over 20 years of experience</span>
        </div>
      </div>
    </div>
  </div>

  <div class="single-services">
    <div class="container">
      <div class="row" id="tabs">
        <div class="col-md-4">
          <ul>
            <li>
              <a href="#tabs-1">
                Quality assurance
                <i class="fa fa-angle-right"></i>
              </a>
            </li>
            <li>
              <a href="#tabs-2">
                Technical support
                <i class="fa fa-angle-right"></i>
              </a>
            </li>
            <li>
              <a href="#tabs-3">
                Consultancy
                <i class="fa fa-angle-right"></i>
              </a>
            </li>
            <li>
              <a href="#tabs-4">
                Overall Evaluation
                <i class="fa fa-angle-right"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-8">
          <section class="tabs-content">
            <article id="tabs-1">
              <img src="assets/images/single_service_01.jpg" alt="" />
              <h4>Quality assurance</h4>
              <p>
                Blackbox Software Inc may offer quality assurance services to
                ensure that software products meet the highest standards of
                functionality, usability, and security. This could include
                automated testing, manual testing, and performance testing.
              </p>
            </article>
            <article id="tabs-2">
              <img src="assets/images/single_service_02.jpg" alt="" />
              <h4>Technical support</h4>
              <p>
                The company may offer technical support services to clients
                who need assistance with software implementation,
                troubleshooting, and maintenance. This could include 24/7
                support, on-site support, and remote support.
                <br />
                <br />
                Pellentesque pretium, massa at placerat vehicula, neque turpis
                pulvinar tortor, eget convallis lorem odio non tortor. Donec
                massa est, fermentum sit amet felis ac, maximus luctus elit.
                Vivamus aliquet, dolor id imperdiet imperdiet, dui diam
                aliquet dui, a euismod metus enim ac velit. Vivamus eu
                tristique odio, vel tristique quam.
              </p>
            </article>
            <article id="tabs-3">
              <img src="assets/images/single_service_03.jpg" alt="" />
              <h4>Consultancy</h4>
              <p>
                Blackbox Software Inc may offer consultancy services to help
                businesses and organizations identify opportunities to
                leverage technology to achieve their goals. This could include
                digital transformation strategies, software selection, and IT
                infrastructure planning.
              </p>
            </article>
            <article id="tabs-4">
              <img src="assets/images/single_service_04.jpg" alt="" />
              <h4>Overall Evaluation</h4>
              <p>
                based on the company's name and previous discussions, it's
                likely that Blackbox Software Inc offers a range of software
                development and technology-related services to businesses and
                organizations.
              </p>
            </article>
          </section>
        </div>
      </div>
    </div>
  </div>

  <div class="callback-form callback-services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>
              Request a
              <em>call back</em>
            </h2>
            <span>interdum nisl ac urna tempor mollis</span>
          </div>
        </div>
        <div class="col-md-12">
          <div class="contact-form">
            <form id="contact" action="" method="post">
              <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input
                      name="name"
                      type="text"
                      class="form-control"
                      id="name"
                      placeholder="Full Name"
                      required=""
                    />
                  </fieldset>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input
                      name="email"
                      type="text"
                      class="form-control"
                      id="email"
                      pattern="[^ @]*@[^ @]*"
                      placeholder="E-Mail Address"
                      required=""
                    />
                  </fieldset>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input
                      name="subject"
                      type="text"
                      class="form-control"
                      id="subject"
                      placeholder="Subject"
                      required=""
                    />
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea
                      name="message"
                      rows="6"
                      class="form-control"
                      id="message"
                      placeholder="Your Message"
                      required=""
                    ></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button
                      type="submit"
                      id="form-submit"
                      class="border-button"
                    >
                      Send Message
                    </button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="partners">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="owl-partners owl-carousel">
            <div class="partner-item">
              <img src="assets/images/client-01.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection
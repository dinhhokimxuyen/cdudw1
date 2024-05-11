@extends('layouts.site')
@section('title','Home')
@section('content')

    <div class="container-fluid py-5 wow">
      <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px">
          <h5 class="text-primary text-uppercase" style="letter-spacing: 5px">
            Lien he
            </h5>
        </div>
        <div class="row g-5">
          <div class="col-lg-7 wow">
            <div class="bg-light rounded p-5">
              <form>
                <div class="row g-3">
                  <div class="col-6">
                    <input
                      type="text"
                      class="form-control border-0 px-4"
                      placeholder="Your Name"
                      style="height: 55px"
                    />
                  </div>
                  <div class="col-6 ">
                    <input
                      type="email"
                      class="form-control border-0 px-4"
                      placeholder="Your Email"
                      style="height: 55px"
                    />
                  </div>
                  <div class="col-12 mt-1">
                    <input
                      type="text"
                      class="form-control border-0 px-4 "
                      placeholder="Subject"
                      style="height: 55px"
                    />
                  </div>
                  <div class="col-12 mt-1">
                    <textarea
                      class="form-control border-0 px-4 py-3"
                      rows="8"
                      placeholder="Message"
                    ></textarea>
                  </div>
                  <div class="col-12 mt-1">
                    <button class="btn btn-success w-100 py-3" type="submit">
                      Send Message
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-5 wow">
            <div class="bg-light rounded p-5">
              
              
         
              <div>
                <iframe
                  class="position-relative w-100"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                  frameborder="0"
                  style="height: 230px; border: 0"
                  allowfullscreen=""
                  aria-hidden="false"
                  tabindex="0"
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container-fluid bg-danger text-light py-4">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-center text-md-start">
              <p class="mb-md-0">
                &copy; <a href="#">Your Site Name</a>. All Rights Reserved.
              </p>
            </div>
            <div class="col-md-6 text-center text-md-end">
              <p class="mb-0">
                Designed by <a href="https://htmlcodex.com">HTML Codex</a>
              </p>
            </div>
          </div>
        </div>
      </div>
@endsection
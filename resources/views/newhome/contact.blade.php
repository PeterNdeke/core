@extends('layouts.newfrontend')
@section('content')
    <!--header section start-->
    <section class="breadcrumb-section" style="background-image: url('{{ asset('assets/images/logo/bb.png') }}')">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- breadcrumb Section Start -->
            <div class="breadcrumb-content">
               <h5>{{ $page_title}}</h5>
            </div>
            <!-- Breadcrumb section End -->
          </div>
        </div>
      </div>
    </section>

  <!--Contact Section-->
<section class="contact-section contact-section1 section-padding section-background">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!--Contact Info Tabs-->
            <div class="contact-info">
                <div class="row ">
 <!-- contact-content Start -->
                                <div class="col-md-4">
                                  <div class="contact-content">
                                    <div class="contact-header contact-form">
                                      <h2>Get In Touch</h2>
                                    </div>
                                    <div class="contact-list">
                                      <ul>
                                        <li>
                                          <div class="contact-thumb"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                          <div class="contact-text">
                                            <p>Address:<span>{{ $basic->address }}</span></p>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="contact-thumb"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                          <div class="contact-text">
                                            <p>Call Us :<span>{{ $basic->phone }}</span></p>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="contact-thumb"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                          <div class="contact-text">
                                            <p>Mail Us :<span>{{ $basic->email }}</span></p>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                                <!-- contact-content End -->                               
                                <!--Form Column-->
                                <div class="form-column col-md-8 col-sm-12 ">
                                    <!-- Contact Form -->
                                    <div class="contact-form ">
                                        <h2>Send Message Us</h2>
                                       
                                            @if($errors->any())
                                                @foreach ($errors->all() as $error)
                                                    <div class="alert alert-danger alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        {!!  $error !!}
                                                    </div>
                                                @endforeach
                                            @endif
                                            @if (session()->has('message'))
                                                <div class="alert alert-success alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    {{ session()->get('message') }}
                                                </div>
                                            @endif
                                      
                                       <form action="{{ route('contact-submit') }}" method="post">
                                    {!! csrf_field() !!}
                                            <div class="row clearfix">
                                                <div class="col-md-6  col-xs-12 form-group">
                                                    <input type="text" name="name" placeholder="Your Name*" required="">
                                                </div>
                
                                                <div class="col-md-6  col-xs-12 form-group">
                                                    <input type="email" name="email" placeholder="Email Address*" required="">
                                                </div>
                
                                                <div class=" col-md-12   form-group">
                                                    <textarea name="message" placeholder="Your Message..."></textarea>
                                                </div>
                
                                                <div class=" col-md-12 form-group">
                                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Send Message</button>
                                                </div>
                
                                            </div>
                                        </form>
                
                        </div>
                  <!--End Comment Form -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Contact Section-->
    <!--Map Section-->
    <div class="map-section">
      <!--Map Outer-->
	  
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.5524985555603!2d3.427354314274033!3d6.451448495332622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4cf886e6eb7%3A0xe36aaeada5a40cd1!2s39%20Alfred%20Rewane%20Rd%2C%20Ikoyi%2C%20Lagos%2C%20Nigeria!5e0!3m2!1sen!2s!4v1574096676497!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
  <!--End Map Section--> 
@endsection
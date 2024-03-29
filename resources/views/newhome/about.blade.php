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

    <div class="videos-wrapper video--one section-padding about-us-page">
      <div class="container">
        <div class="divider divider-simple text-left">
            <h2 class="m-bottom-20">Overview</h2>
        </div>
          <div class="row align-items-md-center">
              <div class="col-lg-5 col-md-6 margin-sm-60">
                  
                  <p style="text-transform:capitalize;">
                    RC 1373163 ZIRCON-LAUREL INVESTMENT LIMITED). ZCPI Africa platform has over the years, created a clientele base to facilitate its marketing activities. We have also developed a pre-qualification to determine prospects that would be a right fit for Joint venture partnership to execute Most of our capital Projects.In furtherance to these objectives, this platform has also leveraged on the data platform of some of its banking partners to harvest potential off-takers to its projects. As a matter of policy, ZCPI Africa will always work on the marketing end before embarking on any project to guarantee a successful exit.It will therefore be a great benefit for ZCPI Africa and other investors to work together to take advantage of this huge market.That is why we are offering you a special invitation to Join Zircon Capital Project Investment ( ZCPI) Africa investor team and start earning from its portfolio.<br><br>
                 

                   
                  </p>
                  
              </div>
              <div class="col-lg-6 col-md-6 offset-lg-1">
                  
  <div class="video-single">
      <figure>
          <div class="v_img">
              <img src="{{asset('asset/img/image.jpeg')}}" alt="" class="rounded">
          </div>
          <figcaption class="d-flex justify-content-center align-items-center shape-wrapper img-shape-two">
              <a href="https://www.youtube.com/watch?v=CvGsSKZjgbI&feature=youtu.be" class="video-iframe play-btn play-btn--lg play-btn--primary"><img src="{{asset('asset/img/svg/play-btn.svg')}}" alt="" class="svg"></a>
          </figcaption>
      </figure>
  </div><!-- ends: .video-single -->
  <br><br>
  <h3 class="m-bottom-20">OPERATIONAL STRUCTURE</h3>


  
  
  
 <span> GROUP MANAGING PARTNER </span> <br>
  <span>EXECUTIVE DIRECTOR </span><br>
 <span> SECRETARY</span><br>
  <span>SHAREHOLDERS </span><br>
  <span>PARTNERS </span><br>
 <span> MANUFACTURERS </span><br>
  <span>VENDORS </span><br>
 <span> CONSULTANTS</span>
              </div>
          </div>
      </div>
  </div><!-- ends: .videos-wrapper -->

  {{-- <section class="section-padding section-bg">
    <div class="container">
        <div class="row align-items-center">
           
            <div class="col-lg-5 margin-md-60">
                <h2>MISSION</h2>
                <p>Zircon-Laurel Investment Africa (ZCPI) seeks to create and provide investment products and services to our investors and deliver superior returns at the maturity period. In doing so an enhanced value is achieved for all our stakeholders by building, protecting and preserving their wealth.</p>
               
            </div><!-- ends: .col-lg-5 -->
            <div class="col-lg-6 offset-lg-1">
                <img src="{{asset('asset/img/about.jpeg')}}" alt="" class="rounded">
                </div><!-- ends: .col-lg-6 -->
           
        </div>
    </div>
</section><!-- ends: section --> --}}

<section class="content-block content--block3 section-padding section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 margin-md-60">
                <img src="{{asset('asset/img/aboutus.jpeg')}}" alt="">
            </div><!-- ends: .col-lg-5 -->
            <div class="col-lg-6 offset-lg-1">
                <h3>VISION</h3>
                <p> Guided by our values, we are committed to being the best investment Company by providing profitable services to our investors. </p>

               
                    <h3>MISSION</h3>
                    <p>Zircon-Laurel Investment Africa (ZCPI) seeks to create and provide investment products and services to our investors and deliver superior returns at the maturity period. In doing so an enhanced value is achieved for all our stakeholders by building, protecting and preserving their wealth.</p>
                   
                </div><!-- ends: .col-lg-5 -->
                <h4>CORE VALUES</h4>
                
                
                <div class="m-top-30">
                    <ul class="arrow--list2">
                        
<li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span>Devotion: we are highly devoted to the interest of our investors. Maximizing their wealth gives us ultimate joy</li>

                        
<li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span>Integrity: we are honest, transparent and committed to doing what is best for our investors and our Company. We openly collaborate in pursuit of the truth</li>

                        
<li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span> Build relationships/Deliver results: we connect with investors/partners to drive success.  Good relationships deliver success and we are all about delivering positive outcomes to our investors</li>

                        
<li class="list-item arrow-list5 d-flex align-content-center color-dark"><span><i class="la la-angle-right"></i></span>
    	Excellence: we make the extra effort, practice continuous improvement and stay flexible to adapt to changing circumstances.
    </li>

                    </ul>
                </div>
            </div><!-- ends: .col-lg-6 -->
            <div class="col-lg-12">
                <hr class="hr">
            </div>
            
        </div>
    </div>
</section><!-- ends:.content-block -->

    <script src="{{asset('asset/js/plugins.min.js')}}"></script>
    <script src="{{asset('asset/js/script.min.js')}}"></script>
@endsection
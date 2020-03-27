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
            <h2 class="m-bottom-20">Company Overview</h2>
        </div>
          <div class="row align-items-md-center">
              <div class="col-lg-5 col-md-6 margin-sm-60">
                  
                  <p style="text-transform:capitalize;">
                    OVER THE YEARS ZCPI AFRICA HAS CREATED A CLIENTELE BASE TO FACILITATE ITS MARKETING ACTIVITIES. WE HAVE ALSO DEVELOPED PRE-QUALIFICATION REQUIREMENTS TO EVALUATE PROSPECTIVE CLIENTS THAT WOULD RIGHTLY FIT FOR JOINT VENTURE INVESTMENTS TO EXECUTE MOST OF OUR CAPITAL PROJECTS. IN FURTHERANCE TO THE ABOVE, THIS PLATFORM IS FOR INVESTORS TO GET RETURNS AT THE COMPLETION OF THE COMPANY’S PROJECTS.
                    AS THE COMPANY’S POLICY, ZCPI AFRICA WILL ALWAYS WORK ON THE MARKETING PART BEFORE EMBARKING ON ANY PROJECT TO GURANTEE SUCCESS. THEREFORE, IT WILL BE A GREAT BENEFIT FOR INVESTORS TO WORK TOGETHER WITH ZCPI AFRICA AND TAKE ADVANTAGE OF THE HUGE FINANCIAL MARKET TO MAXIMIZE THEIR WEALTH.
                   WE ARE OFFERING INVITATIONS TO MEMBERS OF THE PUBLIC TO JOIN ZIRCON CAPITAL PROJECT INVESTMENT (ZCPI) AFRICA. INVEST AND START EARNING FROM 30% - 200% AS RETURN ON INVESTMENT(ROI) ON YOUR INVESTMENT. 
                   
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

              </div>
          </div>
      </div>
  </div><!-- ends: .videos-wrapper -->

  <section class="section-padding section-bg">
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
</section><!-- ends: section -->

<section class="content-block content--block3 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 margin-md-60">
                <img src="{{asset('asset/img/africa.jpg')}}" alt="">
            </div><!-- ends: .col-lg-5 -->
            <div class="col-lg-6 offset-lg-1">
                <h4>VISION</h4>
                <p> Guided by our values, we are committed to being the best investment Company by providing profitable services to our investors. </p>

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
            <div class="col-lg-6 margin-md-60">
                <h4>DURATION FOR RETURNS</h4>
                <p> Investors/Partners are given the opportunity to invest in any plan of their choice on our investment platform within a period of time. When they invest, returns are already calculated based on the units subscribed to and returns will be earned at the expiration of the duration of time agreed on by them.</p>
                
            </div><!-- ends: .col-lg-6 -->
            <div class="col-lg-5 offset-lg-1">
                <img src="{{asset('asset/img/earn.jpg')}}" alt="">
            </div><!-- ends: .col-lg-5 -->
            <div class="col-lg-12">
                <hr class="hr">
            </div>
            <div class="col-lg-5 margin-md-60">
            <img src="{{asset('asset/img/naira.jpg')}}" alt="">
            </div><!-- ends: .col-lg-5 -->
            <div class="col-lg-6 offset-lg-1">
                <h4>PARTNER AND SAVE MORE</h4>
                <p>We are business minded organization that creates opportunities  for clients/customers to partner with us and earn to maximize their wealth.</p>
               
            </div><!-- ends: .col-lg-6 -->
        </div>
    </div>
</section><!-- ends:.content-block -->

    <script src="{{asset('asset/js/plugins.min.js')}}"></script>
    <script src="{{asset('asset/js/script.min.js')}}"></script>
@endsection
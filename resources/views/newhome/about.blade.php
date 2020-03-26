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
                <p>Zircon-Laurel Capital Investment Africa(ZCPI) seeks to create and promote common ground for people to partner with us, rest after investing their capital and make withdrawal at the maturity period. We look for opportunity where we can dig in holes and share within our partners.</p>
               
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
                <h4>DEVOTED TO OUR CLIENT</h4>
                <p> Got formation Limited which was incorporated under the companies Act of 1990 with registration Number –RC 880753 registered 2010 and began operation fully is a subsidiary of Zircon Laurel Investment Limited. Ever since, we’ve been devoted to investment and partnership from prospect to client, bringing goodness into every sector we invest in and inviting millions of people to join us as we move. </p>
                
            </div><!-- ends: .col-lg-6 -->
            <div class="col-lg-12">
                <hr class="hr">
            </div>
            <div class="col-lg-6 margin-md-60">
                <h4>EARN AS BUSINESS PARTNERSHIP DURATION ENDS</h4>
                <p> We give space for client to partner with us within duration of time on our investment platform, each partner determine the sector they invest on base on duration, returns are already calculated for you base on the amount of unit(s) you selected, and you earn when the duration ends.</p>
                
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
                <p>We are business mindful organization that creates opportunity for client/customer to partner with us and earn to maximize wealth.</p>
                
            </div><!-- ends: .col-lg-6 -->
        </div>
    </div>
</section><!-- ends:.content-block -->

    <script src="{{asset('asset/js/plugins.min.js')}}"></script>
    <script src="{{asset('asset/js/script.min.js')}}"></script>
@endsection
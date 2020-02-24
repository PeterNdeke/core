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
          <div class="row align-items-md-center">
              <div class="col-lg-5 col-md-6 margin-sm-60">
                  
                  <p style="text-transform:capitalize;">
                      ZCPI AFRICA PLATFORM HAS OVER THE YEARS, CREATED A CLIENTELE BASE TO FACILITATE ITS MARKETING ACTIVITIES. WE HAVE ALSO DEVELOPED A PRE-QUALIFICATION TO DETERMINE PROSPECTS THAT WOULD BE A RIGHT FIT FOR JOINT VENTURE PARTNERSHIP TO EXECUTE MOST OF OUR CAPITAL PROJECTS. IN FURTHERANCE TO THESE OBJECTIVES, THIS PLATFORM HAS ALSO LEVERAGED ON THE DATA PLATFORM OF SOME OF ITS BANKING PARTNERS TO HARVEST POTENTIAL OFF-TAKERS TO ITS PROJECTS. AS A MATTER OF POLICY, ZCPI AFRICA WILL ALWAYS WORK ON THE MARKETING END BEFORE EMBARKING ON ANY PROJECT TO GUARANTEE A SUCCESSFUL EXIT.IT WILL THEREFORE BE A GREAT BENEFIT FOR ZCPI AFRICA AND OTHER INVESTORS TO WORK TOGETHER TO TAKE ADVANTAGE OF THIS HUGE MARKET.THAT IS WHY WE ARE OFFERING YOU A SPECIAL INVITATION TO JOIN ZIRCON CAPITAL PROJECT INVESTMENT ( ZCPI) AFRICA INVESTOR TEAM AND START EARNING FROM 28% - 200% ON YOUR INVESTMENTS.
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

  <section class="singl-testimonial shadow"><div class="container-fluid py-0"><div class="row align-items-center gradient gradient-54 color-1"><div class="col-md-4 mx-auto py-4 py-md-0"><p class="font-md bold mt-1 color-1">MISSION</p><hr class="my-4"><p class="lead color-1"> Zircon-Laurel Capital Investment Africa(ZCPI) seeks to create and promote common ground for people to partner with us, rest after investing their capital and make withdrawal at the maturity period. We look for opportunity where we can dig in holes and share within our partners.</p></div><div class="col-12 col-md-6 image-background cover" style="background-image: url(asset/img/about.jpeg);"></div></div></div></section>

  <!-- ./Top-notch appearance - Big screen left -->
  <section class="section bottom-right bg-1">
    <div class="container-wide bring-to-front">
        <div class="row gap-y align-items-center text-center text-lg-left">
            <div class="col-10 col-lg-5 mx-auto order-md-2">
                <h2>DEVOTED TO OUR CLIENT</h2>
                <p class="lead color-2">Got formation Limited which was incorporated under the companies Act of 1990 with registration Number –RC 880753 registered 2010 and began operation fully is a subsidiary of Zircon Laurel Investment Limited. Ever since, we’ve been devoted to investment and partnership from prospect  to client, bringing  goodness into every sector we invest in and inviting millions of people to join us as we move.</p></div>
            <div class="col-12 col-lg-6 order-md-1"><img src="asset/img/v2.png" alt="" class="img-responsive" style="max-width: 80%;" data-aos="fade-right">
            </div>
        </div>
    </div>
</section>

<section class="singl-testimonial shadow">
    <div class="container-fluid py-0">
        <div class="row align-items-center gradient gradient-54 color-1">
            <div class="col-md-5">
                <img src="asset/img/earn.jpg" alt="" class="img-responsive" style="max-width: 80%;" data-aos="fade-right">
            </div>
            <div class="col-md-6 mx-auto py-4 py-md-0">
                <h2>EARN AS BUSINESS PARTNERSHIP DURATION ENDS</h2>
                <hr class="my-4">
                <div class="bold mt-1 color-1">We give space for client to partner with us within duration of time on our investment platform, each partner determine the sector they invest on base on duration, returns are already calculated for you base on the amount of unit(s) you selected, and you earn when the duration ends.</div>
        </div>
    </div>
</section>

<section class="section bg-6">
    <div class="container-wide">
        <div class="row gap-y align-items-center text-center text-lg-left">
            <div class="col-10 col-lg-6 mx-auto">
                <h2>PARTNER AND SAVE MORE</h2>
                <p class="lead color-2">We are business mindful organization that creates opportunity for client/customer to partner with us and earn to maximize wealth</p></div>
            <div class="col-12 col-lg-5 pr-0"><img src="asset/img/save.jpg" alt="" class="img-responsive" style="max-width: 60%;" data-aos="fade-left"></div>
        </div>
    </div>
</section>

  <div class="hr-divider"></div>

    {{-- <!--about us page content start-->
    <section class="section-padding about-us-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $basic->about !!}
                </div>
            </div>
        </div>
    </section> --}}

    <script src="{{asset('asset/js/plugins.min.js')}}"></script>
    <script src="{{asset('asset/js/script.min.js')}}"></script>
@endsection
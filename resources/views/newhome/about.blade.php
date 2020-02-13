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
                  
                  <p style="text-transform:lowercase;">
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
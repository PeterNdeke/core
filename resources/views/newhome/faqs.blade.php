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
    <section class="sectionbg p-top-100 p-bottom-110">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="mb-5">
                      
  <div class="divider divider-simple text-center">
      <h3>FAQs</h3>
  </div>

                  </div>
              </div><!-- ends: .col-lg-12 -->
          </div>
      </div>

      
  <div class="accordion-styles accordion--one">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  
  <div class="accordion accordion_one" id="accordion_one">
    @foreach ($faqs as $item)
    <div class="accordion-single">
    <div class="accordion-heading" id="heading{{$item->id}}">
          <h6 class="mb-0">
          <a href="#" data-toggle="collapse" data-target="#collapse{{$item->id}}" aria-expanded="true"
          aria-controls="collapse{{$item->id}}">
                  {{$item->title}}
              </a>
          </h6>
      </div>

    <div id="collapse{{$item->id}}" class="collapse show" aria-labelledby="heading{{$item->id}}" data-parent="#accordion_one">
          <div class="accordion-contents">
          <p>{{$item->description}}</p>
          </div>
      </div><!-- Ends: .collapseOne -->
  </div><!-- Ends: .accordion-single -->

  
    @endforeach
    

     

    
  </div><!-- Ends: #accordion_one -->

              </div>
          </div>
      </div>
  </div><!-- Ends: accordion-styles -->

  </section><!-- ends: .section-padding -->
  <script src="{{asset('asset/js/plugins.min.js')}}"></script>
  <script src="{{asset('asset/js/script.min.js')}}"></script>
@endsection
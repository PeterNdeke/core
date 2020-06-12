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
             <h3>Job Opening</h3>

             <p>
               <b> JOB DESCRIPTION </b><br>
                Zircon-Laurel Investment Limited 
                Title: Sales and Marketing Personnel
                Reporting Line: Administrative and I.T Officer
                Job Role: Plan and conduct marketing and sales, to   
                grow volumes of the Company’s products and services to 
                the public. <br><br>
                
                <b>Key responsibilities:</b><br>

                <ol class="list-group">
                    <li class="list-group-item"> 1.	Build and manage a database of clients and prospects.</li>
                    <li class="list-group-item">  2.Reach out to 100 prospective clients daily and forward contacts to the I.T and Administrative Officers for follow-up.</li>
                    <li class="list-group-item"> 3.	Respond and follow up sales enquiries by email, telephone and social media.</li>
                    <li class="list-group-item"> 4.	Provide daily feedback  on activities and achievements in marketing and sales. </li>
                    <li class="list-group-item"> 5.	Attend staff meetings for performance review and knowledge sharing to aid business and  organizational development.</li>
                    <li class="list-group-item"> 6.	Attend trainings to develop relevant knowledge and skills to aid marketing activities.</li>
                  
                  </ol>
                

               
                
             </p>
              
            <p><b> Duration:</b><br>
             The employment would be on a contract basis to be reviewed after six months.</p>

             
            
            
             
                                                         
                            
            </div>
          </div>
        </div>
      </div>
    </div>
     <!--Contact Form Start-->
     <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="contact-form">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">

                                
                                <h2 class="title">Send Your Resume to Us</h2>
                                <br>
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
                                <br>
                                <form method="POST" action="{{url('post-carriers')}}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Full Name</label>
                                    <input type="text" class="form-control" value="{{old('fullname')}}" name="fullname" placeholder="Enter full name">
                                       
                                      </div>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" value="{{old('email')}}" aria-describedby="emailHelp" placeholder="Enter email">
                                     
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone Number</label>
                                      <input type="text" class="form-control" name="phone_number" value="{{old('phone_number')}}"  placeholder="Enter Phone number">
                                       
                                      </div>
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="ID_card" id="inputGroupFile01">
                                            <label class="custom-file-label"  for="inputGroupFile01">Upload ID Card</label>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input"  name="cv" id="inputGroupFile01">
                                            <label class="custom-file-label"  for="inputGroupFile01">Upload CV</label>
                                          </div>
                                      </div>
                                   
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--Contact Form end-->
  </section>
  <!--End Contact Section-->

    

  
   
@endsection
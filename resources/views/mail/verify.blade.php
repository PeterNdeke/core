<!doctype html><html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Laravel</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .img-centered {
            margin: 0 auto
        }

        .centered {
            text-align: center;
        }
        .margin {
            margin: 20px 0;
        }
        .line-rule {
            border-top: 8px solid #007cbc;
            border-bottom: 2px solid #14c4fd;
            height: 1px;
        }

        .color {
            color: #007cbc !important;
        }

        .italics {
            font-family: "Calibri Light"
        }

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <p class="centered margin"><img src="{{asset('assets/img/logo.png')}}" width="149" height="42" data-retina="true" alt=""></p>
            <div class="line-rule"></div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="color"><b>Email Verification Code</b></h3>
    <div class="margin"></div>
    <h4>Dear {{ $user->name }},</h4>
    <p><b>Thank you for registering with ZCPI AFRICA</b></p>
        <p>Your Email Verification code is <b>{{$user->email_code}}</b></p>
   
    
            <div class="margin"></div>
            <div class="margin"></div>
            <div class="margin"></div>
            <div class="margin"></div>
            <div class="margin"></div>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-sm-6 ">
            <p class="italics">
                    
            </p>
        </div>
    </div>
</div>

</body>
</html>

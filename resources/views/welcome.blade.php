<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <!-- Meta Tags
    ========================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content=" ">
    <meta name="author" content="Feidi">
    <meta name="contact" content="info@example.com">
    <meta name="contactNetworkAddress" CONTENT="abdo23970@gmail.com">
    <meta name="contactPhoneNumber" CONTENT="01092144285">

    <!-- Site Title
    ========================== -->
    <title>ماچدة</title>

    <!-- Favicon
    ===========================-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images') }}/fav.ico">

    <!-- Base & front-files
    ========================== -->
    <link rel="stylesheet" href="{{ asset('front-files') }}/bootstrap/css/bootstrap-ar.css">

    <!-- Site Style
    ========================== -->
    <link rel="stylesheet" href="{{ asset('css') }}/style.css">
    <link rel="stylesheet" href="{{ asset('css') }}/media.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<nav>
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <div class="brand my-2">
                <a href="#">
                    <img src="{{ asset('images') }}/Logo.png" alt="ماچدة" draggable="false">
                </a>
            </div> <!-- end brand -->
            <div class="sponsor">
                <div class="sponsor-by">
                    <p>ممول من</p>
                </div> <!-- end sponsor-by -->
                <div class="sponsors-logo">
                    <a href="#">
                        <img src="{{ asset('images') }}/sponsor.png" alt="sponsor" draggable="false">
                    </a>
                </div> <!-- end sponsor-logo -->
            </div> <!-- end sponsor -->
        </div> <!-- end d-flex -->
    </div>
</nav>

<section class="home d-flex justify-content-center align-items-center flex-column">
    <div class="container">
        <div class="add-job">
            {{--<a href="{{route('register','job')}}" class="d-flex justify-content-center align-items-center">--}}
            <a href="{{ route('register','job') }}" class="d-flex justify-content-center align-items-center">
                {{--<img src="{{ asset('images') }}/job.png" alt="icon" draggable="false">--}}
                <div class="job-container">
                    <img src="{{ asset('images') }}/job.png" alt="icon" draggable="false">
                    <img src="{{ asset('images') }}/job.png" alt="icon" draggable="false">
                </div>
                إضافة وظيفة
            </a>
        </div> <!-- end add-job -->

        <div class="content">
            <h1>سجل الآن</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 px-0">
                    <div class="box box1 d-flex justify-content-center align-items-center">
                        <div class="box-content">
                            <!-- here i a link to for this box -->
                            <a href="{{ route('register','training-provider')}}"></a>
                            <div class="img-container">
                                <img src="{{ asset('images') }}/icon1.png" alt="icon" draggable="false" class="first mb-5 d-block mx-auto">
                                <img src="{{ asset('images') }}/icon1.png" alt="icon" draggable="false" class="last mb-5 d-block mx-auto">
                            </div>
                            <p>جهات التدريب</p>
                        </div> <!-- end box-content -->
                    </div> <!-- end box -->
                </div> <!-- end col -->
                <div class="col-lg-3 col-md-6 px-0">
                    <div class="box box2 d-flex justify-content-center align-items-center active">
                        <div class="box-content">
                            <!-- here i a link to for this box -->
                            <a href="{{route('register','employee')}}"></a>
                            <div class="img-container">
                                <img src="{{ asset('images') }}/icon2.png" alt="icon" draggable="false" class="first mb-5 d-block mx-auto">
                                <img src="{{ asset('images') }}/icon2.png" alt="icon" draggable="false" class="last mb-5 d-block mx-auto">
                            </div>
                            <p>طالب العمل</p>
                        </div> <!-- end box-content -->
                    </div> <!-- end box -->
                </div> <!-- end col -->
                <div class="col-lg-3 col-md-6 px-0">
                    <div class="box box3 d-flex justify-content-center align-items-center">
                        <div class="box-content">
                            <!-- here i a link to for this box -->
                            <a href="{{route('register','employer')}}"></a>
                            <div class="img-container">
                                <img src="{{ asset('images') }}/icon3.png" alt="icon" draggable="false" class="first mb-5 d-block mx-auto">
                                <img src="{{ asset('images') }}/icon3.png" alt="icon" draggable="false" class="last mb-5 d-block mx-auto">
                            </div>
                            <p>صاحب العمل</p>
                        </div> <!-- end box-content -->
                    </div> <!-- end box -->
                </div> <!-- end col -->
                <div class="col-lg-3 col-md-6 px-0">
                    <div class="box box4 d-flex justify-content-center align-items-center">
                        <div class="box-content">
                            <!-- here i a link to for this box -->
                            <a href="{{route('register','donor')}}"></a>
                            <div class="img-container">
                                <img src="{{ asset('images') }}/icon4.png" alt="icon" draggable="false" class="first mb-5 d-block mx-auto">
                                <img src="{{ asset('images') }}/icon4.png" alt="icon" draggable="false" class="last mb-5 d-block mx-auto">
                            </div>
                            <p>الجهات المانحة</p>
                        </div> <!-- end box-content -->
                    </div> <!-- end box -->
                </div> <!-- end col -->
            </div> <!-- end row -->
            <p>أول منصة لتوصيل ذوي الإعاقة بفرص تدريب وتوظيف تناسب قدراتهم</p>
        </div> <!-- end content -->
    </div> <!-- end container -->
</section> <!-- end home -->
<!--Script files
========================== -->
<script src="{{ asset('front-files') }}/jquery/jquery.js"></script>
<script src="{{ asset('front-files') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="{{ asset('js') }}/main.js"></script>

<script type="text/javascript">
    var _userway_config = {
        /* uncomment the following line to override default position*/
        /* position: '3', */
        /* uncomment the following line to override default size (values: small, large)*/
        /* size: 'large', */
        /* uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)*/
        /* language: 'ar', */
        /* uncomment the following line to override color set via widget (e.g., #053f67)*/
        /* color: '#053f67', */
        /* uncomment the following line to override type set via widget(1=person, 2=chair, 3=eye)*/
        /* type: '2', */
        /* uncomment the following line to override support on mobile devices*/
        /* mobile: true, */
        account: 'MuAHeqp8E3'
    };
</script>
<script type="text/javascript" src="https://cdn.userway.org/widget.js"></script>

</body>
</html>

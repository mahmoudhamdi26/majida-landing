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
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images') }}/Logo.png" alt="ماچدة" draggable="false">
                </a>
            </div> <!-- end brand -->
            <div class="sponsor">
                <div class="sponsor-by">
                    <p>بالشراكة مع</p>
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

<section class="forms d-flex justify-content-center align-items-center flex-column">

    @yield('content')

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

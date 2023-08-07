<x-header></x-header>
<x-navbar></x-navbar>

<head>

    <link rel="stylesheet" href="assets/css/landingpage.css">

    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="asset/animate.min.css" rel="stylesheet">
    <link href="asset/owl.carousel.min.css" rel="stylesheet">
    <link href="asset/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    {{-- <link href="asset/css/style.css" rel="stylesheet"> --}}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
</head>
<style>
    .container1 {
        margin-top: 250px;
        transition: all 10s ease-in-out;
    }



    .titel1 {
        /* margin-top: 20px; */
    }
</style>
{{-- start section1 --}}
<div class="container">
    <div>

        <a href="contactUs"><img title="Do You Need Any Help ?" id="navbar" src="assets/img/Group 130.png"
                alt=""></a>
        <div class="fristSection">
            <div class="text">
                <h1>انضم إلينا الان </h1>
                <p>تعلم بأسلوب جديد وممتع مع منصتنا الالكترونية للتعليم عن بعد</p>
                <a href="trips"><button> ابدأ الان </button></a>
            </div>
            <img src="assets/img/561.jpg " alt="">
        </div>
    </div>
    {{-- end section1 --}}

    {{-- start section2 --}}

    <div class="container1">
        <div class="d-flex justify-content-end">
            <div class="w-100" style="transition: all 2s ease-in-out;">
                <!-- This is the content that will appear from the right side -->
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                    src="assets/img/561.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                    src="../assets/img/569.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                    src="../assets/img/569.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                    src="../assets/img/4905784.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="">
                            <h5 class="section-title ff-secondary text-start text-primary mr-2 "
                                class="animate__shakeY">
                                About Us</h5>
                            <h1 class="mt-5">اهلا بكم فى موقعنا الالكترونى</h1>
                            <p class="mb-5">مرحبا انتم هنا للتعلم </p>
                            <p class="mt-5">مش عايزين لعب عيال ي اولاد ال </p>
                        </div>
                        <div class="row g-4 mt-5">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">3
                                    </h1>
                                    <div class="ps-4">
                                        <h5 class="text-uppercase mt-2 mr-1">سنوات من</h5>
                                        <h5 class="mt-3"> الخبرة</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">6
                                    </h1>
                                    <div class="ps-4">
                                        <h5 class="text-uppercase mb-0"> لدينا</h5>
                                        <h5 class="mt-3">مدرسين</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-1 px-1 mt-5" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end section -->

    {{-- card_section --}}
    <section class="card_lesson">

        <div class="options">
            <div class="option active" style="--optionBackground:url('/assets/img/car1.jpg');">
                <div class="shadow"></div>
                <div class="label">
                    <div class="icon">
                        <i class="fas fa-walking"></i>
                    </div>
                    <div class="info">
                        <div class="main">احنا هنا من اجلك</div>
                        <div class="sub">لو شوفناك بتتمرقع هنقتلك</div>
                    </div>
                </div>
            </div>
            <div class="option"
                style="--optionBackground:url(/assets/img/3950.jpg);">
                <div class="shadow"></div>
                <div class="label">
                    <div class="icon">
                        <i class="fas fa-snowflake"></i>
                    </div>
                    <div class="info">
                        <div class="main">اسمع كلامنا</div>
                        <div class="sub">تنجح وتاخد على قفاك من المجتمع</div>
                    </div>
                </div>
            </div>
            <div class="option"
                style="--optionBackground:url(/assets/img/561.jpg);">
                <div class="shadow"></div>
                <div class="label">
                    <div class="icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <div class="info">
                        <div class="main">بس لو ماسمعتش الكلام</div>
                        <div class="sub">هتبقي ناجح اكتر وهيحترموك</div>
                    </div>
                </div>
            </div>
            <div class="option"
                style="--optionBackground:url(/assets/img/2064246.jpg);">
                <div class="shadow"></div>
                <div class="label">
                    <div class="icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <div class="info">
                        <div class="main">Idiefe</div>
                        <div class="sub">Omuke trughte a otufta</div>
                    </div>
                </div>
            </div>
            <div class="option"
                style="--optionBackground:url(/assets/img/5437683.jpg);">
                <div class="shadow"></div>
                <div class="label">
                    <div class="icon">
                        <i class="fas fa-sun"></i>
                    </div>
                    <div class="info">
                        <div class="main">Inatethi</div>
                        <div class="sub">Omuke trughte a otufta</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- section card ring --}}
    <div class="container2">
        <div class="panel">
            <div class="ring">
                <div class="card card1"></div>
                <div class="border">
                    <p class="title">Alex</p>
                    <div class="slide">
                        <h6 class="para">Latest Deals from Heathrow</h6>
                        <div class="line">
                            <h6 class="para">OUT</h6> <i class="fa fa-plane" aria-hidden="true"></i>
                            <h6 class="para">£849</h6>
                        </div>
                        <div class="line">
                            <h6 class="para">RTN</h6> <i class="fa fa-plane" aria-hidden="true"></i>
                            <h6 class="para">£659</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="ring">
                <div class="card card2"></div>
                <div class="border">
                    <p class="title">Aswan</p>
                    <div class="slide">
                        <h6 class="para">Latest Deals from Heathrow</h6>
                        <div class="line">
                            <h6 class="para">OUT</h6> <i class="fa fa-plane" aria-hidden="true"></i>
                            <h6 class="para">£999</h6>
                        </div>
                        <div class="line">
                            <h6 class="para">RTN</h6> <i class="fa fa-plane" aria-hidden="true"></i>
                            <h6 class="para">£745</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="ring">
                <div class="card card3"></div>
                <div class="border">
                    <p class="title">Egypt</p>
                    <div class="slide">
                        <h6 class="para">Latest Deals from Heathrow</h6>
                        <div class="line">
                            <h6 class="para">OUT</h6> <i class="fa fa-plane" aria-hidden="true"></i>
                            <h6 class="para">£399</h6>

                        </div>
                        <div class="line">
                            <h6 class="para">RTN</h6> <i class="fa fa-plane" aria-hidden="true"></i>
                            <h6 class="para">£257</h6>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        $(".option").click(function() {
            $(".option").removeClass("active");
            $(this).addClass("active");

        });
    </script>
</div>









<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<script>
    $(".option").click(function() {
        $(".option").removeClass("active");
        $(this).addClass("active");

    });
</script>
<x-footer></x-footer>

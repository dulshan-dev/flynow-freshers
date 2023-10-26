<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template" />
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template" />
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template" />
    <meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Admin Dashboard</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png" />
    {{-- <link href="./assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet"> --}}
    {{-- <link href="./assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="./assets/vendor/nouislider/nouislider.min.css"> --}}

    <!-- Style css -->
    {{-- <link href="./assets/css/style.css" rel="stylesheet"> --}}
    @vite('resources/js/app.js')


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <livewire:header />
        <livewire:sidebar />

        {{ $slot }}


        <livewire:footer />

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->

    <script src="./assets/vendor/global/global.min.js"></script>
    <script src="./assets/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <!-- Apex Chart -->
    <script src="./assets/vendor/apexchart/apexchart.js"></script>

    <script src="./assets/vendor/chart.js/Chart.bundle.min.js"></script>

    <!-- Chart piety plugin files -->
    <script src="./assets/vendor/peity/jquery.peity.min.js"></script>
    <!-- Dashboard 1 -->
    <script src="./assets/js/dashboard/dashboard-1.js"></script>

    <script src="./assets/vendor/owl-carousel/owl.carousel.js"></script>

    <script src="./assets/js/custom.js"></script>
    <script src="./assets/js/dlabnav-init.js"></script>


    <script>
        function cardsCenter() {

            /*  testimonial one function by = owl.carousel.js */



            jQuery('.card-slider').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                //center:true,
                slideSpeed: 3000,
                paginationSpeed: 3000,
                dots: true,
                navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 1
                    },
                    800: {
                        items: 1
                    },
                    991: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    },
                    1600: {
                        items: 1
                    }
                }
            })
        }

        jQuery(window).on('load', function() {
            setTimeout(function() {
                cardsCenter();
            }, 1000);
        });
    </script>

</body>

</html>

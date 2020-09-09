
<!DOCTYPE html>
<html lang="en" dir="rtl">


<!-- molla/index-4.html  22 Nov 2019 09:53:08 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>فروشگاه| @yield ('pageTitele')</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('Site/images/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('Site/images/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('Site/images/icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{url('Site/images/icons/site.html')}}">
    <link rel="mask-icon" href="{{url('Site/images/icons/safari-pinned-tab.svg')}}" color="#666666">
    <link rel="shortcut icon" href="{{url('Site/images/icons/favicon.ico')}}">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{url('Site/line-awesome.min.css')}}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{url('Site/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('Site/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{url('Site/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('Site/css/plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('Site/css/plugins/jquery.countdown.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{url('Site/css/style.css')}}">
    <link rel="stylesheet" href="{{url('Site/css/skins/skin-demo-4.css')}}">
    <link rel="stylesheet" href="{{url('Site//css/demos/demo-4.css')}}">
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-intro-clearance header-4">
            <div class="header-top">
             @include('Site.layout.header.header-top.header-top')
            </div><!-- End .header-top -->

            <div class="header-middle">
               @include('Site.layout.header.header-middle.header-middle')
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
            @include('Site.layout.header.header-bottam.header-bottam')
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->
           @include('Site.homePage.homePage')


           <main class="main">
              @yield('main-content')

            </main><!-- End .main -->

        <footer class="footer">
            <div class="footer-top cta bg-image bg-dark pt-4 pb-5 mb-0"
                style="background-image: url(assets/images/demos/demo-4/bg-5.jpg);">
                 @include('Site.layout.footer.footer-top.footer-top')
            </div><!-- End .cta -->
            <div class="footer-middle">
                 @include('Site.layout.footer.footer-middle.footer-middle')
            </div><!-- End .footer-middle -->

            <div class="footer-bottom">
                  @include('Site.layout.footer.footer-bottam.footer-bottam')
            </div>
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>
    @include('Site.layout.menu-mobile')

    @include('Site.layout.modals.modal')




    <!-- Plugins JS File -->
    <script src="{{url('Site/js/jquery.min.js')}}"></script>
    <script src="{{url('Site/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('Site/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{url('Site/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('Site/js/superfish.min.js')}}"></script>
    <script src="{{url('Site/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('Site/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{url('Site/js/jquery.plugin.min.js')}}"></script>
    <script src="{{url('Site/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('Site/js/jquery.countdown.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{url('Site/js/main.js')}}"></script>
    <script src="{{url('Site/js/demos/demo-4.js')}}"></script>
</body>

</html>

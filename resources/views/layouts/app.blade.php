<!DOCTYPE html>
<html>

<!-- Mirrored from preview.webpixels.io/boomerang-v3.2/html/e-commerce/home-deco/homepage-home-deco.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 11:27:21 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="robots" content="index, follow">
<meta name="description" content="Boomerang is a responsive website template based on the well known Bootstrap framework. It's very well structured with lots of features and demos ready to be used.">
<meta name="keywords" content="bootstrap, responsive, template, website, html, theme, ux, ui, web, design, developer, support, business, corporate, real estate, education, medical, school, education, demo, css, framework">
<meta name="author" content="Webpixels">

<title>Boomerang - Multipurpose Bootstrap Theme - Made by Webpixels</title>

<!-- Page loader -->
<script src="{{ asset('home/vendor/pace/js/pace.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('home/vendor/pace/css/pace-minimal.css') }}" type="text/css">

<!-- Bootstrap -->
<link rel="stylesheet" href="{{ asset('home/vendor/bootstrap/css/bootstrap.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('home/vendor/bootstrap-select/css/bootstrap-select.min.css') }}" type="text/css">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat|Open+Sans|Quicksand|Raleway|Roboto+Condensed|Rubik|Ubuntu|Vollkorn" rel="stylesheet">

<!-- Plugins -->
<link rel="stylesheet" href="{{ asset('home/vendor/swiper/css/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('home/vendor/hamburgers/hamburgers.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('home/vendor/animate/animate.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('home/vendor/lightgallery/css/lightgallery.min.css') }}">

<!-- Icons -->
<link rel="stylesheet" href="{{ asset('home/fonts/font-awesome/css/font-awesome.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('home/fonts/ionicons/css/ionicons.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('home/fonts/line-icons/line-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('home/fonts/line-icons-pro/line-icons-pro.css') }}" type="text/css">

<!-- Linea Icons -->
<link rel="stylesheet" href="{{ asset('home/fonts/linea/arrows/linea-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('home/fonts/linea/basic/linea-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('home/fonts/linea/ecommerce/linea-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('home/fonts/linea/software/linea-icons.css') }}" type="text/css">


<!-- Global style (main) -->
<link id="stylesheet" type="text/css" href="{{ asset('home/css/global-style.css') }}" rel="stylesheet" media="screen">

<!-- Custom style - Remove if not necessary -->
<link type="text/css" href="{{ asset('home/css/custom-style.css') }}" rel="stylesheet">

<!-- Favicon -->
<link href="{{ asset('home/images/favicon.png') }}" rel="icon" type="image/png">

<link type="text/css" href="{{ asset('home/css/style-switcher.css') }}" rel="stylesheet">

<!-- Revolution Slider -->
<link rel="stylesheet" href="{{ asset('home/vendor/revolution-slider/revolution/css/settings.css') }}">
<link rel="stylesheet" href="{{ asset('home/vendor/revolution-slider/revolution/css/layers.css') }}">
<link rel="stylesheet" href="{{ asset('home/vendor/revolution-slider/revolution/css/navigation.css') }}">

</head>
<body>


<!-- STYLE SWITCHER -->
<div id="theme_style_switcher" class="style-switcher-slidebar" data-settings='[{"theme_color": "#3f87f5", "theme_color_2": "#292f36", "theme_typeface_alt": "Lato, sans-serif", "theme_typeface_base": "Roboto, sans-serif"}]'>
    <a href="#" id="cmdShowStyleSwitcher" class="btn-aside open-panel hidden-xs z-depth-1-top" title="Open style switcher">
        <i class="ion-gear-b"></i>
    </a>
    <div class="switch-panel">
        <h3 class="heading heading-xs strong-600 text-uppercase b-xs-bottom">Boomerang - Style Switcher</h3>

        <div class="switch-panel-inner">
            <div class="panel-section mb-4">
                <div class="list-group">
                    <div class="list-group-item list-group-item-sm">
                        <div class="py-3">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="heading heading-sm strong-500 mb-2">
                                        Heading Typeface
                                    </h4>
                                    <select class="form-control" data-theme-switcher="theme-typeface-alt">
                                        <option value="Lato, sans-serif">Lato</option>
                                        <option value="Roboto, sans-serif">Roboto</option>
                                        <option value="'Abril Fatface', cursive">Abril Fatface</option>
                                        <option value="'Montserrat', sans-serif">Montserrat</option>
                                        <option value="'Open Sans', sans-serif">Open Sans</option>
                                        <option value="'Quicksand', sans-serif">Quicksand</option>
                                        <option value="'Raleway', sans-serif">Raleway</option>
                                        <option value="'Roboto Condensed', sans-serif">Roboto Condensed</option>
                                        <option value="'Rubik', sans-serif">Rubik</option>
                                        <option value="'Ubuntu', sans-serif">Ubuntu</option>
                                        <option value="'Vollkorn', serif">Vollkorn</option>
                                    </select>
                                </div>

                                <div class="col-6">
                                    <h4 class="heading heading-sm strong-500 mb-2">
                                        Text Typeface
                                    </h4>
                                    <select class="form-control" data-theme-switcher="theme-typeface-base">
                                        <option value="Lato, sans-serif">Lato</option>
                                        <option value="Roboto, sans-serif" selected>Roboto</option>
                                        <option value="'Abril Fatface', cursive">Abril Fatface</option>
                                        <option value="'Montserrat', sans-serif">Montserrat</option>
                                        <option value="'Open Sans', sans-serif">Open Sans</option>
                                        <option value="'Quicksand', sans-serif">Quicksand</option>
                                        <option value="'Raleway', sans-serif">Raleway</option>
                                        <option value="'Roboto Condensed', sans-serif">Roboto Condensed</option>
                                        <option value="'Rubik', sans-serif">Rubik</option>
                                        <option value="'Ubuntu', sans-serif">Ubuntu</option>
                                        <option value="'Vollkorn', serif">Vollkorn</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item list-group-item-sm">
                        <div class="color-switch py-3" data-theme-switcher="theme-color">
                            <h4 class="heading heading-sm strong-500 mb-2">
                                Theme Colors
                            </h4>
                            <a href="#" data-value="#3f87f5" title="Blueberry" style="background-color: #3f87f5;"></a>
                            <a href="#" data-value="#FFC43D" title="Sunglow" style="background-color: #FFC43D;"></a>
                            <a href="#" data-value="#F93943" title="Red Salsa" style="background-color: #F93943;"></a>
                            <a href="#" data-value="#416788" title="Queen Blue" style="background-color: #416788;"></a>
                            <a href="#" data-value="#E5446D" title="Paradise Pink" style="background-color: #E5446D;"></a>
                            <a href="#" data-value="#273E47" title="Japanese Indigo" style="background-color: #273E47;"></a>
                            <a href="#" data-value="#A4243B" title="Deep Carmine" style="background-color: #A4243B;"></a>
                            <a href="#" data-value="#FE5F55" title="Sunset Orange" style="background-color: #FE5F55;"></a>
                            <a href="#" data-value="#6B0F1A" title="Prune" style="background-color: #6B0F1A;"></a>
                            <a href="#" data-value="#F6CACA" title="Tea Rose" style="background-color: #F6CACA;"></a>
                            <a href="#" data-value="#0A014F" title="Oxford Blue" style="background-color: #0A014F;"></a>
                            <a href="#" data-value="#06D6A0" title="Carribean Green" style="background-color: #06D6A0;"></a>
                            <a href="#" data-value="#31081F" title="Dark Siena" style="background-color: #31081F;"></a>
                        </div>
                    </div>

                    <div class="list-group-item list-group-item-sm">
                        <div class="py-3" data-theme-switcher="navbar-style">
                            <h4 class="heading heading-sm strong-500 mb-2">
                                Navbar style
                            </h4>

                            <div class="d-table product-size product-size--style-1">
                                <div class="d-table-cell">
                                    <div class="pr-2">
                                        <input type="radio" id="navbar-style-0" name="navbar-style" value="0">
                                        <label for="navbar-style-0" class="text-normal">Default</label>
                                    </div>
                                </div>

                                <div class="d-table-cell">
                                    <div class="pr-2">
                                        <input type="radio" id="navbar-style-1" name="navbar-style" value="navbar--style-1">
                                        <label for="navbar-style-1" class="text-normal">Style 1</label>
                                    </div>
                                </div>

                                <div class="d-table-cell">
                                    <div class="">
                                        <input type="radio" id="navbar-style-2" name="navbar-style" value="navbar--style-2">
                                        <label for="navbar-style-2" class="text-normal">Style 2</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="color-switch py-3 d-none">
                            <h4 class="heading heading-sm strong-500 mb-2">
                                Navbar color
                            </h4>

                            <div class="d-table product-size product-size--style-1">
                                <div class="d-table-cell">
                                    <div class="pr-2">
                                        <input type="radio" id="amount-1" name="amount">
                                        <label for="amount-1" class="text-normal">Light</label>
                                    </div>
                                </div>

                                <div class="d-table-cell">
                                    <div class="pr-2">
                                        <input type="radio" id="amount-2" name="amount" checked="">
                                        <label for="amount-2" class="text-normal">Dark</label>
                                    </div>
                                </div>

                                <div class="d-table-cell">
                                    <div class="pr-2">
                                        <input type="radio" id="amount-2" name="amount" checked="">
                                        <label for="amount-2" class="text-normal">Primary</label>
                                    </div>
                                </div>

                                <div class="d-table-cell">
                                    <div class="pr-2">
                                        <input type="radio" id="amount-2" name="amount" checked="">
                                        <label for="amount-2" class="text-normal">Gradient</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="py-3" data-theme-switcher="navbar-delimiter">
                            <h4 class="heading heading-sm strong-500 mb-2">
                                Navbar delimiter
                            </h4>

                            <div class="d-table product-size product-size--style-1">
                                <div class="d-table-cell">
                                    <div class="pr-2">
                                        <input type="radio" id="navbar-delimiter-0" name="navbar-delimiter" value="0">
                                        <label for="navbar-delimiter-0" class="text-normal">Default</label>
                                    </div>
                                </div>

                                <div class="d-table-cell">
                                    <div class="pr-2">
                                        <input type="radio" id="navbar-delimiter-1" name="navbar-delimiter" value="navbar--shadow">
                                        <label for="navbar-delimiter-1" class="text-normal">Shadow</label>
                                    </div>
                                </div>

                                <div class="d-table-cell">
                                    <div class="pr-2">
                                        <input type="radio" id="navbar-delimiter-2" name="navbar-delimiter" value="navbar--bb-1px">
                                        <label for="navbar-delimiter-2" class="text-normal">Border</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="py-3" data-theme-switcher="navbar-link-weight">
                            <h4 class="heading heading-sm strong-500 mb-2">
                                Navbar link weight
                            </h4>

                            <div class="d-table product-size product-size--style-1">
                                <div class="d-table-cell">
                                    <div class="pr-2">
                                        <input type="radio" id="navbar-link-weight-1" name="navbar-link-weight" value="0">
                                        <label for="navbar-link-weight-1" class="text-normal">Normal</label>
                                    </div>
                                </div>

                                <div class="d-table-cell">
                                    <div class="pr-2">
                                        <input type="radio" id="navbar-link-weight-2" name="navbar-link-weight" value="navbar--bold">
                                        <label for="navbar-link-weight-2" class="text-normal">Strong</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="py-3" data-theme-switcher="navbar-link-style">
                            <h4 class="heading heading-sm strong-500 mb-2">
                                Navbar links style
                            </h4>

                            <div class="d-table product-size product-size--style-1">
                                <div class="d-table-cell">
                                    <div class="pr-2">
                                        <input type="radio" id="navbar-link-style-1" name="navbar-link-style" value="0">
                                        <label for="navbar-link-style-1" class="text-normal">Lowercase</label>
                                    </div>
                                </div>

                                <div class="d-table-cell">
                                    <div class="pr-2">
                                        <input type="radio" id="navbar-link-style-2" name="navbar-link-style" value="navbar--uppercase">
                                        <label for="navbar-link-style-2" class="text-normal">Uppercase</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="py-3" data-theme-switcher="navbar-dropdown-color">
                            <h4 class="heading heading-sm strong-500 mb-2">
                                Navbar dropdown
                            </h4>

                            <div class="d-table product-size product-size--style-1">
                                <div class="d-table-cell">
                                    <div class="pr-2">
                                        <input type="radio" id="navbar-dropdown-color-1" name="navbar-dropdown-color" value="0">
                                        <label for="navbar-dropdown-color-1" class="text-normal">Default (light)</label>
                                    </div>
                                </div>

                                <div class="d-table-cell">
                                    <div class="pr-2">
                                        <input type="radio" id="navbar-dropdown-color-2" name="navbar-dropdown-color" value="navbar-dropdown--inverse">
                                        <label for="navbar-dropdown-color-2" class="text-normal">Inverse (dark)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item list-group-item-sm">
                        <div class="py-3" data-theme-switcher="layout-type">
                            <h4 class="heading heading-sm strong-500 mb-2">
                                Layout type
                            </h4>

                            <div class="d-table product-size product-size--style-1">
                                <div class="d-table-cell">
                                    <div class="pr-2">
                                        <input type="radio" id="layout-type-1" name="layout-type" value="0">
                                        <label for="layout-type-1" class="text-normal">Fluid</label>
                                    </div>
                                </div>

                                <div class="d-table-cell">
                                    <div class="pr-2">
                                        <input type="radio" id="layout-type-2" name="layout-type" value="body-boxed">
                                        <label for="layout-type-2" class="text-normal">Boxed</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-group-item list-group-item-sm">
                        <h4 class="heading heading-sm strong-500 mb-2">
                            Body backgrounds for boxed layouts
                        </h4>
                        <div id="body_background" class="color-switch py-3">
                            <a href="#" data-value="body-bg-1" class="body-bg-1" title="Solid color"></a>
                            <a href="#" data-value="body-bg-2" class="body-bg-2" title="Black Lozenge"></a>
                            <a href="#" data-value="body-bg-3" class="body-bg-3" title="Squairy Light"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="">
            <a id="btnResetStyles" href="#">
                <span class="reset-style-switcher">
                    <i class="ion-close-circled"></i>
                    Reset all applied styles
                </span>
            </a>
        </h3>
    </div>
</div>


<!-- MAIN WRAPPER -->
<div class="body-wrap">
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">

        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')


                </div>
            </div>
        </div><!-- END: st-pusher -->
    </div><!-- END: st-container -->
</div><!-- END: body-wrap -->

<!-- SCRIPTS -->
<a href="#" class="back-to-top btn-back-to-top"></a>

<!-- Core -->
<script src="{{ asset('home/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('home/vendor/popper/popper.min.js') }}"></script>
<script src="{{ asset('home/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('home/js/vendor/jquery.easing.js') }}"></script>
<script src="{{ asset('home/js/ie10-viewport-bug-workaround.js') }}"></script>
<script src="{{ asset('home/js/slidebar/slidebar.js') }}"></script>
<script src="{{ asset('home/js/classie.js') }}"></script>

<!-- Bootstrap Extensions -->
<script src="{{ asset('home/vendor/bootstrap-dropdown-hover/js/bootstrap-dropdown-hover.js') }}"></script>
<script src="{{ asset('home/vendor/bootstrap-notify/bootstrap-growl.min.js') }}"></script>
<script src="{{ asset('home/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('home/vendor/scrollpos-styler/scrollpos-styler.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('home/vendor/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('home/vendor/input-mask/input-mask.min.js') }}"></script>
<script src="{{ asset('home/vendor/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('home/vendor/footer-reveal/footer-reveal.min.js') }}"></script>
<script src="{{ asset('home/vendor/sticky-kit/sticky-kit.min.js') }}"></script>
<script src="{{ asset('home/vendor/swiper/js/swiper.min.js') }}"></script>
<script src="{{ asset('home/vendor/paraxify/paraxify.min.js') }}"></script>
<script src="{{ asset('home/vendor/viewport-checker/viewportchecker.min.js') }}"></script>
<script src="{{ asset('home/vendor/wow/wow.min.js') }}"></script>
<script src="{{ asset('home/vendor/milestone-counter/jquery.countTo.js') }}"></script>
<script src="{{ asset('home/vendor/countdown/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('home/vendor/typed/typed.min.js') }}"></script>
<script src="{{ asset('home/vendor/instafeed/instafeed.js') }}"></script>
<script src="{{ asset('home/vendor/gradientify/jquery.gradientify.min.js') }}"></script>
<script src="{{ asset('home/vendor/nouislider/js/nouislider.min.js') }}"></script>
<script src="{{ asset('home/vendor/flip/flip.min.js') }}"></script>
<script src="{{ asset('home/vendor/adaptive-backgrounds/adaptive-backgrounds.js') }}"></script>

<!-- Isotope -->
<script src="{{ asset('home/vendor/isotope/isotope.min.js') }}"></script>
<script src="{{ asset('home/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>

<!-- Light Gallery -->
<script src="{{ asset('home/vendor/lightgallery/js/lightgallery.min.js') }}"></script>
<script src="{{ asset('home/vendor/lightgallery/js/lg-thumbnail.min.js') }}"></script>
<script src="{{ asset('home/vendor/lightgallery/js/lg-video.js') }}"></script>

<script type="text/javascript" src="{{ asset('home/js/wpx.ga.js') }}"></script>

<!-- Style and Demo switcher -->
<script type="text/javascript" src="{{ asset('home/js/vendor/js-cookie.js') }}"></script>
<script>
less = {
    env: 'development'
};
</script>
<script type="text/javascript" src="{{ asset('home/js/vendor/less.js') }}"></script>
<script type="text/javascript" src="{{ asset('home/js/wpx.switcher.js') }}"></script>


<!-- JS Revolution Slider -->
<script src="{{ asset('home/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('home/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('home/js/revolution/revolution-slider-shop-home-deco.js') }}"></script>

<script src="{{ asset('home/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('home/vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('home/vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('home/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('home/vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('home/vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('home/vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('home/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('home/vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

<!-- App JS -->
<script src="{{ asset('home/js/wpx.app.js') }}"></script>
<script src="{{ asset('home/vendor/deso-slide/js/jquery.desoslide.min.js') }}"></script>
@yield('script')
</body>

<!-- Mirrored from preview.webpixels.io/boomerang-v3.2/html/e-commerce/home-deco/homepage-home-deco.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 11:27:31 GMT -->
</html>

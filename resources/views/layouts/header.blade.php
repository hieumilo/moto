<!-- Header -->
                    <div class="header">
    <!-- Top Bar -->
    <div class="top-navbar">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <span class="aux-text d-none d-md-inline-block">
                    <ul class="inline-links inline-links--style-1">
                        <li class="d-none d-lg-inline-block">
                            Khóa luận - Đặng Văn Quân
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="#">admin@gmail.com</a>
                        </li>
                    </ul>
                </span>
            </div>

            <div class="col-md-6">
                <nav class="top-navbar-menu">
                    <ul class="top-menu">
                        <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                        <li><a href="#" data-toggle="global-search"><i class="fa fa-search"></i></a></li>
                        <li class="aux-languages dropdown">
                            <a href="#">
                                <img src="assets/images/icons/flags/ro.png">
                            </a>
                            <ul id="auxLanguages" class="sub-menu">
                                <li>
                                    <a href="#"><span class="language">German</span></a>
                                </li>
                                <li>
                                    <span class="language language-active">English</span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
    <!-- Global Search -->
    <section id="sctGlobalSearch" class="global-search global-search-overlay">
    <div class="container">
        <div class="global-search-backdrop mask-dark--style-2"></div>

        <!-- Search form -->
        <form class="form-horizontal form-global-search z-depth-2-top" action="{{ route('home.search') }}" role="form" method="GET">
            <div class="px-4">
                <div class="row">
                    <div class="col-12">
                        <input type="text" class="search-input" name="s" placeholder="Nhập tên xe ...">
                    </div>
                </div>
            </div>
            <a href="#" class="close-search" data-toggle="global-search" title="Close search bar"></a>
        </form>
    </div>
</section>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-default navbar--link-arrow navbar--bb-1px navbar--uppercase navbar-dropdown--inverse navbar--bold">
        <div class="container navbar-container">
            <!-- Brand/Logo -->
            <a class="navbar-brand" href="/">
                <img src="{{ asset('home/images/logo/logo-2-b.png') }}" alt="Moto">
            </a>
            
            <div class="d-inline-block">
                <!-- Navbar toggler  -->
                <button class="navbar-toggler hamburger hamburger-js hamburger--spring" type="button" data-toggle="collapse" data-target="#navbar_main" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>

            <div class="collapse navbar-collapse align-items-center justify-content-center" id="navbar_main">
    <!-- Navbar search - For small resolutions -->
    <div class="navbar-search-widget b-xs-bottom py-3 d-lg-none d-xl-none">
        <form class="" role="form">
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                <button class="btn btn-base-3" type="button">Go!</button>
                </span>
            </div>
        </form>
    </div>

    <!-- Navbar links -->
    <ul class="navbar-nav" data-hover="dropdown">
        <li class="nav-item">
            <a class="nav-link" href="/">Trang chủ</a>
        </li>
        <li class="nav-item dropdown dropdown-bottom">
            <a href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Loại xe
            </a>

            <ul class="dropdown-menu dropdownhover-bottom">
                @foreach (app('App\Http\Controllers\HomeController')->getCategory() as $category)
                    <li>
                        <a href="{{ route('home.list', $category->slug) }}" class="dropdown-item">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Đại lý</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home.contact.index') }}">Liên hệ</a>
        </li>
        
    </ul>


</div>


        </div>
    </nav>
</div>

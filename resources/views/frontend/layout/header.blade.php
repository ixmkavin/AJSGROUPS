<header class="main-header header-style-two" id="home">

    <div class="header-top">
        <div class="inner-container">
            <div class="top-left">

                <ul class="list-style-one">
                    <li><i class="fa fa-envelope"></i> <a href="mailto:admin@ajsgroups.com">admin@ajsgroups.com</a></li>

                    <li><i class="fa fa-map-marker"></i> Kurumbapalayam, Vedapatti, Coimbatore - 641007.</li>
                </ul>
            </div>

        </div>
        <div class="outer-box">
                <ul class="social-icon-one">
                    <li>
                        <a href="https://x.com/AJSGroups" rel="nofollow" target="_blank">
                            <i class="fab fa-twitter"></i>
                            <span class="sr-only">Stay connected on Twitter</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/ajsadz23?mibextid=ZbWKwL" rel="nofollow" target="_blank">
                            <i class="fab fa-facebook-square"></i>
                            <span class="sr-only">Stay connected on Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/ajsadz23?igsh=dmhqeHd1YXlzaWty" rel="nofollow" target="_blank">
                            <i class="fab fa-instagram"></i>
                            <span class="sr-only">Stay connected on Instagram</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/ajsadz23/" rel="nofollow" target="_blank">
                            <i class="fab fa-linkedin"></i>
                            <span class="sr-only">Stay connected on LinkedIn</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://youtube.com/@ajsadz23?si=ubJdiyVg7SqvgAkj" rel="nofollow" target="_blank">
                            <i class="fab fa-youtube"></i>
                            <span class="sr-only">Stay connected on YouTube</span>
                        </a>
                    </li>
                </ul>
        </div>
    </div>



    <div class="header-lower">

        <div class="main-box">
            <div class="logo-box">
                <div class="logo">
                    <a href="{{ route('/') }}">
                        <img src="{{ asset('frontend/assets/images/Logo/AJSGroups.png') }}" alt="AJS Groups Logo" title="AJS Business And IT Solutions">
                    </a>
                </div>

            </div>

            <div class="nav-outer">
                <nav class="nav main-menu">
                    <ul class="navigation">
                        <li class="{{ Request::is('/') ? 'current' : '' }}">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="{{ Request::is('about') ? 'current' : '' }}">
                            <a href="{{ url('/about') }}">About Us</a>
                        </li>

                        <li class="dropdown {{ Request::is('services/*') ? 'current' : '' }}">
                            <a>Services</a>
                            @php
                                $services = [
                                    'Flex Printing' => 'Flex Printing',
                                    'LED Signage' => 'LED Signage',
                                    '3D Acrylic Letter Sign Board' => '3D Acrylic Letter Sign Board',
                                    'Hoarding Unipole' => 'Hoarding Unipole',
                                    'Glow Sign Board' => 'Glow Sign Board',
                                    'Vinyl Printing' => 'Vinyl Printing',
                                    'LED Crystal Signage' => 'LED Crystal Signage',
                                    'ACP CLADDING WORK' => 'ACP CLADDING WORK',
                                    '3D Steel Letter Sign Board' => '3D Steel Letter Sign Board',
                                    'Acrylic Display' => 'Acrylic Display',
                                    'Directional Sign Board' => 'Directional Sign Board',
                                    'Canopy And Standee' => 'Canopy And Standee',
                                    'Reception And Office Signage' => 'Reception And Office Signage',
                                    'UV LED Printing' => 'UV LED Printing',
                                    '3D Brass Letter Sign Board' => '3D Brass Letter Sign Board',
                                    'ACP SignBoard' => 'ACP SignBoard',
                                    'Frosted Vinyl' => 'Frosted Vinyl',
                                    'Corporate Gifts' => 'Corporate Gifts',
                                    'Rollup Standees' => 'Rollup Standees',
                                    'Commercial Signage' => 'Commercial Signage',
                                    'Flanges And Lollipop' => 'Flanges|lollipop',
                                    'Indoor Graphics' => 'Indoor Graphics',
                                    'Outdoor Graphic' => 'Outdoor Graphic',
                                    'TrimCap' => 'TrimCap',
                                    'Fire Safety Signage' => 'Fire Safety Signage',
                                ];
                            @endphp

                            <ul>
                                @foreach ($services as $key => $value)
                                    <li class="{{ request()->is('services/' . str_replace(' ', '-', $key)) ? 'current' : '' }}">
                                        <a href="{{ route('services.show', str_replace(' ', '-', $key)) }}">
                                            {{ $value }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="{{ Request::is('contact') ? 'current' : '' }}">
                            <a href="{{ url('/contact') }}">Contact</a>
                        </li>
                    </ul>
                </nav>

                <div class="outer-box">
                    <div class="ui-btn-outer">
                        <button class="ui-btn ui-btn search-btn">
                            <span class="icon fa fa-search"></span>
                        </button>
                    </div>
                    <a class="info-btn" href="tel:+919944200793">
                        <i class="icon fa fa-phone"></i>
                        <small>Call Our Team</small><br>+91 9944200793
                    </a>
                    <a href="{{ url('/contact') }}" class="theme-btn btn-style-one">
                        <span class="btn-title">Get Solution</span>
                    </a>
                    <div class="mobile-nav-toggler">
                        <span class="icon fa fa-bars"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <nav class="menu-box">
            <div class="upper-box">
                <div class="logo">
                    <a href="{{ route('/') }}">
                        <img src="{{ asset('frontend/assets/images/Logo/AJSGroups_mobile.png') }}" alt="AJS Groups" 
                            title="AJS Groups">
                    </a>
                </div>
                <div class="close-btn">
                    <i class="icon fa fa-times"></i>
                </div>
            </div>
            <ul class="navigation clearfix"></ul>
        </nav>
    </div>

    <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>
        <div class="search-inner">
            <form method="post" action="">
                <div class="form-group">
                    <input type="search" name="search-field" value placeholder="Search..." required>
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>


    <div class="sticky-header">
        <div class="header-lower">

            <div class="main-box">
                <div class="logo-box">
                    <div class="logo"><a href="{{ route('/') }}"><img src="{{ asset('frontend/assets/images/Logo/AJSGroups.png') }}" alt="AJS Groups" title="AJS Groups"></a>
                    </div>
                </div>

                <div class="nav-outer">
                    <nav class="nav main-menu">
                        <ul class="navigation">

                        </ul>
                    </nav>

                    <div class="outer-box">
                        <div class="ui-btn-outer">
                            <button class="ui-btn ui-btn search-btn">
                                <span class="icon fa fa-search"></span>
                            </button>

                        </div>
                        <a href="tel:+917845491330" class="info-btn">
                            <i class="icon fa fa-phone"></i>
                            <small>Contact Us by Phone</small><br> +91 7845491330
                        </a>
                        <a href="{{ route('contact') }}" class="theme-btn btn-style-one"><span class="btn-title">get
                                Solutions</span></a>

                        <div class="mobile-nav-toggler"><span class="icon fa fa-bars"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

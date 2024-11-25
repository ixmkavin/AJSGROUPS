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
                    <a href="https://twitter.com/AJSGroups" target="_blank">
                      <span class="fab fa-twitter"></span>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/ajsadz23?mibextid=ZbWKwL" target="_blank">
                      <span class="fab fa-facebook-square"></span>
                    </a>
                  </li>
                  <li>
                    <a href="https://in.pinterest.com/AJSGroups22/" target="_blank">
                      <span class="fab fa-pinterest-p"></span>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/ajsadz23?igsh=dmhqeHd1YXlzaWty" target="_blank">
                      <span class="fab fa-instagram"></span>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/company/ajsadz23/" target="_blank">
                      <span class="fab fa-linkedin"></span>
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
                        <img src="{{ asset('frontend/assets/images/Logo/AJSGroups.png') }}" alt="AJS Groups Logo"
                            title="AJS Business And IT Solutions">
                    </a>
                </div>

            </div>

            <div class="nav-outer">
                <nav class="nav main-menu">
                    <ul class="navigation">
                        <li class="{{ Request::is('/') ? 'current' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                        <li class="{{ Request::is('about') ? 'current' : '' }}"><a href="{{ url('/about') }}">About
                                Us</a></li>

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
                                    <li
                                        class="{{ request()->is('services/' . str_replace(' ', '-', $key)) ? 'current' : '' }}">
                                        <a
                                            href="{{ route('services.show', str_replace(' ', '-', $key)) }}">{{ $value }}</a>
                                    </li>
                                @endforeach
                            </ul>


                        </li>


                        {{-- <li class="{{ Request::is('portfolio') ? 'current' : '' }}"><a
                                href="{{ url('/portfolio') }}">Gallery</a></li>
                        <li class="{{ Request::is('blog') ? 'current' : '' }}"><a href="{{ url('/blog') }}">Blog</a>
                        </li>  --}}

                        <li class="{{ Request::is('contact') ? 'current' : '' }}"><a
                                href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </nav>

                <div class="outer-box">
                    <div class="ui-btn-outer">
                        <button class="ui-btn ui-btn search-btn">
                            <span class="icon fa fa-search"></span>
                        </button>

                    </div>
                    <a href="tel:9944200793" class="info-btn">
                        <i class="icon fa fa-phone"></i>
                        <small>Call Our Team</small><br> +91 9944200793
                    </a>
                    <a href="{{ url('/contact') }}" class="theme-btn btn-style-one"><span class="btn-title">get
                            solution</span></a>

                    <div class="mobile-nav-toggler"><span class="icon fa fa-bars"></span></div>
                </div>
            </div>
        </div>
    </div>


    <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <nav class="menu-box">
            <div class="upper-box">
                <div class="logo"><a href="{{ route('/') }}"><img
                            src="{{ asset('frontend/assets/images/Logo/AJSGroups_mobile.png') }}" alt="AJS Groups"
                            title="AJS Groups"></a>
                </div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>
            <ul class="navigation clearfix">

            </ul>
            <ul class="contact-list-one">
                <li>

                    <div class="contact-info-box">
                        <i class="icon fa fa-phone"></i>
                        <span class="title">Call US Now</span>
                        <a href="tel:+92880098670">+91 9944200793</a>
                    </div>
                </li>
                <li>

                    <div class="contact-info-box">
                        <span class="icon fa fa-envelope"></span>
                        <span class="title">Reach Out via Email</span>
                        <a href="mailto:admin@ajsgroups.com">admin@ajsgroups.com</a>
                    </div>
                </li>
                <li>

                    <div class="contact-info-box">
                        <span class="icon fa fa-clock"></span>
                        <span class="title">Email US</span>
                        Mon - Sat 10:00 AM - 8:00 PM, Sunday - CLOSED
                    </div>
                </li>
            </ul>
            <ul class="social-links">
                <li><a href="https://twitter.com/AJSGroups"><span class="fab fa-twitter"></span></a>
                </li>
                <li><a href="https://www.facebook.com/ajsadz23?mibextid=ZbWKwL"><span
                            class="fab fa-facebook-square"></span></a></li>

                <li><a href="https://www.instagram.com/ajsadz23?igsh=dmhqeHd1YXlzaWty"><span
                            class="fab fa-instagram"></span></a></li>
                <li><a href="https://www.linkedin.com/company/ajsadz23/"><span class="fab fa-linkedin"></span></a></li>

            </ul>
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
                    <div class="logo"><a href="{{ route('/') }}"><img
                                src="{{ asset('frontend/assets/images/Logo/AJSGroups.png') }}" alt="AJS Groups"
                                title="AJS Groups"></a>
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

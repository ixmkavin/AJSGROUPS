<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'AJS Groups| Business And IT Solution')</title>
    <meta name="description" content="@yield('meta_description', 'Default description here')">
    <meta name="keywords" content="@yield('meta_keywords', 'Default keywords here')">
    <!-- Style Tags -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style-color-red.css') }}">
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/AJS_Logo.svg') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend/assets/images/AJS_Logo.svg') }}" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>
    <section class>
        <div class="auto-container pt-120 pb-70">
            <div class="row">
                <div class="col-xl-12">
                    <div class="error-page__inner">
                        <div class="error-page__title-box">
                            <img src="{{ asset('frontend/assets/images/resource/404.jpg') }}" alt="404 Page">
                            <h3 class="error-page__sub-title">Page not found!</h3>
                        </div>
                        <p class="error-page__text">Sorry we can't find that page! The page you are looking <br> for
                            was never existed.</p>
                        {{-- <form class="error-page__form">
                            <div class="error-page__form-input">
                            <input type="search" placeholder="Search here">
                            <button type="submit"><i class="lnr lnr-icon-magnifier"></i></button>
                            </div>
                            </form> --}}
                        <a href="{{ route('/') }}" class="theme-btn btn-style-one shop-now"><span class="btn-title">Back to
                                Home</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

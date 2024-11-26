<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="google" content="nositelinkssearchbox">
  <meta name="robots" content="index, follow">
  <meta name="author" content="AJS Groups">
  <meta name="application-name" content="AJS Groups">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>@yield('title', 'AJS Groups | Business And IT Solution')</title>
  <meta name="description" content="@yield('meta_description', 'India’s top flex printing, banners & signs provider. High-quality visual solutions for businesses, events & advertising. Reliable, timely delivery at AJSGroups.')">
  <meta name="keywords" content="@yield('meta_keywords', 'flex printing Company, signage solutions, business branding')">

  <meta property="og:title" content="@yield('og_title', 'AJS Groups | Business And IT Solution')">
  <meta property="og:description" content="@yield('og_description', 'India’s top flex printing, banners & signs provider. High-quality visual solutions for businesses, events & advertising. Reliable, timely delivery at AJSGroups.')">
  <meta property="og:image" content="@yield('og_image', asset('frontend/assets/images/resource/twittercard.jpg'))">
  <meta property="og:image:alt" content="AJS Groups | Business And IT Solution ">
  <meta property="og:url" content="{{ request()->getSchemeAndHttpHost() }}{{ request()->getRequestUri() }}">
  <meta property="og:type" content="@yield('og_type', 'website')">
  <meta property="og:site_name" content="AJS Groups | Business And IT Solution">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@your_twitter_handle">
  <meta name="twitter:title" content="@yield('twitter_title', 'AJS Groups | Business And IT Solution')">
  <meta name="twitter:description" content="@yield('twitter_description', 'India’s top flex printing, banners & signs provider.')">
  <meta name="twitter:image" content="@yield('twitter_image', asset('frontend/assets/images/resource/twittercard.jpg'))">

  <link rel="canonical" href="{{ request()->getSchemeAndHttpHost() }}{{ request()->getRequestUri() }}">
  <link rel="alternate" hreflang="en-in" href="{{ url('/') }}" />

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "AJS Groups",
    "url": "https://www.ajsgroups.com/",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "https://www.ajsgroups.com/{search_term_string}",
      "query-input": "required name=search_term_string"
    }
  }
  </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/plugins/revolution/css/settings.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/assets/plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/assets/plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet">


    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/Logo/AJS_Logo.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend/assets/images/Logo/AJS_Logo.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('frontend/assets/images/Logo/apple-touch-icon.png') }}">
    <link rel="icon" sizes="192x192" href="{{ asset('frontend/assets/images/Logo/manifest-192x192.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/images/Logo/favicon-96x96.png') }}">
    <link rel="manifest" href="{{ asset('frontend/assets/images/Logo/web-app-manifest.png') }}">
    <link rel="icon" type="image/svg+xml" href="frontend/assets/images/Logo/favicon.svg" />




</head>

<body>
    <div class="page-wrapper">
        @include('frontend.layout.header')
        @yield('body')
        @include('frontend.layout.footer')
    </div>


    <script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main-slider-script.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/appear.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/mixitup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bxslider.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
</body>

</html>

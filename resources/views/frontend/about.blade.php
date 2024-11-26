@extends('frontend.layout.frontend-master')

@php
    $baseTitle = 'About Us - AJS  | Leading Printing & Branding company in India';
    $baseDescription =
        ' Leading branding company in Coimbatore, India. Empowering your business with innovative solutions for exceptional brand presence and growth.';
    $baseKeywords = '  ';
@endphp

@section('title', $baseTitle)
@section('meta_description', $baseDescription)
@section('meta_keywords', $baseKeywords)

@section('og_title', $baseTitle)
@section('og_description', $baseDescription)

@section('twitter_title', $baseTitle)
@section('twitter_description', $baseDescription)

@section('body')

    <section class="page-title"
        style="background-image: url('{{ asset('frontend/assets/images/breadcrumb/Aboutus.jpg') }}');">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">About</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                </ul>
            </div>
        </div>
    </section>    background-image: url('sprite-sheet.jpg');


    <section class="marquee-section mt-5">
        <div class="inner-container">
            <div class="marquee">
                <div class="marquee-block">
                    @for ($i = 1; $i <= 65; $i++) <span class="brand-thumb">
                        <img src="{{ asset('frontend/assets/images/Logo/clients/Logo-' . sprintf('%02d', $i) . '.jpg') }}" alt="AJS Business and IT Solutions   {{ $i }}" title="AJS Business and IT Solutions   {{ $i }}" loading="lazy">
    
                        </span>
                        @endfor
                </div>
                <div class="marquee-block">
                    @for ($i = 1; $i <= 65; $i++) <span class="brand-thumb">
                        <img src="{{ asset('frontend/assets/images/Logo/clients/Logo-' . sprintf('%02d', $i) . '.jpg') }}" alt="AJS Business and IT Solutions   {{ $i }}" title="AJS Business and IT Solutions   {{ $i }}" loading="lazy">
    
                        </span>
                        @endfor
                </div>
            </div>
        </div>
    </section>




    <section class="about-section-five " id="about">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-xl-6 col-lg-7 col-md-12 col-sm-12 order-2 wow fadeInRight">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">Welcome to AJS Groups</span>
                            <h1> YOUR BRAND, AMPLIFIED</h1>
                            <div class="text">
                                <p>In today's competitive business landscape, standing out from the crowd is crucial for
                                    success. At AJS Groups, we understand the importance of effective visual communication
                                    in capturing attention and conveying your message. That's why we specialize in creating
                                    high-quality flex banner printing services that help businesses like yours shine.</p>
                                <p>Our team of expert designers and state-of-the-art printing technology come together to
                                    produce stunning flex banners that exceed our clients' expectations. We don't just print
                                    banners – we craft attention-grabbing experiences that elevate your message and leave a
                                    lasting impression on your target audience.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <figure class="image-1 overlay-anim wow fadeInUp"><img
                                src=" {{ asset('frontend/assets/images/resource/AboutUs.webp') }}" alt="AboutUs">
                        </figure>
                        <figure class="image-2 overlay-anim wow fadeInRight"><img
                                src=" {{ asset('frontend/assets/images/resource/About2 .webp') }}" alt="AboutUs">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="why-choose-us-two pt-0">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-xl-6 col-lg-7 col-md-12 col-sm-12 wow fadeInLeft">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2> Advertising Solutions</h2>
                            <div class="text">
                                <p>We design and print high-quality banners, flex, brochures, business cards, and other
                                    marketing materials that help businesses communicate their message with clarity and
                                    impact. Our team of experts will work with you to develop an advertising strategy that
                                    meets your goals and budget.</p>
                                <p> Our advertising services are designed to help businesses reach their target audience
                                    effectively. We offer a range of services, including:
                            </div>
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="info-box">
                                    <i class="icon fa fa-check-circle"></i>
                                    <h6 class="title">Print Advertising</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="info-box">
                                    <i class="icon fa fa-check-circle"></i>
                                    <h6 class="title">Digital Advertising</h6>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="info-box">
                                    <i class="icon fa fa-check-circle"></i>
                                    <h6 class="title">Outdoor Advertising</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
                    <div class="image-box wow fadeInRight">
                        <figure class="image overlay-anim">
                            <img src="{{ asset('frontend/assets/images/resource/Advertising Solution.webp') }}"
                                alt="Advertising Solution">
                            <a href="" class="play-btn lightbox-image"><i class="icon fa fa-play"></i></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section-five style-two pt-0 " id="about">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-xl-6 col-lg-6 col-md-12 order-2 wow fadeInRight">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>The Power of Strong Branding</h2>
                            <div class="text">
                                <p>At AJS, we believe that a strong brand is the foundation of any successful business. A
                                    well-defined brand identity helps you stand out from the competition, builds
                                    recognition, and establishes trust with your audience.</p>
                                <p>That's why we offer comprehensive branding services that include:</p>
                            </div>
                        </div>
                        <ul class="list-style-three">
                            <li>Logo Designing</li>
                            <li>Brand Identity Creation</li>
                            <li>Brand Strategy Development</li>
                        </ul>
                    </div>
                </div>

                <div class="image-column col-xl-6 col-lg-6 col-md-12 ">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image overlay-anim wow fadeInUp"><img
                                    src=" {{ asset('frontend/assets/images/resource/strong branding.webp') }}"
                                    alt="Strong branding"></figure>
                            <div class="experience">
                                <strong>5</strong>
                                <div class="text">Years <br>Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p>Our goal is to help businesses build a strong brand that resonates with their target audience and sets
                    them apart from the competition. We take the time to understand your unique needs and goals and develop
                    a customized branding strategy that reflects your values and mission.

                </p>

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <ul class="accordion-box wow fadeInRight">

                                <li class="accordion block">
                                    <div class="acc-btn">Why Choose AJS Groups?
                                        <div class="icon fa fa-plus"></div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                <h6>By choosing AJS Groups, you can expect:</h6>
                                                <ul class="list-style-three">
                                                    <li>High-quality flex banner printing services that exceed your
                                                        expectations
                                                    </li>
                                                    <li>Comprehensive branding services that help you build a strong brand
                                                        identity
                                                    </li>
                                                    <li>Effective advertising solutions that reach your target audience</li>
                                                    <li>Exceptional customer service and support</li>
                                                    <li>Competitive pricing and flexible packages to meet your budget</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                <li class="accordion block">
                                    <div class="acc-btn">Benefits of Flex Banner Printing
                                        <div class="icon fa fa-plus"></div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                <ul class="list-style-three">
                                                    <div class="inner-column">


                                                        <div class="content-box">
                                                            <div class="about-block-two">
                                                                <h5 class="title"><i class="icon fa fa-angle-right"></i>
                                                                    High-quality visuals
                                                                </h5>
                                                                <p class="text">Flex banners offer high-quality visuals
                                                                    that can help to grab
                                                                    the attention of your target audience.</p>
                                                            </div>
                                                            <div class="about-block-two">
                                                                <h5 class="title"><i class="icon fa fa-angle-right"></i>
                                                                    Durability</h5>
                                                                <p class="text">Flex banners are made from durable
                                                                    materials that can
                                                                    withstand the elements and last for a long time.</p>
                                                            </div>
                                                            <div class="about-block-two">
                                                                <h5 class="title"><i class="icon fa fa-angle-right"></i>
                                                                    Versatility</h5>
                                                                <p class="text">Flex banners can be used in a variety of
                                                                    ways, including at
                                                                    events, in-store promotions, and outdoor advertising.
                                                                </p>
                                                            </div>
                                                            <div class="about-block-two">
                                                                <h5 class="title"><i class="icon fa fa-angle-right"></i>
                                                                    Cost-effective</h5>
                                                                <p class="text">Flex banners are a cost-effective
                                                                    marketing tool compared to
                                                                    other forms of advertising.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn"> How to Use Flex Banner Printing in Your Marketing Strategy
                                        <div class="icon fa fa-plus"></div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">

                                                <div class="inner-column">


                                                    <div class="content-box">
                                                        <div class="about-block-two">
                                                            <h5 class="title"><i class="icon fa fa-angle-right"></i>
                                                                Event marketing
                                                            </h5>
                                                            <p class="text">Use flex banners to promote your business at
                                                                events,
                                                                conferences, and trade shows.</p>
                                                        </div>
                                                        <div class="about-block-two">
                                                            <h5 class="title"><i class="icon fa fa-angle-right"></i>
                                                                In-store promotions
                                                            </h5>
                                                            <p class="text">Use flex banners to promote your products or
                                                                services
                                                                in-store.</p>
                                                        </div>
                                                        <div class="about-block-two">
                                                            <h5 class="title"><i class="icon fa fa-angle-right"></i>
                                                                Outdoor advertising
                                                            </h5>
                                                            <p class="text">Use flex banners to promote your business
                                                                outdoors, such as
                                                                on buildings or at bus stops.</p>
                                                        </div>
                                                        <div class="about-block-two">
                                                            <h5 class="title"><i class="icon fa fa-angle-right"></i>
                                                                Social media
                                                                marketing</h5>
                                                            <p class="text">Use flex banners to promote your social media
                                                                channels and
                                                                engage with your target audience.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn"> Tips for Designing Effective Flex Banners
                                        <div class="icon fa fa-plus"></div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                <div class="inner-column">

                                                    <div class="content-box">
                                                        <div class="about-block-two">
                                                            <h5 class="title"><i class="icon fa fa-angle-right"></i> Use
                                                                clear and
                                                                concise language </h5>
                                                            <p class="text">Make sure your message is easy to understand
                                                                and gets
                                                                straight to the point.</p>
                                                        </div>
                                                        <div class="about-block-two">
                                                            <h5 class="title"><i class="icon fa fa-angle-right"></i>
                                                                Include a visual
                                                                hierarchy</h5>
                                                            <p class="text">Use headings, subheadings, and bullet points
                                                                to make your
                                                                content easy to scan.</p>
                                                        </div>
                                                        <div class="about-block-two">
                                                            <h5 class="title"><i class="icon fa fa-angle-right"></i>Use
                                                                contrasting
                                                                colours</h5>
                                                            <p class="text">Choose colours that stand out from the
                                                                background and make
                                                                your content easy to read.</p>
                                                        </div>
                                                        <div class="about-block-two">
                                                            <h5 class="title"><i class="icon fa fa-angle-right"></i> Add
                                                                a call-to-action
                                                            </h5>
                                                            <p class="text">Encourage your audience to take action with a
                                                                clear and
                                                                prominent call-to-action.</p>
                                                        </div>
                                                        <div class="about-block-two">
                                                            <h5 class="title"><i class="icon fa fa-angle-right"></i>
                                                                Choose the right
                                                                colours</h5>
                                                            <p class="text">Choose colours that are consistent with your
                                                                brand and that
                                                                will grab the attention of your target audience.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn"> Common Mistakes to Avoid
                                        <div class="icon fa fa-plus"></div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                <div class="inner-column">

                                                    <div class="inner-column">
                                                        <div class="content-box">
                                                            <div class="about-block-two">
                                                                <h5 class="title"><i class="icon fa fa-angle-right"></i>
                                                                    Poor design </h5>
                                                                <p class="text">Avoid using low-quality images, cluttered
                                                                    design, and hard-to-read fonts.</p>
                                                            </div>
                                                            <div class="about-block-two">
                                                                <h5 class="title"><i class="icon fa fa-angle-right"></i>
                                                                    Inconsistent branding</h5>
                                                                <p class="text">Make sure your flex banner aligns with
                                                                    your overall brand identity.</p>
                                                            </div>
                                                            <div class="about-block-two">
                                                                <h5 class="title"><i
                                                                        class="icon fa fa-angle-right"></i>Typos and
                                                                    grammatical errors</h5>
                                                                <p class="text">Double-check your content for any
                                                                    mistakes that could make your business look
                                                                    unprofessional.</p>
                                                            </div>
                                                            <div class="about-block-two">
                                                                <h5 class="title"><i class="icon fa fa-angle-right"></i>
                                                                    Lack of clarity</h5>
                                                                <p class="text">Make sure your message is clear and easy
                                                                    to understand.</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>





    <section class="testimonial-section-four">
        <div class="auto-container">
            <div class="row">

                <div class="title-column col-xl-5 col-lg-6 col-md-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">Our feedbacks</span>
                            <div class="text">But don't just take our word for it! Our clients rave about our services,
                                citing our attention to detail, prompt turnaround times, and
                                commitment to quality. Here's what some of our satisfied clients have
                                to say.</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-column col-xl-7 col-lg-6 col-md-12">
                    <div class="carousel-outer">

                        <div class="testimonial-carousel-four owl-carousel owl-theme">

                            <div class="testimonial-block-four">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <span class="icon icon-quote"></span>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="text">‘AJS Groups has been a game-changer for our business. Their
                                            flex
                                            banner printing services are top-notch, and their team is always willing
                                            to go the extra mile to ensure we're satisfied.’</div>
                                    </div>

                                </div>
                            </div>

                            <div class="testimonial-block-four">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <span class="icon icon-quote"></span>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="text">‘"Exceptional service, quality products, and innovative
                                            solutions. AJS is a one-stop-shop for all our
                                            marketing needs."</div>
                                    </div>

                                </div>
                            </div>

                            <div class="testimonial-block-four">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <span class="icon icon-quote"></span>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="text">"Their attention to detail, professionalism, and commitment to
                                            quality have made a significant
                                            impact on our business. Kudos to the team!”</div>
                                    </div>

                                </div>
                            </div>



                            <div class="testimonial-block-four">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <span class="icon icon-quote"></span>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i></div>
                                        <div class="text">‘I was blown away by the quality of the flex banners AJS Groups
                                            produced for our event. They were vibrant, durable, and really made
                                            our brand stand out.’</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p>At AJS Groups, we are passionate about helping businesses like yours succeed. Our team of experts is
                dedicated to delivering high-quality flex banner printing services, comprehensive branding solutions, and
                effective advertising services that meet your needs and exceed your expectations. Contact us today to learn
                more about how we can help you elevate your message and stand out from the crowd.</p>
        </div>
    </section>




@endsection

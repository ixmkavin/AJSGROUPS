@extends('frontend.layout.frontend-master')

@php
    $baseTitle = 'AJS Groups: India’s Best Flex Printing | Banners & Signs';
    $baseDescription =
        'India’s top flex printing, banners & signs provider. High-quality visual solutions for businesses & advertising. Reliable, timely delivery at AJSGroups.';
    $baseKeywords = 'flex printing Company';
    // $ogImage = asset('frontend/assets/images/resource/Printing.png');
    // $twitterImage = asset('frontend/assets/images/resource/Printing.png');
@endphp

@section('title', $baseTitle)
@section('meta_description', $baseDescription)
@section('meta_keywords', $baseKeywords)

@section('og_title', $baseTitle)
@section('og_description', $baseDescription)

@section('twitter_title', $baseTitle)
@section('twitter_description', $baseDescription)

@section('body')

    <section class="bg-section">
        <video autoplay muted loop playsinline class="bg-video">
            <source src="{{ asset('frontend/assets/images/Comp1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </section>




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

    




    <section class="offer-section-four">
        <div class="auto-container">
            <div class="outer-box">
                <div class="row">

                    <div class="content-column col-xl-6 col-lg-6 col-md-12">
                        <div class="inner-column wow fadeInRight">
                            <div class="sec-title">
                                <span class="sub-title">company benefits</span>
                                <h2>Always Deliver More than you Expected</h2>
                            </div>
                            <div class="info-box">
                                <span class="count">01</span>
                                <h5 class="title">Quality Guarantee</h5>
                                <div class="text">We ensure precise colour matching, crisp graphics, and durable prints
                                    that
                                    withstand the elements.
                                </div>
                            </div>
                            <div class="info-box">
                                <span class="count">02</span>
                                <h5 class="title">Timely Delivery</h5>
                                <div class="text">We provide fast turnaround times without compromising on quality, so you
                                    can
                                    meet your deadlines with confidence.
                                </div>
                            </div>
                            <div class="info-box">
                                <span class="count">03</span>
                                <h5 class="title">Expert Solutions</h5>
                                <div class="text">Our team of experts will guide you through the printing process, from
                                    concept
                                    to completion, to ensure your vision is brought to life.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="image-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInLeft">
                            <div class="image-box">
                                <figure class="image"><img
                                        src="{{ asset('frontend/assets/images/resource/Printing.png') }}"
                                        alt="AJS Business and IT Solutions-Personalized Services"></figure>
                                <div class="caption">Personalized Services</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="project-section style-two pb-0 mb-5" id="projects">
        <div class="auto-container">
            <div class="sec-title light">
                <div class="row">
                    <div class="">

                        <h2>Enhance Your <span style="color: red">Brand</span> <br> Identity</h2>
                    </div>
                </div>
            </div>
            <div class="carousel-outer">

                <div class="project-carousel owl-carousel owl-theme">

                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img
                                        src="{{ asset('frontend/assets/images/resource/Envelop.webp') }}"
                                        alt="AJS Business and IT Solutions-Envelop">
                                </figure>
                            </div>
                            <div class="content-box">
                                <h4 class="title">Envelop Cover</h4>
                            </div>
                        </div>
                    </div>

                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img
                                        src="{{ asset('frontend/assets/images/resource/Visiting Card.webp') }}"
                                        alt="AJS Business and IT Solutions-Visiting Card">
                                </figure>
                            </div>
                            <div class="content-box">
                                <h4 class="title">visiting Cards</h4>
                            </div>
                        </div>
                    </div>

                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img
                                        src="{{ asset('frontend/assets/images/resource/Broucher.webp') }}"
                                        alt="AJS Business and IT Solutions-Broucher">
                                </figure>
                            </div>
                            <div class="content-box">
                                <h4 class="title">Brochure </h4>
                            </div>
                        </div>
                    </div>


                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('frontend/assets/images/resource/Flyer.webp') }}"
                                        alt="AJS Business and IT Solutions-Flyer">
                                </figure>
                            </div>
                            <div class="content-box">
                                <h4 class="title">Flyer</h4>
                            </div>
                        </div>
                    </div>

                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img
                                        src="{{ asset('frontend/assets/images/resource/Billbook.webp') }}"
                                        alt="AJS Business and IT Solutions-Billbook">
                                </figure>
                            </div>
                            <div class="content-box">
                                <h4 class="title">Bill Book</h4>
                            </div>
                        </div>
                    </div>

                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img
                                        src="{{ asset('frontend/assets/images/resource/Certificate.webp') }}"
                                        alt="AJS Business and IT Solutions-Certificate">
                                </figure>
                            </div>
                            <div class="content-box">
                                <h4 class="title">Certificate </h4>
                            </div>
                        </div>
                    </div>


                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img
                                        src="{{ asset('frontend/assets/images/resource/Id Card.webp') }}"
                                        alt="AJS Business and IT Solutions-Id Card">
                                </figure>
                            </div>
                            <div class="content-box">
                                <h4 class="title">ID Card</h4>
                            </div>
                        </div>
                    </div>


                    {{-- <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('frontend/assets/images/resource/project-2.jpg') }}" alt="AJS Business and IT Solutions">
                                </figure>
                            </div>
                            <div class="content-box">
                                <h4 class="title">Smart Visions</h4>
                            </div>
                        </div>
                    </div>







                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('frontend/assets/images/resource/project-3.jpg') }}" alt="AJS Business and IT Solutions">
                                </figure>
                            </div>
                            <div class="content-box">
                                <h4 class="title">Letterhead</h4>
                            </div>
                        </div>
                    </div>





                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('frontend/assets/images/resource/project-2.jpg') }}" alt="AJS Business and IT Solutions">
                                </figure>
                            </div>
                            <div class="content-box">
                                <h4 class="title">Seal</h4>
                            </div>
                        </div>
                    </div>  --}}

                </div>
            </div>
        </div>
    </section>





    <section class="work-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Brand Management</span>
                <h2>The Best Source for <br> Brand Visibility</h2>
            </div>
            <div class="tabs-box work-tabs">

                <ul class="tab-buttons clearfix">
                    <li class="tab-btn active-btn" data-tab="#tab1">Printing</li>
                    <li class="tab-btn" data-tab="#tab2">Branding</li>
                    <li class="tab-btn" data-tab="#tab3">Advertising </li>
                </ul>
                <div class="tabs-content">

                    <div class="tab active-tab" id="tab1">
                        <div class="row">

                            <div class="content-column col-xl-7 col-lg-6 col-md-12 order-2">
                                <div class="inner-column">
                                    <h3>Your Trusted Partner in Printing, Branding, and Advertising</h3>
                                    <div class="text">Nestled in the bustling city of Coimbatore, India, AJS Groups is a
                                        trailblazer in the printing, branding,
                                        and advertising sectors. Our mission is to empower businesses by transforming their
                                        ideas into
                                        compelling visual narratives. From dazzling prints to innovative branding solutions
                                        and impactful
                                        advertising campaigns, we pride ourselves on delivering top-notch services that
                                        cater to your unique
                                        needs. Our team of seasoned professionals, equipped with cutting-edge technology,
                                        ensures that
                                        every project we undertake exceeds expectations in terms of quality and creativity.
                                        At AJS Groups,
                                        we’re dedicated to helping your business shine in a crowded marketplace.</div>

                                </div>
                            </div>

                            <div class="image-column col-xl-5 col-lg-6 col-md-12">
                                <figure class="image overlay-anim"><img
                                        src="{{ asset('frontend/assets/images/resource/YourTrusted.webp') }}"
                                        alt="AJS Business and IT Solutions Printing">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="tab " id="tab2">
                        <div class="row">

                            <div class="content-column col-xl-7 col-lg-6 col-md-12 order-2">
                                <div class="inner-column">
                                    <h3>Precision Printing Solutions – Elevating Your Brand</h3>
                                    <div class="text">At AJS Groups, we offer a versatile range of printing services
                                        designed to meet the diverse
                                        requirements of our clients. Our services encompass everything from large-format
                                        prints, banners,
                                        and flexes to precise offset and digital printing. Each project is executed with
                                        meticulous attention to
                                        detail, ensuring that your marketing materials, promotional items, and event signage
                                        not only look
                                        exceptional but also amplify your brand’s presence. Leveraging advanced printing
                                        technology and
                                        the expertise of our skilled team, we deliver unparalleled results that set your
                                        brand apart. Trust AJS
                                        Groups to handle all your printing needs with unmatched precision and creativity.
                                    </div>

                                </div>
                            </div>

                            <div class="image-column col-xl-5 col-lg-6 col-md-12">
                                <figure class="image overlay-anim"><img
                                        src="{{ asset('frontend/assets/images/resource/Elevating.webp') }}"
                                        alt="AJS Business and IT Solutions Branding">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="tab" id="tab3">
                        <div class="row">

                            <div class="content-column col-xl-7 col-lg-6 col-md-12 order-2">
                                <div class="inner-column">
                                    <h3>Innovative Branding and Advertising – Making Your Mark</h3>
                                    <div class="text">In the dynamic world of business, a compelling brand identity is
                                        vital. AJS Groups specializes in
                                        crafting unique branding and advertising strategies that resonate with your target
                                        audience. Our
                                        comprehensive services include logo design, brand guidelines, corporate identity
                                        development, and
                                        extensive advertising campaigns aimed at driving engagement and growth. By combining
                                        traditional
                                        methods with modern innovations, we create distinctive solutions that leave a
                                        lasting impression.
                                        Whether you’re launching a new product, rebranding, or enhancing your market
                                        presence, our team
                                        is committed to supporting you at every step, ensuring your brand stands out and
                                        achieves its full
                                        potential.</div>

                                </div>
                            </div>

                            <div class="image-column col-xl-5 col-lg-6 col-md-12">
                                <figure class="image overlay-anim"><img
                                        src="{{ asset('frontend/assets/images/resource/Innovative.webp') }}"
                                        alt="AJS Business and IT Solutions Advertising">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>









    <section class="features-section-four pull-down p-0">
        <div class="auto-container">
            <div class="row g-0">

                <div class="feature-block-four col-lg-6 col-md-12 col-sm-12 wow fadeInLeft">
                    <div class="inner-box">
                        <div class="content"
                            style="background-image: url('{{ asset('frontend/assets/images/resource/small1.webp') }}');">
                            <span class="icon flaticon-business-030-settings"></span>
                            <h5 class="title">Print. Promote. Prosper</h5>
                            <div class="text">Explore our printing services</div>
                        </div>
                    </div>
                </div>

                <div class="feature-block-four col-lg-6 col-md-12 col-sm-12 wow fadeInRight">
                    <div class="inner-box">
                        <div class="content"
                            style="background-image: url('{{ asset('frontend/assets/images/resource/Small2 (1).webp') }}');">
                            <span class="icon flaticon-business-035-helpline"></span>
                            <h5 class="title">bring your vision to life</h5>
                            <div class="text">Get a quote</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="call-to-action"
        style="background-image: url('{{ asset('frontend/assets/images/resource/brochure.webp') }}');">
        <div class="auto-container">
            <div class="title-box">
                <h2 class="title">Download Our Brochure For A <br> Comprehensive Guide To Our Services</h2>
                <a href="{{ route('Brochure') }}" class="theme-btn btn-style-one">
                    <span class="btn-title">Dive deeper</span>
                </a>
            </div>
        </div>
    </section>





    <section class="testimonial-section-three">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Our feedbacks</span>
                <h2>What They’re Talking<br> About Company</h2>
            </div>
            <div class="testimonial-carousel-three owl-carousel owl-theme">

                <div class="testimonial-block-three">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="thumb"><img src=" {{ asset('frontend/assets/images/resource/Men.webp') }}"
                                    alt="AJS Business and IT Solutions-testimonial"></figure>
                            <span class="icon fa fa-quote-right"></span>
                        </div>
                        <div class="content-box">
                            <div class="info-box">
                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                                <h5 class="name">Hello Mobiles</h5>
                            </div>
                            <div class="text">"I was impressed with the quality of the banners printed by AJS. The
                                colours were vibrant, and the
                                material was durable. Highly recommend!"</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-block-three">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="thumb"><img
                                    src=" {{ asset('frontend/assets/images/resource/test-thumb-8.jpg') }}"
                                    alt="AJS Business and IT Solutions-testimonial"></figure>
                            <span class="icon fa fa-quote-right"></span>
                        </div>
                        <div class="content-box">
                            <div class="info-box">
                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                                <h5 class="name">Super Mart</h5>

                            </div>
                            <div class="text">"AJS did an excellent job with our offset printing needs. The brochures
                                looked professional, and the
                                turnaround time was quick."</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-three">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="thumb"><img src=" {{ asset('frontend/assets/images/resource/Women.webp') }}"
                                    alt="AJS Business and IT Solutions-testimonial"></figure>
                            <span class="icon fa fa-quote-right"></span>
                        </div>
                        <div class="content-box">
                            <div class="info-box">
                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                                <h5 class="name">Fresh Bakes</h5>

                            </div>
                            <div class="text">"The branding services provided by AJS helped us establish a strong
                                identity for our business. Their
                                creative team is top-notch!"</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-three">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="thumb"><img
                                    src=" {{ asset('frontend/assets/images/resource/test-thumb-8.jpg') }}"
                                    alt="AJS Business and IT Solutions-testimonial"></figure>
                            <span class="icon fa fa-quote-right"></span>
                        </div>
                        <div class="content-box">
                            <div class="info-box">
                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                                <h5 class="name">Easy Shop</h5>

                            </div>
                            <div class="text">"From concept to delivery, AJS exceeded our expectations. Highly recommend
                                their services."</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-three">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="thumb"><img
                                    src=" {{ asset('frontend/assets/images/resource/test-thumb-7.jpg') }}"
                                    alt="AJS Business and IT Solutions-testimonial"></figure>
                            <span class="icon fa fa-quote-right"></span>
                        </div>
                        <div class="content-box">
                            <div class="info-box">
                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                                <h5 class="name">Sana Traders</h5>

                            </div>
                            <div class="text"> "AJS has a rare combination of creativity, technical expertise, and
                                customer-centric approach.
                                We're thrilled with their work."</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="faqs-section" id="contact">
        <div class="auto-container">
            <div class="row">

                <div class="faq-column col-lg-6 col-md-12 col-sm-12 order-4">
                    <div class="faq-bg"
                        style="background-image: url('{{ asset('frontend/assets/images/icons/pattern-2.jpg') }}');"></div>
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">Questions & answers</span>
                            <h2>See Frequently Asked Questions</h2>
                        </div>
                        <ul class="accordion-box wow fadeInRight">

                            <li class="accordion block">
                                <div class="acc-btn">What types of printing services do you offer?
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">We specialize in various printing services, including
                                            flex/banners, offset printing, digital printing, and custom printing solutions
                                            tailored to your needs.</div>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion block ">
                                <div class="acc-btn ">Can you handle large volume printing jobs?
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content ">
                                    <div class="content">
                                        <div class="text">Absolutely! We have the capacity to manage both
                                            small and large volume printing projects efficiently, ensuring timely delivery
                                            and high-quality output.</div>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion block">
                                <div class="acc-btn">Do you provide graphic design services?
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Yes, we offer comprehensive graphic design services to
                                            help create eye-catching and effective designs for your printing and branding
                                            needs.</div>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion block">
                                <div class="acc-btn">What is the turnaround time for a typical printing job?
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Turnaround times vary depending on the
                                            complexity and volume of the job. Generally, standard printing jobs are
                                            completed within 3-5
                                            business days.</div>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion block">
                                <div class="acc-btn">Do you offer delivery services?
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Yes, we provide delivery services for all completed printing
                                            jobs.
                                            We ensure that your orders reach you in perfect condition and on time.</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="form-bg"
                        style="background-image: url('{{ asset('frontend/assets/images/resource/printchecker-_2_.webp') }}');">
                    </div>
                    <div class="inner-column">

                        <div class="contact-form wow fadeInLeft">
                            <div class="title-box">
                                <span class="sub-title">Contact us</span>
                                <h3>Write Email</h3>
                            </div>

                            <form id="contact_form" name="contact_form" method="post"
                                action="{{ route('contact.store') }}">
                                @csrf
                                <div class="form-group">
                                    <input name="name" class="form-control" type="text" placeholder="Enter Name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input name="email" class="form-control" type="email" placeholder="Enter Email"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input name="subject" class="form-control" type="text"
                                        placeholder="Enter Website" required>
                                </div>
                                <div class="form-group">
                                    <input name="number" class="form-control" type="text" placeholder="Enter Phone">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Enter Message" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                            class="btn-title">Send a message</span></button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="news-section-two" id="news">
        <div class="auto-container">
            <div class="row">

                <div class="title-column col-xl-4 col-lg-4 col-md-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">from the blog</span>
                            <h2>Our L atest News & Articles from the Blog</h2>
                            <div class="text">There are many variations of passages of ipsum available, but the
                                majority have suffered alteration in form.</div>
                        </div>
                    </div>
                </div>

                <div class="carousel-column col-xl-8 col-lg-8 col-md-12">
                    <div class="carousel-outer">
                        <div class="news-carousel owl-carousel owl-theme">

                            <div class="news-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img
                                                    src=" {{ asset('frontend/assets/images/blog/CUSTOMIZATION A GROWING TREND-01.webp') }}"
                                                    alt="CUSTOMIZATION A GROWING TREND"></figure>
                                        <span class="date"><b>28</b> OCT</span>
                                    </div>
                                    <div class="content-box">

                                        <h4 class="title">Technological
                                                Advancements in Design…</h4>
                                    </div>
                                    <div class="bottom-box">
                                        <a href="{{ route('underConstruction') }}" class="read-more">Read More <i
                                                class="fa fa-long-arrow-alt-right"></i></a>

                                    </div>
                                </div>
                            </div>

                            <div class="news-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img
                                                    src=" {{ asset('frontend/assets/images/blog/EMPHASIZING SUSTAINABILITY-01.webp') }}"
                                                    alt="EMPHASIZING SUSTAINABILITY"></figure>
                                        <span class="date"><b>28</b> OCT</span>
                                    </div>
                                    <div class="content-box">

                                        <h4 class="title">Technological
                                                Advancements in Design…</h4>
                                    </div>
                                    <div class="bottom-box">
                                        <a href="{{ route('underConstruction') }}" class="read-more">Read More <i
                                                class="fa fa-long-arrow-alt-right"></i></a>

                                    </div>
                                </div>
                            </div>







                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}



    <section class="call-to-action-two p-0 mt-5">
        <div class="auto-container">
            <div class="outer-box wow fadeIn">

                <div class="image-box">
                    <figure class="image"><img src="{{ asset('frontend/assets/images/resource/weareReady.webp') }}"
                            alt="weareReady">
                    </figure>
                </div>

                <div class="content-box">
                    <div class="title-box">
                        <h1 class="title">InKfinite Print <br> with Exceptional Craft</h3>
                    </div>
                    <div class="btn-box">
                        <a href="{{ route('contact') }}" class="theme-btn btn-style-two hvr-light"><span
                                class="btn-title">Contact Us</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

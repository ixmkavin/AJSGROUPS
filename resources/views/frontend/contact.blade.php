@extends('frontend.layout.frontend-master')

@php
    $baseTitle = '';
    $baseDescription = ' ';
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


<section class="page-title" style="background-image: url('{{ asset('frontend/assets/images/breadcrumb/Contact.jpg') }}');">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Contact</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('/')}}">Home</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </section>


 
    <section class="contact-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7">
                    <div class="sec-title">
                        <span class="sub-title">Send us an email</span>
                    </div>

                    <!-- Flash Message -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Contact Form -->
                    <form id="contact_form" name="contact_form" method="post" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="name" class="form-control" type="text" placeholder="Enter Name"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="email" class="form-control" type="email" placeholder="Enter Email"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="subject" class="form-control" type="text" placeholder="Enter Subject"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="number" class="form-control" type="text" placeholder="Enter Phone">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea name="message" class="form-control" rows="7" placeholder="Enter Message" required></textarea>
                        </div>
                        <div class="mb-3">
                            <input name="botcheck" class="form-control" type="hidden" value="">
                            <button type="submit" class="theme-btn btn-style-one mb-2" data-loading-text="Please wait...">
                                <span class="btn-title">Send message</span>
                            </button>
                            <button type="reset" class="theme-btn btn-style-one">
                                <span class="btn-title">Reset</span>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="col-xl-6 col-lg-5">
                    <div class="contact-details__right">
                        <div class="sec-title">
                            <span class="sub-title">Need any help?</span>
                            <h1>Get in touch with <span style="color: red">AJS</span></h1>
                        </div>
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon">
                                    <span class="fa fa-phone-square"></span>
                                </div>
                                <div class="text">
                                    <h6>Have any question? Call us :</h6>
                                    <a href="callto:9944200793">9087873793<br>9944200793</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-envelope"></span>
                                </div>
                                <div class="text">
                                    <h6>Write email</h6>
                                    <a href="mailto:admin@ajsgroups.com">admin@ajsgroups.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa-solid fa fa-map"></span>
                                </div>
                                <div class="text">
                                    <h6>Visit anytime</h6>
                                    <span>S F No. 450/1, 450/2, Kurumbapalayam,<br>Vedapatti, Coimbatore, Tamil Nadu - 641
                                        007.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container-fluid p-0">
            <div class="row">

                <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15666.018425664008!2d76.888076!3d11.000716000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85f1d3a85da81%3A0x657282ab2fda4288!2sAJS%20Business%20and%20IT%20Solutions!5e0!3m2!1sen!2sin!4v1721973409495!5m2!1sen!2sin"
                data-tm-width="100%" height="500" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>

@endsection


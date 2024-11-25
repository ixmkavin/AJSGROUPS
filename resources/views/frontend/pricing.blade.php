@extends('frontend.layout.frontend-master')


<!-- Body Section -->
@section('body')






  <section class="call-to-action-eight" style="background-image: url('{{ asset('frontend/assets/images/background/8-red.png') }}');">
    <div class="auto-container">
    <div class="title-box">
    <h1 class="title ">Our Pricelist</h1>
    <a href="{{ asset('/Downloadlist') }}" class="theme-btn btn-style-one "><span class="btn-title">Download</span></a>
    <a href="{{ asset('pricelist') }}" class="theme-btn btn-style-one "><span class="btn-title">View</span></a>
    </div>
    </div>
    </section>


    

    @endsection
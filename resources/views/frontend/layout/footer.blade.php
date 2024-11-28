

    <!-- floating area start here  -->
    <div class="cp-floating-area d-none d-md-block zi-1100 p-relative d-none">
        <div class="cp-floating-action cp-bg-move-y">
           <span class="cp-floating-btn cp-floating-location-btn cp" data-bs-toggle="modal"
              data-bs-target="#locationPopup"><i class="bi bi-geo-alt"></i></span>
           <span class="cp-floating-btn cp-floating-form-btn cp" data-bs-toggle="modal" data-bs-target="#formPopup">
            <i class="bi bi-envelope-at"></i></span>
            <a href="https://wa.me/+917845491330?text=Hi" target="_blank" rel="noopener noreferrer" aria-label="Contact via WhatsApp">
                <span class="cp-floating-btn cp-floating-form-btn cp">
                    <i class="bi bi-whatsapp" aria-hidden="true"></i>
                </span>
            </a>
            

        </div>



        <!-- location Modal start -->
        <div class="modal fade cp-floating-model" id="locationPopup" data-bs-keyboard="false" tabindex="-1"
           aria-labelledby="locationPopupLabel" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 <div class="cp-floating-item cp-location-popup" id="locationPopupLabel">
                    <div class="cp-floating-left">
                       <div class="cp-floating-location">
                          <iframe
                               src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15666.018425664008!2d76.888076!3d11.000716000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85f1d3a85da81%3A0x657282ab2fda4288!2sAJS%20Business%20and%20IT%20Solutions!5e0!3m2!1sen!2sin!4v1721973409495!5m2!1sen!2sin"
                             style="border:0;" allowfullscreen="" loading="lazy"
                             referrerpolicy="no-referrer-when-downgrade"></iframe>
                       </div>
                    </div>
                    <div class="cp-floating-text">
                       <h4 class="cp-floating-title">know <span>our location</span></h4>
                       <div class="cp-floating-text-inner">
                          <span class="cp-floating-text-inner-icon">
                           <i class="fa fa-arrow-right" style="color: #D91118;"></i>
                          </span>
                          <span class="cp-floating-text-inner-text"><a target="_blank"
                                href="https://www.google.com/maps/place/AJS+Business+and+IT+Solutions/@11.000716,76.888076,14z/data=!4m6!3m5!1s0x3ba85f1d3a85da81:0x657282ab2fda4288!8m2!3d11.0007161!4d76.8880759!16s%2Fg%2F11vl1kpczl?hl=en&entry=ttu&g_ep=EgoyMDI0MTAxNi4wIKXMDSoASAFQAw%3D%3D">S F No.
                                450/1, 450/2, Kurumbapalayam,
                                Near Indian Oil Petrol Pump, Vedapatti, Coimbatore, Tamil Nadu - 641 007.</a></span>
                       </div>
                       <div class="cp-floating-text-inner">
                          <span class="cp-floating-text-inner-icon">
                           <i class="fa fa-arrow-right" style="color: #D91118;"></i>
                          </span>
                          <span class="cp-floating-text-inner-text"><a target="_blank"
                            href="tel:+916382167084">(+91) 6382167084,9087873793</a></span>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- location Modal end -->

        <!-- form Modal start -->
        <div class="modal fade cp-floating-model" id="formPopup" data-bs-keyboard="false" tabindex="-1"
           aria-labelledby="formPopupLabel" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 <div class="cp-floating-item" id="formPopupLabel">
                    <div class="cp-floating-form-img w-img">
                       <img src="{{ asset('frontend/assets/images/resource/imgmail.webp') }}" alt="contact">
                    </div>
                    <div class="cp-floating-left cp-signup-popup">
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

                        </div>
                    </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- form Modal end -->
     </div>
     <!-- floating area end here  -->


<footer class="main-footer">        
  
<div class="widgets-section">
<div class="bg-image "style="background-image: url('{{ asset('frontend/assets/images/icons/8-red.png') }}');">
</div>
<div class="container-fluid">
    <div class="row">

        <div class="footer-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
            <div class="footer-widget">
                <h3 class="widget-title">Main Office</h3>
                <div class="fot-logo mb-3"><a href="{{ route('/') }}"><img
                            src="{{ asset('frontend/assets/images/Logo/AJS_LogoFooter1.svg') }}" alt="AJSGroups"></a>
                </div>
                <div class="text text-white"><i class="fa fa-arrow-right" style="color: #D91118;"></i> S F No.
                    450/1, 450/2, Kurumbapalayam, <br>
                    Near Indian Oil Petrol Pump, Vedapatti, Coimbatore, Tamil Nadu - 641 007.</div>
                <div class="text text-white"><i class="fa fa-arrow-right" style="color: #D91118;"></i> <span
                        style="color: #D91118;">GST NO</span> : 33JXAPS3004N1ZB</div>
            </div>
        </div>

        <div class="footer-column col-xl-4 col-lg-6 col-md-12 col-sm-12">
            <div class="footer-widget">
                <h3 class="widget-title">Branch Office</h3>
                <div class="text text-white"> <i class="fa fa-arrow-right" style="color: #D91118;"></i> No 20,
                    Sri Kumaran Garden,
                    opp to Government School,
                    Sundapalayam,Coimbatore-641007.</div>
                <div class="text text-white"><i class="fa fa-arrow-right" style="color: #D91118;"></i> 5/336,
                    Kuluthupalayam Road, Thondamuthur, <br>
                    Coimbatore, Tamilnadu - 641009.</div>
                <div class="text text-white"> <i class="fa fa-arrow-right" style="color: #D91118;"></i> Our
                    services are available
                    <span style="color: #D91118">@</span> Kerala and Tamilnadu.
                </div>
            </div>
        </div>


        <div class="footer-column col-xl-4 col-lg-6 col-md-12 col-sm-12">
            <div class="footer-widget contact-widget">
                <h3 class="widget-title">Contact</h3>
                <div class="widget-content">
                    <div class="text">
                        <ul class="social-icon-two">
                            <li>
                                <a href="https://x.com/AJSGroups" rel="nofollow" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                    <span class="sr-only">Follow us on Twitter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/ajsadz23?mibextid=ZbWKwL" rel="nofollow" target="_blank">
                                    <i class="fab fa-facebook-square"></i>
                                    <span class="sr-only">Follow us on Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://in.pinterest.com/AJSGroups22/" rel="nofollow" target="_blank">
                                    <i class="fab fa-pinterest-p"></i>
                                    <span class="sr-only">Follow us on Pinterest</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/ajsadz23?igsh=dmhqeHd1YXlzaWty" rel="nofollow" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                    <span class="sr-only">Follow us on Instagram</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/ajsadz23/" rel="nofollow" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                    <span class="sr-only">Follow us on LinkedIn</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://youtube.com/@ajsadz23?si=ubJdiyVg7SqvgAkj" rel="nofollow" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                    <span class="sr-only">Follow us on YouTube</span>
                                </a>
                            </li>
                        </ul>

                        
                    </div>
                    <ul class="contact-info mt-4">
                        <li><i class="fa fa-envelope"></i> <a href="mailto:admin@ajsgroups.com"><span
                                    class="__cf_email__"
                                    data-cfemail="c1afa4a4a5a9a4adb181a2aeacb1a0afb8efa2aeac">admin@ajsgroups.com</span></a><br>
                        </li>
                        <li><i class="icon fa fa-mobile" style="color: #D91118;"></i> <a
                            href="tel:+917845491330">OFFICE : <span>(+91) 7845491330</span></a><br></li>
                        <li><i class="fa fa fa-phone"></i> <a
                            href="tel:+916382167084">  <span>(+91) 6382167084,9087873793</span></a><br></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="footer-bottom">
<div class="container">
    <div class="inner-container">
        <div class="copyright-text">
            <a href="{{ route('/') }}">
                <span style="color: #D91118">AJS Business AND IT SOLUTIONS</span>
            </a>
            &copy; Copyright reserved &middot;
            <a href="{{ route('privacypolicy') }}">Privacy Policy</a> &middot;
            <a href="{{ route('termsandcondition') }}">Terms &amp; Conditions</a>
        </div>
    </div>
</div>
</div>
</footer>

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>


<ul id="footer-social-links">
    <li>
        <a href="https://x.com/AJSGroups" rel="nofollow" target="_blank">
            <i class="fab fa-twitter"></i>
            <span class="sr-only">Join us on Twitter</span>
        </a>
    </li>
    <li>
        <a href="https://www.facebook.com/ajsadz23?mibextid=ZbWKwL" rel="nofollow" target="_blank">
            <i class="fab fa-facebook-square"></i>
            <span class="sr-only">Join us on Facebook</span>
        </a>
    </li>
    <li>
        <a href="https://in.pinterest.com/AJSGroups22/" rel="nofollow" target="_blank">
            <i class="fab fa-pinterest-p"></i>
            <span class="sr-only">Join us on Pinterest</span>
        </a>
    </li>
    <li>
        <a href="https://www.instagram.com/ajsadz23?igsh=dmhqeHd1YXlzaWty" rel="nofollow" target="_blank">
            <i class="fab fa-instagram"></i>
            <span class="sr-only">Join us on Instagram</span>
        </a>
    </li>
    <li>
        <a href="https://www.linkedin.com/company/ajsadz23/" rel="nofollow" target="_blank">
            <i class="fab fa-linkedin"></i>
            <span class="sr-only">Join us on LinkedIn</span>
        </a>
    </li>
    <li>
        <a href="https://youtube.com/@ajsadz23?si=ubJdiyVg7SqvgAkj" rel="nofollow" target="_blank">
            <i class="fab fa-youtube"></i>
            <span class="sr-only">Join us on YouTube</span>
        </a>
    </li>
    <li>
        <a href="https://wa.me/your-whatsapp-number" rel="nofollow" target="_blank">
            <i class="fab fa-whatsapp"></i>
            <span class="sr-only">Chat with us on WhatsApp</span>
        </a>
    </li>
</ul>


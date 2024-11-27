@extends('frontend.layout.frontend-master')

@section('body')  

<section class="page-title" style="background-image: url('{{ asset('frontend/assets/images/breadcrumb/privacy.jpg') }}');">
    <div class="auto-container">
    <div class="title-outer">
    <h1 class="title">Privacy and Policy</h1>
    <ul class="page-breadcrumb">
    <li><a href="{{ route('/') }}">Home</a></li>
    <li>Privacy and Policy</li>
    </ul>
    </div>
    </div>
    </section>

    <section class="about-section-ten mt-5">
        <div class="auto-container">
    <h3>1. Privacy Policy</h3>
    <p>Welcome to AJS Groups and IT Solutions. Your privacy is important to us, and we are committed to protecting your personal data in accordance with applicable privacy laws.</p>

    <h3>2. Information We Collect</h3>
    <h5>Personal Information:</h5>
    <p>We may collect personal information that you voluntarily provide to us, such as your name, email address, phone number, and company details when you sign up for our services or contact us.</p>

    <h5>Usage Data:</h5>
    <p>We collect information about your interactions with our website and services, including your IP address, browser type, pages visited, and time spent on our site.</p>

    <h5>Cookies and Tracking Technologies: </h5>
    <p> We use cookies and similar tracking technologies to enhance your browsing experience, analyze site traffic, and serve personalized content and advertisements.</p>

    <h3>3.How We Use Your Information</h3>
    <h5>Branding and Advertising:</h5>
    <p>We use your information to tailor our branding and advertising efforts to better meet your interests and preferences. This may include targeted advertisements based on your browsing behavior and interactions with our content.</p>

    <h5>Service Improvement: </h5>
    <p>Your data helps us understand how our services are used and how we can enhance them. This includes analyzing usage patterns and making improvements to our website and services.</p>

    <h5>Communication:</h5>
    <p>We may use your contact information to send you updates about our services, promotional offers, and other information that may be of interest to you. We may occasionally revise this Privacy Policy. Any changes will be posted on our website, and the revised policy will take effect as soon as it is posted. We recommend checking this policy regularly to stay updated on how we safeguard your information.</p>

    <h3>4. Sharing Your Information</h3>
    <h5>With Third Parties: </h5>
    <p>We may share your information with third-party service providers who assist us in delivering our services, including those involved in advertising and marketing. These third parties are required by contract to keep your information safe and to use it only as we direct.</p>

    <h3>5. Data Security</h3>
    <p>We implement appropriate technical and organizational measures to safeguard your personal data from unauthorized access, disclosure, or destruction security. While we take steps to protect your information, no online or electronic storage method is completely secure, so we can't guarantee total security.</p>

    <h3>6. Your Choices</h3>
    <h5>Opt-Out:</h5>
    <p> You can manage your cookie preferences and opt out of targeted advertising by adjusting your browser settings or using available opt-out tools.</p>

    <h5>Access and Correction:</h5>
    <p>You have the right to access, update, or correct your personal information. Please contact us if you wish to exercise these rights.</p>

    <h3>7. Changes to This Policy</h3>
    <p>We may update this Privacy Policy from time to time. Any changes will be posted on our website, and the revised policy will take effect as soon as it is posted. We encourage you to review this policy periodically to stay informed about how we are protecting your information.</p>

    <h3>8. Contact Us</h3>
    <p>If you have any questions or need more information, please do not hesitate to get in touch with us at <span style="color: blue">admin@ajsgroups.com</span> </p>

</div>
</section>


@endsection

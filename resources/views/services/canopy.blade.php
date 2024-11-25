@extends('frontend.layout.frontend-master')

@php
    $baseTitle = 'Custom Canopy and Standee UV Printing Services | AJS Groups';
    $baseDescription = ' Our Canopy and Standee have a strong design, and easy to set up, need little maintenance, highly durable, and feature an attractive appearance.';
    $baseKeywords = ' Canopy , standee ';
@endphp

@section('title', $baseTitle)
@section('meta_description', $baseDescription)
@section('meta_keywords', $baseKeywords)

@section('og_title', $baseTitle)
@section('og_description', $baseDescription)

@section('twitter_title', $baseTitle)
@section('twitter_description', $baseDescription)

@section('body')

    <section class="service-section">
        <div class="service-overlay">
            <img src="{{ asset('frontend/assets/images/resource/Canophy and Standee-1.jpg') }}" alt="Canopy and Standee">
        </div>

    </section>


    <section class="services-details">
        <div class="container">
            <div class="row">
    
                <div class="col-xl-12 col-lg-12">
                    <div class="services-details__content">
    
                        <h1 class="service-text">Perfect Solutions for Your Event: Canopies and Standees</h1>
    
                        <p>At our company, effective communication and visibility are key to any successful event. Canopies and standees are great tools to achieve this. Whether you’re planning a trade show, festival, or corporate event, these items can increase your presence and draw attention. Learn more about how canopies and standees can elevate your event, and why we are the perfect partner for your needs.</p>
    
                        <div class="accordion-box mb-5">
    
                            <!-- Accordion Block 1: What is a Canopy? -->
                            <li class="accordion block">
                                <div class="acc-btn">What is a Canopy?
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>A canopy is a temporary structure used for shade and shelter, typically featuring a metal or plastic frame with a fabric cover. Canopies come in different sizes and styles, making them ideal for both indoor and outdoor events such as fairs, markets, weddings, and sports events.</p>
                                            <ul>
                                                <li><b>Pop-Up Canopies:</b> Easy to set up with foldable frames; ideal for outdoor events, festivals, and markets.</li>
                                                <li><b>Frame Canopies:</b> Built with a sturdy frame to withstand harsher weather; suitable for long-term or semi-permanent setups.</li>
                                                <li><b>Party Tents:</b> Large canopies designed for bigger gatherings; perfect for weddings, corporate events, and parties.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
    
                            <!-- Accordion Block 2: Benefits of Using a Canopy -->
                            <li class="accordion block">
                                <div class="acc-btn">Benefits of Using a Canopy
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <ul>
                                                <li><b>Weather Protection:</b> Shields against sun, rain, and wind for a more comfortable experience.</li>
                                                <li><b>Easy Setup:</b> Quick and hassle-free assembly, saving time and effort.</li>
                                                <li><b>Custom Branding:</b> Add your logo, colors, and messaging for greater brand visibility.</li>
                                                <li><b>Defined Space:</b> Create a specific area for your activities, attracting attention in busy environments.</li>
                                                <li><b>Enhanced Visibility:</b> Bright, branded canopies draw more visitors and make your booth stand out.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
    
                            <!-- Accordion Block 3: What is a Standee? -->
                            <li class="accordion block">
                                <div class="acc-btn">What is a Standee?
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>A standee is a large, freestanding display that promotes a brand, product, or message. Usually made from lightweight materials like cardboard or foam board, standees can be used both indoors and outdoors, making them a versatile option for various events.</p>
                                            <ul>
                                                <li><b>Flat Standees:</b> Simple, flat displays ideal for promotions and retail settings.</li>
                                                <li><b>Cut-Out Standees:</b> Life-sized cutouts, great for movie promotions, product launches, or events.</li>
                                                <li><b>Banner Standees:</b> Retractable banners that are portable and easy to display, suitable for trade shows or corporate events.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
    
                            <!-- Accordion Block 4: Benefits of Using a Standee -->
                            <li class="accordion block">
                                <div class="acc-btn">Benefits of Using a Standee
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <ul>
                                                <li><b>Attention-Grabbing:</b> Visually appealing and noticeable with bright colors and bold designs.</li>
                                                <li><b>Cost-Effective Marketing:</b> Affordable and reusable for multiple events.</li>
                                                <li><b>Easy to Move:</b> Lightweight and portable, making transportation a breeze.</li>
                                                <li><b>Custom Designs:</b> Tailor the design to fit your brand and message.</li>
                                                <li><b>Interactive Element:</b> Add QR codes or social media links to encourage audience engagement.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
    
                            <!-- Accordion Block 5: How Can Our Company Help? -->
                            <li class="accordion block">
                                <div class="acc-btn">How Can Our Company Help?
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <ul>
                                                <li><b>Custom Solutions:</b> We offer personalized canopies and standees to match your brand and message.</li>
                                                <li><b>Quality Materials:</b> Our canopies are made from weather-resistant fabrics, and standees from durable materials to last through multiple events.</li>
                                                <li><b>Affordable Pricing:</b> Competitive pricing to suit your budget without compromising on quality.</li>
                                                <li><b>Quick Delivery:</b> We ensure fast turnaround times so you receive your products on time for your event.</li>
                                                <li><b>Support and Guidance:</b> We assist with everything from choosing the right size and style to providing design support.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
    
                            <!-- Accordion Block 6: Tips for Using Canopies and Standees Effectively -->
                            <li class="accordion block">
                                <div class="acc-btn">Tips for Using Canopies and Standees Effectively
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <ul>
                                                <li><b>Choose the Right Spot:</b> Place your canopy and standee in areas with high foot traffic for maximum visibility.</li>
                                                <li><b>Keep It Simple:</b> Communicate your message clearly with concise text and visuals.</li>
                                                <li><b>Use Bright Colors:</b> Eye-catching colors that align with your brand can attract more attention.</li>
                                                <li><b>Engage Your Audience:</b> Utilize the space within your canopy to interact with visitors through demos or activities.</li>
                                                <li><b>Consistency is Key:</b> Ensure that your canopy and standee designs match your overall brand identity for cohesive branding.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
    
                            <!-- Accordion Block 7: Conclusion -->
                            <li class="accordion block">
                                <div class="acc-btn">Let Us Elevate Your Event!
                                    <div class="icon fa fa-plus"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>Canopies and standees are essential tools for improving your event’s visibility and attracting more visitors. Our company is committed to providing customized solutions, high-quality materials, and excellent support to help make your event a success. Contact us today to get started on designing your perfect event setup!</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
    
                        </div>
    
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    

@endsection

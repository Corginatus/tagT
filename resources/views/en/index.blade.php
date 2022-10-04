@extends('base')

@section('content')
    <main>
        <!-- Intro -->
        <section class="py-6 bg-light-primary overflow-hidden">
            <div class="container">
                <div class="row align-items-center justify-content-between mb-5 mb-lg-8">
                    <div class="col-xl-5 col-lg-6 mb-5 mb-lg-0 text-center text-lg-left">

                        <h2 class="font-weight-bold mb-4" data-aos="fade-up" data-aos-delay="50">{!! __('messages.intro-h2') !!}</h2>
                        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">{!! __('messages.intro-p') !!}</p>

                        <div class="d-flex justify-content-center justify-content-lg-start flex-column flex-sm-row pt-4">
                            <a href="#contact-us" class="btn btn-primary mr-sm-2 mb-2 mb-sm-0 waves-effect" data-aos="fade-up" data-aos-delay="150">Order </a>
                            <a href="https://calendly.com/eurovc" class="btn btn-white ml-sm-2 waves-effect" data-aos="fade-up" data-aos-delay="200"><span>Schedule a call</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-img-group-1 text-center">
                            <picture>
                                <source srcset="/images/main/main-section.png" type="image/png">
                                <img src="/images/main/main-section.png" alt="" class="img-fluid" data-aos="zoom-in">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-6">
            <div class="container">
                <div class="row justify-content-center text-center mb-5 mb-lg-7">
                    <div class="col-xl-8 col-lg-8 col-sm-10">
                        <h2 class="font-weight-bold text-primary">Letting us build and grow your social communities is like hiring 4 first-class specialists</h2>
                        <p class="text-muted mb-0">Professionals that can only be hired by large companies will work for you. They develop communication strategies for world-class brands. They understand the ropes. You get their ideas and expertise for 1/4 of the budget you
                            would spend on an in-house marketer or PR. </p>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-5 mb-5 mb-lg-0 mr-6" data-aos="fade-up">
                        <div class="text-center">
                            <picture>
                                <source srcset="/images/main/4-guys-2.png" type="image/jpg">
                                <img src="/images/main/4-guys-2.png" alt="" class="img-fluid rounded">
                            </picture>
                        </div>
                    </div>

                    <div class="col-lg-6 ml-5">
                        <div class="px-lg-4 px-xl-6">
                            <div class="row">
                                <div class="col-md-6 col-lg-12" data-aos="fade-up">
                                    <div class="media mb-5">
                                        <div class="media-count bg-primary text-white"><span>1</span></div>
                                        <div class="media-body">
                                            <h4 class="font-weight-bold mb-3 text-primary">SMM</h4>
                                            <p class="text-muted mb-0">To set up groups correctly, create a content plan and communication strategy.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12" data-aos="fade-up" data-aos-delay="100">
                                    <div class="media mb-5">
                                        <div class="media-count bg-primary text-white"><span>2</span></div>
                                        <div class="media-body">
                                            <h4 class="font-weight-bold mb-3 text-primary">JOURNALIST</h4>
                                            <p class="text-muted mb-0">To write cool and exciting content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12" data-aos="fade-up" data-aos-delay="200">
                                    <div class="media mb-5">
                                        <div class="media-count bg-primary text-white"><span>3</span></div>
                                        <div class="media-body">
                                            <h4 class="font-weight-bold mb-3 text-primary">FASHION BLOGER</h4>
                                            <p class="text-muted mb-0">To engage with an audience, give tips on fashion and style.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12" data-aos="fade-up" data-aos-delay="200">
                                    <div class="media">
                                        <div class="media-count bg-primary text-white"><span>4</span></div>
                                        <div class="media-body">
                                            <h4 class="font-weight-bold mb-3 text-primary">NATIVE SPEAKER</h4>
                                            <p class="text-muted mb-0">To communicate with your clients from all over the world (Spanish,German, Italian, etc.).
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>


        <section class="pt-6 pt-lg-8">
            <div class="container">
                <div class="row justify-content-center text-center mb-6">
                    <div class="col-xl-7 col-lg-10">
                        <h2 class="font-weight-bold text-primary">We help in</h2>
                    </div>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="50">
                    <div class="col-12">
                        <ul class="nav nav-flat nav-flat-primary" id="featureTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="featureOneTab" data-toggle="tab" href="#featureOne" role="tab">Community <br class="d-none d-sm-block">Management </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="featureTwoTab" data-toggle="tab" href="#featureTwo" role="tab">Content <br class="d-none d-sm-block">Strategy <br
                                        class="d-none d-sm-block">Development</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="featureThreeTab" data-toggle="tab" href="#featureThree" role="tab">Loyality and <br class="d-none d-sm-block">Reputation <br
                                        class="d-none d-sm-block">Management </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="featureFourTab" data-toggle="tab" href="#featureFour" role="tab">Targeted <br class="d-none d-sm-block">Advertising <br
                                        class="d-none d-sm-block">Campaigns </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="featureFiveTab" data-toggle="tab" href="#featureFive" role="tab">Visual <br class="d-none d-sm-block">Design</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="featureSixTab" data-toggle="tab" href="#featureSix" role="tab">Bloggers and <br class="d-none d-sm-block">Opinion <br
                                        class="d-none d-sm-block">Leaders </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="featureSevenTab" data-toggle="tab" href="#featureSeven" role="tab">Viral <br class="d-none d-sm-block">Marketing</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="featureEightTab" data-toggle="tab" href="#featureEight" role="tab">Web <br class="d-none d-sm-block">Design</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="featureNineTab" data-toggle="tab" href="#featureNine" role="tab">Understand <br />the marketing</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bg-light-primary pb-6" data-aos="fade-up" data-aos-delay="50">
                <div class="container">
                    <div class="tab-content pt-5" id="featureTabContent">
                        <div class="tab-pane fade show active" id="featureOne" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6 mb-5 mb-lg-0">
                                    <div class="d-flex align-items-center">
                                            <span>
                                                <svg class="text-primary hw-48 mr-2" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                                            fill="currentColor" opacity="0.3"></path>
                                                        <path
                                                            d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z"
                                                            fill="currentColor"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        <div>
                                            <h6 class="font-weight-bold mb-1">Breath taking dashboard</h6>
                                            <p class="text-muted mb-0">Enhance project transparency with an easy to use API</p>
                                        </div>
                                    </div>


                                    <picture>
                                        <img src="/images/screen/L1-1.png" alt="" class="border rounded w-100 mt-5">
                                    </picture>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                            <span>
                                                <svg class="text-primary hw-48 mr-2" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M4.00246329,12.2004927 L13,14 L13,4.06189375 C16.9463116,4.55399184 20,7.92038235 20,12 C20,16.418278 16.418278,20 12,20 C7.64874861,20 4.10886412,16.5261253 4.00246329,12.2004927 Z"
                                                            fill="currentColor" opacity="0.3"></path>
                                                        <path
                                                            d="M3.0603968,10.0120794 C3.54712466,6.05992157 6.91622084,3 11,3 L11,11.6 L3.0603968,10.0120794 Z"
                                                            fill="currentColor"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        <div>
                                            <h6 class="font-weight-bold mb-1">Breath taking dashboard</h6>
                                            <p class="text-muted mb-0">Enhance project transparency with an easy to use API</p>
                                        </div>
                                    </div>

                                    <picture>
                                        <img src="/images/screen/en/4.png" alt="" class="border rounded w-100 mt-5">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="featureTwo" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6 mb-5= mb-lg-0">
                                    <div class="d-flex align-items-center">
                                            <span>
                                                <svg class="text-primary hw-48 mr-2" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                        <rect fill="currentColor" opacity="0.3" x="2" y="4" width="20"
                                                              height="16" rx="2"></rect>
                                                        <polygon fill="currentColor" opacity="0.3"
                                                                 points="4 20 10.5 11 17 20"></polygon>
                                                        <polygon fill="currentColor" points="11 20 15.5 14 20 20">
                                                        </polygon>
                                                        <circle fill="currentColor" opacity="0.3" cx="18.5" cy="8.5"
                                                                r="1.5"></circle>
                                                    </g>
                                                </svg>
                                            </span>
                                        <div>
                                            <h6 class="font-weight-bold mb-1">Breath taking dashboard</h6>
                                            <p class="text-muted mb-0">Enhance project transparency with an easy to use API</p>
                                        </div>
                                    </div>

                                    <picture>
                                        <img src="/images/screen/L2-1.jpg"" alt=""
                                        class=" border rounded w-100 mt-5">
                                    </picture>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                            <span>
                                                <svg class="text-primary hw-48 mr-2" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M5.5,4 L9.5,4 C10.3284271,4 11,4.67157288 11,5.5 L11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,5.5 C4,4.67157288 4.67157288,4 5.5,4 Z M14.5,16 L18.5,16
                                                C19.3284271,16 20,16.6715729 20,17.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,17.5 C13,16.6715729 13.6715729,16 14.5,16 Z"
                                                            fill="currentColor"></path>
                                                        <path
                                                            d="M5.5,10 L9.5,10 C10.3284271,10 11,10.6715729 11,11.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z
                                                M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,12.5 C20,13.3284271 19.3284271,14 18.5,14 L14.5,14 C13.6715729,14 13,13.3284271 13,12.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z"
                                                            fill="currentColor" opacity="0.3"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        <div>
                                            <h6 class="font-weight-bold mb-1">Breath taking dashboard</h6>
                                            <p class="text-muted mb-0">Enhance project transparency with an easy to
                                                use API</p>
                                        </div>
                                    </div>

                                    <picture>
                                        <img src="/images/screen/en/8.png" alt=""
                                             class=" border rounded w-100 mt-5">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="featureThree" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6 mb-5 mb-lg-0">
                                    <div class="d-flex align-items-center">
                                            <span>
                                                <svg class="text-primary hw-48 mr-2" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M19,11 L21,11 C21.5522847,11 22,11.4477153 22,12 C22,12.5522847 21.5522847,13 21,13 L19,13 C18.4477153,13 18,12.5522847 18,12 C18,11.4477153 18.4477153,11 19,11 Z M3,11 L5,11 C5.55228475,11
                                                6,11.4477153 6,12 C6,12.5522847 5.55228475,13 5,13 L3,13 C2.44771525,13 2,12.5522847 2,12 C2,11.4477153 2.44771525,11 3,11 Z M12,2 C12.5522847,2 13,2.44771525 13,3 L13,5 C13,5.55228475 12.5522847,6 12,6 C11.4477153,6
                                                11,5.55228475 11,5 L11,3 C11,2.44771525 11.4477153,2 12,2 Z M12,18 C12.5522847,18 13,18.4477153 13,19 L13,21 C13,21.5522847 12.5522847,22 12,22 C11.4477153,22 11,21.5522847 11,21 L11,19 C11,18.4477153 11.4477153,18
                                                12,18 Z"
                                                            fill="currentColor" fill-rule="nonzero" opacity="0.3">
                                                        </path>
                                                        <circle fill="currentColor" opacity="0.3" cx="12" cy="12" r="2">
                                                        </circle>
                                                        <path
                                                            d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z M12,19 C8.13400675,19 5,15.8659932 5,12 C5,8.13400675
                                                8.13400675,5 12,5 C15.8659932,5 19,8.13400675 19,12 C19,15.8659932 15.8659932,19 12,19 Z"
                                                            fill="currentColor" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        <div>
                                            <h6 class="font-weight-bold mb-1">Breath taking dashboard</h6>
                                            <p class="text-muted mb-0">Enhance project transparency with an easy to
                                                use API</p>
                                        </div>
                                    </div>

                                    <picture>
                                        <img src="/images/screen/L3-1.jpg" alt=""
                                             class="border rounded w-100 mt-5">
                                    </picture>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                            <span>
                                                <svg class="text-primary hw-48 mr-2" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M7.67514486,18.731359 C9.6803634,17.3851601 11,15.0966889 11,12.5 C11,9.58867922 9.34119765,7.06479249 6.91718054,5.82192739 C8.29918974,4.68360845 10.0697622,4 12,4 C16.418278,4 20,7.581722
                                                20,12 C20,16.418278 16.418278,20 12,20 C10.4066753,20 8.92214267,19.5342055 7.67514486,18.731359 Z"
                                                            fill="currentColor" opacity="0.3"></path>
                                                        <path
                                                            d="M6.39268296,17.7059641 C4.91588435,16.254539 4,14.2342276 4,12 C4,10.0680854 4.68479668,8.29611365 5.82489501,6.91357974 C7.72637261,8.04773008 9,10.1251292 9,12.5 C9,14.6298467 7.97562469,16.5204376
                                                6.39268296,17.7059641 Z"
                                                            fill="currentColor"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        <div>
                                            <h6 class="font-weight-bold mb-1">Breath taking dashboard</h6>
                                            <p class="text-muted mb-0">Enhance project transparency with an easy to
                                                use API</p>
                                        </div>
                                    </div>

                                    <picture>
                                        <img src="/images/screen/L3-2-2.JPG" alt=""
                                             class="border rounded w-100 mt-5">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="featureFour" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6 mb-5 mb-lg-0">
                                    <div class="d-flex align-items-center">
                                            <span>
                                                <svg class="text-primary hw-48 mr-2" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M19,11 L21,11 C21.5522847,11 22,11.4477153 22,12 C22,12.5522847 21.5522847,13 21,13 L19,13 C18.4477153,13 18,12.5522847 18,12 C18,11.4477153 18.4477153,11 19,11 Z M3,11 L5,11 C5.55228475,11
                                                6,11.4477153 6,12 C6,12.5522847 5.55228475,13 5,13 L3,13 C2.44771525,13 2,12.5522847 2,12 C2,11.4477153 2.44771525,11 3,11 Z M12,2 C12.5522847,2 13,2.44771525 13,3 L13,5 C13,5.55228475 12.5522847,6 12,6 C11.4477153,6
                                                11,5.55228475 11,5 L11,3 C11,2.44771525 11.4477153,2 12,2 Z M12,18 C12.5522847,18 13,18.4477153 13,19 L13,21 C13,21.5522847 12.5522847,22 12,22 C11.4477153,22 11,21.5522847 11,21 L11,19 C11,18.4477153 11.4477153,18
                                                12,18 Z"
                                                            fill="currentColor" fill-rule="nonzero" opacity="0.3">
                                                        </path>
                                                        <circle fill="currentColor" opacity="0.3" cx="12" cy="12" r="2">
                                                        </circle>
                                                        <path
                                                            d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z M12,19 C8.13400675,19 5,15.8659932 5,12 C5,8.13400675
                                                8.13400675,5 12,5 C15.8659932,5 19,8.13400675 19,12 C19,15.8659932 15.8659932,19 12,19 Z"
                                                            fill="currentColor" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        <div>
                                            <h6 class="font-weight-bold mb-1">Breath taking dashboard</h6>
                                            <p class="text-muted mb-0">Enhance project transparency with an easy to
                                                use API</p>
                                        </div>
                                    </div>

                                    <picture>
                                        <img src="/images/screen/feature-banner-7.png" alt=""
                                             class="border rounded w-100 mt-5">
                                    </picture>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                            <span>
                                                <svg class="text-primary hw-48 mr-2" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M7.67514486,18.731359 C9.6803634,17.3851601 11,15.0966889 11,12.5 C11,9.58867922 9.34119765,7.06479249 6.91718054,5.82192739 C8.29918974,4.68360845 10.0697622,4 12,4 C16.418278,4 20,7.581722
                                                20,12 C20,16.418278 16.418278,20 12,20 C10.4066753,20 8.92214267,19.5342055 7.67514486,18.731359 Z"
                                                            fill="currentColor" opacity="0.3"></path>
                                                        <path
                                                            d="M6.39268296,17.7059641 C4.91588435,16.254539 4,14.2342276 4,12 C4,10.0680854 4.68479668,8.29611365 5.82489501,6.91357974 C7.72637261,8.04773008 9,10.1251292 9,12.5 C9,14.6298467 7.97562469,16.5204376
                                                6.39268296,17.7059641 Z"
                                                            fill="currentColor"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        <div>
                                            <h6 class="font-weight-bold mb-1">Breath taking dashboard</h6>
                                            <p class="text-muted mb-0">Enhance project transparency with an easy to
                                                use API</p>
                                        </div>
                                    </div>

                                    <picture>
                                        <img src="/images/screen/en/EN_2.JPG" alt=""
                                             class="border rounded w-100 mt-5">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="featureFive" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6 mb-5 mb-lg-0">
                                    <div class="d-flex align-items-center">
                                            <span>
                                                <svg class="text-primary hw-48 mr-2" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M19,11 L21,11 C21.5522847,11 22,11.4477153 22,12 C22,12.5522847 21.5522847,13 21,13 L19,13 C18.4477153,13 18,12.5522847 18,12 C18,11.4477153 18.4477153,11 19,11 Z M3,11 L5,11 C5.55228475,11
                                                6,11.4477153 6,12 C6,12.5522847 5.55228475,13 5,13 L3,13 C2.44771525,13 2,12.5522847 2,12 C2,11.4477153 2.44771525,11 3,11 Z M12,2 C12.5522847,2 13,2.44771525 13,3 L13,5 C13,5.55228475 12.5522847,6 12,6 C11.4477153,6
                                                11,5.55228475 11,5 L11,3 C11,2.44771525 11.4477153,2 12,2 Z M12,18 C12.5522847,18 13,18.4477153 13,19 L13,21 C13,21.5522847 12.5522847,22 12,22 C11.4477153,22 11,21.5522847 11,21 L11,19 C11,18.4477153 11.4477153,18
                                                12,18 Z"
                                                            fill="currentColor" fill-rule="nonzero" opacity="0.3">
                                                        </path>
                                                        <circle fill="currentColor" opacity="0.3" cx="12" cy="12" r="2">
                                                        </circle>
                                                        <path
                                                            d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z M12,19 C8.13400675,19 5,15.8659932 5,12 C5,8.13400675
                                                8.13400675,5 12,5 C15.8659932,5 19,8.13400675 19,12 C19,15.8659932 15.8659932,19 12,19 Z"
                                                            fill="currentColor" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        <div>
                                            <h6 class="font-weight-bold mb-1">Breath taking dashboard</h6>
                                            <p class="text-muted mb-0">Enhance project transparency with an easy to
                                                use API</p>
                                        </div>
                                    </div>

                                    <picture>
                                        <img src="/images/screen/ai-7.svg" alt=""
                                             class="border rounded w-100 mt-5">
                                    </picture>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                            <span>
                                                <svg class="text-primary hw-48 mr-2" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M7.67514486,18.731359 C9.6803634,17.3851601 11,15.0966889 11,12.5 C11,9.58867922 9.34119765,7.06479249 6.91718054,5.82192739 C8.29918974,4.68360845 10.0697622,4 12,4 C16.418278,4 20,7.581722
                                                20,12 C20,16.418278 16.418278,20 12,20 C10.4066753,20 8.92214267,19.5342055 7.67514486,18.731359 Z"
                                                            fill="currentColor" opacity="0.3"></path>
                                                        <path
                                                            d="M6.39268296,17.7059641 C4.91588435,16.254539 4,14.2342276 4,12 C4,10.0680854 4.68479668,8.29611365 5.82489501,6.91357974 C7.72637261,8.04773008 9,10.1251292 9,12.5 C9,14.6298467 7.97562469,16.5204376
                                                6.39268296,17.7059641 Z"
                                                            fill="currentColor"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        <div>
                                            <h6 class="font-weight-bold mb-1">Breath taking dashboard</h6>
                                            <p class="text-muted mb-0">Enhance project transparency with an easy to
                                                use API</p>
                                        </div>
                                    </div>

                                    <picture>
                                        <img src="/images/screen/L5-2-1.jpg" alt=""
                                             class="border rounded w-100 mt-5">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="featureSix" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6 mb-5 mb-lg-0">
                                    <div class="d-flex align-items-center">
                                            <span>
                                                <svg class="text-primary hw-48 mr-2" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M19,11 L21,11 C21.5522847,11 22,11.4477153 22,12 C22,12.5522847 21.5522847,13 21,13 L19,13 C18.4477153,13 18,12.5522847 18,12 C18,11.4477153 18.4477153,11 19,11 Z M3,11 L5,11 C5.55228475,11
                                                6,11.4477153 6,12 C6,12.5522847 5.55228475,13 5,13 L3,13 C2.44771525,13 2,12.5522847 2,12 C2,11.4477153 2.44771525,11 3,11 Z M12,2 C12.5522847,2 13,2.44771525 13,3 L13,5 C13,5.55228475 12.5522847,6 12,6 C11.4477153,6
                                                11,5.55228475 11,5 L11,3 C11,2.44771525 11.4477153,2 12,2 Z M12,18 C12.5522847,18 13,18.4477153 13,19 L13,21 C13,21.5522847 12.5522847,22 12,22 C11.4477153,22 11,21.5522847 11,21 L11,19 C11,18.4477153 11.4477153,18
                                                12,18 Z"
                                                            fill="currentColor" fill-rule="nonzero" opacity="0.3">
                                                        </path>
                                                        <circle fill="currentColor" opacity="0.3" cx="12" cy="12" r="2">
                                                        </circle>
                                                        <path
                                                            d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z M12,19 C8.13400675,19 5,15.8659932 5,12 C5,8.13400675
                                                8.13400675,5 12,5 C15.8659932,5 19,8.13400675 19,12 C19,15.8659932 15.8659932,19 12,19 Z"
                                                            fill="currentColor" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        <div>
                                            <h6 class="font-weight-bold mb-1">Breath taking dashboard</h6>
                                            <p class="text-muted mb-0">Enhance project transparency with an easy to
                                                use API</p>
                                        </div>
                                    </div>

                                    <picture>
                                        <img src="/images/screen/L6-1.jpg" alt=""
                                             class="border rounded w-100 mt-5">
                                    </picture>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                            <span>
                                                <svg class="text-primary hw-48 mr-2" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M7.67514486,18.731359 C9.6803634,17.3851601 11,15.0966889 11,12.5 C11,9.58867922 9.34119765,7.06479249 6.91718054,5.82192739 C8.29918974,4.68360845 10.0697622,4 12,4 C16.418278,4 20,7.581722
                                                20,12 C20,16.418278 16.418278,20 12,20 C10.4066753,20 8.92214267,19.5342055 7.67514486,18.731359 Z"
                                                            fill="currentColor" opacity="0.3"></path>
                                                        <path
                                                            d="M6.39268296,17.7059641 C4.91588435,16.254539 4,14.2342276 4,12 C4,10.0680854 4.68479668,8.29611365 5.82489501,6.91357974 C7.72637261,8.04773008 9,10.1251292 9,12.5 C9,14.6298467 7.97562469,16.5204376
                                                6.39268296,17.7059641 Z"
                                                            fill="currentColor"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        <div>
                                            <h6 class="font-weight-bold mb-1">Breath taking dashboard</h6>
                                            <p class="text-muted mb-0">Enhance project transparency with an easy to
                                                use API</p>
                                        </div>
                                    </div>

                                    <picture>
                                        <img src="/images/screen/en/10.png" alt=""
                                             class="border rounded w-100 mt-5">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="featureSeven" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6 mb-5 mb-lg-0">
                                    <div class="d-flex align-items-center">
                                            <span>
                                                <svg class="text-primary hw-48 mr-2" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M19,11 L21,11 C21.5522847,11 22,11.4477153 22,12 C22,12.5522847 21.5522847,13 21,13 L19,13 C18.4477153,13 18,12.5522847 18,12 C18,11.4477153 18.4477153,11 19,11 Z M3,11 L5,11 C5.55228475,11
                                                6,11.4477153 6,12 C6,12.5522847 5.55228475,13 5,13 L3,13 C2.44771525,13 2,12.5522847 2,12 C2,11.4477153 2.44771525,11 3,11 Z M12,2 C12.5522847,2 13,2.44771525 13,3 L13,5 C13,5.55228475 12.5522847,6 12,6 C11.4477153,6
                                                11,5.55228475 11,5 L11,3 C11,2.44771525 11.4477153,2 12,2 Z M12,18 C12.5522847,18 13,18.4477153 13,19 L13,21 C13,21.5522847 12.5522847,22 12,22 C11.4477153,22 11,21.5522847 11,21 L11,19 C11,18.4477153 11.4477153,18
                                                12,18 Z"
                                                            fill="currentColor" fill-rule="nonzero" opacity="0.3">
                                                        </path>
                                                        <circle fill="currentColor" opacity="0.3" cx="12" cy="12" r="2">
                                                        </circle>
                                                        <path
                                                            d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z M12,19 C8.13400675,19 5,15.8659932 5,12 C5,8.13400675
                                                8.13400675,5 12,5 C15.8659932,5 19,8.13400675 19,12 C19,15.8659932 15.8659932,19 12,19 Z"
                                                            fill="currentColor" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        <div>
                                            <h6 class="font-weight-bold mb-1">Breath taking dashboard</h6>
                                            <p class="text-muted mb-0">Enhance project transparency with an easy to
                                                use API</p>
                                        </div>
                                    </div>

                                    <picture>
                                        <img src="/images/screen/en/1.webp" alt=""
                                             class="border rounded w-100 mt-5">
                                    </picture>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                            <span>
                                                <svg class="text-primary hw-48 mr-2" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M7.67514486,18.731359 C9.6803634,17.3851601 11,15.0966889 11,12.5 C11,9.58867922 9.34119765,7.06479249 6.91718054,5.82192739 C8.29918974,4.68360845 10.0697622,4 12,4 C16.418278,4 20,7.581722
                                                20,12 C20,16.418278 16.418278,20 12,20 C10.4066753,20 8.92214267,19.5342055 7.67514486,18.731359 Z"
                                                            fill="currentColor" opacity="0.3"></path>
                                                        <path
                                                            d="M6.39268296,17.7059641 C4.91588435,16.254539 4,14.2342276 4,12 C4,10.0680854 4.68479668,8.29611365 5.82489501,6.91357974 C7.72637261,8.04773008 9,10.1251292 9,12.5 C9,14.6298467 7.97562469,16.5204376
                                                6.39268296,17.7059641 Z"
                                                            fill="currentColor"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        <div>
                                            <h6 class="font-weight-bold mb-1">Breath taking dashboard</h6>
                                            <p class="text-muted mb-0">Enhance project transparency with an easy to
                                                use API</p>
                                        </div>
                                    </div>

                                    <picture>
                                        <img src="/images/screen/en/3.png" alt=""
                                             class="border rounded w-100 mt-5">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="featureEight" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6 mb-5 mb-lg-0">
                                    <div class="d-flex align-items-center">
                                            <span>
                                                <svg class="text-primary hw-48 mr-2" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M19,11 L21,11 C21.5522847,11 22,11.4477153 22,12 C22,12.5522847 21.5522847,13 21,13 L19,13 C18.4477153,13 18,12.5522847 18,12 C18,11.4477153 18.4477153,11 19,11 Z M3,11 L5,11 C5.55228475,11
                                                6,11.4477153 6,12 C6,12.5522847 5.55228475,13 5,13 L3,13 C2.44771525,13 2,12.5522847 2,12 C2,11.4477153 2.44771525,11 3,11 Z M12,2 C12.5522847,2 13,2.44771525 13,3 L13,5 C13,5.55228475 12.5522847,6 12,6 C11.4477153,6
                                                11,5.55228475 11,5 L11,3 C11,2.44771525 11.4477153,2 12,2 Z M12,18 C12.5522847,18 13,18.4477153 13,19 L13,21 C13,21.5522847 12.5522847,22 12,22 C11.4477153,22 11,21.5522847 11,21 L11,19 C11,18.4477153 11.4477153,18
                                                12,18 Z"
                                                            fill="currentColor" fill-rule="nonzero" opacity="0.3">
                                                        </path>
                                                        <circle fill="currentColor" opacity="0.3" cx="12" cy="12" r="2">
                                                        </circle>
                                                        <path
                                                            d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z M12,19 C8.13400675,19 5,15.8659932 5,12 C5,8.13400675
                                                8.13400675,5 12,5 C15.8659932,5 19,8.13400675 19,12 C19,15.8659932 15.8659932,19 12,19 Z"
                                                            fill="currentColor" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        <div>
                                            <h6 class="font-weight-bold mb-1">Breath taking dashboard</h6>
                                            <p class="text-muted mb-0">Enhance project transparency with an easy to
                                                use API</p>
                                        </div>
                                    </div>

                                    <picture>
                                        <img src="/images/screen/L7-1.jpg" alt=""
                                             class="border rounded w-100 mt-5">
                                    </picture>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                            <span>
                                                <svg class="text-primary hw-48 mr-2" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M7.67514486,18.731359 C9.6803634,17.3851601 11,15.0966889 11,12.5 C11,9.58867922 9.34119765,7.06479249 6.91718054,5.82192739 C8.29918974,4.68360845 10.0697622,4 12,4 C16.418278,4 20,7.581722
                                                20,12 C20,16.418278 16.418278,20 12,20 C10.4066753,20 8.92214267,19.5342055 7.67514486,18.731359 Z"
                                                            fill="currentColor" opacity="0.3"></path>
                                                        <path
                                                            d="M6.39268296,17.7059641 C4.91588435,16.254539 4,14.2342276 4,12 C4,10.0680854 4.68479668,8.29611365 5.82489501,6.91357974 C7.72637261,8.04773008 9,10.1251292 9,12.5 C9,14.6298467 7.97562469,16.5204376
                                                6.39268296,17.7059641 Z"
                                                            fill="currentColor"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        <div>
                                            <h6 class="font-weight-bold mb-1">Breath taking dashboard</h6>
                                            <p class="text-muted mb-0">Enhance project transparency with an easy to
                                                use API</p>
                                        </div>
                                    </div>

                                    <picture>
                                        <img src="/images/screen/L7-2.JPG" alt=""
                                             class="border rounded w-100 mt-5">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="featureNine" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6 mb-5 mb-lg-0">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <!-- <h6 class="font-weight-bold mb-1">Breath taking dashboard</h6> -->
                                            <p class="text-muted mb-0">You are a talented designer and you don't
                                                have to understand the intricacies of marketing. But sometimes it is
                                                important that someone in simple words and examples, explains what's
                                                what. This is what we are doing in consultations. At the same time,
                                                we tell you about the latest marketing trends, generate ideas that
                                                you miss so much, help you draw up budgets and business plans, and
                                                set up unit economics.</p>
                                        </div>
                                    </div>

                                    <picture>
                                        <img src="/images/screen/en/6.png" alt=""
                                             class="border rounded w-100 mt-5">
                                    </picture>
                                </div>
                                <div class="col-lg-6">
                                    <div class="align-items-center">
                                        <div class="card light-shadow p-4 p-lg-6" data-aos="zoom-in">
                                            <div class="lign-items-center">
                                                <div class="col mb-4 mb-lg-0">
                                                    <!-- <span class="text-primary">ВКонтакте</span> -->
                                                    <h4 class="font-weight-bold">Audit of the marketing department
                                                    </h4>
                                                    <div class="row">
                                                        <p class="col text-dark mb-0">
                                                            It's like a feasibility study, only better! We check all
                                                            the components and assemblies of your marketing machine,
                                                            throw away the excess, repair the faulty one, lubricate
                                                            the working one, gently wipe it with a cloth and run it
                                                            at full power. If everything is really bad, we can take
                                                            over all your marketing, for an amount 10 times less
                                                            than your current marketing budget.
                                                        </p>
                                                        <p class="col text-dark mb-0">
                                                            What we check:<br />
                                                            — The quality of media-plans and marketing
                                                            strategies;<br />
                                                            — Justification and rationality of spending
                                                            budgets;<br />
                                                            — Optimality of the channels and instruments used;<br />
                                                            — The quality of reporting and analytics;<br />
                                                            — Quality of marketing materials<br />
                                                            — Assessment of the quality of work, the validity of the
                                                            choice of services and the quality of work with
                                                            contractors;<br />
                                                            <br />
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <a href="#contact-us"
                                                       class="btn btn-primary waves-effect d-block d-md-inline-block"
                                                       role="button">Заказать аудит</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-primary">
            <div class="container">
                <div class="row text-center text-white">
                    <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 justify-content-between">
                        <div>
                            <h2>Full <br>replacement <br>of marketing <br>department</h2>
                        </div>
                        <div>
                            <p style="font-size: 17px;">
                                We are ready to take over all the work of the marketing department. For this money,
                                you get a marketer, advertising and targeting specialist, copywriter and designer.
                                Each of these specialists costs 2 times more on the market, and we have hired the
                                best of the best.
                            </p>
                        </div>
                        <div class="row justify-content-center align-items-center text-center mb-3">
                            <div class="">
                                <a href="#contact-us" class="text-center btn btn-danger d-block d-md-inline-block">
                                    <h2>Basic rate <br />
                                        1000 euro/month
                                    </h2>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div>
                </div>
                <!-- <div class="row col-lg-4">
                    <a href="#" class="btn btn-danger btn-block">Базовый тариф 29 ТЫС.РУБ/МЕС.</a>
                </div> -->
            </div>
        </section>


        <!-- Shape -->
        <!-- <div class="text-light-primary">
            <svg class="text-light-primary rotate-180" preserveAspectRatio="none"
                viewBox="0 0 2000 150" xmlns="http://www.w3.org/2000/svg">
                <polygon fill="currentColor" points="2000 0 2000 150 0 150"></polygon>
            </svg>
        </div> -->

        <!-- Reviews & UGC -->
        <section class="py-6">
            <div class="container">
                <div class="row justify-content-center align-items-center text-center mb-5">
                    <div class="col-xl-7 col-lg-10">
                        <h2 class="font-weight-bold text-primary">How we work</h2>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center mb-5">
                    <div class="col-lg-6" data-aos="fade-up">
                        <img class="img-fluid" src="/images/screen/L3-1.png" alt="">
                    </div>

                    <div class="col-lg-5">
                        <div class="media flex-column flex-sm-row mb-5" data-aos="fade-up" data-aos-delay="50">
                            <div class="mb-3 mb-sm-0 mr-2 mr-sm-4 text-primary">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.1528 5.55553C10.2037 5.65919 10.2373 5.77021 10.2524 5.88434L10.5308 10.0243L10.669 12.1051C10.6705 12.3191 10.704 12.5317 10.7687 12.736C10.9356 13.1326 11.3372 13.3846 11.7741 13.367L18.4313 12.9315C18.7196
                                                12.9268 18.998 13.0346 19.2052 13.2313C19.3779 13.3952 19.4894 13.6096 19.5246 13.8402L19.5364 13.9802C19.2609 17.7949 16.4592 20.9767 12.6524 21.798C8.84555 22.6193 4.94186 20.8843 3.06071 17.5349C2.51839 16.5618
                                                2.17965 15.4923 2.06438 14.389C2.01623 14.0624 1.99503 13.7325 2.00098 13.4025C1.99503 9.31273 4.90747 5.77696 8.98433 4.92457C9.47501 4.84816 9.95603 5.10792 10.1528 5.55553Z"
                                        fill="currentColor" />
                                    <path opacity="0.4"
                                          d="M12.87 2.00082C17.4299 2.11683 21.2623 5.39579 22 9.81229L21.993 9.84488L21.9728 9.89227L21.9756 10.0224C21.9652 10.1947 21.8986 10.3605 21.784 10.4945C21.6645 10.634 21.5013 10.729 21.3216 10.7659L21.212
                                                10.7809L13.5312 11.2786C13.2757 11.3038 13.0213 11.2214 12.8314 11.052C12.673 10.9107 12.5718 10.7201 12.5432 10.5147L12.0277 2.84506C12.0187 2.81913 12.0187 2.79102 12.0277 2.76508C12.0347 2.55367 12.1278 2.35384
                                                12.2861 2.21023C12.4443 2.06662 12.6547 1.9912 12.87 2.00082Z"
                                          fill="currentColor" />
                                </svg>
                            </div>

                            <div class="media-body">
                                <h6 class="font-weight-bold text-primary">SIMPLIFYING YOUR LIFE</h6>
                                <p class="text-muted font-size-sm mb-0">We will not only put your social communities
                                    and mailing lists in order, but also solve the problems which you never got
                                    around to. Your life will become easier when the focus remains on issues related
                                    to the development of your fashion brand, and not on the selection of pictures
                                    and posting in social networks.</p>
                            </div>
                        </div>
                        <div class="media flex-column flex-sm-row mb-5" data-aos="fade-up" data-aos-delay="100">
                            <div class="mb-3 mb-sm-0 mr-2 mr-sm-4 text-primary">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                          d="M16.6756 2H7.33333C3.92889 2 2 3.92889 2 7.33333V16.6667C2 20.0711 3.92889 22 7.33333 22H16.6756C20.08 22 22 20.0711 22 16.6667V7.33333C22 3.92889 20.08 2 16.6756 2Z"
                                          fill="currentColor" />
                                    <path
                                        d="M7.36872 9.36898C6.91539 9.36898 6.54205 9.74231 6.54205 10.2045V17.0756C6.54205 17.529 6.91539 17.9023 7.36872 17.9023C7.83094 17.9023 8.20428 17.529 8.20428 17.0756V10.2045C8.20428 9.74231 7.83094 9.36898
                                                7.36872 9.36898Z"
                                        fill="currentColor" />
                                    <path
                                        d="M12.0354 6.08898C11.582 6.08898 11.2087 6.46231 11.2087 6.92453V17.0756C11.2087 17.529 11.582 17.9023 12.0354 17.9023C12.4976 17.9023 12.8709 17.529 12.8709 17.0756V6.92453C12.8709 6.46231 12.4976 6.08898
                                                12.0354 6.08898Z"
                                        fill="currentColor" />
                                    <path
                                        d="M16.6399 12.9956C16.1777 12.9956 15.8044 13.369 15.8044 13.8312V17.0756C15.8044 17.529 16.1777 17.9023 16.631 17.9023C17.0932 17.9023 17.4666 17.529 17.4666 17.0756V13.8312C17.4666 13.369 17.0932 12.9956
                                                16.6399 12.9956Z"
                                        fill="currentColor" />
                                </svg>
                            </div>

                            <div class="media-body">
                                <h6 class="font-weight-bold text-primary">WE SAVE YOUR TIME</h6>
                                <p class="text-muted font-size-sm mb-0">
                                    We work completely autonomously and we don't bother you over nothing. We run the
                                    topics of the headings and the content plan past you and finalize them with you
                                    2 weeks in advance. You have access to all project documentation online and see
                                    all published and scheduled posts, and you can check it at any time.
                                </p>
                            </div>
                        </div>
                        <div class="media flex-column flex-sm-row mb-5" data-aos="fade-up" data-aos-delay="150">
                            <div class="mb-3 mb-sm-0 mr-2 mr-sm-4 text-primary">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M3 16.87V9.257H21V16.931C21 20.07 19.0241 22 15.8628 22H8.12733C4.99561 22 3 20.03 3 16.87ZM7.95938 14.41C7.50494 14.431 7.12953 14.07 7.10977 13.611C7.10977 13.151 7.46542 12.771 7.91987 12.75C8.36443
                                                12.75 8.72997 13.101 8.73985 13.55C8.7596 14.011 8.40395 14.391 7.95938 14.41ZM12.0198 14.41C11.5653 14.431 11.1899 14.07 11.1701 13.611C11.1701 13.151 11.5258 12.771 11.9802 12.75C12.4248 12.75 12.7903 13.101
                                                12.8002 13.55C12.82 14.011 12.4643 14.391 12.0198 14.41ZM16.0505 18.09C15.596 18.08 15.2305 17.7 15.2305 17.24C15.2206 16.78 15.5862 16.401 16.0406 16.391H16.0505C16.5148 16.391 16.8902 16.771 16.8902 17.24C16.8902
                                                17.71 16.5148 18.09 16.0505 18.09ZM11.1701 17.24C11.1899 17.7 11.5653 18.061 12.0198 18.04C12.4643 18.021 12.82 17.641 12.8002 17.181C12.7903 16.731 12.4248 16.38 11.9802 16.38C11.5258 16.401 11.1701 16.78 11.1701
                                                17.24ZM7.09989 17.24C7.11965 17.7 7.49506 18.061 7.94951 18.04C8.39407 18.021 8.74973 17.641 8.72997 17.181C8.72009 16.731 8.35456 16.38 7.90999 16.38C7.45554 16.401 7.09989 16.78 7.09989 17.24ZM15.2404 13.601C15.2404
                                                13.141 15.596 12.771 16.0505 12.761C16.4951 12.761 16.8507 13.12 16.8705 13.561C16.8804 14.021 16.5247 14.401 16.0801 14.41C15.6257 14.42 15.2503 14.07 15.2404 13.611V13.601Z"
                                          fill="currentColor" />
                                    <path opacity="0.4"
                                          d="M3.00336 9.2569C3.0162 8.6699 3.0656 7.5049 3.15846 7.1299C3.63267 5.0209 5.24298 3.6809 7.54485 3.4899H16.4559C18.738 3.6909 20.3681 5.0399 20.8423 7.1299C20.9342 7.4949 20.9836 8.6689 20.9964 9.2569H3.00336Z"
                                          fill="currentColor" />
                                    <path
                                        d="M8.30486 6.59C8.73955 6.59 9.06556 6.261 9.06556 5.82V2.771C9.06556 2.33 8.73955 2 8.30486 2C7.87017 2 7.54416 2.33 7.54416 2.771V5.82C7.54416 6.261 7.87017 6.59 8.30486 6.59Z"
                                        fill="currentColor" />
                                    <path
                                        d="M15.6949 6.59C16.1197 6.59 16.4556 6.261 16.4556 5.82V2.771C16.4556 2.33 16.1197 2 15.6949 2C15.2603 2 14.9342 2.33 14.9342 2.771V5.82C14.9342 6.261 15.2603 6.59 15.6949 6.59Z"
                                        fill="currentColor" />
                                </svg>
                            </div>

                            <div class="media-body">
                                <h6 class="font-weight-bold text-primary">WE TAKE THE HINT</h6>
                                <p class="text-muted font-size-sm mb-0">We easily understand what you want, without
                                    unnecessary technical specifications and long zoom meetings. We launch the
                                    project in 1 day, then it will take 5 minutes a week for you to view and approve
                                    the content, and see a report with statistics on sales and Revenue growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5 order-2 order-lg-1">
                        <div class="media flex-column flex-sm-row mb-5" data-aos="fade-up" data-aos-delay="50">
                            <div class="mb-3 mb-sm-0 mr-2 mr-sm-4 text-primary">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M21.9964 8.37513H17.7618C15.7911 8.37859 14.1947 9.93514 14.1911 11.8566C14.1884 13.7823 15.7867 15.3458 17.7618 15.3484H22V15.6543C22 19.0136 19.9636 21 16.5173 21H7.48356C4.03644 21 2 19.0136 2 15.6543V8.33786C2
                                                4.97862 4.03644 3 7.48356 3H16.5138C19.96 3 21.9964 4.97862 21.9964 8.33786V8.37513ZM6.73956 8.36733H12.3796H12.3831H12.3902C12.8124 8.36559 13.1538 8.03019 13.152 7.61765C13.1502 7.20598 12.8053 6.87318 12.3831
                                                6.87491H6.73956C6.32 6.87664 5.97956 7.20858 5.97778 7.61852C5.976 8.03019 6.31733 8.36559 6.73956 8.36733Z"
                                          fill="currentColor" />
                                    <path opacity="0.4"
                                          d="M16.0374 12.2967C16.2465 13.2479 17.0805 13.9171 18.0326 13.8997H21.2825C21.6787 13.8997 22 13.5716 22 13.166V10.6345C21.9991 10.2298 21.6787 9.90087 21.2825 9.9H17.9561C16.8731 9.90348 15.9983 10.8024
                                                16 11.9103C16 12.0399 16.0128 12.1696 16.0374 12.2967Z"
                                          fill="currentColor" />
                                    <circle cx="18" cy="11.9" r="1" fill="currentColor" />
                                </svg>
                            </div>

                            <div class="media-body">
                                <h6 class="font-weight-bold text-primary">WE KNOW YOUR AUDIENCE</h6>
                                <p class="text-muted font-size-sm mb-0">Even if it is a 52-year-old bachelor
                                    vegetarian, collecting stamps, visiting only a bakery around the corner 2 times
                                    a week. We will find out for you what kind of buns he likes, what brands are not
                                    yet in the collection, on what days he goes to the bakery and we will offer him
                                    exactly what he needs from your assortment. Yes, <span
                                        class="text-primary font-weight-semibold">it sounds almost like a fantasy,
                                            but we can predict with an accuracy of 94% whether he will make a
                                            purchase!</span>.</p>
                            </div>
                        </div>
                        <div class="media flex-column flex-sm-row mb-5" data-aos="fade-up" data-aos-delay="100">
                            <div class="mb-3 mb-sm-0 mr-2 mr-sm-4 text-primary">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                          d="M11.9912 18.6215L5.49945 21.8641C5.00921 22.1302 4.39768 21.9525 4.12348 21.4643C4.0434 21.3108 4.00106 21.1402 4 20.9668V13.7088C4 14.4284 4.40573 14.8726 5.47299 15.3701L11.9912 18.6215Z"
                                          fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M8.89526 2H15.0695C17.7773 2 19.9735 3.06605 20 5.79337V20.9668C19.9989 21.1374 19.9565 21.3051 19.8765 21.4554C19.7479 21.7007 19.5259 21.8827 19.2615 21.9598C18.997 22.0368 18.7128 22.0023 18.4741 21.8641L11.9912
                                                18.6215L5.47299 15.3701C4.40573 14.8726 4 14.4284 4 13.7088V5.79337C4 3.06605 6.19625 2 8.89526 2ZM8.22492 9.62227H15.7486C16.1822 9.62227 16.5336 9.26828 16.5336 8.83162C16.5336 8.39495 16.1822 8.04096 15.7486
                                                8.04096H8.22492C7.79137 8.04096 7.43991 8.39495 7.43991 8.83162C7.43991 9.26828 7.79137 9.62227 8.22492 9.62227Z"
                                          fill="currentColor" />
                                </svg>
                            </div>

                            <div class="media-body">
                                <h6 class="font-weight-bold text-primary">NO SMOKE AND MIRRORS</h6>
                                <p class="text-muted font-size-sm mb-0">We come from IT and have strong data-science
                                    background. Only statistics and analytics, only hardcore, common sense and
                                    specific numbers.</p>
                            </div>
                        </div>
                        <div class="media flex-column flex-sm-row mb-5" data-aos="fade-up" data-aos-delay="150">
                            <div class="mb-3 mb-sm-0 mr-2 mr-sm-4 text-primary">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                          d="M21.9999 15.9402C21.9999 18.7302 19.7599 20.9902 16.9699 21.0002H16.9599H7.04989C4.26989 21.0002 1.99989 18.7502 1.99989 15.9602V15.9502C1.99989 15.9502 2.00589 11.5242 2.01389 9.2982C2.01489 8.8802 2.49489
                                                8.6462 2.82189 8.9062C5.19789 10.7912 9.44689 14.2282 9.49989 14.2732C10.2099 14.8422 11.1099 15.1632 12.0299 15.1632C12.9499 15.1632 13.8499 14.8422 14.5599 14.2622C14.6129 14.2272 18.7669 10.8932 21.1789 8.9772C21.5069
                                                8.7162 21.9889 8.9502 21.9899 9.3672C21.9999 11.5762 21.9999 15.9402 21.9999 15.9402Z"
                                          fill="currentColor" />
                                    <path
                                        d="M21.476 5.6736C20.61 4.0416 18.906 2.9996 17.03 2.9996H7.05001C5.17401 2.9996 3.47001 4.0416 2.60401 5.6736C2.41001 6.0386 2.50201 6.4936 2.82501 6.7516L10.25 12.6906C10.77 13.1106 11.4 13.3196 12.03 13.3196C12.034
                                                13.3196 12.037 13.3196 12.04 13.3196C12.043 13.3196 12.047 13.3196 12.05 13.3196C12.68 13.3196 13.31 13.1106 13.83 12.6906L21.255 6.7516C21.578 6.4936 21.67 6.0386 21.476 5.6736Z"
                                        fill="currentColor" />
                                </svg>
                            </div>

                            <div class="media-body">
                                <h6 class="font-weight-bold text-primary">FULL REMOTE</h6>
                                <p class="text-muted font-size-sm mb-0">This means that we are available to you from
                                    anywhere. You can go on vacation or travel around the world and be confident
                                    that marketing is running like clockwork. For confidence, we send reports with
                                    the results every week. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2 mb-5 mb-lg-0">
                        <img class="img-fluid" data-aos="fade-up" src="/images/screen/L3-21.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- Shape -->
        <div class="text-light-primary rotate-180">
            <svg preserveAspectRatio="none" viewBox="0 0 2000 150" xmlns="http://www.w3.org/2000/svg">
                <polygon fill="currentColor" points="0 0, 0 150, 2000 0"></polygon>
            </svg>
        </div>

        <section class="py-6 bg-light-primary">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-xl-7 col-lg-10">
                        <h2 class="font-weight-bold text-primary">Turning creativity into business</h2>
                        <p class="text-muted mb-0">We set up sales and mailing channels, optimize the sales funnel
                            and return of abandoned carts. We set up retargeting, find those who viewed products on
                            the site and make individual offers. <span class="text-primary font-weight-semibold">AND
                                    YOU’LL START EARNING MORE!</span>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-lg-5 order-2 order-lg-1">
                        <ul class="nav nav-boxed flex-column mx-xxl-4" role="tablist">
                            <li class="nav-item w-100" role="presentation" data-aos="fade-up">
                                <a class="nav-link text-reset active" data-toggle="tab" href="#pane-1" role="tab">
                                    <div class="d-flex align-items-center align-items-lg-start">
                                        <svg class="text-primary hw-30 mr-3 mt-1" viewBox="0 0 24 24" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path
                                                    d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5
                                                7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305
                                                18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                    fill="currentColor" opacity="0.3"></path>
                                            </g>
                                        </svg>

                                        <div>
                                            <h6 class="line-height-16 text-primary">Identify</h6>
                                            <p class="font-size-sm mb-0">We collect and analyze behavioral data,
                                                both from your website as well as from various other sources.</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item w-100" role="presentation" data-aos="fade-up" data-aos-delay="50">
                                <a class="nav-link text-reset" data-toggle="tab" href="#pane-2" role="tab">
                                    <div class="d-flex align-items-center align-items-lg-start">
                                        <svg class="text-primary hw-30 mr-3 mt-1" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 7.96875C14.2005 7.96875 15.9844 6.18488 15.9844 3.98438C15.9844 1.78387 14.2005 0 12 0C9.79949 0 8.01562 1.78387 8.01562 3.98438C8.01562 6.18488 9.79949 7.96875 12 7.96875Z"
                                                fill="#3B82F6" />
                                            <path
                                                d="M14.9278 8.50848C14.0842 9.05631 13.0786 9.37496 12 9.37496C10.9214 9.37496 9.91584 9.05631 9.07223 8.50848C8.13966 8.86487 7.275 9.39067 6.52317 10.0655L12 12.1193L17.4768 10.0655C16.725 9.39067
                                                15.8603 8.86483 14.9278 8.50848Z"
                                                fill="#3B82F6" />
                                            <path
                                                d="M20.4375 14.5312H19.9688C19.5804 14.5312 19.2656 14.8461 19.2656 15.2344V17.1094C19.2656 17.4977 19.5804 17.8125 19.9688 17.8125H20.4375C21.3436 17.8125 22.0781 17.078 22.0781 16.1719C22.0781 15.2658
                                                21.3436 14.5312 20.4375 14.5312Z"
                                                fill="#3B82F6" />
                                            <path
                                                d="M4.0995 10.9816C3.90994 11.113 3.79688 11.3289 3.79688 11.5596V13.125H4.03125C5.19436 13.125 6.14062 14.0712 6.14062 15.2343V17.1093C6.14062 18.2724 5.19436 19.2187 4.03125 19.2187H3.79688V20.7002C3.79688
                                                20.9933 3.9787 21.2557 4.25311 21.3586L11.2969 24V13.3575L4.74689 10.9012C4.53094 10.8202 4.28902 10.8502 4.0995 10.9816V10.9816Z"
                                                fill="#3B82F6" />
                                            <path
                                                d="M17.8594 17.1093V15.2343C17.8594 14.0712 18.8056 13.125 19.9688 13.125H20.2031V11.5596C20.2031 11.3289 20.0901 11.113 19.9005 10.9816C19.7109 10.8502 19.469 10.8202 19.2531 10.9012L12.7031 13.3575V24L19.7469
                                                21.3586C20.0213 21.2557 20.2031 20.9933 20.2031 20.7002V19.2187H19.9688C18.8056 19.2187 17.8594 18.2724 17.8594 17.1093V17.1093Z"
                                                fill="#3B82F6" />
                                            <path
                                                d="M4.73438 17.1094V15.2344C4.73438 14.8461 4.41956 14.5312 4.03125 14.5312H3.5625C2.65641 14.5312 1.92188 15.2658 1.92188 16.1719C1.92188 17.078 2.65641 17.8125 3.5625 17.8125H4.03125C4.41956 17.8125
                                                4.73438 17.4977 4.73438 17.1094Z"
                                                fill="#3B82F6" />
                                        </svg>

                                        <div>
                                            <h6 class="line-height-16 text-primary">Explore
                                            </h6>
                                            <p class="font-size-sm mb-0">We group each user’s data into an
                                                integrated profile according to channels, behavior and purchase
                                                history.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item w-100" role="presentation" data-aos="fade-up" data-aos-delay="100">
                                <a class="nav-link text-reset" data-toggle="tab" href="#pane-3" role="tab">
                                    <div class="d-flex align-items-center align-items-lg-start">
                                        <svg class="text-primary hw-30 mr-3 mt-1" viewBox="0 0 24 24" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path
                                                    d="M10.1528 5.55553C10.2037 5.65919 10.2373 5.77021 10.2524 5.88434L10.5308 10.0243L10.669 12.1051C10.6705 12.3191 10.704 12.5317 10.7687 12.736C10.9356 13.1326 11.3372 13.3846 11.7741 13.367L18.4313
                                                12.9315C18.7196 12.9268 18.998 13.0346 19.2052 13.2313C19.3779 13.3952 19.4894 13.6096 19.5246 13.8402L19.5364 13.9802C19.2609 17.7949 16.4592 20.9767 12.6524 21.798C8.84555 22.6193 4.94186 20.8843 3.06071 17.5349C2.51839
                                                16.5618 2.17965 15.4923 2.06438 14.389C2.01623 14.0624 1.99503 13.7325 2.00098 13.4025C1.99503 9.31273 4.90747 5.77696 8.98433 4.92457C9.47501 4.84816 9.95603 5.10792 10.1528 5.55553Z"
                                                    fill="currentColor" />
                                                <path opacity="0.4"
                                                      d="M12.87 2.00082C17.4299 2.11683 21.2623 5.39579 22 9.81229L21.993 9.84488L21.9728 9.89227L21.9756 10.0224C21.9652 10.1947 21.8986 10.3605 21.784 10.4945C21.6645 10.634 21.5013 10.729 21.3216
                                                10.7659L21.212 10.7809L13.5312 11.2786C13.2757 11.3038 13.0213 11.2214 12.8314 11.052C12.673 10.9107 12.5718 10.7201 12.5432 10.5147L12.0277 2.84506C12.0187 2.81913 12.0187 2.79102 12.0277 2.76508C12.0347 2.55367
                                                12.1278 2.35384 12.2861 2.21023C12.4443 2.06662 12.6547 1.9912 12.87 2.00082Z"
                                                      fill="currentColor" />
                                            </g>
                                        </svg>
                                        <div>
                                            <h6 class="line-height-16 text-primary">Segmenting</h6>
                                            <p class="font-size-sm mb-0">We create dynamic segments based on
                                                behavioral patterns.</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item w-100" role="presentation" data-aos="fade-up" data-aos-delay="150">
                                <a class="nav-link text-reset" data-toggle="tab" href="#pane-4" role="tab">
                                    <div class="d-flex align-items-center align-items-lg-start">
                                        <svg class="text-primary hw-30 mr-3 mt-1" viewBox="0 0 24 24" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path
                                                    d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5
                                                7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305
                                                18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                    fill="currentColor" opacity="0.3"></path>
                                            </g>
                                        </svg>
                                        <div>
                                            <h6 class="line-height-16 text-primary">Personalize
                                            </h6>
                                            <p class="font-size-sm mb-0">We create personalized campaigns using
                                                web-forms, triggered and one-time bulk emails, push notifications
                                                and live chat.</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item w-100" role="presentation" data-aos="fade-up" data-aos-delay="150">
                                <a class="nav-link text-reset" data-toggle="tab" href="#pane-5" role="tab">
                                    <div class="d-flex align-items-center align-items-lg-start">

                                        <svg class="text-primary hw-30 mr-3 mt-1" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                                <path
                                                    d="M16.6071 14.2415C19.488 10.1734 18.5245 4.54021 14.4563 1.65996C10.3882 -1.22029 4.755 -0.257453 1.87475 3.81138C-1.0055 7.87952 -0.0426628 13.512 4.02617 16.3923C6.92982 18.448 10.7688 18.6063
                                                13.8314 16.7976L20.4859 23.4122C21.2044 24.1686 22.3999 24.1989 23.1563 23.4804C23.9126 22.7625 23.9429 21.5671 23.2251 20.8107C23.2024 20.7866 23.1804 20.7646 23.1563 20.7419L16.6071 14.2415ZM9.2354 14.8582C6.02066
                                                14.8589 3.41433 12.2546 3.41226 9.03988C3.41157 5.82514 6.01585 3.21881 9.23127 3.21743C12.4419 3.21606 15.0468 5.8162 15.053 9.0268C15.0585 12.2422 12.4556 14.8527 9.23952 14.8582C9.23815 14.8582 9.23746 14.8582
                                                9.2354 14.8582Z"
                                                    fill="#3B82F6" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>


                                        <div>
                                            <h6 class="line-height-16 text-primary">Analize
                                            </h6>
                                            <p class="font-size-sm mb-0">We analyze the results in real time and
                                                upload the data into valuable reports.</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item w-100" role="presentation" data-aos="fade-up" data-aos-delay="150">
                                <a class="nav-link text-reset" data-toggle="tab" href="#pane-6" role="tab">
                                    <div class="d-flex align-items-center align-items-lg-start">
                                        <svg class="text-primary hw-30 mr-3 mt-1" viewBox="0 0 24 24" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                <path
                                                    d="M22,15 L22,19 C22,20.1045695 21.1045695,21 20,21 L8,21 C5.790861,21 4,19.209139 4,17 C4,14.790861 5.790861,13 8,13 L20,13 C21.1045695,13 22,13.8954305 22,15 Z M7,19 C8.1045695,19 9,18.1045695
                                                9,17 C9,15.8954305 8.1045695,15 7,15 C5.8954305,15 5,15.8954305 5,17 C5,18.1045695 5.8954305,19 7,19 Z"
                                                    fill="currentColor" opacity="0.3"></path>
                                                <path
                                                    d="M15.5421357,5.69999981 L18.3705628,8.52842693 C19.1516114,9.30947552 19.1516114,10.5758055 18.3705628,11.3568541 L9.88528147,19.8421354 C8.3231843,21.4042326 5.79052439,21.4042326 4.22842722,19.8421354
                                                C2.66633005,18.2800383 2.66633005,15.7473784 4.22842722,14.1852812 L12.7137086,5.69999981 C13.4947572,4.91895123 14.7610871,4.91895123 15.5421357,5.69999981 Z M7,19 C8.1045695,19 9,18.1045695 9,17 C9,15.8954305
                                                8.1045695,15 7,15 C5.8954305,15 5,15.8954305 5,17 C5,18.1045695 5.8954305,19 7,19 Z"
                                                    fill="currentColor" opacity="0.3"></path>
                                                <path
                                                    d="M5,3 L9,3 C10.1045695,3 11,3.8954305 11,5 L11,17 C11,19.209139 9.209139,21 7,21 C4.790861,21 3,19.209139 3,17 L3,5 C3,3.8954305 3.8954305,3 5,3 Z M7,19 C8.1045695,19 9,18.1045695 9,17 C9,15.8954305
                                                8.1045695,15 7,15 C5.8954305,15 5,15.8954305 5,17 C5,18.1045695 5.8954305,19 7,19 Z"
                                                    fill="currentColor"></path>
                                            </g>
                                        </svg>
                                        <div>
                                            <h6 class="line-height-16 text-primary">Report
                                            </h6>
                                            <p class="font-size-sm mb-0">We measure the effect in money. With our
                                                current clients, we do not even discuss Likes, Reposts and other
                                               "indicators" that SMM beginers like to mesure. We generate reports
                                                with figures of growth the REVENUE.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xl-8 col-lg-7 order-1 order-lg-2 mb-5 mb-lg-0">
                        <div class="tab-content" data-aos="fade-up">
                            <div class="tab-pane fade active show" id="pane-1" role="tabpanel">
                                <picture>
                                    <img src="/images/screen/en/EN_1.JPG" class="img-fluid rounded border">
                                </picture>
                            </div>
                            <div class="tab-pane fade" id="pane-2" role="tabpanel">
                                <picture>
                                    <img src="/images/screen/en/EN_3.jpg" alt="" class="img-fluid rounded border">
                                </picture>
                            </div>
                            <div class="tab-pane fade" id="pane-3" role="tabpanel">
                                <picture>
                                    <img src="/images/screen/en/EN_2.JPG" alt="" class="img-fluid rounded border">
                                </picture>
                            </div>
                            <div class="tab-pane fade" id="pane-4" role="tabpanel">
                                <picture>
                                    <img src="/images/screen/en/9.png" alt="" class="img-fluid rounded border">
                                </picture>
                            </div>
                            <div class="tab-pane fade" id="pane-5" role="tabpanel">
                                <picture>
                                    <img src="/images/screen/voronka2.JPG" alt="" class="img-fluid rounded border">
                                </picture>
                            </div>
                            <div class="tab-pane fade" id="pane-6" role="tabpanel">
                                <picture>
                                    <img src="/images/screen/voronka.JPG" alt="" class="img-fluid rounded border">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing -->
        <section class="py-6">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <h2 class="font-weight-bold mb-4 text-primary">Reasonable prices</h2>
                        <p class="mb-4">We believe that a good SMM shouldn't cost half a million. Based on this
                            simple idea, we form our prices: we calculate our costs and offer you quality service.
                        </p>
                    </div>
                    <div class="col-lg-7">
                        <div class="row align-items-center no-gutters">
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h3 class=" font-weight-semibold mb-0">5 - 30 <br />thous. euros / month
                                            </h2>
                                            <!-- <div class="d-flex align-items-center py-2">
                                            <span>Такой ценник мы выставляли клиентам работая в топовых
                                                агентствах</span>
                                        </div>
                                        <div class="d-flex align-items-center py-2">
                                            <span>Сюда входят затраты на содержания дорогого офиса, штата
                                                вспомогательных сотрудников, конференции, поездки, бизнес-ланчи и
                                                т.д.


                                                Ну вы понимаете за чей счет банкет.
                                            </span>
                                        </div> -->
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex align-items-center py-2">
                                                    <!-- <span class="check-true m-0 mr-2"></span> -->
                                                    <span style="font-size: 17px;">We put up such a price tag to
                                                            clients working in top agencies.</span>
                                                </li>
                                                <li class="d-flex align-items-center py-2">
                                                        <span style="font-style: italic !important;"
                                                              class="text-primary">This includes the costs of maintaining
                                                            an expensive office, support staff, conferences, travel,
                                                            business lunches, etc.<br />
                                                            Well, you understand whose treat it is.
                                                        </span>
                                                </li>
                                            </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-up">
                                <div class="card bg-primary text-center text-white border-0">
                                    <div class="card-body">
                                        <h3 class="font-weight-bold mb-0">400 - 500 <br />euros / month</h3>

                                        <!-- - стоимость рассчитанная исходя из наших реальных затрат. Мы не торгуем
                                        оружием, а закладываем нормальные 20-30 % рентабельности, как в любом другом
                                        бизнесе. Мы можем себе это позволить, т.к. клиент остается с нами надолго.
                                        Сюда входит живое ведение и наполнение ваших сообществ интересным и
                                        качественным контентом. -->

                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex align-items-center py-2">
                                                <!-- <span class="check-true m-0 mr-2"></span> -->
                                                <span style="font-size: 17px;">The cost calculated based on our real
                                                        costs. We do this way, because the clients stay with us for a
                                                        long time.</span>
                                            </li>
                                            <li class="d-flex align-items-center py-2">
                                                    <span style="font-style: italic !important;">This includes live
                                                        communication and filling your social media communities with
                                                        interesting and quality content.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h3 class="font-weight-bold mb-0">100-200 <br />euros</h3>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex align-items-center py-2">
                                                    <span style="font-size: 17px;">Such a price tag is set by craftsmen
                                                        for surging bots into your community.
                                                    </span>
                                            </li>
                                            <li class="d-flex align-items-center py-2" style="font-style: italic;">
                                                    <span class="text-primary">There is only one problem - the bot will
                                                        buy nothing.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="row justify-content-center text-center mb-5">
                    <div class="col-xl-7 col-lg-10 py-8">
                        <h4 class="font-weight-bold">МОЖНО ЗА %?</h2>
                            <p class="text-muted mb-0">ДА, МОЖНО! Но после 3х месяцев работы, когда мы поймем, что
                                нам комфортно вместе работать и научимся понимать ваш бизнес и детально изучим
                                особенности вашей аудитории. Мы как правило охотно соглашаемся на такой вариант,
                                потому что нашим текущим клиентам уже увеличили Выручку от 10 до 20 раз. </p>
                    </div>
                </div> -->
            </div>
        </section>

        @include('en.include.callme')

        <!-- <section class="bg-light-primary py-6 py-lg-8 mb-8">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-9">
                        <h2 class="font-weight-semibold text-primary">Расскажите нам о вашем проекте</h2>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="py-6">
            <div class="container">
                <div class="row text-center justify-content-center mb-5">
                    <div class="col-xl-7 col-lg-10">
                        <h2 class="text-primary font-weight-bold">Our clients</h2>
                    </div>
                </div>

                @include('include.cases', ['cases' => $cases])
{{--                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 justify-content-center">--}}
{{--                    <div class="col" data-aos="fade-up">--}}
{{--                        <a href="portfolio.html" class="text-reset">--}}
{{--                            <div class="card bg-light text-center mb-3 mb-lg-0">--}}
{{--                                <picture>--}}
{{--                                    <source srcset="images/ui/project-01.webp" type="image/webp">--}}
{{--                                    <source srcset="images/ui/project-01.jpg" type="image/jpg">--}}
{{--                                    <img src="images/ui/project-01.jpg" alt="" class="img-fluid">--}}
{{--                                </picture>--}}
{{--                                <div class="card-footer bg-white">--}}
{{--                                    <h5 class="font-weight-semibold mb-1">Quickpay Invoicing</h5>--}}
{{--                                    <p class="font-size-sm mb-0">Mobile App</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col" data-aos="fade-up" data-aos-delay="50">--}}
{{--                        <a href="portfolio.html" class="text-reset">--}}
{{--                            <div class="card bg-light text-center mb-3 mb-lg-0">--}}
{{--                                <picture>--}}
{{--                                    <source srcset="images/ui/project-02.webp" type="image/webp">--}}
{{--                                    <source srcset="images/ui/project-02.jpg" type="image/jpg">--}}
{{--                                    <img src="images/ui/project-02.jpg" alt="" class="img-fluid">--}}
{{--                                </picture>--}}
{{--                                <div class="card-footer bg-white">--}}
{{--                                    <h5 class="font-weight-semibold mb-1">Ask Earth Redesign</h5>--}}
{{--                                    <p class="font-size-sm mb-0">Website</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col" data-aos="fade-up" data-aos-delay="100">--}}
{{--                        <a href="portfolio.html" class="text-reset">--}}
{{--                            <div class="card bg-light text-center">--}}
{{--                                <picture>--}}
{{--                                    <source srcset="images/ui/project-03.webp" type="image/webp">--}}
{{--                                    <source srcset="images/ui/project-03.jpg" type="image/jpg">--}}
{{--                                    <img src="images/ui/project-03.jpg" alt="" class="img-fluid">--}}
{{--                                </picture>--}}
{{--                                <div class="card-footer bg-white">--}}
{{--                                    <h5 class="font-weight-semibold mb-1">Boom Illustrations</h5>--}}
{{--                                    <p class="font-size-sm mb-0">Mobile App</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <!-- <div class="row text-center mt-5">
                    <div class="col" data-aos="fade-up">
                        <a href="" class="font-weight-medium">View More --></a>
            </div>
            </div>
            </div>
        </section>

        <section class="bg-light-primary py-6 py-lg-8" id="contact-us">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5 order-1 order-lg-1 pt-6 pb-4">
                        <h2 class="font-weight-bold mb-5">How we see our cooperation</h2>

                        <ul class="steps vertical list-unstyled mb-0">
                            <li data-aos="fade-up">
                                <span>1</span>
                                WE DO NOT TAKE ON WHAT WE CANNOT DO PERFECTLY
                                <p>Sometimes we give up on a project. Because we cannot guarantee quality performance. And
                                    that's fair to you.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="50">
                                <span>2</span>
                                WE WORK ACCORDING TO A CLEAR PLAN
                                <p>We develop a communication strategy and content plan.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <span>3</span>
                                LET'S REDUCE THE BUREAUCRACY TO A MINIMUM
                                <p>We protect customers: we meet deadlines, do not ask for unnecessary technical
                                    specifications, we try to reduce the formalities and time spent on the part of the
                                    client to a minimum.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="150">
                                <span>4</span>
                                COME ON, HURRY UP AND ORDER
                                <p>Just send us a short description of your case and we will try to offer the best solution.
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 order-2 order-lg-2 mt-lg-4">
                        <div class="card shadow-sm">
                            <div class="card-header bg-white">
                                <div class="media flex-column flex-sm-row py-2">
                                    <div
                                        class="iconbox icon-lg rounded-circle iconbox-soft-primary mb-3 mb-sm-0 mr-2 mr-sm-3">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4"
                                                  d="M21.9999 15.9402C21.9999 18.7302 19.7599 20.9902 16.9699 21.0002H16.9599H7.04989C4.26989 21.0002 1.99989 18.7502 1.99989 15.9602V15.9502C1.99989 15.9502 2.00589 11.5242 2.01389 9.2982C2.01489 8.8802 2.49489
                                                8.6462 2.82189 8.9062C5.19789 10.7912 9.44689 14.2282 9.49989 14.2732C10.2099 14.8422 11.1099 15.1632 12.0299 15.1632C12.9499 15.1632 13.8499 14.8422 14.5599 14.2622C14.6129 14.2272 18.7669 10.8932 21.1789 8.9772C21.5069
                                                8.7162 21.9889 8.9502 21.9899 9.3672C21.9999 11.5762 21.9999 15.9402 21.9999 15.9402Z"
                                                  fill="currentColor" />
                                            <path
                                                d="M21.476 5.6736C20.61 4.0416 18.906 2.9996 17.03 2.9996H7.05001C5.17401 2.9996 3.47001 4.0416 2.60401 5.6736C2.41001 6.0386 2.50201 6.4936 2.82501 6.7516L10.25 12.6906C10.77 13.1106 11.4 13.3196 12.03 13.3196C12.034
                                                13.3196 12.037 13.3196 12.04 13.3196C12.043 13.3196 12.047 13.3196 12.05 13.3196C12.68 13.3196 13.31 13.1106 13.83 12.6906L21.255 6.7516C21.578 6.4936 21.67 6.0386 21.476 5.6736Z"
                                                fill="currentColor" />
                                        </svg>
                                    </div>

                                    <div class="media-body">
                                        <h4 class="font-weight-bold text-primary">Tell us about your project
                                        </h4>
                                        <p class="text-muted font-size-sm mb-0">Please complete the details below
                                            and then click on submit and we’ll be in contact</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <form>
                                    <div class="form-row">
                                        <div class="col-md px-2">
                                            <div class="form-group">
                                                <label for="fullName">Full name</label>
                                                <input class="form-control" type="text" id="fullName"
                                                       placeholder="Robert Matthews" aria-describedby="fullName">
                                            </div>
                                        </div>
                                        <div class="col-md px-2">
                                            <div class="form-group">
                                                <label for="phoneNumber">Phone number</label>
                                                <input class="form-control" type="text" id="phoneNumber"
                                                       placeholder="+02 456 4953" aria-describedby="phoneNumber">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md px-2">
                                            <div class="form-group">
                                                <label for="emailAddress">Email address</label>
                                                <input class="form-control" type="email" id="emailAddress"
                                                       placeholder="robertmatthews@email.com" aria-describedby="emailAddress">
                                            </div>
                                        </div>
                                        <div class="col-md px-2">
                                            <div class="form-group">
                                                <label for="companyName">Company</label>
                                                <input class="form-control" type="text" id="companyName"
                                                       placeholder="Test Company" aria-describedby="companyName">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md px-2">
                                            <div class="form-group">
                                                <label for="emailAddress">Subject</label>
                                                <select class="custom-select">
                                                    <option selected>Select a subject</option>
                                                    <option value="1">Audit</option>
                                                    <option value="2">Consulting</option>
                                                    <option value="3">Digital Strategy</option>
                                                    <option value="4">SMM</option>
                                                    <option value="5">SEO</option>
                                                    <option value="6">Influencers</option>
                                                    <option value="7">Web-Design</option>
                                                    <option value="8">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md px-2">
                                            <div class="form-group">
                                                <label for="companyName">Budget</label>
                                                <select class="custom-select">
                                                    <option selected>Select your budget</option>
                                                    <option value="1">Below €250</option>
                                                    <option value="2">€250 to €1000</option>
                                                    <option value="3">€1000 to €5000</option>
                                                    <option value="4">Above €5000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md px-2">
                                            <div class="form-group">
                                                <label for="projectDetails">Project details</label>
                                                <textarea class="form-control"
                                                          placeholder="Describe your project details here..." id="projectDetails"
                                                          rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md px-2">
                                            <label>Project files</label>

                                            <div class="custom-file">

                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mt-5">
                                        <div class="col-md px-2">
                                            <button type="submit" class="btn btn-primary font-size-sm">Get a
                                                Quote</button>
                                        </div>
                                    </div>
                                    <div class="form-row mt-3">
                                        <div class="col-md small text-muted">By submitting this form you agree to
                                            our <a href="" class="link">terms and conditions</a> and our
                                            <a href="" class="link">Privacy Policy</a>. We will collect your email and
                                            occasionally email you about products and services. you can unscribe
                                            anytime. </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="TemplateMo">

        <title>Portofolio Rahmi sefrial dayanti</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="{{ asset('template/frontend') }}/css/bootstrap.min.css" rel="stylesheet">

        <link href="{{ asset('template/frontend') }}/css/bootstrap-icons.css" rel="stylesheet">

        <link href="{{ asset('template/frontend') }}/css/magnific-popup.css" rel="stylesheet">

        <link href="{{ asset('template/frontend') }}/css/templatemo-first-portfolio-style.css" rel="stylesheet">
        
<!--

TemplateMo 578 First Portfolio

https://templatemo.com/tm-578-first-portfolio

-->
    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="spinner-rotate"></span>    
            </div>
        </section>

        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a href="index.html" class="navbar-brand mx-auto mx-lg-0">Portofolio</a>

                <div class="d-flex align-items-center d-lg-none">
                    <i class="navbar-icon bi-telephone-plus me-3"></i>
                    <a class="custom-btn btn" href="#section_5">
                        120-240-9600
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Education</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Organization</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Contact</a>
                        </li>
                    </ul>

                    <div class="d-lg-flex align-items-center d-none ms-auto">
                        <i class="navbar-icon bi-telephone-plus me-3"></i>
                        <a class="custom-btn btn" href="#section_5">
                            083861370252
                        </a>
                    </div>
                </div>

            </div>
        </nav>

        <main>

            <section class="hero d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-12">
                            <div class="hero-text">
                                <div class="hero-title-wrap d-flex align-items-center mb-4">
                                    <img src="{{ asset('template/frontend') }}/images/paspotokr.jpg" class="avatar-image avatar-image-large img-fluid" alt="">

                                    <h1 class="hero-title ms-3 mb-0">Konnichiwa minna!</h1>
                                </div>

                                <h2 class="mb-4">Rahmi sefrial dayanti 21076020</h2>
                                <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_2">Let's begin</a></p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 position-relative d-flex align-items-center justify-content-center">
                            <div class="hero-image-wrap"></div>
                            <img src="{{ asset('template/frontend') }}/images/Rahmi_sefrial_dayanti.2-removebg-preview.png" class="hero-image img-fluid" alt="">
                        </div>
                        

                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#535da1" fill-opacity="1" d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
            </section>


            <section class="about section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="{{ asset('template/frontend') }}/images/download2.jpeg" class="about-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="about-thumb">

                                <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4">
                                    <h2 class="text-white me-4 mb-0">My Story</h2>

                                    <img src="{{ asset('template/frontend') }}/images/paspotokr.jpg" class="avatar-image img-fluid" alt="">
                                </div>

                                <h3 class="pt-2 mb-3 text-center">A little bit about Rahmi</h3>

                                <p>{{ $profile->keterangan }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="featured section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <div class="profile-thumb">
                                <div class="profile-title">
                                    <h4 class="mb-0">Information</h4>
                                </div>

                                <div class="profile-body">
                                    <p>
                                        <span class="profile-small-title">Name</span> 
                                        <span>{{ $profile->nama_lengkap }}</span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Birthday</span> 
                                        <span>{{ $profile->birthday }}</span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Phone</span> 
                                         <span><a href="tel: 305-240-9671">{{ $profile->phone }}</a></span>
                                    </p>

                                    <p>
                                        <span class="profile-small-title">Email</span> 
                                        <span><a href="mailto:hello@josh.design">{{ $profile->email }}</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="services section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                                <img src="{{ asset('template/frontend') }}/images/handshake-man-woman-after-signing-business-contract-closeup.jpg" class="avatar-image img-fluid" alt="">

                                <h2 class="text-white ms-4 mb-0">Education</h2>
                            </div>

                            <div class="row pt-lg-5">
                                @foreach ($pendidikan as $item)
                                    

                               
                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">{{ $item->nama_instansi }}</h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0">{{ $item->tahun_masuk.' - '.$item->tahun_selesai}}</p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>

                                        <p>{{ $item->keterangan }}</p>

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi-globe"></i>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="projects section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                                <img src="{{ asset('template/frontend') }}/images/white-desk-work-study-aesthetics.jpg" class="avatar-image img-fluid" alt="">

                                <h2 class="text-white ms-4 mb-0">Organization</h2>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        @foreach ($pengalamans as $data)
                            
                        
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <small class="projects-tag">{{ $data->tahun}}</small>

                                    <h3 class="projects-title">{{ $data->pengalaman }}</h3>
                                </div>

                                <a href="images/projects/nikhil-KO4io-eCAXA-unsplash.jpg" class="popup-image">
                                    <img src="{{ asset('template/frontend') }}/images/projects/nikhil-KO4io-eCAXA-unsplash.jpg" class="projects-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>

            <section class="contact section-padding" id="section_5">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-10 col-12 mx-auto">
                                <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                                    <img src="{{ asset('template/frontend') }}/images/download3.jpeg" class="avatar-image img-fluid" alt="">

                                    <h2 class="text-white ms-4 mb-0">Say Hi</h2>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-lg-3 col-md-6 col-12 pe-lg-0">
                                <div class="contact-info contact-info-border-start d-flex flex-column">
                                    <strong class="site-footer-title d-block mb-3">Stay connected</strong>
                                    <ul class="social-icon">
                                        <li class="social-icon-item"><a href="#" class="social-icon-link bi-linkedin"></a></li>

                                        <li class="social-icon-item"><a href="https://www.instagram.com/rhmisdyntii" class="social-icon-link bi-instagram"></a></li>

                                        <li class="social-icon-item"><a href="https://pin.it/5NjxdXrQO" class="social-icon-link bi-pinterest"></a></li>

                                        <li class="social-icon-item"><a href="https://www.youtube.com/templatemo" class="social-icon-link bi-linkedin"></a></li>
                                    </ul>

                                    <strong class="site-footer-title d-block mt-4 mb-3">Email</strong>

                                    <p>
                                        <a href="mailto:hello@josh.design">
                                           {{$contact->email}}
                                        </a>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12 ps-lg-0">
                                <div class="contact-info d-flex flex-column">
                                    <strong class="site-footer-title d-block mb-3">About</strong>

                                    <p class="mb-2">
                                       {{ $contact->message }}
                              </p>

                                   

                                    <strong class="site-footer-title d-block mt-4 mb-3">Call</strong>

                                    <p class="mb-0">
                                        <a href="tel: 120-240-9600">
                                           {{$profile->phone}}
                                        </a>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                                <form action="#" method="get" class="custom-form contact-form" role="form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-floating">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="">
                                                
                                                <label for="floatingInput">Name</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" id="message" name="message" placeholder="Tell me about the project"></textarea>
                                                
                                                <label for="floatingTextarea">Tell me about the project</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-12 ms-auto">
                                            <button type="submit" class="form-control">Send</button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="copyright-text-wrap">
                            <p class="mb-0">
                                <span class="copyright-text">Copyright Â© 2036 <a href="#">First Portfolio</a> Company. All rights reserved.</span>
                                Design: 
                                <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('template/frontend') }}/js/jquery.min.js"></script>
        <script src="{{ asset('template/frontend') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('template/frontend') }}/js/jquery.sticky.js"></script>
        <script src="{{ asset('template/frontend') }}/js/click-scroll.js"></script>
        <script src="{{ asset('template/frontend') }}/js/jquery.magnific-popup.min.js"></script>
        <script src="{{ asset('template/frontend') }}/js/magnific-popup-options.js"></script>
        <script src="{{ asset('template/frontend') }}/js/custom.js"></script>

    </body>
</html>
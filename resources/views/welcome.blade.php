<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>News 24 - Free News Website Templates</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Ecommerce Template" name="keywords">
        <meta content="Bootstrap Ecommerce Template Free Download" name="description">

        <!-- Favicon -->
        <link href="{{ asset('assets/img/favicon.ico')}}" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('assets/lib/slick/slick.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/lib/slick/slick-theme.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('assets/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <!-- Top Header Start -->
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="logo">
                            <a href="">
                                <img src="{{asset('assets/img/logo.png')}}" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header End -->


        <!-- Header Start -->
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav m-auto">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="#" class="nav-item nav-link">Sports</a>
                            <a href="#" class="nav-item nav-link">Tech</a>
                            <a href="#" class="nav-item nav-link">Fashion</a>
                            
                            <a href="single-page.html" class="nav-item nav-link">Single Page</a>
                            <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Header End -->


        <!-- Top News Start-->
        <div class="top-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 tn-left">
                        <div class="tn-img">
                            <img src="{{ asset('assets/img/top-news-1.jpg') }}" />
                            <div class="tn-content">
                                <div class="tn-content-inner">
                                    <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                    <a class="tn-title" href="">Lorem ipsum dolor sit amet adipiscing elit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 tn-right">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="{{ asset('assets/img/top-news-2.jpg') }}" />
                                    <div class="tn-content">
                                        <div class="tn-content-inner">
                                            <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="tn-title" href="">Integer faucibus pharetra odio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="{{ asset('assets/img/top-news-3.jpg') }}" />
                                    <div class="tn-content">
                                        <div class="tn-content-inner">
                                            <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="tn-title" href="">Nulla vitae pharetra ligula</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="{{ asset('assets/img/top-news-4.jpg') }}" />
                                    <div class="tn-content">
                                        <div class="tn-content-inner">
                                            <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="tn-title" href="">Ut ac euismod tellus a blandit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="{{ asset('assets/img/top-news-5.jpg') }}" />
                                    <div class="tn-content">
                                        <div class="tn-content-inner">
                                            <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="tn-title" href="">Cras ac egestas sem nec euismod</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top News End-->


        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>Sports</h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{ asset('assets/img/cat-news-1.jpg') }}" />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="cn-title" href="">Cras sed semper puru vitae lobortis velit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{ asset('assets/img/cat-news-2.jpg') }}" />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="cn-title" href="">Vestibulum ante ipsum primis</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{ asset('assets/img/cat-news-3.jpg') }}" />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="cn-title" href="">Sed quis convallis lacus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>Technology</h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{ asset('assets/img/cat-news-4.jpg') }}" />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="cn-title" href="">Vivamus vel felis nec magna</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{ asset('assets/img/cat-news-5.jpg') }}" />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="cn-title" href="">Phasellus vitae fermentum est</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{ asset('assets/img/cat-news-6.jpg') }}" />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="cn-title" href="">Aenean ut varius dui</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->


        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>Business</h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{ asset('assets/img/cat-news-7.jpg') }}" />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="cn-title" href="">Interdum et malesuada fames ac ante</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{ asset('assets/img/cat-news-8.jpg') }}" />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="cn-title" href="">Mauris non ligula eget ante sagittis</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{ asset('assets/img/cat-news-9.jpg') }}" />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="cn-title" href="">Integer non nunc nec nulla aliquet</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>Entertainment</h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{ asset('assets/img/cat-news-10.jpg') }}" />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="cn-title" href="">Ut laoreet justo non ornare</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{ asset('assets/img/cat-news-11.jpg') }}" />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="cn-title" href="">Proin a nulla ut enim feugiat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{ asset('assets/img/cat-news-12.jpg') }}" />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="cn-title" href="">Sed mauris sem sollicitudin at neque</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->


        <!-- Main News Start-->
        <div class="main-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <h2><i class="fas fa-align-justify"></i>Latest News</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mn-img">
                                            <img src="{{ asset('assets/img/latest-news.jpg') }}" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">Cras commodo sem ut porta laoreet</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed porta dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra inceptos...
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('assets/img/latest-news.jpg') }}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Pellentesque sit amet rutrum lacus</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('assets/img/latest-news.jpg') }}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Proin id pretium orci, quis rhoncus eros</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('assets/img/latest-news.jpg') }}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Curabitur viverra scelerisque tempor</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('assets/img/latest-news.jpg') }}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Integer nec lorem facilisis interdum lorem non</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('assets/img/latest-news.jpg') }}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Interdum et malesuada fames</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h2><i class="fas fa-align-justify"></i>Popular News</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mn-img">
                                            <img src="{{ asset('assets/img/popular-news.jpg') }}" />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">Phasellus gravida metus vitae laoreet aliquam</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed porta dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra inceptos...
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('assets/img/popular-news.jpg') }}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Nullam risus ante sempe</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('assets/img/popular-news.jpg') }}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Pellentesque ultrices quam id ipsum tempor</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('assets/img/popular-news.jpg') }}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Nam ex magna, commodo sed turpis rutrum</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('assets/img/popular-news.jpg') }}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Aliquam condimentum metus</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('assets/img/popular-news.jpg') }}" />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Ut ornare rutrum ligula erat volutpat</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h2><i class="fas fa-align-justify"></i>Category</h2>
                                <div class="category">
                                    <ul class="fa-ul">
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">National</a></li>
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">International</a></li>
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Economics</a></li>
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Politics</a></li>
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Lifestyle</a></li>
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Technology</a></li>
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Trades</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h2><i class="fas fa-align-justify"></i>Tags</h2>
                                <div class="tags">
                                    <a href="">National</a>
                                    <a href="">International</a>
                                    <a href="">Economics</a>
                                    <a href="">Politics</a>
                                    <a href="">Lifestyle</a>
                                    <a href="">Technology</a>
                                    <a href="">Trades</a>
                                    <a href="">National</a>
                                    <a href="">International</a>
                                    <a href="">Economics</a>
                                    <a href="">Politics</a>
                                    <a href="">Lifestyle</a>
                                    <a href="">Technology</a>
                                    <a href="">Trades</a>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h2><i class="fas fa-align-justify"></i>Ads 1 column</h2>
                                <div class="image">
                                    <a href=""><img src="{{ asset('assets/img/adds-1.jpg') }}" alt="Image"></a>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h2><i class="fas fa-align-justify"></i>Ads 2 column</h2>
                                <div class="image">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href=""><img src="{{ asset('assets/img/adds-2.jpg') }}" alt="Image"></a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href=""><img src="{{ asset('assets/img/adds-2.jpg') }}" alt="Image"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main News End-->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Useful Links</h3>
                            <ul>
                                <li><a href="#">Pellentesque</a></li>
                                <li><a href="#">Aliquam</a></li>
                                <li><a href="#">Fusce placerat</a></li>
                                <li><a href="#">Nulla hendrerit</a></li>
                                <li><a href="#">Maecenas</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Quick Links</h3>
                            <ul>
                                <li><a href="#">Posuere egestas</a></li>
                                <li><a href="#">Sollicitudin</a></li>
                                <li><a href="#">Luctus non</a></li>
                                <li><a href="#">Duis tincidunt</a></li>
                                <li><a href="#">Elementum</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Get in Touch</h3>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>123 Terry Lane, New York, USA</p>
                                <p><i class="fa fa-envelope"></i>email@example.com</p>
                                <p><i class="fa fa-phone"></i>+123-456-7890</p>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook"></i></a>
                                    <a href=""><i class="fab fa-linkedin"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Newsletter</h3>
                            <div class="newsletter">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed porta dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra inceptos
                                </p>
                                <form>
                                    <input class="form-control" type="email" placeholder="Your email here">
                                    <button class="btn">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                    </div>

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->


        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('assets/lib/slick/slick.min.js')}}"></script>


        <!-- Template Javascript -->
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Kryptual is one stop market place for ICO's , Kryptual lets you list your own ICO, quick and easy ICO Creation, 
    ERC20 token creation platform, Kryptual lets you launch, list and manage your ICO's, with Kryptual funding is easy.">
    <meta name="keywords" content="Build ICO, Start ICO, Create token, Invest in ICO, Fund ICO, Create cryptocurrency, build token,
    crowdfunding, fund raising, top ICO, funding is easy, Kryptual, Cryptual, Bitcoin, Ripple, Ethereum, ICO, New ICO, ICO news, ICO countdown ,  Tokendesk, ICO listing,  ICO whitepaper,
    ICO rating, ICO tracker">
    <meta name="author" content="Kryptual">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/fave-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/fave-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Kryptual | Now Funding is Easy</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"/>
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/css/demo.css" rel="stylesheet" />
    <link href="./assets/css/slick.css" rel="stylesheet" />
    <link href="./assets/css/slick-theme.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
    <!-- owl -->
    <!-- <link href="./assets/css/owl.carousel.css" rel="stylesheet" />
     <link href="./assets/css/owl.theme.css" rel="stylesheet" /> -->
<!-- 
   <script type="text/javascript">
    $(document).ready(function(){
      $('.your-class').slick({
        setting-name: setting-value
      });
    });
  </script> -->
 <!--  <script type="text/javascript">
      $(document).ready(function() {
 
  $(".owl-carousel").owlCarousel();
 
});
  </script> -->
  
</head>

<body class="index-page">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white fixed-top navbar-transparent" color-on-scroll="500">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="index.php" rel="tooltip" title="Kryptual" data-placement="bottom">
                   <img id="logo-top-white" src="assets/img/kryptual_logo_white.png" alt="Kryptual" style="width: 175px;">
                   <img id="logo-top-color" class="" src="assets/img/kryptual_logo.png" alt="Kryptual" style="width: 175px;display: none">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <!-- data-nav-image="./assets/img/kryptual_logo.png" data-color="orange" -->
            <div class="collapse navbar-collapse" >
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#conus" >
                            <i class="now-ui-icons location_pin"></i>
                            <p>Contact us</p>
                        </a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="#" >
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>Login</p>
                        </a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="https://www.kryptual.com/Kryptual" >
                            <i class="now-ui-icons tech_mobile"></i>
                            <p>Signup</p>
                        </a>
                    </li>

                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper" style="background: #5ac8e2;">
        <div class="cd-section" id="headers">
            <!--     *********     HEADER 1      *********      -->
            <div style="width: 100%; height: 610px;">
                
                <div class="frame">
                    <div class="plane-container">
                        <a href="#" target="_blank">
                        <img src="assets/img/plain.png" alt="kryptual" /></a>

                    </div>
                    <script type="text/javascript">
                                var TxtType = function(el, toRotate, period) {
                                    this.toRotate = toRotate;
                                    this.el = el;
                                    this.loopNum = 0;
                                    this.period = parseInt(period, 10) || 2000;
                                    this.txt = '';
                                    this.tick();
                                    this.isDeleting = false;
                                };

                                TxtType.prototype.tick = function() {
                                    var i = this.loopNum % this.toRotate.length;
                                    var fullTxt = this.toRotate[i];

                                    if (this.isDeleting) {
                                    this.txt = fullTxt.substring(0, this.txt.length - 1);
                                    } else {
                                    this.txt = fullTxt.substring(0, this.txt.length + 1);
                                    }

                                    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

                                    var that = this;
                                    var delta = 200 - Math.random() * 100;

                                    if (this.isDeleting) { delta /= 2; }

                                    if (!this.isDeleting && this.txt === fullTxt) {
                                    delta = this.period;
                                    this.isDeleting = true;
                                    } else if (this.isDeleting && this.txt === '') {
                                    this.isDeleting = false;
                                    this.loopNum++;
                                    delta = 500;
                                    }

                                    setTimeout(function() {
                                    that.tick();
                                    }, delta);
                                };

                                window.onload = function() {
                                    var elements = document.getElementsByClassName('typewrite');
                                    for (var i=0; i<elements.length; i++) {
                                        var toRotate = elements[i].getAttribute('data-type');
                                        var period = elements[i].getAttribute('data-period');
                                        if (toRotate) {
                                          new TxtType(elements[i], JSON.parse(toRotate), period);
                                        }
                                    }
                                    // INJECT CSS
                                    var css = document.createElement("style");
                                    css.type = "text/css";
                                    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
                                    document.body.appendChild(css);
                                };
                            </script>
                            <div class="my-type text-center">
                                <h1 class="text-center">
                                  <p href="" class="typewrite text-center" data-period="2000" data-type='[ "No Kickbacks.", "Use Kryptual." ]'>
                                    <span class="wrap"></span>
                                  </p>
                                </h1>
                            </div>
                </div>
                <div class="clouds">

                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="762px"
                height="331px" viewBox="0 0 762 331" enable-background="new 0 0 762 331" xml:space="preserve" class="cloud big front slowest">
                <path fill="#FFFFFF" d="M715.394,228h-16.595c0.79-5.219,1.201-10.562,1.201-16c0-58.542-47.458-106-106-106
                c-8.198,0-16.178,0.932-23.841,2.693C548.279,45.434,488.199,0,417.5,0c-84.827,0-154.374,65.401-160.98,148.529
                C245.15,143.684,232.639,141,219.5,141c-49.667,0-90.381,38.315-94.204,87H46.607C20.866,228,0,251.058,0,279.5
                S20.866,331,46.607,331h668.787C741.133,331,762,307.942,762,279.5S741.133,228,715.394,228z"/>
                </svg>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="762px"
                height="331px" viewBox="0 0 762 331" enable-background="new 0 0 762 331" xml:space="preserve" class="cloud distant smaller">
                <path fill="#FFFFFF" d="M715.394,228h-16.595c0.79-5.219,1.201-10.562,1.201-16c0-58.542-47.458-106-106-106
                c-8.198,0-16.178,0.932-23.841,2.693C548.279,45.434,488.199,0,417.5,0c-84.827,0-154.374,65.401-160.98,148.529
                C245.15,143.684,232.639,141,219.5,141c-49.667,0-90.381,38.315-94.204,87H46.607C20.866,228,0,251.058,0,279.5
                S20.866,331,46.607,331h668.787C741.133,331,762,307.942,762,279.5S741.133,228,715.394,228z"/>
                </svg>

                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="762px"
                height="331px" viewBox="0 0 762 331" enable-background="new 0 0 762 331" xml:space="preserve" class="cloud small slow">
                <path fill="#FFFFFF" d="M715.394,228h-16.595c0.79-5.219,1.201-10.562,1.201-16c0-58.542-47.458-106-106-106
                c-8.198,0-16.178,0.932-23.841,2.693C548.279,45.434,488.199,0,417.5,0c-84.827,0-154.374,65.401-160.98,148.529
                C245.15,143.684,232.639,141,219.5,141c-49.667,0-90.381,38.315-94.204,87H46.607C20.866,228,0,251.058,0,279.5
                S20.866,331,46.607,331h668.787C741.133,331,762,307.942,762,279.5S741.133,228,715.394,228z"/>
                </svg>

                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="762px"
                height="331px" viewBox="0 0 762 331" enable-background="new 0 0 762 331" xml:space="preserve" class="cloud distant super-slow massive">
                <path fill="#FFFFFF" d="M715.394,228h-16.595c0.79-5.219,1.201-10.562,1.201-16c0-58.542-47.458-106-106-106
                c-8.198,0-16.178,0.932-23.841,2.693C548.279,45.434,488.199,0,417.5,0c-84.827,0-154.374,65.401-160.98,148.529
                C245.15,143.684,232.639,141,219.5,141c-49.667,0-90.381,38.315-94.204,87H46.607C20.866,228,0,251.058,0,279.5
                S20.866,331,46.607,331h668.787C741.133,331,762,307.942,762,279.5S741.133,228,715.394,228z"/>
                </svg>

                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="762px"
                height="331px" viewBox="0 0 762 331" enable-background="new 0 0 762 331" xml:space="preserve" class="cloud slower">
                <path fill="#FFFFFF" d="M715.394,228h-16.595c0.79-5.219,1.201-10.562,1.201-16c0-58.542-47.458-106-106-106
                c-8.198,0-16.178,0.932-23.841,2.693C548.279,45.434,488.199,0,417.5,0c-84.827,0-154.374,65.401-160.98,148.529
                C245.15,143.684,232.639,141,219.5,141c-49.667,0-90.381,38.315-94.204,87H46.607C20.866,228,0,251.058,0,279.5
                S20.866,331,46.607,331h668.787C741.133,331,762,307.942,762,279.5S741.133,228,715.394,228z"/>
                </svg>

                </div>
            </div>
            
        </div>
    </div>
        
                    <div class="main">
                    <!-- <div class="section section-images">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="hero-images-container">
                                        <img src="assets/img/hero-image-1.png" alt="">
                                    </div>
                                    <div class="hero-images-container-1">
                                        <img src="assets/img/hero-image-2.png" alt="">
                                    </div>
                                    <div class="hero-images-container-2">
                                        <img src="assets/img/hero-image-3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="container">
                        <div class="card-start-a">
                        <div class="main">
                          <!-- <div class="slider slider-for">
                            <div><h3>1</h3></div>
                            <div><h3>2</h3></div>
                            <div><h3>3</h3></div>
                            <div><h3>4</h3></div>
                            <div><h3>5</h3></div>
                          </div> -->
                          <h2 class="title text-center">Top ICOs</h2>
                          <div class="slider slider-nav" style="max-height: 100%;">
                            <div>
                                <div class="col-sm-12 col-xs-12">
                                    <div class="my-a-card">
                                        <div class="row" style="padding: 20px;">

                                            <div class="col-sm-2" style="padding: 0px; overflow: hidden;margin: 0px auto;">
                                                <div class="card-a-img">
                                                    <img src="assets/img/dawn.png" style="width: 100%; height: 100%;" />
                                                </div>
                                            </div>

                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Value per Token:</b></div>
                                                    <div class="col-sm-12">$5.8357 @ 0.008338 Eth (-3.35%)</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Token Holders:</b></div>
                                                    <div class="col-sm-12">289828 addresses</div>
                                                </div>
                                                <div class="card-a-btn">
                                                    <a href="https://eos.io/"  target="_blank" >View</a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="col-sm-12">
                                    <div class="my-a-card">
                                        <div class="row" style="padding: 20px;">

                                            <div class="col-sm-2" style="padding: 0px; overflow: hidden;margin: 0px auto;">
                                                <div class="card-a-img">
                                                    <img src="assets/img/tron.png" class="img-circle" style="width: 100%; height: 100%;" />
                                                </div>
                                            </div>

                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Value per Token:</b></div>
                                                    <div class="col-sm-12">$5.8357 @ 0.008338 Eth (-3.35%)</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Token Holders:</b></div>
                                                    <div class="col-sm-12">289828 addresses</div>
                                                </div>
                                                <div class="card-a-btn">
                                                    <a href="https://tron.network/enindex.html" target="_blank">View</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="col-sm-12">
                                    <div class="my-a-card">
                                        <div class="row" style="padding: 20px;">

                                            <div class="col-sm-2" style="padding: 0px; overflow: hidden;margin: 0px auto;">
                                                <div class="card-a-img">
                                                    <img src="assets/img/omisego.png" style="margin-top: 15px; margin -left: 5px; " />
                                                </div>
                                            </div>

                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Value per Token:</b></div>
                                                    <div class="col-sm-12">$13.8374 @ 0.019921 Eth (-1.40%)</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Token Holders:</b></div>
                                                    <div class="col-sm-12">597454 addresses</div>
                                                </div>
                                                <div class="card-a-btn">
                                                    <a href="https://omisego.network/" target="_blank">View</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="col-sm-12">
                                    <div class="my-a-card">
                                        <div class="row" style="padding: 20px;">

                                            <div class="col-sm-2" style="padding: 0px; overflow: hidden;margin: 0px auto;">
                                                <div class="card-a-img">
                                                    <img src="assets/img/qtum.png" style="width: 100%; height: 100%;" />
                                                </div>
                                            </div>

                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Value per Token:</b></div>
                                                    <div class="col-sm-12">$18.3488 @ 0.026634 Eth (-3.76%)</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Token Holders:</b></div>
                                                    <div class="col-sm-12">19321 addresses</div>
                                                </div>
                                                <div class="card-a-btn">
                                                    <a href="https://qtum.org/en/" target="_blank">View</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="col-sm-12">
                                    <div class="my-a-card">
                                        <div class="row" style="padding: 20px;">

                                           <div class="col-sm-2" style="padding: 0px; overflow: hidden;margin: 0px auto;">
                                                <div class="card-a-img">
                                                    <img src="assets/img/icon.png"  style="width: 100%; height: 100%;" />
                                                </div>
                                            </div>

                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Value per Token:</b></div>
                                                    <div class="col-sm-12">$2.6178 @ 0.003792 Eth (-1.91%)</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Token Holders:</b></div>
                                                    <div class="col-sm-12">42357 addresses </div>
                                                </div>
                                                 <div class="card-a-btn">
                                                    <a href="https://icon.foundation/?lang=en" target="_blank">View</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="col-sm-12">
                                    <div class="my-a-card">
                                        <div class="row" style="padding: 20px;">

                                           <div class="col-sm-2" style="padding: 0px; overflow: hidden;margin: 0px auto;">
                                                <div class="card-a-img">
                                                    <img src="assets/img/binance.png"  style="width: 100%; height: 100%;" />
                                                </div>
                                            </div>

                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Value per Token:</b></div>
                                                    <div class="col-sm-12">$8.2255 @ 0.011604 Eth (-0.94%)</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Token Holders:</b></div>
                                                    <div class="col-sm-12"> 294926 addresses </div>
                                                </div>
                                                 <div class="card-a-btn">
                                                    <a href="https://www.binance.com/" target="_blank">View</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="col-sm-12">
                                    <div class="my-a-card">
                                        <div class="row" style="padding: 20px;">

                                           <div class="col-sm-2" style="padding: 0px; overflow: hidden;margin: 0px auto;">
                                                <div class="card-a-img">
                                                    <img src="assets/img/dg.jpeg"  style="width: 100%; height: 100%;" />
                                                </div>
                                            </div>

                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Value per Token:</b></div>
                                                    <div class="col-sm-12">$347.6360 @ 0.489621 Eth (-2.15%)</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Token Holders:</b></div>
                                                    <div class="col-sm-12"> 7933 addresses</div>
                                                </div>
                                                 <div class="card-a-btn">
                                                    <a href="https://digix.global/" target="_blank">View</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="col-sm-12">
                                    <div class="my-a-card">
                                        <div class="row" style="padding: 20px;">

                                           <div class="col-sm-2" style="padding: 0px; overflow: hidden;margin: 0px auto;">
                                                <div class="card-a-img">
                                                    <img src="assets/img/populous.jpeg"  style="width: 100%; height: 100%;" />
                                                </div>
                                            </div>

                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Value per Token:</b></div>
                                                    <div class="col-sm-12"> $18.9128 @ 0.026655 Eth ( 14.94%)</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Token Holders:</b></div>
                                                    <div class="col-sm-12">23624 addresses</div>
                                                </div>
                                                 <div class="card-a-btn">
                                                    <a href="https://populous.co/" target="_blank">View</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="col-sm-12">
                                    <div class="my-a-card">
                                        <div class="row" style="padding: 20px;">

                                           <div class="col-sm-2" style="padding: 0px; overflow: hidden;margin: 0px auto;">
                                                <div class="card-a-img">
                                                    <img src="assets/img/mkr.svg"  style="width: 100%; height: 100%;" />
                                                </div>
                                            </div>

                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Value per Token:</b></div>
                                                    <div class="col-sm-12">$813.8100 @ 1.143714 Eth (-3.26%)</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Token Holders:</b></div>
                                                    <div class="col-sm-12"> 2378 addresses</div>
                                                </div>
                                                 <div class="card-a-btn">
                                                    <a href="https://makerdao.com/" target="_blank">View</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="col-sm-12">
                                    <div class="my-a-card">
                                        <div class="row" style="padding: 20px;">

                                           <div class="col-sm-2" style="padding: 0px; overflow: hidden;margin: 0px auto;">
                                                <div class="card-a-img">
                                                    <img src="assets/img/status.png"  style="width: 100%; height: 100%;" />
                                                </div>
                                            </div>

                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Value per Token:</b></div>
                                                    <div class="col-sm-12"> $0.1375 @ 0.000194 Eth (-1.77%)</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12"><b>Token Holders:</b></div>
                                                    <div class="col-sm-12"> 63903 addresses</div>
                                                </div>
                                                 <div class="card-a-btn">
                                                    <a href="https://status.im/" target="_blank">View</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                          </div>
                          <div class="action">
                            <!-- <a href="#" data-slide="3">go to slide 3</a>
                            <a href="#" data-slide="4">go to slide 4</a>
                            <a href="#" data-slide="5">go to slide 5</a> -->
                          </div>
                        </div>
                        
                       
                            
                             
                        </div>
                    </div>
                   
                   
               <!-- Generate. List. Invest -->
                <div class="generate-a">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mr-auto ml-auto text-center">
                                <h2 class="title">Generate. List. Invest</h2>
                                <h4 class="description">Kryptual is a web platform based on Blockchain technology. It is a marketplace for ICO crowdfunding, providing investors a solution to purchase Tokens in a faster, safer and more reliable way.</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="info info-hover">
                                    <div class="icon icon-primary">
                                        <img src="assets/img/live.png" style="width: 15%;">
                                    </div>
                                    <h4 class="info-title">Live Tracking</h4>
                                    <p class="description">Know what you own and why you own it. Track your investments in real time.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info info-hover">
                                    <div class="icon icon-success">
                                       <img src="assets/img/global.png" style="width: 15%;">
                                    </div>
                                    <h4 class="info-title">Global. Safe. Easy</h4>
                                    <p class="description">Built with highest security standards, we accept major cryptocurrency assets from anyone in the world.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info info-hover">
                                    <div class="icon icon-warning">
                                        <img src="assets/img/enhance.png" style="width: 15%;">
                                    </div>
                                    <h4 class="info-title">Enhance your ICO</h4>
                                    <p class="description">Opt from numerous available add-ons such as PR consulting , ICO pricing, Audit report and many more and take your idea the next mile.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Generate. List. Invest End -->
                <div id="cards" class="section section-cards" data-background-color="gray">                    
                    <div class="cards">
                        <div class="container text-center" style="padding: 10px 0px;">
                            <div class="row my-btn">
                                
                                 <div class="col-sm-8">
                                    <ul class="nav nav-pills nav-pills-primary" role="tablist">

                                     <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#link" onclick="getalltokens(6)" role="tablist">
                                                All
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link  show" data-toggle="tab" href="#" onclick="gettokens('running')" role="tablist">
                                                Ongoing
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#" onclick="gettokens('running')" role="tablist">
                                                Upcoming
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="#" onclick="gettokens('expired')" role="tablist">
                                                Past
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link "  href="#link3" data-toggle="tab" role="tablist">
                                                Featured
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </div>
                                

                                <div class="col-sm-4 col-lg-4 ">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p style="font-size: 15px; margin-top: 8px;">Filter By</p>
                                        </div>
                                        <div class="col-sm-4" style="padding: 0px;">
                                            <div class="form-group">
                                                <select class="form-control selectdata1" id="exampleSelect1">
                                                 <option value="Sortby" > Sort By</option>
                                                  <option value="supply" > Supply</option>
                                                  <option value="date" > Date</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5" style="padding: 0px 0px 0px 5px;">
                                             <div class="form-group">      
                                                <select class="form-control selectdata" id="sort" >
                                                <option value="0">--Select--</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                                           <div class="tab-content"> <div id="link" >   

                        <div class="container">
                         <div class="row" id="tokensdetail"></div>
                            <div class="row text-center" id="seemore" style="display: none;"><div class="col-12"><a href="javascript:;" onclick="getalltokens('All');" class="btn btn-primary hidesee">See More ...</a></div></div>
                            </div>
<!--
<div id="link3" class="tab-pane fade">

<div class="row">
                            <div class="col-md-4">
                                <div class="info info-hover">
                                    <div class="icon icon-primary">
                                        <img src="assets/img/live.png" style="width: 15%;">
                                    </div>
                                    <h4 class="info-title">Live Tracking</h4>
                                    <p class="description">Know what you own and why you own it. Track your investments in real time.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info info-hover">
                                    <div class="icon icon-success">
                                       <img src="assets/img/global.png" style="width: 15%;">
                                    </div>
                                    <h4 class="info-title">Global. Safe. Easy</h4>
                                    <p class="description">Built with highest security standards, we accept major cryptocurrency assets from anyone in the world.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info info-hover">
                                    <div class="icon icon-warning">
                                        <img src="assets/img/enhance.png" style="width: 15%;">
                                    </div>
                                    <h4 class="info-title">Enhance your ICO</h4>
                                    <p class="description">Opt from numerous available add-ons such as PR consulting , ICO pricing, Audit report and many more and take your idea the next mile.</p>
                                </div>
                            </div>


                        </div>

</div> </div> -->
                           
                        </div>

                      
                            
                    </div>
               </div>

               <!-- contat -->
               <div id="conus" class="contactus-1 section-image" style="background: #59c8e2;">
                    <div class="container" >
                        <div class="row">
                            <div class="col-md-5">
                                <h2 class="title">Get in Touch</h2>
                                <h4 class="description">The crypto market never stops, neither do we. For any queries, get in touch with us.</h4>
                                <div class="info info-horizontal">
                                    <div class="icon icon-primary">
                                        <i class="now-ui-icons location_pin"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Find us at the office</h4>
                                        <p class="description"> UK -Kemp House, 
                                            <br> 160 City Road,     London, 
                                            <br> United Kingdom
                                        </p>
                                    </div>
                                </div>
                                <div class="info info-horizontal">
                                    <div class="icon icon-primary">
                                        <i class="now-ui-icons tech_mobile"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Give us a ring</h4>
                                        <p class="description">
                                            +40(0) 207 689 7888
                                            <br> Mon - Fri, 8:00-22:00
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 ml-auto mr-auto">
                                <div class="card card-contact card-raised">
                                    <form role="form" id="contact-form" method="post" action="">
                                        <div class="card-header text-center">
                                            <h4 class="card-title">Contact Us</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6 pr-2">
                                                   <input type="hidden"  name="q" value="contactus" class="form-control" placeholder="Your Email...">
                                             
                                                    <label>Name</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="First Name..." aria-label="First Name..." name="name" id="conname" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pl-2">
                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="now-ui-icons text_caps-small"></i></span>
                                                            </div>
                                                            <input type="email" class="form-control" placeholder="Email Address" aria-label="Last Name..." id="conemail" name="email" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Subject</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="subject" placeholder="Subject Here..." id="consubject" required>
                                                </div>
                                            </div> 
                                             <div class="form-group">
                                                <label>Your message</label>
                                                <textarea name="message" class="form-control" id="conmessage" rows="6" id="conmessage" required> 
                                                </textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <label class="form-check-label my-ro">
                                                            <input class="form-check-input" type="checkbox" required id="concheck" value="1">
                                                            <span class="form-check-sign" style="padding: 4px 20px 0px;"></span>
                                                            I'm not a robot
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <button type="button" class="btn btn-primary btn-round pull-right" onclick="return contactus()" >Send Message </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="section section-footers" style="padding: 0;" data-background-color="gray">
                    <div id="footer-areas">
                        <footer class="footer footer-white footer-big">
                            <div class="container">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#">
                                                <h5>About Kryptual</h5>
                                            </a>
                                            <p style="color: black;">A Blockchain based marketplace for ICOs. We provide a user-friendly interface to help you launch a safe and secure Initial Coin Offering.</p>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>About</h5>
                                            <ul class="links-vertical">
                                                
                                                <li>
                                                    <a href="#">
                                                        About Us
                                                    </a>
                                                </li>
                                               
                                            </ul>

                                            <div style="margin-top: 20px;">
                                                <h5>Become a Reseller</h5>
                                            <ul class="links-vertical">
                                                
                                                <li>
                                                    <a href="reseller.php" target="_blank">
                                                        Reseller
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Market</h5>
                                            <ul class="links-vertical">
                                                <li>
                                                    <a href="faq.php">
                                                        FAQ
                                                    </a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Legal</h5>
                                            <ul class="links-vertical">
                                                <li>
                                                    <a href="privacy_policy.php">
                                                        Privacy and Policy
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                       
                                        <div class="col-md-3">
                                            <h5>Subscribe to Newsletter</h5>
                                            <p style="color: black;">
                                                Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
                                            </p>
                                            <form class="form form-newsletter" method="post" action="" >
                                                <div class="form-group">
                                                    <input type="email" id="suscribeemail" name="email" class="form-control" placeholder="Your Email...">
     
                                                </div>
                                                
                                                <button type="button" class="btn btn-primary btn-icon btn-round" name="button" onclick="return getsubscribe();">
                                                    <i class="now-ui-icons ui-1_email-85"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <ul class="social-buttons">
                                    <li>
                                        <a target="_blank" href="https://twitter.com/kryptual" class="btn btn-icon btn-neutral btn-twitter btn-lg">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.facebook.com/kryptual" class="btn btn-icon btn-neutral btn-facebook btn-lg">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="copyright pull-center">
                                    Copyright &copy;
                                    <script>
                                    document.write(new Date().getFullYear())
                                    </script> Kryptual All Rights Reserved.
                                </div>
                            </div>
                        </footer>
                        <!--     *********   END BIG WHITE FOOTER v2     *********      -->
                    </div>
                </div>
            <!--         footer areas         -->
                </div>
            </div>
        </div>
</body>
<!--   Core JS Files   -->
<!-- cloudflair -->

<script src="./assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js">
    
</script>
<script src="apis/api.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        getalltokens(6);
     // swal("Here's a message!")
    });
</script>
<script type="text/javascript">
       
         // $('.slider-nav').slick({
         //   slidesToShow: 3,
         //   slidesToScroll: 1,
         //   asNavFor: '.slider-for',
         //   dots: true,
         //   focusOnSelect: true,
         //   slidesToScroll: 1,
         //   autoplay: true,
         //   autoplaySpeed: 2000,
         // });

       
 if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
$('.slider-nav').slick({
           slidesToShow: 1,
           slidesToScroll: 1,
           asNavFor: '.slider-for',
           dots: true,
           focusOnSelect: true,
           slidesToScroll: 1,
           autoplay: true,
           autoplaySpeed: 2000,
         });
  }
 else {
    $('.slider-nav').slick({
           slidesToShow: 3,
           slidesToScroll: 1,
           asNavFor: '.slider-for',
           dots: true,
           focusOnSelect: true,
           slidesToScroll: 1,
           autoplay: true,
           autoplaySpeed: 2000,
         });
}

  </script>
<!-- start -->
 <!--  <script type="text/javascript" src="./assets/js/slick.min.js"></script> -->
  <!-- sda -->
<!-- owl -->
<!--  <script type="text/javascript" src="./assets/js/owl.carousel.min.js"></script> -->
<!-- owl end -->
<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js" type="text/javascript"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115484250-1"></script>

<link href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" rel="stylesheet" />
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/moment.min.js"></script>

<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="./assets/js/plugins/bootstrap-switch.js"></script>
<!--    Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="./assets/js/plugins/bootstrap-tagsinput.js"></script>
<!--    Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="./assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="./assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="./assets/js/plugins/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {
    // the body of this function is in assets/js/now-ui-kit.js
    nowuiKit.initSliders();
});
</script>

</html>

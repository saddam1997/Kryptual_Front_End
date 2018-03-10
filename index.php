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
    



   
</head>

<body class="index-page">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white fixed-top navbar-transparent" color-on-scroll="500">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="" rel="tooltip" title="Kryptual" data-placement="bottom" target="_blank">
                   <img id="logo-top-white" src="assets/img/kryptual_logo_white.png" alt="Kryptual" style="width: 175px;">
                   <img id="logo-top-color" class="" src="assets/img/kryptual_logo.png" alt="Kryptual" style="width: 175px;display: none">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" data-nav-image="./assets/img/kryptual_logo.png" data-color="orange">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#conus" >
                            <i class="now-ui-icons location_pin"></i>
                            <p>Contact us</p>
                        </a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="http://103.201.142.41:90/krptual_dist/#/login" >
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>Login</p>
                        </a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="http://103.201.142.41:90/krptual_dist/#/signupHome" >
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
            <div style="width: 100%; height: 750px;">
                
                <div class="frame">
                    <div class="plane-container">
                        <a href="#" target="_blank">
                        <img src="assets/img/plain.png" /></a>

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
                    <div class="blogs-5" data-background-color="gray">
                <div class="container">
                    <div class="row">
                        <div class="feature-title">
                            <div class="col-md-10 ml-auto mr-auto">
                                <h2 class="title">Featured ICOs</h2>
                                <div class="row">
                                 <div class="col-md-4"><!-- endorsed -->
                                 </div>
                                    <div class="col-md-4"><!-- endorsed -->
                                        <div class="card card-blog">
                                            <div class="head-adn">
                                                
                                                <div class="head-st-rt">
                                                    <P style="font-weight: bold;">Start Days</P>
                                                    <p>20 hrs</p>
                                                </div>
                                                <script type="text/javascript">
                                                    $(function () {
                                                      $('[data-toggle="tooltip"]').tooltip()
                                                    })
                                                </script>
                                                <div class="head-ico-img">
                                                   <a href="#" data-toggle="tooltip" data-placement="top" title="endorsed"><img src="assets/img/endorsed.png"></a> 
                                                </div>
                                                
                                            </div>
                                            <div class="endros-logo">
                                                <div class="en-img">
                                                    <img src="assets/img/1.png" class="img-circle">
                                                </div>
                                                <div class="en-name">
                                                    <p>BoutsPro</p>
                                                </div>
                                            </div>

                                            <div class="en-name1">
                                                <p class="pull-left" style="font-weight: bold;">Token</p>
                                                <p class="pull-right">BoutsPro</p>
                                            </div>
                                            <div class="en-name1">
                                                <p class="pull-left" style="font-weight: bold;">Ticker</p>
                                                <p class="pull-right">BTSP</p>
                                            </div>
                                                
                                            
                                        </div>
                                    </div>
                                     <div class="col-md-4"><!-- endorsed -->
                                 </div>
                                  
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
                    
               <div id="pablo" class="features-7 section-image" style="background-image: url('assets/img/bg11.jpg')">
                <div class="col-md-8 mr-auto ml-auto text-center">
                    <h2 class="title"> Generate. List. Invest</h2>
                    <h4 class="description">Kryptual is a web platform based on Blockchain technology. It is a marketplace for ICO crowdfunding, providing investors a solution to purchase Tokens in a faster, safer and more reliable way.</h4>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 px-0">
                            <div class="col-sm-12">
                                <div class="info info-horizontal">
                                    <div class="icon">
                                        <i class="now-ui-icons design-2_html5"></i>
                                    </div>
                                    <div class="description">
                                        <h5 class="info-title">Live Tracking</h5>
                                        <p class="description">Know what you own and why you own it. Track your investments in real time. </p>
                                    </div>
                                </div>
                                <div class="info info-horizontal">
                                    <div class="icon">
                                        <i class="now-ui-icons design_palette"></i>
                                    </div>
                                    <div class="description">
                                        <h5 class="info-title">Global. Safe. Easy</h5>
                                        <p class="description">Built with highest security standards, we accept major cryptocurrency assets from anyone in the world. </p>
                                    </div>
                                </div>
                                <div class="info info-horizontal">
                                    <div class="icon">
                                        <i class="now-ui-icons design-2_ruler-pencil"></i>
                                    </div>
                                    <div class="description">
                                        <h5 class="info-title">Enhance your ICO</h5>
                                        <p class="description">Opt from numerous available add-ons such as PR consulting , ICO pricing, Audit report and many more and take your idea the next mile. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image-container">
                                <img src="assets/img/ipad3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="cards" class="section section-cards" data-background-color="gray">                    
                    <div class="cards">
                    <div class="container text-center" style="padding: 10px 30px;">

                    <div class="row">
                    <div class="col-sm-6"></div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleSelect1">Example select</label>
                                    <select class="form-control selectdata1" id="exampleSelect1">
                                     <option value="Sortby" > Sort By</option>
                                      <option value="supply" > Supply</option>
                                      <option value="date" > Date</option>
                                    </select>
                                  </div>
                            </div>
                        
                        <div class="col-md-2">
                            <div class="form-group">
                                    <label for="exampleSelect2 ">Example select</label>
                                   
                                 <select class="form-control selectdata" id="sort" >
                                   <option value="0">--Select--</option>
                                     
                                      
                                    </select>
                                  </div>
                        </div>
                     
                    </div>
                    <div class="row my-btn">
                                <div class="col-sm-2"></div>
                                 <div class="col-sm-8">
                                    <ul class="nav nav-pills nav-pills-primary" role="tablist">

                                     <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#link2" role="tablist">
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
                                       
                                    </ul>
                                </div>
                            </div>
                    </div>
                         <div class="container">
                            <div class="row" id="tokensdetail"></div>
                            <div class="row text-center" id="seemore" style="display: none;"><div class="col-12"><a href="javascript:;" onclick="getalltokens('All');" class="btn btn-primary hidesee">See More ...</a></div></div>
                       
                    </div>
                            
                    </div>
               </div>

               <!-- contat -->
               <div id="conus" class="contactus-1 section-image" style="background-image: url('assets/img/contact1.jpg')">
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
                                    <p class="description"> Michael Jordan
                                        <br> +40(0) 207 689 7888
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
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" required id="concheck" value="1">
                                                        <span class="form-check-sign"></span>
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
                                            <h5>Referral</h5>
                                        <ul class="links-vertical">
                                            
                                            <li>
                                                <a href="raferal_program.html" target="_blank">
                                                    Referral
                                                </a>
                                            </li>
                                            
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>Market</h5>
                                        <ul class="links-vertical">
                                            <li>
                                                <a href="#">
                                                    Sales FAQ
                                                </a>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>Legal</h5>
                                        <ul class="links-vertical">
                                            <li>
                                                <a href="#">
                                                    Transactions FAQ
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
                                    <a href="#" class="btn btn-icon btn-neutral btn-twitter btn-lg">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-icon btn-neutral btn-facebook btn-lg">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-icon btn-neutral btn-dribbble btn-lg">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-icon btn-neutral btn-google btn-lg">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-icon btn-neutral btn-youtube btn-lg">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="copyright pull-center">
                                Copyright &copy;
                                <script>
                                document.write(new Date().getFullYear())
                                </script> Creative Tim All Rights Reserved.
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
<script src="./assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>

<script src="apis/api.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        getalltokens(6);
     // swal("Here's a message!")
    });
</script>

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

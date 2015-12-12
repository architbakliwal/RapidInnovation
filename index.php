<!DOCTYPE html>
<?php 

    define('QA_BASE_DIR', dirname( __FILE__ ).'/forum/');
 
    require QA_BASE_DIR.'qa-include/qa-base.php';
    require QA_BASE_DIR.'qa-include/qa-app-users.php';
    // require_once QA_BASE_DIR.'qa-include/qa-page.php';
    // require_once QA_BASE_DIR.'qa-include/qa-page-login.php';
    require QA_BASE_DIR.'qa-include/pages/login-ext.php';

    $sec_code = qa_html(qa_get_form_security_code('login'));
    
    // if (qa_get_logged_in_userid()===null)
    //     echo 'not logged in';
    // else
    //     echo qa_get_logged_in_handle().'<BR>'.qa_get_logged_in_email();
    // echo dirname( __FILE__ );

    // echo QA_BASE_DIR.'index.php?qa=login&to=index.php';

?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Rapidovations - Grooming Professionals of Tomorrow</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/donut.css" rel="stylesheet">
    <link href="css/donut-responsive.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Rapidovations</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="page-scroll" href="#idea">Our Idea</a></li>
                            <li><a class="page-scroll" href="#services">Services</a></li>
                            <li><a class="page-scroll" href="#team">Founding Members</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="page-scroll" href="#whyrapid">Why Rapid</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="forum/">Forum</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="online-test/">Online Tests</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact Us</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown login-dropdown login active">
                        <a href="#" title="" data-toggle="dropdown" class="navbar-login-button" style="background-color: transparent;">Login <span class="fa fa-key"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu" id="login-dropdown-menu">
                            <form role="form" action="forum/qa-include/pages/login-ext.php?&to=index.php" method="post" id="loginform">
                                <li>
                                    <input type="text" class="form-control" id="qa-userid" name="emailhandle" placeholder="Email or Username" />
                                </li>
                                <li>
                                    <input type="password" class="form-control" id="qa-password" name="password" placeholder="Password" />
                                </li>
                                <li>
                                    <label class="checkbox inline">
                                        <input type="checkbox" name="remember" id="qa-rememberme" value="1"> Remember
                                    </label>
                                </li>
                                <li class="hidden">
                                    <input type="hidden" name="code" id="qa-code" value="<?php echo $sec_code ?>" />
                                </li>
                                <li>
                                    <button type="submit" value="" id="qa-login" name="dologin" class="btn btn-primary btn-block">Login</button>
                                </li>
                                <li class="register">
                                    <a class="btn btn-success btn-block" href="forum/index.php?qa=register" title="Register as a new user">
                                        Register
                                    </a>
                                </li>
                                <li class="forgot-password">
                                    <a href="forum/index.php?qa=forgot">I forgot my password</a>
                                </li>
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <!-- <div class="intro-heading">RAPID Innovation!</div> -->
                <div class="intro-lead-in">Grooming Professionals of Tomorrow</div>
                <a href="#idea" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>
    <!-- Our Idea Section -->
    <section id="idea" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Idea</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <p>RAPIDOVATIONS is here to make engineering freshers industry ready. We are here to guide the students on how to face the campus recruitment processes. We provide trainings (rather we would call it as “guidance”) to engineering students in their college campus – with well crafted courses covering various topics. Please read on to know more about who we are and how we can help you.
                </br></br>
                RAPIDOVATIONS was founded by four members – Ruchir, Abhishek, Prasoon and Deepak – all engineers. After entering the corporate world we realised why we often get to hear that the employability of a graduate in this country is so low! With the motive of addressing the common concern of the employers while hiring a fresh graduate; we are here to bridge the gap between students’ perception of employability and those of employers. Just scoring good marks is not sufficient to secure a good job. We guide the students in developing certain essential skills which make them not only competent enough to secure that dream job, but also achieve great heights in their professional lives.
                </br></br>
                We believe in long term engagement with the students so that every student gets ample time to gradually improve their skill sets. Apart from classroom trainings, we provide students with an excellent forum where they can get their queries answered directly from industry experts and placements oriented online tests.
                </p>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="glyphicon glyphicon-bookmark fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Classroom Training</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="glyphicon glyphicon-bullhorn fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Online Tests</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="glyphicon glyphicon-star fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Q&A Platform</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="glyphicon glyphicon-bookmark fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Extended Curriculum</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="glyphicon glyphicon-bullhorn fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Expert Talks</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="glyphicon glyphicon-star fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Career Guidance</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Founding Members Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Founding Members</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/team/team.png" class="img-responsive img-circle" alt="">
                        <h4>Name 1</h4>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/team/team.png" class="img-responsive img-circle" alt="">
                        <h4>Name 2</h4>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/team/team.png" class="img-responsive img-circle" alt="">
                        <h4>Name 3</h4>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/team/team.png" class="img-responsive img-circle" alt="">
                        <h4>Name 4</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Rapid Section -->
    <section id="whyrapid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Why RAPID</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted" style="color:#eeeeee">Write to us for any Feedback/Suggestion/Enquiry</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <p style="color: #ffffff;font-size: 18px;">Rapidovations Training Services LLP,</br>
                                Level 8, Tower 1, Umiya Business Bay, Cessna Business Park,</br>
                                Kadubeesanahalli, Marathalli Outer Ring Road,</br>
                                Bangalore – 560103, Karnataka, India.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group" style="text-align: center;">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; RAPIDOVATIONS 2015</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/rapidovations" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/Rapidovations" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
</body>

</html>

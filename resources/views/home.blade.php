<!DOCTYPE html>
<html lang="en">

<head>
    <title>EXAMBEE</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EXAMBEE: Online Exam Portal">
    <meta name="keyword" content="Exambee">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/favs.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="css/style-mob.css" rel="stylesheet" />
</head>

<body>

    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="index.html"><img src="images/logo.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <h4>All Quizzes</h4>
                            <ul>
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">Javascript</a></li>
                                <li><a href="#">PHP</a></li>
                                <li><a href="#">Python</a></li>
                                <li><a href="#">C</a></li>
                                <li><a href="#">C++</a></li>
                                <li><a href="#">Laravel</a></li>
                                
                            </ul>
                            <h4>User Account</h4>
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a></li>
                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Register</a></li>
                            </ul>
                           
                            <h4>User Profile</h4>
                            <ul>
                                <li><a href="dashboard.html">User profile</a></li>
                                <li><a href="db-courses.html">Courses</a></li>
                                <li><a href="db-exams.html">Exams</a></li>
                                <li><a href="db-profile.html">Profile</a></li>
                                <li><a href="db-time-line.html">Time line</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--HEADER SECTION-->
    <section>
       
        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="index.html"><img src="images/logo.png" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="/home">Home</a>
                                </li>
                                <li>
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <li>
                                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                        </li>
                                    @else
                                <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>
                
                                        @if (Route::has('register'))
                                           <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                            </li>
                                  </ul>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                            <form>
                                <div class="sf-type">
                                    <div class="sf-input">
                                        <input type="text" id="sf-box" placeholder="Search subject for quiz">
                                    </div>
                                    <div class="sf-list">
                                        <ul>
                                            <li><a href="#">HTML</a></li>
                                            <li><a href="#">CSS</a></li>
                                            <li><a href="#">Javascript</a></li>
                                            <li><a href="#">PHP</a></li>
                                            <li><a href="#">Python</a></li>
                                            <li><a href="#">C</a></li>
                                            <li><a href="#">C++</a></li>
                                            <li><a href="#">Laravel</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="sf-submit">
                                    <input type="submit" value="Search ">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->

    <!-- SLIDER -->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slider1 active">
                    <img src="images/slider/slide1.jpg" alt="" >
                    <div class="carousel-caption slider-con">
                        <h2>Welcome to <span>EXAMBEE</span></h2>
                        <p>Where skill is nurtured and Vision is translated into reality. </p>
                       
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider/2.png" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Test yourself  <span>here</span></h2>
                        <p>Platform that gives you choice to prove yourself.</p>
                        
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider/3.png" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Let's <span>crack it</span></h2>
                        <p>Identify the real you.</p>
                       
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-chevron-left slider-arr"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-chevron-right slider-arr"></i>
            </a>
        </div>
    </section>

    <!-- QUICK LINKS -->
   

    <!-- DISCOVER MORE -->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Why <span>EXAMBEE</span></h2>
                 
                </div>
            </div>
            <div class="row">
                <div class="ed-course">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="images/score.jpg" alt="">
                                <span>Helps you to score high</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="images/can.jpg" alt="">
                                <span>Build confidence</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="images/exam.jpg" alt="">
                                <span>Makes you exam ready</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="images/series.jpg" alt="">
                                <span>Best collection of test series</span>
                            </a>
                        </div>
                    </div>
                   </div>
    </section>

    <!-- POPULAR COURSES -->
    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Test <span>Yourself</span></h2>
                    <p>We offer many quizzes to upskill the students to become future ready.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/HTML.png" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="#">
                                    <h3>HTML</h3>
                                </a>
                               
                                <p>This quiz consists of 40 questions.Each carry 1 marks.Try to attempt every question.</p> 
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="ibm-adit-course-details.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Start Now</a> </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/JavaScript.png" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="#">
                                    <h3>Javascript</h3>
                                </a>
                               
                                <p>This quiz consists of 40 questions.Each carry 1 marks.Try to attempt every question.</p> 
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> Start Now</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/css1.png" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="#">
                                    <h3>CSS</h3>
                                </a>
                               
                                <p>This quiz consists of 40 questions.Each carry 1 marks.Try to attempt every question.</p> 
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> Start Now</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/php.png" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="#">
                                    <h3>PHP</h3>
                                </a>
                              
                                <p>This quiz consists of 40 questions.Each carry 1 marks.Try to attempt every question.</p>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> Start Now</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      


                </div>
            </div>

             <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/py.png" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="#">
                                    <h3>Python</h3>
                                </a>
                               
                                <p>This quiz consists of 40 questions.Each carry 1 marks.Try to attempt every question.</p> 
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> Start Now</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/c++.png" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="#">
                                    <h3>C++</h3>
                                </a>
                              
                                <p>This quiz consists of 40 questions.Each carry 1 marks.Try to attempt every question.</p>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> Start Now</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      

                </div>
            </div>

             <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/C.png" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="#">
                                    <h3>C</h3>
                                </a>
                               
                                <p>This quiz consists of 40 questions.Each carry 1 marks.Try to attempt every question.</p> 
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> Start Now</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/laravel.png" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="#">
                                    <h3>Laravel</h3>
                                </a>
                              
                                <p>This quiz consists of 40 questions.Each carry 1 marks.Try to attempt every question.</p>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="start"><i class="fa fa-bar-chart" aria-hidden="true"></i> Start Now</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                      

                </div>
            </div>
        </div>
    </section>

   
    <!-- FOOTER -->
    <section class="wed-hom-footer">
        <div class="container">
            
            <div class="row wed-foot-link">
                <div class="col-md-4 foot-tc-mar-t-o">
                    <h4>Courses Offered</h4>
                    <ul>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">Javascript</a></li>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">Python</a></li>
                        <li><a href="#">C</a></li>

                        <li><a href="avts-course-details.html">C++</a></li>
                        <li><a href="avts-course-details.html">Laravel</a></li>
                        
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>New Offer</h4>
                    <ul>
                        <li><a href="#">Java</a></li>
                        <li><a href="#">RDBMS</a></li>
                        <li><a href="#">MongoDB</a></li>
                        <li><a href="#">React</a></li>
                        
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>HELP & SUPPORT</h4>
                    <ul>
                        <li><a href="#">24x7 Live help</a>
                        </li>
                        <li><a href="contactus.html">Contact us</a>
                        </li>
                        <li><a href="#">Feedback</a>
                        </li>
                       
                    </ul>
                </div>
            </div>
           
            </div>
        </div>
    </section>

    <!-- COPY RIGHTS -->
    <section class="wed-rights">
        <div class="container">
            <div class="row">
                <div class="copy-right">
                   <a target="_blank" href="#">All rights reserved by EXAMBEE</a>
                </div>
            </div>
        </div>
    </section>

    <!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
    <section>
        <!-- LOGIN SECTION -->
        <div id="modal1" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello...</h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Login</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name" class="validate">
                                <label>User name</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate">
                                <label>Password</label>
                            </div>
                        </div>
                        <div>
                            <div class="s12 log-ch-bx">
                                <p>
                                    <input type="checkbox" id="test5" />
                                    <label for="test5">Remember me</label>
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Login" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal3">Forgot password</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- REGISTER SECTION -->
        <div id="modal2" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello...</h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Create an Account</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name1" class="validate">
                                <label>User name</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="email" class="validate">
                                <label>Email id</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate">
                                <label>Password</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate">
                                <label>Confirm password</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Register" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- FORGOT SECTION -->
        <div id="modal3" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello... </h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Forgot password</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name3" class="validate">
                                <label>User name or email id</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Submit" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

  

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


</html>
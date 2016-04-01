<!DOCTYPE html>
<html>


<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <!-- Site Title -->
    <title>My Blog</title>

    <meta name="description" content="My Blog">
    <meta name="keywords" content="creative, resume, template">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Font icons CSS -->
    <link href="assets/plugins/icons-mind/style.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugins CSS -->
    <link href="assets/plugins/jpreloader/css/jpreloader.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/animate-css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/magnificPopup/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/flexSlider/flexslider.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/bootstrap/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css">

    <!-- Main CSS -->
    <link href="assets/css/main.css" rel="stylesheet" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-sanitize.js"></script>
    <script type="text/javascript" src="assets/js/uiDevCtrl.js"></script>

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 8]>
    <script src="assets/plugins/modernizr.min.js"></script>
    <![endif]-->
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="66" 
        ng-app="uiDevApp" ng-controller="uiDevCtrl">
<!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- HERO START -->
<header id="home" class="hero owl-bg-carousel-yes">
    <div class="owl-bg-carousel owl-carousel">
        <div class="item owl-bg-image full-screen" style="background-image: url('assets/images/bg-1.jpg');"></div>
        <div class="item owl-bg-image full-screen" style="background-image: url('assets/images/bg-2.jpg');"></div>
        <div class="item owl-bg-image full-screen" style="background-image: url('assets/images/bg-3.jpg');"></div>
        <div class="item owl-bg-image full-screen" style="background-image: url('assets/images/bg-4.jpg');"></div>
        <div class="item owl-bg-image full-screen" style="background-image: url('assets/images/bg-5.jpg');"></div>
    </div>
    <!-- //.owl-bg-carousel -->

    <div class="hero-body">
        <div class="hero-text text-center">
            <h1>
                Hello, I'm {{name}} <span class="blinker"></span>
            </h1><br>

            <h1 class="small">Sr. Software/IT Consultant</h1>
            <br><br>
            <span class="divider center" style="width: 215px"></span>
            <p id="fadingProverbs">Wisdom begins with Wonder - Socrates</p>

            <div class="page-scroll">
                <a href="#profile" class="btn btn-lg btn-custom">
                    Know Me Better
                </a>
            </div>
            <!-- //.page-scroll -->
        </div>
        <!-- //.hero-text -->
    </div>
    <!-- //.hero-body -->
</header>
<!-- //HERO END -->


<!-- NAVIGATION START -->
<nav id="navigation" class="navbar navbar-fixed-top center-menu" role="navigation">
    <div class="container navbar-container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".Chouhan-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand visible-xs visible-sm" href="#page-top">{{shortName}}</a>
        </div>
        <!-- //.navbar-header -->

        <div class="navbar-collapse collapse Chouhan-collapse">
            <ul class="nav navbar-nav">
                <li class="page-scroll">
                    <a href="#home">Home</a>
                </li>

                <li class="page-scroll">
                    <a href="#profile">I AM</a>
                </li>

                <!--<li class="page-scroll">-->
                    <!--<a href="#portfolio">Portfolio</a>-->
                <!--</li>-->

                <li class="page-scroll">
                    <a href="#qualities">Qualities</a>
                </li>

                <li class="page-scroll">
                    <a href="#resume">Resume</a>
                </li>

                <li class="page-scroll">
                    <a href="#clients">Clients</a>
                </li>

                <li class="page-scroll">
                    <a href="#skills">Skills</a>
                </li>

                <li class="page-scroll">
                    <a href="#contact">Contact</a>
                </li>
                
                <li>
                    <a href="/views/blog.html">Blog</a>
                </li>
            </ul>
        </div>
        <!-- //.navbar-collapse -->
    </div>
    <!-- //.navbar-container -->
</nav>
<!-- //NAVIGATION END -->


<!-- PROFILE SECTION START -->
<section id="profile" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                <div class="col-md-7 match-height">

                    <!-- PROFILE TEXT START -->
                    <div class="profile-text padding-right-yes">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="section-title">Hello, My Name is {{shortName}}.</h2>

                                <p>
                                    {{name}}, born and grew up in {{birthLocation}}. Currently working in {{location}}. Highly motivated, a solution driven developer.
                                </p>

                                <span class="divider"></span>

                                <p class="text-grey">
                                    I currently work for {{employerName}}., as a consultant for different clients and projects where I spend most of my time developing and working on awesome projects.
                                </p>

                                <p class="text-grey">
                                    I am a team player, a self-motivator possessing excellent analytical, communication, problem solving, decision-making and organizational skills. I love to be in a challenging position in the diverse field of design, development and verification software and as well as hardware technologies. I am passionate and enthusiastic in learning and adopting new technologies.
                                </p>

                                <p class="text-grey">
                                    My ultimate objective is to make myself stand in parallel with the latest research and developments, and at the same time benefiting the company for which I work.
                                </p>
                            </div>
                            <!-- //.col-md-12 -->
                        </div>
                        <!-- //.row -->
                    </div>
                    <!-- //PROFILE TEXT END -->

                    <!-- CONTACT DETAILS START -->
                    <div class="contact-details padding-right-yes">
                        <div class="row">
                            <div class="col-sm-6 col-md-5">
                                <h4>Contact Details</h4>

                                <ul class="list-unstyled text-grey">
                                    <li>{{name}}</li>
                                    <li>{{location}}</li>
                                    <li>{{phNumber}}</li>
                                    <li>{{email}}</li>
                                    <li>www.uidev.in</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                                <a class="btn btn-lg btn-custom downloadResumeAnchor" target="_self">
                                    <i class="icon-File-Download"></i> Download Resume
                                </a>
                            </div>
                            <!-- //.col-md-6 -->
                        </div>
                        <!-- //.row -->
                    </div>
                    <!-- //CONTACT DETAILS END -->

                </div>
                <!-- //.col-md-7 -->

                <!-- PROFILE PICTURE START -->
                <div class="col-md-5 hidden-xs hidden-sm match-height pp-wrapper">
                    <!--<div class="profile-picture style-one" style="padding-top: 10%;width: 100%;">-->
                        <!--<img src="assets/images/IAM.jpg" alt="profile picture" class="img-responsive" style="width: 70%;"/>-->
                    <!--</div>-->
                    <div class="profile-picture style-one" style="padding-top: 10%;width: 100%;">
                        <h2 class="iAmTitle">I AM...</h2><br>
                        <!--<img src="assets/images/IAM.jpg" alt="profile picture" class="img-responsive" style="width: 70%;">-->
                        <div class="iAmAmazing">
                            original generous kind clever
                            brave determined thoughtful
                            spontaneous lovable optimistic
                            ambitious caring courageous
                            extraordinary grateful witty
                            successful energetic hopeful
                            dynamic compassionate happy
                            unique inspiring creative daring
                            passionate imaginative fabulous
                            confident intelligent friendly
                            funny independent strong
                            loving insightful positive
                            considerate gracious beautiful
                            adventurous joyful loyal
                            incredible precious brilliant
                            honest genuine talented
                            wonderful fearless amazing
                        </div> <br>
                        <h2 class="iAmTitle">ME</h2></div>
                </div>
                <!-- //PROFILE PICTURE END -->
            </div>
            <!-- //.row -->
        </div>
        <!-- //.section-content -->
    </div>
    <!-- //.container -->
</section>

<!-- SERVICES SECTION START -->
<section id="qualities" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="section-title">Qualities I carry...</h2>

                    <p class="section-subtitle">
                        I love what I do. I take great pride in what I do. And I can't do something halfway, three-quarters, nine-tenths. If I'm going to do something, I go all the way.
                    </p>

                    <span class="divider center"></span>
                </div>
                <!-- //.col-md-8 -->
            </div>
            <!-- //.row -->

            <!-- SERVICES START -->
            <div class="qualities">
                <div class="row">
                    <div class="col-sm-4 col-md-4 item top dark-bg match-height">
                        <div class="inner-content">
                            <i class="icon-Geek colored-text"></i>

                            <h4>1. Impressive technical skills</h4>

                            <p class="text-grey">
                                The years of experience I carried so far has given me a great foundation in many areas of other programming languages like Javascript, PHP, Swift, etc., and exposure in many other technical areas.
                            </p>
                        </div>
                        <!-- //.inner-content -->
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-4 col-md-4 item top match-height">
                        <div class="inner-content">
                            <i class="icon-Smile colored-text"></i>

                            <h4>2. Willingness to learn.</h4>

                            <p class="text-grey">
                                It’s important for me as a programmer / consultant to have extreme interest in following the latest trends and eager to participate in any continuing education opportunities that are available and so I "GOOGLE" for it very often.
                            </p>
                        </div>
                        <!-- //.inner-content -->
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-4 col-md-4 item top dark-bg match-height">
                        <div class="inner-content">
                            <i class="icon-Bug colored-text"></i>

                            <h4>3. Debugging skills</h4>

                            <p class="text-grey">
                                Instead of spending hours searching for issues blindly, I prefer to carefully investigate the code and research for possible issues until an answer is found.
                            </p>
                        </div>
                        <!-- //.inner-content -->
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-4 col-md-4 item top dark-bg match-height">
                        <div class="inner-content">
                            <i class="icon-Smart colored-text"></i>

                            <h4>4. Problem solving skills</h4>

                            <p class="text-grey">
                                Programming can best be compared to solving an extremely difficult math equation. I thrive on finding ways to make something work, despite the odds. I foresee every possible scenario / situation to solve a given problem thinking out of the box.
                            </p>
                        </div>
                        <!-- //.inner-content -->
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-4 col-md-4 item top dark-bg match-height">
                        <div class="inner-content">
                            <i class="icon-Monitor-Tablet colored-text"></i>

                            <h4>5. Passion for the work</h4>

                            <p class="text-grey">
                                I gladly put in long hours when the situation merits in. I am more of a self proclaimed "computer geek", spending most of the time creating apps for friends & community, building and tweaking servers, learning new technical and non technical things while in my spare time.
                            </p>
                        </div>
                        <!-- //.inner-content -->
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-4 col-md-4 item top dark-bg match-height">
                        <div class="inner-content">
                            <i class="icon-Cool colored-text"></i>

                            <h4>6. Grace under fire</h4>

                            <p class="text-grey">
                                Almost 90% of the time, I always was able to handle tight deadlines and even the most stressful situations calmly and gracefully, and most importantly be able to continue working. All what I require is a complete silence environment to thrive.
                            </p>
                        </div>
                        <!-- //.inner-content -->
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-4 col-md-4 item top dark-bg match-height">
                        <div class="inner-content">
                            <i class="icon-Wifi-2 colored-text"></i>

                            <h4>7. People skills</h4>

                            <p class="text-grey">
                                I regularly interact with client, managers, business users, co-workers for various reasons. I tend to participate in client meetings, business meetings, etc., to keep up with the ongoing happenings and also explain them how a system works.
                            </p>
                        </div>
                        <!-- //.inner-content -->
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-4 col-md-4 item top dark-bg match-height">
                        <div class="inner-content">
                            <i class="icon-Sleeping colored-text"></i>

                            <h4>8. Laziness</h4>

                            <p class="text-grey">
                                Yes, being a human, I sometimes go lazy, which I do not consider it to be a bad trait to which would impact my productivity. Instead being so, I sometimes find a best way to do something quickly in a more efficient way.
                            </p>
                        </div>
                        <!-- //.inner-content -->
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-4 col-md-4 dark-bg item top match-height">
                        <div class="inner-content">
                            <i class="icon-Idea-3 colored-text"></i>

                            <h4>9. Business perspective</h4>

                            <p class="text-grey">
                                Being a business-focussed programmer, it's not easy for me to lose sight of the big picture while focusing on creating one piece of software. I do come up with suggestions and ideas for new applications that can improve operations and move beyond the current application.
                            </p>
                        </div>
                        <!-- //.inner-content -->
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-4 col-md-4 item top match-height">
                        <div class="inner-content">
                            <i class="icon-Idea-4 colored-text"></i>

                            <h4>10. Ability to plan</h4>

                            <p class="text-grey">
                                Rather than jumping into a new assignment, I first learn as much possible about the desired end product. Once I complete that analysis, I would go with design in mind before typing in the first line of code.
                            </p>
                        </div>
                        <!-- //.inner-content -->
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-4 col-md-4 item top match-height">
                        <div class="inner-content">
                            <i class="icon-Bow-6 colored-text"></i>

                            <h4>11. Ability to handle failure</h4>

                            <p class="text-grey">
                                I always love to fail first and pass later while programming. In fact, failure is almost a certainity. I rarely get everything right on the first try. However, I see errors and bugs as a challenge rather than a sign of defeat. I have the ability to start over from scratch if necessary, even after hours of work.
                            </p>
                        </div>
                        <!-- //.inner-content -->
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-4 col-md-4 item top match-height">
                        <div class="inner-content">
                            <i class="icon-Business-Mens colored-text"></i>

                            <h4>12. Teamwork mentality</h4>

                            <p class="text-grey">
                                I rarely get the oppurtunity to work alone. I always carry the ability to collaberately  work with clients, managers, business users, marketing and sales staff, and fellow programmers (sometimes do pair programming, based on needs).
                            </p>
                        </div>
                        <!-- //.inner-content -->
                    </div>
                    <!-- //.item --><!-- //.item -->

                    <div class="col-sm-4 col-md-4 item match-height">
                        <div class="inner-content">
                            <i class="icon-Professor colored-text"></i>

                            <h4>13. Willingness to research</h4>

                            <p class="text-grey">
                                As my career progressed working with variety of different clients, it wasn't just researching the programming language api kept me rolling but it was essentially important for me to understand the business structure for the client I work for, which eventually ended up having me the willingness to research the business.
                            </p>
                        </div>
                        <!-- //.inner-content -->
                    </div>
                    <!-- //.item --><!-- //.item -->

                    <div class="col-sm-4 col-md-4 item match-height">
                        <div class="inner-content">
                            <i class="icon-Synchronize colored-text"></i>

                            <h4>14. MultiTasking & Preferred Work Environment</h4>

                            <p class="text-grey">
                                Whenever I feel I am confident enough, I sometimes multitask, to speed up the process or save time. I feel confident that my competency on deliverables, problem-solving skills and debugging skills are more productive when working in a quiet environment rather than working in chaos.
                            </p>
                        </div>
                        <!-- //.inner-content -->
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-4 col-md-4 item match-height">
                        <div class="inner-content">
                            <i class="icon-Sand-watch2 colored-text"></i>

                            <h4>15. Respect for deadlines</h4>

                            <p class="text-grey">
                                I do work on projects with deadlines and I respect that. It makes me more responsible by adhering to timelines, if I am preparing for something or want to achieve something, I would rather set a examination date or a deadline date first.
                            </p>
                        </div>
                        <!-- //.inner-content -->
                    </div>
                    <!-- //.item -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //SERVICES END -->
        </div>
        <!-- //.section-content -->
    </div>
    <!-- //.container -->
</section>
<!-- //SERVICES SECTION END -->


<!-- STRENGTHS SECTION START -->
<section id="strengths" class="section bg-image-yes">
    <div class="container-fluid">
        <div class="row">

            <div class="item col-md-6">
                <div class="container-fluid section-wrapper">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center myStrengthsTitle">
                                <h2 class="section-title">My Strengths</h2>

                                <p class="section-subtitle">Failure will never overtake me if my determination to succeed is strong enough.</p>

                                <span class="divider center"></span>
                            </div>
                            <!-- //.col-md-8 -->
                        </div>
                        <!-- //.row -->

                        <div class="row">
                            <div class="col-md-12 myStrengthsContent">

                                <!-- COLUMN CHART START -->
                                <div class="column-chart">
                                    <div class="legend legend-left hidden-xs">
                                        <h3 class="legend-title">ME</h3>
                                    </div>
                                    <!-- //.legend -->

                                    <div class="legend legend-right hidden-xs">
                                        <div class="item">
                                            <h4>Superhero</h4>
                                        </div>
                                        <!-- //.item -->

                                        <div class="item">
                                            <h4>Preety Good</h4>
                                        </div>
                                        <!-- //.item -->

                                        <div class="item">
                                            <h4>Good</h4>
                                        </div>
                                        <!-- //.item -->

                                        <div class="item">
                                            <h4>Newbie</h4>
                                        </div>
                                        <!-- //.item -->
                                    </div>
                                    <!-- //.legend -->

                                    <div class="chart clearfix">
                                        <div class="item">
                                            <div class="bar">
                                                <span class="percent">82%</span>

                                                <div class="item-progress" data-percent="82" style="height: 294.4px;">
                                                    <span class="title">Innovation</span>
                                                </div>
                                                <!-- //.item-progress -->
                                            </div>
                                            <!-- //.bar -->
                                        </div>
                                        <!-- //.item -->

                                        <div class="item">
                                            <div class="bar">
                                                <span class="percent">71%</span>

                                                <div class="item-progress" data-percent="71" style="height: 227.2px;">
                                                    <span class="title">Reliable</span>
                                                </div>
                                                <!-- //.item-progress -->
                                            </div>
                                            <!-- //.bar -->
                                        </div>
                                        <!-- //.item -->

                                        <div class="item">
                                            <div class="bar">
                                                <span class="percent">82%</span>

                                                <div class="item-progress" data-percent="82" style="height: 262.4px;">
                                                    <span class="title">Communication</span>
                                                </div>
                                                <!-- //.item-progress -->
                                            </div>
                                            <!-- //.bar -->
                                        </div>
                                        <!-- //.item -->

                                        <div class="item">
                                            <div class="bar">
                                                <span class="percent">58%</span>

                                                <div class="item-progress" data-percent="58" style="height: 185.6px;">
                                                    <span class="title">Leadership</span>
                                                </div>
                                                <!-- //.item-progress -->
                                            </div>
                                            <!-- //.bar -->
                                        </div>
                                        <!-- //.item -->

                                        <div class="item">
                                            <div class="bar">
                                                <span class="percent">67%</span>

                                                <div class="item-progress" data-percent="67" style="height: 214.4px;">
                                                    <span class="title">Persuasion</span>
                                                </div>
                                                <!-- //.item-progress -->
                                            </div>
                                            <!-- //.bar -->
                                        </div>
                                        <!-- //.item -->
                                    </div>
                                    <!-- //.chart -->
                                </div>
                                <!-- //COLUMN CHART END -->

                            </div>
                            <!-- //.col-md-12 -->
                        </div>
                        <!-- //.row -->
                    </div>
                    <!-- //.section-content -->
                </div>
                <!-- //.container -->
            </div>

            <div class="item col-md-6">
                <div class="container-fluid section-wrapper">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center myStrengthsTitle">
                                <h2 class="section-title">My Stages of Grief</h2>

                                <p class="section-subtitle">Failure will never overtake me if my determination to succeed is strong enough.</p>

                                <span class="divider center"></span>
                            </div>
                            <!-- //.col-md-8 -->
                        </div>
                        <!-- //.row -->

                        <div class="row">
                            <div class="col-md-12 myStrengthsContent">

                                <!-- COLUMN CHART START -->
                                <div class="column-chart">
                                    <div class="legend legend-left hidden-xs">
                                        <h3 class="legend-title">ME</h3>
                                    </div>
                                    <!-- //.legend -->

                                    <div class="legend legend-right hidden-xs">
                                        <div class="item">
                                            <h4>Extreme</h4>
                                        </div>
                                        <!-- //.item -->

                                        <div class="item">
                                            <h4>Less Extreme</h4>
                                        </div>
                                        <!-- //.item -->

                                        <div class="item">
                                            <h4>Average</h4>
                                        </div>
                                        <!-- //.item -->

                                        <div class="item">
                                            <h4>Newbie</h4>
                                        </div>
                                        <!-- //.item -->
                                    </div>
                                    <!-- //.legend -->

                                    <div class="chart clearfix">
                                        <div class="item">
                                            <div class="bar">
                                                <span class="percent">50%</span>

                                                <div class="item-progress" data-percent="50" style="height: 294.4px;">
                                                    <span class="title">Denial</span>
                                                </div>
                                                <!-- //.item-progress -->
                                            </div>
                                            <!-- //.bar -->
                                        </div>
                                        <!-- //.item -->

                                        <div class="item">
                                            <div class="bar">
                                                <span class="percent">35%</span>

                                                <div class="item-progress" data-percent="35" style="height: 227.2px;">
                                                    <span class="title">Anger</span>
                                                </div>
                                                <!-- //.item-progress -->
                                            </div>
                                            <!-- //.bar -->
                                        </div>
                                        <!-- //.item -->

                                        <div class="item">
                                            <div class="bar">
                                                <span class="percent">60%</span>

                                                <div class="item-progress" data-percent="60" style="height: 262.4px;">
                                                    <span class="title">Bargaining</span>
                                                </div>
                                                <!-- //.item-progress -->
                                            </div>
                                            <!-- //.bar -->
                                        </div>
                                        <!-- //.item -->

                                        <div class="item">
                                            <div class="bar">
                                                <span class="percent">55%</span>

                                                <div class="item-progress" data-percent="55" style="height: 185.6px;">
                                                    <span class="title">Depression</span>
                                                </div>
                                                <!-- //.item-progress -->
                                            </div>
                                            <!-- //.bar -->
                                        </div>
                                        <!-- //.item -->

                                        <div class="item">
                                            <div class="bar">
                                                <span class="percent">80%</span>

                                                <div class="item-progress" data-percent="80" style="height: 214.4px;">
                                                    <span class="title">Acceptance</span>
                                                </div>
                                                <!-- //.item-progress -->
                                            </div>
                                            <!-- //.bar -->
                                        </div>
                                        <!-- //.item -->
                                    </div>
                                    <!-- //.chart -->
                                </div>
                                <!-- //COLUMN CHART END -->

                            </div>
                            <!-- //.col-md-12 -->
                        </div>
                        <!-- //.row -->
                    </div>
                    <!-- //.section-content -->
                </div>
                <!-- //.container -->
            </div>
        </div>
    </div>
</section>
<!-- //STRENGTHS SECTION END -->

<!-- RESUME SECTION START -->
<section id="resume" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="section-title">My Resume</h2>

                    <p class="section-subtitle">
                        If you call failures experiments, you can put them in your resume and claim them as achievements.
                    </p>

                    <span class="divider center"></span>
                </div>
                <!-- //.col-md-8 -->
            </div>
            <!-- //.row -->

            <!-- EDUCATION START -->
            <div class="row education">
                <div class="col-md-10 col-md-offset-1">
                        <h3>
                        {{educationDetails.title}}
                        <br>
                         {{educationDetails.year}}
                        </h3>
                        <p style="text-align:center">{{educationDetails.body}}</p>
                    <div class="panel-group resume" id="education">
                        
                        <div class="resume-item" ng-repeat="item in educationDetails.degrees">
                            <div class="resume-year">
                                <span class="resume-year">{{item.year}}</span>
                            </div>
                            <!-- //.resume-year -->

                            <div class="resume-btn">
                                <a href="#education{{$index+1}}" data-toggle="collapse" data-parent="#education"></a>
                            </div>
                            <!-- //.resume-btn -->

                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4 class="resume-title">{{item.title}}</h4>
                                        <br>
                                        <h6 class="college-title">{{item.collegeTitle}}</h6>
                                    </div>
                                    <!-- //.panel-title -->
                                </div>
                                <!-- //.panel-heading -->

                                <div id="education{{$index+1}}" class="panel-collapse collapse in">
                                    <div class="panel-body text-grey">
                                        <p>{{item.body}}</p>
                                    </div>
                                    <!-- //.panel-body -->
                                </div>
                                <!-- //.panel-collapse -->
                            </div>
                            <!-- //.panel -->
                        </div>

                    </div>
                    <!-- //.panel-group -->
                </div>
                <!-- //.col-md-10 -->
            </div>
            <!-- //EDUCATION END -->

            <!-- WORK EXPERIENCE START -->
            <div class="row work-experience">
                <div class="col-md-10 col-md-offset-1">
                    <h3>
                        {{workExperience.title}}
                        <br>
                        {{workExperience.year}}
                    </h3>

                    <div class="panel-group resume" id="work">
                        <div class="resume-item" ng-repeat="work in workExperience.details">
                            <div class="resume-year">
                                <span class="resume-year">{{work.year}}</span>
                            </div>
                            <!-- //.resume-year -->

                            <div class="resume-btn">
                                <a href="#work{{$index+1}}" data-toggle="collapse" data-parent="#work"></a>
                            </div>
                            <!-- //.resume-btn -->

                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4 class="resume-title">{{work.client}}</h4>
                                    </div>
                                    <!-- //.panel-title -->
                                </div>
                                <!-- //.panel-heading -->

                                <div id="work{{$index+1}}" class="panel-collapse collapse in">
                                    <br>
                                   <h4 class="resume-title" style="margin-left: 15px">Responsibilities:</h4>
                                   <div class="panel-body text-grey">
                                        <p class="projectResponsibilities" ng-bind-html="work.responsibilities">
                                            
                                        </p>
                                    </div>
                                    <!-- //.panel-body -->
                                </div>
                                <!-- //.panel-collapse -->
                            </div>
                            <!-- //.panel -->
                        </div>

                        <!-- //.resume-item -->

                        
                    </div>
                    <!-- //.panel-group -->
                </div>
                <!-- //.col-md-10 -->
            </div>
            <!-- //WORK EXPERIENCE END -->
        </div>
        <!-- //.section-content -->
    </div>
    <!-- //.container -->
</section>
<!-- //RESUME SECTION END -->


<!-- CLIENTS SECTION START -->
<section id="clients" class="section bg-image-yes">
    <div class="container-fluid section-wrapper">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="section-title">Projects & Clients</h2>

                    <p class="section-subtitle">The best preparation for good work tomorrow is to do good work today. - Elbert Hubbard</p>

                    <span class="divider center"></span>
                </div>
                <!-- //.col-md-12 -->
            </div>
            <!-- //.row -->

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="flexslider clients">
                        <div class="slides">
                            <div class="item" ng-repeat="client in clients">
                                <div class="animated" data-animation-effect="flipInX">
                                    <div class="profile hidden-xs">
                                        <img src="{{client.logoUrl}}" alt="" class="img-responsive img-thumbnail"/>
                                    </div>

                                    <div class="content">
                                        <h3>{{client.name}}</h3>

                                        <p class="detail">
                                            {{client.about}}
                                        </p>

                                        <p class="source">
                                            {{client.myDesignation}}
                                            <br>
                                            <span>{{client.duration}}</span>
                                        </p>
                                    </div>
                                    <!-- //.content -->
                                </div>
                                <!-- //.animated -->
                            </div>
                            <!-- //.item -->

                        <!-- //.slides -->

                        <div class="flexslider-controls">
                            <ul class="flex-control-nav">
                                <li ng-repeat="logo in clients">
                                    <img src="{{logo.logoUrl}}" alt="" class="img-responsive"/>
                                </li>

                            </ul>
                        </div>
                        <!-- //.flexslider-controls -->

                        <ul class="flex-direction-nav-custom list-inline hidden-xs">
                            <li>
                                <a class="flex-prev" href="#">
                                    <i class="icon-Left-3"></i>
                                </a>
                            </li>

                            <li>
                                <a class="flex-next" href="#">
                                    <i class="icon-Right-3"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- //.flexslider -->
                </div>
                <!-- //.col-md-8 -->
            </div>
            <!-- //.row -->
        </div>
        <!-- //.section-content -->
    </div>
    <!-- //.container -->
</section>
<!-- //REFERENCES SECTION END -->

<!-- SKILLS SECTION START -->
<section id="skills" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="section-title">Skills & Expertise</h2>

                    <p class="section-subtitle">A winner is someone who recognizes his God-given talents, works his tail off to develop them into skills, and uses these skills to accomplish his goals.</p>

                    <span class="divider center"></span>
                </div>
                <!-- //.col-md-8 -->
            </div>
            <!-- //.row -->

            <!-- CIRCLE CHART START -->
            <div class="circle-chart">
                <div class="row">
                    <div class="col-sm-4 col-md-2">
                        <div class="item">
                            <div class="circle">
                                <span class="item-progress" data-percent="85"></span>
                            </div>
                            <!-- //.circle -->

                            <span class="percent">85%</span>

                            <h4 class="text-center">HTML5 + CSS3 + JS</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.col-md-2 -->

                    <div class="col-sm-4 col-md-2">
                        <div class="item">
                            <div class="circle">
                                <span class="item-progress" data-percent="85"></span>
                            </div>
                            <!-- //.circle -->

                            <span class="percent">85%</span>

                            <h4 class="text-center">UI/Web Frameworks</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.col-md-2 -->

                    <div class="col-sm-4 col-md-2">
                        <div class="item">
                            <div class="circle">
                                <span class="item-progress" data-percent="75"></span>
                            </div>
                            <!-- //.circle -->

                            <span class="percent">45%</span>

                            <h4 class="text-center">Big Data / Hadoop</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.col-md-2 -->

                    <div class="col-sm-4 col-md-2">
                        <div class="item">
                            <div class="circle">
                                <span class="item-progress" data-percent="95"></span>
                            </div>
                            <!-- //.circle -->

                            <span class="percent">95%</span>

                            <h4 class="text-center">Angular JS</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.col-md-2 -->

                    <div class="col-sm-4 col-md-2">
                        <div class="item">
                            <div class="circle">
                                <span class="item-progress" data-percent="85"></span>
                            </div>
                            <!-- //.circle -->

                            <span class="percent">65%</span>

                            <h4 class="text-center">Java/J2EE</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.col-md-2 -->

                    <div class="col-sm-4 col-md-2">
                        <div class="item last">
                            <div class="circle">
                                <span class="item-progress" data-percent="70"></span>
                            </div>
                            <!-- //.circle -->

                            <span class="percent">60%</span>

                            <h4 class="text-center">RDBMS & NoSQL's</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.col-md-2 -->
                    
                </div>
                <!-- //.row -->
                <div class="row">
                    <div class="col-sm-4 col-md-2">
                        <div class="item">
                            <div class="circle">
                                <span class="item-progress" data-percent="75"></span>
                            </div>
                            <!-- //.circle -->

                            <span class="percent">75%</span>

                            <h4 class="text-center">Distributed Systems</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.col-md-2 -->

                    <div class="col-sm-4 col-md-2">
                        <div class="item">
                            <div class="circle">
                                <span class="item-progress" data-percent="85"></span>
                            </div>
                            <!-- //.circle -->

                            <span class="percent">85%</span>

                            <h4 class="text-center">Web Services (REST/SOAP)</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.col-md-2 -->

                    <div class="col-sm-4 col-md-2">
                        <div class="item">
                            <div class="circle">
                                <span class="item-progress" data-percent="80"></span>
                            </div>
                            <!-- //.circle -->

                            <span class="percent">80%</span>

                            <h4 class="text-center">Shell Script (Unix / Linux / Windows)</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.col-md-2 -->

                    <div class="col-sm-4 col-md-2">
                        <div class="item">
                            <div class="circle">
                                <span class="item-progress" data-percent="95"></span>
                            </div>
                            <!-- //.circle -->

                            <span class="percent">75%</span>

                            <h4 class="text-center">Web/App Servers</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.col-md-2 -->

                    <div class="col-sm-4 col-md-2">
                        <div class="item">
                            <div class="circle">
                                <span class="item-progress" data-percent="85"></span>
                            </div>
                            <!-- //.circle -->

                            <span class="percent">85%</span>

                            <h4 class="text-center">Build Automation Tools</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.col-md-2 -->

                    <div class="col-sm-4 col-md-2">
                        <div class="item last">
                            <div class="circle">
                                <span class="item-progress" data-percent="65"></span>
                            </div>
                            <!-- //.circle -->

                            <span class="percent">65%</span>

                            <h4 class="text-center">Template Engines</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.col-md-2 -->
                </div>
                <!-- //.row -->
                <div class="row">
                    <div class="col-sm-4 col-md-2">
                        <div class="item">
                            <div class="circle">
                                <span class="item-progress" data-percent="85"></span>
                            </div>
                            <!-- //.circle -->

                            <span class="percent">85%</span>

                            <h4 class="text-center">Design & Analysis</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.col-md-2 -->

                    <div class="col-sm-4 col-md-2">
                        <div class="item">
                            <div class="circle">
                                <span class="item-progress" data-percent="85"></span>
                            </div>
                            <!-- //.circle -->

                            <span class="percent">85%</span>

                            <h4 class="text-center">Version Tools</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.col-md-2 -->

                    <div class="col-sm-4 col-md-2">
                        <div class="item">
                            <div class="circle">
                                <span class="item-progress" data-percent="95"></span>
                            </div>
                            <!-- //.circle -->

                            <span class="percent">95%</span>

                            <h4 class="text-center">Bug Tracking Tools</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.col-md-2 -->

                    <div class="col-sm-4 col-md-2">
                        <div class="item">
                            <div class="circle">
                                <span class="item-progress" data-percent="95"></span>
                            </div>
                            <!-- //.circle -->

                            <span class="percent">95%</span>

                            <h4 class="text-center">Development Tools & IDE&#39;s</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.col-md-2 -->

                    <div class="col-sm-4 col-md-2">
                        <div class="item">
                            <div class="circle">
                                <span class="item-progress" data-percent="85"></span>
                            </div>
                            <!-- //.circle -->

                            <span class="percent">85%</span>

                            <h4 class="text-center">Networking Tools</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.col-md-2 -->

                    <div class="col-sm-4 col-md-2">
                        <div class="item last">
                            <div class="circle">
                                <span class="item-progress" data-percent="55"></span>
                            </div>
                            <!-- //.circle -->

                            <span class="percent">55%</span>

                            <h4 class="text-center">SOA / BRM / BPM Tools</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.col-md-2 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //CIRCLE CHART END -->
        </div>
        <!-- //.section-content -->
    </div>
    <!-- //.container -->
</section>
<!-- //SKILLS SECTION END -->

<!-- KNOWLEDGE SECTION START -->
<section id="knowledge" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="section-title">Knowledge</h2>

                    <p class="section-subtitle">Knowledge comes from learning. Wisdom comes from living and Wisdom begins with Wonder.</p>

                    <span class="divider center"></span>
                </div>
                <!-- //.col-md-8 -->
            </div>
            <!-- //.row -->

            <!-- BAR CHART START -->
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="bar-chart">
                        <div class="item">
                            <h4>Server Side Programming</h4>

                            <div class="bar">
                                <span class="percent">85%</span>
                                <span class="item-progress" data-percent="85"></span>
                            </div>
                            <!-- //.bar -->
                        </div>
                        <!-- //.item -->

                        <div class="item">
                            <h4>Web Development</h4>

                            <div class="bar">
                                <span class="percent">90%</span>
                                <span class="item-progress" data-percent="90"></span>
                            </div>
                            <!-- //.bar -->
                        </div>
                        <!-- //.item -->

                        <div class="item">
                            <h4>RDBMS & NoSQL's</h4>

                            <div class="bar">
                                <span class="percent">75%</span>
                                <span class="item-progress" data-percent="75"></span>
                            </div>
                            <!-- //.bar -->
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.bar-chart -->
                </div>
                <!-- //.col-md-6 -->

                <div class="col-sm-6 col-md-6">
                    <div class="bar-chart">
                        <div class="item">
                            <h4>Virtualization Concepts</h4>

                            <div class="bar">
                                <span class="percent">80%</span>
                                <span class="item-progress" data-percent="80"></span>
                            </div>
                            <!-- //.bar -->
                        </div>
                        <!-- //.item -->

                        <div class="item">
                            <h4>Networking Protocols & Tracking</h4>

                            <div class="bar">
                                <span class="percent">90%</span>
                                <span class="item-progress" data-percent="90"></span>
                            </div>
                            <!-- //.bar -->
                        </div>
                        <!-- //.item -->

                        <div class="item">
                            <h4>Security, Tools & IDE's </h4>

                            <div class="bar">
                                <span class="percent">85%</span>
                                <span class="item-progress" data-percent="80"></span>
                            </div>
                            <!-- //.bar -->
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.bar-chart -->
                </div>
                <!-- //.col-md-6 -->
            </div>
            <!-- //BAR CHART END -->
        </div>
        <!-- //.section-content -->
    </div>
    <!-- //.container -->

</section>
<!-- //KNOWLEDGE SECTION END -->


<!-- ACCOLADES SECTION START -->
<!-- <section id="accolades" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="section-title">Accolades</h2>

                    <p class="section-subtitle">The accolades, just like the scrapes and bruises, fade in the end, and all you're left with is your ambition.</p>

                    <span class="divider center"></span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">

                    <div class="accolades">
                        <div class="item">
                            <i class="icon-Idea-2"></i>

                            <div class="content">
                                <h3>Erlang Language - 2010</h3>

                                <p class="text-grey">A course completion certificate from Erlang Solutions on Erlang Language.</p>
                            </div>
                        </div>

                        <div class="item">
                            <i class="icon-Twitter"></i>

                            <div class="content">
                                <h3>Six Sigma (Green Belt) - 2008</h3>

                                <p class="text-grey">Received Green Belt in Six Sigma as part of my Masters Course.</p>
                            </div>
                        </div>

                        <div class="item">
                            <i class="icon-Brush"></i>

                            <div class="content">
                                <h3>Post Graduation Diploma in Computer Applications (PGDCA) - 2001</h3>

                                <p class="text-grey">Congratulated with distinction in MS-DOS, C language and MS Office 98 by National Computing Council, India.</p>

                            </div>
                        </div>

                        <div class="item">
                            <i class="icon-Funky"></i>

                            <div class="content">
                                <h3>Locknil Computer Education - 1997</h3>

                                <p class="text-grey">Certificate in Basic Computer Language (Elementary)</p>
                            </div>
                        </div>
                    </div>

                    <div class="bookmark text-grey text-center">
                        <i class="icon-Bookmark"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- //ACCOLADES SECTION END -->


<!-- MILESTONES SECTION START -->
<section id="milestones" class="section bg-image-yes">
    <div class="container-fluid section-wrapper">
        <div class="section-content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="section-title">Milestones Achieved</h2>

                    <p class="section-subtitle">My path has not been determined. I shall have more experiences and pass many more milestones.</p>

                    <span class="divider center"></span>
                </div>
                <!-- //.col-md-8 -->
            </div>
            <!-- //.row -->

            <!-- MILESTONES START -->
            <div class="milestones">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <div class="circle">
                            <i class="icon-Coffee"></i>
                        </div>
                        <!-- //.circle -->

                            <span class="number" data-from="10" data-to="5012" data-refresh-interval="100">
                                10
                            </span>

                        <h4>Cups of Coffee</h4>
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-6 col-md-3 item">
                        <div class="circle">
                            <i class="icon-Clock"></i>
                        </div>
                        <!-- //.circle -->

                            <span class="number" data-from="10" data-to="19432" data-refresh-interval="100">
                                10
                            </span>

                        <h4>Hours Worked</h4>
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-6 col-md-3 item">
                        <div class="circle">
                            <i class="icon-Coding"></i>
                        </div>
                        <!-- //.circle -->

                            <span class="number" data-from="5" data-to="6" data-refresh-interval="10">
                                6
                            </span>

                        <h4>Succesful Projects</h4>
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-6 col-md-3 item">
                        <div class="circle">
                            <i class="icon-Smile"></i>
                        </div>
                        <!-- //.circle -->

                            <span class="number" data-from="4" data-to="5" data-refresh-interval="10">
                                5
                            </span>

                        <h4>Happy Clients</h4>
                    </div>
                    <!-- //.item -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //MILESTONES END -->
        </div>
        <!-- //.section-content -->
    </div>
    <!-- //.container -->
</section>
<!-- //MILESTONES SECTION END -->


<!-- WORK PROCESS SECTION START -->
<section id="work-process" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="section-title">Work Process</h2>

                    <p class="section-subtitle">
                        I put my heart and my soul into my work, and have lost my mind in the process - Vincent Van Gogh
                    </p>

                    <span class="divider center"></span>
                </div>
                <!-- //.col-md-12 -->
            </div>
            <!-- //.row -->

            <div class="row">
                <div class="col-md-12">
                    <p class="text-grey text-justify">
                        With over 8 years of extensive experience and expertise across different domains with a variety of clients, I have the competence to understand the clients business needs and provide the client with cutting-edge software and mobile applications.
                    </p>
                </div>
                <!-- //.col-md-12 -->
            </div>
            <!-- //.row -->

            <!-- WORK PROCESS START -->
            <div class="work-process">
                <div class="row">
                    <div class="col-sm-2 col-md-2 item no-margin first">
                        <div class="inner-content">
                            <i class="icon-Files"></i>

                            <span class="title">1. Requirements</span>

                            <span class="dot"></span>
                        </div>
                        <!-- //.inner-content -->

                        <i class="icon-Arrow icon-Down-3"></i>
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-2 col-md-2 item">
                        <div class="inner-content">
                            <i class="icon-Pencil"></i>

                            <span class="title">2. Design</span>
                        </div>
                        <!-- //.inner-content -->

                        <i class="icon-Arrow icon-Up-3"></i>
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-2 col-md-2 item no-margin">
                        <div class="inner-content">
                            <i class="icon-Coding"></i>

                            <span class="title">3. Implement</span>
                        </div>
                        <!-- //.inner-content -->

                        <i class="icon-Arrow icon-Down-3"></i>
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-2 col-md-2 item">
                        <div class="inner-content">
                            <i class="icon-Bug"></i>

                            <span class="title">4. Test</span>
                        </div>
                        <!-- //.inner-content -->

                        <i class="icon-Arrow icon-Up-3"></i>
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-2 col-md-2 item no-margin">
                        <div class="inner-content">
                            <i class="icon-Rocket"></i>

                            <span class="title">5. Deliver</span>
                        </div>
                        <!-- //.inner-content -->

                        <i class="icon-Arrow icon-Down-3"></i>
                    </div>
                    <!-- //.item -->

                    <div class="col-sm-2 col-md-2 item last">
                        <div class="inner-content">
                            <i class="icon-Monitor-2"></i>

                            <span class="title">6. Support</span>

                            <span class="dot"></span>
                        </div>
                        <!-- //.inner-content -->
                    </div>
                    <!-- //.item -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //WORK PROCESS END -->

            <div class="row">
                <div class="col-md-12">
                    <p class="text-grey text-justify">
                        I intend to reduce the risks and time associated with the application development and so I follow industry standard SDLC (Software Developement Life Cycle) process. I generally follow spiral iterative methodology to build software applications in the shortest possible time and with zero risk. I start the project by gathering business and technical requirements, designing, development, integration & testing, deployment & acceptance and finally maintaining the product.
                    </p>
                </div>
                <!-- //.col-md-12 -->
            </div>
            <!-- //.row -->
        </div>
        <!-- //.section-content -->
    </div>
    <!-- //.container -->
</section>
<!-- //WORK PROCESS SECTION END -->


<!-- CONTACT SECTION START -->
<section id="contact" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">Say Hello</h1>

                    <p class="section-subtitle">
                        <!--Have a project you'd like to discuss?-->
                        Have exciting work !!! Let's discuss.
                    </p>

                    <span class="divider center"></span>
                </div>
                <!-- //.col-md-12 -->
            </div>
            <!-- //.row -->

            <div class="row">
                <div class="col-md-12">

                    <!-- CONTACT DETAILS START -->
                    <div class="contact-details text-center">
                        <div class="speech-bubble">
                            <!--<button type="submit" class="sayHello">
                                <h4>
                                    Say<br>Hello
                                </h4>
                            </button>
                            <i class="icon-Speach-Bubble11"></i>-->
                            <input type="image" src="assets/icons/sendEmail.png" name="saveForm" class="img-responsive sayHello" id="saveForm" />
                            <!--<img src="assets/icons/sendEmail.png" class="img-responsive">-->
                        </div>
                        <!-- //.speech-bubble -->

                        <h2><strong>{{name}}</strong></h2>

                        <h4 class="text-grey">{{email}}</h4>

                        <span class="divider center"></span>
                    </div>
                    <!-- //CONTACT DETAILS END -->
                </div>
                <!-- //.col-md-12 -->
            </div>
            <!-- //.row -->

            <div class="row" id="contactFormRow">
                <div class="col-md-8 col-md-offset-2">

                    <!-- CONTACT FORM START -->
                    <!--<form action="services/contact/sendEmailTest.php" method="post" name="contact-form" id="contact-form" class="contact-form validate element-line" role="form" novalidate="novalidate">-->
                    <form action="services/contact/sendEmail.php" method="post" name="contact-form" id="contact-form" class="contact-form validate element-line" role="form" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <input type="text" name="name" id="name" class="form-control required" placeholder="Name" autocomplete="off" aria-required="true">
                                    </div>
                                    <!-- //.input-group -->
                                </div>
                                <!-- //.form-group -->
                            </div>
                            <!-- //.col-md-6 -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <input type="email" name="email" id="email" class="form-control required email" placeholder="Email" autocomplete="off" aria-required="true">
                                    </div>
                                    <!-- //.input-group -->
                                </div>
                                <!-- //.form-group -->
                            </div>
                            <!-- //.col-md-6 -->
                        </div>
                        <!-- //.row -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <input type="text" name="subject" id="subject" class="form-control required" placeholder="Subject" autocomplete="off" aria-required="true">
                                    </div>
                                    <!-- //.input-group -->
                                </div>
                                <!-- //.form-group -->
                            </div>
                            <!-- //.col-md-12 -->
                        </div>
                        <!-- //.row -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <textarea name="message" id="message" class="form-control required valid" placeholder="Message" aria-required="true" aria-invalid="false"></textarea>
                                    </div>
                                    <!-- //.input-group -->
                                </div>
                                <!-- //.form-group -->
                            </div>
                            <!-- //.col-md-12 -->
                        </div>
                        <!-- //.row -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button id="submit" type="submit">Say Hello</button>
                                </div>
                                <!-- //.form-group -->
                            </div>
                            <!-- //.col-md-12 -->
                        </div>
                        <!-- //.row -->
                    </form>
                    <!-- //CONTACT FORM END -->

                </div>
                <!-- //.col-md-8 -->
            </div>
        </div>
        <!-- //.section-content -->
    </div>
    <!-- //.container -->
</section>
<!-- //CONTACT SECTION END -->

<!-- MAP START -->
<div id="map">
    <div class="address">
        <h4>{{location}}</h4>
    </div>
    <!-- //.address -->

    <div id="cd-google-map">
        <div id="google-container"></div>
    </div>
    <!-- //.cd-google-map -->
</div>
<!-- //MAP END -->

<!-- FOOTER START -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-scroll">
                    <a href="#page-top"><i class="icon-Arrow-Up"></i></a>
                </div>
                <!-- //.page-scroll -->

                <ul class="list-inline social-icons">
                    <li>
                        <div class="item">
                            <a href="fbUrl" target="_blank"><i class="fa fa-facebook"></i></a>
                        </div>
                        <!-- //.item -->
                    </li>

                    <!--<li>
                        <div class="item">
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        </div>
                        &lt;!&ndash; //.item &ndash;&gt;
                    </li>-->

                    <li>
                        <div class="item">
                            <a href="linkedInUrl" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <!-- //.item -->
                    </li>

                    <li>
                        <div class="item">
                            <a href="gitHubLink" target="_blank"><i class="fa fa-github"></i></a>
                        </div>
                        <!-- //.item -->
                    </li>

                    <li>
                        <div class="item">
                            <a href="googlePlusUrl" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <!-- //.item -->
                    </li>
                </ul>
            </div>
            <!-- //.col-md-12 -->
        </div>
        <!-- //.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="copyright text-center">
                    <p class="text-grey">&copy; 2016 {{name}}. All rights reserved.</p>
                </div>
                <!-- //.copyright -->
            </div>
            <!-- //.col-md-12 -->
        </div>
        <!-- //.row -->
    </div>
    <!-- //.container -->
</footer>
<!-- //FOOTER END -->


<!-- Plugins JS -->
<script src="assets/plugins/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/jpreloader/js/jpreloader.min.js"></script>
<script src="assets/plugins/detectmobilebrowser/detectmobilebrowser.js"></script>
<script src="assets/plugins/debouncer/debouncer.js"></script>
<script src="assets/plugins/easing/jquery.easing.min.js"></script>
<script src="assets/plugins/sticky/jquery.sticky.js"></script>
<script src="assets/plugins/inview/jquery.inview.min.js"></script>
<script src="assets/plugins/matchHeight/jquery.matchHeight-min.js"></script>
<script src="assets/plugins/magnificPopup/jquery.magnific-popup.min.js"></script>
<script src="assets/plugins/flexSlider/jquery.flexslider-min.js"></script>
<script src="assets/plugins/countTo/jquery.countTo.js"></script>
<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/plugins/validation/jquery.validate.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap-dialog.min.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<!-- Background Carousel JS -->
<script src="assets/js/bg-carousel.js"></script>

<!-- Animation JS (Optional) -->
<script src="assets/js/animation.js"></script>

<!-- Contact JS -->
<script src="assets/js/contact.js"></script>

<!-- Map JS -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="assets/js/map.js"></script>

</body>

</html>

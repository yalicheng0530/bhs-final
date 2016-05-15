<?php get_header(); ?>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="container">
        <header id="masthead">
            <img class="logo" src="<?php bloginfo('template_directory'); ?>/_img/bhs_logo.png" alt="BHS Logo">
            <img class="nav-img" src="<?php bloginfo('template_directory'); ?>/_img/nav_img.png" alt="nav img">
            <ul class="top-menu">

                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About Us</a>
                </li>
                <li>
                    <a href="#">FAQ</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
            <a class="facebook" href="#">
                <p>facebook</p>
                <img src="<?php bloginfo('template_directory'); ?>/_img/facebook_logo.png" alt="fb-img">
            </a>
            <form action="#">
                <input type="text" placeholder="SEARCH">
                <input type="submit">
            </form>
            <a class="donate-btn" href="#">
                <p>donate</p>
                <img src="<?php bloginfo('template_directory'); ?>/_img/donate_up.png" alt="donate-up">
            </a>
            <nav class="primary">
                <ul>
                    <li>
                        <a href="#">home</a>
                    </li>
                    <li>
                        <a href="#">about us</a>
                    </li>
                    <li>
                        <a href="#">services</a>
                    </li>
                    <li>
                        <a href="#">what's addiction</a>
                    </li>
                    <li>
                        <a href="#">make an appointment</a>
                    </li>
                    <li>
                        <a class="last" href="#">contact</a>
                    </li>
                </ul>
            </nav>
        </header>
        <aside id="left-aside">
            <ul>
                <li>
                    <a href="#">Community Assessment Services Center</a>
                </li>
                <li>
                    <a href="#">Residential</a>
                </li>
                <li>
                    <a href="#">Youth</a>
                </li>
                <li>
                    <a href="#">Detox</a>
                </li>
                <li>
                    <a href="#">Dental Health</a>
                </li>
            </ul>
            <div class="involve">
                <h3>Get Involved!</h3>
                <div class="involve-box">
                    <img src="<?php bloginfo('template_directory'); ?>/_img/get_involved_img.jpg" alt="Get involved">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor dolore deleniti obcaecati vero minus fugit minima, animi at. <a class="click" href="#" target="_blank">Click here for more</a></p>
                </div>
                <!-- END .involve-box -->
            </div>
            <!-- END .involve -->
            <div class="success-stories">
                <h3>Success Stories</h3>
                <div class="success-box">
                    <img src="<?php bloginfo('template_directory'); ?>/_img/success_stories_img.jpg" alt="Success stories">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor dolore deleniti obcaecati vero minus fugit minima, animi at. <a class="click" href="#">Click here for more</a></p>
                </div>
                <!-- END .success-box -->
            </div>
            <!-- END .success-stories -->
            <div class="donate-sidebar" href="#">
                <p>donate</p>
                <img src="<?php bloginfo('template_directory'); ?>/_img/donate_side.png" alt="donate-side">
            </div>
        </aside>
        <div class="main-content">
            <h1>Services</h1>
            <div id="breadcrumb">
                <ul class="breadcrumb-list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Prevention &amp; Services for Older Adults</a></li>
                </ul>
            </div>

            <!-- END .breadcrumb -->
            <img src="<?php bloginfo('template_directory'); ?>/_img/head_img.jpg" alt="Since 1973">

            <div class="content">
            <h2>Prevention &amp; Services for Older Adults</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam hic culpa rerum recusandae a, soluta labore aspernatur optio voluptatum dolor maxime sit pariatur sequi tenetur nihil, ad dicta vel rem.</p>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam hic culpa rerum recusandae a, soluta labore aspernatur optio voluptatum dolor maxime sit pariatur sequi tenetur nihil, ad dicta vel rem.</p>
            </div>

            <aside class="site-updates">
                <img calss="social-media" src="<?php bloginfo('template_directory'); ?>/_img/social_media.png" alt="social media">
                <div class="news">
                    <h3>Latest News</h3>
                    <hr>
                    <h4>Fish Oil May Have Positive Effects on Mood, Alcohol Craving, News Study Show</h4>
                    <p class="time">May 27, 2011 10:21AM</p>
                    <p class="author">by ScienceDaily</p>
                    <p>Omega 3 fatty Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae ea maiores aperiam mollitia ipsum. Aut impedit, optio ipsam, dolore officiis voluptas consectetur adipisci numquam porro maxime animi aspernatur repellat atque.</p>
                    <a href="#">MORE</a>
                </div>
                <!-- END .news -->
                <div class="jobs">
                    <h3>Recent Job Post</h3>
                    <hr>
                    <p class="time">Updates May 12, 2011</p>
                    <strong>932-Counselor I-HWD</strong>
                    <br>
                    <a href="#">Click here for more postings</a>
                </div>
                <!-- END .jobs -->
            </aside>
        </div>
        <!-- END .main content-->

<?php get_footer(); ?>

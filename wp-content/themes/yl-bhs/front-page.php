<?php get_header(); ?>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 sidebar-background">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <div class="aside-box">
                    <p>
                    <a href="#">Community Assessment Services Center</a>
                    <hr>
                    <ul>
                    <!-- Font Awesome CSS3 Animated Icon fa-spin -->
                        <li id="active"><a href="#"><i class="fa-li fa fa-spinner fa-spin"></i>Prevention &amp; Services for Older Adults</a></li>
                        <li><a href="#">BHS/Media Education Program</a></li>
                        <li><a href="#">BHS/Promotores de Salud Project</a></li>
                        <li><a href="#">BHS/South Bay Senior Services</a></li>
                    </ul>
                    <hr>
                        <a href="#">Residential</a>
                        <hr>
                        <a href="#">Youth</a>
                        <hr>
                        <a href="#">Detox</a>
                        <hr>
                        <a href="#">Dental Health</a>
                        <hr>
                    </p>

                    <h3>Get Involved</h3>
                    <div class="aside-box boxed" class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                    <img src="<?php bloginfo('template_directory'); ?>/_img/get_involved_img.jpg" alt="get involved thumbnail">
                    <p class="aside">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    <br />
                    <br />
                    <a class="moreinfo" href="#">Click here for more</a>

                    </p>
                    </div>

                    <h3>Success Stories</h3>
                    <div class="aside-box boxed">
                    <img src="<?php bloginfo('template_directory'); ?>/_img/success_stories_img.jpg" alt="success stories thumbnail">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    <br />
                    <br /><a class="moreinfo" href="#">Click here for more</a>
                    </p>
                    </div>
                    <div class="aside-box donate-btn-btm">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/_img/donate-bottom-btn.png"></a>
                    </div>
                    <?php get_sidebar(); ?>
                            <!-- END .aside-box -->
                </div>
                            <!-- END .aside-box -->
            </div>
                        <!-- END 12-column grid -->
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <h1 class="main-header">Services</h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#"></a>Services</li>
                <li><a href="#" class="current-page"></a>Prevention & Services for Older Adults</li>
            </ol>
        </div>
            <!-- END breadcrumb -->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <img src="<?php bloginfo('template_directory'); ?>/_img/head_img.jpg" alt="heading image" class="img-responsive">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                      <?php the_content(); ?>

                    <?php endwhile; endif; ?>

                <!-- HTML5 Canvas -->
                <canvas width="340" height="1" style="border-top:1px solid #eeeeee;"></canvas>
        </div>
            <!-- END 6-column grid -->


        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <p>
                <img class="fbimg" src="<?php bloginfo('template_directory'); ?>/_img/social_media.png">
            <article class="my-facebook-entry clearfix">
                <hgroup>
                    <h3>Latest News</h3>
                    <hr>
                    <h6><strong>Fish Oil May Have Positive Effects on Mood, Alcohol Craving, New Study Shows</strong></h6>
                    <h6><span class="dateText">May 27, 2011 10:21 AM</span><span class="authorText"> by Science Daily</span></h6>
                </hgroup>
                <!-- END hgroup -->
                <p class="remove-left-padding">
                    Omega 3 fatty acids may be beneficial for more than just the heart. Researchers at the Indiana University School of Medicine have found at a molecular level a potential therapeutic benefit from these dietary supplements for treating alcohol abuse and psychiatric disorders.
                </p>
                <a class="moreinfo" href="#">MORE</a>
            </article>
                 <!-- END .my-facebook-entry article -->
            <article class="recent-job-post">
                <hgroup>
                    <h3>Recent Post</h3>
                    <hr>
                    <h6><strong>932-Counselor I-HWD</strong></h6>
                    <h6><span class="dateText">May 9, 2011 10:21 AM</span></h6>
                </hgroup>
                        <!-- END hgroup -->
            <a class="moreinfo" href="#">Click here for more postings</a>
            </article>
                <!-- END .recent-job-post article -->
            </p>


        </div>
    </div>
    <!-- END 6-column grid -->

        <!-- END 4-column grid -->

    <!-- END 12-column grid -->
</div>
<!-- END .row -->



<?php get_footer(); ?>


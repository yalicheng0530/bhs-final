<?php get_header(); ?>

<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

      <div class="col-md-9">
        <div class="page-header">
           <!-- gives us the name of the page itself -->
            <h1><?php wp_title(''); ?></h1>
        </div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <!-- date() only shows date for post on that day, time() function better here -->
            <!-- add name in users section of Dashboard to offer better name display -->
            <p><em>By <?php the_author(); ?>
                 on <?php echo the_time('l, F jS, Y'); ?>
                 in <?php the_category( ', ' ); ?>
                 <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></em>
                 <hr>
                 <?php the_content(); ?>
              </p>
              <?php comments_template(); ?>
          </article>
          <!-- WP function that outputs post content -->


      <?php endwhile; else: ?>
           <!-- we run this else if there is no content -->
      <div class="page-header">
              <h1>Wups!</h1>
            </div>

            <p>Looks like we have no content for this page?</p>

          <?php endif; ?>
      </div>

          <?php get_sidebar( 'blog' ); ?>

  </div>
</div><!-- END .row -->



<?php get_footer(); ?>

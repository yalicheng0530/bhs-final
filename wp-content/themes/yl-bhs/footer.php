
<div class="well well-bottom">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-border">
                <h6 class="text-center bottom-well-margin">About Us</h6>
                    <li><a href="#">Our History</a></li>
                    <li><a href="#">About the CEO</a></li>
                    <li><a href="#">Sed do elusmod tempor</a></li>
                    <li><a href="#">Ut labore et dolore magna</a></li>
            </div>
            <!-- END 3-column grid -->
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-border">
            <h6 class="text-center bottom-well-margin">Services</h6>
            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
            <li><a href="#">Consectetur adipisicing elit</a></li>
            <li><a href="#">Sed do elusmod tempor</a></li>
            <li><a href="#">Ut labore et dolore magna</a></li>
        </div>
            <!-- END 3-column grid -->
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-border">
            <h6 class="text-center bottom-well-margin">Ways to Get Involved</h6>
            <li><a href="#">Make a Donation</a></li>
            <li><a href="#">Become a Corporate Sponsor</a></li>
            <li><a href="#">Volunteer Your Time</a></li>
            <li><a href="#">Partner Your Agency With Ours</a></li>
        </div>
            <!-- END 3-column grid -->
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 cert-logos">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/_img/adp_logo.png" alt="adp certification logo"></a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 cert-logos">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/_img/carf_logo.png" alt="cart certification logo"></a>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 awesome">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 awesome">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 awesome">
                <i class="fa fa-youtube" aria-hidden="true"></i>
            </div>
        </div>
        <!-- END 3-column grid -->
        </div>
        <!-- END 12-column grid -->
        </div>
        <!-- END .row -->
        </div>
        <!-- END .well -->
        </div>
        <!-- END .main-content -->
    </div>
    <!-- END .content-container -->
</div>
<!-- END .container -->
    <footer>
        <p>Copyright Behavioral Health Services &copy; 2011. All Rights Reserved.</p>
        <p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>

    </footer>
    <!-- END footer -->

        <div id="contact-form-modal" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Contact Us</h4>
              </div>
              <div class="modal-body">
                <?php
                if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
                ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    <?php wp_footer(); ?>
</body>

</html>

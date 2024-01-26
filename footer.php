<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sparkling
 */
?>
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .site-content -->

	<footer id="footer-area">
		<div class="container footer-inner">
			<div class="row">
        <?php get_sidebar( 'footer' ); ?>
			</div>
			<div class="row">
				<div class="col-xs-12">
          <div id="mc_embed_shell" class="newsletter">
            <div id="mc_embed_signup">
              <form action="https://jdslabs.us21.list-manage.com/subscribe/post?u=038c5553573063282fdcc3893&amp;id=a24164f848&amp;f_id=0062e6e6f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                <div class="box">
                  <div id="mc_embed_signup_scroll">
                    <div class="content">
                      <div class="col-1">
                        <div class="mail-icon">
                          <svg width="100%" height="100%" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2000_302)">
                              <path d="M18.8754 2.64551L10.4548 2.66602L2.03437 2.625H2.03027C0.89824 2.625 0 3.6873 0 5.01621V16.1479C0 17.4767 0.89824 18.5391 2.03027 18.5391H18.8877C20.0197 18.5391 20.9179 17.4767 20.9179 16.1479V5.01621C20.9179 3.6873 20.028 2.64551 18.8754 2.64551ZM18.215 4.28613L10.6928 11.1645L10.6641 11.1891L10.6395 11.2178C10.5492 11.3162 10.4426 11.3285 10.3851 11.3285C10.3277 11.3285 10.2211 11.3121 10.1349 11.2095L10.1104 11.1808L2.92031 4.25332L10.4548 4.30254L18.215 4.28613ZM18.8877 16.8984H2.03027C1.88672 16.8984 1.64062 16.6277 1.64062 16.1479V5.27871L8.925 12.317C9.29416 12.7271 9.81505 12.965 10.3688 12.9733H10.3933C10.9389 12.9733 11.4475 12.7477 11.8207 12.354L19.2855 5.52071V16.1479C19.2773 16.6277 19.0312 16.8984 18.8877 16.8984Z" fill="currentColor"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_2000_302">
                                <rect width="21" height="21" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                        </div>
                        <div class="title">Subscribe to our newsletter</div>
                      </div>
                      <div class="col-2">
                        <div class="fieldgroup">
                          <div class="mc-field-group">
                            <input type="email" name="EMAIL" class="email-input" required="" value="" placeholder="Enter your email address">
                            <span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
                          </div>
                          <div aria-hidden="true" style="position: absolute; left: -5000px;">
                            <input type="text" name="b_038c5553573063282fdcc3893_a24164f848" tabindex="-1" value="">
                          </div>
                        </div>
                        <div style="height: 100%;">
                          <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="submit-button" value="Submit">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="mce-responses" style="margin-top: 8px;">
                  <div id="mce-error-response" style="display: none;"></div>
                  <div id="mce-success-response" style="display: none;"></div>
                </div>
              </form>
            </div>
          </div>
					<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
          <script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
				</div>
			</div>
		</div>
		<div id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="row">
					<nav role="navigation" class="col-xs-12">
						<?php sparkling_footer_links(); ?>
					</nav>
					<div class="copyright col-xs-12">
						<?php echo of_get_option( 'custom_footer_text', 'sparkling' ); ?>
					</div>
				</div>
			</div><!-- .site-info -->
			<a class="scroll-to-top" href="#" role="button"><i class="fa fa-angle-up"></i></a><!-- .scroll-to-top -->
		</div><!-- #colophon -->
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

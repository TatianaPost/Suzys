<section class="footer nokeyframebug" style="background-color:#000000;">
  <a name="success" href="#success"></a>
  <div class="maskkeyframebug">
    <div class="center-align">
      <a href="#top" class="top"></a>

      <h2 class="firstfont caption">
        <div id="footer-caption-name">Suzy's Cream Cheesecakes</div>
        <div id="footer-caption-contact">800-828-1055 <span id="fcc-sep">|</span> <a style="color: #EA5A42;" href="mailto:info@suzys.com">info@suzys.com</a></div>
      </h2>

      <div class="center-align content cf">
        <div class="col-8 rcleft">
          <?php if ( has_nav_menu( 'footer_menu' ) ) {
            wp_nav_menu(array(
              'theme_location'=> 'footer_menu',
              'menu'          => 'Footer Menu',
              'menu_class'    => '',
              'walker'        => new Aletheme_Nav_Walker(),
              'container'     => '',
            ));
          } ?>
        </div> <!-- END col8 -->

        <div class="col-4 rcright">
          <h2 class="firstfont caption colormain" style=" font-family: 'Damion'; font-size:20px; color:#ea5a42; margin:-30px 0 -12px 0;">Join our mailing list</h2>
          <p class="text text-center" style="margin:0px;"><?php mailchimpSF_signup_form(); ?></p>
        </div> <!-- END col4 -->
      </div> <!-- END center-align content cf -->

      <?php if (ale_get_option('copyrights')) : ?>
        <p class="copy"><?php echo ale_option('copyrights'); ?></p>
      <?php else: ?>
        <p class="copy"><?php _e('Copyright, All Right Reserved','aletheme'); ?></p>
      <?php endif; ?>

      <div class="social_icons">
        <?php if(ale_get_option('fb')){ ?><a href="<?php echo ale_get_option('fb'); ?>" class="sicon fbic" target="_blank">Facebook</a><?php } ?>
        <?php if(ale_get_option('twi')){ ?><a href="<?php echo ale_get_option('twi'); ?>" class="sicon twiic" target="_blank">Twitter</a><?php } ?>
        <?php if(ale_get_option('pin')){ ?><a href="<?php echo ale_get_option('pin'); ?>" class="sicon pinic" target="_blank">Pinterest</a><?php } ?>
        <?php if(ale_get_option('flickr')){ ?><a href="<?php echo ale_get_option('flickr'); ?>" class="sicon flickric" target="_blank">Flickr</a><?php } ?>
        <?php if(ale_get_option('vim')){ ?><a href="<?php echo ale_get_option('vim'); ?>" class="sicon vimic" target="_blank">Vimeo</a><?php } ?>
        <?php if(ale_get_option('lin')){ ?><a href="<?php echo ale_get_option('lin'); ?>" class="sicon linic" target="_blank">LinkedIn</a><?php } ?>
        <?php if(ale_get_option('gog')){ ?><a href="<?php echo ale_get_option('gog'); ?>" class="sicon gogic" target="_blank">Google+</a><?php } ?>
        <?php if(ale_get_option('ytb')){ ?><a href="<?php echo ale_get_option('ytb'); ?>" class="sicon ytbic" target="_blank">Youtube</a><?php } ?>
        <?php if(ale_get_option('insta')){ ?><a href="<?php echo ale_get_option('insta'); ?>" class="sicon instaic" target="_blank">Instagram</a><?php } ?>
      </div>
    </div>

    <div class="inner-border"></div>
    <div class="background-opacity"></div>
  </div> <!-- END maskkeyframebug -->
</section>
</div> <!-- /hide -->

<?php if(ale_get_option('skinselector') == "1") { ale_part('colorselector'); } ?>

<!-- Scripts -->
<?php wp_footer(); ?>

</body>
</html>
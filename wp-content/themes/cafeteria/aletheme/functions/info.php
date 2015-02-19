<?php
//Theme Information Data
function aletheme_information_page(){ ?>
    <div class="wrap" id="aletheme-edit-slider-page">
    <h2><?php echo _e('Theme Information','aletheme'); ?></h2>
    <div id="optionsframework-metabox" class="metabox-holder">
    <div id="optionsframework" class="postbox">
    <h3><?php _e('General Information','aletheme'); ?></h3>
    <div class="page">
        <ul>
            <li><?php _e('WordPress Version','aletheme'); ?>: <b><?php echo get_bloginfo('version'); ?></b></li>
            <li><?php _e('URL','aletheme'); ?>: <b><a href="<?php echo site_url(); ?>" target="_blank"><?php echo site_url(); ?></a></b></li>
            <li><?php _e('Theme Version','aletheme'); ?>: <b><?php $ale_theme = wp_get_theme(); echo $ale_theme->get( 'Version' ); ?></b></li>
            <li><?php _e('PHP Version','aletheme'); ?>: <b><?php echo phpversion(); ?></b></li>
            <li><?php _e('MySQL server version','aletheme'); ?>: <b><?php echo  mysql_get_server_info(); ?></b></li>
            <li><?php _e('Theme created date','aletheme'); ?>: <b>01 January, 2014</b></li>
            <li><?php _e('Theme last update date','aletheme'); ?>: <b>22 April, 2014</b></li>
        </ul>
    </div>
    <h3><?php _e('Installed Plugins','aletheme'); ?></h3>
    <div class="page">
        <ul>
            <?php foreach(get_option( 'active_plugins' ) as $plugin) { echo '<li>'.$plugin.'</li>'; } ?>
        </ul>
    </div>
    <h3><?php _e('Changelog','aletheme'); ?></h3>
    <div class="page">
        <b><i>Version 1.5 - 22.04.2014</i></b><br />
        <p class="greycolor">
            - WordPress 3.9 Ready<br />
            - Fixed the Shortcode tinymce icon issue<br />
            </p>
        <b><i>Version 1.4 - 08.04.2014</i></b><br />
        <p class="greycolor">
            - Added option to insert languages switcher in header<br>
            - Fixed the issue with WooCommerce category page<br>
            - Fixed the gallery modal windows images list issue<br>
            - Fixed the slider edit page fields, removed unnecessary fields<br>
            - Added an instagram icon in Social Section<br>
            - Fixed the banner image issue on category.php, archive.php, search.php and tag.php<br>
            - Added an hidden field to contact form to prevent SPAM<br>
        </p>
        <b><i>Version 1.3 - 05.03.2014</i></b><br />
        <p class="greycolor">
            - Fixed the issue with copyright footer text on inner pages<br>
            - WooCommerce 2.1.+ Ready<br>
            - Fixed the issue with Events slider on Home page. If the image is uploaded, the slide will be shown<br>
            - Added option to insert link for services titles on Home Page<br>
        </p>
        <b><i>Version 1.2 - 06.02.2014</i></b><br />
        <p class="greycolor">
            - WordPress 3.8.1 Ready<br>
            - Added Social Icons in footer section. Icons available for: facebook, twitter, pinterest, flickr, vimeo, linkedin, google+, youtube<br>
            - Added new section in Admin Panel caller Online Docs (And created Online Documentation Site)<br>
            - Fixed the issue with testimonial shortcode link field<br>
            - Added child-theme support and included a child-theme example in the dowload archive<br>
            - Fixed the issue with contact map on Home page for mobile devices.<br>
            - Fixed the bug with custom background fields in theme option<br>
            - Added option in theme options to change the Cake Icon in dividers<br>
            - Fixed the issue with ">" in Custom CSS field<br>
            - Fixed the issue with long menu items (2 or more lines) in drop down menu<br>
            - Fixed the issue with reversed menu items in the Left Header Menu location<br>
            - Added option to select the blog image style between icon and banner (as on Events Archive)<br>
            - Added option to select the Google analytics code type between Classic and Universal<br>
            - Added WooCommerce Compatibility. Version 2.0.20 Ready

        </p>
        <b><i>Version 1.1 - 03.01.2014</i></b><br />
        <p class="greycolor">
            - Added new section in Admin Panel -  Theme Information<br>
            - Fixed Custom logo image issue<br>
            - Fixed Mobile Custom logo image issue <br>
            - Fixed the issue with Home Slider Description visibility when is uploaded only one image slide<br>
            - Fixed Documentation file <br>
            - Added option to change the animation pre loader. Now it's possible to upload a custom one.<br>
            - Added option to show/hide Services box on Home page<br>
            - Added option to show/hide Gallery box on Home page<br>
            - Added option to show/hide Team box on Home page<br>
            - Added option to show/hide Menu box on Home page<br>
            - Added option to show/hide Events box on Home page<br>
        </p>
        <b><i>Version 1.0 - 01.01.2014</i></b><br />
        <p class="greycolor">
            - Initial Release
        </p>
    </div>
    </div>
    </div>
    </div>
<?php }

// Online Docs Link function
function aletheme_online_docs(){?>
    <div class="wrap" id="aletheme-edit-slider-page">
        <h2><?php echo _e('Online Documentation','aletheme'); ?></h2>
        <div id="optionsframework-metabox" class="metabox-holder">
            <div id="optionsframework" class="postbox">
                <h3><?php _e('Documentation for Cafeteria Responsive WordPress Theme','aletheme'); ?></h3>
                <div class="page">
                    <p>
                        Thank you so much for purchasing <b>Cafeteria Responsive WordPress Theme</b>. In the download archive you have a basic <b>Documentation.pdf</b> file, that will help you to set up the theme as fast as possible.
                    </p>
                    <p>
                        For Advanced users we created a Documentation Online. You can access the site with online documentation by clicking the button below (The Documentation will open in a new tab)<br><br>
                        <a class="button-primary" href="http://alethemes.com/docs/" target="_blank" style="float: none;">Online Documentation</a>
                    </p>
                    <p>
                        If you didn't find an answer to your question, use the comments form on ThemeForest to contact us.<br><br>
                        <a class="button-secondary" href="http://themeforest.net/item/cafeteria-responsive-wordpress-theme/6500921/comments?ref=CRIK0VA" target="_blank" style="float: none;">Cafeteria Theme Comments Section</a> &nbsp; <a class="button-secondary" href="http://themeforest.net/user/CRIK0VA?ref=CRIK0VA" target="_blank" style="float: none;">Contact Alethemes</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php }
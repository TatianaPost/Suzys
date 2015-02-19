<?php if(is_page_template('template-contact.php') and ale_get_option('contactheader')){ ?>
    <div class="header-back" style="background-image: url('<?php echo ale_get_option('contactheader'); ?>');">
        <div class="triang top"></div>
        <div class="triang bot"></div>
    </div>

<?php } elseif(is_page_template('template-desserts.php') and ale_get_option('dessertsheader')) { ?>
  <div class="header-back" style="background-image: url('<?php echo ale_get_option('dessertsheader'); ?>');">
    <div class="triang top"></div>
    <div class="triang bot"></div>
  </div>

<?php } elseif(is_page_template('template-where.php') and ale_get_option('whereheader')) { ?>
  <div class="header-back" style="background-image: url('<?php echo ale_get_option('whereheader'); ?>');">
    <div class="triang top"></div>
    <div class="triang bot"></div>
  </div>

<?php } elseif(is_page_template('template-ourstory.php') and ale_get_option('ourstoryheader')) { ?>
  <div class="header-back" style="background-image: url('<?php echo ale_get_option('ourstoryheader'); ?>');">
    <div class="triang top"></div>
    <div class="triang bot"></div>
  </div>

<?php } elseif(is_page_template('template-news.php') and ale_get_option('newsheader')) { ?>
  <div class="header-back" style="background-image: url('<?php echo ale_get_option('newsheader'); ?>');">
    <div class="triang top"></div>
    <div class="triang bot"></div>
  </div>

<?php } elseif(is_page_template('template-wholesale.php') and ale_get_option('wholesaleheader')) { ?>
  <div class="header-back" style="background-image: url('<?php echo ale_get_option('wholesaleheader'); ?>');">
    <div class="triang top"></div>
    <div class="triang bot"></div>
  </div>

<?php } elseif(is_blog() and ale_get_option('blogheader')) { ?>
  <div class="header-back" style="background-image: url('<?php echo ale_get_option('blogheader'); ?>');">
    <div class="triang top"></div>
    <div class="triang bot"></div>
  </div>

<?php } elseif(is_page_template('template-customerservice.php') and ale_get_option('customerserviceheader')) { ?>
  <div class="header-back" style="background-image: url('<?php echo ale_get_option('customerserviceheader'); ?>');">
    <div class="triang top"></div>
    <div class="triang bot"></div>
  </div>

<?php } elseif(is_page_template('template-contactus.php') and ale_get_option('contactusheader')) { ?>
  <div class="header-back" style="background-image: url('<?php echo ale_get_option('contactusheader'); ?>');">
    <div class="triang top"></div>
    <div class="triang bot"></div>
  </div>

<?php } elseif(is_page_template('template-dockdelivery.php') and ale_get_option('dockdeliveryheader')) { ?>
  <div class="header-back" style="background-image: url('<?php echo ale_get_option('dockdeliveryheader'); ?>');">
    <div class="triang top"></div>
    <div class="triang bot"></div>
  </div>

<?php } elseif(is_object($post) && $post->post_type == "gallery" and ale_get_option('galleryheader')) { ?>
    <div class="header-back" style="background-image: url('<?php echo ale_get_option('galleryheader'); ?>');">
        <div class="triang top"></div>
        <div class="triang bot"></div>
    </div>

<?php } elseif(is_object($post) && $post->post_type == "events" and ale_get_option('eventsheader')){ ?>
    <div class="header-back" style="background-image: url('<?php echo ale_get_option('eventsheader'); ?>');">
        <div class="triang top"></div>
        <div class="triang bot"></div>
    </div>

<?php } elseif(is_object($post) && $post->post_type == "menu" and ale_get_option('menuheader')){ ?>
    <div class="header-back" style="background-image: url('<?php echo ale_get_option('menuheader'); ?>');">
        <div class="triang top"></div>
        <div class="triang bot"></div>
    </div>

<?php } elseif(is_blog() and ale_get_option('storyheader')) { ?>
    <div class="header-back" style="background-image: url('<?php echo ale_get_option('storyheader'); ?>');">
        <div class="triang top"></div>
        <div class="triang bot"></div>
    </div>

<?php } elseif(ale_get_option('mainheader')){ ?>
    <div class="header-back" style="background-image: url('<?php echo ale_get_option('mainheader'); ?>');">
        <div class="triang top"></div>
        <div class="triang bot"></div>
    </div>

<?php } else { ?>
    <div class="header-back" style="background-image: none; height: 13px; margin-bottom: 60px;');">
        <div class="triang top"></div>
    </div>

<?php } ?>
<?php
/*
* Template name: Home
* */

if (isset($_POST['contact'])) {
    $error = ale_send_contact($_POST['contact']);
}

get_header(); ?>

<!-- Gallery -->
    <div class="slider cf">
        <div class="triang top"></div>
        <div class="triang bot"></div>
        <ul class="slides">
            <?php $slider = ale_sliders_get_slider(ale_get_option('homeslugfull')); ?>
            <?php if($slider):?>
                <?php foreach ($slider['slides'] as $slide) : ?>
                    <li style="background-image: url('<?php echo $slide['image'] ?>'); ">
                        <div class="box">
                            <?php if($slide['title']){ ?><h2 class="firstfont caption colormain" style="color:#bf252c;"><?php echo $slide['title']; ?></h2><?php } ?>
                            <?php if($slide['description']){ ?><p class="text" style="font-size:18px;"><?php echo $slide['description']; ?></p><?php } ?>
                            <?php if($slide['url']){ ?><a style="color:#bf252c;" href="<?php echo $slide['url']; ?>">See our full catalog</a><?php } ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            <?php endif;?>
        </ul>
    </div>

<!-- Services -->
<?php if(ale_get_meta('serviceonhome')=='on') { ?>
    <div>
        <!-- Our Services -->
        <article class="our-services cf">
            <h2 class="firstfont caption colormain" style="color:#ebab34; font-size:48px;"><span style="color:#bf252c; font-size:28px;">&diams; &nbsp;</span><?php echo ale_get_meta('servtit'); ?><span style="color:#bf252c; font-size:28px;"> &nbsp;&diams;</span></h2>
            <div class="center-align">
                <div class="line-cake">
                    <div class="cake"></div>
                    <div class="line left"></div>
                    <div class="line right"></div>
                </div>
            </div>

            <div class="center-align content cf">
                <div class="col-3">
                    <div class="boxs">
                        <a href="<?php echo ale_get_meta('servlink1'); ?>"><div class="img" style="background-image: url('<?php echo ale_get_meta('servic1'); ?>')"></div></a>
                    </div>
                  
                    <h2 class="firstfont caption colormain"><?php echo ale_get_meta('servtit1'); ?></h2><br><br>
                    <p class="text text-center"><?php echo ale_get_meta('servdesc1'); ?></p>
                </div>
                
                
                <div class="col-3">
                    <div class="boxs">
                        <a href="<?php echo ale_get_meta('servlink2'); ?>"><div class="img" style="background-image: url('<?php echo ale_get_meta('servic2'); ?>')"></div></a>
                    </div>
                    <h2 class="firstfont caption colormain"><?php echo ale_get_meta('servtit2'); ?></h2><br><br>
                    <p class="text text-center"><?php echo ale_get_meta('servdesc2'); ?></p>
                </div>
                
                
                <div class="col-3">
                    <div class="boxs">
                        <a href="<?php echo ale_get_meta('servlink3'); ?>"><div class="img" style="background-image: url('<?php echo ale_get_meta('servic3'); ?>')"></div></a>
                    </div>
                    <h2 class="firstfont caption colormain"><?php echo ale_get_meta('servtit3'); ?></h2><br><br>
                    <p class="text text-center"><?php echo ale_get_meta('servdesc3'); ?></p>
                </div>
                
                
                <div class="col-3">
                    <div class="boxs">
                        <a href="<?php echo ale_get_meta('servlink4'); ?>"><div class="img" style="background-image: url('<?php echo ale_get_meta('servic4'); ?>')"></div></a>
                    </div>
                    <h2 class="firstfont caption colormain"><?php echo ale_get_meta('servtit4'); ?></h2><br><br>
                    <p class="text text-center"><?php echo ale_get_meta('servdesc4'); ?></p>
                </div>
            </div>
        </article>
    </div>
<?php } else { echo'<div class="heightonhome cf"></div>'; } ?>
<?php get_footer(); ?>

<?php /* Template Name: Home */ get_header(); ?>

<section class="showcase-block">
    <div class="container-fluid">
        <div class="video-container visible-lg">
            <video class="embed-video-bg" autoplay muted>
              <source src="<?php echo get_template_directory_uri(); ?>/img/video/header.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <div class="mobile-header-bg hidden-lg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/header_bg.jpg')">
        <div class="mobile-home-logo"><img width="350" height="155" src="<?php echo get_template_directory_uri(); ?>/img/header_logo.png"></div>
    </div>
</section>
<section class="showcase-block">
    <div class="container-fluid">
        <div class="payoff-claim-block">
            <div class="payoff-container">
                <header class="gas-images clearfix">
                    <div class="img-block-1"></div>
                    <div class="img-block-2"></div>
                </header>
                <div class="payoff-text">
                    <h2 class="main-payoff ProximaRegular"><?php the_field('first_claim_text'); ?><span class="Handwriting"><?php the_field('first_claim_text_corsivo'); ?></span></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="showcase-block">
    <div class="container">
        <div class="col-md-6">
            <div class="equal-blocks">
                <h2 class="main-titles"><?php the_field('second_block_left_title'); ?></h2>
                <p><?php the_field('second_block_left_text'); ?></p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="equal-blocks">
                <h2 class="main-titles"><?php the_field('third_block_left_title'); ?></h2>
                <p><?php the_field('third_block_left_text'); ?></p>
            </div>
        </div>
    </div>
    <div class="custom-container visible-lg">
        <video class="animation" height="380" autoplay loop muted>
          <source src="<?php echo get_template_directory_uri(); ?>/img/video/animation.mp4" type="video/mp4">
            <source src="<?php echo get_template_directory_uri(); ?>/img/video/animation.webm" type="video/webm">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="animation-container hidden-lg"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/animation_mobile.jpg"></div>
</section>
<section class="showcase-block green-bg">
    <div class="container">
        <div class="text-block">
            <h2 class="main-titles"><?php the_field('green_bg_white_title'); ?></h2>
            <p><?php the_field('green_bg_white_text'); ?></p>
        </div>
    </div>
</section>
<section class="showcase-block margin-negative">
    <div class="container">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="icon-blocks-container">
                <div class="rounded-png">
                    <?php echo '<img class="img-responsive" width="198" height="198" src="'.get_field('text_block_img_1').'">' ?>
                </div>
                <p><span class="subtitles"><?php the_field('text_block_title_1'); ?></span></p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="icon-blocks-container">
                <div class="rounded-png">
                    <?php echo '<img class="img-responsive" width="198" height="198" src="'.get_field('text_block_img_2').'">' ?>
                </div>
                <p><span class="subtitles"><?php the_field('text_block_title_2'); ?></span></p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="icon-blocks-container">
                <div class="rounded-png">
                    <?php echo '<img class="img-responsive" width="198" height="198" src="'.get_field('text_block_img_3').'">' ?>
                </div>
                <p><span class="subtitles"><?php the_field('text_block_title_3'); ?></span></p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="icon-blocks-container">
                <div class="rounded-png">
                    <?php echo '<img class="img-responsive" width="198" height="198" src="'.get_field('text_block_img_4').'">' ?>
                </div>
                <p><span class="subtitles"><?php the_field('text_block_title_4'); ?></span></p>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

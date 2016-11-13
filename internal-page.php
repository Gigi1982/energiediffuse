<?php /* Template Name: Internal */ get_header(); ?>

<section class="internal-page-block">
    <header class="internal-page-header" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/interno_header.jpg')">
        <h1><?php the_title(); ?></h1>
    </header>
    <div class="container">
        <section class="internal-page-content">
            <?php 

            $testiInterni = get_field('blocco_chi_siamo');
            if($testiInterni)
            {
                foreach($testiInterni as $testoInterno)
                {
                    echo '<h2 class="internal-subtitles">'.$testoInterno['titolo_paragrafo'].'</h2>';
                    echo '<p>'.$testoInterno['testo_paragrafo'].'</p>';
                }
            }
            ?>
        </section>
    </div>
</section>
<?php get_footer(); ?>

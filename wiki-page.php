<?php /* Template Name: wiki */ get_header(); ?>

<section class="internal-page-block">
    <header class="internal-page-header" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/interno_header.jpg')">
        <h1><?php the_title(); ?></h1>
    </header>
    <div class="container">
        <section class="internal-page-content">
            <?php 

            $wikiBlocchi = get_field('blocco_wiki');
            if($wikiBlocchi)
            {
                foreach($wikiBlocchi as $wikiBlocco)
                {
                    echo '<div class="col-md-6 col-sm-6 col-xs-12 wiki-blocks">
                            <div class="icon-blocks-container">
                                <div class="rounded-png">
                                    <img width="198" height="198" src="'.$wikiBlocco['immagine_wiki'].'">
                                </div>
                                <p><span class="subtitles">'.$wikiBlocco['titolo_wiki'].'</span></p>
                                <p>'.$wikiBlocco['testo_wiki'].'</p>
                            </div>
                        </div>';
                }
            }
            ?>
        </section>
    </div>
</section>
<?php get_footer(); ?>

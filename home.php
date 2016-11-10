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
                    <h2 class="main-payoff ProximaRegular">La fornitura di luce e gas che risponde a tutte le tue necessità di <span class="Handwriting">comfort</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="showcase-block">
    <div class="container">
        <div class="col-md-6">
            <div class="equal-blocks">
                <h2 class="main-titles">ENERGIA FULL-OPTIONAL</h2>
                <p>Integra il tuo contratto energetico con prodotti
    e servizi utili nella tua vita di ogni giorno.
    Dalla green energy alla sicurezza, il benessere che desideri.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="equal-blocks">
                <h2 class="main-titles">MASSIMA COMODITÀ</h2>
                <p>Tutti i tuoi servizi in un'unica bolletta.
    La gestione di casa o della tua azienda diventa
    finalmente qualcosa di comodo e facile.</p>
            </div>
        </div>
    </div>
    <div class="embed-responsive embed-responsive-16by9 custom-container visible-lg">
        <video height="400" autoplay muted>
          <source src="<?php echo get_template_directory_uri(); ?>/img/video/animation.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="animation-container hidden-lg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/animation_mobile.jpg')"></div>
</section>
<section class="showcase-block green-bg">
    <div class="container">
        <div class="text-block">
            <h2 class="main-titles">SEMPLICE, AMICA, VICINA: LA <span class="Handwriting">tua</span> ENERGIA</h2>
            <p>In <b>Energie Diffuse</b> parliamo la tua lingua e capiamo le tue esigenze. Non parlerai mai con un risponditore automatico o un operatore straniero.<br>
<b>Energie Diffuse</b> ti assegna un singolo operatore dedicato, al tuo fianco per tutta la durata del contratto di fornitura.<br>

Nella la tua area personale sul web avrai strumenti di controllo e offerte "premium" a tua disposizione..</p>
        </div>
    </div>
</section>
<section class="showcase-block margin-negative">
    <div class="container">
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="icon-blocks-container">
                <div class="rounded-png">
                    <img width="198" height="198" src="<?php echo get_template_directory_uri(); ?>/img/icona01.png">
                </div>
                <p><span class="subtitles">Operatore dedicato</span></p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="icon-blocks-container">
                <div class="rounded-png">
                    <img width="198" height="198" src="<?php echo get_template_directory_uri(); ?>/img/icona02.png">
                </div>
                <p><span class="subtitles">Analisi consumi</span></p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="icon-blocks-container">
                <div class="rounded-png">
                    <img width="198" height="198" src="<?php echo get_template_directory_uri(); ?>/img/icona03.png">
                </div>
                <p><span class="subtitles">Previsione costi futuri</span></p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="icon-blocks-container">
                <div class="rounded-png">
                    <img width="198" height="198" src="<?php echo get_template_directory_uri(); ?>/img/icona04.png">
                </div>
                <p><span class="subtitles">Autolettura</span></p>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

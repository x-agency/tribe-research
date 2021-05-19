<?php
   /*
    Template Name: Home
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>

<?php $hero = get_field('content_hero'); ?>
<section id="hero">
    <div class="home-hero">
        <div class="hero-wrapper container-fluid px-0">
            <div class="hero-inner">
                <div class="title-wrapper">
                    <h1><?php echo $hero['title']; ?></h1>
                    <!-- <div class="subtitle">Serving Infants through Adults <br>in Upstate SC</div> -->
                </div>
                <div class="hero-box">
                    <p><?php echo $hero['body']; ?></p>
                    <a class="simple-link purple" href="<?php echo $hero['link_url']; ?>" target="_blank"><?php echo $hero['link_text']; ?> <?php echo file_get_contents(__DIR__ . '/../img/link-arrow.svg'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $welcome = get_field('content_welcome'); ?>
<section id="home-intro">
    <div class="container">
        <div class="row intro-wrapper">
            <div class="col-md-5 left">
                <img src="<?php echo $welcome['image']; ?>" alt="">
            </div>
            <div class="col-md-7 right mb-4 mb-md-0">
                <h1><?php echo $welcome['title']; ?></h1>
                <p><?php echo $welcome['body']; ?></p>
                <div class="link"><a href="<?php echo $welcome['link_url']; ?>" target="_blank" class="simple-link"><?php echo $welcome['link_text']; ?>
                        <?php echo file_get_contents(__DIR__ . '/../img/link-arrow.svg'); ?></div>
                <div class="special-font"><img src="/wp-content/themes/tribe-research/img/home-text.png" alt=""></div>
            </div>
        </div>
    </div>
</section>
<div class="line"></div>
<section id="home-trial">
    <!-- <div class="container-fluid title-block">
        <h1>Participate in a Clinical Trial</h1>
        <p>Tribe Clinical Research offers several options to get involved. Contact us if you're interested in helping
            move medicine forward.</p>
    </div> -->
    <div class="container-fluid trial-blocks">
        <div class="row trial-blocks-inner">

            <?php while ( have_rows('services') ): the_row(); 
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $body = get_sub_field('body');
                    $url = get_sub_field('link_url');
                    $text = get_sub_field('link_text');
                ?>
                <div class="col-md-4 trial-block">
                    <div class="trial-img"><img src="<?php echo $image; ?>" alt=""></div>
                    <div class="trial-title"><?php echo $title; ?></div>
                    <p><?php echo $body; ?></p>
                    <div class="btn-wrapper"><a href="<?php echo $url;?>" target="_blank" class="btn"><?php echo $text; ?></a></div>
                </div>

            <?php endwhile; ?>
            <!-- Trial Block 1 >
            <div class="col-md-4 trial-block">
                <div class="trial-img"><img src="/wp-content/themes/tribe-research/img/trial-img-1.jpg" alt=""></div>
                <div class="trial-title">For Volunteers</div>
                <p>Our specialized care team will work with you in order to link you with the appropriate studies based
                    on your medical history and needs. The future of medicine depends on you. Learn more about how you
                    can get involved.</p>
                <div class="btn-wrapper"><a href="/volunteers" class="btn">Learn More</a></div>
            </div>
            <!-- Trial Block 2 >
            <div class="col-md-4 trial-block">
                <div class="trial-img"><img src="/wp-content/themes/tribe-research/img/trial-img-2.jpg" alt=""></div>
                <div class="trial-title">For Sponsors</div>
                <p>Tribe Clinical Research has managed over 100 phase II to IV clinical trials in partnership with
                    university hospitals and over 20 pharmaceutical companies. Learn about what we can offer.</p>
                <div class="btn-wrapper"><a href="/sponsors" class="btn">Learn More</a></div>
            </div>
            <!-- Trial Block 3 >
            <div class="col-md-4 trial-block">
                <div class="trial-img"><img src="/wp-content/themes/tribe-research/img/trial-img-3.jpg" alt=""></div>
                <div class="trial-title">Current Clinical Trials</div>
                <p>Our current clinical trials span several different categories, including illnesses such as asthma,
                    diabetes, gout, migraines, as well as research in cardivascular and gastrointestinal diseases. </p>
                <div class="btn-wrapper"><a href="/clinical-trials" class="btn">View Trials</a></div>
            </div-->
        </div>
    </div>
</section>

<?php get_template_part('template-parts/cta') ?>
<?php get_footer(); ?>
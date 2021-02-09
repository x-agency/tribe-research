<?php
   /*
    Template Name: Home
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>
<section id="hero">
    <div class="home-hero">
        <div class="hero-wrapper container-fluid px-0">
            <div class="hero-inner">
                <div class="title-wrapper">
                    <h1>The<br> Future<br> of Medicine<br> Begins<br> With You</h1>
                    <div class="subtitle">We Invite You to Become Part of Something Bigger.</div>
                </div>
                <div class="hero-box">
                    <p>Through clinical research, we’re advancing medical science and improving the quality of life for
                        so many people.</p>
                    <p>It start's here</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="home-intro">
    <div class="container">
        <div class="row intro-wrapper">
            <div class="col-md-5 left">
                <img src="/wp-content/themes/tribe-research/img/home-img-1.jpg" alt="">
            </div>
            <div class="col-md-7 right">
                <h1>Welcome to Tribe Clinical Research.</h1>
                <p>At Tribe Clinical Research, our intent is to provide the best care possible for you or your family by
                    offering access to advanced medicinal research in the form of vaccine clinical trials. To put your
                    mind at ease, these studies have already passed a number of benefit and safety requirements and are
                    almost ready for general public release. We invite you to join us on the journey to better health.
                </p>
                <div class="link"><a href="" class="simple-link">Our Difference
                        <?php echo file_get_contents(__DIR__ . '/../img/link-arrow.svg'); ?></div>
                <div class="special-font"><img src="/wp-content/themes/tribe-research/img/tribe-font.svg" alt=""></div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
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
        <div class="row">
            <div class="col-md-5">
                <img src="/wp-content/themes/tribe-research/img/home-img-1.jpg" alt="">
            </div>
            <div class="col-md-6">
                <h1>Welcome to Tribe Clinical Research.</h1>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>



<script>
new WOW().init();
</script>
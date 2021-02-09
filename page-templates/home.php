<?php
   /*
    Template Name: Home
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>

<div id="hero" class="home-hero">
    <div class="hero-wrapper container-fluid px-0">
        <div class="hero-inner">
            <div class="title-wrapper">
                <h1>The<br> Future<br> of Medicine<br> Begins<br> With You</h1>
                <div class="subtitle">We Invite You to Become Part of
                    Something Bigger.</div>
            </div>
            <div class="hero-box">
                <p>Through clinical research, we’re advancing medical science and improving the quality of life for so
                    many people.</p>
                <p>It start's here</p>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>



<script>
new WOW().init();
</script>
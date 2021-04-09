<?php
/*
    Template Name: Trials
    */
    if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>

<section class="hero">
    <img class="bg" src="/wp-content/themes/tribe-research/img/trials-hero.jpg">
    <div class="title">
        <img src="/wp-content/themes/tribe-research/img/clinical.png">
        <h1>Trials</h1>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="controls col-12 my-5">
            <h2>Search By:</h2>

            <div class="filter">
                <a class="filter-btn" href="#pediatrics">
                    <?php echo file_get_contents(__DIR__ . '/../img/trials1.svg'); ?>
                    <p>Pediatrics</p>
                </a>
                <a class="filter-btn" href="#adults">
                    <?php echo file_get_contents(__DIR__ . '/../img/adults.svg'); ?>
                    <p>Adults</p>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="accepting-banner">
    <p><strong>Currently Accepting New Trials<strong></p>
</section>

<section class="studies container">
    <div class="row pediatrics active">
        <div class="anchor" id="pediatrics"></div>
        <div class="col-12 p-0">
            <h2>Pediatric:</h2>
        </div>
        <div class="col-md-4 col-xl-3 text-center study">
            <div class="study-image">
                <img src="/wp-content/themes/tribe-research/img/trial1.jpg" alt="">
                <div class="overlay">
                    <p class="study-desc">This study investigates a new medication for people with type two diabetes and elevated triglycerides.</p>
                    <a href="#" class="btn">Download PDF</a>
                </div>
            </div>
            <p class="study-title">Diabetic Kidney Disease</p>
            <p class="study-id">C1973-203</p>
        </div>
    </div>

    <div class="row adults active">
        <div class="anchor" id="adults"></div>
        <div class="col-12 p-0">
            <h2>Adults:</h2>
        </div>
        <div class="col-md-4 col-xl-3 text-center study">
            <div class="study-image">
                <img src="/wp-content/themes/tribe-research/img/trial1.jpg" alt="">
                <div class="overlay">
                    <p class="study-desc">This study investigates a new medication for people with type two diabetes and elevated triglycerides.</p>
                    <a href="#" class="btn">Download PDF</a>
                </div>
            </div>
            <p class="study-title">Diabetic Kidney Disease</p>
            <p class="study-id">C1973-203</p>
        </div>
    </div>
</section>

<!-- Template Part -->
<?php get_template_part('template-parts/cta') ?>

<?php get_footer(); ?>
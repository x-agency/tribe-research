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
                <div class="toggle-container"><div class="filter-toggle"></div></div>
                <div class="filter-btn">
                    <?php echo file_get_contents(__DIR__ . '/../img/trials1.svg'); ?>
                    <p>Pediatrics</p>
                </div>
                
                <div class="filter-btn">
                    <?php echo file_get_contents(__DIR__ . '/../img/trials2.svg'); ?>
                    <p>Diabetes</p>
                </div>

                <div class="filter-btn">
                    <?php echo file_get_contents(__DIR__ . '/../img/trials3.svg'); ?>
                    <p>Cardiac</p>
                </div>

                <div class="filter-btn">
                    <?php echo file_get_contents(__DIR__ . '/../img/trials4.svg'); ?>
                    <p>Pulmonary</p>
                </div>

                <div class="filter-btn">
                    <?php echo file_get_contents(__DIR__ . '/../img/trials5.svg'); ?>
                    <p>Digestive</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="studies container">
<?php 
    for ($i = 0; $i < 5; $i++) : ?>
        <div class="row">
            <div class="col-12 p-0">
                <h2>Pediatric:</h2>
            </div>
            <div class="col-md-4 col-xl-3 text-center study">
                <div class="study-image">
                    <img src="" alt="">
                    <a href="#" class="btn">Download PDF</a>
                </div>
                <p class="study-title">Study Name</p>
            </div>
            <div class="col-md-4 col-xl-3 text-center study">
                <div class="study-image">
                    <img src="" alt="">
                    <a href="#" class="btn">Download PDF</a>
                </div>
                <p class="study-title">Study Name</p>
            </div>
            <div class="col-md-4 col-xl-3 text-center study">
                <div class="study-image">
                    <img src="" alt="">
                    <a href="#" class="btn">Download PDF</a>
                </div>
                <p class="study-title">Study Name</p>
            </div>
            <div class="col-md-4 col-xl-3 text-center study">
                <div class="study-image">
                    <img src="" alt="">
                    <a href="#" class="btn">Download PDF</a>
                </div>
                <p class="study-title">Study Name</p>
            </div>
        </div>
        
    <?php endfor;
?>
</section>

<!-- Template Part -->
<?php get_template_part('template-parts/cta') ?>

<?php get_footer(); ?>
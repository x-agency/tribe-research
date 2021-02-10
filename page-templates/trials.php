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
        <div class="controls col-12 mb-5">
            <!-- Controls -->
            <h2>Search By:</h2>
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
        <!-- Repeater -->
    </div>
</section>

<!-- Template Part -->
<?php get_template_part('template-parts/cta') ?>

<?php get_footer(); ?>
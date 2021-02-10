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
        <div class="col-12 mb-5">
            <!-- Controls -->
            <?php echo file_get_contents(__DIR__ . '/../img/trials1.svg'); ?>
            <?php echo file_get_contents(__DIR__ . '/../img/trials2.svg'); ?>
            <?php echo file_get_contents(__DIR__ . '/../img/trials3.svg'); ?>
            <?php echo file_get_contents(__DIR__ . '/../img/trials4.svg'); ?>
            <?php echo file_get_contents(__DIR__ . '/../img/trials5.svg'); ?>
        </div>
        <!-- Repeater -->
    </div>
</section>

<!-- Template Part -->

<?php get_footer(); ?>
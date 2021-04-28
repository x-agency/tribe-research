<?php
/*
    Template Name: Contact
    */
    if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>

<section class="hero">
    <img class="bg" src="/wp-content/themes/tribe-research/img/contact-hero.jpg">    
    <img class="title" src="/wp-content/themes/tribe-research/img/contact-title.png"/>
</section>

<section class="map">
<iframe src="https://snazzymaps.com/embed/298694" width="100%" height="400px" style="border:none;"></iframe>
</section>

<section class="contact">
    <div class="form">
        <h1>Let's Get Started:</h1>
        <p>Whether you have a question about Tribe Clinical Research, need assistance, or you're in the area and would like to see our office, we're here to help!</p>
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 10, 'title' => false, 'description' => false ) ); ?>
    </div>
    <div class="separator"></div>
    <div class="info">
        <h1>Contact Information:</h1>
        <p>Tribe Clinical Research</p>
        <p>545 Verdae Blvd. Suite B</p>
        <p>Greenville, SC 29607</p>

        <div class="links">
            <a href="tel:864.334.0141" class="simple-link">Phone:  864.334.0141</a>
            <a href="fax:+18643340137" class="simple-link">Fax: 864.334.0137</a>
            <a href="mailto:info@tribecr.com" class="simple-link">Email: info@tribecr.com</a>
        </div>

        <p class="title">Hours of Operation:</p>
        <p>Monday – Thursday: 7:00 am to 5:00 pm</p>
        <p>Friday: 7:00 am to 12:30 pm</p>
    </div>
</section>

<?php get_template_part('template-parts/cta') ?>

<?php get_footer(); ?>
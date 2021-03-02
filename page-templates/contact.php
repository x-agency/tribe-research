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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104791.67136430558!2d-82.43646110321126!3d34.837635877885454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88582ff6d484c119%3A0x6825106efd075ca2!2sTribe%20Clinical%20Research%20LLC!5e0!3m2!1sen!2sus!4v1614279601548!5m2!1sen!2sus" width="1920" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
        <p>405 Memorial Drive Extension</p>
        <p>Greer, SC 29651</p>

        <div class="links">
            <a href="tel:864.334.0141" class="simple-link">Phone:  864.334.0141</a>
            <a href="fax:+18643340137" class="simple-link">Fax: 864.334.0137</a>
            <a href="mailto:info@tribeclinicalresearch.com" class="simple-link">Email: info@tribeclinicalresearch.com</a>
        </div>

        <p class="title">Hours of Operation:</p>
        <p>Monday – Thursday: 7:00 am to 5:00 pm</p>
        <p>Friday: 7:00 am to 12:30 pm</p>
    </div>
</section>

<?php get_template_part('template-parts/cta') ?>

<?php get_footer(); ?>
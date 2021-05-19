<?php
/*
    Template Name: Contact
    */
    if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>

<?php $hero = get_field('content_hero'); ?>
<section class="hero">
    <img class="bg" src="<?php echo $hero['hero']; ?>">    
    <img class="title" src="<?php echo $hero['title']; ?>"/>
</section>

<?php $form = get_field('content_form'); ?>
<section class="contact">
    <div class="form">
        <h1><?php echo $form['title']; ?></h1>
        <p><?php echo $form['body']; ?></p>
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 10, 'title' => false, 'description' => false ) ); ?>
    </div>
    <div class="separator"></div>
    <?php $info = get_field('content_info'); ?>
    <div class="info">
        <h1><?php echo $info['title']; ?></h1>
        <p><?php echo $info['address1']; ?></p>
        <p><?php echo $info['address2']; ?></p>
        <p><?php echo $info['address3']; ?></p>

        <div class="links">
            <a href="tel:<?php echo $info['phone']; ?>" class="simple-link">Phone: <?php echo $info['phone']; ?></a>
            <a href="fax:+1<?php echo $info['fax']; ?>" class="simple-link">Fax: <?php echo $info['fax']; ?></a>
            <a href="mailto:<?php echo $info['email']; ?>" class="simple-link">Email: <?php echo $info['email']; ?></a>
        </div>

        <p class="title">Hours of Operation:</p>
        <p><?php echo $info['operation1']; ?></p>
        <p><?php echo $info['operation2']; ?></p>
    </div>
</section>

<section class="map">
    <iframe src="https://snazzymaps.com/embed/298694" width="100%" height="400px" style="border:none;"></iframe>
</section>

<?php get_template_part('template-parts/cta') ?>

<?php get_footer(); ?>
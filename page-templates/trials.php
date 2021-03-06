<?php
/*
    Template Name: Trials
    */
    if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>

<?php $hero = get_field('hero'); ?>
<section class="hero">
    <img class="bg" src="<?php echo $hero['hero']; ?>">
    <div class="title">
        <img src="<?php echo $hero['title']; ?>">
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

<!--section class="accepting-banner">
    <p><strong>Currently Accepting New Trials<strong></p>
</section-->

<section class="studies container">
    <div class="row adults active">
        <div class="anchor" id="adults"></div>
        <div class="col-12 p-0">
            <h2>Adults:</h2>
        </div>
        <?php while ( have_rows('adult') ) : the_row(); 
            $image = get_sub_field('image');
            $enrolling = get_sub_field('enrolling');
            $link = get_sub_field('link');
            $title = get_sub_field('title');
            $id = get_sub_field('id');
            $desc = get_sub_field('desc');
        ?>
            <div class="col-md-4 col-xl-3 text-center study mb-5">
                <div class="study-image">
                    <img src="<?php echo $image; ?>" alt="">
                </div>
                <p class="enrolling <?php if ( $enrolling == true ) echo 'active'; ?>">NOW ENROLLING</p>
                <p class="study-title"><?php echo $title; ?></p>
                <p class="study-id"><?php echo $id; ?></p>
                <p class="study-desc"><?php echo $desc; ?></p>
                <a href="<?php echo $link; ?>" class="simple-link mb-3" target="_blank" >Download PDF</a>
            </div>
        <?php endwhile; ?>
    </div>
    
    <div class="row pediatrics active">
        <div class="anchor" id="pediatrics"></div>
        <div class="col-12 p-0">
            <h2>Pediatric:</h2>
        </div>
        <?php while ( have_rows('pediatric') ) : the_row(); 
            $image = get_sub_field('image');
            $enrolling = get_sub_field('enrolling');
            $link = get_sub_field('link');
            $title = get_sub_field('title');
            $id = get_sub_field('id');
            $desc = get_sub_field('desc');
        ?>
            <div class="col-md-4 col-xl-3 text-center study mb-5">
                <div class="study-image">
                    <img src="<?php echo $image; ?>" alt="">
                </div>
                <p class="enrolling <?php if ( $enrolling == true ) echo 'active'; ?>">NOW ENROLLING</p>
                <p class="study-title"><?php echo $title; ?></p>
                <p class="study-id"><?php echo $id; ?></p>
                <p class="study-desc"><?php echo $desc; ?></p>
                <a href="<?php echo $link; ?>" class="simple-link mb-3" target="_blank" >Download PDF</a>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<!-- Template Part -->
<?php get_template_part('template-parts/cta') ?>

<?php get_footer(); ?>
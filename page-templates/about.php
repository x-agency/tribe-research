<?php
/*
    Template Name: About
    */
    if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>

<section class="hero hero-overlap">
    <img class="bg" src="/wp-content/themes/tribe-research/img/about-hero.jpg">    
    <div class="content">
        <img src="/wp-content/themes/tribe-research/img/doctor.jpg" alt="Female doctor with hand on shoulder of female patient.">
        <div class="text">
            <img src="/wp-content/themes/tribe-research/img/about-text.png"/>
            <h1>TRIBE CLINICAL RESEARCH</h1>
        </div>    
    </div>
</section>

<section class="difference container">
    <div class="anchor" id="difference"></div>
    <div class="row">
        <div class="col-12 mb-3"><h2 class="title">The Tribe Difference</h1></div>
        <div class="col-lg-6">
            <p>The health and quality of life of millions have been improved because of advances in science and technology, and the willingness of individuals like you to take part in clinical research. Our study volunteers’ role is crucial in the quest for knowledge that will improve health and provide hope for future generations. With your help, the research studies at Tribe Clinical Research will help shape the future of medicine.</p>
            <p>Become a study volunteer to learn more about your condition, get access to new medications and treatments, and help further medical research for the entire healthcare community. During a clinical trial, the study volunteer will meet with a board-certified physician and receive one on one medical care. There is no cost to the study volunteer, and most clinical trials study volunteers are compensated for their time and participation while in the study.</p>
        </div>
        <div class="col-lg-6">
            <p>We have managed over 100 phase II to IV clinical trials in partnership with over 20 pharmaceutical companies. Studies conducted include Diabetes Type 1, Diabetes Type 2, COPD, Asthma and Allergies, Irritable Bowel Syndrome, GERD, Inflammatory Bowel Disease, Hepatitis C, Osteoarthritis, Osteoporosis, Hypertension, Hyperlipidemia, Adolescent Migraine, Adult Migraine, Obesity, Vaccinations, and Acute Coronary Syndrome.</p>
            <p>Tribe Clinical Research is recognized for excellent patient care, outstanding patient enrollment, and quality data management. We continually exceed standards of Good Clinical Practices.</p>
        </div>
    </div>
</section>

<section class="mission container">
    <div class="row">
        <div class="col-12 mb-5 mt-5 mt-md-0">
            <div class="line"></div>
            <h2><strong>A Mission to Serve and Offer Hope</strong></h2>
            <p>Our mission at Tribe Clinical Research is to love, serve, and connect with our community while making small steps to advance the future of medicine through consistency, quality, passion, and integrity. </p>
        </div>
        <div class="col-md-6 col-xl-3 text-center pb-5">
            <?php echo file_get_contents(__DIR__ . '/../img/vector1.svg'); ?>
            <p class="title">Serve Others</p>
        </div>
        <div class="col-md-6 col-xl-3 text-center pb-5">
            <?php echo file_get_contents(__DIR__ . '/../img/vector2.svg'); ?>
            <p class="title">Be Conscientious</p>
        </div>
        <div class="col-md-6 col-xl-3 text-center pb-5">
            <?php echo file_get_contents(__DIR__ . '/../img/vector3.svg'); ?>
            <p class="title">Be Reliable</p>
        </div>
        <div class="col-md-6 col-xl-3 text-center pb-5">
            <?php echo file_get_contents(__DIR__ . '/../img/vector4.svg'); ?>
            <p class="title">Show Compassion</p>
        </div>
    </div>
</section>

<section class="team">
    <div class="background"><img src="/wp-content/themes/tribe-research/img/our-team.jpg"></div>
    <div class="foreground">
        <div>
            <h2>Our Team:</h2>
            <h2 class="alt">Tested & Proven</h2>
            <p>Our clinical studies are administered by a team of healthcare professionals (physicians and nurse practitioners) who have been involved in many successful research projects.</p>
            <p>We operate with a groundbreaking approach—partnering with primary care physicians to provide a better continuum of care for our patient volunteers.</p>
            <p>Tribe Clinical Research is recognized for excellent patient care, outstanding patient enrollment, and quality data management. We continually exceed standards of Good Clinical Practices.</p>
        </div>
    </div>
</section>

<section class="medical-directors container pt-5 mt-5">
    <h2>Medical Directors:</h2>
    <div class="carousel">
        <div class="track">
            <div class="slide">
                <img src="/wp-content/themes/tribe-research/img/dobson.jpg">
                <div>
                    <h3>Scott Dobson, MD</h3>
                    <p><em>Pediatrics Medical Director</em></p>
                </div>
            </div>
        </div>
        <div class="controls">
            <div class="prev"></div>
            <div class="next"></div>
        </div>
    </div>
</section>

<!-- Template Part -->
<?php get_template_part('template-parts/cta') ?>

<?php get_footer(); ?>
<script>
jQuery(document).ready(function($) {
    $carousel = $('.carousel'),
    $track = $('.track'),
    slideCount = $('.slide').length,
    width = $('.slide').width(),
    threshold = width / 4,
    dragStart = 0,
    dragEnd = 0,
    count = 1,
    $item = $('.slide');

    $carousel.css("overflow", "hidden");
    $track.css("left", ( ( slideCount * -1 ) + "00%")).css({"display":"flex", "position":"relative"});
    $('.slide').css({"flex":"0 0 auto", "width":"100%"});
    for (var i = 0; i < slideCount; i++) {
        $('.slide').eq(slideCount - 1).clone().prependTo('.track');
    }

    $('.slide').on('mousedown touchstart', function(e) {
        if ($track.hasClass('transition')) return; //if the carousel is in motion, prevent new movement until complete
        if (e.type == 'touchstart') dragStart = e.originalEvent.touches[0].pageX; 
        if (e.type == 'mousedown') dragStart = e.pageX;
        $target = $(e.target);
        $carousel.on('mousemove touchmove', function(e){ 
            grabbed = true;
            if (e.type == 'touchmove') dragEnd = e.originalEvent.touches[0].pageX;
            if (e.type == 'mousemove') dragEnd = e.pageX;
            $track.css('transform','translateX('+ dragPos() +'px)');
            $item.css('cursor', 'grabbing');
            dragDistance = dragPos();
        });
        $(document).on('mouseup touchend', function(){
            count = dragDistance / width;
            $item.css('cursor', 'grab');
            if (dragPos() > threshold) { return shiftSlide(1) } //to the left
            if (dragPos() < -threshold) { return shiftSlide(-1) } //to the right
            count = 0;
            shiftSlide(0);
        });
    });

    function dragPos() {
        return dragEnd - dragStart;
    }

    function shiftSlide(direction) {
        if($track.hasClass('transition')) return;
        dragEnd = dragStart;
        count = direction === -1 ? Math.floor(count) : Math.ceil(count);
        $(document).off('mouseup touchend');
        $carousel.off('mousemove touchmove');
        $track.addClass('transition').css('transform','translateX(' + (width * count) + 'px)');
        setTimeout(function(){
            if (direction >= 1) { // to the left
                while (count > 0) {
                    $track.find('.slide:first-child').before($track.find('.slide:last-child'));
                    count--;
                }
            } else if (direction <= -1) { //to the right
                while (count < 0) {
                    $track.find('.slide:last-child').after($track.find('.slide:first-child'));
                    count++;
                }
            }
            $track.removeClass('transition')
            $track.css('transform','translateX(0px)');
        }, 600);
    }

    $('.prev').click(function() {
        count = 1;
        return shiftSlide(1);
    });

    $('.next').click(function() {
        count = -1;
        return shiftSlide(-1);
    });
});
</script>
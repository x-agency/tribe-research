<?php
   /*
    Template Name: Participants
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>

<?php $hero = get_field('hero'); ?>
<section class="hero hero-overlap">
    <img class="bg" src="<?php echo $hero['hero']; ?>">    
    <div class="content">
        <div class="text">
            <img src="<?php echo $hero['title']; ?>"/>
            <p><?php echo $hero['body']; ?></p>
        </div>
        <img src="<?php echo $hero['image']; ?>" alt="">  
    </div>
</section>

<?php $video = get_field('video'); ?>
<section class="video container">
    <div class="row">
        <img class="modal-thumbnail" src="<?php echo $video['image']; ?>" alt="">
    </div>
</section>
<div class="modal">
    <div style="padding:56.25% 0 0 0;position:relative;">
        <div class="close">+</div>
        <iframe src="https://player.vimeo.com/video/<?php echo $video['link']; ?>?autoplay=1&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
    </div>
    <script src="https://player.vimeo.com/api/player.js"></script>
</div>

<!-- <section class="trial container difference mb-5">
    <div class="row">
        <div class="col-12 mb-3"><h2 class="title">What is a Clinical Trial?</h1></div>
        <div class="col-lg-6">
            <p>A <a href="/clinical-trials" class="simple-link">clinical trial</a> is a research study utilizing human volunteers to answer specific health questions. Carefully conducted clinical trials are the safest and fastest way to find treatments that work in people, and new ways to improve health.</p>
            <p>Many clinical trials are done to see if a new drug or device is safe and effective for people to use. Clinical trials are also done for other reasons. Some compare existing treatments to determine which is better. The current, approved treatments are called the “standard treatments.” Sometimes clinical trials are used to study different ways to use the standard treatments so they will be more effective, easier to use, and/or decrease side effects. Sometimes, studies are done to learn how to best use the treatment in a different population, such as children, in whom the treatment was not previously tested.</p>
        </div>
        <div class="col-lg-6">
            <p>Participants in clinical trials can play a more active role in their own health care, gain access to new research treatments before they are widely available, and help others by contributing to medical research. It is no exaggeration to say that a large share of the credit for current treatment successes belongs to the people who participated in the clinical trials conducted over the last decade.</p>        
        </div>
    </div>
</section>

<section class="benefits">
    <div class="section-hero">
        <div class="background"><img src="/wp-content/themes/tribe-research/img/participants-banner.jpg"></div>
        <div class="foreground">
            <div>
                <h2>The Benefits:</h2>
                <h2 class="alt">Reasons for Research</h2>
                <p>Clinical trials are designed to advance medical science and improve quality of life for so many people.</p>
                <p>Interested in learning more? Watch our video.</p>
                <a href="https://www.youtube.com/watch?v=9msDSaKbPjw" target="_blank" rel="noopener noreferrer" class="btn purple">Watch Our Video</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center justify-content-xl-space-between mb-5">
            <div class="col-xl-4 col-lg-6 benefit">
                <?php echo file_get_contents(__DIR__ . '/../img/volunteers-vector-1.svg'); ?>
                <p class="title">First Access</p>
                <p>Participating in a clinical trial may give you access to experimental, cutting-edge treatment options. Plus, you will have a dedicated medical team that carefully monitors you throughout the trial.</p>
            </div>
            <div class="col-xl-4 col-lg-6 benefit mt-5 mt-lg-0">
                <?php echo file_get_contents(__DIR__ . '/../img/volunteers-vector-2.svg'); ?>
                <p class="title">Hope for Others</p>
                <p>When you participate in a clinical trial, you are contributing to research that could bring new treatments one step closer to reaching many patients across the world. The trial may not only help advance the science for your disease or illness, but could also make progress for related areas of science.</p>
            </div>
            <div class="col-xl-4 col-lg-6 benefit mt-5 mt-xl-0">
                <?php echo file_get_contents(__DIR__ . '/../img/volunteers-vector-3.svg'); ?>
                <p class="title">Better Treatment</p>
                <p>Clinical research can systematically test to determine which treatments are more effective, improving the safety and quality of healthcare.</p>
            </div>
        </div>
    </div>
</section> -->

<section class="faq container">
    <div class="anchor" id="faq"></div>
    <div class="row gray-container">
        <div class="anchor" id="our-site"></div>
        <h2 class="offset-lg-1">Frequently Asked Questions:</h2>        
        <?php while( have_rows('faq') ) : the_row();
            $q = get_sub_field('question');
            $a = get_sub_field('answer');
            ?>
                <?php if (get_row_index() == 1) : ?>
                    <div class="col-xl-5 offset-xl-1 mb-0">
                <?php endif; ?> 
                
                <?php if (get_row_index() == 6) : ?>
                    </div>
                    <div class="col-xl-4">
                <?php endif; ?> 
                    <div class="faq-item">
                        <div class="faq-expand"></div>
                        <p class="title"><?php echo $q; ?></p>
                        <?php echo $a; ?>
                    </div>

        <?php endwhile; ?>
        </div>
    </div>
    <!-- <div class="carousel">
        <div class="controls">
            <div class="prev"></div>
            <div class="next"></div>
        </div>
        <div class="track">
            <div class="slide">
                <div class="testimonial">
                    <p class="quote">“</p>
                    <p>Patients are closely monitored and there are often health benefits. Patients receive education about their disease, access to a drug that might not be available because of cost or availability outside the trial, and, in many cases, see improvement because they are paying more attention to their health.</p>
                    <div class="author-container">
                        <img src="/wp-content/themes/tribe-research/img/volunteers-3.jpg">
                        <p class="author">Dr. Ronald K. Mayfield</p>
                        <p class="source">Medical Director and Investigator at Tribe Clinical Research</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="testimonial">
                    <p class="quote">“</p>
                    <p>Two Participation in clinical trials is not without risks; however, patients are closely monitored and there are often health benefits. Patients receive education about their disease, access to a drug that might not be available because of cost or availability outside the trial, and, in many cases, see improvement because they are paying more attention to their health.</p>
                    <div class="author-container">
                        <img src="/wp-content/themes/tribe-research/img/volunteers-3.jpg">
                        <p class="author">Dr. Ronald K. Mayfield</p>
                        <p class="source">Medical Director and Investigator at Tribe Clinical Research</p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="testimonial">
                    <p class="quote">“</p>
                    <p>Three Participation in clinical trials is not without risks; however, patients are closely monitored and there are often health benefits. Patients receive education about their disease, access to a drug that might not be available because of cost or availability outside the trial, and, in many cases, see improvement because they are paying more attention to their health.</p>
                    <div class="author-container">
                        <img src="/wp-content/themes/tribe-research/img/volunteers-3.jpg">
                        <p class="author">Dr. Ronald K. Mayfield</p>
                        <p class="source">Medical Director and Investigator at Tribe Clinical Research</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</section>

<section class="resources">
    <div class="container-fluid">
        <div class="row justify-content-xl-space-between justify-content-center">
            <div class="col-12">
                <h2>Resources</h2>
            </div>
            <?php $i = 0; while ( have_rows('resources') ) : the_row();
                $image = get_sub_field('resource');
                $link = get_sub_field('link');
            ?>
                <div class="col-xl-2 col-lg-6 text-center mb-xl-0 mb-5">
                    <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo $image; ?>">
                    </a>
                </div>
                <!-- <div class="col-xl-2 col-lg-6 text-center mb-xl-0 mb-5">
                    <a href="https://www.centerwatch.com/" target="_blank" rel="noopener noreferrer">
                        <img src="/wp-content/themes/tribe-research/img/volunteers-logo-2.png">
                    </a>
                </div>
                <div class="col-xl-2 col-lg-6 text-center mb-xl-0 mb-5">
                    <a href="https://www.ciscrp.org/" target="_blank" rel="noopener noreferrer">
                        <img src="/wp-content/themes/tribe-research/img/volunteers-logo-3.png">
                    </a>
                </div>
                <div class="col-xl-2 col-lg-6 text-center mb-xl-0 mb-5">
                    <a href="http://clinicalresearch.com" target="_blank" rel="noopener noreferrer">
                        <img src="/wp-content/themes/tribe-research/img/volunteers-logo-4.png">
                    </a>
                </div>
                <div class="col-xl-2 col-lg-6 text-center">
                    <a href="http://clinicaltrials.gov/" target="_blank" rel="noopener noreferrer">
                        <img src="/wp-content/themes/tribe-research/img/volunteers-logo-5.png">
                    </a>
                </div> -->
            <?php endwhile; ?>
        </div>
    </div>
    <!-- <div class="cooking">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                   <img src="/wp-content/themes/tribe-research/img/the-cooking-doc.jpg" alt="The Cooking Doc">
                </div>
                <div class="col-lg-5 d-flex align-items-center px-3">
                    <div class="content">
                        <p>An online cooking series from Carolina Nephrology, featuring Dr. Blake Shusterman, where he combines his knowledge of nephrology with his passion for cooking.</p>
                        <a href="https://www.youtube.com/user/CarolinaNephrologyTV/about" target="_blank" rel="noopener noreferrer" class="btn">Visit YouTube Channel</a>
                      </div>
                </div>
            </div>
        </div>
    </div> -->
</section>

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

    $('.modal iframe').attr("data-src", $('.modal iframe').attr("src"));
    $('.modal iframe').attr("src", "");

    $('.modal-thumbnail').click(function() {
        $('.modal').addClass('show');
        $('.modal iframe').attr("src", $('.modal iframe').attr("data-src"));
    });

    $('.close').click(function() {
        $('.modal').removeClass('show');
        $('.modal iframe').attr("src", "");
    })
});
</script>
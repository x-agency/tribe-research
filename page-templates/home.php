<?php
   /*
    Template Name: Home
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>
<section id="hero">
    <div class="home-hero">
        <div class="hero-wrapper container-fluid px-0">
            <div class="hero-inner">
                <div class="title-wrapper">
                    <h1>The<br> Future<br> of Medicine<br> Begins<br> With You</h1>
                    <div class="subtitle">We Invite You to Become Part of <br>Something Bigger.</div>
                </div>
                <div class="hero-box">
                    <p>Through clinical research, we’re advancing medical science and improving the quality of life for
                        so many people.</p>
                    <p>It starts here</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="home-intro">
    <div class="container">
        <div class="row intro-wrapper">
            <div class="col-md-5 left">
                <img src="/wp-content/themes/tribe-research/img/home-img-1.jpg" alt="">
            </div>
            <div class="col-md-7 right">
                <h1>Welcome to Tribe Clinical Research.</h1>
                <p>At Tribe Clinical Research, our intent is to provide the best care possible for you or your family by
                    offering access to advanced medicinal research in the form of vaccine clinical trials. To put your
                    mind at ease, these studies have already passed a number of benefit and safety requirements and are
                    almost ready for general public release. We invite you to join us on the journey to better health.
                </p>
                <div class="link"><a href="/about#difference" class="simple-link">Our Difference
                        <?php echo file_get_contents(__DIR__ . '/../img/link-arrow.svg'); ?></div>
                <div class="special-font"><img src="/wp-content/themes/tribe-research/img/tribe-font.svg" alt=""></div>
            </div>
        </div>
    </div>
</section>
<div class="line"></div>
<section id="home-trial">
    <div class="container-fluid title-block">
        <h1>Participate in a Clinical Trial</h1>
        <p>Tribe Clinical Research offers several options to get involved. Contact us if you're interested in helping
            move medicine forward.</p>
    </div>
    <div class="container-fluid trial-blocks">
        <div class="row trial-blocks-inner">
            <!-- Trial Block 1 -->
            <div class="col-md-4 trial-block">
                <div class="trial-img"><img src="/wp-content/themes/tribe-research/img/trial-img-1.jpg" alt=""></div>
                <div class="trial-title">For Volunteers</div>
                <p>Our specialized care team will work with you in order to link you with the appropriate studies based
                    on your medical history and needs. The future of medicine depends on you. Learn more about how you
                    can get involved.</p>
                <div class="btn-wrapper"><a href="/volunteers" class="btn">Learn More</a></div>
            </div>
            <!-- Trial Block 2 -->
            <div class="col-md-4 trial-block">
                <div class="trial-img"><img src="/wp-content/themes/tribe-research/img/trial-img-2.jpg" alt=""></div>
                <div class="trial-title">For Sponsors</div>
                <p>Tribe Clinical Research has managed over 100 phase II to IV clinical trials in partnership with
                    university hospitals and over 20 pharmaceutical companies. Learn about what we can offer.</p>
                <div class="btn-wrapper"><a href="/sponsors" class="btn">Learn More</a></div>
            </div>
            <!-- Trial Block 3 -->
            <div class="col-md-4 trial-block">
                <div class="trial-img"><img src="/wp-content/themes/tribe-research/img/trial-img-3.jpg" alt=""></div>
                <div class="trial-title">Current Clinical Trials</div>
                <p>Our current clinical trials span several different categories, including illnesses such as asthma,
                    diabetes, gout, migraines, as well as research in cardivascular and gastrointestinal diseases. </p>
                <div class="btn-wrapper"><a href="/clinical-trials" class="btn">View Trials</a></div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/cta') ?>
<?php get_footer(); ?>
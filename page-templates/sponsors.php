<?php
   /*
    Template Name: Sponsors
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>

<?php $hero = get_field('content_hero'); ?>
<section class="hero hero-overlap">
    <img class="bg" src="<?php echo $hero['hero']; ?>">    
    <div class="content">
        <img src="<?php echo $hero['image']; ?>" alt="">
        <div class="text">
            <img src="<?php echo $hero['title']; ?>"/>
            <p><?php echo $hero['body']; ?></p>
        </div>    
    </div>
</section>


<section class="explore container mt-xl-5">
    <div class="row">
        <div class="controls col-12 my-5">
            <h2 class="mb-4">Experience The Difference</h2>
            <div class="filter">
                <div class="toggle-container"><div class="filter-toggle"></div></div>
                <a class="simple-link" href="#our-site">
                    <div class="btn-alt">
                        <p>Our Site</p>
                    </div>
                </a>
                <a class="simple-link" href="#our-site">
                    <div class="btn-alt modal-btn">
                        <p>Watch Video</p>
                    </div>
                </a>
                <!--a class="simple-link" href="#monitor-guidelines">
                    <div class="btn-alt">
                        <p>Monitor Guidelines</p>
                    </div>
                </a>
                <!-- <a class="simple-link" href="#daily-schedule">
                    <div class="btn-alt">
                        <p>Daily Schedule</p>
                    </div>
                </a> -->
                <a class="simple-link" href="#our-area">
                    <div class="btn-alt">
                        <p>Our Area</p>
                    </div>
                </a>
                <a class="simple-link" href="#hotels-restaurants">
                    <div class="btn-alt">
                        <p>Restaurants/Hotels</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="anchor" id="our-site"></div>
        <p class="title offset-lg-1">At our site, we offer:</p>
        <ul class="col-xl-5 offset-xl-1 mb-0">
            <?php while ( have_rows('list_left') ) : the_row(); 
                $left = get_sub_field('list_item');
            ?>
                <li><span><?php echo $left; ?></span></li>
                <!-- <li><span>Easy access to a major airport</span></li>
                <li><span>Designated monitoring space with private space available at your request</span></li>
                <li><span>Telephone for monitor use</span></li>
                <li><span>High speed wireless DSL</span></li>
                <li><span>High volume copier</span></li> -->
            <?php endwhile; ?>
        </ul>
        
        <ul class="col-xl-4">
            <?php while ( have_rows('list_right') ) : the_row(); 
                $right = get_sub_field('list_item');
            ?>
                <li><span><?php echo $right; ?></span></li>
                <!-- <li><span>Shredder</span></li>
                <li><span>Fax machine</span></li>
                <li><span>On site storage of all documents</span></li>
                <li><span>Low query rates with rapid resolution</span></li>
                <li><span>Full time data/quality assurance coordinator</span></li> -->
            <?php endwhile; ?>
        </ul>
        <?php while ( have_rows('buttons') ) : the_row();
            $url = get_sub_field('url');
            $text = get_sub_field('text');
        ?>
            <a href="<?php echo $url; ?>" target="_blank" class="btn"><?php echo $text; ?></a>
        <?php endwhile; ?>
    </div>
    <div class="row">
        <div class="testimonial">
            <?php $quote = get_field('quote'); ?>
            <div>
                <img class="quote-left" src="/wp-content/themes/tribe-research/img/quote.jpg" alt="">
                <p><?php echo $quote['quote']; ?></p>
                <img class="quote-right" src="/wp-content/themes/tribe-research/img/quote.jpg" alt="">
            </div>
            <p class="author"><?php echo $quote['author']; ?></p>
            <p class="source"><?php echo $quote['position']; ?></p>
        </div>
    </div>
</section>

<!-- <section class="monitor">
    <div class="section-hero">
        <div class="anchor" id="monitor-guidelines"></div>
        <img class="bg" src="/wp-content/themes/tribe-research/img/sponsors-monitor-hero.jpg">
        <img class="monitor-text" src="/wp-content/themes/tribe-research/img/monitor-text.png" alt="Monitor Guidelines">
    </div>
    <div class="container">
        <div class="row">
            <div class="line"></div>
            <p>We look forward to working with you and hope these guidelines ensure a more efficient use of your time and ours during your monitoring visit. Due to our current study volume and increased patient visit schedule we ask that you adhere to the following guidelines.</p>
            <ul>
                <li><span>Please try and schedule your next RMV at each visit.</span>This will allow us to adjust our schedule accordingly and give you adequate time during your visit with us. Also, please give us advance warning if you will be bringing a co-CRA or manager with you so we can accommodate everyone comfortably.</li>
                <li><span>The Quality Assurance Coordinator is considered a monitor liaison.</span>If you have any questions please direct them to him/her. The Quality Assurance Coordinator will take care of all CRF corrections, and scheduling of monitoring visits. If needed the Quality Assurance Coordinator will delegate source corrections to the appropriate medical staff member.</li>
                <li><span>The Regulatory Coordinator is responsible for Regulatory and IRB questions.</span>(e.g. Site Delegation Logs, Enrollment Logs, & etc.). She/he will also be available to assist you.</li>
                <li><span>We ask that Monitors do not walk to the back offices or exam rooms</span>as we want to maintain privacy for our patients. If you need to talk with a study coordinator, please ask the front office for assistance.</li>
                <li><span>For your convenience, there is a fax/copier machine available to you</span>located in the front office. You are welcome to utilize this machine as needed, but we do ask to please keep copying to a minimum and to only make copies concerning our facility.</li>
            </ul>
        </div>
        <div class="row daily-schedule">
            <div class="anchor" id="daily-schedule"></div>
            <h2>Daily Schedule</h2>
            <div>
                <div class="time">
                    <p><span>Monitoring Visit:</span></p>
                    <p>8:30am - 4:30pm</p>
                    <p>(Monday-Thursday)</p>
                </div>
                <!--div class="vseparator"></div>
                <div class="time">
                    <p><span>Medical Director:</span></p>
                    <p>11:00am - 1:00pm</p>
                    <p>(Monday, Wednesday, Thursday)</p>
                </div>
            </div>
            <!--p><span>Coordinators assigned to your study will be available after 2:00 p.m.</span></p>
            <a href="#" class="btn">Download Monitor Guidelines</a>
        </div>
    </div>
</section> -->

<?php $area = get_field('content_area'); ?>
<section class="our-area">
    <div class="section-hero mb-5">
        <div class="anchor" id="our-area"></div>
        <div class="background"><img src="<?php echo $area['banner_image']; ?>"></div>
        <div class="foreground">
            <div>
                <h2 class="alt"><?php echo $area['title']; ?></h2>
                <p><?php echo $area['body']; ?></p>
                <a href="<?php echo $area['url']; ?>" target="_blank" class="simple-link arrow"><?php echo $area['text']; ?><?php echo file_get_contents(__DIR__ . '/../img/link-arrow.svg'); ?></a>
            </div>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row">
            <div class="anchor" id="hotels-restaurants"></div>
            <!-- <div class="controls col-12 mb-5">
                <h2>Search Area By:</h2>
                <div class="filter">
                    <a href="#hotels" class="filter-btn">
                        <?php echo file_get_contents(__DIR__ . '/../img/hotels.svg'); ?>
                        <p>Hotels</p>
                    </a>
                    <a href="#restaurants" class="filter-btn">
                        <?php echo file_get_contents(__DIR__ . '/../img/restaurants.svg'); ?>
                        <p>Restaurants</p>
                    </a>
                </div>
            </div> -->
        </div>
        <div class="row">
            <div class="col-12 text-center">
            <div class="anchor" id="hotels"></div>
                <h2><strong>Hotels</strong></h2>
            </div>
            <div class="col-lg-3 offset-lg-3 hotels active">
                <h2>I-85/Verdae/Woodruff Rd. Area</h2>
                <?php while( have_rows('hotels') ) : the_row();
                    $title = get_sub_field('title');
                    $link = get_sub_field('link');
                    $address1 = get_sub_field('address1');
                    $address2 = get_sub_field('address2');
                    $phone = get_sub_field('phone'); ?>
                        <div class="area">
                            <a target="_blank" rel="noopener noreferrer" href="<?php echo $link;?>" class="simple-link"><?php echo $title;?> <?php echo file_get_contents(__DIR__ . '/../img/link-arrow.svg'); ?></a>
                            <p class="road"><?php echo $address1;?></p>
                            <p class="city"><?php echo $address2;?></p>
                            <a class="number" href="tel:<?php echo $phone;?>"><?php echo $phone;?></a>
                        </div>
                <?php endwhile; ?>
            </div>
            <div class="col-lg-3 offset-lg-1 hotels active">
                <h2>Downtown Greenville Area</h2>
                <?php while( have_rows('hotels_p') ) : the_row();
                    $title = get_sub_field('title');
                    $link = get_sub_field('link');
                    $address1 = get_sub_field('address1');
                    $address2 = get_sub_field('address2');
                    $phone = get_sub_field('phone'); ?>
                        <div class="area">
                            <a target="_blank" rel="noopener noreferrer" href="<?php echo $link;?>" class="simple-link"><?php echo $title;?> <?php echo file_get_contents(__DIR__ . '/../img/link-arrow.svg'); ?></a>
                            <p class="road"><?php echo $address1;?></p>
                            <p class="city"><?php echo $address2;?></p>
                            <a class="number" href="tel:<?php echo $phone;?>"><?php echo $phone;?></a>
                        </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
            <div class="anchor" id="restaurants"></div>
                <h2><strong>Restaurants</strong></h2>
            </div>
            <div class="col-lg-3 offset-lg-3 restaurants active">
                <h2>I-85/Pelham Road Area</h2>
                <?php while( have_rows('restaurants') ) : the_row();
                    $title = get_sub_field('title');
                    $link = get_sub_field('link');
                    $address1 = get_sub_field('address1');
                    $address2 = get_sub_field('address2');
                    $phone = get_sub_field('phone'); ?>
                        <div class="area">
                            <a target="_blank" rel="noopener noreferrer" href="<?php echo $link;?>" class="simple-link"><?php echo $title;?> <?php echo file_get_contents(__DIR__ . '/../img/link-arrow.svg'); ?></a>
                            <p class="road"><?php echo $address1;?></p>
                            <p class="city"><?php echo $address2;?></p>
                            <a class="number" href="tel:<?php echo $phone;?>"><?php echo $phone;?></a>
                        </div>
                <?php endwhile; ?>
            </div>
            <div class="col-lg-3 offset-lg-1 restaurants active">
                <h2>Downtown Greenville Area</h2>
                <?php while( have_rows('restaurants_p') ) : the_row();
                    $title = get_sub_field('title');
                    $link = get_sub_field('link');
                    $address1 = get_sub_field('address1');
                    $address2 = get_sub_field('address2');
                    $phone = get_sub_field('phone'); ?>
                        <div class="area">
                            <a target="_blank" rel="noopener noreferrer" href="<?php echo $link;?>" class="simple-link"><?php echo $title;?> <?php echo file_get_contents(__DIR__ . '/../img/link-arrow.svg'); ?></a>
                            <p class="road"><?php echo $address1;?></p>
                            <p class="city"><?php echo $address2;?></p>
                            <a class="number" href="tel:<?php echo $phone;?>"><?php echo $phone;?></a>
                        </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/cta') ?>

<?php $video = get_field('video'); ?>
<div class="modal">
    <div style="padding:56.25% 0 0 0;position:relative;">
        <div class="close">+</div>
        <iframe src="https://player.vimeo.com/video/<?php echo $video['link']; ?>?autoplay=1&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
    </div>
    <script src="https://player.vimeo.com/api/player.js"></script>
</div>

<?php get_footer(); ?>

<script>
jQuery(document).ready(function($) {
    $('.modal iframe').attr("data-src", $('.modal iframe').attr("src"));
    $('.modal iframe').attr("src", "");

    $('.modal-btn').click(function() {
        $('.modal').addClass('show');
        $('.modal iframe').attr("src", $('.modal iframe').attr("data-src"));
    });

    $('.close').click(function() {
        $('.modal').removeClass('show');
        $('.modal iframe').attr("src", "");
    });
});
</script>
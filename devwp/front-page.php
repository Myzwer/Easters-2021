<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Easters Time Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Easters Theme
 * @since 1.0.0
 */

get_header(); ?>

    <!--Header
        Event Details / Intro Paragrah
        Online Service
        FAQ -->

    <div class="show-for-desktop">
        <video class="" src="<?php the_field('video'); ?>" autoplay loop
               playsinline muted></video>

        <div class="viewport-header">
            <div class="main-header">
                <div class="logo">
                    <img src="<?php the_field('logo'); ?>"
                         alt="Easter 2021 Logo">
                </div>
            </div>
        </div>
    </div>


    <div class="show-for-mobile">
        <div class="grid-container full-width">
            <div class="grid-x grid-padding-x full-background" style="background: linear-gradient(
                    rgba(0, 0, 0, .45),
                    rgba(0, 0, 0, .45)
                    ),url(<?php the_field('photo_background'); ?>);
                    background-position: center center;
                    background-repeat: no-repeat;
                    background-attachment: scroll;
                    background-size: cover;">
                <div class="small-12 cell">
                    <div class="content-middle width-large">
                        <div class="viewport-header">
                            <div class="head-container">
                                <div class="logo"><img src="<?php the_field('logo'); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background padding-bottom">
        <div class="grid-container">
            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="small-12 medium-6 large-4 cell info-card box-shadow">
                    <div class="grid-x grid-padding-x">
                        <div class="small-2 cell">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="small-10 cell">
                            <div class="card-content">
                                <p><?php the_field('date'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="small-12 medium-6 large-4 cell info-card box-shadow">
                    <div class="grid-x grid-padding-x">
                        <div class="small-2 cell">
                            <i class="far fa-clock" id="big-icon"></i>
                        </div>
                        <div class="small-10 cell">
                            <div class="card-content">
                                <p><?php the_field('times'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="small-12 medium-6 large-4 cell info-card-long box-shadow">
                    <div class="grid-x grid-padding-x">
                        <div class="small-2 cell">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="small-10 cell">
                            <div class="card-content">
                                <?php the_field('address'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background padding-bottom">
        <div class="add-medium-padding grid-container">
            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="small-12 medium-6 large-8 cell">
                    <h1 class="light-color-invert"><?php the_field('section_title_1'); ?></h1>
                    <p class="tb-padding"><?php the_field('section_copy_1'); ?></p>
                </div>

                <div class="small-12 medium-6 large-4 small-padding center">
                    <img class="box-shadow" src="<?php the_field('filler_photo'); ?>" alt="Promotional Stock Photo">
                </div>
            </div>
        </div>
    </div>


    <div class="full-width gray-background">
        <div class="grid-x grid-padding-x ">
            <div class="small-12 padding-top padding-bottom center cell">
                <h1 class="text-color">More Details</h1>
            </div>

            <div class="small-12 medium-6 large-4 padding-top padding-bottom cell big-card">
                <img src="http://easters-2021.local/wp-content/uploads/2021/03/Mao-to-Easters.jpg"
                     alt="">
                <div class="main-background big-card-contents card-height">
                    <h3>Directions</h3>
                    <p class="left margin-bottom">William Blount High School is at 219 County Farm Rd, Maryville, TN
                        37801. When you arrive, our parking team will help you find the best place to go, and you
                        can
                        walk from there right up to the main gates of the football stadium. </p>
                    <?php if (have_rows('button_1')): ?>
                        <?php while (have_rows('button_1')): the_row(); ?>
                            <a href="<?php the_sub_field('button_link'); ?>">
                                <button class="btn btn-v1 margin-bottom"><?php the_sub_field('button_text'); ?></button>
                            </a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="small-12 medium-6 large-4 padding-top padding-bottom cell big-card">
                <img src="http://easters-2021.local/wp-content/uploads/2021/03/Covid-Policy-copy.jpg"
                     alt="">
                <div class="main-background big-card-contents card-height">
                    <h3>Covid</h3>
                    <p class="left margin-bottom">If you haven't been back to church in person yet due to COVID-19,
                        then this is the perfect time to do it! We'll be meeting outside, there will be plenty of
                        space for social distancing, and masks are completely optional as well, so you can take as
                        many precautions as you need to come and worship with your family. </p>
                </div>
            </div>

            <div class="small-12 medium-6 large-4 padding-top padding-bottom cell big-card">

                <img src="http://easters-2021.local/wp-content/uploads/2021/03/FC-Kids-Easters.jpg"
                     alt="">
                <div class="main-background big-card-contents card-height">
                    <h3>FC Kids</h3>
                    <p class="left margin-bottom">We encourage that you bring your kids with you to our Easter
                        worship experience. When you walk in, you can stop by the FC Kids tent to get a handout for
                        your children to use during the service. </p>
                </div>
            </div>
        </div>
    </div>


    <div class="full-width main-background padding-bottom">
        <div class="add-medium-padding">
            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="small-12 center cell">
                    <h1 class="light-color-invert add-padding"><?php the_field('section_title_4'); ?></h1>
                </div>

                <div class="small-12 medium-6 large-4 small-padding center">
                    <img class="box-shadow" src="<?php the_field('filler_photo_2'); ?>"
                         alt="A Foothills Christmas Brand Photo">
                </div>

                <div class="small-12 medium-6 large-8 cell">
                    <div class="faq-content">
                        <?php
                        // Start the Repeater Loop
                        if (have_rows('qaa')):
                            // Card Start
                            // Begin looping data
                            $num = 1;
                            while (have_rows('qaa')) : the_row();
                                echo '<div class="faq-question">';
                                echo '<input id="q';
                                echo $num;
                                echo '"type="checkbox" class="panel">';
                                echo '<div class="plus">+</div>';

                                echo '<label for="q';
                                echo $num;
                                echo '" class="panel-title">';
                                the_sub_field('question');
                                echo '</label>';

                                echo '<div class="panel-content">';
                                the_sub_field('answer');
                                echo '</div>';
                                echo '</div>';
                                $num++;

                            endwhile;
                        else :
                            // no rows found
                        endif;
                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();

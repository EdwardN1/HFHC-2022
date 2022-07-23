<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>

    <div class="content">
        <div class="show-for-medium" style="padding-top: 175px;"></div>
        <div class="hide-for-medium" style="padding-top: 100px;"></div>

        <div class="inner-content grid-x">

            <main class="main small-12 large-12 medium-12 cell" role="main">





                <article id="post-2" class="post-2 page type-page status-publish hentry" role="article" itemscope=""
                         itemtype="https://schema.org/WebPage">



                    <section class="entry-content" itemprop="text">
                        <div class="grid-container">
                        </div>
                    </section> <!-- end article section -->

                    <section class="acf-content-loop">

                        <div id="page-nav">
                            <div class="grid-x" data-magellan="" data-offset="50" data-resize="sw461g-magellan"
                                 data-scroll="sw461g-magellan" id="sw461g-magellan" data-t="y47pzj-t">
                                <div class="cell auto text-right active">
                                    <a href="#about-us-heading">ABOUT</a></div>
                                <div class="cell large-3 medium-3 small-auto text-center">
                                    <a href="#join-our-team-heading">VACANCIES</a>
                                </div>
                                <div class="cell auto text-left">
                                    <a href="#contact">GET IN TOUCH</a>
                                </div>
                            </div>
                        </div>
                        <div id="header-swoosh">
                            <div class="logo-large"><img
                                        src="https://hfhc3.making.me.uk/wp-content/uploads/2020/02/HFHC_Healthcare_logo_large.png">
                            </div>
                            <div class="logo-small"><img
                                        src="https://hfhc3.making.me.uk/wp-content/uploads/2020/02/HFHC_Healthcare_logo_small.png">
                            </div>
                            <div class="heading">
                                <span class="lato-black font-white">Passionately doing things differently</span>
                                <span class="lato-regular font-white">in the world of care</span>
                            </div>
                            <div class="learn-more" data-magellan="" data-offset="50" data-resize="qly4k8-magellan"
                                 data-scroll="qly4k8-magellan" id="qly4k8-magellan" data-t="465fy0-t"><a
                                        href="#about-us-heading" class="intro-button">Learn More</a></div>
                        </div>
                        <div id="about-us-heading" data-magellan-target="about-us-heading">
                            <div class="grid-x">
                                <div class="cell auto"><span class="underline fullwidth">&nbsp;</span></div>
                                <div class="cell shrink">
                                    <div class="section"><span
                                                class="underline padded"><?php the_field('about_us_section_heading', 'option'); ?></span>
                                    </div>
                                </div>
                                <div class="cell auto">&nbsp;</div>
                            </div>
                        </div>
                        <?php
                        $about_us_1 = '';
                        $about_us_2 = '';
                        $about_us_3 = '';
                        $about_us_4 = '';
                        $about_us_5 = '';
                        $about_us_6 = '';
                        $about_us_7 = '';
                        $about_us_8 = '';
                        $about_us_9 = '';
                        $about_us_10 = '';
                        ?>
                        <?php if (have_rows('about_us_paragraphs', 'option')) : ?>
                            <?php while (have_rows('about_us_paragraphs', 'option')) : the_row(); ?>
                                <?php if ($about_us_1 == ''): ?>
                                    <?php if (get_sub_field('highlighted') == 1) : ?>
                                        <?php ob_start(); ?>
                                        <div class="left-content">
                                            <div class="blue bold">
                                                <div class="blue-line"></div>
                                                <?php the_sub_field('content'); ?>
                                                <div class="blue-line"></div>
                                            </div>
                                        </div>
                                        <?php
                                        $about_us_1 = ob_get_contents();
                                        ob_end_clean();
                                        ?>
                                    <?php else : ?>
                                        <?php ob_start(); ?>
                                        <div class="left-content">
                                            <p>
                                                <?php the_sub_field('content'); ?>
                                            </p>
                                        </div>
                                        <?php
                                        $about_us_1 = ob_get_contents();
                                        ob_end_clean();
                                        ?>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <?php if ($about_us_2 == ''): ?>
                                        <?php if (get_sub_field('highlighted') == 1) : ?>
                                            <?php ob_start(); ?>
                                            <div class="left-content">
                                                <div class="blue bold">
                                                    <div class="blue-line"></div>
                                                    <?php the_sub_field('content'); ?>
                                                    <div class="blue-line"></div>
                                                </div>
                                            </div>
                                            <?php
                                            $about_us_2 = ob_get_contents();
                                            ob_end_clean();
                                            ?>
                                        <?php else : ?>
                                            <?php ob_start(); ?>
                                            <div class="left-content">
                                                <p>
                                                    <?php the_sub_field('content'); ?>
                                                </p>
                                            </div>
                                            <?php
                                            $about_us_2 = ob_get_contents();
                                            ob_end_clean();
                                            ?>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <?php if ($about_us_3 == ''): ?>
                                            <?php if (get_sub_field('highlighted') == 1) : ?>
                                                <?php ob_start(); ?>
                                                <div class="left-content">
                                                    <div class="blue bold">
                                                        <div class="blue-line"></div>
                                                        <?php the_sub_field('content'); ?>
                                                        <div class="blue-line"></div>
                                                    </div>
                                                </div>
                                                <?php
                                                $about_us_3 = ob_get_contents();
                                                ob_end_clean();
                                                ?>
                                            <?php else : ?>
                                                <?php ob_start(); ?>
                                                <div class="left-content">
                                                    <p>
                                                        <?php the_sub_field('content'); ?>
                                                    </p>
                                                </div>
                                                <?php
                                                $about_us_3 = ob_get_contents();
                                                ob_end_clean();
                                                ?>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <?php if ($about_us_4 == ''): ?>
                                                <?php if (get_sub_field('highlighted') == 1) : ?>
                                                    <?php ob_start(); ?>
                                                    <div class="left-content">
                                                        <div class="blue bold">
                                                            <div class="blue-line"></div>
                                                            <?php the_sub_field('content'); ?>
                                                            <div class="blue-line"></div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    $about_us_4 = ob_get_contents();
                                                    ob_end_clean();
                                                    ?>
                                                <?php else : ?>
                                                    <?php ob_start(); ?>
                                                    <div class="left-content">
                                                        <p>
                                                            <?php the_sub_field('content'); ?>
                                                        </p>
                                                    </div>
                                                    <?php
                                                    $about_us_4 = ob_get_contents();
                                                    ob_end_clean();
                                                    ?>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <?php if ($about_us_5 == ''): ?>
                                                    <?php if (get_sub_field('highlighted') == 1) : ?>
                                                        <?php ob_start(); ?>
                                                        <div class="left-content">
                                                            <div class="blue bold">
                                                                <div class="blue-line"></div>
                                                                <?php the_sub_field('content'); ?>
                                                                <div class="blue-line"></div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        $about_us_5 = ob_get_contents();
                                                        ob_end_clean();
                                                        ?>
                                                    <?php else : ?>
                                                        <?php ob_start(); ?>
                                                        <div class="left-content">
                                                            <p>
                                                                <?php the_sub_field('content'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        $about_us_5 = ob_get_contents();
                                                        ob_end_clean();
                                                        ?>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <?php if ($about_us_6 == ''): ?>
                                                        <?php if (get_sub_field('highlighted') == 1) : ?>
                                                            <?php ob_start(); ?>
                                                            <div class="left-content">
                                                                <div class="blue bold">
                                                                    <div class="blue-line"></div>
                                                                    <?php the_sub_field('content'); ?>
                                                                    <div class="blue-line"></div>
                                                                </div>
                                                            </div>
                                                            <?php
                                                            $about_us_6 = ob_get_contents();
                                                            ob_end_clean();
                                                            ?>
                                                        <?php else : ?>
                                                            <?php ob_start(); ?>
                                                            <div class="left-content">
                                                                <p>
                                                                    <?php the_sub_field('content'); ?>
                                                                </p>
                                                            </div>
                                                            <?php
                                                            $about_us_6 = ob_get_contents();
                                                            ob_end_clean();
                                                            ?>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <?php if ($about_us_7 == ''): ?>
                                                            <?php if (get_sub_field('highlighted') == 1) : ?>
                                                                <?php ob_start(); ?>
                                                                <div class="left-content">
                                                                    <div class="blue bold">
                                                                        <div class="blue-line"></div>
                                                                        <?php the_sub_field('content'); ?>
                                                                        <div class="blue-line"></div>
                                                                    </div>
                                                                </div>
                                                                <?php
                                                                $about_us_7 = ob_get_contents();
                                                                ob_end_clean();
                                                                ?>
                                                            <?php else : ?>
                                                                <?php ob_start(); ?>
                                                                <div class="left-content">
                                                                    <p>
                                                                        <?php the_sub_field('content'); ?>
                                                                    </p>
                                                                </div>
                                                                <?php
                                                                $about_us_7 = ob_get_contents();
                                                                ob_end_clean();
                                                                ?>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <?php if ($about_us_8 == ''): ?>
                                                                <?php if (get_sub_field('highlighted') == 1) : ?>
                                                                    <?php ob_start(); ?>
                                                                    <div class="left-content">
                                                                        <div class="blue bold">
                                                                            <div class="blue-line"></div>
                                                                            <?php the_sub_field('content'); ?>
                                                                            <div class="blue-line"></div>
                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                    $about_us_8 = ob_get_contents();
                                                                    ob_end_clean();
                                                                    ?>
                                                                <?php else : ?>
                                                                    <?php ob_start(); ?>
                                                                    <div class="left-content">
                                                                        <p>
                                                                            <?php the_sub_field('content'); ?>
                                                                        </p>
                                                                    </div>
                                                                    <?php
                                                                    $about_us_8 = ob_get_contents();
                                                                    ob_end_clean();
                                                                    ?>
                                                                <?php endif; ?>
                                                            <?php else: ?>
                                                                <?php if ($about_us_9 == ''): ?>
                                                                    <?php if (get_sub_field('highlighted') == 1) : ?>
                                                                        <?php ob_start(); ?>
                                                                        <div class="left-content">
                                                                            <div class="blue bold">
                                                                                <div class="blue-line"></div>
                                                                                <?php the_sub_field('content'); ?>
                                                                                <div class="blue-line"></div>
                                                                            </div>
                                                                        </div>
                                                                        <?php
                                                                        $about_us_9 = ob_get_contents();
                                                                        ob_end_clean();
                                                                        ?>
                                                                    <?php else : ?>
                                                                        <?php ob_start(); ?>
                                                                        <div class="left-content">
                                                                            <p>
                                                                                <?php the_sub_field('content'); ?>
                                                                            </p>
                                                                        </div>
                                                                        <?php
                                                                        $about_us_9 = ob_get_contents();
                                                                        ob_end_clean();
                                                                        ?>
                                                                    <?php endif; ?>
                                                                <?php else: ?>
                                                                    <?php if ($about_us_10 == ''): ?>
                                                                        <?php if (get_sub_field('highlighted') == 1) : ?>
                                                                            <?php ob_start(); ?>
                                                                            <div class="left-content">
                                                                                <div class="blue bold">
                                                                                    <div class="blue-line"></div>
                                                                                    <?php the_sub_field('content'); ?>
                                                                                    <div class="blue-line"></div>
                                                                                </div>
                                                                            </div>
                                                                            <?php
                                                                            $about_us_10 = ob_get_contents();
                                                                            ob_end_clean();
                                                                            ?>
                                                                        <?php else : ?>
                                                                            <?php ob_start(); ?>
                                                                            <div class="left-content">
                                                                                <p>
                                                                                    <?php the_sub_field('content'); ?>
                                                                                </p>
                                                                            </div>
                                                                            <?php
                                                                            $about_us_10 = ob_get_contents();
                                                                            ob_end_clean();
                                                                            ?>
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endif; ?>


                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php // No rows found ?>
                        <?php endif; ?>
                        <div id="about-us" class="section">
                            <div class="left-content">
                                <h2><?php the_field('about_us_title', 'option'); ?></h2>
                                <?php if ($about_us_1 != ''): ?>
                                    <p><?php
                                        $about_us_paragraphs = get_field('about_us_paragraphs', 'option');
                                        echo $about_us_paragraphs[0]['content'];
                                        ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if ($about_us_2 != ''): ?>
                            <div id="unique-approach" class="section">
                                <?php echo $about_us_2; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($about_us_3 != ''): ?>
                            <div id="where-we-operate" class="section">
                                <?php echo $about_us_3; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (have_rows('about_us_icon_text', 'option')) : ?>
                            <?php while (have_rows('about_us_icon_text', 'option')) : the_row(); ?>
                                <div id="icons" class="section">
                                    <div class="grid-x">
                                        <div class="cell large-3 medium-3 small-6 first">
                                            <div class="icon">
                                                <div class="top">
                                                    <img src="https://hfhc3.making.me.uk/wp-content/uploads/2020/02/clock.svg">
                                                </div>
                                                <div class="bottom">
                                                    <?php the_sub_field('icon_1'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cell large-3 medium-3 small-6 second">
                                            <div class="icon">
                                                <div class="top">
                                                    <img src="https://hfhc3.making.me.uk/wp-content/uploads/2020/02/person.svg">
                                                </div>
                                                <div class="bottom">
                                                    <?php the_sub_field('icon_2'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cell large-3 medium-3 small-6 third">
                                            <div class="icon">
                                                <div class="top">
                                                    <img src="https://hfhc3.making.me.uk/wp-content/uploads/2020/02/home.svg">
                                                </div>
                                                <div class="bottom">
                                                    <?php the_sub_field('icon_3'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cell large-3 medium-3 small-6 forth">
                                            <div class="icon">
                                                <div class="top">
                                                    <img src="https://hfhc3.making.me.uk/wp-content/uploads/2020/02/office.svg">
                                                </div>
                                                <div class="bottom">
                                                    <?php the_sub_field('icon_4'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <div id="two-panel-services-desktop" class="section">
                            <div class="grid-x">
                                <div class="cell auto">
                                    <?php if ($about_us_4 != ''): ?>
                                        <?php echo $about_us_4; ?>
                                    <?php endif; ?>
                                    <?php if ($about_us_5 != ''): ?>
                                        <?php echo $about_us_5; ?>
                                    <?php endif; ?>
                                    <?php if ($about_us_6 != ''): ?>
                                        <?php echo $about_us_6; ?>
                                    <?php endif; ?>
                                    <?php if ($about_us_7 != ''): ?>
                                        <?php echo $about_us_7; ?>
                                    <?php endif; ?>
                                    <?php if ($about_us_8 != ''): ?>
                                        <?php echo $about_us_8; ?>
                                    <?php endif; ?>
                                    <?php if ($about_us_9 != ''): ?>
                                        <?php echo $about_us_9; ?>
                                    <?php endif; ?>
                                    <?php if ($about_us_10 != ''): ?>
                                        <?php echo $about_us_10; ?>
                                    <?php endif; ?>
                                    <div class="left-content">
                                        <p style="font-weight:900;">
                                            If you have care needs you’d like to discuss, or any questions…
                                        </p>
                                    </div>
                                    <div class="left-content">
                                        <p data-magellan="" data-offset="50" data-resize="68skap-magellan"
                                           data-scroll="68skap-magellan" id="68skap-magellan" data-t="0g7jqf-t">
                                            <a href="#contact" class="core-button">Get In Touch</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="cell shrink">&nbsp;</div>
                                <div class="cell shrink">
                                    <?php if (have_rows('call_out', 'option')) : ?>
                                        <?php while (have_rows('call_out', 'option')) : the_row(); ?>
                                            <div class="blue-box">
                                                <?php the_sub_field('heading'); ?>
                                                <br><?php the_sub_field('content'); ?>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div id="two-panel-services-mobile">
                            <div class="section">
                                <?php if ($about_us_1 != ''): ?>
                                    <?php echo $about_us_1; ?>
                                <?php endif; ?>
                                <?php if ($about_us_2 != ''): ?>
                                    <?php echo $about_us_2; ?>
                                <?php endif; ?>
                                <?php if ($about_us_3 = ''): ?>
                                    <?php echo $about_us_3; ?>
                                <?php endif; ?>
                            </div>
                            <?php if (have_rows('call_out', 'option')) : ?>
                                <?php while (have_rows('call_out', 'option')) : the_row(); ?>
                                    <div class="blue-box">
                                        <?php the_sub_field('heading'); ?>
                                        <br><?php the_sub_field('content'); ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <div class="section">
                                <?php if ($about_us_4 != ''): ?>
                                    <?php echo $about_us_4; ?>
                                <?php endif; ?>
                                <?php if ($about_us_5 != ''): ?>
                                    <?php echo $about_us_5; ?>
                                <?php endif; ?>
                                <?php if ($about_us_6 != ''): ?>
                                    <?php echo $about_us_6; ?>
                                <?php endif; ?>
                                <?php if ($about_us_7 != ''): ?>
                                    <?php echo $about_us_7; ?>
                                <?php endif; ?>
                                <?php if ($about_us_8 != ''): ?>
                                    <?php echo $about_us_8; ?>
                                <?php endif; ?>
                                <?php if ($about_us_9 != ''): ?>
                                    <?php echo $about_us_9; ?>
                                <?php endif; ?>
                                <?php if ($about_us_10 != ''): ?>
                                    <?php echo $about_us_10; ?>
                                <?php endif; ?>
                                <div class="left-content">
                                    <p style="font-weight:900;">
                                        If you have care needs you’d like to discuss, or any questions…
                                    </p>
                                </div>
                                <div class="left-content">
                                    <p data-magellan="" data-offset="50" data-resize="lcch9b-magellan"
                                       data-scroll="lcch9b-magellan" id="lcch9b-magellan" data-t="25i70i-t">
                                        <a href="#contact" class="core-button">Get In Touch</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <?php if (have_rows('staff_member_quotes', 'option')) : ?>
                            <div id="slider-quotes-staff-members">
                                <div class="slider">
                                    <div class="section">
                                        <div class="left-content">
                                            <div class="quote-slider" data-slick-slider data-slick='{"dots": true}'>
                                                <?php while (have_rows('staff_member_quotes', 'option')) : the_row(); ?>
                                                    <div class="quote-slide">
                                                        <div class="quote-slide-contents">
                                                            <h2>
                                                                <?php the_sub_field('quote'); ?>
                                                            </h2>
                                                            <p>
                                                                <?php the_sub_field('staff_member'); ?>
                                                            </p>
                                                        </div>
                                                    </div>

                                                <?php endwhile; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else : ?>
                            <?php // No rows found ?>
                        <?php endif; ?>

                        <div id="join-our-team-heading" data-magellan-target="join-our-team-heading">
                            <div class="grid-x">
                                <div class="cell auto"><span class="underline fullwidth">&nbsp;</span></div>
                                <div class="cell shrink">
                                    <div class="section"><span class="underline padded">JOIN OUR TEAM</span></div>
                                </div>
                                <div class="cell auto">&nbsp;</div>
                            </div>
                        </div>
                        <style>
                            .blue.bold {
                                color: #14C3E0;
                                font-weight: 900;
                                font-size: 25px;
                            }
                        </style>
                        <div id="join-our-team" class="section" style="padding-bottom: 0;">
                            <div class="left-content">
                                <h2><?php the_field('join_our_team_title', 'option'); ?></h2>
                            </div>
                                <?php if (have_rows('join_our_team_paragraphs', 'option')) : ?>
                                    <?php $jot_x = 1; ?>
                                    <?php while (have_rows('join_our_team_paragraphs', 'option')) : the_row(); ?>
                                        <?php if (get_sub_field('highlighted') == 1) : ?>
                                            <div class="left-content">
                                                <div class="blue bold">
                                                    <div class="blue-line"></div>
                                                    <?php the_sub_field('content'); ?>
                                                    <div class="blue-line"></div>
                                                </div>
                                            </div>
                                        <?php else : ?>
                                            <div class="left-content">
                                                <p>
                                                    <?php the_sub_field('content'); ?>
                                                </p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($jot_x == 1): ?>
                                            <?php if (have_rows('join_our_team_icon_text', 'option')) : ?>
                                                <?php while (have_rows('join_our_team_icon_text', 'option')) : the_row(); ?>
                                                    <div class="left-content" style="padding-bottom: 3em;">
                                                        <p data-magellan="" data-offset="50"
                                                           data-resize="3xwk4o-magellan"
                                                           data-scroll="3xwk4o-magellan" id="3xwk4o-magellan"
                                                           data-t="tn5hfs-t">
                                                            <a href="#roles-available-heading" class="core-button">VIEW
                                                                ROLES &amp; APPLY</a>
                                                        </p>
                                                    </div>
                                                    <div id="we-offer-grid" class="section">
                                                        <div class="blue-bar">we offer</div>
                                                        <div class="grid-x">
                                                            <div class="cell large-2 medium-4 small-6 first">
                                                                <div class="icon">
                                                                    <div class="top">
                                                                        <img src="https://hfhc3.making.me.uk/wp-content/uploads/2020/02/sun_moon.svg">
                                                                    </div>
                                                                    <div class="bottom">
                                                                        <?php the_sub_field('icon_1'); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cell large-2 medium-4 small-6 second">
                                                                <div class="icon">
                                                                    <div class="top">
                                                                        <img src="https://hfhc3.making.me.uk/wp-content/uploads/2020/02/people.svg">
                                                                    </div>
                                                                    <div class="bottom">
                                                                        <?php the_sub_field('icon_2'); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cell large-2 medium-4 small-6 third">
                                                                <div class="icon">
                                                                    <div class="top">
                                                                        <img src="https://hfhc3.making.me.uk/wp-content/uploads/2020/02/money.svg">
                                                                    </div>
                                                                    <div class="bottom">
                                                                        <?php the_sub_field('icon_3'); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cell large-2 medium-4 small-6 forth">
                                                                <div class="icon">
                                                                    <div class="top">
                                                                        <img src="https://hfhc3.making.me.uk/wp-content/uploads/2020/02/rosette.svg">
                                                                    </div>
                                                                    <div class="bottom">
                                                                        <?php the_sub_field('icon_4'); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cell large-2 medium-4 small-6 fifth">
                                                                <div class="icon">
                                                                    <div class="top">
                                                                        <img src="https://hfhc3.making.me.uk/wp-content/uploads/2020/02/trophy.svg">
                                                                    </div>
                                                                    <div class="bottom">
                                                                        <?php the_sub_field('icon_5'); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cell large-2 medium-4 small-6 sixth">
                                                                <div class="icon">
                                                                    <div class="top">
                                                                        <img src="https://hfhc3.making.me.uk/wp-content/uploads/2020/02/clipboard.svg">
                                                                    </div>
                                                                    <div class="bottom">
                                                                        <?php the_sub_field('icon_6'); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div style="padding-bottom: 3em;"></div>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                            <?php $jot_x++; ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <?php // No rows found ?>
                                <?php endif; ?>
                        </div>

                        <div id="view-roles-and-apply" class="section"  style="padding-top: 0;">
                            <div class="left-content">
                                <p data-magellan="" data-offset="50" data-resize="54cuv3-magellan"
                                   data-scroll="54cuv3-magellan" id="54cuv3-magellan" data-t="q9h93d-t">
                                    <a href="#roles-available-heading" class="core-button">View Roles &amp; Apply</a>
                                </p>
                            </div>
                        </div>
                        <?php if (have_rows('care_establishment_quotes', 'option')) : ?>
                            <div id="slider-quotes-care-establishments">
                                <div class="slider">
                                    <div class="section">
                                        <div class="left-content">
                                            <div class="quote-slider" data-slick-slider data-slick='{"dots": true}'>
                                                <?php while (have_rows('care_establishment_quotes', 'option')) : the_row(); ?>
                                                    <div class="quote-slide">
                                                        <div class="quote-slide-contents">
                                                            <h2>
                                                                <?php the_sub_field('quote'); ?>
                                                            </h2>
                                                            <p>
                                                                <?php the_sub_field('staff_member'); ?>
                                                            </p>
                                                        </div>
                                                    </div>

                                                <?php endwhile; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else : ?>
                            <?php // No rows found ?>
                        <?php endif; ?>


                        <div id="roles-available-heading" data-magellan-target="roles-available-heading">
                            <div class="grid-x">
                                <div class="cell auto"><span class="underline fullwidth">&nbsp;</span></div>
                                <div class="cell shrink">
                                    <div class="section"><span class="underline padded">ROLES CURRENTLY AVAILABLE</span>
                                    </div>
                                </div>
                                <div class="cell auto">&nbsp;</div>
                            </div>
                        </div>
                        <div id="roles-accordion">
                            <div class="section">
                                <div class="left-content">
                                    <h2>JOIN OUR TEAM</h2>
                                </div>
                            </div>
                            <?php if (have_rows('vacancies', 'option')) : ?>
                                <ul class="accordion" data-accordion data-multi-expand="true"
                                    data-allow-all-closed="true">
                                    <?php while (have_rows('vacancies', 'option')) : the_row(); ?>
                                        <li class="accordion-item" data-accordion-item>
                                            <!-- Accordion tab title -->
                                            <a href="#" class="accordion-title">
                                                <div class="section">
                                                    <div class="left-content">
                                                        <?php the_sub_field('job_title'); ?>
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
                                            <div class="accordion-content" data-tab-content>
                                                <div class="section">
                                                    <div class="left-content">
                                                        <div class="grid-x">
                                                            <div class="cell large-6 medium-12 small-12">

                                                                <div class="underlined">
                                                                    <div class="title">WAGE:</div>
                                                                    <p>
                                                                        <?php the_sub_field('wage'); ?>
                                                                    </p>
                                                                </div>

                                                                <div class="underlined">
                                                                    <div class="title">THE ROLE:</div>
                                                                    <?php the_sub_field('the_role'); ?>
                                                                </div>

                                                                <div class="underlined small">
                                                                    <div class="title">HOURS:</div>
                                                                    <?php the_sub_field('hours'); ?>
                                                                </div>

                                                            </div>

                                                            <div class="cell large-6 medium-12 small-12">

                                                                <div class="underlined">
                                                                    <div class="title">LOCATION:</div>
                                                                    <?php the_sub_field('location'); ?>
                                                                </div>

                                                                <div class="underlined">
                                                                    <div class="title">BENEFITS:</div>
                                                                    <?php if (have_rows('benefits')) : ?>
                                                                        <?php while (have_rows('benefits')) : the_row(); ?>
                                                                            <?php the_sub_field('benefit'); ?>
                                                                        <?php endwhile; ?>
                                                                    <?php else : ?>
                                                                        <?php // No rows found ?>
                                                                    <?php endif; ?>
                                                                </div>

                                                                <div class="underlined small">
                                                                    <div class="title">THE RIGHT CANDIDATE WILL HAVE:
                                                                    </div>
                                                                    <?php if (have_rows('the_right_candidate_will_have')) : ?>
                                                                        <?php while (have_rows('the_right_candidate_will_have')) : the_row(); ?>
                                                                            <?php the_sub_field('candidate_quality'); ?>
                                                                        <?php endwhile; ?>
                                                                    <?php else : ?>
                                                                        <?php // No rows found ?>
                                                                    <?php endif; ?>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="underlined large"></div>
                                                        <a href="#" class="apply-button">APPLY</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php else : ?>
                                <?php // No rows found ?>
                            <?php endif; ?>
                        </div>
                        <div id="role-question" class="section">
                            <div class="left-content">
                                <p>Have a question about a role? Want to discuss your options? Let us help you to take
                                    the next step in your career.</p>

                                <p data-magellan="" data-offset="50" data-resize="5672ii-magellan"
                                   data-scroll="5672ii-magellan" id="5672ii-magellan" data-t="ekr61l-t"><a
                                            href="#contact" class="core-button">GET IN TOUCH</a>


                                </p></div>
                        </div>
                    </section>

                    <footer class="article-footer">
                    </footer> <!-- end article footer -->


                    <div id="comments" class="comments-area">


                    </div><!-- #comments -->
                </article> <!-- end article -->                    <!--</div>-->


            </main> <!-- end #main -->


        </div> <!-- end #inner-content -->

    </div>

<?php get_footer(); ?>
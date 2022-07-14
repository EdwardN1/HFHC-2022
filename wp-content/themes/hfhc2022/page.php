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


                <!--<div class="grid-container">-->


                <article id="post-2" class="post-2 page type-page status-publish hentry" role="article" itemscope=""
                         itemtype="http://schema.org/WebPage">

                    <!--<header class="article-header">
                        <h1 class="page-title"></h1>
                    </header>--> <!-- end article header -->

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
                                <!--<div class="left-content">
                                    HFHC Healthcare provides carers and support workers to people in their own homes as
                                    well as supplying specialist staff to other establishments offering care.
                                    <div class="blue bold">
                                        <div class="blue-line"></div>
                                        All our staff are recruited to match each client’s specific individual needs,
                                        location and stage of life.
                                        <div class="blue-line"></div>
                                    </div>
                                </div>
                                <div class="left-content">
                                    <p>
                                        We provide highly responsive, safe and effective care - delivered by trained,
                                        caring and compassionate staff; maintaining dignity and respect at all times.
                                    </p>
                                </div>-->
                            </div>
                            <?php if (have_rows('call_out', 'option')) : ?>
                                <?php while (have_rows('call_out', 'option')) : the_row(); ?>
                                    <div class="blue-box">
                                        <?php the_sub_field('heading'); ?>
                                        <br><?php the_sub_field('content'); ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <!--<div class="blue-box">
                                Our specialist services include: <br>Complex Care; Mental Health; Learning Disability
                                Support; Palliative Care; Elderly Care; Dementia Care; End of Life Care.
                            </div>-->
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
                                <!--<div class="left-content">
                                    <p>
                                        Support includes personal care and physical support, mental support and
                                        companionship for people needing a little extra help – from a few hours a week
                                        to 24-hour care.
                                    </p>
                                </div>-->
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
                        <div id="slider-quotes-care-establishments">
                            <div class="slider">
                                <div class="section">
                                    <div class="left-content">
                                        <div class="quote-slider" data-slick-slider data-slick='{"dots": true}'>

                                            <div class="quote-slide">
                                                <div class="quote-slide-contents">
                                                    <h2>
                                                        We understand what it is to care for a loved one - the emotions
                                                        that go with
                                                        this and how important it is to have high quality care that
                                                        focuses on their
                                                        specific needs.
                                                    </h2>
                                                    <p>
                                                        Donna Nesbitt, Registered Manager
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="quote-slide">
                                                <div class="quote-slide-contents">
                                                    <h2>
                                                        The support staff are always enthusiastic, well presented and
                                                        reliable.
                                                    </h2>
                                                    <p>
                                                        HFHC Healthcare Client
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="quote-slide">
                                                <div class="quote-slide-contents">
                                                    <h2>
                                                        We are committed to delivering the highest quality training for
                                                        our staff and
                                                        continually develop and invest in our provision.
                                                    </h2>
                                                    <p>
                                                        Donna Nesbitt, Registered Manager
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="join-our-team-heading" data-magellan-target="join-our-team-heading">
                            <div class="grid-x">
                                <div class="cell auto"><span class="underline fullwidth">&nbsp;</span></div>
                                <div class="cell shrink">
                                    <div class="section"><span class="underline padded">JOIN OUR TEAM</span></div>
                                </div>
                                <div class="cell auto">&nbsp;</div>
                            </div>
                        </div>
                        <div id="join-our-team" class="section">
                            <div class="left-content">
                                <h2>Be someone who makes a real difference</h2>
                                <p>If you work for HFHC Healthcare, you will become more than just ‘another carer’
                                    passing through - you will be part of a trusted and well-led team, providing high
                                    quality care and support. </p>
                                <p data-magellan="" data-offset="50" data-resize="3xwk4o-magellan"
                                   data-scroll="3xwk4o-magellan" id="3xwk4o-magellan" data-t="tn5hfs-t">
                                    <a href="#roles-available-heading" class="core-button">VIEW ROLES &amp; APPLY</a>
                                </p>
                            </div>
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
                                            Flexible working hours
                                        </div>
                                    </div>
                                </div>
                                <div class="cell large-2 medium-4 small-6 second">
                                    <div class="icon">
                                        <div class="top">
                                            <img src="https://hfhc3.making.me.uk/wp-content/uploads/2020/02/people.svg">
                                        </div>
                                        <div class="bottom">
                                            Shifts to suit everyone
                                        </div>
                                    </div>
                                </div>
                                <div class="cell large-2 medium-4 small-6 third">
                                    <div class="icon">
                                        <div class="top">
                                            <img src="https://hfhc3.making.me.uk/wp-content/uploads/2020/02/money.svg">
                                        </div>
                                        <div class="bottom">
                                            Excellent pay rates and holiday pay
                                        </div>
                                    </div>
                                </div>
                                <div class="cell large-2 medium-4 small-6 forth">
                                    <div class="icon">
                                        <div class="top">
                                            <img src="https://hfhc3.making.me.uk/wp-content/uploads/2020/02/rosette.svg">
                                        </div>
                                        <div class="bottom">
                                            DBS paid for &amp; £250 bonus upon completion of 200 hours worked
                                        </div>
                                    </div>
                                </div>
                                <div class="cell large-2 medium-4 small-6 fifth">
                                    <div class="icon">
                                        <div class="top">
                                            <img src="https://hfhc3.making.me.uk/wp-content/uploads/2020/02/trophy.svg">
                                        </div>
                                        <div class="bottom">
                                            Exciting career development opportunities
                                        </div>
                                    </div>
                                </div>
                                <div class="cell large-2 medium-4 small-6 sixth">
                                    <div class="icon">
                                        <div class="top">
                                            <img src="https://hfhc3.making.me.uk/wp-content/uploads/2020/02/clipboard.svg">
                                        </div>
                                        <div class="bottom">
                                            Unmatched training opportunities
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="view-roles-and-apply" class="section">
                            <div class="left-content">
                                <p>Our staff are employed following a rigorous values-based recruitment process which
                                    ensures our people have the right outlook, values and ethos.</p>
                                <p>All our staff have access to specialised teams including training, resourcing,
                                    assessment experts and HR as well as more than 20 other specialist departments.</p>
                                <div class="blue bold">
                                    <div class="blue-line"></div>
                                    You are not only supported in your role, but also encouraged to upskill and progress
                                    in your career if you wish to.
                                    <div class="blue-line"></div>
                                </div>
                                <p>Everyone is linked by a ground-breaking IT platform, which means a more responsive
                                    and effective delivery of bespoke care packages.</p>
                                <p data-magellan="" data-offset="50" data-resize="54cuv3-magellan"
                                   data-scroll="54cuv3-magellan" id="54cuv3-magellan" data-t="q9h93d-t">
                                    <a href="#roles-available-heading" class="core-button">View Roles &amp; Apply</a>
                                </p>
                            </div>
                        </div>
                        <div id="slider-quotes-staff-members" data-="">
                            <div class="slider">
                                <div class="section">
                                    <div class="left-content">
                                        <div class="quote-slider" data-slick-slider data-slick='{"dots": true}'>

                                            <div class="quote-slide">
                                                <div class="quote-slide-contents">
                                                    <h2>I love the variety of work that HFHC Healthcare offers. The
                                                        flexibility of being
                                                        able to pick and choose my own shifts is also really
                                                        beneficial.</h2>
                                                    <!--<p><token type="text" name="Slide1 Sub Heading" /></p>-->
                                                </div>
                                            </div>

                                            <div class="quote-slide">
                                                <div class="quote-slide-contents">
                                                    <h2>The training, support and placement allocations are all
                                                        excellent.</h2>
                                                    <!--<p><token type="text" name="Slide2 Sub Heading" /></p>-->
                                                </div>
                                            </div>

                                            <div class="quote-slide">
                                                <div class="quote-slide-contents">
                                                    <h2>The training provided by HFHC Healthcare is second to none.
                                                        There is always
                                                        someone to call if you have a problem, and they have been very
                                                        supportive of me
                                                        when needed - it's a great company to work for.</h2>
                                                    <!--<p><token type="text" name="Slide3 Sub Heading" /></p>-->
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <ul class="accordion" data-accordion="" data-multi-expand="true"
                                data-allow-all-closed="true" role="tablist" data-t="yhw50r-t">
                                <li class="accordion-item" data-accordion-item="">
                                    <!-- Accordion tab title -->
                                    <a href="#" class="accordion-title" aria-controls="mqwpeg-accordion" role="tab"
                                       id="mqwpeg-accordion-label" aria-expanded="false" aria-selected="false">
                                        <div class="section">
                                            <div class="left-content">Personal Assistant</div>
                                        </div>
                                    </a>

                                    <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
                                    <div class="accordion-content" data-tab-content="" role="tabpanel"
                                         aria-labelledby="mqwpeg-accordion-label" aria-hidden="true"
                                         id="mqwpeg-accordion">
                                        <div class="section">
                                            <div class="left-content">
                                                <div class="grid-x">
                                                    <div class="cell large-6 medium-12 small-12">

                                                        <div class="underlined">
                                                            <div class="title">WAGE:</div>
                                                            <p>£8.54 – £9.04 per hour</p>

                                                        </div>

                                                        <div class="underlined">
                                                            <div class="title">THE ROLE:</div>
                                                            <p>HFHC Healthcare are currently looking to recruit a number
                                                                of Personal Assistants. The role involves providing care
                                                                and support to clients with mental health conditions and
                                                                learning disabilities in their own home.</p>
                                                            <p>HFHC Healthcare is at the forefront of delivering high
                                                                quality care, with family values at the centre of our
                                                                services.</p>
                                                            <p>We provide full training, flexible working hours to suit
                                                                your needs, and career prospects which you can develop
                                                                and make your own.</p>

                                                        </div>

                                                        <div class="underlined small">
                                                            <div class="title">HOURS:</div>
                                                            <p>Day hours are between 07:00 – 22:00 and nights are
                                                                between 22:00 – 07:00</p>
                                                            <p>Split shifts and shorter hours are available</p>

                                                        </div>

                                                    </div>

                                                    <div class="cell large-6 medium-12 small-12">

                                                        <div class="underlined">
                                                            <div class="title">LOCATION:</div>
                                                            <p>Lincolnshire</p>

                                                        </div>

                                                        <div class="underlined">
                                                            <div class="title">BENEFITS:</div>
                                                            <p>– Full training<br>
                                                                – A DBS (paid for)<br>
                                                                – Excellent working and training environment<br>
                                                                – Full holiday pay – for every 10 hours worked you will
                                                                receive 1 hour paid annual leave entitlement.<br>
                                                                – HR Support<br>
                                                                – Development and additional training to work in
                                                                different services</p>

                                                        </div>

                                                        <div class="underlined small">
                                                            <div class="title">THE RIGHT CANDIDATE WILL HAVE:</div>
                                                            <p>– A willingness to help<br>
                                                                – Ambition<br>
                                                                – Commitment<br>
                                                                – An open mind<br>
                                                                – 6 months paid experience in a similar setting<br>
                                                                – Work in a person-centred way</p>

                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="underlined large"></div>
                                                <a href="#" class="apply-button">APPLY</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- ... -->
                                <li class="accordion-item" data-accordion-item="">
                                    <!-- Accordion tab title -->
                                    <a href="#" class="accordion-title" aria-controls="43gq5e-accordion" role="tab"
                                       id="43gq5e-accordion-label" aria-expanded="false" aria-selected="false">
                                        <div class="left-content">Complex Care Assistant</div>
                                    </a>

                                    <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
                                    <div class="accordion-content" data-tab-content="" role="tabpanel"
                                         aria-labelledby="43gq5e-accordion-label" aria-hidden="true"
                                         id="43gq5e-accordion">
                                        <div class="section">
                                            <div class="left-content">
                                                <div class="grid-x">
                                                    <div class="cell large-6 medium-12 small-12">

                                                        <div class="underlined">
                                                            <div class="title">WAGE:</div>
                                                            <p>£10.88 – £11.08 an hour</p>

                                                        </div>

                                                        <div class="underlined">
                                                            <div class="title">THE ROLE:</div>
                                                            <p>HFHC Healthcare are currently looking to recruit a number
                                                                of Complex Care Assistants for our<br>
                                                                clients, based in Lincolnshire and the surrounding
                                                                areas.</p>
                                                            <p>The role involves providing care and support to elderly
                                                                clients, clients with mental health conditions and
                                                                learning disabilities in their own home. Shifts are long
                                                                duration, predominantly 4 – 14 hours.</p>
                                                            <p>HFHC Healthcare is at the forefront of delivering high
                                                                quality care, with family values at the centre of our
                                                                services.</p>
                                                            <p>We provide full training, flexible working hours to suit
                                                                your needs, and career prospects which you can develop
                                                                and make your own.</p>

                                                        </div>

                                                        <div class="underlined small">
                                                            <div class="title">HOURS:</div>
                                                            <p>Day hours are between 07:00 – 22:00 and nights are
                                                                between 22:00 – 07:00</p>
                                                            <p>Split shifts and shorter hours are available</p>

                                                        </div>

                                                    </div>

                                                    <div class="cell large-6 medium-12 small-12">

                                                        <div class="underlined">
                                                            <div class="title">LOCATION:</div>
                                                            <p>Lincolnshire</p>

                                                        </div>

                                                        <div class="underlined">
                                                            <div class="title">BENEFITS:</div>
                                                            <p>– Full training<br>
                                                                – A DBS (paid for)<br>
                                                                – Excellent working and training environment<br>
                                                                – Full holiday pay – for every 10 hours worked you will
                                                                receive 1 hour paid annual leave entitlement.<br>
                                                                – HR Support<br>
                                                                – Development and additional training to work in
                                                                different services<br>
                                                                – Earn up to £14.85 per hour for Bank Holiday nights</p>

                                                        </div>

                                                        <div class="underlined small">
                                                            <div class="title">THE RIGHT CANDIDATE WILL HAVE:</div>
                                                            <p>– A willingness to help<br>
                                                                – Ambition<br>
                                                                – Commitment<br>
                                                                – An open mind<br>
                                                                – 6 months paid experience in a similar setting<br>
                                                                – Working in a person-centred way</p>

                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="underlined large"></div>
                                                <a href="#" class="apply-button">APPLY</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- ... -->
                                <li class="accordion-item" data-accordion-item="">
                                    <!-- Accordion tab title -->
                                    <a href="#" class="accordion-title" aria-controls="ecom80-accordion" role="tab"
                                       id="ecom80-accordion-label" aria-expanded="false" aria-selected="false">
                                        <div class="left-content">Night Care Assistant</div>
                                    </a>

                                    <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
                                    <div class="accordion-content" data-tab-content="" role="tabpanel"
                                         aria-labelledby="ecom80-accordion-label" aria-hidden="true"
                                         id="ecom80-accordion">
                                        <div class="section">
                                            <div class="left-content">
                                                <div class="grid-x">
                                                    <div class="cell large-6 medium-12 small-12">

                                                        <div class="underlined">
                                                            <div class="title">WAGE:</div>
                                                            <p>£10.88 – £11.08 an hour</p>

                                                        </div>

                                                        <div class="underlined">
                                                            <div class="title">THE ROLE:</div>
                                                            <p>HFHC Healthcare are currently looking to recruit a number
                                                                of Night Care Assistants for our clients, based in
                                                                Lincolnshire and the surrounding areas.</p>
                                                            <p>The role involves providing care and support to elderly
                                                                clients, clients with mental health conditions and
                                                                learning disabilities in their own home. Shifts are long
                                                                duration, predominantly 4 – 14 hours.</p>
                                                            <p>HFHC Healthcare is at the forefront of delivering high
                                                                quality care, with family values at the centre of our
                                                                services.</p>
                                                            <p>We provide full training, flexible working hours to suit
                                                                your needs, and career prospects which you can develop
                                                                and make your own.</p>

                                                        </div>

                                                        <div class="underlined small">
                                                            <div class="title">HOURS:</div>
                                                            <p>Hour are between 22:00 – 07:00</p>
                                                            <p>Split shifts and shorter hours are available.</p>

                                                        </div>

                                                    </div>

                                                    <div class="cell large-6 medium-12 small-12">

                                                        <div class="underlined">
                                                            <div class="title">LOCATION:</div>
                                                            <p>Lincolnshire</p>

                                                        </div>

                                                        <div class="underlined">
                                                            <div class="title">BENEFITS:</div>
                                                            <p>– Full training<br>
                                                                – A DBS (paid for)<br>
                                                                – Excellent working and training environment<br>
                                                                – Full holiday pay – for every 10 hours worked you will
                                                                receive 1 hour paid annual leave entitlement.<br>
                                                                – HR Support<br>
                                                                – Development and additional training to work in
                                                                different services<br>
                                                                – Earn up to £14.85 per hour for Bank Holiday nights</p>

                                                        </div>

                                                        <div class="underlined small">
                                                            <div class="title">THE RIGHT CANDIDATE WILL HAVE:</div>
                                                            <p>– A willingness to help<br>
                                                                – Ambition<br>
                                                                – Commitment<br>
                                                                – An open mind<br>
                                                                – 6 months paid experience in a similar setting<br>
                                                                – Working in a person-centred way</p>

                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="underlined large"></div>
                                                <a href="#" class="apply-button">APPLY</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- ... -->
                            </ul>
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
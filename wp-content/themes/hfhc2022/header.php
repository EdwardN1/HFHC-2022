<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">

    <!-- Force IE to use the latest rendering engine available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta class="foundation-mq">

    <!-- If Site Icon isn't set in customizer -->
    <?php if (!function_exists('has_site_icon') || !has_site_icon()) { ?>
        <!-- Icons & Favicons -->
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png"
              rel="apple-touch-icon"/>
    <?php } ?>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php if(is_front_page()): ?>

<div id="page-nav">
    <div class="grid-x" data-magellan="" data-offset="50" data-resize="pxnp8k-magellan" data-scroll="pxnp8k-magellan"
         id="pxnp8k-magellan" data-t="bj9egk-t" data-events="resize">
        <div class="cell auto text-right">
            <a href="#about-us-heading" class="nav-up">ABOUT</a></div>
        <div class="cell large-3 medium-3 small-auto text-center active">
            <a href="#join-our-team-heading" class="nav-up">VACANCIES</a>
        </div>
        <div class="cell auto text-left">
            <a href="#contact">GET IN TOUCH</a>
        </div>
    </div>
</div>
<?php else: ?>

    <?php get_template_part('parts/nav', 'topbar'); ?>

<?php endif;?>
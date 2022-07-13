<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<footer class="footer" role="contentinfo">

    <div class="gratuitous-footer-swoosh">
        <!--<div class="grid-container">-->
        <!--</div>-->
    </div>
    <div class="get-in-touch-heading">
        <!--<div class="grid-container">-->
        <div id="contact" data-magellan-target="content">
            <div class="grid-x">
                <div class="cell auto"><span class="underline fullwidth">&nbsp;</span></div>
                <div class="cell shrink"><div class="section"><span class="underline padded">Get in touch</span></div></div>
                <div class="cell auto">&nbsp;</div>
            </div>
        </div>                                                <!--</div>-->
    </div>
    <div class="get-in-touch-section">
        <!--<div class="grid-container">-->
        <div class="section">
            <div class="left-content">
                <h2>How can we help?</h2>
            </div>
        </div>
        <div class="blue-background">
            <div class="section">
                <div class="left-content">
                    <div class="grid-x">
                        <div class="cell large-6 medium-12 small-12">
                            <div class="top-border">
                                <div class="big-heading">PHONE</div>
                                <div class="title">Want to work for us?</div>
                                <p><a href="<?php the_field( 'jobs_number_link', 'option' ); ?>"><?php the_field( 'jobs_number', 'option' ); ?></a></p>
                                <div class="title">Home care enquiry?</div>
                                <p><a href="<?php the_field( 'home_care_number_link', 'option' ); ?>"><?php the_field( 'home_care_number', 'option' ); ?></a></p>
                                <div class="title">Care organisation looking for staff?</div>
                                <p><a href="<?php the_field( 'care_organisation_number_link', 'option' ); ?>"><?php the_field( 'care_organisation_number', 'option' ); ?></a></p>
                            </div>
                        </div>
                        <div class="cell large-6 medium-12 small-12">
                            <div class="top-border">
                                <div class="big-heading">EMAIL</div>
                                <p><a href="<?php the_field( 'email_address', 'option' ); ?>"><?php the_field( 'email_address', 'option' ); ?></a></p>
                            </div>
                            <div class="top-border">
                                <div class="big-heading">ADDRESS</div>
                                <!--HFHC Healthcare<br>
                                The Social Care Exchange<br>
                                1 Low Moor Road<br>
                                Lincoln, LN6 3JY-->
                                <?php the_field( 'address', 'option' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                                                <!--</div>-->
    </div>
    <div class="green-swoosh">
        <!--<div class="grid-container">-->
        <div class="blue-background">
            <div class="green-swoosh">
                <div class="top-heading">
                    <div class="grid-x">
                        <div class="cell auto"><span class="underline fullwidth">&nbsp;</span></div>
                        <!--<div class="cell shrink"><div class="section"><span class="underline padded">Our Latest</span></div></div>-->
                        <div class="cell shrink"><div class="section"><span class="underline padded">Our Latest</span></div></div>
                        <div class="cell auto">&nbsp;</div>
                    </div>
                </div>
                <div class="section">
                    <div class="left-content">

                        <div class="read-more">
                            <!--<p>READ MORE</p>-->
                            <a href="<?php the_field( 'facebook_link', 'option' ); ?>" class="facebook" target="_BLANK"></a>
                            <a href="<?php the_field( 'linkedin_link', 'option' ); ?>" class="linkedIn" target="_BLANK"></a>
                            <a href="<?php the_field( 'twitter_link', 'option' ); ?>" class="twitter" target="_BLANK"></a>
                        </div>


                    </div>
                </div>
            </div>
        </div>                                                <!--</div>-->
    </div>
    <div class="bottom-row">
        <!--<div class="grid-container">-->
        <div class="section">
            <div class="left-content">
                <a href="privacy-policy">PRIVACY POLICIES</a><span class="divider">|</span>© HFHC Healthcare 2020
            </div>
        </div>                                                <!--</div>-->
    </div>

</footer>



<?php wp_footer(); ?>

<?php
$google_analytics = get_field( 'google_analytics', 'option' );
if ( $google_analytics ) {
	echo $google_analytics;
}
?>

</body>

</html> <!-- end page -->
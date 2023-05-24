<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscores
 */

?>

<footer id="colophon" class="site-footer">
    <div class="site-info">
        <?php
        // Footer menu items
        $footerMenuItems = array(
            'Home' => 'http://jamesw402.sg-host.com/',
<<<<<<< HEAD
            'Events' => 'http://jamesw402.sg-host.com/category/events/',
=======
            'Events' => 'http://jamesw402.sg-host.com/events/',
>>>>>>> 25860da445dc9ef0a81fcec5786a0e74325bed14
            'Magazine' => 'http://jamesw402.sg-host.com/category/magazine/',
            'Gallery' => 'http://jamesw402.sg-host.com/gallery/',
            'About us' => 'http://jamesw402.sg-host.com/about-us/',
            'Contact us' => 'http://jamesw402.sg-host.com/contact-us/',
            'Links' => 'http://jamesw402.sg-host.com/links/'
        );

        // Output footer menu
        echo '<ul class="footer-menu">';
        foreach ($footerMenuItems as $label => $url) {
            echo '<li><a href="' . $url . '">' . $label . '</a></li>';
        }
        echo '</ul>';

        // Location details
        $location = ' Located in Townsville, Australia';
        echo '<div class="location">' . $location . '</div>';
        ?>
        <a href="<?php echo esc_url( __( 'https://jamesw402.sg-host.com/', 'underscores' ) ); ?>">
            <?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf( esc_html__( 'Copyright @ 2023 %s', 'underscores' ), 'WordPress' );
            ?>
        </a>
        <span class="sep"> | </span>
        <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf( esc_html__( 'Powered by %s', 'underscores' ), 'WordPress.', '<a href="https://wordpress.org/"></a>' );
        ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

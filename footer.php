<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="site-footer py-4">
	<div class="container">
		<p class="text-center mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a> Copyright &copy; <?php _e(date('Y')); ?>. Todos los derechos reservados  <span class="text-black-50">|</span>  <?php printf(
    '<a href="%s">%s</a>',
    get_permalink( get_option( 'wp_page_for_privacy_policy' ) ),
    esc_html( __( 'Políticas de privacidad' ) )
); ?></p>
	</div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-8e258f2b-39b5-49e8-a617-9c74fbeaba22"></div>

</body>

</html>


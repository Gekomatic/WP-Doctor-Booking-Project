<?php
/**
 * Template Name: Full Width Page - HOME
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper hero" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>  d-flex flex-column align-content-center justify-content-center hero-content" id="content">

		<div class="row">

			<div class="col-12 col-lg-8 offset-lg-2 content-area" id="primary">

				<main class="site-main hero-text rounded-lg text-black text-center font-weight-bolder" id="main" role="main">

					<h1 class="display-3 pb-3">LOREM IPSUM</h1>

					<p class="lead pb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum voluptatum 
						quas saepe asperiores laboriosam molestiae, a earum facere blanditiis fugit.</p>

					<a href="/wordpress/producto/cita/" class="btn btn-primary btn-lg">OBTENER CITA</a>
					
				</main><!-- #main -->

			</div><!-- #primary -->

			<!-- <div class="col-md-6"></div> -->

		</div><!-- .row end -->

	</div> <!-- #content -->

</div> <!-- #full-width-page-wrapper --> 

<section class="about">
	<h1 class="display-4 text-center my-4"><span class="underline mb-4">Acerca de</span></h1>
	
	<div class="my-2 d-none d-md-block">&nbsp;</div>
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-4">
				<div class="d-flex justify-content-center">
					<img class="shadow-lg mb-4" src="/wordpress/wp-content/uploads/2020/06/surgeon-in-the-operating-room-3845127.jpg" alt="">
				</div>
			</div>
			<div class="col-12 col-lg-6 offset-lg-1">
				<h1 class=" mt-md-4 mb-md-4">Dr. Marion Fonseca Arteaga</h1>
				<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea quidem mollitia quam quae maiores dignissimos.</p>
				<p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni amet aspernatur 
					natus nihil. Excepturi, explicabo dolorem? Quidem non tempore, sit veritatis eum laborum, 
					quia dicta error molestias doloribus ab aliquid.</p>
				<p class="">Lorem ipsum dolor sit amet consectetur.</p>
			</div>
		</div>
	</div>
</section>

<section class="features">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,288L48,277.3C96,267,192,245,288,234.7C384,224,480,224,576,234.7C672,245,768,267,864,256C960,245,1056,203,1152,181.3C1248,160,1344,160,1392,160L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
	<div class="container py-4">
		<div class="row pt-4 text-white">
			<div class="col-12 col-lg-4 feature py-4 my-4 text-center">
				<i class="fa fa-calendar fa-3x mb-2 p-4 bg-white rounded-circle text-primary" aria-hidden="true"></i>
				<!-- <h1>Titulo</h1> -->
				<p class="lead">Solicite su cita a su medida en cualquier momento con nuestro calendario interactivo</p>
			</div>
			<div class="col-12 col-lg-4 feature py-4 my-4 text-center">
				<i class="fa fa-cogs fa-3x mb-2 p-4 bg-white rounded-circle text-primary" aria-hidden="true"></i>
				<!-- <h1>Titulo</h1> -->
				<p class="lead">Configure su solicitud para hacer cambios de fecha y hora según sea requerido</p>
			</div>
			<div class="col-12 col-lg-4 feature py-4 my-4 text-center">
				<i class="fa fa-paypal fa-3x mb-2 p-4 bg-white rounded-circle text-primary" aria-hidden="true"></i>
				<!-- <h1>Titulo</h1> -->
				<p class="lead">Su pago será procesado a través de PayPal para ofrecerle la mayor seguridad al momento de realizar su solicitud</p>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();

<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<section id="vn-desc" class="vn-desc">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="vn-desc__video">
					<iframe width="100%" height="500" src="https://www.youtube.com/embed/CTFtOOh47oo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>		
			</div>
			<div class="col-12 col-md-6">
				<h1 class="vn-desc__title"><?php the_title(); ?></h1>
				<div class="vn-desc__date">
					<span class="vn-desc__month"><?php echo get_the_date(F); ?></span>
					<span class="vn-desc__year"><?php echo get_the_date(Y);?></span>
				</div>
				<div class="vn-desc__description"><?php the_excerpt(); ?></div>
			</div>
		</div>
	</div>
</section>
<section id="vn-spon" class="vn-spon">
	<div class="container">
		<h2 class="vn-title text-center"><span>APOYAN</span></h2>
		<div class="vs-slick" data-slick='{"slidesToShow": 3}'>
			<div class="item">
				<img src="http://localhost/venue-virtual/wp-content/uploads/2020/10/Recurso-33-8.png" alt="">
			</div>
			<div class="item text-center">
				<img src="http://localhost/venue-virtual/wp-content/uploads/2020/10/Recurso-33-8.png" alt="">
			</div>
			<div class="item text-center">
				<img src="http://localhost/venue-virtual/wp-content/uploads/2020/10/Recurso-33-8.png" alt="">
			</div>
			<div class="item text-center">
				<img src="http://localhost/venue-virtual/wp-content/uploads/2020/10/Recurso-33-8.png" alt="">
			</div>
		</div>
	</div>
</section>
<section id="vn-event" class="vn-event">
	<img src="http://localhost/venue-virtual/wp-content/uploads/2020/10/bg-sec3.jpg" alt="" class="vn-event__img">
	<div class="vn-event__cont">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4 vn-event__item">
					<div class="vn-content">
						<div class="icon">
							<img src="http://localhost/venue-virtual/wp-content/uploads/2020/10/back-in-time.png" alt="">
						</div>
						<div class="date">
							<span class="title">HORA</span>
							<span class="desc">6:00PM-4:00AM</span>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 vn-event__item">
					<div class="vn-content">
						<div class="icon">
							<img src="http://localhost/venue-virtual/wp-content/uploads/2020/10/appointment.png" alt="">
						</div>
						<div class="date">
							<span class="title">FECHA</span>
							<span class="desc">10 DE DICIEMBRE</span>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 vn-event__item">
					<div class="vn-content">
						<div class="icon">
							<img src="http://localhost/venue-virtual/wp-content/uploads/2020/10/surf.png" alt="">
						</div>
						<div class="date">
							<span class="title">CATEGORÍA</span>
							<span class="desc">ONLINE</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-12 col-md-4 vn-event__item">
					<div class="vn-content">
						<div class="icon">
							<img src="http://localhost/venue-virtual/wp-content/uploads/2020/10/back-in-time.png" alt="">
						</div>
						<div class="date">
							<span class="title">HORA</span>
							<span class="desc">6:00PM-4:00AM</span>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 vn-event__item">
					<div class="vn-content">
						<div class="icon">
							<img src="http://localhost/venue-virtual/wp-content/uploads/2020/10/appointment.png" alt="">
						</div>
						<div class="date">
							<span class="title">FECHA</span>
							<span class="desc">10 DE DICIEMBRE</span>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 vn-event__item">
					<div class="vn-content">
						<div class="icon">
							<img src="http://localhost/venue-virtual/wp-content/uploads/2020/10/surf.png" alt="">
						</div>
						<div class="date">
							<span class="title">CATEGORÍA</span>
							<span class="desc">ONLINE</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="vn-ints" class="vn-ints">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-5 d-flex justify-content-center">
				<div class="vn-ints__cont-img">
					<img src="http://localhost/venue-virtual/wp-content/uploads/2020/10/event.png" alt="">
				</div>
			</div>
			<div class="col-12 col-md-7">
				<h3 class="vn-ints__title">CÓMO VER TÚ EVENTO</h3>
				<ul>
					<li><span class="number">1</span> El día del evento entra a <a href="#"> www.paramopresenta.com</a></li>
					<li><span class="number">2</span> El día del evento entra a <a href="#"> www.paramopresenta.com</a></li>
					<li><span class="number">3</span> El día del evento entra a <a href="#"> www.paramopresenta.com</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="vn-rec" class="vn-rec">
	<div class="container">
		<h3 class="vn-title text-center"><span>RECOMENDACIONES</span></h3>
		<p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet </p>
	</div>
</section>
<section id="vn-mdp" class="vn-mdp">
	<figure class="circle"></figure>
	<div class="container">
		<div class="vn-mdp__cont">
			<h3 class="vn-title text-center"><span>MEDIOS DE PAGO</span></h3>
			<div class="vs-slick" data-slick='{"slidesToShow": 4}'>
				<div class="item"><img src="http://localhost/venue-virtual/wp-content/uploads/2020/10/Recurso-41-8.png" alt=""></div>
				<div class="item"><img src="http://localhost/venue-virtual/wp-content/uploads/2020/10/Recurso-39-8.png" alt=""></div>
				<div class="item"><img src="http://localhost/venue-virtual/wp-content/uploads/2020/10/master-card.png" alt=""></div>
				<div class="item"><img src="http://localhost/venue-virtual/wp-content/uploads/2020/10/Recurso-40-8.png" alt=""></div>
				<div class="item"><img src="http://localhost/venue-virtual/wp-content/uploads/2020/10/baloto.png" alt=""></div>	
			</div>
		</div>
	</div>
</section>
<section id="vn-recents" class="vn-recents">
	<div class="container">
		<h3 class="vn-title text-center"><span>EVENTOS DESTACADOS</span></h3>
		<div class="vs-slick" data-slick='{"slidesToShow": 3}'>
		<?php
			$args = array(
				'post_type' => 'product',
				'posts_per_page' => 6
				);
			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) {
				$string = '';
				while ( $loop->have_posts() ) : $loop->the_post();
					global $product;
					$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
				
					$string .= '<div class="item">';
					$string .= '<div class="cont-item">';
					$string .= '<img src="'.$url.'">';
					$string .= '<div class="vn-caption">';	
					$string .= '<div class="content">';
					$string .= '<h3>'.get_the_title().'</h3>';
					$string .= '<span class="mr-2">'.get_the_date(F).'</span>';
					$string .= '<span>'.get_the_date(j).'</span>';
					$string .= '<div class="button mt-4">';
					$string .= '<a href="'.get_the_permalink().'">VER MÁS</a>';
					$string .= '</div>';
					$string .= '</div>';
					$string .= '</div>';
					$string .= '</div>';
					$string .= '</div>';
				endwhile;
			} 
			wp_reset_postdata();
			echo $string;
		?>
		</div>
	</div>
</section>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>

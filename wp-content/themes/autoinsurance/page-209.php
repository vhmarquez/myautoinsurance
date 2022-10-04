<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AutoInsurance
 */
ob_start();
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" >
		<div id = "id_hero" class="section hero-section" >
			<div class="grid" >
				<div id="id_col2" class="col-desk-8 col-mob-3 middle">
					<h1>Thank you for your time, one of our brokers will be in contact with you within 12-24hours!</h1>
				</div>
			</div>
		</div>
		<section class="section site-sub-header bg-blue">
			<div class="grid">
				<div class="col-desk-12 col-mob-3">
					<h2 class="center">Shop Affordable Car Insurance</h2>
				</div>
			</div>
		</section>
		<div class="section">
			<div class="grid">				
				<div class="col-desk-4 col-mob-3">
					<h3>Why our two step process?</h3>
					<ol>
						<li><b>Fill a short form:</b> Each broker specializes in different types of coverages, with a little info we can greatly narrow down your choices.</li>
						<li><b>Connect with a Vetted Insurance Broker:</b> We have a network of vetted no-hassel brokers, that won't compromise you coverage just to lower the price for a sale. </li>
					</ol>

				</div>
				<div class="col-desk-4 col-mob-3">
					<h3>Why Us?</h3>
					<p>We help you get the coverage that you need, without the gimmicks from
						typical insurance brokers. 
						<br/><br/>As an insurance specialist, we first <b>analyze</b> your situation, creating
						a custom plan tailored to your individual or family’s needs. Then we <b>connect</b> you with our
						network of trusted and vetted brokers, to find you the absolute best price without compromising
						coverage.</p>
				</div>
				<div class="col-desk-4 col-mob-3">
					<h3>Why not just go directly to a broker?</h3>
					<p>Many times, an insurance broker may not offer the product or the price for your needs and can
						attempt to alter your coverage to make a sale. 
						<br/><br/>We <b>protect</b> you by
						pre-informing and connecting you with qualified and experienced brokers.</p>
				</div>
			</div>
		</div>
	</main>
</div><!-- #primary -->
<script src="\wp-content\themes\autoinsurance\js\jons.js"></script>
<?php
//get_sidebar();
get_footer();
?>
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
		<div id="id_col2" class="col-desk-8 col-mob-3 register">							
			<div id="acf-form" class="acf-form">
				<div class = "acf-fields acf-form-fields -top">
					<div class = "acf-field acf-field-group">
						<div class="acf-label">
							<label for="acf-field_6165b7f97e676">Sign In</label>
						</div>
						<div class="acf-input">
							<div class="acf-label">
							<label >Email</label></div>
							<div class="acf-input">
								<div class="acf-input-wrap">
									<input type="text" id="id_email" name="email" placeholder="myemail@myautoflorida.com">
								</div>
							</div>
						</div>
						<div class="acf-input">
							<div class="acf-label">
							<label >Password</label></div>
							<div class="acf-input">
								<div class="acf-input-wrap">
									<input type="password" id="id_password" name="password" placeholder="Password">
								</div>
							</div>
						</div>
						<div class = "holder">
							<a href = "/broker_register">Sign Up</a>
							<a href = "/broker_forgot_password">Forgot Password</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</div><!-- #primary -->
<?php
//get_sidebar();
get_footer();
?>
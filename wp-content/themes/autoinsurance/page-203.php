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
							<label for="acf-field_6165b7f97e676">Reset Password</label>
						</div>
                        <div class="acf-input">
							<div class="acf-label">
							<label >Input Recovery Email</label></div>
							<div class="acf-input">
								<div class="acf-input-wrap">
									<input type="text" id="id_email" name="email" placeholder="email@myautoflorida.com">
								</div>
							</div>
						</div>
                        <div class = "holder" >
                            <div id = "id_send_email" onclick = "" class= "clickable">
                                send email
                        </div>
                        </div>
                        <div class="acf-input hidden">
							<div class="acf-label">
							<label >Verification Code</label></div>
							<div class="acf-input">
								<div class="acf-input-wrap">
									<input type="text" id="id_code" name="code" placeholder="Doe">
								</div>
							</div>
						</div>
						<div class="acf-input hidden">
							<div class="acf-label">
							<label >Password</label></div>
							<div class="acf-input">
								<div class="acf-input-wrap">
									<input type="password" id="id_password" name="password" placeholder="Password">
								</div>
							</div>
						</div>
                        <div class="acf-input hidden">
							<div class="acf-label">
							<label >Repeat Password</label></div>
							<div class="acf-input">
								<div class="acf-input-wrap">
									<input type="password" id="id_repeat_password" name="repeat_password" placeholder="Password">
								</div>
							</div>
						</div>
                        <div class = "holder"></div>
                        <div id="button1" class="button active hidden" onclick="" style="display: flex; justify-content: center;">Submit</div>
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
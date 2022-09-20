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
				<div id = "id_col1" class="col-desk-6 col-mob-6">
					<div class = "jon2">Shop Affordable Car Insurance</div>
					<!--<div class="grid" style="margin-bottom: 56px;">
						<div class="col-desk-12 col-mob-12">							
							<div style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/H9LEE2_VByk" allow='autoplay' style="position:absolute; top: 0; left: 0; width: 100%; height: 100%;" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>-->
					<div class="grid presentation">
						<div id = "id_presentation1" class = "wrapper">
							<img class="item-background" src="/wp-content/themes/autoinsurance/images/presentation1.png"/>
			
							<div id = "id_p1a" class="item-text t1a">

							</div>
							<div id = "id_p1b" class="item-text t1b">

							</div>
						</div>
						<div id = "id_presentation2" class = "wrapper hidden">
							<img class="item-background" src="/wp-content/themes/autoinsurance/images/presentation2.png"/>
			
							<div id = "id_p2" class="item-text t2">

							</div>
						</div>
						<div id = "id_presentation3" class = "wrapper hidden">
							<img class="item-background" src="/wp-content/themes/autoinsurance/images/presentation3.png"/>
			
							<div id = "id_p3" class="item-text t3">

							</div>
						</div>
						<div id = "id_presentation4" class = "wrapper hidden">
							<img class="item-background" src="/wp-content/themes/autoinsurance/images/presentation4.png"/>
			
							<div id = "id_p4" class="item-text t4">

							</div>
						</div>
						<div id = "id_presentation5" class = "wrapper hidden">
							<img class="item-background" src="/wp-content/themes/autoinsurance/images/presentation5.png"/>
			
							<div id = "id_p5" class="item-text t5">

							</div>
						</div>
						<div id = "id_presentation6" class = "wrapper hidden">
							<img class="item-background" src="/wp-content/themes/autoinsurance/images/presentation6.png"/>
			
							<div id = "id_p6" class="item-text t6">

							</div>
						</div>
						<div id = "id_presentation7" class = "wrapper hidden">
							<img class="item-background" src="/wp-content/themes/autoinsurance/images/presentation7.png"/>
			
							<div id = "id_p7a" class="item-text t7a">
								
							</div>
							<div id = "id_p7b" class="item-text t7b">
								
							</div>
						</div>
						<span class="material-icons button_right hidden"onclick = ""> chevron_right </span>
					</div>
					<div class="grid">
						<div class = "jon3" id = "id_b1">
							<b>2</b> Easy Steps &nbsp;&nbsp;&nbsp;|
						</div>
						<div class = "jon3">
							<ol>
								<li id = "id_b2">Fill Out a Short Form</li>
								<li id = "id_b3">Connect with a Vetted Insurance Broker</li>
							</ol>
							
						</div>
						<!--<div class = "jon3 b center">
							Apply now to receive your no obligation quote.							
						</div>
						<div class = "jon3 s center">- I think you’ll be pleasantly surprised with your experience.</div>
						-->
					</div>
				</div>
				<div id = "id_col2" class="col-desk-6 col-mob-6 middle">
					<div id = "id_step1" class = 'jon1 center' onclick = "setCallState(1)">
						Step 1: Fill Out a Short Form
					</div>
					<div id = "form1" class = "">
						<div class = "button_wrap">
							<div class = "header_wrap" >
								<span id = "id_back" class="material-icons button1 hidden"onclick = "setFormState(0)" title = "Previous Page"> chevron_left </span>
								<div id = "id_page" class = "page_number">page 1/4</div>
							</div>									
						</div>
						<div id = "" class = "">
							<?php
							
								acf_form_head(); 
								//get_header(); 
								
								while (have_posts()): the_post();
									acf_form(
										array(
											'post_id' => 'new_post',
											'new_post' => array(
												'post_type'		=> 'auto-lead'
											),
											'form' => true,
											'post_status' => 'publish',
											'post_title' => false,
											'html_before_fields' => '<div class="col-desk-12 col-mob-12">',
											'html_after_fields' => '</div>',
											'honeypot' => true,
											'kses' => true,
											'submit_value' => 'Submit Application',
											'updated_message' => _("Thanks for submitting your application"),
											'return' => '/redirect/'
										)
									);

								endwhile;
								
								//Add ACF Front End Content Submission Form
								function my_pre_save_post( $post_id )
								{
									$fields = get_fields($post_id);
									// create new lead message
									$message = 
										"New Lead<br>".
										'Lead Information<br>'.'<br>'.
										'Lead ID: '.$post_id.'<br>'.
										'Lead Type: Personal'.'<br>'.
										'Date Received: '.date("d/m/y").'<br>'.
										'Time Received: '.date("h:i:sa").'<br>'.
										'<br>'.
										'Contact Information<br>'.'<br>'.
										'Name: '.$fields[0]->$value.' '.$fields[1]->$value.'<br>'.
										'Email: '.$fields[2]->$value.'<br>'.
										'Phone: '.$fields[3]->$value.'<br>'.	
										'DoB: '.$fields[4]->$value.'<br>'.
										'Address: '.$fields[5]->$value.'<br>'.
										'<br>';
										// 'Vehicles and Drivers'.'<br>'.
										// 'Vehicles: '.$vehicles.'<br>'.
										// 'Drivers: '.$data->d_first_name.' '.$data->d_last_name.'<br>'.
										// '<br>'.
										// 'Extra Information<br>'.
										// 'Accidents within the last 3 years: '.$option_accidents[$data->accidents].'<br>'.
										// 'Current DUI\'s, FR44, or SR22: '.$option_dui[$data->dui].'<br>'.
										// 'Current Insurance Company: '.$option_insurance[$data->current_insurance].'<br>'.
										// 'Insured for more than a year?: '.$option_insured[$data->insured].'<br>'.
										// 'Marital Status: '.$option_marital[$data->marital_status].'<br>'.
										// 'Do you rent or own your home?: '.$option_rent[$data->rent].'<br>'.
										// 'Home Property Type: '.$option_home[$data->home_type].'<br>'.
										// 'Credit Rating: '.$option_credit[$data->credit].'<br>'.
										// 'Personal Liabiliy: '.$option_liability [$data->liability].'<br>';

									// echo json_encode($message);

									$subject = "New Lead";
									$to = "sleep@knights.ucf.edu";
									$from = "help@myfloridaauto.com";
									$headers = "MIME-Version: 1.0" . "\r\n";
									$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
									$headers .= 'From: <'.$from.'>' . "\r\n";

									wp_mail( $to, $subject, $message, $headers );
									// return the new ID
									return $post_id;
								}
								  
								add_filter('acf/pre_save_post' , 'my_pre_save_post' );
							?>
						</div>
						<div class="button_wrap">
							<div id = "button1" class = "button" onclick = "setForm()">
								NEXT							
							</div>
						</div>
					</div>												
					<div class = "disclaimer">
						When submitting your information on our website we confirm that your information will only be used for our network of brokers for the quotes you specifically requested.  Information will never be sold to a third party that is not part of our broker network and all information will stay exclusively in our network.  In exchange you agree our brokers will reach out regarding the quotes requested even if you are on dnc lists, but will only receive calls from our network.
					</div>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="jon-block">
				<div style = "display: flex;">
					<div class="jon-col"><img
							src="/wp-content/themes/autoinsurance/images/insurance-logos/aaa-white.png" alt="AAA" />
					</div>
					<div class="jon-col"><img
							src="/wp-content/themes/autoinsurance/images/insurance-logos/progresssive-white.png"
							alt="Progressive" /></div>
					<div class="jon-col"><img
							src="/wp-content/themes/autoinsurance/images/insurance-logos/allstate-white.png"
							alt="Allstate" /></div>
					<div class="jon-col"><img
							src="/wp-content/themes/autoinsurance/images/insurance-logos/state-farm-white.png"
							alt="State Farm" /></div>
					<div class="jon-col"><img
							src="/wp-content/themes/autoinsurance/images/insurance-logos/usaa-white.png"
							alt="USAA" /></div>
					<div class="jon-col"><img
							src="/wp-content/themes/autoinsurance/images/insurance-logos/travelers-white.png"
							alt="Travelers" /></div>

				</div>
			</div>
			<div class="grid jon-bottom">				
				<div class="col-desk-4 col-mob-12">
					<h3>Why our two step process?</h3>
					<ol>
						<li><b>Fill a short form:</b> Each broker specializes in different types of coverages, with a little info we can greatly narrow down your choices.</li>
						<li><b>Connect with a Vetted Insurance Broker:</b> We have a network of vetted no-hassel brokers, that won't compromise you coverage just to lower the price for a sale. </li>
					</ol>

				</div>
				<div class="col-desk-4 col-mob-12">
					<h3>Why Us?</h3>
					<p>We help you get the coverage that you need, without the gimmicks from
						typical insurance brokers. 
						<br/><br/>As an insurance specialist, we first <b>analyze</b> your situation, creating
						a custom plan tailored to your individual or family’s needs. Then we <b>connect</b> you with our
						network of trusted and vetted brokers, to find you the absolute best price without compromising
						coverage.</p>
				</div>
				<div class="col-desk-4 col-mob-12">
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
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

get_header();
?>
<script src="\wp-content\themes\autoinsurance\js\jons.js"></script>
<div id="primary" class="content-area">
	<main id="main" class="site-main" >
		<div class="section hero-section" >
			<div class="grid" >
				<div class="col-desk-6 col-mob-6">

					<div class="grid" style="margin-bottom: 56px;">
						<div class="col-desk-12 col-mob-12">
							<div class = "jon2">Shop Affordable Car Insurance</div>
							<div style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/H9LEE2_VByk" allow='autoplay' style="position:absolute; top: 0; left: 0; width: 100%; height: 100%;" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>

					<div class="grid">
						<div class = "jon3">
							<b>3</b> Easy Steps &nbsp;&nbsp;&nbsp;|
						</div>
						<div class = "jon3">
							<ol>
								<li>Fill Out a Short Form</li>
								<li>Talk to an Insurance Specialist (Now or Later)</li>
								<li>Connect with a Vetted Insurance Broker</li>
							</ol>
							
						</div>
						<div class = "jon3 b center">
							Apply now to receive your no obligation quote.							
						</div>
						<div class = "jon3 s center">- I think you’ll be pleasantly surprised with your experience.</div>
					</div>
				</div>
				<div class="col-desk-6 col-mob-6">
					<?php //do_shortcode("[contact-form-7 id='11' title='Personal Auto Insurance']"); ?>
					
						<div class = 'jon1 center'>
							Step 1: Fill Out a Short Form
						</div>
						<form id = "id_form" class="grid jon-form" action="\wp-content\themes\autoinsurance\new_lead.php" method="post">
							<div class = "jon-label">
								Contact Information
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>First Name
									<span>
										<input id = "id_1" placeholder = "John" type="text" name="first_name" value="" size="40" aria-required="true" aria-invalid="false">
									</span>
								</label>
								<div id = "id_e1" class = "error"></div>
							</div>
							
							<div class="col-desk-6 col-mob-6">
								<label>Last Name
									<span>
										<input id = "id_2" placeholder = "Smith" type="text" name="last_name" value="" size="40" aria-required="true" aria-invalid="false">
									</span>
								</label>
								<div id = "id_e2" class = "error"></div>
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>DoB
									<span>
										<input id = "id_3" type="date" name="dob" value="" aria-required="true" aria-invalid="false">
									</span>
								</label>
								<div id = "id_e3" class = "error"></div>
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>Marital Status
									<span>
										<select id = "id_4" name="marital_status" aria-required="true" aria-invalid="false">
											<option value="0">Single</option>
											<option value="1">Married</option>
											<option value="2">Divorced</option>
											<option value="3">Domestic Partner</option>
											<option value="4">Married but Separated</option>
											<option value="5">Other</option>
										</select>
									</span>
								</label>
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>E-Mail 
									<span>
										<input id = "id_5" type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false">
									</span>
									<div id = "id_e5" class = "error"></div>
								</label>
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>Zip Code
									<span>
										<input id = "id_6" type="text" name="zip_code" value="" size="40" aria-required="true" aria-invalid="false">
									</span>
									<div id = "id_e6" class = "error"></div>
								</label>
							</div>
							<div class = "jon-label border">
								Primary Driver History
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>Accidents within last 3 years 
									<span>
										<select id = "id_7" name="accidents" aria-required="true" aria-invalid="false">
											<option value="0">No</option>
											<option value="1">Yes</option>
										</select>
									</span>
								</label>
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>Current DUI's, FR44, or SR22 
									<span>
										<select id = "id_8" name="dui" aria-required="true" aria-invalid="false">
											<option value="0">None</option>
											<option value="1">DUI</option>
											<option value="2">FR 44</option>
											<option value="3">SR 22</option>
										</select>
									</span>
								</label>
							</div>
							<div class="col-desk-6 col-mob-6 margin">
								<label>Current Insurance Company 
									<span>
										<select id = "id_9" name="current_insurance" aria-required="true" aria-invalid="false">
											<option value="1">Uninsured</option>
											<option value="2">Allstate</option>
											<option value="3">State Farm</option>
											<option value="4">Geico</option>
											<option value="5">Progressive</option>
											<option value="6">Travelers</option>
											<option value="7">Hartford</option>
											<option value="8">USAA</option>
											<option value="9">Other</option>											
										</select>
									</span>
								</label>
							</div>
							<div class="col-desk-6 col-mob-6 margin">
								<label>Have you been insured for more than a year? 
									<span>
										<select id = "id_10" name="insured_more_than_one_year" aria-required="true" aria-invalid="false">
											<option value="1">Yes</option>
											<option value="0">No</option>
										</select>
									</span>
								</label>
							</div>
							<div class = "jon-label border">
								Financial Information
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>Do you rent or own your home? 
									<span>
										<select id = "id_11" name="rent_or_own" aria-required="true" aria-invalid="false">
											<option value="0">Own</option>
											<option value="1">Rent</option>
											<option value="2">Other</option>
										</select>
									</span>
								</label>
							</div>
							<div class="col-desk-6 col-mob-6">
								<label>Home PropertyType 
									<span>
										<select id = "id_12" name="property_type" aria-required="true" aria-invalid="false">
											<option value="0">Condo/Apartment</option>
											<option value="1">Townhouse</option>
											<option value="2">House</option>
											<option value="3">Mobile Home</option>
										</select>
									</span>
								</label>
							</div>
							<div class="col-desk-12 col-mob-12 margin">
								<label>Credit Rating
									<span>
										<select id = "id_13" name="credit" aria-required="true" aria-invalid="false">
											<option value="0">Excellent (850-720)</option>
											<option value="1">Above Average (720-620)</option>
											<option value="2">Average (620-520)</option>
											<option value="3">Bellow Average (520 or
												bellow)</option>
										</select>
									</span>
								</label>
							</div>
							<!-- <div class="col-desk-12 col-mob-12">
								<label>Current BI limit 
									<span>
										<select name="current_bi" aria-required="true" aria-invalid="false">
											<option value="None">None</option>
											<option value="10/20">10/20</option>
											<option value="25/50">25/50</option>
											<option value="50/100">50/100</option>
											<option value="100/300">100/300</option>
											<option value="250/500 or above">250/500 or above</option>
										</select>
									</span>
								</label>
							</div>
							-->
							<div class = "jon-label border">
								Vehicle Information
							</div>
							
							<div class="col-desk-4 col-mob-4">
								<label>Vehicle Make 
									<span>										
										<select id = "autoMake1"  name="auto_make" aria-required="true" aria-invalid="false" onchange="getModels(1,this.value)" required>
											<option value="">Select Vehicle Make</option>
											<?php 
												global $wpdb;
												$result = $wpdb->get_results("SELECT * FROM auto_makes ORDER BY make_name ASC");
												foreach ($result as $auto_make) {
											?>
													<option value="<?= $auto_make->make_id; ?>"><?= $auto_make->make_name; ?></option>
											<?php
												}
											?>
										</select>
									</span>
								</label>
							</div>
							<div class="col-desk-4 col-mob-4">
								<label>Vehicle Model 
									<span>
										<select id = "autoModel1" name="auto_model" aria-required="true" aria-invalid="false" id="autoModel1" disabled>
										</select>
									</span>
								</label>
								
							</div>
							<div class="col-desk-4 col-mob-4">
								<label>Vehicle Year 
									<span>
										<input id = "autoYear1" type="number" name="auto_year" min="1900" max="2099" step="1" value="2021" aria-required="true" aria-invalid="false" />
									</span>
								</label>
							</div>		
							<div id = "id_ev1" class = "error padded"></div>						
							<div class = "jon-add">
								<div class = "more">
									Are there multiple vehicles?
								</div>
								<div class = "add" onclick = "addVehicle()"  title = "Are there going to be multiple vehicles?" >
									Add Vehicle
								</div>
							</div>
							<div id = "vehicles" class = "drivers">
							</div>	
							<div class = "jon-label border">
								Drivers
							</div>
							<div class = "jon-add">
								<div class = "more">
									Is the primary contact the same as the primary driver?
								</div>
								<input id = "id_17" type="radio" id="yes" name="yes" value="0" onclick = "togglePrimary(0)" checked>
								<div class = "more">
									yes
								</div>
								<input id = "id_18" type="radio" id="no" name="yes" value="1" onclick = "togglePrimary(1)">
								<div class = "more">
									no
								</div>
							</div>
	
							<div id = "primary1" class="col-desk-6 col-mob-6 hidden">
								<label>First Name
									<span>
										<input id = "id_dF1"  type="text" name="first_name1" placeholder = "Primary Driver" value="" size="40" aria-required="true" aria-invalid="false">
									</span>
								</label>
							</div>
							<div id = "primary2" class="col-desk-6 col-mob-6 hidden">
								<label>Last Name
									<span>
										<input id = "id_dL1" type="text" name="last_name1" placeholder = "Primary Driver" value="" size="40" aria-required="true" aria-invalid="false">
									</span>
								</label>
							</div>		
							<div id = "id_ed1" class = "error padded"></div>								
							<div class = "jon-add">
								<div class = "more">
									Additional Drivers?
								</div>
								<div class = "add" title = "Are there going to be multiple drivers?" onclick = "addDriver()">
									Add Driver
								</div>
							</div>
							<div id = "drivers" class = "drivers">
							</div>
							<div class="col-desk-12 col-mob-12">
								<div id = "id_submit" class = "submit" onclick = "checkInputs()" >NEXT -- Talk to an Insurance Specialist</div>
							</div>							
							<div id = "id_holder" class = "hidden">
							</div>							
						</form>
						
						
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
					<h3>Why our three step process?</h3>
					<ol>
						<li><b>Fill a short form:</b> Each broker specializes in different types of coverages, with a little info we can greatly narrow down your choices.</li>
						<li><b>Talk to an Insurance Specialist:</b> Once we have some information, we can then assist you hash out necessary plan details, and then direct you to a broker, that specializes in your individual needs.</li>
						<li><b>Connect with a Vetted Insurance Broker:</b> We have a network of vetted no-hassel brokers, that won't compromise you coverage just to lower the price for a sale. </li>
					</ol>

				</div>
				<div class="col-desk-4 col-mob-12">
					<h3>Why an Insurance Specialists?</h3>
					<p>An insurance specialist helps you get the coverage that you need, without the gimmicks from
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
						<br/><br/>An insurance specialist <b>protects</b> you by
						pre-informing and connecting you with qualified and experienced brokers.</p>
				</div>
			</div>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
?>
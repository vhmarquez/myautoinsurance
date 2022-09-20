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
							<b>3</b> Easy Steps &nbsp;&nbsp;&nbsp;|
						</div>
						<div class = "jon3">
							<ol>
								<li id = "id_b2">Fill Out a Short Form</li>
								<li id = "id_b3">Analyze Your Situation</li>
								<li id = "id_b4">Connect with a Vetted Insurance Broker</li>
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

					<?php //do_shortcode("[contact-form-7 id='11' title='Personal Auto Insurance']"); ?>
					
					<div id = "id_step1" class = 'jon1 center' onclick = "setCallState(1)">
						Step 1: Fill Out a Short Form
					</div>
					<form id = "id_form" class="jon-form" action="\wp-content\themes\autoinsurance\new_lead.php" method="post">
						<div id = "form1" class = "">
							<div class = "chat_buttons">
								<div class = "chat_header" >
									<span class="material-icons chat_button1 hidden"onclick = "setForm(0)"> chevron_left </span>
									Contact Information	
									<div class = "page_number">page 1/4</div>
								</div>									
							</div>
							<div id = "chat_box1" class = "chatbox">									
								<!-- <div class = "jon-label">
									Contact Information
								</div> -->
								<div class = "mod">
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
										<label>Phone
											<span>
												<input id = "id_4" placeholder = "(012) 345-6789" type="text" name="phone_number" value="" size="40" aria-required="true" aria-invalid="false">
											</span>
										</label>
										<div id = "id_e4" class = "error"></div>
									</div>	
									<div class="col-desk-6 col-mob-6">
										<label>E-Mail 
											<span>
												<input id = "id_5" type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false">
											</span>
											<div id = "id_e5" class = "error"></div>
										</label>
									</div>
									
								</div>	
								<div class = "mod">
									<div class="col-desk-6 col-mob-6">
										<label>Street Address
											<span>
												<input id = "id_6" type="text" name="address" value="" size="40" aria-required="true" aria-invalid="false">
											</span>
											<div id = "id_e6" class = "error"></div>
										</label>
									</div>	
									<div class="col-desk-6 col-mob-6">
										<label>City
											<span>
												<input id = "id_7" type="text" name="city" value="" size="40" aria-required="true" aria-invalid="false">
											</span>
											<div id = "id_e7" class = "error"></div>
										</label>
									</div>	
									<div class="col-desk-6 col-mob-6">
										<label>State
											<span>
												<select id = "id_8" name="state" aria-required="true" aria-invalid="false">
													<option value>- Select -</option>
													<option value="AL">AL - Alabama</option>
													<option value="AK">AK - Alaska</option>
													<option value="AS">AS - American Samoa</option>
													<option value="AZ">AZ - Arizona</option>
													<option value="AR">AR - Arkansas</option>
													<option value="CA">CA - California</option>
													<option value="CO">CO - Colorado</option>
													<option value="CT">CT - Connecticut</option>
													<option value="DE">DE - Delaware</option>
													<option value="DC">DC - District of Columbia</option>
													<option value="FL">FL - Florida</option>
													<option value="GA">GA - Georgia</option>
													<option value="GU">GU - Guam</option>
													<option value="HI">HI - Hawaii</option>
													<option value="ID">ID - Idaho</option>
													<option value="IL">IL - Illinois</option>
													<option value="IN">IN - Indiana</option>
													<option value="IA">IA - Iowa</option>
													<option value="KS">KS - Kansas</option>
													<option value="KY">KY - Kentucky</option>
													<option value="LA">LA - Louisiana</option>
													<option value="ME">ME - Maine</option>
													<option value="MD">MD - Maryland</option>
													<option value="MA">MA - Massachusetts</option>
													<option value="MI">MI - Michigan</option>
													<option value="MN">MN - Minnesota</option>
													<option value="MS">MS - Mississippi</option>
													<option value="MO">MO - Missouri</option>
													<option value="MT">MT - Montana</option>
													<option value="NE">NE - Nebraska</option>
													<option value="NV">NV - Nevada</option>
													<option value="NH">NH - New Hampshire</option>
													<option value="NJ">NJ - New Jersey</option>
													<option value="NM">NM - New Mexico</option>
													<option value="NY">NY - New York</option>
													<option value="NC">NC - North Carolina</option>
													<option value="ND">ND - North Dakota</option>
													<option value="MP">MP - Northern Mariana Islands</option>
													<option value="OH">OH - Ohio</option>
													<option value="OK">OK - Oklahoma</option>
													<option value="OR">OR - Oregon</option>
													<option value="PA">PA - Pennsylvania</option>
													<option value="PR">PR - Puerto Rico</option>
													<option value="RI">RI - Rhode Island</option>
													<option value="SC">SC - South Carolina</option>
													<option value="SD">SD - South Dakota</option>
													<option value="TN">TN - Tennessee</option>
													<option value="TX">TX - Texas</option>
													<option value="UM">UM - United States Minor Outlying Islands</option>
													<option value="UT">UT - Utah</option>
													<option value="VT">VT - Vermont</option>
													<option value="VI">VI - Virgin Islands</option>
													<option value="VA">VA - Virginia</option>
													<option value="WA">WA - Washington</option>
													<option value="WV">WV - West Virginia</option>
													<option value="WI">WI - Wisconsin</option>
													<option value="WY">WY - Wyoming</option>
													<option value="AA">AA - Armed Forces Americas</option>
													<option value="AE">AE - Armed Forces Africa</option>
													<option value="AE">AE - Armed Forces Canada</option>
													<option value="AE">AE - Armed Forces Europe</option>
													<option value="AE">AE - Armed Forces Middle East</option>
													<option value="AP">AP - Armed Forces Pacific</option>
												</select>
											</span>
										</label>
										<div id = "id_e8" class = "error"></div>
									</div>
									<div class="col-desk-6 col-mob-6">
										<label>Zip Code
											<span>
												<input id = "id_9" type="text" name="zip_code" value="" size="40" aria-required="true" aria-invalid="false">
											</span>
											<div id = "id_e9" class = "error"></div>
										</label>
									</div>											
								</div>
							</div>
							<div class = "chat_buttons">
								<div id = "button1" class = "chat_button active" onclick = "setForm(2)">
									NEXT							
								</div>
							</div>
						</div>
						<div id = "form2" class = "hidden">
							<div class = "chat_buttons">
								<div class = "chat_header">
									<span class="material-icons chat_button1"onclick = "setForm(1)"> chevron_left </span>
									Vehicle Information	
									<div class = "page_number">page 2/4</div>
								</div>									
							</div>
							<div class = "chatbox">
								<div class = "jon-label">
									
								</div>									
								<div class="col-desk-4 col-mob-4 mod small">
									<label>Vehicle Make 
										<span>										
											<select id = "autoMake1"  name="auto_make" aria-required="true" aria-invalid="false" onchange="getModels(1,this.value)" required>
												<option value="0">Select Vehicle Make</option>
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
								<div class="col-desk-4 col-mob-4 mod small">
									<label>Vehicle Model 
										<span>
											<select id = "autoModel1" name="auto_model" aria-required="true" aria-invalid="false" id="autoModel1" disabled>
											</select>
										</span>
									</label>										
								</div>
								<div class="col-desk-4 col-mob-4 mod small">
									<label>Vehicle Year 
										<span>
											<input id = "autoYear1" type="number" name="auto_year" min="1900" max="2099" step="1" value="2021" aria-required="true" aria-invalid="false" />
										</span>
									</label>
								</div>		
								<div id = "id_ev1" class = "error padded mod"></div>						
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
								<div id = "primary1" class="col-desk-6 col-mob-6 mod hidden">
									<label>First Name
										<span>
											<input id = "id_dF1"  type="text" name="first_name1" placeholder = "Primary Driver" value="" size="40" aria-required="true" aria-invalid="false">
										</span>
									</label>
								</div>
								<div id = "primary2" class="col-desk-6 col-mob-6 mod hidden">
									<label>Last Name
										<span>
											<input id = "id_dL1" type="text" name="last_name1" placeholder = "Primary Driver" value="" size="40" aria-required="true" aria-invalid="false">
										</span>
									</label>
								</div>		
								<div id = "id_ed1" class = "error padded mod hidden"></div>								
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
							</div>
							<div class = "chat_buttons">
								<div id = "button2" class = "chat_button active" onclick = "setForm(3)">
									Next							
								</div>
							</div>
						</div>
						<div id = "form3" class = "hidden">
							<div class = "chat_buttons">
								<div class = "chat_header" >
									<span class="material-icons chat_button1"onclick = "setForm(2)"> chevron_left </span>
									Primary Driver Information		
									<div class = "page_number">page 3/4</div>
								</div>									
							</div>
							<div class = "chatbox">
								<div class = "jon-label">
									
								</div>
								<div class = "mod">
									<div class="col-desk-6 col-mob-6 m">
										<label>Accidents within last 3 years 
											<span>
												<select id = "id_11" name="accidents" aria-required="true" aria-invalid="false">
													<option value="0">No</option>
													<option value="1">Yes</option>
												</select>
											</span>
										</label>
									</div>
									<div class="col-desk-6 col-mob-6 m">
										<label>Current DUI's, FR44, or SR22 
											<span>
												<select id = "id_12" name="dui" aria-required="true" aria-invalid="false">
													<option value="0">None</option>
													<option value="1">DUI</option>
													<option value="2">FR 44</option>
													<option value="3">SR 22</option>
												</select>
											</span>
										</label>
									</div>
									<div class="col-desk-6 col-mob-6 m">
										<label>Current Insurance Company 
											<span>
												<select id = "id_13" name="current_insurance" aria-required="true" aria-invalid="false">
													<option value="0">Uninsured</option>
													<option value="1">Allstate</option>
													<option value="2">State Farm</option>
													<option value="3">Geico</option>
													<option value="4">Progressive</option>
													<option value="5">Travelers</option>
													<option value="6">Hartford</option>
													<option value="7">USAA</option>
													<option value="8">Other</option>											
												</select>
											</span>
										</label>
									</div>
									<div class="col-desk-6 col-mob-6 m">
										<label>Insured for more than a year? 
											<span>
												<select id = "id_14" name="insured_more_than_one_year" aria-required="true" aria-invalid="false">
													<option value="0">No</option>
													<option value="1">Yes</option>														
												</select>
											</span>
										</label>
									</div>
								</div>									
								<div class = "mod">
									<div class="col-desk-6 col-mob-6 m">
										<label>Marital Status
											<span>
												<select id = "id_10" name="marital_status" aria-required="true" aria-invalid="false">
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
									<div class="col-desk-6 col-mob-6 m">
									<label>Do you rent or own your home? 
										<span>
											<select id = "id_15" name="rent_or_own" aria-required="true" aria-invalid="false">
												<option value="0">Own</option>
												<option value="1">Rent</option>
												<option value="2">Other</option>
											</select>
										</span>
									</label>
								</div>
									<div class="col-desk-6 col-mob-6 m">
										<label>Home Property Type 
											<span>
												<select id = "id_16" name="property_type" aria-required="true" aria-invalid="false">
													<option value="0">Condo/Apartment</option>
													<option value="1">Townhouse</option>
													<option value="2">House</option>
													<option value="3">Mobile Home</option>
												</select>
											</span>
										</label>
									</div>
									<div class="col-desk-6 col-mob-6">
										<label>Credit Rating
											<span>
												<select id = "id_17" name="credit" aria-required="true" aria-invalid="false">
													<option value="0">Excellent (850-720)</option>
													<option value="1">Above Average (720-620)</option>
													<option value="2">Average (620-520)</option>
													<option value="3">Bellow Average (520 or
														bellow)</option>
												</select>
											</span>
										</label>
									</div>
								</div>
							</div>
							<div class = "chat_buttons">
								<div id = "button3" class = "chat_button active" onclick = "setForm(4)">
									Next							
								</div>
							</div>
						</div>							
						<div id = "form4" class = "hidden" >
							<div class = "chat_buttons">
								<div class = "chat_header" >
									<span class="material-icons chat_button1"onclick = "setForm(3)"> chevron_left </span>
									Overview
									<div class = "page_number">page 4/4</div>
								</div>									
							</div>
							<div class = "chatbox">
								<div class = "jon-text margin" style = "margin: 0!important;">
									Personal Info
								</div>
								<div id = "id_name" class = "jon-text">
									Name: Jon Coto 
								</div>
								<div id = "id_DoB" class = "jon-text">
									DoB: Aug, 18th 1989
								</div>
								<div id = "id_phone" class = "jon-text">
									Phone Number: (123) 456-7890
								</div>
								<div id = "id_address" class = "jon-text">
									Zipcode: 32708
								</div>
								<div id = "id_email" class = "jon-text">
									Email: jonnycoto@gmail.com
								</div>		
								
								<div class = "jon-text margin">
									Primary Driver Information
								</div>
								<div id = "id_accidents" class = "jon-text">
									Accidents: 0
								</div>
								<div id = "id_dui" class = "jon-text">
									DUI: none
								</div>
								<div id = "id_current" class = "jon-text">
									Current Insurance Company: No
								</div>
								<div id = "id_insured" class = "jon-text">
									Insured for more than a year?: No
								</div>
								<div id = "id_marital" class = "jon-text">
									Marital Status: Single
								</div>
								<div id = "id_rent" class = "jon-text">
									Do you rent or own your home: Rent
								</div>
								<div id = "id_home" class = "jon-text">
									Home Property Type: Condo
								</div>
								<div id = "id_credit" class = "jon-text">
									Credit Rating: Excellent (850-720)
								</div>
								<div class = "jon-text margin">
									Vehicles and Drivers
								</div>
								<div id = "id_vehicles" class = "jon-text">
									Vehicle 1: 2008 Nissan Altima <br>
									Vehicle 2: 2006 Honda Civic
								</div>
								<div id = "id_drivers" class = "jon-text">
									Driver 1: Jon Coto <br>
									Driver 2: Rowena Gasmen
								</div>
							</div>
							<div class = "chat_buttons">
								<div id = "button4" class = "chat_button active" onclick = "setStep2(1)">
									Step 2							
								</div>
							</div>
						</div>
						<div id = "form5" class = "hidden">
							<div class = "chat_buttons">
								<div class = "chat_header" >
									<span class="material-icons chat_button1"onclick = "setStep2(0)"> chevron_left </span>
									Personal Liability
									<div class = "page_number">page 1/1</div>
								</div>									
							</div>
							<div class = "chatbox">									
								<table class = "jon-table">	
									 <tr>
										<td><input type="radio" id="id_coverage1" name="coverage" value="1"></td>
										<td> 
											<b>Minimal Coverage:</b> Select this to get the lowest insurance possible to drive, which covers $10,000 property damage and $10,000 of Personal Injury Protection.
											<br><i>This setting is for someone on a tight budget.</i>
										</td>
									  </tr>
									  <tr>
									<td><input type="radio" id="id_coverage2" name="coverage" value="2"></td>
										<td> <b>Moderate Coverage:</b> Select this to provide up to $50,000 of property damage, $25,000 in bodily injury per person, with a maximum of $50,000 per accident.
											<br><i>This setting is a good overall coverage for most situations.</i>
										</td>
									  </tr>
									  <td><input type="radio" id="id_coverage3" name="coverage" value="3"></td>
										<td> <b>Maximum Coverage:</b> Select this to provide bodily injury coverage up to your asset value
										<br><i>This setting is good for someone with > $100,000 in assets to protect.</i>
										</td>
									  </tr>
								</table>
							</div>
							<div class = "chat_buttons">
								<div id = "button5" class = "chat_button" onclick = "setStep2(2)">
									Step 3							
								</div>
							</div>
						</div>
						<div id = "form6" class = "hidden">
							<div class = "chat_buttons">
								<div class = "chat_header" >
									<span class="material-icons chat_button1"onclick = "setStep2(3)"> chevron_left </span>
									Get Insured
								</div>									
							</div>
							<div class = "chatbox">
								<div class = "jon-label">
								</div>									
								<div id = "id_search" class = "jon-text">	
									Alrighty then, so it seems to me that you want to cover 2 cars, each with a moderate level of insurance in Seminole county.
									<br><br>Given your parameters, I recommend <b>Allstate</b>.
									<br><br>Would you like to call <b>Allstate</b>? 
									And dont' worry, if it doesn't work we'll keep shopping around.
								</div>									
							</div>
						</div>
						<div id = "form7" class = "hidden">
							<div class = "chat_buttons">
								<div class = "chat_header" >
									<span class="material-icons chat_button1"onclick = "setStep2(3)"> chevron_left </span>
									Search for Insurance
								</div>									
							</div>
							<div class = "chatbox">
								<div class = "jon-label">
								</div>									
								<div id = "id_search" class = "jon-text">	
									Alrighty then, so it seems to me that you want to cover 2 cars, each with a moderate level of insurance in Seminole county.
									<br><br>Given your parameters, I recommend <b>Allstate</b>.
									<br><br>Would you like to call <b>Allstate</b>? 
									And dont' worry, if it doesn't work we'll keep shopping around.
								</div>									
							</div>
							<div class = "chat_buttons border">
								<div class = "wrapper">
									<span id = "id_home" class="chat_button2 material-icons active" title = "Home">
										home
									</span>	
									<span id = "id_account" class="chat_button2 material-icons" title = "Profile" onclick = "setProfileView()">
										account_circle
									</span>	
									<span id = "id_phonelog" class="chat_button2 material-icons" title = "Phone Book" onclick = "setQuotesView()">
										assignment
									</span>	
								</div>									
							</div>
						</div>
					</form>
						
						
				<div class = "disclaimer">
					When submitting your information on our website we confirm that your information will only be used for our network of brokers for the quotes you specifically requested.  Information will never be sold to a third party that is not part of our broker network and all information will stay exclusively in our network.  In exchange you agree our brokers will reach out regarding the quotes requested even if you are on dnc lists, but will only receive calls from our network.
				</div>
				</div>
				<div id = "id_col3" class="col-desk-6 col-mob-6 hidden" style = "padding: 0 32px">
					<div id = "id_info_title" class = "info_title">
						Liability Insurance
					</div>
					<div class = "info_text">
						 Liability insurance covers the other driver’s property damage or injuries if you cause an accident, and it’s required in almost every state. 
						 For example, Texas requires liability insurance limits of 30/60/25—or up to $30,000 for one person’s injuries, $60,000 for all injured parties in an accident, and $25,000 for property damage.
						 <br><br>
						 If you cause an accident, your liability insurance will only cover expenses up to your coverage limits, and you will be responsible for everything else. If the other driver sues, your assets could be seized or your wages garnished in order to cover the remaining balance. So, having enough liability insurance to cover your assets can protect you in the long run. 
					</div>
					<div id = "id_info_title" class = "info_text">
						<b>Liability Insurance:</b> Covers the personal and medical expenses of the other driver if you are at fault.
						<br><br><b>Bodily Injury:</b> A larger coverage of medical expenses for you and your passengers after an accident.
						<br><br><b>Personal Injury Protection:</b> Covers medical expenses for you and your passengers after an accident.
					</div>					
				</div>
				<!--<div id = "id_col4" class="col-desk-6 col-mob-6 hidden">
					<div class = "match_skip">
						Skip match?
					</div>
					<img id = "id_match_img" class = "match_img" src="/wp-content/themes/autoinsurance/images/Insurance_Profiles/allstate_logo.jpeg" />
					<div class = "match_content">
						<div id = "id_match_title">
							<b>Allstate Auto Insurance</b>
						</div>
						<div id = "id_match_text">
							A policy with Allstate® is more than just car insurance. It's personalized help from agents and innovative tools—like Drivewise®—that help keep you driving forward. Get a car insurance quote and learn why millions of households trust Allstate for their insurance needs.
						</div>
					</div>
					<div class = "match_call" onclick = "setCallState(1)">
						Call Now
					</div>
				</div>-->
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
						<li><b>Analyze your situation:</b> Once we have some information, we can then assist you hash out necessary plan details, and then direct you to a broker, that specializes in your individual needs.</li>
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
		
	</main><!-- #main -->
	<table id = "id_screen" class = "call_screen hidden">
		<tr>
            <td>
				<div id = "id_callstate1" class = "middle_screen hidden" >
					<div class = "video_header" >
						<img id = "id_match_banner" class="banner" src="/wp-content/themes/autoinsurance/images/Insurance_Profiles/allstate_banner.png"/>
					</div>
					<div class = "video_bar" >
						<span id = "id_volume" class="material-icons item" onclick = "toggleVolumeButton()"  title = "Turn volume on / off"> volume_up </span>
						<span id = "id_mute" class="material-icons item" onclick = "toggleMuteButton()" title = "Turn mic on / off"> mic </span>
						<span id = "id_end_call" class="material-icons item end" onclick = "setCallState(3)" title = "End Call"> call_end </span>				
					</div>
					<!--<div id = "id_video_state" class = "video_state" >
						calling
					</div>-->
					<div id = "id_video_footer" class = "video_footer" >
						You're speaking with, Hamid Tabibi.
					</div>
				</div>
				<div id = "id_callstate2" class = "call_end hidden" >
					<div class = "header">
						Feedback
					</div>
					<div class = "middle">
						<div class = "text1">
							We take your feedback to help you keep log of your quotes, so we can get you the best price.
						</div>
						<div class = "text">
							How would you rate your experience?
						</div>
						<div class = "wrapper">
							<fieldset class="rating">
								<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Amazing Service">5 stars</label>
								<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
								<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Ok">3 stars</label>
								<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Not very good">2 stars</label>
								<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="This broker needs a new job">1 star</label>
							</fieldset>
						</div>
						<div class = "text">
							What was your quoted Price?
						</div>
						<div class = "wrapper">
							<div class = "dollar">
								$
							</div>
							<input id = "id_quoted_input" class = "item big" placeholder = "___.__" type="number" min="0.00" max="100000.00" step="0.01" size="40" aria-required="true" aria-invalid="false">
							<select id = "id_quote_increment" class = "item small" aria-required="true" aria-invalid="false">
								<option value="0">Monthly</option>
								<option value="1">3 Months</option>
								<option value="2">6 Months</option>
								<option value="3">12 Months</option>
							</select>
						</div>		
						<div class = "wrapper" style="margin-top: 24px;">
							<div class = "item med" onclick = "setCallState(4)">
								Keep Shopping
							</div>
							<div class = "item med">
								I got Car Insurance
							</div>
						</div>
					</div>
				</div>				
				<div id = "id_callstate3" class = "profile hidden" >
					<div class = "exit" onclick = "setProfileView()">
						X
					</div>
					<div class = "title">
						Information
					</div>
					<div class = "jon-text margin">
						Personal Info
					</div>
					<div id = "id_namep" class = "jon-text">
						Name: Jon Coto 
					</div>
					<div id = "id_DoBp" class = "jon-text">
						DoB: Aug, 18th 1989
					</div>
					<div id = "id_phonep" class = "jon-text">
						Phone Number: (123) 456-7890
					</div>
					<div id = "id_addressp" class = "jon-text">
						Zipcode: 32708
					</div>
					<div id = "id_emailp" class = "jon-text">
						Email: jonnycoto@gmail.com
					</div>		
					
					<div class = "jon-text margin">
						Primary Driver Information
					</div>
					<div id = "id_accidentsp" class = "jon-text">
						Accidents: 0
					</div>
					<div id = "id_duip" class = "jon-text">
						DUI: none
					</div>
					<div id = "id_currentp" class = "jon-text">
						Current Insurance Company: No
					</div>
					<div id = "id_insuredp" class = "jon-text">
						Insured for more than a year?: No
					</div>
					<div id = "id_maritalp" class = "jon-text">
						Marital Status: Single
					</div>
					<div id = "id_rentp" class = "jon-text">
						Do you rent or own your home: Rent
					</div>
					<div id = "id_homep" class = "jon-text">
						Home Property Type: Condo
					</div>
					<div id = "id_creditp" class = "jon-text">
						Credit Rating: Excellent (850-720)
					</div>
					<div class = "jon-text margin">
						Vehicles and Drivers
					</div>
					<div id = "id_vehiclesp" class = "jon-text">
						Vehicle 1: 2008 Nissan Altima <br>
						Vehicle 2: 2006 Honda Civic
					</div>
					<div id = "id_driversp" class = "jon-text">
						Driver 1: Jon Coto <br>
						Driver 2: Rowena Gasmen
					</div>
				</div>
				<div id = "id_callstate4" class = "profile thicc hidden" >
					<div class = "exit" onclick = "setQuotesView()">
						x
					</div>
					<div class = "title">
						Quotes
					</div>
					<div id = "id_quotes_wrapper" class = "wrapper">
						<div class = "row">
							<div class = "item">
								There are currently no active quotes
							</div>
						</div>
					</div>
				</div>
			</td>
		</tr>		
	</table>	
</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
?>
<?php

/*

Plugin Name: Auto Insurance Columns

Description: Adds a custom columns to the auto-leads post-type

Version: 1.0.0

Author: Victor Marquez

Author URI: 

Text Domain: 

*/

// Remove Title
function remove_post_type_title() {

    remove_post_type_support( 'auto-lead', 'title' );

}

add_action( 'init', 'remove_post_type_title' );


// Add custom columns to the Admin Listing Page

add_filter('manage_auto-lead_posts_columns', function($columns) {

	$columns = array(
		'cb' => $columns['cb'],
		'first_name' => __('First Name'),
		'last_name' => __('Last Name'),
		'e-mail_address' => __('E-Mail Address'),
		'date_of_birth' => __('Date of Birth')

	);
    
	return $columns;
});

add_action('manage_auto-lead_posts_custom_column', function($column, $post_id) {
	// echo '<pre>';
	// print_r(get_post_meta($post_id));
	// echo '</pre>';
	if('first_name' === $column) {
		
		$first_name = get_post_meta($post_id, 'contact_information_first_name', true);

		if(!$first_name) {
			_e('n/a');
		} else {
			echo $first_name;
		}
	}

	if('last_name' === $column) {
		
		$last_name = get_post_meta($post_id, 'contact_information_last_name', true);

		if(!$last_name) {
			_e('n/a');
		} else {
			echo $last_name;
		}
	}

	if('e-mail_address' === $column) {
		
		$email = get_post_meta($post_id, 'contact_information_e-mail_address', true);

		if(!$email) {
			_e('n/a');
		} else {
			echo $email;
		}
	}

	if('date_of_birth' === $column) {
		
		$dob = get_post_meta($post_id, 'contact_information_date_of_birth', true);

		if(!$dob) {
			_e('n/a');
		} else {
			echo $dob;
		}
	}

}, 10, 2);


// Bulk Export to CSV

add_filter( 'bulk_actions-edit-auto-lead', function( $actions ) {
	$actions['csv_download'] = 'Download CSV';
	return $actions;
}, 20 );

add_filter( 'handle_bulk_actions-edit-auto-lead', function( $redirect_to, $action, $post_ids ) {
	if( $action !== 'csv_download' ) { return $redirect_to; }
	$args = [
		'csv_download' => 1,
		'post_ids' => implode( ',', $post_ids ),
	];
	return add_query_arg( $args, $redirect_to );
}, 10, 3 );

add_action( 'admin_init', function() {
	
	if( empty( $_REQUEST['csv_download'] ) ) { return; }

	$header = [
		'First Name', 
		'Last Name', 
		'E-Mail Address',
		'DOB',
		'ZIP',
		'Accidents within the last 3 years?',
		'DUI, FR44, SR22',
		'Current Insurance Company',
		'Insured for more than a year?',
		'Do you rent or own your home?',
		'Home Property Type',
		'Credit Rating',
		'Vehicle Make',
		'Vehicle Model',
		'Vehicle Year'
	];
	
	$data = [ $header ];
	$post_ids = explode( ',', $_REQUEST['post_ids'] );

	foreach( $post_ids as $post_id ) {

		// Contact Information
		$first_name = get_post_meta($post_id, 'contact_information_first_name', true);
		$last_name = get_post_meta($post_id, 'contact_information_last_name', true);
		$e_mail_address = get_post_meta($post_id, 'contact_information_e-mail_address', true);
		$date_of_birth = get_post_meta($post_id, 'contact_information_date_of_birth', true);
		$zip = get_post_meta($post_id, 'contact_information_zip_code', true);

		// Primary Driver History
		$accidents = get_post_meta($post_id, 'primary_driver_history_accidents_within_last_3_years', true);
		$dui = get_post_meta($post_id, 'primary_driver_history_current_duis_fr44_or_sr22', true);
		$insurance = get_post_meta($post_id, 'primary_driver_history_current_insurance_company', true);
		$insurance_duration = get_post_meta($post_id, 'primary_driver_history_have_you_been_insured_for_more_than_a_year', true);

		// Financial Information
		$rent_own = get_post_meta($post_id, 'financial_information_do_you_rent_or_own_your_home', true);
		$home_type = get_post_meta($post_id, 'financial_information_home_property_type', true);
		$credit = get_post_meta($post_id, 'financial_information_credit_rating', true);

		// Vehicle Information
		$make = get_post_meta($post_id, 'vehicle_information_vehicle_make', true);
		if($make == 'ACURA') {
			$model = get_post_meta($post_id, 'vehicle_information_acura_vehicle_model', true);
		} elseif($make == 'ALFA ROMEO') {
			$model = get_post_meta($post_id, 'vehicle_information_alfa_romeo_vehicle_model', true);
		} elseif($make == 'ASTON MARTIN') {
			$model = get_post_meta($post_id, 'vehicle_information_aston_martin_vehicle_model', true);
		} elseif($make == 'AUDI') {
			$model = get_post_meta($post_id, 'vehicle_information_audi_vehicle_model', true);
		} elseif($make == 'BENTLEY') {
			$model = get_post_meta($post_id, 'vehicle_information_bentley_vehicle_model', true);
		} elseif($make == 'BMW') {
			$model = get_post_meta($post_id, 'vehicle_information_bmw_vehicle_model', true);
		} elseif($make == 'BUGATTI') {
			$model = get_post_meta($post_id, 'vehicle_information_bugatti_vehicle_model', true);
		} elseif($make == 'BUICK') {
			$model = get_post_meta($post_id, 'vehicle_information_buick_vehicle_model', true);
		} elseif($make == 'CADILLAC') {
			$model = get_post_meta($post_id, 'vehicle_information_cadillac_vehicle_model', true);
		} elseif($make == 'CHEVROLET') {
			$model = get_post_meta($post_id, 'vehicle_information_chevrolet_vehicle_model', true);
		} elseif($make == 'CHRYSLER') {
			$model = get_post_meta($post_id, 'vehicle_information_chrysler_vehicle_model', true);
		} elseif($make == 'DODGE') {
			$model = get_post_meta($post_id, 'vehicle_information_dodge_vehicle_model', true);
		} elseif($make == 'FIAT') {
			$model = get_post_meta($post_id, 'vehicle_information_fiat_vehicle_model', true);
		} elseif($make == 'FORD') {
			$model = get_post_meta($post_id, 'vehicle_information_ford_vehicle_model', true);
		} elseif($make == 'GMC') {
			$model = get_post_meta($post_id, 'vehicle_information_gmc_vehicle_model', true);
		} elseif($make == 'HONDA') {
			$model = get_post_meta($post_id, 'vehicle_information_honda_vehicle_model', true);
		} elseif($make == 'HYUNDAI') {
			$model = get_post_meta($post_id, 'vehicle_information_hyundai_vehicle_model', true);
		} elseif($make == 'INFINITI') {
			$model = get_post_meta($post_id, 'vehicle_information_infiniti_vehicle_model', true);
		} elseif($make == 'JAGUAR') {
			$model = get_post_meta($post_id, 'vehicle_information_jaguar_vehicle_model', true);
		} elseif($make == 'JEEP') {
			$model = get_post_meta($post_id, 'vehicle_information_jeep_vehicle_model', true);
		} elseif($make == 'KIA') {
			$model = get_post_meta($post_id, 'vehicle_information_kia_vehicle_model', true);
		} elseif($make == 'LAND ROVER') {
			$model = get_post_meta($post_id, 'vehicle_information_land_rover_vehicle_model', true);
		} elseif($make == 'LINCOLN') {
			$model = get_post_meta($post_id, 'vehicle_information_lincoln_vehicle_model', true);
		} elseif($make == 'LOTUS') {
			$model = get_post_meta($post_id, 'vehicle_information_lotus_vehicle_model', true);
		} elseif($make == 'MASERATI') {
			$model = get_post_meta($post_id, 'vehicle_information_maserati_vehicle_model', true);
		} elseif($make == 'MAZDA') {
			$model = get_post_meta($post_id, 'vehicle_information_mazda_vehicle_model', true);
		} elseif($make == 'MERCEDES-BENZ') {
			$model = get_post_meta($post_id, 'vehicle_information_mercedes_benz_vehicle_model', true);
		} elseif($make == 'MERCURY') {
			$model = get_post_meta($post_id, 'vehicle_information_mercury_vehicle_model', true);
		} elseif($make == 'MINI') {
			$model = get_post_meta($post_id, 'vehicle_information_mini_vehicle_model', true);
		} elseif($make == 'MITSUBISHI') {
			$model = get_post_meta($post_id, 'vehicle_information_mitsubishi_vehicle_model', true);
		} elseif($make == 'NISSAN') {
			$model = get_post_meta($post_id, 'vehicle_information_nissan_vehicle_model', true);
		} elseif($make == 'OPEL') {
			$model = get_post_meta($post_id, 'vehicle_information_opel_vehicle_model', true);
		} elseif($make == 'PONTIAC') {
			$model = get_post_meta($post_id, 'vehicle_information_pontiac_vehicle_model', true);
		} elseif($make == 'PORSCHE') {
			$model = get_post_meta($post_id, 'vehicle_information_porsche_vehicle_model', true);
		} elseif($make == 'ROLLS ROYCE') {
			$model = get_post_meta($post_id, 'vehicle_information_rolls_royce_vehicle_model', true);
		} elseif($make == 'SAAB') {
			$model = get_post_meta($post_id, 'vehicle_information_saab_vehicle_model', true);
		} elseif($make == 'SUBARU') {
			$model = get_post_meta($post_id, 'vehicle_information_subaru_vehicle_model', true);
		} elseif($make == 'TESLA') {
			$model = get_post_meta($post_id, 'vehicle_information_tesla_vehicle_model', true);
		} elseif($make == 'TOYOTA') {
			$model = get_post_meta($post_id, 'vehicle_information_toyota_vehicle_model', true);
		} elseif($make == 'VOLKSWAGEN') {
			$model = get_post_meta($post_id, 'vehicle_information_volkswagen_vehicle_model', true);
		} elseif($make == 'VOLVO') {
			$model = get_post_meta($post_id, 'vehicle_information_volvo_vehicle_model', true);
		} else {
			$model = 'Other';
		}
		$year = get_post_meta($post_id, 'vehicle_information_vehicle_year', true);

		$data[] = [
			$first_name,
			$last_name,
			$e_mail_address,
			$date_of_birth,
			$zip,
			$accidents,
			$dui,
			$insurance,
			$insurance_duration,
			$rent_own,
			$home_type,
			$credit,
			$make,
			$model,
			$year
		];
		
	}
 
	// Output
	header( 'Content-Type: text/csv; charset=utf-8' );
	header( 'Content-Disposition: attachment; filename=my_fl_auto_insurance-leads.csv' );
	$out = fopen( 'php://output', 'w' );
	foreach( $data as $row ) { fputcsv( $out, $row ); }
	fclose( $out );
	exit;
} );

function register_my_plugin_scripts() {

wp_register_style( 'my-plugin', plugins_url( 'ddd/css/plugin.css' ) );

wp_register_script( 'my-plugin', plugins_url( 'ddd/js/plugin.js' ) );

}



add_action( 'admin_enqueue_scripts', 'register_my_plugin_scripts' );



function load_my_plugin_scripts( $hook ) {

// Load only on ?page=sample-page

if( $hook != 'toplevel_page_sample-page' ) {

return;

}

// Load style & scripts.

wp_enqueue_style( 'my-plugin' );

wp_enqueue_script( 'my-plugin' );

}



add_action( 'admin_enqueue_scripts', 'load_my_plugin_scripts' );
<?php

	$project_name = 'Example'; // case sensitive for <title> and <h1> tag
	$project_dir = 'projects/example/';

	$project_subdomain = 'example';
	$project_subdomain = $domain['protocol'] . $project_subdomain . '.' . $domain['url'];

	$project_id = 0; // same for all languages
	$project_lang =  'en';

	$project_desc_title = 'example title optimized for SEO'; // goes into a <h2> element
	$project_desc = 'Unique description optimized for SEO. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'; // goes into a <p> element

	// related scru-services
	$project_referrals = array(
		array(
			'title' => 'example',
			'url' => $domain['protocol'] . 'example.' . $domain['url']
		),
	);

	// keywords for this project
	$project_keywords = array('keyword', 'keyword');

	// scripts for this project, the order matters
	$project_scripts = array(
		'js/vendors/jquery.min.js',			// jquery root dir
		'js/magic.min.js', 							// javascript project dir
	);

?>

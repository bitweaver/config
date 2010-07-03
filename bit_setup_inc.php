<?php
global $gBitSystem;

$registerHash = array(
	'package_name' => 'config',
	'package_path' => dirname( __FILE__ ).'/',
	'required_package'=> TRUE,
);
$gBitSystem->registerPackage( $registerHash );

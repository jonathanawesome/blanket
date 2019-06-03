<?php
/*
 credits: Raz Ohad https://coderwall.com/p/of7y2q/faster-ajax-for-wordpress
*/

// mimic the actual admin-ajax
define('DOING_AJAX', true);

if (!isset( $_REQUEST['action']))
	die('-1');

// make sure you update this line to the relative location of the wp-load.php
require_once('../../../wp-load.php');

// yypical headers
header('Content-Type: text/html');
send_nosniff_header();

// disable caching
header('Cache-Control: no-cache');
header('Pragma: no-cache');

$action = esc_attr(trim($_REQUEST['action']));

// declare all actions that you will use this ajax handler for, as an added security measure.
$allowed_actions = array(
	//'blanket_search',
	//'another_action',
);

if(in_array($action, $allowed_actions)) {
	if(is_user_logged_in())
		do_action('blanket_'.$action);
	else
		do_action('blanket_nopriv_'.$action);
} else {
	die('-1');
}
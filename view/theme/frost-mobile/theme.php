<?php

/*
 * Name: Frost--mobile version
 * Description: Like frosted glass
 * Credits: Navigation icons taken from http://iconza.com. Other icons taken from http://thenounproject.com, including: Like, Dislike, Black Lock, Unlock, Pencil, Tag, Camera, Paperclip (Marie Coons), Folder (Sergio Calcara), Chain-link (Andrew Fortnum), Speaker (Harold Kim), Quotes (Henry Ryder), Video Camera (Anas Ramadan), and Left Arrow, Right Arrow, and Delete X (all three P.J. Onori). All under Attribution (CC BY 3.0). Others from The Noun Project are public domain or No Rights Reserved (CC0).
 * Version: Version 0.2.15
 * Author: Zach P <techcity@f.shmuz.in>
 * Maintainer: Zach P <techcity@f.shmuz.in>
 */

$a->theme_info = array();

function frost_mobile_init(&$a) {

	// I could do this in style.php, but by having the CSS in a file the browser will cache it,
	// making pages load faster
	if( $a->module === 'home' || $a->module === 'login' || $a->module === 'register' || $a->module === 'lostpass' ) {
		$a->page['htmlhead'] = str_replace('$stylesheet', $a->get_baseurl() . '/view/theme/frost-mobile/login-style.css', $a->page['htmlhead']);

	}
	if( $a->module === 'login' )
		$a->page['end'] .= '<script type="text/javascript"> $j(document).ready(function() { $j("#id_" + window.loginName).focus();} );</script>';


	$a->sourcename = 'Friendica mobile web';
	$a->videowidth = 250;
	$a->videoheight = 200;
	$a->theme_thread_allow = false;
	$a->force_max_items = 10;

}

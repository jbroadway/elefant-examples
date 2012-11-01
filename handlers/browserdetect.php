<?php

/**
 * The detect() function can be used to do some basic
 * server-side client sniffing.
 */

$echo_detect = function ($ua) {
	if (detect ($ua)) {
		printf ('%s - %s<br />', $ua, __ ('yes'));
	} else {
		printf ('%s - %s<br />', $ua, __ ('no'));
	}
};

$echo_detect ('chrome');
$echo_detect ('firefox');
$echo_detect ('msie');
$echo_detect ('ios');
$echo_detect ('android');
$echo_detect ('mobile');

?>
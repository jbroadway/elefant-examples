<?php

/**
 * This example generates a random number and returns it,
 * caching the result for 30 seconds so that every 30 seconds
 * a new random number will be returned.
 */

$page->title = __ ('Random number');

printf ('<p>%s</p>', __ ('Note: Cached for 30 seconds'));

$num = $cache->get ('examples:random');
if ($num) {
	echo $num;
	return;
}

$num = rand ();
$cache->set ('examples:random', $num, 0, 30);
echo $num;

?>
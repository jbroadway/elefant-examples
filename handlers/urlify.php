<?php

/**
 * This example shows how to create SEO-friendly URLs
 * using the URLify library. URLify also transliterates
 * characters from numerous languages into ASCII
 * equivalents.
 */

$blog_post = array (
	'id' => 123,
	'title' => '10 Things You Didn\'t Know About X'
);

printf (
	'<p><a href="/blog/post/%d/%s">%s</a></p>',
	$blog_post['id'],
	URLify::filter ($blog_post['title']),
	$blog_post['title']
);

$original = 'Добро пожаловать на наш веб-сайт.';

printf (
	'<p>%s<br />%s</p>',
	$original,
	URLify::filter ($original)
);

?>
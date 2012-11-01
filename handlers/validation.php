<?php

/**
 * This example shows how you can implement custom
 * validation rules in several different ways.
 */

$_POST['name'] = 'Joe User';
$_POST['email'] = 'joe@example/com';

// Validate parameters individually

if (! Validator::validate ($_POST['name'], 'not empty')) {
	printf ('<p>%s</p>', __ ('Name must not be empty.'));
}

if (! Validator::validate ($_POST['email'], 'email')) {
	printf ('<p>%s</p>', __ ('Email address is not valid.'));
}

// Validate all parameters at once

$rules = array (
	'name' => array (
		'not empty' => true
	),
	'email' => array (
		'email' => true
	)
);

$failed = Validator::validate_list ($_POST, $rules);

foreach ($failed as $field) {
	printf ('<p>%s: %s.</p>', __ ('Parameter failed'), $field);
}

// Validate from a file

$failed = Validator::validate_list ($_POST, 'apps/examples/forms/validation.php');

foreach ($failed as $field) {
	printf ('<p>%s: %s.</p>', __ ('Parameter failed'), $field);
}

?>
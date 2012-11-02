<?php

/**
 * This handler displays the source of a particular
 * example.
 */

// Use first parameter as handler, or redirect to viewing self
$handler = isset ($this->params[0])
	? $this->params[0]
	: $this->redirect ('/examples/viewsource/viewsource');

// Make sure handler doesn't contain invalid characters
if (! preg_match ('/^[a-z0-9_-]+$/i', $handler)) {
	$this->redirect ('/examples');
}

// Make sure the handler exists
if (! file_exists ('apps/examples/handlers/' . $handler . '.php')) {
	$this->redirect ('/examples');
}

$page->title = __ ('Source') . ': examples/' . $handler;

// Build the data for the view
$out = array (
	'handler' => $handler,
	'handler_output' => highlight_file (
		'apps/examples/handlers/' . $handler . '.php',
		true
	),
	'has_view' => false,
	'has_form' => false
);

if (file_exists ('apps/examples/views/' . $handler . '.html')) {
	$out['has_view'] = true;
	$out['view_output'] = highlight_file (
		'apps/examples/views/' . $handler . '.html',
		true
	);
}

if (file_exists ('apps/examples/forms/' . $handler . '.php')) {
	$out['has_form'] = true;
	$out['form_output'] = highlight_file (
		'apps/examples/forms/' . $handler . '.php',
		true
	);
}

// Render the view template
echo View::render ('examples/viewsource', $out);

?>
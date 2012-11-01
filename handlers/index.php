<?php

/**
 * Visit /examples on your Elefant installation
 * to view the examples in this app.
 */

$handlers = glob ('apps/examples/handlers/*.php');
foreach ($handlers as $key => $handler) {
	$handlers[$key] = basename ($handler, '.php');
}

$page->title = __ ('Examples');

echo View::render (
	'examples/index',
	array (
		'handlers' => $handlers
	)
);

?>
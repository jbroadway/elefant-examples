<?php

$handler = isset ($this->params[0])
	? $this->params[0]
	: $this->redirect ('/examples/viewsource/viewsource');

if (! preg_match ('/^[a-z0-9_-]+$/i', $handler)) {
	$this->redirect ('/examples');
}

if (! file_exists ('apps/examples/handlers/' . $handler . '.php')) {
	$this->redirect ('/examples');
}

$page->title = __ ('Source') . ': examples/' . $handler;

highlight_file ('apps/examples/handlers/' . $handler . '.php');

?>
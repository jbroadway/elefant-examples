<?php

/**
 * This is an example form handler in Elefant.
 * Try it out at the URL /examples/form in your
 * Elefant installation. Also look at the
 * associated validation rules in the file
 * apps/examples/forms/form.html and the view
 * template in apps/examples/view/form.html.
 */

$form = new Form ('post', $this);

echo $form->handle (function ($form) {
	// Handle your form submission here.
	info ($_POST);
});

?>
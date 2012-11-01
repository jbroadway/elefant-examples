<?php

/**
 * This handler can only be accessed by admin users.
 * To try it out, visit /examples/adminsonly in your
 * Elefant installation.
 */

$this->require_admin ();

$page->layout = 'admin';
$page->title = __ ('Area 51');
echo __ ('Welcome back, %s!', User::val ('name'));

?>
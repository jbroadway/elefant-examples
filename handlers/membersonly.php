<?php

/**
 * This handler can only be accessed by site members.
 * To try it out, visit /examples/membersonly in your
 * Elefant installation.
 */

$this->require_login ();

$page->title = __ ('Member Area');
echo __ ('Welcome back, %s!', User::val ('name'));

?>
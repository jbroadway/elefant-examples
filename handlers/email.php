<?php

/**
 * This is how you send an email in Elefant. Mailer::send()
 * is a wrapper around the Zend_Mail package, and returns
 * the Zend_Mail object that was created to send the email.
 */

Mailer::send (array (
	'to'		=> array ('user@example.com', 'Joe User'),
	'from'		=> array ('news@widgets.com', 'Widgets Inc.'),
	'subject'	=> 'Subject line',
	'text'		=> 'This is the plain text message.',
	'html'		=> 'This is the <b>html</b> message.'
));

echo 'Email sent.';

?>
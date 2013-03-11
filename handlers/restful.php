<?php

/**
 * This examples shows how to create a basic RESTful API.
 * Note: Ordinarily you would define your class in a
 * separate file in apps/examples/lib/.
 *
 * Try the following URLs to test it out:
 *
 *     /examples/restful/hello/world
 *     /examples/restful/square/3
 *     /examples/restful/error
 */

namespace examples;

class API extends \Restful {
	public function get_hello ($name = 'world') {
		return 'Hello ' . $name;
	}

	public function get_square ($num = 0) {
		return array (
			'original' => $num,
			'squared' => $num * $num
		);
	}

	public function get_error () {
		return $this->error ('This is an example error.');
	}
}

$this->restful (new API);

?>

<?php

class AccessTest extends TestCase {

	/**
	 * Make sure the site index is accessible
	 *
	 * @return void
	 */
	public function testAccess()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(200, $response->getStatusCode());
	}

}

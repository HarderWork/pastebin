<?php
App::uses('AppController', 'Controller');

class AppControllerTest extends CakeTestCase {
	public function testCalc() {
		$one = 1;
		$two = 2;
		$this->assertEquals(3, $one + $two);
	}
}
?>
<?php
namespace demo\Test;

class DemoTest extends \PHPUnit_Framework_TestCase {
    public function testAlwayTrue() {
	$true = true;
	$this->assertTrue($true);
    }
}

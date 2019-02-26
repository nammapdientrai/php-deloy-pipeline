<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
include '/productController.php';

class StupidTest extends TestCase
{
    public function testTrueIsTrue(){
    	$foo = true;
    	$this->assertTrue($foo);
    }

    public function testTotal() {
    	$a = 2 * 5;
	$this->assertTrue( ($a == 10) );
    }

    public function testMysql() {
     	$db = new ProductController();
		$list = $db->getAllProduct();
		$this->assertTrue( ( $list[0]->get_id() == '1' ) );
    }
}

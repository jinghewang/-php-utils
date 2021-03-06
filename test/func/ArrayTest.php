<?php
/**
 * Created by PhpStorm.
 * User: hbd
 * Date: 2017/10/25
 * Time: 下午4:08
 */

namespace Woodw\Test;

require_once dirname(__DIR__) . "/BaseTestCase.php";

use \PHPUnit\Framework\TestCase;
use Woodw\Test\BaseTestCase;
use Woodw\Utils\Helpers\ArrayHelper;

class ArrayTest extends BaseTestCase{


    public $name = 'wjh';
    public $age = 10;


    protected function setUp() {
        parent::setUp();

        $this->initSetup();
    }

    protected function initSetup(){
        //$this->warning($this->heap->top());
    }


    /**
     * @test
     */
    public function array_value_exists( ){

        $search = ['123', '456', '789'];

        $value = '123';
        $condition = ArrayHelper::array_value_exists($value, $search);
        $this->assertTrue($condition, "{$value} in");

        $value = '12';
        $condition1 = ArrayHelper::array_value_exists($value, $search);
        $this->assertFalse($condition1,"{$value} not in");
    }


    protected function tearDown() {
        parent::tearDown();
    }

}
<?php
    /**
     * Created by PhpStorm.
     * User: iltongarcia
     * Date: 30/08/17
     * Time: 16:38
     */

    namespace pga_services;

    use PGAServices\Farm;

    class FarmTest extends \PHPUnit_Framework_TestCase {

        public function testGetFarm() {
            $init = Farm::init();
            $this->assertTrue(isset($init));
        }

    }

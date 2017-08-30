<?php

    class PGAServicesTest extends PHPUnit_Framework_TestCase {

        public function testInit() {
            \PGAServices\Client::init();
            $this->assertTrue(isset(\PGAServices\Client::$sysKey));
        }

    }
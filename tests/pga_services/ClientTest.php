<?php
    /**
     * Created by PhpStorm.
     * User: iltongarcia
     * Date: 30/08/17
     * Time: 16:38
     */

    namespace pga_services;

    use PGAServices\Config;
    use PGAServices\Client;

    class ClientTest extends \PHPUnit_Framework_TestCase {

        protected $client;

        protected function setUp() {
            $this->client = Client::instance();
        }

        public function testGetFarm() {
            $farm = $this->client->getFarmBy('101');
            $this->assertTrue(isset($farm));
        }

    }

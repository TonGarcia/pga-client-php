<?php

    namespace PGAServices;

    class Client {
        use Config;

        /**
         * SoapClient connector which performs the requests to the server,
         * it can be mutable if it class access more than one service
         * @var \SoapClient
         */
        private $service;
        
        public function getFarmBy($id) {
            $this->service = Config::connector('wsdl_farm');
            return $this->service;
        }

        // ######## END SERVICES IMPLEMENTATIONS ########
        // ######## STARTS SINGLETON IMPLEMENTATION ########

        /**
         * @var Client instance (Singleton Design Pattern)
         */
        private static $instance = null;

        /**
         * @return Client|static singleton instance
         */
        public static function instance() {
            if (self::$instance == null) self::$instance = new static();
            return self::$instance;
        }

        /**
         * Client constructor: it is initializing the dependency (PGA:Config) &
         * create it attributes objects to perform the requests
         */
        private function __construct() {
            Config::init();
        }

        // Preventing Force new instances based on it singleton class
        private function __clone(){}
        private function __wakeup(){}

    }
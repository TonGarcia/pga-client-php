<?php

    namespace PGAServices;

    class Farm {
        use Client;

        /**
         * URL Built when it object is "constructed", based on Client Trait
         * @var string
         */
        private $service;

        function __construct() {
            Client::init();

        }

        public function get($farmId) {

        }

    }
<?php

    namespace PGAServices;

    // YAML Setting File
    require_once '../vendor/mustangostang/spyc/Spyc.php';

    $settings = Spyc::YAMLLoad('services.yml');

    /**
     * Trait PGAServices
     * Facade PGAServices Lib Module
     */
    trait PGAServices {

        /**
         * PGA WS System Key for Authentication
         * @var string
         */
        public $sysKey;

        /**
         * Timeout to prevent so longer requests
         * @var int
         */
        public $timeout;


    }
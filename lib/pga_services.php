<?php

    namespace PGAServices;

    // YAML Setting File
    require_once '../vendor/mustangostang/spyc/Spyc.php';

    // Loading Lib Classes
    foreach (glob("*.*") as $filename) {
        require_once $filename;
    }

    // Settings initialization (load it WS Services stored in YML)
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
        public static $sysKey;

        /**
         * Timeout to prevent so longer requests
         * @var int
         */
        public $timeout;

    }
<?php

    namespace PGAServices;

    // YAML Setting File
    require_once '../vendor/mustangostang/spyc/Spyc.php';

    // Loading Lib Classes
    foreach (glob("*.*") as $filename) {
        require_once $filename;
    }

    /**
     * Trait PGAServices
     * Facade PGAServices Lib Module
     */
    trait Client {

        /**
         * PGA WS System Key for Authentication
         * @var string
         */
        public static $sysKey;

        /**
         * Timeout to prevent so longer requests
         * @var int
         */
        public static $timeout;

        /**
         * WS Settings Dictionary
         * @var array
         */
        public static $wsSettings;

        /*
         * Initialize it Facade static variables/attributes
         */
        public static function init() {
            // Loading WS Services Settings form YML
            $settings = \Spyc::YAMLLoad(dirname(__FILE__) . '/services.yml');
            print_r($settings);
            $settings[0];
//            Client::$wsSettings =
//            Client::$sysKey = Client::$wsSettings;
        }

    }
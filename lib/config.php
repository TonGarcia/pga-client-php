<?php

    namespace PGAServices;

    // YAML Setting File
    require_once '../vendor/mustangostang/spyc/Spyc.php';

    /**
     * Trait PGAServices
     * Facade PGAServices Lib Module
     */
    trait Config {

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
            self::$wsSettings = \Spyc::YAMLLoad(dirname(__FILE__) . '/services.yml');
            self::$sysKey = self::$wsSettings['sys_key'];
        }

        /**
         * Decorator Method which returns it decorated WSDL Service URL
         * @param $name string = check it YML file to see which name to pass on it
         * @return string
         */
        public static function getService($name) {
            $settings = self::$wsSettings;
            $service_name = $settings['services'][$name];
            $service = "${settings['protocol']}://${settings['domain']}/${settings['path']}/${service_name}${settings['extension']}";
            return $service;
        }

        /**
         * Create an object which is a bridge connector to the server (PGA WS)
         * @param $service
         * @return \SoapClient
         */
        public static function connector($service) {
            $url = self::getService($service);
            $soapClientParams = array (
                'encoding' => 'UTF-8',
                'verifypeer' => false,
                'verifyhost' => false,
                'soap_version' => SOAP_1_2,
                'trace' => 0,
                'exceptions' => 0,
                'connection_timeout' => 1,
                'namespace' => 'http://www.ibm.com/maximo',
                'namespace_identifier' => null,
                'convert_request_keys_to' => false
            );

            return new \SoapClient($url, $soapClientParams);
        }

    }
<?php

    require_once '../lib/config.php';
    foreach (glob("../lib/pga_services/*.*") as $filename) {
        require_once $filename;
    }
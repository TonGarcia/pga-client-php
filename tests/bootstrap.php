<?php

    require_once '../lib/client.php';
    foreach (glob("../lib/pga_services/*.*") as $filename) {
        require_once $filename;
    }
<?php

    /**
     * @package radniStaz
     * @author Aleksandar Safranec <alexwebsoft.net@gmail.com>
     */

    /**
    * Define ABSPATH constant
    */

    define('ABSPATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);

    /**
     * Define absolute URI of site
    */

    $protocol = empty($_SERVER['HTTPS']) ? 'http' : 'https';
    define ('ROOTURI', $protocol . '://' . $_SERVER['SERVER_NAME'] . DIRECTORY_SEPARATOR);

    /**
     * Require autoload for class files
     *
     */

    require_once('vendor/autoload.php');

    /**
     * Include header.php
     */

    include('header.php');

    include(ABSPATH . 'inc/markup.inc.php');
    
    /**
     * Include footer.php
     */

    include('footer.php');

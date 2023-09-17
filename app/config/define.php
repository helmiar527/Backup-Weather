<?php
require_once 'config.php';

// URL
define('ROOT', $rootdoc);
define('ROOTURL', $protocol . $host);
define('BASEURL', $protocol . $host . $path);
define('USERURL', $protocol . $host . $path . $rootuser);

// Method dan Index Default
define('Home', $ENV['METHOD_URL']); //method
define('index', $ENV['INDEX_URL']); //index

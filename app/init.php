<?php
spl_autoload_register(function ($class) {
  require_once 'systems/' . $class . '.php';
});
require_once 'config/config.php';
require_once 'config/define.php';
require_once 'config/process-config.php';
require_once 'config/content.php';

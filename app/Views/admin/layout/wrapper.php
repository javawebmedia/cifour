<?php 
$session = \Config\Services::session($config);
// Check session

// Gabungin ya semua bagian layout
require_once('head.php');
require_once('header-menu.php');
require_once('content.php');
require_once('footer.php');
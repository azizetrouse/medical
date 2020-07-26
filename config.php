<?php
session_start();
// coniction
define("medical", "http://127.0.0.1/medical/");
define("admin", "http://127.0.0.1/medical/admin/");
define("assets", "http://127.0.0.1/medical/assets/css/");
define("bota", "http://127.0.0.1/medical/bootstrap/");
define("images", "http://127.0.0.1/medical/images/");

define("css",__DIR__.'/assets/css/');
define("style",__DIR__.'/partial/');
define("admi",__DIR__.'/admin/');

require (admi.'function/db.php');

?>
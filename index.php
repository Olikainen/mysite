
<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include "model.php";
$rows=get_all_rows();
require "View/list.php";
?>

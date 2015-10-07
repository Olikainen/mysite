
<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include "model.php";
$uri=$_SERVER['REQUEST_URI'];
echo "uri=$uri";
if('/mysite/index.php'==$uri || '/mysite/'==$uri )
{
	$rows=get_all_rows();
	require "View/list.php";
}elseif('/mysite/index.php/admin'==$uri || '/mysite/'==$uri)
{
	$rows=get_all_rows();
	require "View/admin.php";
}


?>

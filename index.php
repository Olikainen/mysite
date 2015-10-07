
<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include "model.php";
$uri=$_SERVER['REQUEST_URI'];
$uri=rtrim($uri,'/');
echo "uri=$uri";
if('/mysite/index.php'==$uri || '/mysite/'==$uri )
{
	$response=list_action();
}elseif('/mysite/index.php/admin'==$uri || '/mysite/'==$uri)
{
	$response=admin_action();
}

elseif('/mysite/index.php/add'==$uri || '/mysite/'==$uri)
{
	$response=add_action();
}
echo $response;
?>

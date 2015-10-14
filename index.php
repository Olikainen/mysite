
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('display_errors','On');
include "controllers/controller.php";
include "model.php";

$uri=$_SERVER['REQUEST_URI'];
$uri=rtrim($uri,"/");
echo "uri=$uri";
echo '<br>SERVER[PHP_SELF]='.$_SERVER['PHP_SELF'];


if ($uri=='/mysite/index.php' || $uri=='/mysite')
{
	$response=list_action();
} 
elseif($uri=='/mysite/index.php/admin' || $uri=='/mysite')
{
	$response=admin_action();
}
elseif($uri=='/mysite/index.php/add' || $uri=='/mysite')
{
	$response=add_action();
}
elseif($_SERVER['PHP_SELF']=='/mysite/index.php/show')
{
	$response=show_action($_REQUEST['id']);
}

echo $response;

?>

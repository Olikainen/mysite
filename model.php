<?php
//работа с базой данных
function open_database_connection()
{
	$link=mysql_connect('localhost','Olikainen','123');
	mysql_select_db('Olikainen',$link);
	mysql_query ("SET NAMES utf8");
	return $link;
}
function close_database_connection($link)
{
	mysql_close($link);
}
function get_all_rows()
{
	$link=open_database_connection();
	$result=mysql_query('SELECT*FROM idpages ORDER BY id DESC',$link);
	$rows=array();
	while ($row=mysql_fetch_array($result))
	{
		$rows[]=$row;
	}
	close_database_connection($link);
	return $rows;
}
function add_row()
{
	if(empty($_REQUEST['add_titul'])&&
		empty($_REQUEST['add_content'])&&
		empty($_REQUEST['add_author']))
	{
		return;
	}
	$titul=$_REQUEST['add_titul'];
	$content=$_REQUEST['add_content'];
	$author=$_REQUEST['add_author'];
	$date=date("Y-m-d H:i:s");
	$link=open_database_connection();
	$sql="INSERT INTO `idpages` (`id`, `date`, `author`, `titul`, `text`) 
	VALUES (NULL, '$date', '$author', '$titul', '$content')";
	mysql_query($sql);
	close_database_connection($link);
	return;
}
function get_row($id){
	$link=open_database_connection();
	$sql="SELECT * FROM `idpages` WHERE `id`=$id";
	$result=mysql_query($sql,$link);
	$rows=array();
	while ($row=mysql_fetch_array($result)){
		$rows[]=$row;
	}
	close_database_connection($link);
	return $rows;
}

?>
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
?>
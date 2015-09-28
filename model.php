<?php
//работа с базой данных
function open_database_connection()
{
	$link=mysql_connect('localhost','Olikainen','123');
	mysql_select_db('Olikainen',$link);
	mysql_query ("SET CHARSET SET UTF-8");
}
function close_database_connection($link)
{
	mysql_close($link);
}
function get_all_rows()
{
	$link=open_database_connection();
	$result=mysql_query('SELECT*FROM idpages',$link);
	$rows=array();
	while ($rows=mysqli_fetch_assoc($result))
	{
		$rows[]=$row;
	}
	close_database_connection($link);
	return $rows;
}
?>
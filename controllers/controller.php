<?php
function list_action()
{
	$rows=get_all_rows();
	require "View/list.php";
}
function admin_action()
{
	$rows=get_all_rows();
	require "View/admin.php";
}
function add_action()
{
	$rows=add_row();
	$rows=get_all_rows();
	require "View/admin.php";
}
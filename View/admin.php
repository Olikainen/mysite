<?php ob_start();?>

<h3>Администрирование страницы</h3>
	<form action="/mysite/index.php/add" method="POST" name="form1">
	<table>
		<tr>
			<td>Заголовок статьи: </td>
			<td><input type="text" name="add_titul"></td>
		</tr>
		<tr>
			<td>Автор статьи: </td>
			<td><input type="text" name="add_author"></td>
		</tr>
		<tr>
			<td>Text: </td>
			<td><input type="text" name="add_content"></td>
		</tr>
		<tr>
			<td><input type="reset" name="reset" value="Очистить"</td>
			<td><input type="submit" name="submit" value="Добавить"></td>
		</tr>
		
	</table>
</form>
<?php include ("View/list.php");?>		
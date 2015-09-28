
<?
include "model.php";
$rows=get_all_rows();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta author="Olikainen">
	<title>Это новый сайт!</title>
</head>
<body>
	<h1>Список всех записей в таблице</h1>
		<ol>

			<li>
				<?php echo $rows['titul'].'br'.$rows['text'] ; ?>
			</li>
		</ol>
			
		</u>
</body>
</html>
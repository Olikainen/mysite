<?php ob_start();?>
<h1>Список всех записей в таблице</h1>
	<h2>Записи из базы данных</h2>	
<?php 
	$n=0;
	foreach($rows as $row)
	{
		$n++;
		echo '<h3>'.$n.'. Head: '.$row['titul'].'</h3>Content: '.$row['text'];
	}
	echo '<br> Количество записей: '.$n;
?>
 		<ol>
			<li>
				<?php echo "Hello!";
				//echo $rows['titul'].<br>.$rows['text'] ; ?>
			</li>
		</ol>
<?php $content=ob_get_clean();?>
<?php include ("View/layout.php");?>		
<?php
ob_start();
foreach ($rows as $row ) {
	

echo '<h2>'.$row['titul'].'</h2>';
echo '<p>author: '.$row['author'].'</p>';
echo '<p> Article:<br>'.$row['text'].'</p>';
echo '<p>date: '.$row['date'].'</p>';
}
$content=ob_get_clean();
include 'View/layout.php';

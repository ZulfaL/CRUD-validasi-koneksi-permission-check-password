<?php
	$filecounter = "counter.txt";
	$open = fopen($filecounter,'r+');
	$counter = fgets($open);
	fclose($open);
	$counter++;
	$write = fopen($filecounter,'w');
	fputs($write,$counter);
	fclose($write);
	echo "<b>Anda adalah pengunjung ke : $counter</b>";
?>
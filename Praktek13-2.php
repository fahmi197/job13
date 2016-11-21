<html>
<head>
	<title>Koneksi ke MySQL</title>
</head>
<body>
<?php
	$link = mysql_connect('localhost','root')
	or die('could not connect'.mysql_error());
	echo 'Connected successfully';
	mysql_select_db('ShowRoomMobil') or die('could not select database');

	$query = 'SELECT * FROM  ShowRoomMobil';
	$result = mysql_query($query)or die('query failed:'.mysql_error());

	echo "<table>\n";
	while ($line = mysql_fetch_array($result,MYSQL_ASSOC))
	{
		echo"\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t<tr>\n";
	}
		echo "</table>\n";
	?>
</body>
</html>
<html>
<head>
<title>Koneksi ke MySQL</title>
</head>
<body>
	<?php
	//connecting, selectin database
	$link=mysql_connect('localhost','root')
	or die ('Could not connect : '.mysql_error());
	echo 'Connected successfully';
	mysql_select_db('ShowRoomMobil') or die('Could not select database');
	?>
</body>
</html>
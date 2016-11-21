<?php
	$nama_db="ShowRoomMobil";
	$link = mysql_connect('localhost','root','')
	or die('could not connect'.mysql_error());
		 if($link){
		 	//pilih database
		 	mysql_select_db($nama_db);
		 }else{
		 echo "database tidak terkoneksi";
		 }
?>
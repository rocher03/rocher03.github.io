<html>
<body>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php

ob_start (); 
session_start ();
?>
<?php
include ("ayar.php");

$user=$_POST["user"];

$pas=$_POST["pas"];

if (($user=="")and($pas=="")) {


header ("location:index.php");
		
	}
	else 
	{
		$sorgu=mysql_query ("SELECT* FROM uyelik WHERE user='$user' and pas='$pas'");
		
		
		if (mysql_num_rows($sorgu)>0)
		
		{
			$_SESSION["user"]=$user;
				
							  echo str_repeat("<br>", 8)."<center><img src=Resimler/yukleniyor.gif border=0 /> Anasayfaya yöndiriliyorsunuz, lütfen bekleyiniz..</center>";	
header("Refresh: 2; url=index.php");
return;

		}
		else 
			{ 
			echo str_repeat("<br>", 8)."<center><img src=Resimler/Hata.gif border=0 /> Kullanıcı adı veya şifre yanlış..</center>";	
header("Refresh: 2; url=index.php");
return;

		}
	
	}
		
?>
	<meta http-equiv="refresh" content="0;URL=index.php">

</body>
</head>
</html>
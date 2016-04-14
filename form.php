<!DOCTYPE html>
<html lang="en">
<head>

<?php //資料庫設定
//資料庫位置
$db_server = "localhost";
//資料庫名稱
$db_name = "c";
//資料庫管理者帳號
$db_user = "root";
//資料庫管理者密碼
$db_passwd = "123456";

//對資料庫連線
if(!@mysql_connect($db_server, $db_user, $db_passwd))
        die("無法對資料庫連線");

//資料庫連線採UTF8
mysql_query("SET NAMES utf8");

//選擇資料庫
if(!@mysql_select_db($db_name))
        die("無法使用資料庫");
 ?>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php  
  

    if ($_SERVER['SCRIPT_NAME'] == '/abc123')  
        header('Location: ' . 真正要前往的網址);  
    elseif ($_SERVER['SCRIPT_NAME'] == '/def456')  
        header('Location: ' . 真正要前往的網址);  
   
    if (isset($trans[$_SERVER['SCRIPT_NAME']]))  
        header('Location: ' . $trans[$_SERVER['SCRIPT_NAME']]);  
?>  
	

<form id="form1" name="form1" method="post" action="">  


<input type="text" name="numA" id="numA" />  




</body>
</html>
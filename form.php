<html>
  <head >
  <meta charset="utf-8">
    <title>Dormitory Distributing System</title>
  </head>
  <body>
  <?php
   session_start();
  if(isset($_POST['submit'])){
$sno=$_POST["sno1"];
$sno0=intval($sno);
$_SESSION["sno1"]=$sno0;
//连接数据库
	$host="localhost";
 	$user="root";
 	$password="";
	$conn=mysql_connect($host,$user,$password);
	mysql_query("set names 'utf8'");
	mysql_select_db("lab527",$conn);
//读取学号对应名字
$sql="select name from student where id='$sno'";
$result=mysql_query($sql)or die('error');
$name=mysql_fetch_row($result);
echo "Welcome back,&nbsp".$name[0];
}
?>
<br/>
<form method="post">
<table>
<tr>
<td colspan="2"><p><font color="red">请务必根据自身情况填写以下信息<br/>以便系统为你分配寝室</font></p></td>
</tr>
<tr>
<td>就寝习惯：</td><td><input type="radio" name="sleep" value="1" checked="checked"/>熬夜</td><td><input type="radio" name="sleep" value="2"/>早睡</td>
</tr>
<tr>
<td>兴趣偏向：</td><td><input type="radio" name="hobby" value="1" checked="checked"/>电影电视</td><td><input type="radio" name="hobby" value="2"/>电子竞技</td><td><input type="radio" name="hobby" value="3"/>体育健身</td><td><input type="radio" name="hobby" value="4"/>研读学习</td>
</tr>
<tr>
<td>环境氛围</td><td><input type="radio" name="environment" value="1" checked="checked"/>热闹</td><td><input type="radio" name="environment" value="2"/>安静</td>
</tr>
<tr align="right">
<td colspan=5><input type="submit" name="sub" value="提交"/><input type="reset" name="res" value="重置"/></td>

</tr>
</table>
</form>
<?php

if(isset($_POST['sub'])){
$sno1=$_SESSION["sno1"];
$sleep=$_POST["sleep"];
$sleep2=intval($sleep);
$hobby=$_POST["hobby"];
$hobby2=intval($hobby);
$environment=$_POST["environment"];
$environment2=intval($environment);
  $host="localhost";
  $user="root";
  $password="";
  $conn=mysql_connect($host,$user,$password);
  mysql_query("set names 'utf8'");
  mysql_select_db("lab527",$conn);
$sql1="Update student set sleep='$sleep2', hobby='$hobby2', environment='$environment2' where id='$sno1'";
mysql_query($sql1)or die('error'.$sleep2.$hobby2.$environment2.$sno1);


header("Location:firstpage.php");

}


?>
</body>
</html>

<html><head><title>寝室分配系统</title></head><body><form method="post"><table><tr><td colspan="2"><img src="image/title.png" align="center"/></td></tr><tr><td colspan="2"><p><font color="blue">欢迎进入寝室分配系统！<br/>若你已提前选好了你未来的三个室友并已征得他们的同意，<br/>请在以下表单中登记你和你选择的三个同学的学号（不分先后次序）<br/>并结束寝室分配流程。</font></p></td></tr><tr><td><br/><input type="text" name="stu1"></td><td><br/><input type="text" name="stu2"></td></tr><tr><td><br/><input type="text" name="stu3"></td><td><br/><input type="text" name="stu4"></td></tr><tr><td align="right"><br/><input type="submit" name="zudui" value="提交"></td><td><br/><input type="reset" name="cz" value="重置"></td></tr></table></form><?phpif(isset($_POST['zudui'])){if($_POST["stu1"]==""||$_POST["stu2"]==""||$_POST["stu3"]==""||$_POST["stu4"]==""){echo "填写内容不得为空！";}else{$stu1=$_POST["stu1"];$stu2=$_POST["stu2"];$stu3=$_POST["stu3"];$stu4=$_POST["stu4"];//连接数据库	$host="localhost"; 	$user="root"; 	$password="";	$conn=mysql_connect($host,$user,$password);	mysql_query("set names utf8");	mysql_select_db("lab527",$conn);//获取当前最大房间数	$sql1="select max(room) from student";	$result=mysql_query($sql1)or die('error');	$num=mysql_fetch_row($result);	$room=$num[0];	if($room==0)	{		$room=601;	}	else	{		$room+=1;	}//为当前组好室友的同学分配寝室号（最大房间数加一）$sql2="update student set room='$room' where id='$stu1'or id='$stu2' or id='$stu3' or id='$stu4'" ;mysql_query($sql2)or die('error');//echo $stu1.$stu2.$stu3.$stu4;header("Location:firstpage.php");}}?><br/><p><font color="blue">若你没有提前选好你未来的室友，系统将<br/>根据你的多个方面为你尽量分配到理想的室友！<br/>请点击下面的按钮进入系统。</font></p><form method="post" ><input type="submit" name="change" value="进入学生信息修改系统"><input type="submit" name="admin" value="进入管理员专用系统"></form><?phpif(isset($_POST['change'])){header("Location:welcome.php");}if(isset($_POST['admin'])){header("Location:judge.php");}?></body></html>
<html>
  <head>
    <title>Login Page</title>
    
 
  </head>
  
  <body>

    <form method="post" >
    <table align="center">
<tr>
<td colspan="2"><img src="image/dormimg.png" align="center"/></td>
</tr>    
<tr>
    <td>AdminNumber:</td><td><input type="text" name="sno1" maxlength="10" size="30"></td>
    </tr>
    <tr>
    <td>AdminPassword:</td><td><input type="password" name="pw" maxlength="10" size="30"></td>
    </tr>
    <tr align="center">
    <td colspan="2"><input type="submit" name="submit" value="执行">&nbsp&nbsp<input type="reset" name="取消" value="Reset"></td>
    </tr>
    
    
    </table>
    </form>   
    <br/>
 <?php
    if(isset($_POST['submit']))
    {
        $host="localhost";
        $user="root";
        $password="";
        $conn=mysql_connect($host,$user,$password);
        mysql_query("set names 'utf8'");
        mysql_select_db("lab527",$conn);
        //计算未被安排的同学权重
        $sql="update student set weight=1000*sex+100*hobby+10*sleep+environment where room=0";
        mysql_query($sql)or die('error');

        //获取当前最大房间号
         $conn=mysql_connect($host,$user,$password);
        mysql_query("set names 'utf8'");
        mysql_select_db("lab527",$conn);
        $sql2="select max(room) from student";
        $result1=mysql_query($sql2)or die('error');
        $num=mysql_fetch_row($result1);
        $room=$num[0];

        //按权重以升序输出同学id 
        $conn=mysql_connect($host,$user,$password);
        mysql_query("set names 'utf8'");
        mysql_select_db("lab527",$conn);
        $sql1="select id from student where room=0 order by weight ASC";
        $result=mysql_query($sql1)or die('........');

        

        
        $roombuff=$room+1;
        $i=0;
        while ($idroom=mysql_fetch_array($result)) 
        {

            if($i/4==1)
            {
                $i=0;
                $roombuff+=1;
            }
            $conn=mysql_connect($host,$user,$password);
            mysql_query("set names 'utf8'");
            mysql_select_db("lab527",$conn);
            mysql_select_db("lab527",$conn);
            mysql_query("update student set room='$roombuff' where id=$idroom[0]")or die($idroom['id']);
            $i+=1;
        }

    }
?>
  </body>
</html>

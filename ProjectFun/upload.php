<?php
$var='..@TestingVideos@Haikyuu-volleyball@Hseason1@';
if((isset($_POST['f_dir']))&&(isset($_POST['f_desc'])))
{
    $id=$_POST['f_id'];
    $var0=$_POST['f_name'];
    $var0="'".$var0."'";
    $var1=$_POST['f_dir'];
    $var2=$_POST['f_for'];
    $var_f=$var2;
    $var2="'".$var2."'";
    $var3=$_POST['f_desc'];
    $var3="'".$var3."'";
    
    $addr=$var.'\\'.$var1.'.'.$var_f;
    $addr="'".$addr."'";
    date_default_timezone_set("Asia/Kolkata");
    $up_date=date("Y/m/d");
    $up_date="'".$up_date."'";
    $up_time=date("H:i a");
    $up_time="'".$up_time."'";
    
    if(mysql_connect('localhost','root',''))
    {
        if(mysql_select_db('funtube'))
        {
            $query="INSERT INTO video_desc(vid,name,address,descript,date_up,time_up,format) VALUES($id,$var0,$addr,$var3,$up_date,$up_time,$var2);";
            if(mysql_query($query))
            {
                echo '<html><script>alert("Inserted");</script></html>';
            }
        }
    }
}
?>
<html>
<body>
 <form method="post" action="upload.php" enctype="multipart/form-data">
     Enter the id :<input type="number" name="f_id"/>
    <br>
    <br>
    Enter the name :<input type="text" name="f_name"/>
    <br>
    <br>
    Select the directory:<input type="text" required name="f_dir"/>
    <br>
    <br>
    Format:<input type="text" required name="f_for" required/>
    Description:<textarea name="f_desc"></textarea>
    <br>
     <br>
    <input type="submit" value="Submit"/>
    </form>
    </body>
</html>
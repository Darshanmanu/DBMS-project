<?php
if(isset($_POST['comment']) && isset($_POST['vid']) && isset($_POST['uid']))
{
    $uid=$_POST['uid'];
    date_default_timezone_set("Asia/Kolkata");
    $up_date=date("Y/m/d");
    $up_date="'".$up_date."'";
    $up_time=date("H:i a");
    $up_time="'".$up_time."'";
    $message="'".mysql_real_escape_string($_POST['message'])."'";
    $vid=$_POST['vid'];
if(@mysql_connect('localhost','root',''))
{
    if(@mysql_select_db('funtube'))
    {
        $query="insert into comment_section(uid,content,time_comment,date_comment,vid) values($uid,$message,$up_time,$up_date,$vid);";
        if(mysql_query($query))
        {
        }
        else{   
            echo mysql_error();
            echo '<script>alert("Something went wrong..")</script>';
        }
    }
    
}
}

?>
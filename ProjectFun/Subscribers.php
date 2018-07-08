<?php
if(isset($_POST['uploader_id']) && isset($_POST['uid']) && isset($_POST['status']))
{
    $uploader_id=$_POST['uploader_id'];
    $uid=$_POST['uid'];
    $status=$_POST['status'];
        if(mysql_connect('localhost','root',''))
        {
            if(mysql_select_db('funtube'))
            {
                if($status=="Subscribe_it")
                {
                date_default_timezone_set("Asia/Kolkata");
                $up_date=date("Y/m/d");
                $up_date="'".$up_date."'";
                $up_time=date("H:i a");
                $up_time="'".$up_time."'";
                $query="insert into subscribe(uploader_id,uid,date,time) Values ($uploader_id,$uid,$up_date,$up_time);";
                if(mysql_query($query))
                {
                    setcookie('subscribe','true');
                }
                }
                else{
                    $query2="delete from subscribe where uploader_id=$uploader_id and uid=$uid;";
                    if(mysql_query($query2))
                    {
                        setcookie('subscribe','false');
                    }
                }
                
            }
        }
    
}
?>
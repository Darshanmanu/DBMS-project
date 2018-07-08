<?php
if(isset($_POST['vid']) && isset($_POST['uid']) && isset($_POST['views']))
{
    $vid=$_POST['vid'];
    $uid=$_POST['uid'];
    $views=$_POST['views'];
    if(mysql_connect('localhost','root',''))
    {
        if(mysql_select_db('funtube'))
        {
            $query="delete from history where vid=$vid and uid=$uid;";
            if(mysql_query($query))
            {
                date_default_timezone_set("Asia/Kolkata");
                $up_date=date("Y/m/d");
                $up_date="'".$up_date."'";
                $up_time=date("H:i a");
                $up_time="'".$up_time."'";
                $query2="insert into history(vid,uid,h_date,h_time) values($vid,$uid,$up_date,$up_time);";
                if(mysql_query($query2))
                {
                  $query3="update video_desc set views_count=$views where vid=$vid;";
                  if(mysql_query($query3))
                  {
                      
                  }
                }
                else{
                    echo mysql_error();
                }
            }
        }
    }
}

?>
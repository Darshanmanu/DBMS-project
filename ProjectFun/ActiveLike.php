<?php
if(isset($_POST['status']) && isset($_POST['vid']) && isset($_POST['uid']))
{
 if(mysql_connect('localhost','root',''))
  {
        if(mysql_select_db('funtube'))
        {
            $uid=$_POST['uid'];
            if($_POST['status']=='Liked')
          {
            $value=$_POST['Value']+1;
            $vid=$_POST['vid'];
            $query="UPDATE video_desc SET likehits=$value WHERE vid=$vid";
            if(mysql_query($query))
            {
                setcookie('likedstatus','true');
                date_default_timezone_set("Asia/Kolkata");
                $up_date=date("Y/m/d");
                $up_date="'".$up_date."'";
                $up_time=date("H:i a");
                $up_time="'".$up_time."'";
                $query2="INSERT into likeunliked(vid,uid,date,time,ulbit) Values($vid,$uid,$up_date,$up_time,1);";
                if($_COOKIE['unlikedstatus']=='true')
                {
                    $query4="DELETE FROM likeunliked WHERE vid=$vid AND uid=$uid;";
                    if(mysql_query($query4))
                    {
                    setcookie('unlikedstatus','false');
                    setcookie('checked','false');
                    if(mysql_query($query2))
                    {
                        if(isset($_POST['OPValue']))
                        {
                            $remLike=$_POST['OPValue'];
                            $remLike=$remLike-1;
                            $query1="UPDATE video_desc SET unlikehit=$remLike WHERE vid=$vid;";
                            if(mysql_query($query1))
                            {
                                echo "<script>window.location='Select.php';</script>";
                            }
                        }
                        
                    }
                    }
                }
                else if(mysql_query($query2))
                {
                  echo "<script>window.location='Select.php';</script>";
                }
                
            }    
            
                
          }
         else if($_POST['status']=='Unliked')
         {
             $value=$_POST['Value']+1;
            $vid=$_POST['vid'];
            $query="UPDATE video_desc SET unlikehit=$value WHERE vid=$vid";
            if(mysql_query($query))
            {
                setcookie('unlikedstatus','true');
                setcookie('checked','false');
                date_default_timezone_set("Asia/Kolkata");
                $up_date=date("Y/m/d");
                $up_date="'".$up_date."'";
                $up_time=date("H:i a");
                $up_time="'".$up_time."'";
                $query="INSERT into likeunliked(vid,uid,date,time,ulbit) Values($vid,$uid,$up_date,$up_time,0);";
                if($_COOKIE['likedstatus']=='true')
                {
                    $query4="DELETE FROM likeunliked WHERE vid=$vid AND uid=$uid;";
                    if(mysql_query($query4))
                    {
                    setcookie('likedstatus','false');
                    if(mysql_query($query))
                    {
                        if(isset($_POST['OPValue']))
                        {
                            $remLike=$_POST['OPValue'];
                            $remLike=$remLike-1;
                            $query1="UPDATE video_desc SET likehits=$remLike WHERE vid=$vid;";
                            if(mysql_query($query1))
                            {
                                echo "<script>window.location='Select.php';</script>";
                            }
                        }
                        
                    }
                    }
                }
                else if(mysql_query($query))
                {
                    echo "<script>window.location='Select.php';</script>";
                }
                
            }
             else 
                 mysql_error();
         }
         else if($_POST['status']=='Subscribe')
         {
             $value=$_POST['Value']+1;
            $vid=$_POST['vid'];
            $query="UPDATE video_desc SET unlikehit=$value WHERE vid=$vid";
            if(mysql_query($query))
            {
                echo "<script>window.location='Select.php';</script>";
            }
         }
        }
  }

}
?>
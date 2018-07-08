<?php
if(mysql_connect('localhost','root',''))
{
    if(mysql_select_db('funtube'))
    {
        if(isset($_POST['vid']) && isset($_POST['uid']) && isset($_POST['uploader_id']))
        {
        $vid=$_POST['vid'];    
        $uid=$_POST['uid'];
        $uploader_id=$_POST['uploader_id'];
        $query="SELECT ulbit FROM likeunliked WHERE vid=$vid AND uid=$uid;";
        if($q_run=mysql_query($query))
        {
            setcookie('checked','true');
            setcookie('prev_vid',$vid);
            if(mysql_num_rows($q_run)==1)
            {
                $out_result=mysql_result($q_run,0);
                if($out_result==0)
                {
                    setcookie('unlikedstatus','true');
                    setcookie('likedstatus','false');
                }
                else if($out_result==1)
                {
                     setcookie('likedstatus','true');
                     setcookie('unlikedstatus','false');
                }
            }
            else{
                setcookie('likedstatus','false');
                setcookie('unlikedstatus','false');
            } 
        }
        $query3="select sid from subscribe where uploader_id=$uploader_id and uid=$uid;";
               if($q_r=mysql_query($query3))
               {
                   if(mysql_num_rows($q_r)==1)
                   {
                       setcookie('subscribe','true');
                   }
                   else{
                       setcookie('subscribe','false');
                   }
               }
        }
    }
}

?>
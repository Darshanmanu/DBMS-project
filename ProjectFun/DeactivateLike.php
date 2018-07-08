<?php
if(isset($_POST['status']) && isset($_POST['vid']) && isset($_POST['Value']) && isset($_POST['uid']))
{
    if(mysql_connect('localhost','root',''))
    {
        if(mysql_select_db('funtube'))
        {
            $vid=$_POST['vid'];
            $uid=$_POST['uid'];
            $query="DELETE FROM likeunliked WHERE vid=$vid AND uid=$uid;";
            if(mysql_query($query))
            {
                $change_status=$_POST['status'];
                $diff=$_POST['Value']-1;
                if($change_status=='Like')
                {
                    $query2="UPDATE video_desc SET likehits=$diff WHERE vid=$vid ;";
                    if(mysql_query($query2))
                    {
                        setcookie('checked','false');
                    }
                    else{
                        mysql_error();
                        echo $diff;
                        die('Wrong in Liked');
                    }
                    
                }
                else{
                    $query2="UPDATE video_desc SET unlikehit=$diff WHERE vid=$vid ;";
                    if(mysql_query($query2))
                    {
                        setcookie('checked','false');
                    }
                    else{
                        die('Wrong in Unliked');
                    }
                }
                
            }
            else{
                die('Total Wrong');
            }
        }
    }
}
?>
<?php
$found=0;
$name;
$id=0;
$nname='';

if(isset($_POST['login_b']) && isset($_GET['name']))
{
    if(isset($_POST['uname']) && isset($_POST['psw']))
    {
        if(mysql_connect('localhost','root',''))
        {
            if(mysql_select_db('funtube'))
            {
                $name="'".$_POST['uname']."'";
                $pass="'".md5($_POST['psw'])."'";
                echo $name .' '.$pass;
                
                $query="SELECT u_id,u_name FROM user_info WHERE  u_email=$name AND U_pass=$pass ";
                
                if($query2=mysql_query($query))
                {
                    echo 'Getting here<br>';
                    if(mysql_num_rows($query2)>1)
                        die('Not Here buddy..');
                    else{
                         if(mysql_num_rows($query2)==0)
                         {
                             echo '<html><script>alert("User not found");</script></html>';
                             $name="'".$_GET['name']."'";
                             $found=1;
                         }
                         while($query3=mysql_fetch_assoc($query2))
                         {
                             setcookie('login','true');
                             setcookie('username',"'".$query3['u_name']."'");
                             setcookie('checked','false');
                             setcookie('prev_vid',-1);
                             setcookie('uid',$query3['u_id']);
                             echo 'Hello';
                             if(isset($_GET['nname']))
                             {
                                 
                                 $id=$_GET['id'];
                                 $nname="'".$_GET['nname']."'";
                             }
                             else{
                                 $name="'".$_GET['name']."'";
                             }
                             $found=1;
                         }
 
                    }
                }
                else{
                    echo 'Check your details';
                }
            }
            else{
                die('Busy try later');
            }
        }
        else{
            die('Something Went wrong..');
        }
    }
}
else if(isset($_POST['sign_b']))
{
    header("Location:signup.php");
}

if($found==1)
{
    echo "<script>window.location.href=$name;</script>";
    exit();
}
?>

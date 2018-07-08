<?php
echo '<script>alert("PHP");</script>';
if(isset($_POST['Value']))
{
    echo '<script>alert("PHP");</script>';
    $value=$_POST['Value'];
    if(mysql_connect('localhost','root',''))
    {
        if(mysql_select_db('funtube'))
        {
            $query="insert into see values($value);";
            if(mysql_query($query))
            {
                
            }
            else{
                echo mysql_error();
            }
        }
    }
}
?>
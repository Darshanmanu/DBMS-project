<?php
mysql_connect('localhost','root','');
if(mysql_select_db('funtube'))
{
    $query="SELECT * FROM video_desc WHERE vid=1";
    if($q_run=mysql_query($query))
    {
        $main_array;
        $count=0;
        while($q_row=mysql_fetch_assoc($q_run))
        {
            $var1=$q_row['address'];
            $var2=str_replace('@','\\',$var1);
            $var2="'".$var2."'";
            $var_n=$q_row['name'];
            $var3=$q_row['descript'];
            $var4=$q_row['date_up'];
            $var5=$q_row['time_up'];
            $array=array($var_n,$var2,$var3,$var4,$var5);
            $main_array[$count]=array();
            $main_array[$count]=$array;
        }
    }
    else{
        echo 'Failed';
    }
    
}
?>

<html>
<body>
    
    </body>

</html>
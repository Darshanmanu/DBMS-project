<?php
$address;
if(mysql_connect('localhost','root',''))
{
    if(mysql_select_db('funtube'))
    {
        $query="SELECT * FROM video_desc WHERE vid=1";
        if($q_run=mysql_query($query))
        {
            while($q_row=mysql_fetch_assoc($q_run))
            {
                $image_addr1=$q_row['image_addr'];
                $image_addr1=str_replace('@','/',$image_addr1);
                $image_addr1="'".$image_addr1."'";
                echo $image_addr1.'==1  <br>';
                //die('Died');
                $image_addr="../TestingVideos/Haikyuu-volleyball/Screen1/s1e1.png";
                $image_addr="'".$image_addr."'";
                
                echo $image_addr;
                echo "<html><body><img src=$image_addr1 width='200' height='200'/></body></html>";
            }
        }
    }
}
?>


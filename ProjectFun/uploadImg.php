<?php
$addr='..@TestingVideos@Haikyuu-volleyball@Screen1@';
$format=".png";
if(isset($_POST['a_name']))
{
    $add_name=$_POST['a_name'];
    $id=$_POST['n_name'];
    $address="'".$addr.$add_name.$format."'";
    if(mysql_connect('localhost','root',''))
  {
    if(mysql_select_db('funtube'))
    {
      $query="UPDATE video_desc SET image_addr=$address WHERE vid=$id";
      if(mysql_query($query))
      {
          echo "<html><script type='text/javascript'>alert('Inserted Successfully');</script></html>";
      }
        else {
            echo 'Not Inserted';
        }
    }
  }
    
}
?>

<html>
<body>
    <form method="post" action="uploadImg.php">
Enter id:<input type="number" name="n_name" required/>
<br>
<br>
Enter the address image:<input type="text" name="a_name" required />
<input type="submit" name="Submit" />
        </form>
    
</body>

</html>
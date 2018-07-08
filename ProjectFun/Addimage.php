<?php
if(isset($_FILES['image_pr']))
{
     echo 'Hello';
    echo $_FILES['image_pr']['name'];
   
}
?>

<form method="post" action="Addimage.php" enctype="multipart/form-data">
Select a image:<input type="file" name="image_pr" required />
<input type="submit" value="Submit" />
</form>
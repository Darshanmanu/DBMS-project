<?php
if(isset($_GET['name']))
{
$name="'".$_GET['name']."'";
setcookie('login','false');
setcookie('username','null');
setcookie('likedstatus','false');
setcookie('unlikedstatus','false');
setcookie('checked','false');
setcookie('prev_vid',-1);
setcookie('uid',-1);
setcookie('subscribe','false');
echo "<script>window.location.href=$name</script>";
}
?>
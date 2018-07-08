<?php
header("Expires: Thu, 19 Nov 1981 08:52:00 GMT"); //Date in the past
header("Cache-Control: no-store, no-cache, must-revalidate");
?>
<html>
<head>
    <title>funtube.com</title>
     <img src="download.png" width="70" height="70" />    
     <span style="color:brown; font-family:Comic Sans MS; font-size:50px;postion:relative">Funtube</span>
    <?php
    
    if(@$_COOKIE['login']=='false' || !isset($_COOKIE['username']))
    {
        
    echo '<style>
        *{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	font-size:16px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
	font-size:20px;
}
button:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 200px;
	height:200px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal {
	display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 
	padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
        .tlist1 ul{
            margin: 0;
            padding: 0;
            list-style: none;
            position: relative;
        }
        .tlist1 ul li a{
            display: block;
            padding: 25px;
            text-decoration: none;
            color: white;
        }
        
        .t1 
    </style>
    </head>
    <body>
    
     <body background="../background1.png">

<h1 style="text-align:center; font-size:50px; color:#fff">Funtube Login</h1>

<button onclick="document.getElementById('.'\'modal-wrapper\''.').style.display='.'\'block\''.'" style="width:150px; margin-top:-120px; margin-left:1090px; height:50px">Login/SignUp
</button>

<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" method="post" action="login.php?name='.'UnlikePage.php'.'" onsubmit="return checkLoginForm()">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('.'\'modal-wrapper\''.').style.display='.'\'none\''.'" class="close" title="Close PopUp">&times;</span>
      <img src="download.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center;color:brown; font-family:Comic Sans MS">Funtube</h1>
    </div>

    <div class="container">
    
      <input type="text" placeholder="Enter email" name="uname" id="u_n">
      <input type="password" placeholder="Enter Password" name="psw" id="p_w">        
      <button type="submit" name="login_b" id="log" >Login</button>
      <a href="signup.php"><button type="button" name="sign_b" id="sub">SignUp</button></a>    
      <input type="checkbox" style="margin:26px 30px;" onclick="rememberMe()"> Remember me      
      <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
    </div>
    
  </form>
  
  
</div>

<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById("modal-wrapper");
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function rememberMe()
{
    alert("Ok we use cookies");
}
    
function checkLoginForm()
{
    
    var user=document.getElementById("u_n").value;
    var pass=document.getElementById("p_w").value;
    if((user.indexOf("@")>-1) &&(pass.length >=7))
        return true;
    else {
        alert("Please check your details");
        return false;
    }
}


</script>';
    }
    else{
        
        echo '<style>
        *{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	font-size:16px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
	font-size:20px;
}
button:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 50px;
	height:50px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal {
	display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 
	padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
        .tlist1 ul{
            margin: 0;
            padding: 0;
            list-style: none;
            position: relative;
        }
        .tlist1 ul li a{
            display: block;
            padding: 25px;
            text-decoration: none;
            color: white;
        }
    
    </style>
    <img src="user.png" alt="Avatar" class="avatar" style="margin-left:800px"><span style="font-family:Comic Sans MS;font-weight:bold;font-size:24px;margin-top:-20px">'.@$_COOKIE['username'].'</span>
    <br>
    <a href="Signout.php?name='.'UnlikePage.php'.'"><button  style="width:150px; margin-top:0px; margin-left:1080px; height:50px">SignOut
</button></a>
    
    ';
        
    }
    ?>
     <form method="post" action="Mainpage.php">
     <center><input style="font-size:14pt;height:30px;width:520px;" type="text" name="user_input"/>
         <input style="width: 5em;  height: 2.3em; margin-left:-30px" type="submit" value="&#128269" name="submit"/>
         </center>
    </form> 
     <br>
     <br>
     <br>
     <hr style="height:2px;background-color: #333;border:none">
     <table border="0 solid black" class="t1">
         <tr>
            <th>
            <a  style="display:block;padding:25px;text-decoration:none;color:black
                       ;width:210px;height:10px;font-family:Comic Sans MS;border:0px solid black" href="Startpage.php"><center><img src="house-logo-hi.png" width="22px" height="22px" />       Home        </center></a></th></tr>
         <tr><th><a  style="display:block;padding:25px;font-family:Comic Sans MS;text-decoration:none;color:black;width:210px;height:10px;border:0px solid black;padding-top:200px" href="Trending.php"><center><img src="fire-icon-homepage.png" width="22px" height="22px" />       Trending        </center></a></th></tr>
         <tr><th><a  style="display:block;padding:25px;text-decoration:none;color:black;width:210px;height:10px;font-family:Comic Sans MS;border:0px solid black;padding-top:200px" href="user_subscribers.php"><center><img src="sub.png" width="22px" height="22px" />       Subscribed        </center></a></th></tr>
         <tr><th><a  style="display:block;padding:25px;text-decoration:none;color:black;width:210px;height:10px;font-family:Comic Sans MS;border:0px solid black;padding-top:200px" href="LikedVideos.php"><center><img src="like4.png" width="22px" height="22px" />       Liked Videos        </center></a></th></tr>
         <tr><th><a  style="display:block;padding:25px;text-decoration:none;color:#808000
                  ;width:213px;height:13px;font-family:Comic Sans MS;border:0px solid black;padding-top:200px;font-size:24px;" href="#"><center><img src="unlike2.png" width="28px" height="28px" />      Unliked Videos        </center></a></th></tr>
         <tr><th><a  style="display:block;padding:25px;text-decoration:none;color:black;width:210px;height:10px;font-family:Comic Sans MS;border:0px solid black;padding-top:200px" href="Historypage.php"><center><img src="clock3.png" width="22px" height="22px" />       History        </center></a></th></tr>
         <tr><th><a  style="display:block;padding:25px;text-decoration:none;color:black;width:210px;height:10px;font-family:Comic Sans MS;border:0px solid black;padding-top:200px" href="#"><center><img src="help2.png" width="22px" height="22px" />       Help        </center></a></th></tr>


<?php
if($_COOKIE['login']=='false')
{
    echo '<center><strong>You must login to view UnLiked videos</strong></center>';
}
if($_COOKIE['login']=='true')
{
    $uid=$_COOKIE['uid'];
    $liked_array;
    $liked_count=0;
    $user_array;
    $user_name;
   if(mysql_connect('localhost','root',''))
   {
       if(mysql_select_db('funtube'))
       {
           $query="select video_desc.vid,video_desc.uid,views_count,name,descript,date_up,time_up,image_addr,time,date from video_desc,likeunliked where video_desc.vid=likeunliked.vid and video_desc.vid in (select vid from likeunliked where uid=$uid and ulbit=0) and likeunliked.uid=$uid order by date,time;";
           if($query_res=mysql_query($query))
           {
               while($fet_res=mysql_fetch_assoc($query_res))
               {
                 $user_array[$liked_count]=$fet_res['uid'];
                 $liked_array[$liked_count]=$fet_res;
                 $liked_count=$liked_count+1;   
               }
               
               for($i=0;$i<$liked_count;$i++)
               {
                   $query3="select u_name from user_info where u_id=$user_array[$i];";
                   if($q_rr=mysql_query($query3))
                   {
                       if($q_aa=mysql_fetch_assoc($q_rr))
                       {
                           $user_name[$i]=$q_aa['u_name'];
                       }
                   }
               }
           }
           else{
               echo mysql_error();
           }
       }
   }
    echo "<table border='0 solid black' style='postiton:absolute;margin-top:-1490px;margin-left:350px;'>";
         for($i=0;$i<$liked_count;$i++)
         {
          $image_src=str_replace('@','/',$liked_array[$i]['image_addr']);
          $vid=$liked_array[$i]['vid'];
          $name=$liked_array[$i]['name'];
          $views=$liked_array[$i]['views_count'];
          $descript=$liked_array[$i]['descript'];
          $uploaded=$liked_array[$i]['date_up'].' '.$liked_array[$i]['time_up']; 
          $liked_date=$liked_array[$i]['date'].' '.$liked_array[$i]['time'];
          echo "<tr>
                <td colspan='2' style='padding-top:1em'><img src=$image_src width='330' height='200'/></td>
                <td style='width:500px;padding-top:1em'><a href='Select.php?id=$vid&name=$name' style='text-decoration:none;color:black'><span style='font-family:times new roman; font-weight:bold;font-size:30px'>$name</span><br><span style='font-size:15px'>$user_name[$i]  Views $views</span><br><br><br></a><span style='font-size:15px' >$descript</span><br><span style='font-size:15px'>Uploaded on :$uploaded</span><br><span style='font-size:15px'>Liked on:$liked_date</span></td>
          </tr>";
               
         }
    echo '</table>';
}
?>



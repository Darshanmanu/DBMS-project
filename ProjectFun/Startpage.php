<?php
header("Expires: Thu, 19 Nov 1981 08:52:00 GMT"); //Date in the past
header("Cache-Control: no-store, no-cache, must-revalidate");
if(!isset($_COOKIE['login']))
    setcookie('login','false');
    setcookie('prev_vid',-1);
$array;
$count;
$check=0;
$query_entered;

    if(mysql_connect('localhost','root',''))
    {
        
        if(mysql_select_db('funtube'))
        {
            
            $query="SELECT * FROM video_desc";
            if($query_run=mysql_query($query))
            {
                $count=0;
                while($query_row=mysql_fetch_assoc($query_run))
                {
                  $uploader='Darshan';
                  $name=$query_row['name'];
                  $date=$query_row['date_up'];
                  $time=$query_row['time_up'];
                  $image_src=$query_row['image_addr'];
                  $id=$query_row['vid'];
                  $image_src=str_replace('@','/',$image_src);
                  $image_src="'".$image_src."'";
                  $uploaded_on=$date."  ".$time;
                  $array[$count]=array();
                  $a_result=array($name,$uploader,$uploaded_on,$image_src,$id);
                  $array[$count]=$a_result;
                  $count=$count+1;
            
                }
            }
            else{
                die('Something went wrong please refresh the page');
            }

      }
        else{
            die('Unable connect to database sorry for the inconivence');
        }
    }
    else{
        die('Unable connect to database sorry for the inconivence');
    }


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
  
  <form class="modal-content animate" method="post" action="login.php?name='.'Startpage.php'.'" onsubmit="return checkLoginForm()">
        
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
    <a href="Signout.php?name='.'Startpage.php'.'"><button  style="width:150px; margin-top:0px; margin-left:1080px; height:50px">SignOut
</button></a>
    
    ';
        
    }
    ?>
     <form method="post" action="Mainpage.php">
     <center><input style="font-size:14pt;height:30px;width:520px;position:relative;margin-top:-350px" type="text" name="user_input" required/>
         <input style="width: 5em;  height: 2.3em; margin-left:-30px;position:relative;margin-top:-350px" type="submit" value="&#128269" name="submit"/>
         </center>
     
      </form>  
     <br>
     <br>
     <br>
     <hr style="height:2px;background-color: #333;border:none">
     <table border="0 solid black" class="t1">
         <tr>
            <th>
            <a  style="display:block;padding:25px;text-decoration:none;color:#808000
;background-color:#F4A460
                       ;width:213px;height:13px;font-family:Comic Sans MS;font-weight:bold;font-size:24px;border:0px solid black" href="#"><center><img src="house-logo-hi.png" width="28px" height="28px" />       Home        </center></a></th>
             
                <?php 
                $a=0;
                $b=1;
                $c=2;
        
            for($i=0;$i<3;$i++)
            {
                @$check=$i;
                $new_array=array();
                $new_array=$array[$i];
                echo '<th colspan="2"><img src='.$new_array[3].' width="330" height="200"/><br>   <a id="ah" href="Select.php?id='.$new_array[4].'&name='.$new_array[$a].'" style="text-decoration:none;color:black;font-weight:bold;font-size:20px;font-family :courier"><span style="font-size:20px">'.$new_array[$a].'</span></a><br><span style="font-size:15px;">uploaded by:'.$new_array[$b].' <br>uploded on:'.$new_array[$c].'</span></th>';
            }
        ?>    
             
             
         </tr>
            <tr><th><a  style="display:block;padding:25px;font-family:Comic Sans MS;text-decoration:none;color:black;width:210px;height:10px;border:0px solid black" href="Trending.php"><center><img src="fire-icon-homepage.png" width="22px" height="22px" />       Trending        </center></a></th>
         
                <?php 
                $a=0;
                $b=1;
                $c=2;
        
            for($i=3;$i<6;$i++)
            {
                @$check=$i;
                $new_array=array();
                $new_array=$array[$i];
                echo '<th colspan="2"><img src='.$new_array[3].' width="330" height="200"/><br>   <a id="ah" href="Select.php?id='.$new_array[4].'&name='.$new_array[$a].'" style="text-decoration:none;color:black;font-weight:bold;font-size:20px;font-family :courier"><span style="font-size:20px">'.$new_array[$a].'</span></a><br><span style="font-size:15px;">uploaded by:'.$new_array[$b].' <br>uploded on:'.$new_array[$c].'</span></th>';
            }
        ?>
         </tr>
                 <tr><th><a  style="display:block;padding:25px;text-decoration:none;color:black;width:210px;height:10px;font-family:Comic Sans MS;border:0px solid black" href="user_subscribers.php"><center><img src="sub.png" width="22px" height="22px" />       Subscribed        </center></a></th>
         
                <?php 
                $a=0;
                $b=1;
                $c=2;
        
            for($i=6;$i<9;$i++)
            {
                @$check=$i;
                $new_array=array();
                $new_array=$array[$i];
                echo '<th colspan="2"><img src='.$new_array[3].' width="330" height="200"/><br>   <a id="ah" href="Select.php?id='.$new_array[4].'&name='.$new_array[$a].'" style="text-decoration:none;color:black;font-weight:bold;font-size:20px;font-family :courier"><span style="font-size:20px">'.$new_array[$a].'</span></a><br><span style="font-size:15px;">uploaded by:'.$new_array[$b].' <br>uploded on:'.$new_array[$c].'</span></th>';
            }
        ?>
         </tr>
                 <tr><th><a  style="display:block;padding:25px;text-decoration:none;color:black;width:210px;height:10px;font-family:Comic Sans MS;border:0px solid black" href="LikedVideos.php"><center><img src="like4.png" width="22px" height="22px" />       Liked Videos        </center></a></th>
                    
                <?php 
                $a=0;
                $b=1;
                $c=2;
        
            for($i=9;$i<12;$i++)
            {
                @$check=$i;
                $new_array=array();
                $new_array=$array[$i];
                echo '<th colspan="2"><img src='.$new_array[3].' width="330" height="200"/><br>   <a id="ah" href="Select.php?id='.$new_array[4].'&name='.$new_array[$a].'" style="text-decoration:none;color:black;font-weight:bold;font-size:20px;font-family :courier"><span style="font-size:20px">'.$new_array[$a].'</span></a><br><span style="font-size:15px;">uploaded by:'.$new_array[$b].' <br>uploded on:'.$new_array[$c].'</span></th>';
            }
        ?>
         
         </tr>
                 <tr><th><a  style="display:block;padding:25px;text-decoration:none;color:black;width:210px;height:10px;font-family:Comic Sans MS;border:0px solid black" href="UnlikePage.php"><center><img src="unlike2.png" width="22px" height="22px" />       Unliked Videos        </center></a></th>
         
         <?php 
                $a=0;
                $b=1;
                $c=2;
        
            for($i=12;$i<15;$i++)
            {
                @$check=$i;
                $new_array=array();
                $new_array=$array[$i];
                echo '<th colspan="2"><img src='.$new_array[3].' width="330" height="200"/><br>   <a id="ah" href="Select.php?id='.$new_array[4].'&name='.$new_array[$a].'" style="text-decoration:none;color:black;font-weight:bold;font-size:20px;font-family :courier"><span style="font-size:20px">'.$new_array[$a].'</span></a><br><span style="font-size:15px;">uploaded by:'.$new_array[$b].' <br>uploded on:'.$new_array[$c].'</span></th>';
            }
        ?>
         
         </tr>
                 <tr><th><a  style="display:block;padding:25px;text-decoration:none;color:black;width:210px;height:10px;font-family:Comic Sans MS;border:0px solid black" href="Historypage.php"><center><img src="clock3.png" width="22px" height="22px" />       History        </center></a></th>
                
                     <?php 
                $a=0;
                $b=1;
                $c=2;
        
            for($i=15;$i<18;$i++)
            {
                @$check=$i;
                $new_array=array();
                $new_array=$array[$i];
                echo '<th colspan="2"><img src='.$new_array[3].' width="330" height="200"/><br>   <a id="ah" href="Select.php?id='.$new_array[4].'&name='.$new_array[$a].'" style="text-decoration:none;color:black;font-weight:bold;font-size:20px;font-family :courier"><span style="font-size:20px">'.$new_array[$a].'</span></a><br><span style="font-size:15px;">uploaded by:'.$new_array[$b].' <br>uploded on:'.$new_array[$c].'</span></th>';
            }
        ?>
         </tr>
                 <tr><th><a  style="display:block;padding:25px;text-decoration:none;color:black;width:210px;height:10px;font-family:Comic Sans MS;border:0px solid black" href="#"><center><img src="help2.png" width="22px" height="22px" />       Help        </center></a></th>
                
                                     <?php 
                $a=0;
                $b=1;
                $c=2;
        
            for($i=18;$i<21;$i++)
            {
                @$check=$i;
                $new_array=array();
                $new_array=$array[$i];
                echo '<th colspan="2"><img src='.$new_array[3].' width="330" height="200"/><br>   <a id="ah" href="Select.php?id='.$new_array[4].'&name='.$new_array[$a].'" style="text-decoration:none;color:black;font-weight:bold;font-size:20px;font-family :courier"><span style="font-size:20px">'.$new_array[$a].'</span></a><br><span style="font-size:15px;">uploaded by:'.$new_array[$b].' <br>uploded on:'.$new_array[$c].'</span></th>';
            }
        ?>
         </tr>
        </table>
       
    </body>

</html>
<?php
if(isset($_POST['e_mail']) && isset($_POST['psw']) && isset($_POST['uname']))
{
    if(mysql_connect('localhost','root',''))
    {
        if(mysql_select_db('funtube'))
        {
            $user_name="'".$_POST['uname']."'";
            $user_pass="'".md5($_POST['psw'])."'";
            $user_email="'".$_POST['e_mail']."'";
            $user_like=0;
            $user_unlike=0;
            $user_subs=0;
            echo "$user_name.  .$user_pass.  .$user_email";
            $query="INSERT INTO user_info(u_name,u_pass,u_email,u_like,u_unlike,u_sub) VALUES($user_name,$user_pass,$user_email,$user_like,$user_unlike,$user_subs);";
            if(mysql_query($query))
            {
                echo '<html><script>alert("Welcome to funtube");</script></html>';
                 echo "<script>window.location.href='Startpage.php';</script>";
            }
            else{
                echo '<html><script>alert("Something Went wrong");</script></html>';
            }
        }
        else{
            die('Try later something is wrong');
        }
    }
    else{
        die('Something went wrong..');
    }
}

?>
<html>
<title>Modal Popup Box</title>
<style>
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
</style>
</style>
<body background="../background1.png">

<h1 style="text-align:center; font-size:50px; color:#fff">Sign Up</h1>



<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" method="post" action="signup.php" onsubmit="return callScriptChecker()">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="download.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center;color:brown; font-family:Comic Sans MS">Funtube</h1>
    </div>

    <div class="container">
    
      <input type="text" placeholder="Enter Username of size greater than 5" name="uname" id="u_n">
      <input type="password" placeholder="Enter Password of size greater than 6" name="psw" id="p_w">        
      <input type="text" placeholder="Enter Email" name="e_mail" id="e_m">        
      <button type="submit" name="sign_b">SignUp</button>    
    </div>
    
  </form>
  
</div>

<script>
// If user clicks anywhere outside of the modal, Modal will close
document.getElementById('modal-wrapper').style.display='block';
    
var modal = document.getElementById('modal-wrapper');
window.onload = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function callScriptChecker()
{
    var user_name=document.getElementById('u_n').value;
    var pass_name=document.getElementById('p_w').value;
    var e_mail=document.getElementById('e_m').value;
    if(user_name.length<=5 || pass_name.length <=6)
    {
        alert("Please check username and password");
            return false;
    }
    if(!(e_mail.length>0) || (e_mail.indexOf('@')<=-1))
    {
        alert("Please provide valid email");
        return false;
    }
    return true;
}
    </script>
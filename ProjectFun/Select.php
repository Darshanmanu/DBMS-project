<?php
header("Expires: Thu, 19 Nov 1981 08:52:00 GMT"); //Date in the past
header("Cache-Control: no-store, no-cache, must-revalidate");
$main_address;
$nameq;
$uploder_nameq;
$descq;
$uploaded_onq;
$array;
$count;
$check=0;
$vid;
$vname;
$likehits;
$unlikehits;
$views;
$uploader_name;
$uploader_id;
$selected_array;
$selected_count=0;
$space_counter=0;
if(!isset($_COOKIE['login']))
    setcookie('login','false');
if(isset($_GET['id']) && isset($_GET['name']))
{
    $vid=$_GET['id'];
    $vname=$_GET['name'];
    setcookie('tempid',$vid);
    setcookie('tempname',$vname);
}
else{
    $vid=$_COOKIE['tempid'];
    $vname=$_COOKIE['tempname'];
}
if(@mysql_connect('localhost','root',''))
    {
        if(@mysql_select_db('funtube'))
        {
            $uploader_id;
            $query="SELECT * FROM video_desc WHERE vid=$vid";
            if($r_query=mysql_query($query))
            {
                if($a_query=mysql_fetch_assoc($r_query))
                {
                    $main_address=str_replace('@','/',$a_query['address']);
                    $nameq=$a_query['name'];
                    $descq=$a_query['descript'];
                    $uploader_id=$a_query['uid'];
                    $uploader_nameq='Darshan';
                    $uploaded_onq=$a_query['date_up'].' '.$a_query['time_up'];
                }
                
                $query3="select u_name from user_info where u_id=$uploader_id;";
                if($up_res=mysql_query($query3))
                {
                    if($up_fetch=mysql_fetch_assoc($up_res))
                    {
                        $uploader_name=$up_fetch['u_name'];
                    }
                }
                else{
                    echo mysql_error();
                    die("Error");
                }
            }
            
            $query_entered=$vname;
            $query_entered=callSpiltFunction($query_entered);
            $query="SELECT vid,name,descript,image_addr,time_up,date_up FROM video_desc WHERE (name LIKE $query_entered OR descript LIKE $query_entered ) and vid!=$vid;";
            if($query_run=mysql_query($query))
            {
                $total_result=mysql_num_rows($query_run);
                while($query_row=mysql_fetch_assoc($query_run))
                {
                  $selected_array[$selected_count]=$query_row;
                  $selected_count=$selected_count+1;
            
                }
                
            }
        }
        else{
            die('Something Went Wrong!!');
        }
    }
    else{
        die('Error in Connection');
    }

function callSpiltFunction($String)
{
  $sel_arr=explode(" ",$String);
  $sel_ret_string="";
  $sel_count_search=0;
  $sel_length=sizeof($sel_arr);  
  foreach($sel_arr as $sel_v)
  {
      if($sel_count_search==$sel_length-1)
      {
          $sel_ret_string=$sel_ret_string."'%$sel_v%'";
      }
      else
      $sel_ret_string=$sel_ret_string."'%$sel_v%' or ";
      $sel_count_search=$sel_count_search+1;
  }
  return $sel_ret_string;
}
?>

<html>
    <title>funtube.com</title>
     <img src="download.png" width="70" height="70" />    
     <span style="color:brown; font-family:Comic Sans MS; font-size:50px">Funtube</span>
    <?php
    if(@$_COOKIE['login']=='false' || !isset($_COOKIE['username']) || $_COOKIE['username']=='null')
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

<button onclick="document.getElementById('.'\'modal-wrapper\''.').style.display='.'\'block\''.'" style="width:150px; margin-top:-120px; margin-left:1030px; height:50px">Login
</button>

<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" method="post" action="login.php?name='.'Select.php?nname='.'Select.php'.'" onsubmit="return checkLoginForm()">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('.'\'modal-wrapper\''.').style.display='.'\'none\''.'" class="close" title="Close PopUp">&times;</span>
      <img src="download.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center;color:brown; font-family:Comic Sans MS">Funtube</h1>
    </div>

    <div class="container">
    
      <input type="text" placeholder="Enter email" name="uname" id="u_n">
      <input type="password" placeholder="Enter Password" name="psw" id="p_w">        
      <button type="submit" name="login_b" id="log" >Login</button>
      <a href="login.php?name='.'signup.php?name='.'Select.php'.'"><button type="button" name="sign_b" id="sub">SignUp</button></a>    
      <input type="checkbox" style="margin:26px 30px;" onclick="rememberMe()"> Remember me      
      <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
    </div>
    
  </form>
  
  
</div>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
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
    <a href="Signout.php?name='.'Select.php'.'"><button  style="width:150px; margin-top:0px; margin-left:1080px; height:50px">SignOut
</button></a>
    
    ';
        
    }
    ?>
    <?php
      if(mysql_connect('localhost','root',''))
     {
         if(mysql_select_db('funtube'))
         {
             $query="SELECT likehits,unlikehit,views_count from video_desc where vid=$vid;";
             if($run_query=mysql_query($query))
             {
                 if($assoc=mysql_fetch_assoc($run_query))
                 {
                    $likehits=$assoc['likehits'];
                    $unlikehits=$assoc['unlikehit'];
                    $views=$assoc['views_count'];
                    $views=$views+1;
                 }
             }
             else{
                 die('Error');
             }
         }
     }
    
    ?>
    <style>
        
        table{
            border: 1px solid black;
            margin-left: 850px;
            margin-bottom: 10px
        }
        
       
        tr{
            text-align:left;
        }
        td{
            text-align: left;
        }
    </style>
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <script>
        
    window.onload=function()
    {
        var loginvid=<?php echo $_COOKIE['login'];?>;
        var ischecked=<?php echo $_COOKIE['checked'];?>;
        var vid=<?php echo $vid; ?>;
        var prev=<?php echo $_COOKIE['prev_vid'];?>;
        var uid=<?php echo $_COOKIE['uid'];?>;
        var uploader_id=<?php echo $uploader_id; ?>;
        var views=<?php echo $views; ?>;
        
        if((loginvid && !ischecked)||(prev!=vid && loginvid))
        {
           $.ajax({
           url: 'SetupEverything.php',
           type: 'POST',
           data: {
             vid:vid,
             uid:uid,
             uploader_id:uploader_id
           },
            success: function(msg) {
                location.reload();
          }               
         });
             
        }
        
        $.ajax({
           url: 'InsertHistory.php',
           type: 'POST',
           data: {
             vid:vid,
             uid:uid,
             views:views
           },
            success: function(msg) {
          }               
         });
        
        var vid2=<?php echo $_COOKIE['likedstatus'];?>;
        if(vid2)
        {
            addLike();
        }
        else{
            var vid3=<?php echo $_COOKIE['unlikedstatus'];?>;
            if(vid3)
             {
                 addUnlike();
             }
        }
        var sub_status=<?php echo $_COOKIE['subscribe'];?>;
        if(sub_status)
        {
            addSubscribe();
        }
        else{
            removeSubscribe();
        }
    }
    function callLikeFunction()
    {
        var uid=<?php echo $_COOKIE['uid'];?>;
      var sd=document.cookie.split("login");
    
            var sd2=sd[1].split("=");
            var sd3=sd2[1].split(";");
            if(sd3[0]=="false")
           {
               alert("You must login..");
               return ;
           }
     if(document.getElementById("text_l").style.color=="black"||document.getElementById("img_l").src=="http://localhost:8080/ProjectFun/black.png")
      {
        alert("you Liked this video");
        addLike();
        var vid=<?php echo $vid; ?>;
        var vid2=<?php echo $likehits;?>;
        var vid3=<?php echo $unlikehits;?>;
         $.ajax({
           url: 'ActiveLike.php',
           type: 'POST',
           data: {
             status:'Liked',   
             vid:vid,
             Value:vid2,
             uid:uid,
             OPValue:vid3
           },
            success: function(msg) {
                location.reload();
          }               
         });
      }
       else
       {
           removeLike();
           var vid=<?php echo $vid; ?>;
            var vid2=<?php echo $likehits;?>;
            var vid3=<?php echo $unlikehits;?>;
             $.ajax({
                url: 'DeactivateLike.php',
                type: 'POST',
                data: {
                status:'Like',   
                vid:vid,
                uid:uid,
                Value:vid2
           },
            success: function(msg) {
                location.reload();
          }               
         });
          
       }
        
       }
       
        
       function callunLikeFunction()
        {
            var uid=<?php echo $_COOKIE['uid'];?>;
            var sd=document.cookie.split("login");
            var sd2=sd[1].split("=");
            var sd3=sd2[1].split(";");
            if(sd3[0]=="false")
           {
               alert("You must login..");
               return ;
           } 
            if(document.getElementById("text_u").style.color=="black"||document.getElementById("img_u").src=="http://localhost:8080/ProjectFun/unlikeblack.png")
                {
                  alert("You disliked this video");
                  addUnlike(); 
                  var vid =<?php echo $vid;?>;
                  var vid2=<?php echo $unlikehits;?>;
                 var vid3=<?php echo $likehits;?>;
                 $.ajax({
                url: 'ActiveLike.php',
                type: 'POST',
                data: {
                status:'Unliked',   
                vid:vid,
                Value:vid2,
                uid:uid,
                OPValue:vid3
           },
            success: function(msg) {
                location.reload();
          }               
         });
                }
            else{
                removeUnlike();
                 var vid=<?php echo $vid; ?>;
                var vid2=<?php echo $likehits;?>;
                var vid3=<?php echo $unlikehits;?>;
                $.ajax({
                url: 'DeactivateLike.php',
                type: 'POST',
                data: {
                status:'UnLike',   
                vid:vid,
                uid:uid,
                Value:vid3
           },
            success: function(msg) {
                location.reload();
          }               
         });
                                
             }
        }
        
        function addLike()
        {
            document.getElementById("img_l").src="b2.png";
            document.getElementById("text_l").style.color="blue";
            document.getElementById("text_l").style.fontWeight="bold";
            var ref3=document.getElementById("img_u");
                ref3.src="unlikeblack.png";
                ref3.width="35";
                ref3.style.marginLeft="700";
                
                var ref4=document.getElementById("text_u");
                ref4.style.marginLeft="740";
                ref4.style.fontWeight="none";
                ref4.style.color="black";
                
        }
        
        function removeLike()
        {
            document.getElementById("img_l").src="black.png";
           document.getElementById("text_l").style.color="black";
           document.getElementById("text_l").style.fontWeight="none";
        }
        
        function addUnlike()
        {
            var ref= document.getElementById("img_u");
           
            ref.src="unlikeb2.png";
            ref.width="70";
            ref.style.marginLeft="680";
            var ref2=document.getElementById("text_u");
            ref2.style.marginLeft="735";
            ref2.style.fontWeight="bold";
            ref2.style.color="blue";  
            document.getElementById("img_l").src="black.png";
            document.getElementById("text_l").style.color="black";
            document.getElementById("text_l").style.fontWeight="none";
        }
        
        function removeUnlike()
        {
            var ref3=document.getElementById("img_u");
                ref3.src="unlikeblack.png";
                ref3.width="35";
                ref3.style.marginLeft="700";
                
                var ref4=document.getElementById("text_u");
                ref4.style.marginLeft="740";
                ref4.style.fontWeight="none";
                ref4.style.color="black";
               // window.location="ActiveLike.php?status='Liked'";
        }
        
        function sendComment()
        {
            var uid=<?php echo $_COOKIE['uid'];?>;
            var comment_value=document.getElementById('comment_section').value;
            if(comment_value.length==0)
            {
                alert("Comment something");
                return false;
            }

            var vid=<?php echo $vid; ?>;
            $.ajax({
                url: 'commentsection.php',
                type: 'POST',
                data: {
                comment:comment_value,
                vid:vid,
                message:comment_value,
                uid:uid
           },
            success: function(msg) {
                location.reload();
          }               
         });
        }
        
        function Subscribeme()
        {
            var sub_btn=document.getElementById("subscribe_btn");
            var uploader_id=<?php echo $uploader_id; ?>;
            var uid=<?php echo $_COOKIE['uid'];?>;
            if(sub_btn.style.backgroundColor=="green")
            {
                $.ajax({
                url: 'Subscribers.php',
                type: 'POST',
                data: {
                uploader_id:uploader_id,
                uid:uid,
                status:"Subscribe_it"
           },
            success: function(msg) {
                location.reload();
          }               
         });
                
            }
            else{
                $.ajax({
                url: 'Subscribers.php',
                type: 'POST',
                data: {
                uploader_id:uploader_id,
                uid:uid,
                status:"UnSubscribe_it"
           },
            success: function(msg) {
                location.reload();
          }               
         });
            }
        }
        
        function addSubscribe()
        {
            var sub_but=document.getElementById("subscribe_btn");
            sub_but.style.backgroundColor="grey";
        }
        
        function removeSubscribe()
        {
            var sub_but=document.getElementById("subscribe_btn");
            sub_but.style.backgroundColor="green";
        }
    </script>
    
<body>
    
    
     <form method="post" action="Mainpage.php">
     <center><input style="font-size:14pt;height:30px;width:520px;" type="text" name="user_input"/>
         <input style="width: 5em;  height: 2.3em; margin-left:-30px" type="submit" value="&#128269" name="submit"/>
         </center>
    </form>
     <br>
     <br>
     <br>
    <video width="853 height="480" style='border:1px #999 solid' src="<?php echo $main_address; ?>" controls autoplay controlsList="nodownload"></video>
    <?php
    echo "<br><span style='font-family:Georgia, serif;font-size:15px;font-family:times new roman'>$views Views</span><br><br><span style='font-family:times new roman;'><h1 style='font-family:times new roman;'>$nameq</h1></span>
    <img id='img_l' src='black.png' width='35' height='35' style='position:absolute;margin-left:600px;margin-top:-40px' onclick='callLikeFunction()'><span id='text_l' style='font-family:Comic Sans MS;font-size:20px;position:absolute;margin-left:640px;margin-top:-30px' onclick='callLikeFunction()'>Like</span><span style='position:absolute;margin-left:630px;margin-top:0px;font-size:15px;'>$likehits</span><img id='img_u' src='unlikeblack.png' width='35' height='33' style='position:absolute;margin-left:700px;margin-top:-38px' onclick='callunLikeFunction()'><span id='text_u' style='font-family:Comic Sans MS;font-size:20px;position:absolute;margin-left:740px;margin-top:-30px' onclick='callunLikeFunction()'>unlike</span><span style='position:absolute;margin-left:730px;margin-top:0px;font-size:15px;'>$unlikehits</span><span style='font-weight:bold;font-family:courier'>$descq</span><br><br><span style='font-weight:bold;font-family:times new roman'>Uploaded on:</span>$uploaded_onq<br><br><hr style='height:2px;background-color: #333;border:none;width:63%'><br>";
         if($_COOKIE['login']=='true')
         {
             $sub_status_print;
             if($_COOKIE['subscribe']=='true')
             {
                 $sub_status_print="Subscribed";
             }
             else{
                 $sub_status_print="Subscribe";
             }
             echo "<img src='user.png' style='width:50px;height:50px;border-radius:50px;position:absolute'>";
             echo "<span style='font-family:times new roman;font-size:25px;font-weight:bold;position:absolute;margin-left:50px;margin-top:10px'>$uploader_name</span>";
             echo '<br><button  id="subscribe_btn" style="position:absolute;width:220px; margin-top:-20px; margin-left:620px; height:50px;background-color:green" onclick="Subscribeme()">'.$sub_status_print.'
</button><br>';
         }
        else{
            echo "<img src='user.png' style='width:50px;height:50px;border-radius:50px;position:absolute'>";
             echo "<span style='font-family:times new roman;font-size:25px;font-weight:bold;position:absolute;margin-left:50px;margin-top:10px'>$uploader_name</span>";
        }                                                                                                                              
         
         
        if($_COOKIE['login']=='true')
        {
            echo "<input type='hidden' name='uid' value='2'>
            <input type='hidden' name='time' value='22-22-22'>
            <textarea style='width:850px;height:80px;margin-top:30px;background-color:#fff;resize:none;font-family:arial;font-weight:600' name='message' id='comment_section'></textarea><br>
            <button style='position:absolute;width:200px;height:50px;margin-left:-10px;background-color:black' type='submit' name='comment' onclick='sendComment()'>Comment</button>";
            echo "<br><br><br><br><hr style='height:2px;background-color: #333;border:none;width:63%'>";
            $array_comment;
            $count_comment=0;
            $main_array;
            $main_count=0;
            $user_array;
            $uid=$_COOKIE['uid'];
            $m_username;
            $o_username;
            if(mysql_connect('localhost','root',''))
            {
                if(mysql_select_db('funtube'))
                {
                    $query="SELECT content,date_comment,time_comment from comment_section where vid=$vid and uid=$uid order by date_comment,time_comment desc;";
                    if($res_query=mysql_query($query))
                    {
                        while($final_res=mysql_fetch_assoc($res_query))
                        {
                            $content=$final_res['content'];
                            $date_comment=$final_res['date_comment'];
                            $time_comment=$final_res['time_comment'];
                            $array_comment[$count_comment]=array();
                            $arr_temp=array($content,$date_comment,$time_comment);
                            $array_comment[$count_comment]=$arr_temp;
                            $count_comment=$count_comment+1;
                        }
                        $query3="select u_name from user_info where u_id=$uid;";
                        if($q_r=mysql_query($query3))
                        {
                            if($ret_res=mysql_fetch_assoc($q_r))
                            {
                                $m_username=$ret_res['u_name'];
                            }
                        }
                        
                    }
                    
                    $query2="SELECT uid,content,date_comment,time_comment from comment_section where vid=$vid and uid!=$uid order by date_comment,time_comment desc;";
                    if($res_query2=mysql_query($query2))
                    {
                        while($final_res=mysql_fetch_assoc($res_query2))
                        {
                            $content=$final_res['content'];
                            $date_comment=$final_res['date_comment'];
                            $time_comment=$final_res['time_comment'];
                            $main_array[$main_count]=array();
                            $arr_temp=array($content,$date_comment,$time_comment);
                            $main_array[$main_count]=$arr_temp;
                            $user_array[$main_count]=$final_res['uid'];
                            $main_count=$main_count+1;
                        }
                        for($i=0;$i<$main_count;$i++)
                        {
                            $query4="select u_name from user_info where u_id=$user_array[$i];";
                            if($q_rr=mysql_query($query4))
                            {
                                if($ret_res=mysql_fetch_assoc($q_rr))
                                {
                                    $o_username[$i]=$ret_res['u_name'];
                                }
                            }
                        }
                    }
                    $a=0;
                    $b=1;
                    $c=2;
                    for($i=0;$i<$count_comment;$i++)
                   {
                     $new_array=array();
                     $new_array=$array_comment[$i];
                     echo "<img src='user.png' style='width:30px;height:30px;border-radius:30px;position:absolute'><span style='position:absolute;margin-left:30px;margin-top:8px;font-size:20px'>$m_username</span><br><br>";
                     echo "<span style='font-size:15px;font-weight:bold'>commented on :</span><span style='font-size:15px'>$new_array[$b] $new_array[$c]<span><br>";
                     echo "<span style='font-family:times new roman;font-size:20px'>$new_array[$a]<span>";
                     echo '<br><br><br>';
                     echo "<br><hr style='height:2px;background-color: #333;border:none;width:63%'>";
                     
                
                    }
                    for($i=0;$i<$main_count;$i++)
                   {
                     $new_array=array();
                     $new_array=$main_array[$i];
                     echo "<img src='user.png' style='width:30px;height:30px;border-radius:30px;position:absolute'><span style='position:absolute;margin-left:30px;margin-top:8px'>$o_username[$i]</span><br><br>";
                     echo "<span style='font-size:15px;font-weight:bold'>commented on :</span><span style='font-size:15px'>$new_array[$b] $new_array[$c]<span><br>";
                     echo "<span style='font-family:times new roman;font-size:20px'>$new_array[$a]<span>";
                     echo '<br><br><br>';
                     echo "<br><hr style='height:2px;background-color: #333;border:none;width:63%'>";
                     
                
                    }
                    $space_counter=($main_count+$count_comment);
                    $space_counter=$space_counter+(($main_count+$count_comment)*0.03);
                }
        }
            
        }
        else{
            echo "<br><br><br><br><hr style='height:2px;background-color: #333;border:none;width:63%'>";
            echo "<center style='font-weight:bold;margin-left:-600px;font-family:times new roman;position:absolute'>you must login to view comments</center>";
             echo "<table  style='postiton:absolute;margin-top:-725px;margin-left:855px;'>";
         for($i=0;$i<$selected_count;$i++)
         {
          $image_src=str_replace('@','/',$selected_array[$i]['image_addr']);
          $vid=$selected_array[$i]['vid'];
          $name=$selected_array[$i]['name']; 
          $descript=$selected_array[$i]['descript'];
          $uploaded=$selected_array[$i]['date_up'].' '.$selected_array[$i]['time_up']; 
          echo "<tr>
                <td colspan='0'><img src=$image_src width='250' height='150'/></td>
                <td style='width:700px'><a href='Select.php?id=$vid&name=$name' style='text-decoration:none;color:black'><span style='font-family:times new roman; font-weight:bold;font-size:20px'>$name</span><br><br></a><span>$descript</span><br><br><span style='font-weight:bold'>Uploaded on :</span>$uploaded
          </tr>";
               
         }
    echo '</table>';
            
            
            }
        if(isset($_COOKIE['login']) && $_COOKIE['login']=='true')
        {
            
      $space_counter=877+(($space_counter)*147);
      $space_counter=-1*$space_counter;
      $newvar=$space_counter.'px';                                                                                                                                           
echo "<table  style='postiton:absolute;margin-top:$newvar;margin-left:855px;'>";
         for($i=0;$i<$selected_count;$i++)
         {
          $image_src=str_replace('@','/',$selected_array[$i]['image_addr']);
          $vid=$selected_array[$i]['vid'];
          $name=$selected_array[$i]['name']; 
          $descript=$selected_array[$i]['descript'];
          $uploaded=$selected_array[$i]['date_up'].' '.$selected_array[$i]['time_up']; 
          echo "<tr>
                <td colspan='0'><img src=$image_src width='250' height='150'/></td>
                <td style='width:700px'><a href='Select.php?id=$vid&name=$name' style='text-decoration:none;color:black'><span style='font-family:times new roman; font-weight:bold;font-size:20px'>$name</span><br><br></a><span>$descript</span><br><br><span style='font-weight:bold'>Uploaded on :</span>$uploaded
          </tr>";
               
         }
    echo '</table>';
        }
    else{
       
        
    }                                                                                                                                           
    ?>
    </body>

</html>


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
  
  <form class="modal-content animate" method="post" action="login.php?name='.'Subscribe_details.php'.'" onsubmit="return checkLoginForm()">
        
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
    <a href="Signout.php?name='.'Subscribe_details.php'.'"><button  style="width:150px; margin-top:0px; margin-left:1080px; height:50px">SignOut
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
     <br>
    <br>
    <?php
    if($_COOKIE['login']=='true' && isset($_GET['uid']))
    {
    $main_uploader_id=$_GET['uid'];
    $uploader_name;
    $uploader_email;
    $uploader_likehits;
    $uploader_unlikehits;
    $uploader_subscribe_count;
    $uploader_status;
    $uploader_video_count;
    $total_video_count;
    $total_user_count;
    echo "<hr style='height:4px;background-color: #333;border:none;width:100%;'>
    <img src='subuser.jpg' width=200px height=200px style='position:fixed;margin-top:-105px;margin-left:60px'>";
    if(mysql_connect('localhost','root',''))
    {
        if(mysql_select_db('funtube'))
        {
            $query="select u_name,u_email from user_info where u_id=$main_uploader_id;";
            if($q_rr=mysql_query($query))
            {
                if($m_f=mysql_fetch_assoc($q_rr))
                {
                    $uploader_name=$m_f['u_name'];
                    $uploader_email=$m_f['u_email'];
                    
                }
                $query2="select count(*) as subscribers from subscribe where uploader_id=$main_uploader_id;";
                if($q_r2=mysql_query($query2))
                {
                    if($m_f2=mysql_fetch_assoc($q_r2))
                    {
                        $uploader_subscribe_count=$m_f2['subscribers'];
                    }
                }
                $query3="select sum(likehits) as like_sum,sum(unlikehit) as unlike_sum from video_desc where uid=$main_uploader_id;";
                if($q_r3=mysql_query($query3))
                {
                    if($m_f3=mysql_fetch_assoc($q_r3))
                    {
                        $uploader_likehits=$m_f3['like_sum'];
                        $uploader_unlikehits=$m_f3['unlike_sum'];
                    }
                }
                $query4="select count(vid) as count_video from video_desc where uid=$main_uploader_id;";
                if($q_r4=mysql_query($query4))
                {
                    if($m_f4=mysql_fetch_assoc($q_r4))
                    {
                        $uploader_video_count=$m_f4['count_video'];
                    }
                }
                $query5="select count(vid) as count_video from video_desc;";
                if($q_r5=mysql_query($query5))
                {
                    if($m_f5=mysql_fetch_assoc($q_r5))
                    {
                        $total_video_count=$m_f5['count_video'];
                    }
                }
                $query6="select count(u_id) as count_video from user_info;";
                if($q_r6=mysql_query($query6))
                {
                    if($m_f6=mysql_fetch_assoc($q_r6))
                    {
                        $total_user_count=$m_f6['count_video'];
                    }
                }
            }
        }
        }
        $accuracy=($uploader_likehits/($uploader_likehits+$uploader_unlikehits))*100;
        $difference=$total_video_count-$uploader_video_count;
        $difference1=$total_user_count-$uploader_subscribe_count;
        $modified_name="'".$uploader_name."'";
        echo "<div style='position:fixed;margin-left:110px;margin-top:110px'>
              <span style='font-family:times new roman;font-weight:bold;font-size:25px'>$uploader_name<span><br>
              <span style='font-family:times new roman;font-size:15px'>$uploader_email</span>
             </div>
             <div style='position:fixed;margin-left:110px;margin-top:160px'>
             <span style='font-family:times new roman;font-size:20px'>Number of Subscribers                :</span><span>$uploader_subscribe_count</span><br><br>
             <span style='font-family:times new roman;font-size:20px'>Number of Videos Uploaded                :</span><span>$uploader_video_count</span><br><br>
             <span style='font-family:times new roman;font-size:20px'>Number of Likes for overall videos   :</span><span>$uploader_likehits</span><br><br>
             <span style='font-family:times new roman;font-size:20px'>Number of Dislikes for overall videos:</span><span>$uploader_unlikehits</span><br><br>
             
             
             
             </div>";
        
        echo "<!DOCTYPE html>
<html lang='en-US'>
<body>


<div id='piechart' style='margin-left:600px;margin-top:200px'></div>
        <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>

<script type='text/javascript'>
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Users', 'Number of videos'],
  [$modified_name, $uploader_video_count],
  ['Others',$difference ],
  
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Videos uploaded status', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id='piechart'
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>";
        echo "<!DOCTYPE html>
<html lang='en-US'>
<body>


<div id='piechart2' style='margin-left:600px;margin-top:50px'></div>
        <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>

<script type='text/javascript'>
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart2);

// Draw the chart and set the chart values
function drawChart2() {
  var data = google.visualization.arrayToDataTable([
  ['Users', 'Number of Subscribers'],
  [$modified_name, $uploader_subscribe_count],
  ['Total users',$difference1 ],
  
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Subscription status', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id='piechart2'
  var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
  chart.draw(data, options);
}
</script>";
 echo "<!DOCTYPE html>
<html lang='en-US'>
<body>


<div id='piechart3' style='margin-left:600px;margin-top:50px'></div>
        <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>

<script type='text/javascript'>
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart3);

// Draw the chart and set the chart values
function drawChart3() {
  var data = google.visualization.arrayToDataTable([
  ['Reaction', 'Number of Likes/Dislikes'],
  ['Likes', $uploader_likehits],
  ['Dislikes',$uploader_unlikehits ],
  
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Reaction status', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id='piechart3'
  var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
  chart.draw(data, options);
}
</script>";
        
    }
    else{
        echo '<center><strong>You must login to view about uploaders</strong></center>';
    }
        ?>


<html>
    <title>funtube.com</title>
     <img src="download.png" width="70" height="70" />    
     <span style="color:brown; font-family:Comic Sans MS; font-size:50px">Funtube</span>
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
    <img src="user.png" alt="Avatar" class="avatar" style="margin-left:800px"><span style="font-family:Comic Sans MS;font-weight:bold;font-size:24px;margin-top:-20px">'Darshan'</span>
    <br>
    <a href="Signout.php?name=Select.php"><button  style="width:150px; margin-top:0px; margin-left:1080px; height:50px">SignOut
</button></a>
    
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
    <script>
    function callLikeFunction()
    {
      var sd=document.cookie.split("login");
    
            var sd2=sd[1].split("=");
            var sd3=sd2[1].split(";");
            if(sd3[0]=="false")
           {
               alert("You must login..");
               return ;
           }
     if(document.getElementById("text_l").style.color=="black")
      {
       alert("you Liked this video");
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
                var vid=10;
                var vid2=8;
                window.location="ActiveLike.php?status=Liked&vid="+vid+"&Value="+vid2+"";
      }
       else
       {
           document.getElementById("img_l").src="black.png";
           document.getElementById("text_l").style.color="black";
           document.getElementById("text_l").style.fontWeight="none";
          
       }
        
       }
       
        
       function callunLikeFunction()
        {
            var sd=document.cookie.split("login");
            var sd2=sd[1].split("=");
            var sd3=sd2[1].split(";");
            if(sd3[0]=="false")
           {
               alert("You must login..");
               return ;
           } 
            if(document.getElementById("text_u").style.color=="black")
                {
                    var ref= document.getElementById("img_u");
                    alert("You disliked this video");
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
            else{
                
                var ref3=document.getElementById("img_u");
                ref3.src="unlikeblack.png";
                ref3.width="35";
                ref3.style.marginLeft="700";
                
                var ref4=document.getElementById("text_u");
                ref4.style.marginLeft="740";
                ref4.style.fontWeight="none";
                ref4.style.color="black";
                window.location="ActiveLike.php?status='Liked'";
           
             }
        }
    </script>
    
<body>
    
    
     <form method="post" action="Mainpage.php">
     <center><input style="font-size:14pt;height:30px;width:520px;" type="text"/>
         <input style="width: 5em;  height: 2.3em; margin-left:-30px" type="submit" value="&#128269" name="submit"/>
         </center>
    </form>
     <br>
     <br>
     <br>
     <hr style="height:2px;background-color: #333;border:none">
    <video width="853 height="480" style='border:1px #999 solid' src="../TestingVideos/Haikyuu-volleyball/Hseason1/s1e10.mkv" controls controlsList="nodownload"></video>
    <br><span style='font-family:Georgia, serif;font-weight:bold;font-size:20px'>1 Views</span><span style='font-family:courier;'><h1 style='font-family:Comic Sans MS'>Haikyuu season 1 episode 10</h1></span>
    <img id='img_l' src='black.png' width='35' height='35' style='position:absolute;margin-left:600px;margin-top:-40px' onclick='callLikeFunction()'><span id='text_l' style='font-family:Comic Sans MS;font-size:20px;position:absolute;margin-left:640px;margin-top:-30px' onclick='callLikeFunction()'>Like</span><span style='position:absolute;margin-left:630px;margin-top:0px;font-size:15px;'>8</span><img id='img_u' src='unlikeblack.png' width='35' height='33' style='position:absolute;margin-left:700px;margin-top:-38px' onclick='callunLikeFunction()'><span id='text_u' style='font-family:Comic Sans MS;font-size:20px;position:absolute;margin-left:740px;margin-top:-30px' onclick='callunLikeFunction()'>unlike</span><span style='position:absolute;margin-left:730px;margin-top:0px;font-size:15px;'>0</span><span style='font-weight:bold;font-family:courier'>Haikyuu season 1 episode 10</span><br><span style='font-weight:bold;font-family:courier'>Uploaded on:</span>2018/01/25 18:43 pm<br><hr style='height:2px;background-color: #333;border:none;width:59.4%'><br><img src='user.png' style='width:50px;height:50px;border-radius:50px;position:absolute>''Darshan'<br><button  style="position:absolute;width:220px; margin-top:-5px; margin-left:530px; height:50px">Subscribe
</button><br><form method='post' action='commentsection.php'>
            <input type='hidden' name='uid' value='1'>
            <input type='hidden' name='time' value='22-22-22'>
            <textarea style='width:850px;height:80px;margin-top:30px;background-color:#fff;resize:none;font-family:arial;font-weight:600' name='message'></textarea><br>
            <button style='position:absolute;width:200px;height:50px;margin-left:-10px;background-color:black' type='submit' name='comment'>Comment</button>
            </form>    </body>

</html>
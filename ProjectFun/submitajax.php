<?php
?>
<html>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script>  
function callThisNow()
{
    $.ajax({
        url: 'checkme.php',
        type: 'POST',
        data: {
            Value:10
        },
        success: function(msg) {
            alert('Email Sent');
        }               
    });
}
</script>
    <input type="submit" name="HEllo" onclick="callThisNow()"/>
</html>
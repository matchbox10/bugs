<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>

#test-area {
height: 700px;
border: 3px dashed #CCCCCC;
background: #FFFFFF;
padding: 20px;
cursor: pointer;
}
#mycursor {
cursor: none;
width: 97px;
height: 137px;
background: url("images/cursor/spray_can.gif") no-repeat left top;
position: absolute;
display: none;
top: 0;
left: 0;
z-index: 10000;
}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
$('#test-area').mouseout(function(){
$('#mycursor').hide();
return false;
});
$('#test-area').mouseenter(function(){
$('#mycursor').show();
return false;
});
$('#test-area').mousemove(function(e){
$('#mycursor').css({'left': e.clientX – 20,'top': e.clientY + 7});
});
});
</script>

</head>

<body>

<div id="test-area">
Move mouse over this area.
</div>
<div id="mycursor"></div>
</body>
</html>
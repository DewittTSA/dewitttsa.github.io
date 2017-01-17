<?php
$action = $_GET["action"];
$myText = $_POST["mytext"];

if($action = "save") {
  $targetFolder = "root";
  file_put_contents($targetFolder."mytext.txt", $myText);
}
?>   
<html>
<head>
 <title>myform</title>
</head>
<body>
  <form action="?action=save" name="myform" method="post">
    <input type=text name="mytext">
    <input type="submit" value="save">
  </form>
</body>
</html>

<p>

HAVE A GREAT DAY MAN

UR RESPONSE HAS BEEN RECORDED.

</p>

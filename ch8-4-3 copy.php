
<?php
$username = $_POST["User"];
$password = $_POST["Pass"];
$sex = $_POST["Sex"];
print "姓名: ".$username."<br/>";
print "密碼: ".$password."<br/>";
print "性別: ".$sex."<br/>";
$address = $_POST["Address"];
print "地址: <br/>".nl2br($address)."<br/>";
$type = $_POST["Type"];
print "種類: ".$type."<br/>";
?>

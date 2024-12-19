<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch8-1-2.php</title>
</head>
<body>
<?php

$ip =$_SERVER["REMOTE_ADDR"];
print 'ip address' . ''.$ip . '';

?>
<table border= "1">
    <tr>
        <td>1</td>
        <td>2</td>
    <tr>

<?php
foreach ($_SERVER as $key =>$value){
    echo "<tr><td>". $key . "</td>";
    echo "<td>" .$value. "</td></tr>";

}
?>
</table>
</body>
</html>
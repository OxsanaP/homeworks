<html>
<head></head>
<body>
<?php
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$row =5;
$cols = 10;
echo "<table>";
for($i=1; $i<=$row; $i++) {
    echo "<tr>";
    for($j=1; $j<=$cols; $j++) {
        echo "<td style='background-color:".$colors[rand(0,6)]."'>". rand(1,1000) ."</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
</body>
</html>


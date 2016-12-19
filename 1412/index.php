<?php
$colors = array(
    'black' => '#111',
    'red' => '#C64012',
    'grey' => '#6A737C',
    'green' => '#2DB651',
    'blue' => '#1748D7'
);

function getColor(){
    if(isset($_POST["color"])){
        $value = $_POST["color"];
        setcookie('backgroundColor',$value, time()+300, '/');
        return $value;
    }
    if(isset($_COOKIE['backgroundColor'])){
        return $_COOKIE['backgroundColor'];
    }
    return '#6A737C';
}

?>
<html>
<head>
    <title></title>
</head>
<body>
<style>
    body{
        background:<?php echo getColor() ?>;
    }
</style>
<form method="post" action="index.php">
    <select name="color">
        <?php
            foreach ($colors as $colorName=>$colorValue){
                $selected = "";
                if($colorValue==getColor()){
                    $selected = " selected";
                }
                echo '<option value="' . $colorValue . '" ' . $selected . '>' . $colorName . '</option>';
            }
        ?>
    </select>
<input type="submit" value="Change color"/>
</form>
</body>
</html>


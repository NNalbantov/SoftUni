<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coloring Texts</title>
</head>
<body>
    <form action="" method="get">
        <textarea name="text" cols="30" rows="10"></textarea><br/>
        <input type="submit" value="Color Text"/>
    </form>
</body>
</html>
<?php
    if(isset($_GET['text'])){
        $input = $_GET['text'];
        $text = explode(" ", $input);
        $splitted = implode("", $text);
        $result = str_split($splitted);
        foreach($result as $value){
            if(ord($value) % 2 == 0){
                echo "<span style='color: red'>$value </span>";
            }
            else{
                echo "<span style='color: blue'>$value </span>";
            }
        }
    }
?>

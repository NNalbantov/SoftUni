<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>Enter Tags:</p>
    <form action="" method="post">
        <input type="text" name="tags" placeholder=""/>
        <input type="submit" name="submit" value="Submit"/>
    </form>
</body>
</html>
<?php
    if(isset($_POST['tags'])){
        $variables = $_POST['tags'];
        $arr = explode(", ",$variables);
        $count = array_count_values($arr);
        arsort($count);
        foreach($count as $key => $val){
            echo "$key : $val times <br>";
        }
        echo "<br>The most frequent tag is: " . array_keys($count)[0];
    }
?>

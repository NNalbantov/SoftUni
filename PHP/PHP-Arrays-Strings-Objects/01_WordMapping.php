<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Word Mapping</title>
</head>
<body>
    <form action="" method="get">
        <textarea name="text" id="" cols="30" rows="10"></textarea><br/>
        <input type="submit" value="Count words"/>
    </form>
</body>
</html>
<?php
    if(isset($_GET['text'])){
        $input = $_GET['text'];
        $str = strtolower($input);
        $arr = preg_split("/[\W]+/", $str, -1, PREG_SPLIT_NO_EMPTY);
        $res = [];
        $result = array_count_values($arr);
        echo "<table border='1'>";
        foreach($result as $key => $value){
            echo "<tr>";
            echo "<td>{$key}</td>";
            echo "<td style='width: 20px'>{$value}</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
?>

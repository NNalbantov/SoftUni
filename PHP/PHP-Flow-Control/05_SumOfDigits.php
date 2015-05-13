<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sum Of Digits</title>
</head>
<body>
    <form action="" method="get">
        <label for="input">Input string:</label>
        <input type="text" name="input" id="input"/>
        <input type="submit" value="Submit"/>
    </form>
</body>
</html>
<?php
    function sumOfDigits($digit){
        if(!is_numeric($digit)){
            return "I cannot sum that";
        }
        else{
            $sum = 0;
            $digitToString = (string)$digit;
            for($i = 0; $i < strlen($digitToString); $i++){
                $sum += (int)$digitToString[$i];
            }
            return $sum;
        }
    }
    if(isset($_GET['input'])){
        $inputs = $_GET['input'];
        $input = explode(", ", $inputs);
        echo "<table border='1'>";
        for($i = 0; $i < count($input); $i++){
            echo "<tr><td>$input[$i]</td><td>" . sumOfDigits($input[$i]) . "</td></tr>";
        }
        echo "</table>";
    }
?>

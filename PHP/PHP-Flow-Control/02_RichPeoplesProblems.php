<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rich People's Problems</title>
</head>
<body>
    <form action="" method="post">
        <label for="car">Enter cars</label>
        <input type="text" name="carNames" id="car"/>
        <input type="submit" value="Show result"/>
    </form>
</body>
</html>
<?php
    if(isset($_POST['carNames'])){
        $cars = htmlentities($_POST['carNames']);
        $carArray = explode(", ", $cars);
        $colors = ["Red", "Blue", "Green", "Black", "White", "Silver"];
        $count = [1, 2, 3, 4, 5, 6];
        ?>
        <table border="1">
            <tr style="font-weight: bold; text-align: center">
                <td>Car</td>
                <td>Color</td>
                <td>Count</td>
            </tr>
            <?php
                for($i = 0; $i < count($carArray); $i++){
            ?>
            <tr>
                <td><?=$carArray[$i]?></td>;
                <td><?=$colors[array_rand($colors)]?></td>
                <td><?=$count[array_rand($count)]?></td>
            </tr>
            <?php } ?>
        </table>
    <?php } ?>

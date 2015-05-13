<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Square Root Sum</title>
</head>
<body>
<table border="1">
    <thead>
        <tr>
            <th>Number</th>
            <th>Square</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sum = 0;
            for($i = 0; $i <= 100; $i += 2){
                $num = number_format(sqrt($i), 2, '.', '');
                $sum += $num;
                echo "
                    <tr>
                        <td>$i</td>
                        <td>$num</td>
                    </tr>";
            }
            echo "
                <tr>
                    <th>Total:</th>
                    <td>$sum</td>
                </tr>";
        ?>
    </tbody>
</table>
</body>
</html>

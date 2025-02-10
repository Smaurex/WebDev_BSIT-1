<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>

    <title>output</title>
</head>
<body>

    <table>
        <?php
            $x = $_POST["x"];
            $y = $_POST["y"];
            
            for($i = 1; $i<=$y; $i++){
                echo "<tr>";
                for($j=1; $j<=$x; $j++){
                    echo "<td>";
                    echo $i * $j;
                    echo "</td>";
                }
                echo "</tr>";
            }   
        ?>
    </table>

    

</body>
</html>
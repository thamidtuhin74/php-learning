<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics PHP</title>
</head>
<body>
    <!-- Varable -->
        <!-- Basic Sum -->
        <?php
            $num1 = 5;
            $num2 = 15;

            $sum =  $num1 + $num2;
            echo "<p> Basic Sum of num1 & num2 = $sum</p>";

            function sumFn($num1,$num2){
                return $num1 + $num2;
            }

            echo "<p> Basic Sum using Function = ". sumFn($num1,$num2)."</p>";
        ?>

        <!-- Sum With function -->

        
</body>
</html>
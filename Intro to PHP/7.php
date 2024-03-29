<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Global Variables in Functions</title>
</head>
<body>
    <?php
        $count = 56;

        function testScope(){
            global $count;
            echo $count; // outputs 0 or generates warning
        }

        echo $count; // outputs 56
    ?>  
</body>
</html>
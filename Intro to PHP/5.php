<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function change(&$arg){
            $arg += 100;
        }

        $initial = 15;
        change($initial);
        echo $initial; // What will the output be?
    ?>
</body>
</html>
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
        $showSeconds = "";

        function getNiceTime($showSeconds=true){
            if ($showSeconds == true){
                return date("H:i:s");
            }
            else {
                return date("H:i");
            }
        }

        echo getNiceTime();
    ?>
</body>
</html>
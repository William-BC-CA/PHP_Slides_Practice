<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Having Keys and Values for an Array</title>
</head>
<body>
    <?php
        $forecast = array("Mon" => 40, "Tue" => 47, "Wed" => 52, "Thu" => 40, "Fri" => 37);

        echo $forecast["Tue"]; // outputs 47
        echo $forecast["Thu"]; // outputs 40
        
    ?>
</body>
</html>
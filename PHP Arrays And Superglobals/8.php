<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iterating through an Array - foreach</title>
</head>
<body>
    <?php
        $days = array("Mon", "Tue", "Wed", "Thu", "Fri");
        // iterating through the values AND the keys
        foreach($days as $key => $value){
            echo "On " . $key . ", the day is " . $value . "<br>";
        }
    ?>
</body>
</html>
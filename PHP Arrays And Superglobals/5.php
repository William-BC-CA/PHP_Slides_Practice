<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iterating Through an Array - While</title>
</head>
<body>
    <?php
        $days = array("Mon", "Tue", "Wed", "Thu", "Fri");
        $i = 0;

        while ($i < count($days)){
            echo $days[$i] . "<br>";
            $i++;
        }
    ?>
</body>
</html>
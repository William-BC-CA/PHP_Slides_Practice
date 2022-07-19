<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Sorting + Printing</title>
</head>
<body>
    <?php
        $days = array("Mon", "Tue", "Wed", "Thu", "Fri");
        asort($days); // To keep keys with the previous value! i.e: Fri starts first but still has key of 4!
        print_r($days);
    ?>
</body>
</html>
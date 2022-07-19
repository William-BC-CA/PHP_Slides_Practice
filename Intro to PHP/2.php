<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals, Loops</title>
</head>
<body>
    <?php
        $hourOfDay = 24;
        if ($hourOfDay > 6 && $hourOfDay < 12){
            $greeting = "Good Morning";
        }

        else if ($hourOfDay == 12){ // optional else if 
            $greeting = "Good Noon Time";
        }

        else { // optional else branch
            $greeting = "Good Afternoon or Evening";
        }

        $count = 0;

        echo "Count to 10 bro!<br>";

        while ($count < 10){
            echo $count . "<br>";
            $count++;
        }

        echo "Count to 100 man!<br>";
        for ($count = 0; $count < 100; $count += 5){
            echo $count . "<br>";
        }
    ?>
</body>
</html>
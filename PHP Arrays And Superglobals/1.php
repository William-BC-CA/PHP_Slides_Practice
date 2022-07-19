<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Defining and Accessing Arrays</title>
</head>
<body>
    <?php
        $days = array("Mon", "Tue", "Wed", "Thu", "Fri");
        $daysAlternate = ["Mon", "Tue", "Wed", "Thu", "Fri"];

        toPrint(true);
        toPrint(false);
        
        function toPrint($which){
            global $days;
            global $daysAlternate;

            $arrayLen;
            $count = 0;

            if ($which){
                echo "First method:<br>";
                $arrayLen = count($days);
            }
            else {
                echo "Alternate method:<br>";
                $arrayLen = count($daysAlternate);
            }
            foreach ($days as $eachDay){
                if ($count == $arrayLen - 1){
                    echo $eachDay . "<br><br>";
                    break;
                }
                echo $eachDay . "<br>";
            }
        }
    ?>
</body>
</html>
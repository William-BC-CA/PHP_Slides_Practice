<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding and Deleting Elements</title>
</head>
<body>
    <?php
        $days = array("Mon", "Tue", "Wed", "Thu", "Fri");
        
        $days[5] = "Sat";

        $days[] = "Sun";

        echo "Added Sat and Sun!<br>";
        // iterating through the values of the array $days
        foreach($days as $value){
            echo $value . "<br>";
        }

        unset($days[2]); // deletes value at index 2 (becomes null)

        echo "Removed days 2 which is Wed!<br>";
        // iterating through the values of the array $days
        foreach($days as $value){
            echo $value . "<br>";
        }

        if (isset($days[2]) == true){
            echo "This array has a value set at index 2!";
        }
    ?>
</body>
</html>
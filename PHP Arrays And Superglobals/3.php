<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Arrays</title>
</head>
<body>
    <?php
        $month = array
        (
            array("Mon", "Tue", "Wed", "Thu", "Fri"),
            array("Mon", "Tue", "Wed", "Thu", "Fri"),
            array("Mon", "Tue", "Wed", "Thu", "Fri"),
            array("Mon", "Tue", "Wed", "Thu", "Fri")
        );

        toPrint($month);

        function countRow($theArray, $rowNum){
            return count($theArray[$rowNum]);
        }

        // function countColumns($theArray){
        //     return count($theArray);
        // }

        function toPrint($theArray){
            for($count = 0; $count < count($theArray); $count++){
                for ($countJ = 0; $countJ < countRow($theArray, $count); $countJ++){
                    echo $theArray[$count][$countJ] . "<br>";
                }
            }
        }
    ?>
</body>
</html>
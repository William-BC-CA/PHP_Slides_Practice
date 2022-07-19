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
        // // calling the function
        // $output = getNiceTime();
        // echo getNiceTime();

        function mustReturnString() : string {
            return "hello";
        }

        echo mustReturnString();
        // echo getNiceTime(true); // this will print seconds
        // echo getNiceTime(false); // will not print seconds
    ?>
</body>
</html>
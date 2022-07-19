<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        echo "<p>this text is being echoed through the executed PHP script.</p>";

        $count = 42;

        $username = "Ricardo";

        echo "Hello" .$username;

        define("DATABASE_LOCAL", "localhost");

        echo DATABASE_LOCAL;

        // include "someotherfile.php";
        // include_once "someotherfile.php";
        // require "somefile.php";
        // require_once "somefile.php";

        // function getNiceTime(){
        //     return date("H:i:s");
        // }

        // calling the function
        // $output = getNiceTime();
        // echo getNiceTime();

        // function getNiceTime($showSeconds){
        //     if ($showSeconds == true){
        //         return date("H:i:s");
        //     }
        //     else {
        //         return date("H:i");
        //     }
        // }
    ?>
</body>
</html>
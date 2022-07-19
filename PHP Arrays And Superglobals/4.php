<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Arrays V2</title>
</head>
<body>
    <?php
        $cart = array();
        $cart[0] = array("id" => 37, "title" => "Burial at Ornans", "quantity" => 1);
        $cart[1] = array("id" => 345, "title" => "The Death of Marat", "quantity" => 1);
        $cart[2] = array("id" => 63, "title" => "Starry Night", "quantity" => 1);

        print_r($cart);
    ?>
</body>
</html>
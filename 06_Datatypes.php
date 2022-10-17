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
        // Data types in php
            #-- string  
            #-- integer
            #-- float
            #-- boolean
            #-- object
            #-- array

    
            # 1) String :

            $var = "This is string";
            echo var_dump($var);

            echo "<br>";
            $var2 = 20;
            echo var_dump($var2);

            echo "<br>";
            $var3 = 29.20;
            echo var_dump($var3);

            echo "<br>";
            $var4 = true;
            echo var_dump($var4);

            echo "<br>";
            $var5 = array("Peanut Butter", "Parshu" , "Paimon");
            echo var_dump($var5);


            // Constant in php

            # constant define with define function

            echo "<br>" . "constant :" . "<br>";
            define ('pi' , 3.14);
            echo pi;

            Echo "<br>" ;
            define ('cst' "its constant");
            echo pi;

    ?>
    
</body>
</html>

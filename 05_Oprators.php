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
                    //--oprators in php
                    //arithmatic oprators 
                $variable1 = 2;
                $variable2 = 5;
                echo "<br>";
                echo "The value of variable1 + variable2 is :";
                echo $variable1+$variable2;
                echo "<br>";
                echo "<br>";
                echo "The value of variable1 - variable2 is :";
                echo $variable1-$variable2;
                echo "<br>";
                echo "<br>";
                echo "The value of variable1 * variable2 is :";
                echo $variable1*$variable2;
                echo "<br>";
                echo "<br>";
                echo "The value of variable1 / variable2 is :";
                echo $variable1/$variable2;
                echo "<br>";
                    //Assignment oprators
                $number = 10;
                $newvar = $number;
                echo "new var will be" . $newvar;
                echo"<br>";
                // $newvar += $number;
                // echo "new var will be" . $newvar;
                // echo"<br>";
                // $newvar -= $number;
                // echo "new var will be" . $newvar;
                // echo"<br>";
                // $newvar *= $number;
                // echo "new var will be" . $newvar;
                // echo"<br>";  
                // $newvar /= $number;
                // echo "new var will be" . $newvar;
                // echo"<br>";
                // $newvar <= $number;
                // echo "new var will be" . $newvar;
                // echo"<br>";
                // $newvar >= $number;
                // echo "new var will be" . $newvar;
                // echo"<br>";
                    //Comparision Oprators
                    # -- it provide us boolean values that is true or false
                echo "<h3>comparision oprator</h3>";
                echo "The value of 1==3 is :";
                echo var_dump(1==3);
                echo "<br>";

                echo "The value of 1!=3 is :";
                echo var_dump(1!=3);
                echo "<br>";

                echo "The value of 1<=3 is :";
                echo var_dump(1<=3);
                echo "<br>";

                echo "The value of 1>=3 is :";
                echo var_dump(1>=3);
                echo "<br>";
                    //Increment\ Decrement Oprators
                echo "<h3>Increment\ Decrement Oprators</h3>";    
                echo "number++ is :" . $number++ . "<br>";
                echo $number;
                //echo "number-- is :" . $number-- . "<br>";
                //echo $number;
                //echo "++number is :" . ++$number . "<br>";
                //echo "--number is :" . --$number . "<br>";
                    
                    # $var++ first print then increment
                    # ++$var first increment then print

    
                    //Logical Oprators
                    echo "<h4> Logical Oprators in php</h4>" ;
                /* 1) and (&&)
                2) or (||)
                3) xor
                4) not ! */
                
                echo"<br>";
                echo "<h4> Logical Oprators</h4>" ;
                #-- And / &&

                    $myvar = 5;

                    $myvar = (true and true);
                    #$myvar = (true and false);
                    #$myvar = (false and true);
                    #$myvar = (false and fals);
                    echo var_dump($myvar);


                #-- or / ||
                    
                    echo "<br>";
                    $myvar1 = 10;
                    #$myvar1 = (true or true);
                    $myvar1 = (true or false);
                    #$myvar1 = (false or true);
                    #$myvar1 = (false or false);
                    echo var_dump($myvar1);
                
                #-- Xor

                    echo "<br>";
                    $myvar2 = 15;
                    #$myvar2 = (true xor true);
                    #$myvar2 = (true xor false);
                    #$myvar2 = (false xor false);
                    $myvar2 = (false xor true);
                    echo var_dump($myvar2);


    ?>

</body>
</html>


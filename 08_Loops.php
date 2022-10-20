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
        #-- loops in php
        //1) while
        //     $a = 0;
        //     while ($a <= 10)
        //     {
        //     echo "<br>";
        //     echo "The value of a is " ;
        //     echo $a;
        //     $a++;
        //     }

        // #-- Itrating array in php using while loop 
        //     $lang = array("Hindi" , "English" , "Marathi" , "Gujrati" , "telagu");
            
        //     $s = 0;
        //     while ($s < count($lang)){
        //     echo "<br>";
        //     echo "The value of languages is:" ;
        //     Echo $lang[$s] ;
        //     $s++ ;
        //     }
        
        // #-- Do while Loop
        // $c = 1 ;
    
        // do{
        //     Echo "<br> The value of c is: " ; 
        //     echo $c ;
        //     $c++ ;
        // }
        // while ($c < 9) 
        
        #-- For Loop

        for ($d=0; $d < 12; $d++) { 
            echo "<br> Saste nashe";
            echo $d ;
        }
        $langguages = array("Hindi" , "English" , "Marathi" , "Gujrati" , "telagu");
        foreach ($langguages as $value){
            echo "<br> The value of languages by foreach loop is :";
            echo $value;
            
        }
    ?>
</body>
</html>

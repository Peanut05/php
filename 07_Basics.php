<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
        <style>
                *{margin: 0 ;
                    padding: 0;
                    box-sizing: border-box ;
                
                }

                .container{
                    max-width: 80;
                    background-color: gray ;
                    margin: auto;
                    padding: 23px;
                }

        </style>
            
<body>
        
        <div class = "container">
        <h1> This is container</h1>
        This is container
        <p> Your party status is here</p>

        <?php
            $age = 10;
             if($age>18)
                {
                    echo "You Can go to the party";

                }
                elseif($age==10)
                {
                    Echo "you are 6 years old";
                }

                elseif($age==17)
                {
                    Echo "you are 17 years old";
                }

                else
                {
                    Echo "you cannot go to the party";

                }


                // array
                $languages = array("c" , "c++" , "python" , "php");
                echo "<br>";
                echo $languages[1];
                echo "<br>";
                echo "items in our array is" . count($languages);
        ?>

</body>
</html>

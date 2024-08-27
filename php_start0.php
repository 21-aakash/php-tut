<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <div class="container">
        hello world
        <?php
        
        // get started 
        echo "helloe ji";

        ?>


        <?php

         // variables 
        $x = 5;
        $y = "aakasht";
        $z = 4;


        echo $x;
        echo $y;

        echo $x + $z;


        ?>

         <?php
         
         // operators 
         
         echo "<br>";
         echo "addition: ";
        
         echo $x + $z;
         echo "<br>";
       
         echo "subtract: ";
         
         echo $x - $z;
         echo "<br>";
         
         echo "multiply: ";
         
         echo $x * $z;
         echo "<br>";
       
         echo "divide: ";
        
        echo $x / $z;
        echo "<br>";

        echo "<br>";

         
        echo var_dump($x==$z);
         
         
         $variable = false and true;
         $variable1 = false && true;
         $variable2 = true or true;
        echo "<br>";
        echo "<br>";
        
        echo var_dump($variable);
        echo "<br>";
        echo var_dump($variable1);
        echo "<br>";
        echo var_dump($variable2);

         
         
         
         
         
         
         
         ?>


     <?php
     
    //constant 

    define("PI", 3.14);
     //data types 
    
     echo "<br>";
     echo "var1";
     $var1 =5;
     echo var_dump($var1);
     echo "<br>";

     
     echo "<br>";
     echo "var2";
     $var2 =5.23;
     echo var_dump($var2);
     echo "<br>";

     
     echo "<br>";
     echo "var3";
     $var3 ="this is strong";
     echo var_dump($var3);
     echo "<br>";

     
     echo "<br>";
     echo "var4";
     $var4 =true;
     echo var_dump($var4);
     echo "<br>";

     
     echo "<br>";
     echo "Constant pi :";
     $var4 =PI;
     echo var_dump($var4);
     echo "<br>";

     
     
     
     
     
     
     
     
     ?>
     











    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }

    .container {

        max-width: 80%;
        background-color: #E6C7C2;
        margin: auto;
        padding: 25px;
    }
</style>

<body>

    <div class="container">
        <h1>Lets learn PHP</h1>
        <p>Aakash space</p>


        <?php

        //is-else

        $age = 21;

        if ($age > 20) {
            echo "You are authorized to vote ";
        } else {
            echo "404 not authorized ";
        }




        ?>


        <br>
        <hr>


        <?php

        // arrays

        $stu = array("aakash", "tom ", "java ", "c++");
        echo $stu[2];

        echo count($stu);
         

        // loops
        $i=0;

         while($i< count($stu))
         {
          
            echo "<br> the value is : ";
            echo $stu[$i];
            $i++;

         }
 
         
          for( $j=0; $j<count($stu); $j++ )
          {
            echo "<br> the value is : ";
            echo $stu[$j];
            
          }

foreach($stu as $a )
{
       echo $a;
}

//functions
           
function temp()
{
    echo "temp";
}

function temp1($num)
{
    echo $num;
}
temp1(52515845);



temp();

        ?>


        <?php
       
// strings





        ?>


    </div>
</body>

</html>
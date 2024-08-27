<?php
$insert = false;
if(isset($_POST['name'])){


$server = "localhost";

$username = "root";

$password = "";

// connnection with database
$con = mysqli_connect($server, $username, $password);

if (!$con) {


    echo "Success connecting to the db";
}

// Collect post variables
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `TRAVCLAN`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";




  // Execute the query
  if($con->query($sql) == true){
    // echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();


}
// echo "Success connecting to the db";s


?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Travclan</title>
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <img src="travel-world-1.jpg" class="bg" alt="">
    <div class="container">
      <h1>Welcome to Travclan</h1>
      <h4>Fill form to plan your trip</h4>
     
      <?php
      if($insert == true) {
       
        echo  "<p class='submitMsg'>Thanks for choosing Travclan </p>";
      
        
      }
    
      ?>
      
      
      
      <form action="index.php" method="post">
        <input
          type="text"
          name="name"
          ,
          id="name"
          ,
          placeholder="Enter your name"
        />

        <input
          type="text"
          name="age"
          ,
          id="age"
          ,
          placeholder="Enter your age"
        />

        <input
          type="text"
          name="gender"
          ,
          id="gender"
          ,
          placeholder="Enter your gender"
        />

        <input
          type="email"
          name="email"
          ,
          id="email"
          ,
          placeholder="Enter your email"
        />
        <input
          type="phone"
          name="phone"
          ,
          id="phone"
          ,
          placeholder="Enter your phone "
        />

        <textarea
          name="desc"
          id="desc"
          cols="30"
          ,
          rows="10"
          placeholder="Enter your information here"
        ></textarea>

        <button class="btn">Submit</button>
        <!-- <button class="btn">Reset</button> -->
      </form>
    </div>

    <script src="index.js"></script>
  </body>
</html>


<!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'AAKASH', '23', 'MALE', 'AAKASH@GMAIL.COM', '7852059628', 'THIS IS AAKASH', current_timestamp()); -->
<?php
$insert= false;
if(isset($_POST['name'])){

 // set connection variables 
$server = "localhost";
$username ="root";
$password ="";

// create a database connection
$con = mysqli_connect($server,$username,$password);

// check for coonection success
if(!$con) {
    die("connection to this database failed due to" . mysqli_connect_error());
}

//echo "success connecting to the db";

// collect POST variables
$name =$_POST['name'];
$age =$_POST['age'];
$gender =$_POST['gender'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$desc =$_POST['desc'];


$sql="INSERT INTO `trip`.`us` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('02', 'TEST 02', '24', 'male', 'knowshetu008@gmail.com', '017872087732', 'this is my 2nd table', '2022-04-20 15:10:14.000000')";

//echo $sql;

// Execute the query
if($con->query($sql) == true){
   // echo "successfully inserted";

   // Flag for successful insertion
   $insert= true;
}

else{
    echo "ERROR: $sql <br> $con->error";
}

// close the database connection
$con->close();

} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="bg.jpg" alt="jpg" class="bg">
    <div class="container">
        <h1>Welcome to IIT kharagpur US Trip form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <?php
        if($insert == true){
       echo"<p class='submsg'>Thanks for submitting your form. we are happy to see you joining us for the US trip</p>";}
       ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your message here"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
   
    
</body>
</html>
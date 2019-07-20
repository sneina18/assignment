<?php
     include "connection.php";
     session_start(); 

     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add dish</title>




    <style type="text/css">
        


        input[type=text], select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
 input[type=submit] {
  width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
a:link {
  background-color:#f2f2f2;
  text-decoration: none;
}
    </style>
</head>
<body>

    <?php
        if (!isset($_SESSION['id']))
          header("Location:login.php");

        
        $user_id = $_SESSION['id'];
    ?>


    <form method="POST" action="">
        <input type="text" placeholder="Name of dish" name="name" required><br>
        <input type="text" placeholder="Type of dish" name="type" required><br>
        <input type="text" placeholder="Time for dish" name="time" required><br>
        <input type="text" placeholder="Ingredients for dish" name="list" required><br>
        <input type="text" placeholder="How to save dish" name="how" required><br>
        
        
        <input type="submit"  name="dish" value="Submit"><br>
    </form>
    <?php
    
    if(isset($_POST['dish'])){
      $name= $_POST['name'];
      $type= $_POST['type'];
      $time= $_POST['time'];
      $list= $_POST['list'];
      $how= $_POST['how'];
      $sql="INSERT INTO dish (name,type,prep_time,ingredients,storage,user_id) values ('$name','$type','$time','$list','$how','$user_id')";
      $result = mysqli_query($conn,$sql);

        if (mysqli_affected_rows($conn))
          header("Location:home.php");
   }

  
    ?>
</body>
</html>
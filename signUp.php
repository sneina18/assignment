<?php 
   include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dishes</title>
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
 input[type=password], select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

 input[type=number], select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=email], select {
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
    <h2> Please register</h2>
    <?php
       $password = $other_name =  false;
    ?>
    <form method="POST" action="">
        <input type="number" name="phone" required placeholder="Enter Phone Number" >
         
        <input type="text" name="Fname" required placeholder="Enter First Name" >
        <input type="text" name="Oname"  placeholder="Enter Other Names " >
        <input type="text" name="Sname" required placeholder="Enter Surname " >
        <?php
            if ( ($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['Oname'])))
              $other_name = true;
        ?>
        <input type="email" name="email" required placeholder="Enter email" >
        <input type="password" name="pin" required placeholder="Enter Password " >
        <input type="password" name="re-pin" required placeholder="Confirm Password" >
        
        <?php 
          if ( ($_SERVER['REQUEST_METHOD'] == 'POST') && $_POST['pin'] != $_POST['re-pin'])
              echo '<p>Password does not match</p>';
          else
              $password = true;
        ?>
        <button type="submit" name="signup"> Sign-up</button>
    </form>
    <a href="index.html">log-in</a>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($password && $other_name) {

                $phone = $_POST['phone'];
                $first_name = $_POST['Fname'];
                $oname = $_POST['Oname'];
                $last_name = $_POST['Sname'];
                $email = $_POST['email'];
                $pass  = $_POST['pin'];


                $sql= mysqli_query($conn,"INSERT INTO users (phone,first_name,other_name,last_name,email,password) VALUES ('$phone','$first_name', '$oname', '$last_name','$email','$pass')");
              
                if (mysqli_affected_rows($conn) == 1) 
                    header('Location:login.php');
            }
            elseif ($password && !$other_name) {

              $phone = $_POST['phone'];
              $first_name = $_POST['Fname'];
           
              $last_name = $_POST['Sname'];
              $email = $_POST['email'];
              $pass  = $_POST['pin'];

              $sql= mysqli_query($conn,"INSERT INTO users (phone,first_name,last_name,email,password) VALUES ('$phone','$first_name', '$last_name','$email','$pass')");

              if (mysqli_affected_rows($conn) == 1) 
                  header('Location:login.php');

          }

        }
    ?>
</body>
</html>
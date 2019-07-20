<?php 
    session_start();
   include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lOGIN</title>
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
    <h2> Please Login</h2>
    <?php
     
    ?>
    <form method="POST" action="">
        
        <input type="email" name="email" required placeholder="Enter email" >
        <input type="password" name="pin" required placeholder="Enter Password" >
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $email = $_POST['email'];
            $password = $_POST['pin'];

            $sql = "SELECT * FROM users WHERE email = '" . $email . "' AND password = '" . $password . "'";

            $res = mysqli_query($conn,$sql);

            
            // echo $sql;
            if (mysqli_num_rows($res) > 0) {
                
                $row = mysqli_fetch_assoc($res);
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['first_name'];
                $_SESSION['phone'] = $row['phone'];
                
                header('Location:home.php');
                
             }else {
                echo '<p> Credentials does not match</p>';
            }


           
        }
        ?>
        
        <button type="submit" name="login">Signin</button>
    </form>
    

  
    
</body>
</html>
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
     include "connection.php";
     session_start(); 
     $phone = $_SESSION['phone'];

     //random function
     $id=mt_rand(1,1000);
   // echo $phone."<br>";
   // echo $id."<br>";

     if(isset($_POST['dish'])){
        $name= $_POST['name'];
        $type= $_POST['type'];
        $time= $_POST['time'];
        $list= $_POST['list'];
        $how= $_POST['how'];
        $sql="INSERT INTO dish (id,nam,typ,time,list,how,phone) values ('$id','$name','$type','$time','$list','$how','$phone')";
        $result = mysqli_query($conn,$sql);

            if(!$result){
                //echo"file not saved";
                echo mysqli_error($conn);
            }
            else{
                echo"changes made successfully";
                header("location:home.php");

            }
     }

    ?>
    <form method="POST">
        <input type="text" placeholder="Name of dish" name="name"><br>
        <input type="text" placeholder="Type of dish" name="type"><br>
        <input type="text" placeholder="Time for dish" name="time"><br>
        <input type="text" placeholder="Ingredients for dish" name="list"><br>
        <input type="text" placeholder="How to save dish" name="how"><br>
        
        
        <input type="submit"  name="dish"><br>
    </form>
    
</body>
</html>
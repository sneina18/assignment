
<!DOCTYPE html>
<html>
<head>
    <title></title>


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

</body>
</html>


<?php
include "connection.php";

$id= $_GET['id'];



if(isset($_POST['dish'])){
    $newname= $_POST['name'];
    $newtype= $_POST['type'];
    $newtime= $_POST['time'];
    $newlist= $_POST['list'];
    $newhow= $_POST['how'];
    $sql ="UPDATE dish SET nam ='$newname', typ='$newtype', list='$newlist', how='$newhow' where id='$id' ";
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
        <input type="text" placeholder="type of dish" name="type"><br>
        <input type="text" placeholder="Time for dish" name="time"><br>
        <input type="text" placeholder="Ingredients for dish" name="list"><br>
        <input type="text" placeholder="how to save dish" name="how"><br>
        <input type="submit"  name="dish"><br>
    </form>
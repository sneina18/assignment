  <?php
  session_start();
  include "connection.php";
  
  ?>

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




<?php
if (!isset($_GET['id']))
  header('Location:home.php');

  
  $query = "SELECT * FROM dish WHERE id=" . $_GET['id'];
  $result = mysqli_query($conn,$query);

  if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_assoc($result);
  }

  $id = $_GET['id'];

?>

<h2> Update the dish details</h2>
<form method="POST" action="">
       Name <input type="text" placeholder="Name of dish" name="name" value="<?php echo $row['name']; ?>"><br>
       Type <input type="text" placeholder="type of dish" name="type" value="<?php echo $row['type']; ?>"><br>
        Time for dish <input type="text" placeholder="Time for dish" name="time" value="<?php echo $row['prep_time']; ?>"><br>
        Ingredients<input type="text" placeholder="Ingredients for dish" name="list" value="<?php echo $row['ingredients']; ?>"><br>
        Storage<input type="text" placeholder="how to save dish" name="how" value="<?php echo $row['storage']; ?>"><br>
        <input type="submit"  name="dish" value="Update"><br>
    </form>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $newname= $_POST['name'];
      $newtype= $_POST['type'];
      $newtime= $_POST['time'];
      $newlist= $_POST['list'];
      $newhow= $_POST['how'];
      $sql ="UPDATE dish SET name='$newname', type='$newtype', prep_time='$newtime', ingredients='$newlist', storage='$newhow' where id=$id";
      // echo $sql;
      $result = mysqli_query($conn,$sql);
  
     if (mysqli_affected_rows($conn) == 1) 
        header('location:home.php');
  
}

  ?>
</body>

</html>
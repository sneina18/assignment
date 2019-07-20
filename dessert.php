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
    <title>Dishes</title>

  <style type="text/css">
      h1{ font-family:  "Palatino Linotype", "Book Antiqua", Palatino, serif;
      text-align: center; }
      tr:nth-child(even){background-color: #f2f2f2;}

    ul{list-style-type: none;
margin:0;
padding:0;
overflow: visible;
background-color: #f1f1f1;

}
li{float: left;}
li a{
    display: block;
    color: #000;
    padding: 50px 50px;
    text-decoration: none;
}
li a:hover:not(.active){background-color: #555;
color:white;}
 li a.active{background-color: #4CAF50;
    color: white;}
.dropdown {
    margin-top: 35px;
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color:#000 ;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

  </style>
</head>
<body>
   
  <?php 
    if (!isset($_SESSION['id']))
        header('Location:login.php');
      ?>
     <a href="logout.php">log-out</a>
    <h1>Welcome <?php   echo $_SESSION['name']; ?></h1>

    

<header>
    <nav class="navmain">
        <a class="logo" href="default.php">
            
        </a>
        <ul >
            <li><a class="active" href="home.php">ALL RECIPES</a></li>
            <LI><a href="breakfast.php">BREAKFAST</a></LI>
            <li><a href="lunch.php">LUNCH</a></li>
            <LI><a href="dinner.php">DINNER</a></LI>
            <LI><a href="dessert.php">DESSERT</a></LI>
            <li><a href="logout.php">LOGOUT</a></li>
           <li> <a href="Newdish.php"> ADD NEW DISH</a></li>
    <li><div class="dropdown">
    <button class="dropbtn">USERS
    </button>
    <div class="dropdown-content">
      <a href="#">view users</a>
      <a href="users.php">add users</a></li>
      
    </div>
        </ul> </br>

<table width="80%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
  <th><strong>NAME</strong></th>
  <th><strong>TYPE</strong></th>
  <th><strong>PREP TIME</strong></th>
  <th><strong>INGREDIENTS</strong></th>
  <th><strong>WAY OF STORAGE</strong></th>

<th colspan="2"><strong>ACTION</strong></th>
</thead>
</tr>

<?php
  $query = "SELECT * FROM dish WHERE type='Dessert' AND user_id = " . $_SESSION['id'];
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      ?><tr><td> <?php echo $row['name']; ?></td>
        <td> <?php echo $row['type']; ?></td>
        <td> <?php echo $row['prep_time']; ?></td>
        <td> <?php echo $row['ingredients']; ?></td>
        <td><?php echo $row['storage']; ?></td>
        <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
        <td><a href="del.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    </tr><?php 
    }
  }
  
?>
<!-- <tr>
    <td>Summer smoothie</td>
    <td>Breakfast</td>
    <td>5 mins</td>
    <td> orange juice, coconut yoghurt, frozen mango, carrot.</td>
    <td>Chill</td>
     <td><a href="edit.php">Edit</td>
      <td><a href="del.php">Delete</td>
  </tr>
  <tr>
    <td>Granola</td>
    <td>Breakfast</td>
    <td> 1 hour 15 mins.</td>
    <td>coconut oil, maple syrup, kosher salt, rolled oats, coconut flakes, pumpkin seeds, sunflower seeds.</td>
    <td>Refrigerate.</td>
     <td><a href="edit.php">Edit</td>
      <td><a href="del.php">Delete</td>
  </tr>
  <tr>
    <td>Omelete-in-a-bun</td>
    <td>Breakfast</td>
    <td>10 mins</td>
    <td> pepper and onion mixture, eggs, salt, provolone cheese</td>
    <td>Keep Warm.</td>
     <td><a href="edit.php">Edit</td>
      <td><a href="del.php">Delete</td>
  </tr>
  <tr>
    <td>Burrito Bowls</td>
    <td>Lunch</td>
    <td>2 hours</td>
    <td>Rice, salsa, lettuce, corn, sour cream, black beans.</td>
    <td>Refrigerate.</td>
     <td><a href="edit.php">Edit</td>
      <td><a href="del.php">Delete</td>
  </tr>
  <tr>
    <td>BBQ Chicken Salad</td>
    <td>Lunch</td>
    <td> 1 hour 30 mins</td>
    <td>tomato, chicken breasts, corn kennels, cheddar cheese, BBQ sauce, tortila strips, red onion.</td>
    <td>Refrigerate.</td>
     <td><a href="edit.php">Edit</td>
      <td><a href="del.php">Delete</td>
  </tr>
  <tr>
    <td>Skirt Steak</td>
    <td>Dinner</td>
    <td>1 hours 27 mins</td>
    <td>olive oil, cumin, garlic, lime juice, red pepper, skirt steaks, brown sugar</td>
    <td>Freeze.</td>
     <td><a href="edit.php">Edit</td>
      <td><a href="del.php">Delete</td>
  </tr>
  <tr>
    <td>Grilled steak with greek corn salad.</td>
    <td>Dinner</td>
    <td>20 mins</td>
    <td>Olive oil, oregano, pepper, red wine, onion, tomatoes, feta cheese, cube steaks, corn. </td>
    <td>Refrigerate.</td>
     <td><a href="edit.php">Edit</td>
      <td><a href="del.php">Delete</td>
  </tr>
  <tr>
    <td>Ice cream truffles</td>
    <td>Dessert</td>
    <td>1 hour 30 mins.</td>
    <td>vanilla ice cream, malt balls, heath bars, payday bars, white chocolate.</td>
    <td>Refrigerate.</td>
     <td><a href="edit.php">Edit</td>
      <td><a href="del.php">Delete</td>
  </tr>
  <tr>
    <td>Gooey Brownies</td>
    <td>Dessert</td>
    <td>1 hour</td>
    <td>Chocolate chips, egg, sugar, milk butter, vanilla extract, sea salt.</td>
    <td>Refrigerate.</td>
     <td><a href="edit.php">Edit</td>
      <td><a href="del.php">Delete</td>
  </tr>
  <tr>
    <td>Buttery Raspberry Crumble Bars</td>
    <td>Dessert</td>
    <td>1 hour</td>
    <td> old fashion oats, all purpose flour,
brown sugar,baking powder,raspberries, brown sugar, all-purpose flour,vanilla extract, lemon zest.</td>
    <td>Refrigerate</td>
     <td><a href="edit.php">Edit</td>
      <td><a href="del.php">Delete</td>
  </tr> -->


</body>
</html>
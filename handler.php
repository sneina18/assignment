<?php
    include "connection.php";
    session_start();
    if(isset($_POST['login'])){
        $Phone=$_POST["phone"];
        $pin=$_POST["pin"];

       

        if($Phone && $pin)
{
    $sql= mysqli_query($conn,"SELECT  * FROM food WHERE Phone = '$Phone' AND Pin= '$pin'");
    if(mysqli_num_rows($sql)==1){
        //fetch user's id for session
        
          $row=mysqli_fetch_array($sql);
          $_SESSION['FName']=$row['Fname'];
          $_SESSION['OName']=$row['Oname'];
          $_SESSION['SName']=$row['Sname'];
          $_SESSION['phone']=$row['phone'];

       //echo"Welcome ". $_SESSION['FName'].' '.$_SESSION['OName']. ' '.$_SESSION['SName'];
       
       
        header("location:home.php");


    }
    else{

		//$error_login='WRONG PHONE OR PASSWORD';
               header("location:index.html");
               
        
    }
}

   
    }



    //sign up codes

    if(isset($_POST['signup'])){
        $Phone=$_POST["phone"];
        $Fname=$_POST["Fname"];
        $Oname=$_POST["Oname"];
        $Sname=$_POST["Sname"];
        $pin=$_POST["pin"];
        $Rpin=$_POST["re-pin"];
        if($Phone && $pin && $Fname && $Rpin && $Sname){
            if($pin == $Rpin){
                $sql= mysqli_query($conn,"INSERT INTO food (phone,pin,Fname,Oname,Sname) VALUES ('$Phone','$pin', '$Fname', '$Oname','$Sname')");
                if(!$sql){
                    echo "file not saved";
                }
                else {
                    //echo "file successfully added";
                    $result= mysqli_query($conn,"SELECT  * FROM food WHERE Phone = '$Phone' AND Pin= '$pin'");
                        if(mysqli_num_rows($result)==1)
                        {
                        //fetch user's id for session
                        
                        $row=mysqli_fetch_array($result);
                        $_SESSION['FName']=$row['Fname'];
                        $_SESSION['OName']=$row['Oname'];
                        $_SESSION['SName']=$row['Sname'];
                        $_SESSION['phone']=$row['phone'];

                          //echo"Welcome ". $_SESSION['FName'].' '.$_SESSION['OName']. ' '.$_SESSION['SName'];
                        header("location:home.php");
                        }

                        
                }
                //echo $pin.$Phone.$Fname.$Oname.$Sname.$Rpin;
                
            }
           
           
        }
   
    }

?>
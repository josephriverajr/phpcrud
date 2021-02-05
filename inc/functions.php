<?php
include 'database.php';
//login
$msg =" ";
$username1 =" ";

            if(isset($_POST['signin']))
            {
            
              $username = $_POST['log_username'];
              $password = $_POST['log_password'];

              $result =  mysqli_query($con,'select * from user_account 
                where username ="'.$username.'" and 
                password ="'.$password.'" and 
                active ="1"');
             
              if (mysqli_num_rows($result)==1)
              {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $msg ="Please Wait";
                header("Location: home.php");
                 //exit();

              }
              else
              {
                  //echo "<script>alert('Incorrect Password');</script>";
                  //header('Location: index.php ');
                  echo "<script type='text/javascript'>alert('Invalid')</script>";
                  $msg ="Incorrect Password";
            }

            }

//fetch table
$result = ' SELECT *
            FROM user_account
            WHERE active != "0"';
  $user = $connection->prepare($result);
      $user->execute();
      $users = $user->fetchAll(PDO::FETCH_OBJ);   

// Insert
       if(isset($_POST['submit_data']))
            {
               $username = $_POST['username'];
               $password = $_POST['password'];
               echo $username;
               echo $password;
               $insert = mysqli_query($con,"INSERT INTO user_account 
               							VALUES (NULL,'".$username."' ,'".$password."','1');")
               							or die(mysqli_error($con));
               header("Location: register.php?userID");
            }

//fetch-ec

	
	  if(isset($_POST['edit_data']))
	    {
	       $userID = $_POST['userID'];
	       $username = $_POST['username'];
	       $password = $_POST['password'];
	       echo $username;
	       echo $password;
	       echo $userID;
           $sql = mysqli_query($con,"UPDATE user_account set username = '".$username."'
							 WHERE user_id=".$userID.";")or die(mysqli_error($con));
			header("Location: register.php?userID");	    
				

	    }

       ?>
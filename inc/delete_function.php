<?php
include 'database.php';

//delete

	$userID = $_GET['userID'];
	$sql = "UPDATE user_account set active = '0' 
			WHERE user_id=:userID";
	$delete_user = $connection->prepare($sql);

	   if ($delete_user->execute([':userID' => $userID ])) {
	            
	         header("Location: ../register.php?userID");
	   		echo $userID;
	   }       
?>
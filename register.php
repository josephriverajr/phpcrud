<?php
session_start();
include 'inc/functions.php';
$username1 = $_SESSION["username"];
   if (!isset($_SESSION["username"]))
    header("location: index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>JosephQT</title>
	<!-- CSS-->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	

</head>
<body>
<?php 
  include 'inc/nav.php';
?>
  <div class="contents order-2 order-md-1">
    <div class="container login_form">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="form-block">
          <div class="card">
            <div class="card-body">
              <div class="text-center mb-5">
              <h3>Add</h3>

              </div>
              <form method="post">
              <div class="form-group first">
              	<input class='form-control' type='hidden' id='userID' name="userID" />
                <label for="username">Username</label>
                <input class='form-control' type='email' id='username' name="username" />
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input id="password" class='form-control' type='password' id='passwordSignIn' name="password"/>
              </div>
               <button name='submit_data' id="submit" class='btn btn-block btn-submit'>Submit</button>
               <button name='edit_data' id="update" style="display: none;" class='btn btn-block btn-submit'>Update</button>
               <button name='add_new' id="add_new" style="display: none;" class='btn btn-block btn-submit'> <- Add New</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    	<div class="col-md-6">
	        <div class="form-block">
	          <div class="card">
	            <div class="card-body">
	              <div class="text-center mb-5">
	              <h3>Table</h3>
					<table id="myTable" class="table">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col" hidden>#</th>
					      <th scope="col">Name</th>
					      <th scope="col">Status</th>
					      <th scope="col">Actions</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php foreach($users as $details):
					  		if ($details->active=='1') {
					  			$status="ACTIVE";
					  		}
					  		else{
					  			$status="INACTIVE";
					  		}
					  	 ?>
					  	 <tr id="<?= $details->user_id; ?>">

						<td ><?= $details->user_id;?></td>
				        <td data-target="username" ><?= $details->username;?></td>
				        <td data-target="password" hidden><?= $details->password;?></td>
				        <td ><?= $status?></td>
				        <td >
				        	  <a href="fpdf/tutorial/tuto1.php?userID=<?= $details->user_id; ?>"  class="fa fa-edit">view</a>
				              <a href="#" data-role="update" id="<?= $details->user_id; ?>"  class="fa fa-edit">edit</a>
				              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="inc/delete_function.php?userID=<?= $details->user_id; ?>"><i class="fa fa-trash">delete</i></a>  
				        </td>
				        </tr>
				        <?php endforeach; ?>
					  </tbody>
					</table>
	              </div>
	            </div>
	          </div>
	        </div>
      </div>
    </div>
    </div>
  </div>
</body>
</html>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready( function () {
		    $('#myTable').DataTable();
			    $(document).on('click','a[data-role=update]',function(){
					 var userID = this.id;
					 $('#userID').val(userID);
			         var username_field = $('#'+userID).children('td[data-target=username]').text();
			         $('#username').val(username_field);
	 		         var password_field = $('#'+userID).children('td[data-target=password]').text();
			         $('#password').val(password_field);
			         $('#submit').toggle();
			         $('#update').toggle();
			         $('#add_new').toggle();
			         

	            } );
	            $( "#add_new" ).click(function() {
			  		$('#submit').toggle();
			        $('#update').toggle();
			        $('#add_new').toggle();
				});
         } );
	</script>
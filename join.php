<?php
include('php-includes/connect.php');
include('php-includes/check-login.php');
$userid = $_SESSION['userid'];
$capping = 500;
?>
<?php
//User cliced on join
if(isset($_GET['join_user'])){
	$side='';
	$pin = mysqli_real_escape_string($con,$_GET['pin']);
	$email = mysqli_real_escape_string($con,$_GET['email']);
	$mobile = mysqli_real_escape_string($con,$_GET['mobile']);
	$address = mysqli_real_escape_string($con,$_GET['address']);
	$account = mysqli_real_escape_string($con,$_GET['account']);
	$under_userid = $userid;
	$name=  mysqli_real_escape_string($con,$_GET['name']);
	$side = mysqli_real_escape_string($con,$_GET['side']);
	$amount = mysqli_real_escape_string($con,$_GET['amount']);
	$password = "12345678";
	  
	$flag = 0;
	
	if($pin!='' && $email!='' && $mobile!='' && $address!='' && $account!='' && $under_userid!='' && $side!='' && $amount!='' && $name!=''){
		//User filled all the fields.
		if(pin_check($pin)){
			//Pin is ok
			if(email_check($email)){
				//Email is ok
				if(!email_check($under_userid)){
					//Under userid is ok
					if(side_check($under_userid,$side)){
						//Side check
						$flag=1;
					}
					else{
						echo '<script>alert("The side you selected is not available.");</script>';
					}
				}
				else{
					//check under userid
					echo '<script>alert("Invalid Under userid.");</script>';
				}
			}
			else{
				//check email
				echo '<script>alert("This user id already availble.");</script>';
			}
		}
		else{
			//check pin
			echo '<script>alert("Invalid pin");</script>';
		}
	}
	else{
		//check all fields are fill
		echo '<script>alert("Please fill all the fields.");</script>';
	}
	
	//Now we are heree
	//It means all the information is correct
	//Now we will save all the information
	if($flag==1){
		
		//Insert into User profile
		$query = mysqli_query($con,"insert into user(`email`,`name`,`password`,`mobile`,`address`,`account`,`under_userid`,`amount`,`side`) values('$email','$name','$password','$mobile','$address','$account','$under_userid','$amount','$side')");
		
		//Insert into Tree
		//So that later on we can view tree.
		$query = mysqli_query($con,"insert into tree(`userid`) values('$email')");
		
		//Insert to side
		$query = mysqli_query($con,"update tree set `$side`='$email' where userid='$under_userid'");
		
		//Update pin status to close
		$query = mysqli_query($con,"update pin_list set status='close' where pin='$pin'");

		// echo date("dS - F", strtotime("3 days"));

		//Inset into Icome
		$query = mysqli_query($con,"insert into income (`userid`) values('$email')");
		echo mysqli_error($con);
		//This is the main part to join a user\
		//If you will do any mistake here. Then the site will not work.

		//Update count and Income.
		$temp_under_userid = $under_userid;
		$temp_amount = $amount; 
		$admin_amount = $amount;
		$query = mysqli_query($con,"update user set amount='0' where email= '$email' ");
		$count = 1;

		//echo date("Y-n-j",strtotime("15 days")); 


		
		
		while($temp_under_userid!=""){
			$q = mysqli_query($con,"select * from user where email='$temp_under_userid'");
			$r = mysqli_fetch_array($q);
			$amount = $r['amount'];
			$parent = $r['under_userid'];
			$income_value = mysqli_query($con,"select * from income where userid='$temp_under_userid'");
			$income_object = mysqli_fetch_array($income_value);
			$current_bal = $income_object['current_bal'];
			if($parent == ""){
				$current_user_income=($admin_amount)+$amount;
				$query = mysqli_query($con,"update user set amount='$current_user_income' where email= '$temp_under_userid' ");
				// $query = mysqli_query($con,"update income set total_bal='$current_user_income' where userid= '$temp_under_userid' ");
				$query = mysqli_query($con,"update income set total_bal='$current_user_income' where userid= '$temp_under_userid' ");

			}
			elseif($count == 1){
				// $admin_amount = $admin_amount-((1/10)*($temp_amount));
				$current_user_income=(1/10)*($temp_amount)+$current_bal;
				// $query = mysqli_query($con,"update user set amount='$current_user_income' where email= '$temp_under_userid' ");
				$query = mysqli_query($con,"update income set current_bal='$current_user_income' where userid= '$temp_under_userid' ");
				$count += 1;
			}
			else{
				// $admin_amount = $admin_amount-((1/20)*($temp_amount));
				$current_user_income=(1/20)*($temp_amount)+$current_bal;
				// $query = mysqli_query($con,"update user set amount='$current_user_income' where email= '$temp_under_userid' ");
				$query = mysqli_query($con,"update income set current_bal='$current_user_income' where userid= '$temp_under_userid' ");
			}
			$q = mysqli_query($con,"select * from user where email='$temp_under_userid'");
			$r = mysqli_fetch_array($q);
			$temp_under_userid = $r['under_userid'];
			//mysqli_query($con,"update tree set `$temp_side_count`=$current_temp_side_count where userid='$temp_under_userid'");
		}

		// while($temp_under_userid!=""){
		// 	$q = mysqli_query($con,"select * from user where email='$temp_under_userid'");
		// 	$r = mysqli_fetch_array($q);
		// 	$amount = $r['amount'];
		// 	$parent = $r['under_userid'];
		// 	if($parent == ""){
		// 		$current_user_income=($admin_amount)+$amount;
		// 		$query = mysqli_query($con,"update user set amount='$current_user_income' where email= '$temp_under_userid' ");
		// 		$query = mysqli_query($con,"update income set total_bal='$current_user_income' where userid= '$temp_under_userid' ");
		// 	}
		// 	elseif($count == 1){
		// 		$admin_amount = $admin_amount-((1/10)*($temp_amount));
		// 		$current_user_income=(1/10)*($temp_amount)+$amount;
		// 		$query = mysqli_query($con,"update user set amount='$current_user_income' where email= '$temp_under_userid' ");
		// 		$query = mysqli_query($con,"update income set total_bal='$current_user_income' where userid= '$temp_under_userid' ");
		// 		$count += 1;
		// 	}
		// 	else{
		// 		$admin_amount = $admin_amount-((1/20)*($temp_amount));
		// 		$current_user_income=(1/20)*($temp_amount)+$amount;
		// 		$query = mysqli_query($con,"update user set amount='$current_user_income' where email= '$temp_under_userid' ");
		// 		$query = mysqli_query($con,"update income set total_bal='$current_user_income' where userid= '$temp_under_userid' ");
		// 	}
		// 	$q = mysqli_query($con,"select * from user where email='$temp_under_userid'");
		// 	$r = mysqli_fetch_array($q);
		// 	$temp_under_userid = $r['under_userid'];
		// 	//mysqli_query($con,"update tree set `$temp_side_count`=$current_temp_side_count where userid='$temp_under_userid'");
		// }
        /*
		$total_count=1;
		$i=1;
		while($total_count>0){
			$i;
			$q = mysqli_query($con,"select * from tree where userid='$temp_under_userid'");
			$r = mysqli_fetch_array($q);
			$current_temp_side_count = $r[$temp_side_count]+1;
			$temp_under_userid;
			$temp_side_count;
			mysqli_query($con,"update tree set `$temp_side_count`=$current_temp_side_count where userid='$temp_under_userid'");
			
			//income
			if($temp_under_userid!=""){
				$income_data = income($temp_under_userid);
				//check capping
				//$income_data['day_bal'];
				if($income_data['day_bal']<$capping){
					$tree_data = tree($temp_under_userid);
					
					//check leftplusright
					//$tree_data['leftcount'];
					//$tree_data['rightcount'];
					//$leftplusright;
					
					$temp_left_count = $tree_data['leftcount'];
					$temp_right_count = $tree_data['rightcount'];
					//Both left and right side should at least 1 user
					if($temp_left_count>0 && $temp_right_count>0){
						if($temp_side=='left'){
							$temp_left_count;
							$temp_right_count;
							if($temp_left_count<=$temp_right_count){
								
								$new_day_bal = $income_data['day_bal']+100;
								$new_current_bal = $income_data['current_bal']+100;
								$new_total_bal = $income_data['total_bal']+100;
								
								//update income
								mysqli_query($con,"update income set day_bal='$new_day_bal', current_bal='$new_current_bal', total_bal='$new_total_bal' where userid='$temp_under_userid' limit 1");	
							
							}
						}
						else{
							if($temp_right_count<=$temp_left_count){
						
								$new_day_bal = $income_data['day_bal']+100;
								$new_current_bal = $income_data['current_bal']+100;
								$new_total_bal = $income_data['total_bal']+100;
								$temp_under_userid;
								//update income
								if(mysqli_query($con,"update income set day_bal='$new_day_bal', current_bal='$new_current_bal', total_bal='$new_total_bal' where userid='$temp_under_userid'")){
									
								}
							}
						}
					}//Both left and right side should at least 1 user
					
				}
				//change under_userid
				$next_under_userid = getUnderId($temp_under_userid);
				$temp_side = getUnderIdPlace($temp_under_userid);
				$temp_side_count = $temp_side.'count';
				$temp_under_userid = $next_under_userid;	
				
				$i++;
			}
			
			//Chaeck for the last user
			if($temp_under_userid==""){
				$total_count=0;
			}
			
		}//Loop
		
		
		*/
		
		echo mysqli_error($con);
		
		echo '<script>alert("User joined successfully");</script>';
	}
	
	
	
}
?><!--/join user-->
<?php 
//functions
function pin_check($pin){
	global $con,$userid;
	
	$query =mysqli_query($con,"select * from pin_list where pin='$pin' and userid='$userid' and status='open'");
	if(mysqli_num_rows($query)>0){
		return true;
	}
	else{
		return false;
	}
}
function email_check($email){
	global $con;
	
	$query =mysqli_query($con,"select * from user where email='$email'");
	if(mysqli_num_rows($query)>0){
		return false;
	}
	else{
		return true;
	}
}
function side_check($email,$side){
	global $con;
	
	$query =mysqli_query($con,"select * from tree where userid='$email'");
	$result = mysqli_fetch_array($query);
	$side_value = $result[$side];
	if($side_value==''){
		return true;
	}
	else{
		return false;
	}
}
function income($userid){
	global $con;
	$data = array();
	$query = mysqli_query($con,"select * from income where userid='$userid'");
	$result = mysqli_fetch_array($query);
	$data['day_bal'] = $result['day_bal'];
	$data['current_bal'] = $result['current_bal'];
	$data['total_bal'] = $result['total_bal'];
	
	return $data;
}
function tree($userid){
	global $con;
	$data = array();
	$query = mysqli_query($con,"select * from tree where userid='$userid'");
	$result = mysqli_fetch_array($query);
	$data['left'] = $result['left'];
	$data['right'] = $result['right'];
	$data['leftcount'] = $result['leftcount'];
	$data['rightcount'] = $result['rightcount'];
	
	return $data;
}
function getUnderId($userid){
	global $con;
	$query = mysqli_query($con,"select * from user where email='$userid'");
	$result = mysqli_fetch_array($query);
	return $result['under_userid'];
}
function getUnderIdPlace($userid){
	global $con;
	$query = mysqli_query($con,"select * from user where email='$userid'");
	$result = mysqli_fetch_array($query);
	echo mysqli_error($con);
	return $result['side'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mlml Website  - Join</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

 

</head>

<body>

    <div id="wrapper" style="background-color: #002642">

        <!-- Navigation -->
        <?php include('php-includes/menu.php'); ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="font-size:45px">Join</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                	<div class="col-lg-4">
                    	<form method="get">
						<div class="form-group" style="font-size: 20px">
                                <label>Under Userid</label><br />
                              <b>  <?php echo  $userid; ?></b>
                            </div>
                            <div class="form-group" style="font-size:15px">
                                <label>Pin</label>
                                <input type="text" name="pin" class="form-control" required>
                            </div>
							<div class="form-group" style="font-size:15px">
                                <label>Name</label>
                                <input type="name" name="name" class="form-control" required>
                            </div>
                            <div class="form-group" style="font-size:15px">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group" style="font-size:15px">
                                <label>Mobile</label>
                                <input type="text" name="mobile" class="form-control" required>
                            </div>
                            <div class="form-group" style="font-size:15px">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                            <div class="form-group" style="font-size:15px">
                                <label>Account</label>
                                <input type="text" name="account" class="form-control" required>
                            </div>
                            
							<div class="form-group" style="font-size:15px">
                                <label>Amount</label>
                                <input type="text" name="amount" class="form-control" required>
                            </div>
                            <div class="form-group" style="font-size:15px">
                                <label>User Number</label><br>
								<!--before change
                                <input type="radio" name="side" value="left"> Left
                                <input type="radio" name="side" value="right"> Right
								-->
								<input type="radio" name="side" value="first"> User1
                                <input type="radio" name="side" value="second"> User2
								<input type="radio" name="side" value="third"> User3
                                <input type="radio" name="side" value="fourth"> User4
								<input type="radio" name="side" value="fifth"> User5
                                <input type="radio" name="side" value="sixth"> User6
								<input type="radio" name="side" value="seventh"> User7
                                <input type="radio" name="side" value="eighth"> User8
								<input type="radio" name="side" value="ninth"> User9
                                <input type="radio" name="side" value="tenth"> User10
                            </div>
                            
                            <div class="form-group" style="font-size:15pxpx">
                        	<input type="submit" name="join_user" class="btn btn-primary" value="Join">
							</div>
                        </form>
                    </div>
                </div><!--/.row-->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>

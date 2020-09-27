<?php
include('php-includes/connect.php');
include('php-includes/check-login.php');
$userid = $_SESSION['userid'];
$search = $userid;
?>
<?php
function tree_data($userid){
global $con;
$data = array();
$query = mysqli_query($con,"select * from tree where userid='$userid'");
$result = mysqli_fetch_array($query);
//$data['left'] = $result['left'];
//$data['right'] = $result['right'];
//$data['leftcount'] = $result['leftcount'];
//$data['rightcount'] = $result['rightcount'];
$data['first'] = $result['first'];
$data['second'] = $result['second'];
$data['third'] = $result['third'];
$data['fourth'] = $result['fourth'];
$data['fifth'] = $result['fifth'];
$data['sixth'] = $result['sixth'];
$data['seventh'] = $result['seventh'];
$data['eighth'] = $result['eighth'];
$data['ninth'] = $result['ninth'];
$data['tenth'] = $result['tenth'];
return $data;
}
?>
<?php 
if(isset($_GET['search-id'])){
$search_id = mysqli_real_escape_string($con,$_GET['search-id']);
if($search_id!=""){
$query_check = mysqli_query($con,"select * from user where email='$search_id'");
if(mysqli_num_rows($query_check)>0){
$search = $search_id;
}
else{
echo '<script>alert("Access Denied");window.location.assign("tree.php");</script>';
}
}
else{
echo '<script>alert("Access Denied");window.location.assign("tree.php");</script>';
} 
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
<title>Mlml Website - Tree</title>
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
<div id="wrapper">
<!-- Navigation -->
<?php include('php-includes/menu.php'); ?>
<!-- Page Content -->
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">Tree</h1>
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-2"></div>
    <form>
        <div class="col-lg-6">
          <div class="form-group">
            <input type="text" name="search-id" class="form-control" required>
          </div>
        </div><!-- /.col-lg-8 -->
        <div class="col-lg-2">
          <div class="form-group">
            <input type="submit" name="search" class="btn btn-primary" value="search">
          </div>
        </div><!-- /.col-lg-8 -->
       <div class="col-lg-2"></div>
    </form>   
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="table-responsive">
<table class="table"  style="text-align:center">
<tr height="150">
<?php
$data = tree_data($search);
?>
<td><?php /*echo $data['leftcount']*/ ?></td>
<td colspan="15"><i class="fa fa-user fa-4x" style="color:#1430B1" ></i><p><?php echo $search; ?></p></td>
<td><?php/* echo $data['rightcount'] */?></td>
</tr>
<tr height="150">
<?php
$first_first_user = $data['first'];
$first_second_user = $data['second'];
$first_third_user = $data['third'];
$first_fourth_user = $data['fourth'];
$first_fifth_user = $data['fifth'];
$first_sixth_user = $data['sixth'];
$first_seventh_user = $data['seventh'];
$first_eighth_user = $data['eighth'];
$first_ninth_user = $data['ninth'];
$first_tenth_user = $data['tenth'];
?>
<!--1 -->
<?php 
if($first_first_user!=""){
?>
<td colspan="2"><a href="tree.php?search-id=<?php echo $first_first_user ?>"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_first_user ?></p></a></td>
<?php 
}
else{
?>
<td colspan="2"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_first_user ?></p></td>
<?php
}
?>
<!--2 -->
<?php 
if($first_second_user!=""){
?>
<td colspan="2"><a href="tree.php?search-id=<?php echo $first_second_user ?>"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_second_user ?></p></a></td>
<?php 
}
else{
?>
<td colspan="2"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_second_user ?></p></td>
<?php
}
?>
<!-- 3-->
<?php 
if($first_third_user!=""){
?>
<td colspan="2"><a href="tree.php?search-id=<?php echo $first_third_user ?>"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_third_user ?></p></a></td>
<?php 
}
else{
?>
<td colspan="2"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_third_user ?></p></td>
<?php
}
?>
<!--4 -->
<?php 
if($first_fourth_user!=""){
?>
<td colspan="2"><a href="tree.php?search-id=<?php echo $first_fourth_user ?>"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_fourth_user ?></p></a></td>
<?php 
}
else{
?>
<td colspan="2"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_fourth_user ?></p></td>
<?php
}
?>
<!--5 -->
<?php 
if($first_fifth_user!=""){
?>
<td colspan="2"><a href="tree.php?search-id=<?php echo $first_fifth_user ?>"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_fifth_user ?></p></a></td>
<?php 
}
else{
?>
<td colspan="2"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_fifth_user ?></p></td>
<?php
}
?>
<!--6 -->
<?php 
if($first_sixth_user!=""){
?>
<td colspan="2"><a href="tree.php?search-id=<?php echo $first_sixth_user ?>"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_sixth_user ?></p></a></td>
<?php 
}
else{
?>
<td colspan="2"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_sixth_user ?></p></td>
<?php
}
?>
<!--7 -->
<?php 
if($first_seventh_user!=""){
?>
<td colspan="2"><a href="tree.php?search-id=<?php echo $first_seventh_user ?>"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_seventh_user ?></p></a></td>
<?php 
}
else{
?>
<td colspan="2"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_seventh_user ?></p></td>
<?php
}
?>
<!--8 -->
<?php 
if($first_eighth_user!=""){
?>
<td colspan="2"><a href="tree.php?search-id=<?php echo $first_eighth_user ?>"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_eighth_user ?></p></a></td>
<?php 
}
else{
?>
<td colspan="2"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_eighth_user ?></p></td>
<?php
}
?>
<!--9 -->
<?php 
if($first_ninth_user!=""){
?>
<td colspan="2"><a href="tree.php?search-id=<?php echo $first_ninth_user ?>"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_ninth_user ?></p></a></td>
<?php 
}
else{
?>
<td colspan="2"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_ninth_user ?></p></td>
<?php
}
?>
<!--10 -->
<?php 
if($first_tenth_user!=""){
?>
<td colspan="2"><a href="tree.php?search-id=<?php echo $first_tenth_user ?>"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_tenth_user ?></p></a></td>
<?php 
}
else{
?>
<td colspan="2"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_tenth_user ?></p></td>
<?php
}
?>
<!-- -->
</tr>

</table>
</div>
</div>
</div>
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
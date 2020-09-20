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
<table class="table" align="center" border="0" style="text-align:center">
<tr height="150">
<?php
$data = tree_data($search);
?>
<td><?php /*echo $data['leftcount']*/ ?></td>
<td colspan="2"><i class="fa fa-user fa-4x" style="color:#1430B1"></i><p><?php echo $search; ?></p></td>
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
<tr height="150">
<?php 
$data_first_first_user = tree_data($first_first_user);
$second_first_user = $data_first_first_user['first'];
$second_second_user = $data_first_first_user['second'];
$second_third_user = $data_first_first_user['third'];
$second_fourth_user = $data_first_first_user['fourth'];
$second_fifth_user = $data_first_first_user['fifth'];
$second_sixth_user = $data_first_first_user['sixth'];
$second_seventh_user = $data_first_first_user['seventh'];
$second_eighth_user = $data_first_first_user['eighth'];
$second_ninth_user = $data_first_first_user['ninth'];
$second_tenth_user = $data_first_first_user['tenth'];

$data_first_second_user = tree_data($first_second_user);
$third_first_user = $data_first_second_user['first'];
$third_second_user = $data_first_second_user['second'];
$third_third_user = $data_first_second_user['third'];
$third_fourth_user = $data_first_second_user['fourth'];
$third_fifth_user = $data_first_second_user['fifth'];
$third_sixth_user = $data_first_second_user['sixth'];
$third_seventh_user = $data_first_second_user['seventh'];
$third_eighth_user = $data_first_second_user['eighth'];
$third_ninth_user = $data_first_second_user['ninth'];
$third_tenth_user = $data_first_second_user['tenth'];

$data_first_third_user = tree_data($first_third_user);
$fourth_first_user = $data_first_third_user['first'];
$fourth_second_user = $data_first_third_user['second'];
$fourth_third_user = $data_first_third_user['third'];
$fourth_fourth_user = $data_first_third_user['fourth'];
$fourth_fifth_user = $data_first_third_user['fifth'];
$fourth_sixth_user = $data_first_third_user['sixth'];
$fourth_seventh_user = $data_first_third_user['seventh'];
$fourth_eighth_user = $data_first_third_user['eighth'];
$fourth_ninth_user = $data_first_third_user['ninth'];
$fourth_tenth_user = $data_first_third_user['tenth'];

$data_first_fourth_user = tree_data($first_fourth_user);
$fifth_first_user = $data_first_fourth_user ['first'];
$fifth_second_user = $data_first_fourth_user ['second'];
$fifth_third_user = $data_first_fourth_user ['third'];
$fifth_fourth_user = $data_first_fourth_user ['fourth'];
$fifth_fifth_user = $data_first_fourth_user ['fifth'];
$fifth_sixth_user = $data_first_fourth_user ['sixth'];
$fifth_seventh_user = $data_first_fourth_user ['seventh'];
$fifth_eighth_user = $data_first_fourth_user ['eighth'];
$fifth_ninth_user = $data_first_fourth_user ['ninth'];
$fifth_tenth_user = $data_first_fourth_user ['tenth'];

$data_first_fifth_user = tree_data($first_fifth_user);
$sixth_first_user = $data_first_fifth_user ['first'];
$sixth_second_user = $data_first_fifth_user ['second'];
$sixth_third_user = $data_first_fifth_user ['third'];
$sixth_fourth_user = $data_first_fifth_user ['fourth'];
$sixth_fifth_user = $data_first_fifth_user ['fifth'];
$sixth_sixth_user = $data_first_fifth_user ['sixth'];
$sixth_seventh_user = $data_first_fifth_user ['seventh'];
$sixth_eighth_user = $data_first_fifth_user ['eighth'];
$sixth_ninth_user = $data_first_fifth_user ['ninth'];
$sixth_tenth_user = $data_first_fifth_user ['tenth'];

$data_first_sixth_user = tree_data($first_sixth_user);
$seventh_first_user = $data_first_sixth_user ['first'];
$seventh_second_user = $data_first_sixth_user ['second'];
$seventh_third_user = $data_first_sixth_user ['third'];
$seventh_fourth_user = $data_first_sixth_user ['fourth'];
$seventh_fifth_user = $data_first_sixth_user ['fifth'];
$seventh_sixth_user = $data_first_sixth_user ['sixth'];
$seventh_seventh_user = $data_first_sixth_user ['seventh'];
$seventh_eighth_user = $data_first_sixth_user ['eighth'];
$seventh_ninth_user = $data_first_sixth_user ['ninth'];
$seventh_tenth_user = $data_first_sixth_user ['tenth'];

$data_first_seventh_user = tree_data($first_seventh_user);
$eighth_first_user = $data_first_seventh_user ['first'];
$eighth_second_user = $data_first_seventh_user ['second'];
$eighth_third_user = $data_first_seventh_user ['third'];
$eighth_fourth_user = $data_first_seventh_user ['fourth'];
$eighth_fifth_user = $data_first_seventh_user ['fifth'];
$eighth_sixth_user = $data_first_seventh_user ['sixth'];
$eighth_seventh_user = $data_first_seventh_user ['seventh'];
$eighth_eighth_user = $data_first_seventh_user ['eighth'];
$eighth_ninth_user = $data_first_seventh_user ['ninth'];
$eighth_tenth_user = $data_first_seventh_user ['tenth'];

$data_first_eighth_user = tree_data($first_eighth_user);
$ninth_first_user = $data_first_eighth_user ['first'];
$ninth_second_user = $data_first_eighth_user ['second'];
$ninth_third_user = $data_first_eighth_user ['third'];
$ninth_fourth_user = $data_first_eighth_user ['fourth'];
$ninth_fifth_user = $data_first_eighth_user ['fifth'];
$ninth_sixth_user = $data_first_eighth_user ['sixth'];
$ninth_seventh_user = $data_first_eighth_user ['seventh'];
$ninth_eighth_user = $data_first_eighth_user ['eighth'];
$ninth_ninth_user = $data_first_eighth_user ['ninth'];
$ninth_tenth_user = $data_first_eighth_user ['tenth'];

$data_first_ninth_user = tree_data($first_ninth_user);
$tenth_first_user = $data_first_ninth_user ['first'];
$tenth_second_user = $data_first_ninth_user ['second'];
$tenth_third_user = $data_first_ninth_user ['third'];
$tenth_fourth_user = $data_first_ninth_user ['fourth'];
$tenth_fifth_user = $data_first_ninth_user ['fifth'];
$tenth_sixth_user = $data_first_ninth_user ['sixth'];
$tenth_seventh_user = $data_first_ninth_user ['seventh'];
$tenth_eighth_user = $data_first_ninth_user ['eighth'];
$tenth_ninth_user = $data_first_ninth_user ['ninth'];
$tenth_tenth_user = $data_first_ninth_user ['tenth'];

$data_first_tenth_user = tree_data($first_tenth_user);
$eleven_first_user = $data_first_tenth_user ['first'];
$eleven_second_user = $data_first_tenth_user ['second'];
$eleven_third_user = $data_first_tenth_user ['third'];
$eleven_fourth_user = $data_first_tenth_user ['fourth'];
$eleven_fifth_user = $data_first_tenth_user ['fifth'];
$eleven_sixth_user = $data_first_tenth_user ['sixth'];
$eleven_seventh_user = $data_first_tenth_user ['seventh'];
$eleven_eighth_user = $data_first_tenth_user ['eighth'];
$eleven_ninth_user = $data_first_tenth_user ['ninth'];
$eleven_tenth_user = $data_first_tenth_user ['tenth'];


?>



<!--  Second start*********************************************** -->

<?php 
if($second_first_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $second_first_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $second_first_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($second_second_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $second_second_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $second_second_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($second_third_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $second_third_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $second_third_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($second_fourth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $second_fourth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515 " ></i><p><?php echo $second_fourth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($second_fifth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $second_fifth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $second_fifth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($second_sixth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $second_sixth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $second_sixth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($second_seventh_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $second_seventh_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $second_seventh_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($second_eighth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $second_eighth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $second_eighth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($second_ninth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $second_ninth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $second_ninth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($second_tenth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $second_tenth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $second_tenth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<!--  Second end*********************************************** -->


<!--  Third start*********************************************** -->

<?php 
if($third_first_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $third_first_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $third_first_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($third_second_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $third_second_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $third_second_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($third_third_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $third_third_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $third_third_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($third_fourth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $third_fourth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $third_fourth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($third_fifth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $third_fifth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $third_fifth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($third_sixth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $third_sixth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $third_sixth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($third_seventh_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $third_seventh_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $third_seventh_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($third_eighth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $third_eighth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $third_eighth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($third_ninth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $third_ninth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $third_ninth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($third_tenth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $third_tenth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $third_tenth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<!--  Third end*********************************************** -->

<!--  Fourth start*********************************************** 4th -->

<?php 
if($fourth_first_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fourth_first_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fourth_first_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($fourth_second_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fourth_second_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fourth_second_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($fourth_third_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fourth_third_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fourth_third_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($fourth_fourth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fourth_fourth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fourth_fourth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($fourth_fifth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fourth_fifth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fourth_fifth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($fourth_sixth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fourth_sixth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fourth_sixth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($fourth_seventh_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fourth_seventh_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fourth_seventh_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($fourth_eighth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fourth_eighth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fourth_eighth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($fourth_ninth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fourth_ninth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fourth_ninth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($fourth_tenth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fourth_tenth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fourth_tenth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<!--  Fourth end*********************************************** 4th -->


<!--  Fifth start*********************************************** 5th -->

<?php 
if($fifth_first_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fifth_first_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fifth_first_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($fifth_second_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fifth_second_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fifth_second_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($fifth_third_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fifth_third_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fifth_third_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($fifth_fourth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fifth_fourth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fifth_fourth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($fifth_fifth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fifth_fifth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fifth_fifth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($fifth_sixth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fifth_sixth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fifth_sixth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($fifth_seventh_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fifth_seventh_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fifth_seventh_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($fifth_eighth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fifth_eighth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fifth_eighth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($fifth_ninth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fifth_ninth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fifth_ninth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($fifth_tenth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fifth_tenth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $fifth_tenth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<!--  Fifth end*********************************************** 5th -->

<!--  Sixth start*********************************************** 6th -->

<?php 
if($sixth_first_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $sixth_first_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $sixth_first_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($sixth_second_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $sixth_second_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $sixth_second_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($sixth_third_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $sixth_third_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $sixth_third_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($sixth_fourth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $sixth_fourth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $sixth_fourth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($sixth_fifth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $sixth_fifth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $sixth_fifth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($sixth_sixth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $sixth_sixth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $sixth_sixth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($sixth_seventh_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $sixth_seventh_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $sixth_seventh_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($sixth_eighth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $sixth_eighth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $sixth_eighth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($sixth_ninth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $sixth_ninth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $sixth_ninth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($sixth_tenth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $sixth_tenth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $sixth_tenth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<!--  Sixth end*********************************************** 6th -->


<!--  Seventh start*********************************************** 7th -->

<?php 
if($seventh_first_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $seventh_first_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $seventh_first_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($seventh_second_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $seventh_second_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $seventh_second_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($seventh_third_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $seventh_third_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $seventh_third_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($seventh_fourth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $seventh_fourth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $seventh_fourth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($seventh_fifth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $seventh_fifth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $seventh_fifth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($seventh_sixth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $seventh_sixth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $seventh_sixth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($seventh_seventh_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $seventh_seventh_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $seventh_seventh_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($seventh_eighth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $seventh_eighth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $seventh_eighth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($seventh_ninth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $seventh_ninth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $seventh_ninth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($seventh_tenth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $seventh_tenth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $seventh_tenth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<!--  Seventh end*********************************************** 7th -->


<!-- Eighth start*********************************************** 8th -->

<?php 
if($eighth_first_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $eighth_first_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $eighth_first_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($eighth_second_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $eighth_second_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $eighth_second_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($eighth_third_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $eighth_third_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $eighth_third_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($eighth_fourth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $eighth_fourth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $eighth_fourth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($eighth_fifth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $eighth_fifth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $eighth_fifth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($eighth_sixth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $eighth_sixth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $eighth_sixth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($eighth_seventh_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $eighth_seventh_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $eighth_seventh_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($eighth_eighth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $eighth_eighth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $eighth_eighth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($eighth_ninth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $eighth_ninth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $eighth_ninth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($eighth_tenth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $eighth_tenth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $eighth_tenth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<!--  eighth end*********************************************** 8th -->


<!--  ninth start*********************************************** 9th -->

<?php 
if($ninth_first_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $ninth_first_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $ninth_first_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($ninth_second_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $ninth_second_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $ninth_second_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($ninth_third_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $ninth_third_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $ninth_third_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($ninth_fourth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $ninth_fourth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $ninth_fourth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($ninth_fifth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $ninth_fifth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $ninth_fifth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($ninth_sixth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $ninth_sixth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $ninth_sixth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($ninth_seventh_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $ninth_seventh_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $ninth_seventh_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($ninth_eighth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $ninth_eighth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $ninth_eighth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($ninth_ninth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $ninth_ninth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $ninth_ninth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($ninth_tenth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $ninth_tenth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $ninth_tenth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<!--  ninth end*********************************************** 9th -->


<!--  tenth start*********************************************** 10th -->

<?php 
if($tenth_first_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $tenth_first_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $tenth_first_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($tenth_second_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $tenth_second_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $tenth_second_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($tenth_third_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $tenth_third_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $tenth_third_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($tenth_fourth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $tenth_fourth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $tenth_fourth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($tenth_fifth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $tenth_fifth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $tenth_fifth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($tenth_sixth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $tenth_sixth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $tenth_sixth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($tenth_seventh_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $tenth_seventh_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $tenth_seventh_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($tenth_eighth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $tenth_eighth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $tenth_eighth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($tenth_ninth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $tenth_ninth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $tenth_ninth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>

<?php 
if($tenth_tenth_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $tenth_tenth_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $tenth_tenth_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<!--  tenth end*********************************************** 10th -->







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

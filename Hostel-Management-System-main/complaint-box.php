<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for Complaint Box
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$class=$_POST['class'];
$contact=intVal($_POST['contact']);
$email=$_POST['email'];
$topic=$_POST['topic'];
$complaint=$_POST['complaint'];
$query="INSERT INTO `complaint_box`(`name`,`class`,`contact`,`email`,`topic`,`complaint`) values(?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssisss',$name,$class,$contact,$email,$topic,$complaint);
$rs=$stmt->execute(); 
if($rs)
{
	echo"<script>alert('Complaint Submitted Succssfully...!');</script>";
}
else
{
	echo"<script>alert('Unable to Submit Complaint...!');</script>";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Complaint Box</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h1 class="page-title">Complaint Box</h1>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill Complaint</div>
									<div class="panel-body">
										<form method="post" action="complaint-box.php" class="form-horizontal">
	<?php	
	$aid=$_SESSION['login'];
	$ret="select * from registration where emailid=?";
	$stmt= $mysqli->prepare($ret) ;
	$stmt->bind_param('s',$aid);
	$stmt->execute() ;//ok
	$res=$stmt->get_result();
	while($row=$res->fetch_object())
	{
	?>
		<input type="hidden" name="name" id="name"  class="form-control" value="<?php echo $row->firstName." ".$row->middleName." ".$row->lastName;?>">
		<input type="hidden" name="class" id="class"  class="form-control" value="<?php echo $row->course;?>">
		<input type="hidden" name="contact" id="contact"  class="form-control" value="<?php echo $row->contactno;?>">
		<input type="hidden" name="email" id="email"  class="form-control" value="<?php echo $row->emailid;?>">
	<?php
	} 
	?>
<div class="form-group">
<label class="col-sm-2 control-label">Topics : </label>
<div class="col-sm-8">
<select name="topic" class="form-control" required="required">
<option value="">Select Topic</option>
<option value="Food Related">Food Related</option>
<option value="Water Related">Water Related</option>
<option value="Room Maintenance Related">Room Maintenance Related</option>
<option value="Other">Other</option>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Complaint Box: </label>
<div class="col-sm-8">
<textarea  rows="5" name="complaint"  id="complaint" class="form-control" placeholder="Type Your Complaint Here..." required></textarea>
</div>
</div>

<div class="col-sm-6 col-sm-offset-4">
<input type="submit" name="submit" Value="Submit" class="btn btn-primary">
</div>
</form>

									</div>
									</div>
								</div>
							</div>
						</div>
							</div>
						</div>
					</div>
				</div> 	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
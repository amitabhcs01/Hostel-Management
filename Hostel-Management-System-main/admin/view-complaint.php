<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
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
	<title>Complaint Info</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h1 class="page-title">Complaint Info</h1>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Complaint Info</div>
									<div class="panel-body">
								<table id="zctb" class="table table-bordered " cellspacing="0" width="100%" table-layout="fixed">
									 
								<tbody>
<?php	
$id=$_GET['id'];
$ret="SELECT * FROM `complaint_box` WHERE id=?";
$stmt= $mysqli->prepare($ret) ;
$stmt->bind_param('i',$id);
$stmt->execute() ;//ok
$res=$stmt->get_result();

while($row=$res->fetch_object())
	  {
	  	?>
<tr>
<td colspan="2" width="100%"><h4>Complaint Info</h4></td>    
</tr>

<tr>
<td width="15%"><b>Name :</b></td>
<td><?php echo $row->name;?></td>
</tr>
<tr>
<td width="15%"><b>Class :</b></td>
<td><?php echo $row->class;?></td>
</tr>

<tr>
<td width="15%"><b>Contact No :</b></td>
<td><?php echo $row->contact;?></td>
      </tr>
      <tr>
<td width="15%"><b>Email Address :</b></td>
<td><?php echo $row->email;?></td>
</tr>

<tr>
<td width="15%"><b>Topic :</b></td>
<td style="word-break: break-all;"><?php echo $row->topic;?></td>
</tr

<tr>
<td width="15%"><b>Complaint :</b></td>
<td style="word-break: break-all;"><?php echo $row->complaint;?></td>
</tr>

</tbody>
</table>

<div class="col-sm-6 col-sm-offset-4">
<input class="btn btn-success" action="action" onclick="window.history.go(-1);return false;" type="submit" value="Close">
</div>
<?php
} 
?>
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
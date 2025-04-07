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

    <table id="zctb" class="table table-bordered " cellspacing="0" width="100%">
    <thead>		

    <tr>
    <th>Id</th>	
    <th>Name</th>											
    <th>Class</th>
    <th>Contact</th>											
    <th>Email</th>											
    <th>Issue Date</th>									
    <th>Topic</th>
    <th>View</th>
    </tr>

	</thead>

    <tbody>
<?php	
$aid=$_SESSION['id'];
$ret="select * from complaint_box order by issuedate desc";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
{
  	?>
<tr>
<td><?php echo $cnt;;?></td>
<td><?php echo $row->name;?></td>
<td><?php echo $row->class;?></td>
<td><?php echo $row->contact;?></td>
<td><?php echo $row->email;?></td>
<td><?php echo $row->issuedate;?></td>
<td><?php echo $row->topic;?></td>
<!-- <td><?php echo $row->complaint;?></td> -->
<td><a href="view-complaint.php?id=<?php echo $row->id;?>"><i class="fa fa-eye"></i></a></td>
</tr>
									<?php
$cnt=$cnt+1;
									 } ?>
											
										
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
<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<?PHP if(isset($_SESSION['login']))
				{ ?>
					<li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
					<li><a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
<li><a href="change-password.php"><i class="fa fa-edit"></i>Change Password</a></li>
<li><a href="book-hostel.php"><i class="fa fa-book"></i>Book Hostel</a></li>
<li><a href="room-details.php"><i class="fa fa-info-circle"></i>Room Details</a></li>
<li><a href="request-leave.php"><i class="fa fa-calendar"></i>Request Leave</a></li>
<li><a href="request-status.php"><i class="fa fa-calendar-check-o"></i>Leave Request Status</a></li>
<li><a href="anti-ragging.php"><i class="fa fa-shield"></i>Anti Ragging</a></li>
<li><a href="complaint-box.php"><i class="fa fa-envelope"></i>Complaint Box</a></li>
<li><a href="access-log.php"><i class="fa fa-file"></i>Access log</a></li>
<li><a href="logout.php"><i class="fa fa-sign-out"></i>Log Out</a></li>

<?php } else { ?>
				
				<li><a href="registration.php"><i class="fa fa-files-o"></i> User Registration</a></li>
				<li><a href="index.php"><i class="fa fa-users"></i> User Login</a></li>
				<li><a href="admin"><i class="fa fa-user"></i> Admin Login</a></li>
				<?php } ?>

			</ul>
		</nav>
<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<?PHP if(isset($_SESSION['id']))
				{ ?>
				<li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="change-password.php"><i class="fa fa-edit"></i> Change Password</a></li>

					<li><a href="#"><i class="fa fa-files-o"></i> Courses</a>
					<ul>
						<li><a href="add-courses.php">Add Courses</a></li>
						<li><a href="manage-courses.php">Manage Courses</a></li>
					</ul>
				</li>
					<li><a href="#"><i class="fa fa-desktop"></i> Rooms</a>
					<ul>
						<li><a href="create-room.php">Add a Room</a></li>
						<li><a href="manage-rooms.php">Manage Rooms</a></li>
					</ul>
				</li>

				<li><a href="manage-students.php"><i class="fa fa-users"></i>Manage Students</a></li>
				<li><a href="request-leave.php"><i class="fa fa-file"></i>Request Leave</a></li>
				<li><a href="complaint-box.php"><i class="fa fa-envelope"></i>Complaint Box</a></li>
				<li><a href="access-log.php"><i class="fa fa-user"></i>User Access logs</a></li>
				<li><a href="logout.php"><i class="fa fa-sign-out"></i>Log Out</a></li>

<?php }else { ?>		
				<li><a href="registration.php"><i class="fa fa-files-o"></i> User Registration</a></li>
				<li><a href="index.php"><i class="fa fa-users"></i> User Login</a></li>
				<li><a href="admin"><i class="fa fa-user"></i> Admin Login</a></li>
				<?php } ?>
				</ul>

			
		</nav>
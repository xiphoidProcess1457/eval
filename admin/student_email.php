<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
		
			<div class="card-tools">
	
			<a class="btn btn-sm btn-default btn-flat border-primary" href="./index.php?page=new_student"><i class="fa fa-paper-plane"></i> Email Passwords</a>
				<a class="btn btn-sm btn-default btn-flat border-primary" href="./index.php?page=new_student"><i class="fa fa-plus"></i> Add New Student</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-borderless" id="list">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>School ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Current Class</th>
						<th>Password</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$class= array();
					$classes = $conn->query("SELECT id,concat(curriculum,' ',level,' - ',section) as `class` FROM class_list");
					
					while($row=$classes->fetch_assoc()){
						$class[$row['id']] = $row['class'];
					}
					$qry = $conn->query("SELECT *,concat(firstname,' ',lastname) as name FROM student_list order by concat(firstname,' ',lastname) asc");
					while($row= $qry->fetch_assoc()):
					?>

					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b><?php echo $row['school_id'] ?></b></td>
						<td><b><?php echo ucwords($row['name']) ?></b></td>
						<td><b><?php echo $row['email'] ?></b></td>
						<td><b><?php echo isset($class[$row['class_id']]) ? $class[$row['class_id']] : "N/A" ?></b></td>
						<td><b><?php echo $row['clear_password'] ?></b></td>
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
		                    <div class="dropdown-menu" style="">
		                      <a class="dropdown-item view_student" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">View</a>
		                      <div class="dropdown-divider"></div>
		                      <a class="dropdown-item" href="./index.php?page=edit_student&id=<?php echo $row['id'] ?>">Edit</a>
		                      <div class="dropdown-divider"></div>
		                      <a class="dropdown-item delete_student" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Delete</a>
		                    </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>


<?php
      
		$sql = "SELECT id, email, clear_password FROM student_list";
		$result = mysqli_query($conn, $sql);
		
		require("mailer/PHPMailer.php");
		require("mailer/SMTP.php");
		require("mailer/Exception.php");
		if(mysqli_num_rows($result) > 0) {

			while($row = mysqli_fetch_assoc($result)) {
				$rows[] = $row;
				foreach($rows as $row){ 
				
				
				// Server settings
				$mail = new PHPMailer\PHPMailer\PHPMailer();
				
				// Enable verbose debug output
				$mail->isSMTP(); 
				
				// Send using SMTP
				$mail->Host = "smtp.gmail.com";
				$mail->SMTPAuth = true;
				
				// SMTP username
				$mail->Username = "philippinepublicsafetycollege@gmail.com"; 
				
				// SMTP password                   
				$mail->Password = "qwerty_123";
				$mail->SMTPAuth = "tls";
				$mail->Port = 587;           
				
				//Recipients
				// This email-id will be taken
				// from your database
				$mail->setFrom("###");
				
				// Selecting the mail-id having
				// the send-mail =1
				$sql = "select * from users where send_mail=1";
				
				// Query for the makeing the connection.
				$res = mysqli_query($conn, $sql);
				
				$mail->Sender="philippinepublicsafetycollege@gmail.com"; // indicates ReturnPath header
				$mail->IsHTML(true);
				$mail->Subject = 
						"Faculty Evaluation";
				$mail->Body = "<h1>Faculty Evaluation</h1>Please Login using your credentials which is your email<br><b>"
				. $row['email']."</b><br>and your password<br><b>"
				. $row['clear_password']. "</b><br>to access your faculty evaluation";
						$mail->addAddress($row['email']);
						$mail->send();
				
				
				
				}
			}	
					
				} 
  ?>

<script>
  setTimeout(function () {   
	alert_toast("Passwords Have been Sent to all Students",'success') 
    window.location.href = './index.php?page=student_list'; 
},100); // 5 seconds
</script>
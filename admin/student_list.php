<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
		
			<div class="card-tools">
	
			<a class="btn btn-sm btn-default btn-flat border-primary" onclick="myFunction()"><i class="fa fa-paper-plane"></i> Email Passwords</a>
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
      
	  if(isset($_POST['button1'])) {
		$sql = "SELECT id, firstname, lastname FROM student_list";
		$result = mysqli_query($conn, $sql);
	
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
			}
		} else {
			echo "0 results";
		}
	  }
	  if(isset($_POST['button2'])) {
		  echo "This is Button2 that is selected";
	  }
  ?>
<script>
	$(document).ready(function(){
	$('.view_student').click(function(){
		uni_modal("<i class='fa fa-id-card'></i> student Details","<?php echo $_SESSION['login_view_folder'] ?>view_student.php?id="+$(this).attr('data-id'))
	})
	$('.delete_student').click(function(){
	_conf("Are you sure to delete this student?","delete_student",[$(this).attr('data-id')])
	})
		$('#list').dataTable()
	})
	function delete_student($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_student',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>
<script>
function myFunction() {
	alert_toast("Passwords are being been Sent to all Students",'success')
					setTimeout(function(){
						location.reload()
						window.location.href = './index.php?page=student_email'; 
					},1500)
}
</script>


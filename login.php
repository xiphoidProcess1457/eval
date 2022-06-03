<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include('./db_connect.php');
  ob_start();
  // if(!isset($_SESSION['system'])){

    $system = $conn->query("SELECT * FROM system_settings")->fetch_array();
    foreach($system as $k => $v){
      $_SESSION['system'][$k] = $v;
    }
  // }
  ob_end_flush();
?>
<?php 
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>
<?php include 'header.php' ?>
<body class="hold-transition login-page">
<div class="container">

  <div class="row">
    <div class="col">
      <img src="assets/dist/assets/ppsc.svg" alt="">
     
    </div>
    <div class="col">
    <div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <form action="" id="login-form">
        

      <div class="input-group mb-3 hide">
         
          <span class="input-group-append">
                    <i class="fa fa-eye-slash fa-icon" aria-hidden="true" onclick="myFunction()"></i>
               </div>          
        </div>
        
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" required placeholder="Email">
        </div>

       


        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" required placeholder="Password" id="InputForPassword">
          <span class="input-group-append">
          <div class="input-group-text bg-transparent form-rounded" onclick="myFunction()"><i class="fa fa-eye-slash fa-icon"></i></div>
               </div>          
        </div>




        <div class="form-group mb-3 form-select">
          <label for="">Login As</label>
          <select name="login" id="" class="custom-select custom-select-sm">
            <option value="3">Student</option>
            <option value="1">Admin</option>
          </select>
        </div>
        <button type="submit" class="btn btn-block signin-button">SIGNIN</button>
    </div>
    
  </div>

  
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<script>
function myFunction() {
  var x = document.getElementById("InputForPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script>
  $(document).ready(function(){
    $('#login-form').submit(function(e){
    e.preventDefault()
    start_load()
    if($(this).find('.alert-danger').length > 0 )
      $(this).find('.alert-danger').remove();
    $.ajax({
      url:'ajax.php?action=login',
      method:'POST',
      data:$(this).serialize(),
      error:err=>{
        console.log(err)
        end_load();

      },
      success:function(resp){
        if(resp == 1){
          location.href ='index.php?page=home';
        }else{
          $('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
          end_load();
        }
      }
    })
  })
  })
</script>
<?php include 'footer.php' ?>

</body>
</html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php 
  date_default_timezone_set("Asia/Manila");
  
  ob_start();
  $title = isset($_GET['page']) ? ucwords(str_replace("_", ' ', $_GET['page'])) : "Home";
  ?>
  <title><?php echo $title ?> | <?php echo $_SESSION['system']['name'] ?></title>
  <?php ob_end_flush() ?>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.14.1/xlsx.full.min.js"></script>
   <!-- Select2 -->
  <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
   <!-- SweetAlert2 -->
  <link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
   <!-- Jquery-UI -->
  <link rel="stylesheet" href="assets/plugins/jquery-ui/jquery-ui.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="assets/plugins/dropzone/min/dropzone.min.css">
  <!-- DateTimePicker -->
  <link rel="stylesheet" href="assets/dist/css/jquery.datetimepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Switch Toggle -->
  <link rel="stylesheet" href="assets/plugins/bootstrap4-toggle/css/bootstrap4-toggle.min.css">
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="assets/dist/css/adminlte.min.css"> -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/dist/css/styles.css">
	<script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- summernote -->
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">
  <!-- Jquery-UI -->
  <link rel="stylesheet" href="assets/dist/css/login.css">
  <link rel="stylesheet" href="assets/dist/css/sidebar.css">
  <link rel="icon" type="image/x-icon" href="assets/dist/assets/ppsc.svg">
</head>

<style>
  *{
    font-family: 'Montserrat', sans-serif;
  }

  .main-footer{
    display:none;
    height: 0;
  }

  .sidebar{
    padding-top: 6vh;
  }

  .dropdown{
    border: none;
  }

  .brand-link{
    text-decoration:none;
    padding-left: 15px;
    padding-bottom: -15px;
  }

 .logo-name{
   font-size:100%;
   width: 30%;
   color: black;
 }
 .logo-name:hover{
   color: black;
 }

 *{
   color: #0a4da6;
 }

 i{
   color: #056cf2;
 }

 .main-header{
   border:none;
 }

 .content-wrapper{
   background: #ffff;
 }

.btn-primary{
  background-color: #0a4da6;
  border:none;
  border-radius:50px;
  font-weight: 700;
  font-size: 110%;
}

.input-group-text{
  border-radius:50px;
}






.form-rounded {
  border-top-right-radius: 50px;
    border-bottom-right-radius: 50px;
    color:#f5f5f5;
}

.hide{
  display:none;
    height: 0;
}
.login-box{
  position:absolute;
  top:12%;
}






.btn-secondary{
  background-color: #056cf2;
  border:none;
  border-radius:50px;
  font-weight: 700;
  font-size: 110%;
}

.card{
  padding-top: 1%;
  border:none;
  box-shadow:none;
}

.card-primary.card-outline{
 border:none;
}

hr{
  border:none;
}

.card-header{
  border:none;
}

.custom-select{
  border:none;
  box-shadow:none;
}

.card-success.card-outline{
  border:none;
}

.card-info.card-outline,
.callout.callout-info
{
  border:none;
  box-shadow:none;
}


.container{
    padding-top: 4%;
    background-color: #ffff;
}

.form-control{
    border:none;
    border-radius:50px;
    height: 5vh;
    padding: 10px;
    padding-left: 20px;
    background-color: whitesmoke;
    
}

.custom-select{
    border-radius:50px;
    height: 5vh;
    font-weight: 700;
    font-size: 110%;
    padding: 10px;
    padding-left: 20px;
    background-color: whitesmoke;
}


.signin-button{
    border-radius:50px;
    height: 5vh;
    font-size: 110%;
    background-color: #056CF2;
    color: aliceblue;
    font-weight: 600;
    
}
.remember{
    font-weight: 700;
}

#login-form{
}

.form-select{
    font-weight: 700;
}

.login-page{
  background-color: #ffff;
}
.manage_academic,
.delete_academic,
.manage_class,
.delete_class,
.manage_subject,
.delete_subject{
  background-color: #ffff;
  border:none;
  box-shadow:none;
  margin-left: 10px;
  border-radius:5px;
}
</style>


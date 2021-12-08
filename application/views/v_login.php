<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="icon" type="image/png" href="<?php echo base_url() ?>images/icons/favicon.ico"/>
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/animate/animate.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/util.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/main.css">

</head>
<body>
    <h1></h1>
    <form action="login/aksi_login" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>

    <!--===============================================================================================-->
    	<script src="<?php echo base_url() ?>vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    	<script src="<?php echo base_url() ?>vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    	<script src="<?php echo base_url() ?>vendor/bootstrap/js/popper.js"></script>
    	<script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    	<script src="<?php echo base_url() ?>vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    	<script src="<?php echo base_url() ?>vendor/daterangepicker/moment.min.js"></script>
    	<script src="<?php echo base_url() ?>vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    	<script src="<?php echo base_url() ?>vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    	<script src="<?php echo base_url() ?>js/main.js"></script>
</body>
</html>

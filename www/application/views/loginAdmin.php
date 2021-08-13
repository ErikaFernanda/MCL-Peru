<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
   <!--Made with love by Mutiullah Samim -->
   <link href="<?=base_url();?>assets/css/creative.min.css" rel="stylesheet">
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link href="<?=base_url();?>assets/css/cssLogin.css" rel="stylesheet">
</head>
<body>
<div class="container">

	<?php if($this->session->flashdata("success")):?>

	<h1><?=redirect('Admin')?></h1>
	<?php endif ?>
	<?php if($this->session->flashdata("danger")): ?>
	<h1><?=$this->session->flashdata("danger")?></h1>
	<?php endif ?>
	



	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				
				<div class="d-flex justify-content-end social_icon">
					<img id="logo" src="<?=base_url();?>assets/img/logoferia.png" >
				</div>
			</div>
			<center>
				<img id="useradmin" style="width: 130px;" src="<?=base_url();?>assets/img/user.png" >
				<h4 style="color: lightgray;">ADMINISTRADOR</h4>
			</center>

			<div class="card-body">

				<form method="post" action ="login/autenticar">  
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="codigo" type="text" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input name="senha" type="password" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<!-- <input type="checkbox">Remember Me -->
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<!-- Don't have an account?<a href="#">Sign Up</a> -->
				</div>
				<div class="d-flex justify-content-center">
					<!-- <a href="#">Forgot your password?</a> -->
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
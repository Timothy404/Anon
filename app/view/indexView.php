<div class="login-container">
	<div class="container">
		<div class="card">
			<div class="card-body"><br/>
				<form method="POST" action="<?=PROOT?>">
				<center><h3>Sign In <b>Anon</b></h3></center>
				<?php
					echo $empty_err;
					echo $invalid_err;
				?>
				<label>Email</label>
				<input type="email" name="email" class="form-control" required><br/>
				<label>Password</label>
				<input type="password" name="password" class="form-control" required><br/>
				<center>
					<button name="login_btn" class="btn btn-outline-success">Login</button>
					<br/><br/>
					<p>New Here? <a href="<?=PROOT?>signup">Sign Up</a></p>
				</center>
			</div>
		</div>
	</div>
</div>

		<style type="text/css">
			.login-container{
				margin: auto;
				width: 450px;
				margin-top: 5%;
			}
		</style>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/jquery.js"></script>
		<script>
		function resetSearch() {
			window.location.assign("<?=PROOT?>")
		}
		</script>


</body>
</html>
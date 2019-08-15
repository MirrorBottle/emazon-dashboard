<div class="container">
	<div class="card card-login mx-auto mt-5">
		<div class="card-header text-center">Login</div>
		<div class="card-body">
			<!-- <div class="alert alert-success" role="alert"></div> -->
			<form method="post">
				<div class="form-group">
					<div class="form-label-group">
						<input type="email" id="email" name="email" class="form-control" placeholder="Email address" autofocus>
						<label for="email">Email address</label>
					</div>
				</div>
				<div class="form-group">
					<div class="form-label-group">
						<input type="password" id="password" name="password" class="form-control" placeholder="Password">
						<label for="password">Password</label>
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">
						<label for="rememberMe">
							<input type="checkbox" name="rememberMe" id="rememberMe">
							Remember Password
						</label>
					</div>
				</div>
				<button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
			</form>
			<div class="text-center">
				<a class="d-block small mt-3" href="<?= base_url('register'); ?>">Register an Account</a>
			</div>
		</div>
	</div>
</div>

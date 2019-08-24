<div class="container">
	<div class="card card-register mx-auto mt-5">
		<div class="card-header text-center">Register</div>
		<div class="card-body">

			<?php if( $this->session->has_userdata('auth_message') ): ?>
				<?php $message = $this->session->flashdata('auth_message'); ?>
				<div class="alert alert-<?= $message['type']; ?>" role="alert">
					<?= $message['text']; ?>
				</div>
			<?php endif; ?>

			<form method="post">
				<div class="form-group">
					<div class="form-row">
						<div class="col">
							<div class="form-label-group">
								<input type="text" id="firstName" name="firstName" class="form-control" placeholder="Full name"
								autofocus="autofocus" value="<?= set_value('firstName'); ?>">
								<?= form_error('firstName', '<small class="text-danger ml-1">', '</small>'); ?>
								<label for="firstName">First name</label>
							</div>
						</div>
						<div class="col">
							<div class="form-label-group">
								<input type="text" id="lastName" name="lastName" class="form-control" placeholder="Full name"
								autofocus="autofocus" value="<?= set_value('lastName'); ?>">
								<?= form_error('lastName', '<small class="text-danger ml-1">', '</small>'); ?>
								<label for="lastName">Last name</label>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="form-label-group">
						<input type="email" id="email" name="email" class="form-control" placeholder="Email address" value="<?= set_value('email'); ?>">
						<?= form_error('email', '<small class="text-danger ml-1">', '</small>'); ?>
						<label for="email">Email address</label>
					</div>
				</div>
				<div class="form-group">
					<div class="form-row">
						<div class="col-md-6">
							<div class="form-label-group">
								<input type="password" id="password" name="password" class="form-control" placeholder="Password">
								<?= form_error('password', '<small class="text-danger ml-1">', '</small>'); ?>
								<label for="password">Password</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-label-group">
								<input type="password" id="confirmPassword" name="confirmPassword" class="form-control"
									placeholder="Confirm password">
								<?= form_error('confirmPassword', '<small class="text-danger ml-1">', '</small>'); ?>
								<label for="confirmPassword">Confirm password</label>
							</div>
						</div>
					</div>
				</div>
				<button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
			</form>
			<div class="text-center">
				<a class="d-block small mt-3" href="<?= base_url('login'); ?>">Login Page</a>
				<a class="d-block small" href="<?= base_url('forgot_password'); ?>">Forgot Password?</a>
			</div>
		</div>
	</div>
</div>

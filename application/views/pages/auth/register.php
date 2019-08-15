<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header text-center">Register</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col">
                <div class="form-label-group">
                  <input type="text" id="name" name="name" class="form-control" placeholder="Full name" autofocus="autofocus">
                  <label for="name">Full name</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="email" name="email" class="form-control" placeholder="Email address">
              <label for="email">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                  <label for="password">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm password">
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
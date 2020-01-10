  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-12 col-md-9 col-xl-10 mx-auto" >
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="name" placeholder="Full name" name="name" value="<?= set_value('name'); ?>">
                  <?php echo form_error('name', '<small id="name" class="form-text text-danger ml-2">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" placeholder="Email Address" name="email" value="<?= set_value('email'); ?>">
                  <?php echo form_error('email', '<small id="email" class="form-text text-danger ml-2">', '</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" placeholder="Password" name="pass1">
                    <?php echo form_error('pass1', '<small id="password1" class="form-text text-danger ml-2">', '</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" placeholder="Repeat Password" name="pass2">
                    <?php echo form_error('pass2', '<small id="password2" class="form-text text-danger ml-2">', '</small>'); ?>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Create Account
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth/forgot_password'); ?>">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


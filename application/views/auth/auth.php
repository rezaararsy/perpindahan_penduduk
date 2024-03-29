<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header1');
?>
<body style="background-color: #002544;">
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?php echo base_url(); ?>assets/logo.png" alt="logo" width="180" style="background-color:white; border-radius:30px; padding:20px" class="shadow-light">
              <!-- <h2 style="color: white; margin-top: 20px;">LAPOR PAK !</h1> -->
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url(). 'auth/login_auth'; ?>" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input id="text" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your username
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="<?php echo base_url(); ?>dist/auth_forgot_password" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      Please fill in your password
                    </div>
                  </div>

                  <!-- <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div> -->

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                <center><h6><?php echo $this->session->flashdata('message');?></h6></center>

              </div>
            </div>
            <!-- <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="<?php echo base_url(); ?>dist/auth_register">Create One</a>
            </div> -->
            <div class="simple-footer" style="color: white;">
              Copyright &copy; Dispendukcapil Kota Malang
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php $this->load->view('dist/_partials/js'); ?>
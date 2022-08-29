<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header1');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Ubah User</h1>
            <!-- <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Forms</a></div>
              <div class="breadcrumb-item">Advanced Forms</div>
            </div> -->
          </div>

          <div class="section-body">
            <!-- <h2 class="section-title">Advanced Forms</h2>
            <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p> -->

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Masukkan Data Diri</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Nama Ketua RT</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fas fa-lock"></i>
                          </div>
                        </div>
                        <input type="password" class="form-control pwstrength" data-indicator="pwindicator">
                      </div>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Konfirmasi Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fas fa-lock"></i>
                          </div>
                        </div>
                        <input type="password" class="form-control pwstrength" data-indicator="pwindicator">
                      </div>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>No RT</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>No RW</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Kelurahan</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Kecamatan</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <button class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>                
              </div>
            </div>
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>
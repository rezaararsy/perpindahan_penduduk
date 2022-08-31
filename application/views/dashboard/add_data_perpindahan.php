<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header1');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Perpindahan Penduduk</h1>
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
                    <h4>Masukkan Perpindahan Penduduk</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Pilih Kecamatan</label>
                      <select class="form-control" id="zoneSelect" onchange="updateChar()">
                        <option disabled selected value="">Pilih Kecamatan</option>
                        <option value="Blimbing">Blimbing</option>
                        <option value="Klojen">Klojen</option>
                        <option value="Lowokwaru">Lowokwaru</option>
                        <option value="Kedungkandang">Kedungkandang</option>
                        <option value="Sukun">Sukun</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pilih Kelurahan</label>
                      <select class="form-control" id="kelurahanya" onchange="updateChar2()">
                      <option disabled selected value="">Pilih Kelurahan</option>

                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pilih RW</label>
                      <select class="form-control" id="rwnya">
                      <option disabled selected value="">Pilih RW</option>

                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pilih RT</label>
                      <select class="form-control" id="rtnya">
                      <option disabled selected value="">Pilih RT</option>

                      </select>
                    </div>
                    <div class="form-group">
                      <label>NIK Penduduk Yang Pindah</label>
                      <input type="number" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Nama Penduduk Yang Pindah</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Jenis Perpindahan</label>
                      <select class="form-control">
                      <option disabled selected value="">Pilih Jenis Perpindahan</option>
                        <option value="">Pindah Masuk</option>
                        <option>Pindah Keluar</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>No SKPWNI</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Tgl Pindah</label>
                      <input type="date" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Alamat di RT</label>
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
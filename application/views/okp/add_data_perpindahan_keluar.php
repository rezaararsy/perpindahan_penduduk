<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header1');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Perpindahan Penduduk Keluar</h1>
            <!-- <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Forms</a></div>
              <div class="breadcrumb-item">Advanced Forms</div>
            </div> -->
          </div>

          <div class="section-body">
            <!-- <h2 class="section-title">Advanced Forms</h2>
            <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p> -->
            <form action="<?php echo base_url(). 'dashboard/inputData1'; ?>" method="post">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Masukkan Perpindahan Penduduk</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Pilih Kecamatan</label>
                      <select required name="kecamatan" class="form-control" id="zoneSelect" onchange="updateChar()">
                        <option disabled selected value="">Pilih Kecamatan</option>
                        <option value="1">Blimbing</option>
                        <option value="2">Klojen</option>
                        <option value="5">Lowokwaru</option>
                        <option value="3">Kedungkandang</option>
                        <option value="4">Sukun</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pilih Kelurahan</label>
                      <select required name="kelurahan" class="form-control" id="kelurahanya" onchange="updateChar2()">
                      <option disabled selected value="">Pilih Kelurahan</option>

                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pilih RT</label>
                      <select required name="rt" class="form-control" id="rtnya">
                      <option disabled selected value="">Pilih RT</option>

                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pilih RW</label>
                      <select required name="rw" class="form-control" id="rwnya">
                      <option disabled selected value="">Pilih RW</option>

                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Alamat di RT</label>
                      <input required name="alamat_rt" type="text" class="form-control">
                      <input name="kodekelurahan" id="kodekelurahan" type="hidden" class="form-control">
                    </div>
                    <!-- <div class="form-group">
                      <label>NIK Penduduk Yang Pindah</label>
                      <input required name="nik" type="number" class="form-control">
                    </div> -->
                    <div class="form-group">
                      <label>Nama Penduduk Yang Pindah</label>
                      <input required name="nama" type="text" class="form-control">
                    </div>
                    <!-- <div class="form-group">
                      <label>Jenis Perpindahan</label>
                      <select required name="jenis_pindah" class="form-control">
                      <option disabled selected value="">Pilih Jenis Perpindahan</option>
                        <option value="1">Pindah Masuk</option>
                        <option value="2">Pindah Keluar</option>
                      </select>
                    </div> -->
                    <div class="form-group">
                      <label>No SKPWNI</label>
                      <input required name="skpwni" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Tgl Pindah Keluar</label>
                      <input required name="tgl_pindah" type="date" class="form-control">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>                
              </div>
            </div>
            </form>
          </div>
        </section>
      </div>

      
<?php $this->load->view('dist/_partials/footer'); ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header1');
?>
      <!-- Main Content -->
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Impor Data Perpindahan Penduduk Kota Malang</h1>

          </div>

          <div class="section-body">
   

            <div class="row">
              <div class="col-12">
                <div class="card">
                  
                  <div class="card-body">
                    <a href="<?php echo base_url(); ?>template.xlsx"><button type="submit" class="btn btn-success">Download Template</button></a>
                    <br><br>
                    <form action="<?php echo base_url();?>dashboard/importFile" method="post" enctype="multipart/form-data">
                    <h6>Pilih File</h6><br>
                    <input type="file" name="uploadFile" value="Pilih File" /><br><br>
                    <button type="submit" class="btn btn-danger">Impor Data</button>
                    </form>
                    <br>
                    <br>   
                    <br>                 
                    <h5>Kode Panduan Kecamatan, Kelurahan, Dan RT</h5>
                    <a href="<?php echo base_url(); ?>panduan.xlsx"><button type="submit" class="btn btn-primary">Download Panduan</button></a>
                    <br><br>
                    <img src="<?php echo base_url(); ?>assets/panduan.png" alt="logo" width="80%" class="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

 
<?php $this->load->view('dist/_partials/footer'); ?>
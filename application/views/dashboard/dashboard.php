<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header1');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
            
          </div>
          <h4><?php echo $this->session->flashdata('message');?></h4>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Pindah Masuk</h4>
                  </div>
                  <div class="card-body">
                  <?php echo $masuk; ?> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Pindah Keluar</h4>
                  </div>
                  <div class="card-body">
                  <?php echo $keluar; ?> 
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Reports</h4>
                  </div>
                  <div class="card-body">
                    1,201
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Online Users</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div>                   -->
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
               <div class="card">
                  <div class="card-header">
                    <h4>Grafik Perpindahan Datang Penduduk Tahun 2022</h4>
                  </div>
                  <div class="card-body">
                    <canvas id="myChart99"></canvas>
                  </div>
                </div>
              
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
               <div class="card">
                  <div class="card-header">
                    <h4>Grafik Perpindahan Keluar Penduduk Tahun 2022</h4>
                  </div>
                  <div class="card-body">
                    <canvas id="myChart999"></canvas>
                  </div>
                </div>
              
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
               <div class="card">
                  <div class="card-header">
                    <h4>Grafik Perpindahan Kecamatan Blimbing Penduduk Tahun 2022</h4>
                  </div>
                  <div class="card-body">
                    <canvas id="myChart11"></canvas>
                  </div>
                </div>
              
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
               <div class="card">
                  <div class="card-header">
                    <h4>Grafik Perpindahan Kecamatan Klojen Penduduk Tahun 2022</h4>
                  </div>
                  <div class="card-body">
                    <canvas id="myChart12"></canvas>
                  </div>
                </div>
              
            </div>
          </div>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>
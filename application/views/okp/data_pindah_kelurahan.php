<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header1');
?>
      <!-- Main Content -->
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Perpindahan Penduduk <?php echo $this->session->userdata('nama'); ?></h1>

          </div>

          <div class="section-body">
   

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <!-- <h4>Basic DataTables</h4> -->
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table_id4" style="width:100%">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Nama Penduduk</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Alamat di RT</th>
                            <th>Tgl Pindah</th>
                            <th>Jenis Perpindahan</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <!-- <tbody>                                 
                          <tr>
                            <td>
                              1
                            </td>
                            <td>Reza Ararsy</td>
                            <td>
                              Joyogrand Blok B1/03
                            </td>
                            <td>
                                2018-01-20
                            </td>
                            <td>Pindah Masuk</td>
                            <td><a href="#" class="btn btn-primary">Action</a></td>
                          </tr>

                        </tbody> -->
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>


      <form id="add-row-form" action="<?php echo base_url().'pengguna_okp/updateData'?>" method="post"
        enctype="multipart/form-data">
        <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <input type="hidden" name="id_perpindahan" class="form-control" required>
                      <!-- <div class="form-group">
                        <label>Pilih Kecamatan</label>
                        <select required name="kecamatan" class="form-control" id="zoneSelect" onchange="updateChar()">
                          <option disabled selected value="">Pilih Kecamatan</option>
                          <option value="1">Blimbing</option>
                          <option value="2">Klojen</option>
                          <option value="3">Lowokwaru</option>
                          <option value="4">Kedungkandang</option>
                          <option value="5">Sukun</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Pilih Kelurahan</label>
                        <select required name="kelurahan" class="form-control" id="kelurahanya" onchange="updateChar2()">
                        <option disabled selected value="">Pilih Kelurahan</option>
  
                        </select>
                      </div> -->
                      <div class="form-group">
                        <!-- <label>Pilih RW</label>
                        <select required name="rw" class="form-control" id="rwnya">
                        <option disabled selected value="">Pilih RW</option>
  
                        </select> -->
                        <label>Masukkan RT</label>
                        <input required name="rt" type="number" class="form-control">
                      </div>
                      <div class="form-group">
                        <!-- <label>Pilih RT</label>
                        <select required name="rt" class="form-control" id="rtnya">
                        <option disabled selected value="">Pilih RT</option>
  
                        </select> -->
                        <label>Masukkan RW</label>
                        <input required name="rw" type="number" class="form-control">
                      </div>
                      <!-- <div class="form-group">
                        <label>NIK Penduduk Yang Pindah</label>
                        <input required name="nik" type="number" class="form-control">
                      </div> -->
                      <div class="form-group">
                        <label>Nama Penduduk Yang Pindah</label>
                        <input required name="nama" type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Jenis Perpindahan</label>
                        <select required name="jenis_pindah" class="form-control">
                        <option disabled selected value="">Pilih Jenis Perpindahan</option>
                          <option value="1">Pindah Masuk</option>
                          <option value="2">Pindah Keluar</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>No SKPWNI</label>
                        <input required name="skpwni" type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Tgl Pindah</label>
                        <input required name="tgl_pindah" type="date" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Alamat di RT</label>
                        <input required name="alamat_rt" type="text" class="form-control">
                      </div>   
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="add-row" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


<?php $this->load->view('dist/_partials/footer'); ?>
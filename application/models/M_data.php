<?php

defined('BASEPATH') OR exit ('No direct script access allowed');


class M_Data extends CI_Model
{
    function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  function cek_login($table,$where){
    return $this->db->get_where($table,$where);
  }
  function input_data($data,$table){
    $this->db->insert($table,$data);
  }
  public function insertImport($data) {
    $res = $this->db->insert_batch('perpindahan',$data);
    if($res){
    return TRUE;
    }else{
    return FALSE;
    }
  }
  function getDataPerpindahan(){
    $this->datatables->select('id_perpindahan,kecamatan,kelurahan,rw,rt,nik,nama,jenis_pindah,skpwni,tgl_pindah,alamat_rt');
    $this->datatables->from('perpindahan');
    // $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-harga="$4">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama_produk,jml_stock,harga');
    return $this->datatables->generate();
  }
  function getDataPerpindahan2($rt,$rw,$kelurahan,$kecamatan){
    $this->datatables->select('id_perpindahan,kecamatan,kelurahan,rw,rt,nik,nama,jenis_pindah,skpwni,tgl_pindah,alamat_rt');
    $this->datatables->from('perpindahan');
    $this->datatables->where('rt', $rt);
    $this->datatables->where('rw', $rw);
    $this->datatables->where('kelurahan', $kelurahan);
    $this->datatables->where('kecamatan', $kecamatan);
    // $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-success" data-kode="$1" data-nama="$2" data-jml="$3" data-harga="$4">Edit<i class="fa fa-fw fa-edit"></i></a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger" data-kode="$1">Hapus<i class="fa fa-fw fa-trash"></i></a>','id,nama_produk,jml_stock,harga');
    return $this->datatables->generate();
  }
  function get_pindah($id){
    $hasil=$this->db->query("SELECT * FROM perpindahan WHERE id_perpindahan='$id'");
        return $hasil->result();
  }

  function get_masuk(){
    $hasil=$this->db->query("SELECT * FROM perpindahan WHERE jenis_pindah=1");
        return $hasil->num_rows();
  }
  function get_keluar(){
    $hasil=$this->db->query("SELECT * FROM perpindahan WHERE jenis_pindah=2");
        return $hasil->num_rows();
  }

  function get_masuk1($rt,$rw,$kelurahan,$kecamatan){
    $hasil=$this->db->query("SELECT * FROM perpindahan WHERE jenis_pindah=1 AND rt=$rt AND rw=$rw AND kelurahan=$kelurahan AND kecamatan=$kecamatan");
        return $hasil->num_rows();
  }
  function get_keluar1($rt,$rw,$kelurahan,$kecamatan){
    $hasil=$this->db->query("SELECT * FROM perpindahan WHERE jenis_pindah=2 AND rt=$rt AND rw=$rw AND kelurahan=$kelurahan AND kecamatan=$kecamatan");
        return $hasil->num_rows();
  }
}
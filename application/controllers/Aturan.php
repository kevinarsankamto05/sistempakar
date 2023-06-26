<?php
defined('BASEPATH') or exit('No direct script access allowed');

class aturan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    cekLogin();
    $this->load->model('aturan_model', 'MP');
  }

  // Halaman aturan/Aturan
  public function index()
  {
    $data['judul'] = "Halaman Aturan";
    $data['user'] = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();

    $data['gejala'] = $this->MP->getAllGejala();
    $data['penyakit'] = $this->MP->getAllpenyakit();
    $data['aturan'] = $this->MP->getAllaturan();

    $this->load->view('templates/Admin_header', $data);
    $this->load->view('templates/Admin_sidebar', $data);
    $this->load->view('templates/Admin_topbar');
    $this->load->view('admin/aturan/index', $data);
    $this->load->view('templates/Admin_footer');
    $this->load->view('admin/aturan/modal_tambah_aturan', $data);
    $this->load->view('admin/aturan/modal_ubah_aturan', $data);
  }

  // Tambah aturan/Aturan
  public function tambah()
  {
    $data['judul'] = 'Halaman Aturan';
    $data['user'] = $this->db->get_where('tbl_user', [
      'username' => $this->session->userdata('username')
    ])->row_array();

    $this->MP->tambahaturan();
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade in" role="alert">Data Aturan Berhasil ditambahkan!</div>'); //buat pesan akun berhasil dibuat
    redirect('aturan');
  }

  // Ubah aturan/Aturan
  public function ubah()
  {
    $this->MP->ubahaturan();
    //buat pesan aturan berhasil dibuat
    $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">Data Aturan Berhasil diubah!</div>');
    redirect('aturan');
  }

  // Hapus aturan/Aturan
  public function hapus($id)
  {
    $this->MP->hapus($id);
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data Aturan Berhasil dihapus!</div>'); //buat pesan akun berhasil dibuat
    redirect('aturan');
  }
}

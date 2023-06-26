<?php

class Aturan_model extends CI_model
{
  // Menampilkan seluruh isi tabel aturan
  public function getAllaturan()
  {
    // menampilkan seluruh data gejala yang ada di tabel gejala.
    $queryRule = "SELECT `tbl_aturan`.`id`,`tbl_penyakit`.`kode_penyakit`,`tbl_penyakit`.`nama_penyakit`,`tbl_gejala`.`kode_gejala`,`tbl_gejala`.`nama_gejala`,`tbl_aturan`.`probabilitas`
    FROM `tbl_penyakit` JOIN `tbl_aturan` 
    ON `tbl_penyakit`.`id_penyakit` = `tbl_aturan`.`id_penyakit`
    JOIN `tbl_gejala` 
    ON `tbl_aturan`.`id_gejala` = `tbl_gejala`.`id_gejala`
                        ";
    return $this->db->query($queryRule)->result_array();

    //return $this->db->get('tbl_aturan')->result_array();
  }

  // Menampilkan seluruh isi tabel gejala
  public function getAllGejala()
  {
    // menampilkan seluruh data gejala yang ada di tabel gejala.
    return $this->db->get('tbl_gejala')->result_array();
  }

  // Menampilkan seluruh isi tabel penyakit
  public function getAllpenyakit()
  {
    // menampilkan seluruh data penyakit yang ada di tabel penyakit.
    return $this->db->get('tbl_penyakit')->result_array();
  }

  // CRUD aturan
  // Tambah Data aturan
  public function tambahaturan()
  {
    $data = [
      "id_penyakit" => $this->input->post('penyakit', true,),
      "id_gejala" => $this->input->post('gejala'),
      "probabilitas" => $this->input->post('probabilitas')
    ];
    $this->db->insert('tbl_aturan', $data);
  }

  // Ubah Data aturan
  public function ubahaturan()
  {
    $id = $this->input->post('id');
    $data = [
      "id_penyakit" => $this->input->post('penyakit'),
      "id_gejala" => $this->input->post('gejala'),
      "probabilitas" => $this->input->post('probabilitas')
    ];
    $this->db->where('id', $id);
    $this->db->update('tbl_aturan', $data);
  }
  // Hapus Data aturan
  public function hapus($id)
  {
    $this->db->delete('tbl_aturan', ['id' => $id]);
  }
  // END CRUD aturan
}

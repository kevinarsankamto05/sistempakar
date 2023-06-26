      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Halaman Penyakit</h3>
            </div>

          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Daftar Penyakit</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="row mt-3">
                    <div class="col-md-6">
                      <a href="" class="btn btn-round btn-primary mb-3" data-toggle="modal" data-target="#tambahpenyakit">Tambah Data Penyakit</a>
                    </div>
                  </div>

                  <?= $this->session->flashdata('pesan'); ?>
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10%">No</th>
                        <th style="width: 5%">Kode Penyakit</th>
                        <th style="width: 15%">Nama Penyakit</th>
                        <th style="width: 5%">Probabilitas</th>
                        <th style="width: 10%">Gambar</th>
                        <th style="width: 50%">Solusi</th>
                        <th>Kelola</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($tbl_penyakit as $sakit) : ?>
                        <tr>
                          <td><?= $i; ?></td>
                          <td><?= $sakit['kode_penyakit']; ?></td>
                          <td><?= $sakit['nama_penyakit']; ?></td>
                          <td><?= $sakit['probabilitas']; ?></td>
                          <td><img src="<?= base_url('assets/images/penyakit/') . $sakit['gambar']; ?>" width="150"></td>
                          <td><?= $sakit['solusi']; ?></td>
                          <td>
                            <a href="<?= base_url('penyakit/hapus/') . $sakit['id_penyakit']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Data akan dihapus');">Hapus</a>
                            <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target=".ubahpenyakit<?= $sakit['id_penyakit']; ?>">Ubah</a>
                          </td>
                        </tr>
                        <?php $i++; ?>
                      <?php endforeach; ?>
                    </tbody>

                  </table>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
      <!-- /page content -->
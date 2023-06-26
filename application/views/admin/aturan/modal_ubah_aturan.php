<!-- Modal Edit -->
<?php foreach ($aturan as $P) : ?>
  <div class="modal fade ubahaturan<?= $P['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Ubah aturan</h5>
        </div>

        <?= form_open_multipart('aturan/ubah'); ?>
        <input type="hidden" name="id" value="<?= $P['id']; ?>">
        <div class="modal-body">
          <div class="form-group">
            <label for="penyakit">Pilih Penyakit</label>
            <select name="penyakit" id="penyakit" class="form-control">
              <option value="<?= $P['kode_penyakit']; ?>" selected><?= $P['kode_penyakit']; ?> - <?= $P['nama_penyakit']; ?></option>
              <?php foreach ($penyakit as $k) : ?>
                <option value="<?= $k['id_penyakit']; ?>"><?= $k['kode_penyakit']; ?>-<?= $k['nama_penyakit']; ?></option>
              <?php endforeach; ?>
            </select>
            <label for="gejala">Pilih Gejala</label>
            <select name="gejala" id="gejala" class="form-control">
              <option value="<?= $P['kode_gejala']; ?>"><?= $P['kode_gejala']; ?>-<?= $P['nama_gejala']; ?></option>
              <?php foreach ($gejala as $g) : ?>
                <option value="<?= $g['id_gejala']; ?>"><?= $g['kode_gejala']; ?> - <?= $g['nama_gejala']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <div class="form-group">
              <label for="probabilitas">Nilai Probabilitas</label>
              <input type="text" class="form-control" id="probabilitas" name="probabilitas" value="<?= $P['probabilitas']; ?>">
            </div>
          </div>
          <div class="form-group">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-round btn-primary">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>
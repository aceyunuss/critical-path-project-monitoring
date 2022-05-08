<form method="POST" action="<?= site_url('masterproject/go_add') ?>" enctype="multipart/form-data">
  <div class="row">
    <div class="col-lg-12">
      <section class="widget">
        <div class="widget-body">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Proyek</label>
            <div class="col-sm-7">
              <input type="text" maxlength="255" class="form-control" name="name" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Deskripsi Proyek</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="description" required></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Mulai</label>
            <div class="col-sm-3">
              <input type="date" id="datefield" name="date" class="needed datetimepicker form-control" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Instansi</label>
            <div class="col-sm-7">
              <input type="text" maxlength="255" class="form-control" name="instance" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Pembimbing</label>
            <div class="col-sm-5">
              <select class="form-control" required name="mentor">
                <option value="">-- Pilih -- </option>
                <?php foreach ($pembimbing as $key => $value) { ?>
                  <option value="<?= $value['user_id'] ?>"><?= $value['fullname'] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Lampiran</label>
            <div class="col-sm-7">
              <input type="file" class="form-control" name="att" required>
            </div>
          </div>
          <br>
          <center>
            <input type="hidden" name="status" value="" id="status">
            <a style="font-size: 16px;" onclick="history.back()" class="btn btn-outline-secondary btn-sm">Kembali</a>
            &nbsp;&nbsp;
            <button style="font-size: 16px;" type="submit" class="btn btn-info btn-sm act">Simpan</button>
          </center>
        </div>
      </section>
    </div>
  </div>
</form>
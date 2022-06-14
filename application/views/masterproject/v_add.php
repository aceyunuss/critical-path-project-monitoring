<form method="POST" action="<?= site_url('masterproject/go_add') ?>" enctype="multipart/form-data">
  <div class="row">
    <div class="col-lg-12">
      <section class="widget">
        <div class="widget-body">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Proyek*</label>
            <div class="col-sm-4">
              <input type="text" maxlength="255" class="form-control" name="name" required>
            </div>
            <label class="col-sm-2 col-form-label">Tanggal PHO*</label>
            <div class="col-sm-4">
              <input type="date" maxlength="255" class="form-control" name="pho" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Deskripsi Proyek*</label>
            <div class="col-sm-4">
              <textarea class="form-control" name="description" required></textarea>
            </div>
            <label class="col-sm-2 col-form-label">Tanggal FHO*</label>
            <div class="col-sm-4">
              <input type="date" maxlength="255" class="form-control" name="fho" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Pemilik Proyek*</label>
            <div class="col-sm-4">
              <input type="text" maxlength="255" class="form-control" name="owner" required>
            </div>
            <label class="col-sm-2 col-form-label">Watku Pelaksanaan*</label>
            <div class="col-sm-4">
              <input type="date" id="datefield" name="st" class="needed datetimepicker form-control" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Lokasi*</label>
            <div class="col-sm-4">
              <input type="text" name="location" class="form-control" required>
            </div>
            <label class="col-sm-2 col-form-label">Jenis Proyek*</label>
            <div class="col-sm-4">
              <select class="form-control" required name="tipe">
                <option value="">-- Pilih -- </option>
                <?php foreach ($tipe as $key => $value) { ?>
                  <option value="<?= $value ?>"><?= $value ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">No & Tgl Kontrak*</label>
            <div class="col-sm-4">
              <input type="text" name="noctr" class="form-control" required>
            </div>
            <label class="col-sm-2 col-form-label">Jenis Kontrak*</label>
            <div class="col-sm-4">
              <select class="form-control" required name="tipectr">
                <option value="">-- Pilih -- </option>
                <?php foreach ($tipec as $key => $value) { ?>
                  <option value="<?= $value ?>"><?= $value ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nilai Kontrak*</label>
            <div class="col-sm-4">
              <input type="text" maxlength="255" class="form-control" name="value" required>
            </div>
            <label class="col-sm-2 col-form-label">Pembimbing*</label>
            <div class="col-sm-4">
              <select class="form-control" required name="mentor">
                <option value="">-- Pilih -- </option>
                <?php foreach ($pembimbing as $key => $value) { ?>
                  <option value="<?= $value['user_id'] ?>"><?= $value['fullname'] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">No & Tgl SPMK*</label>
            <div class="col-sm-4">
              <input type="text" maxlength="255" class="form-control" name="spmk" required>
            </div>
            <label class="col-sm-2 col-form-label">Lampiran*</label>
            <div class="col-sm-4">
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
<form method="POST" action="<?= site_url('masterproject/go_edit') ?>" enctype="multipart/form-data">
  <div class="row">
    <div class="col-lg-12">
      <section class="widget">
        <div class="widget-body">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Proyek*</label>
            <div class="col-sm-4">
              <input type="text" maxlength="255" class="form-control" name="name" value="<?= $project['project_name'] ?>" required>
              <input type="hidden" name="project_id" value="<?= $project['project_id'] ?>">
            </div>
            <label class="col-sm-2 col-form-label">Tanggal PHO*</label>
            <div class="col-sm-4">
              <input type="date" maxlength="255" class="form-control" name="pho" required value="<?= substr($project['pho'], 0, 10) ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Deskripsi Proyek*</label>
            <div class="col-sm-4">
              <textarea class="form-control" name="description" required><?= $project['description'] ?></textarea>
            </div>
            <label class="col-sm-2 col-form-label">Tanggal FHO*</label>
            <div class="col-sm-4">
              <input type="date" maxlength="255" class="form-control" name="fho" required value="<?= substr($project['fho'], 0, 10) ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Pemilik Proyek*</label>
            <div class="col-sm-4">
              <input type="text" maxlength="255" class="form-control" name="owner" required value="<?= $project['owner'] ?>">
            </div>
            <label class="col-sm-2 col-form-label">Watku Pelaksanaan*</label>
            <div class="col-sm-4">
              <input type="date" id="datefield" name="st" class="needed datetimepicker form-control" required value="<?= substr($project['start_date'], 0, 10) ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Lokasi*</label>
            <div class="col-sm-4">
              <input type="text" name="location" class="form-control" required value="<?= $project['location'] ?>">
            </div>
            <label class="col-sm-2 col-form-label">Jenis Proyek*</label>
            <div class="col-sm-4">
              <select class="form-control" required name="tipe">
                <option value="">-- Pilih -- </option>
                <?php foreach ($tipe as $key => $value) { ?>
                  <option <?= $value == $project['type'] ? "selected" : ""; ?> value="<?= $value ?>"><?= $value ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">No & Tgl Kontrak*</label>
            <div class="col-sm-4">
              <input type="text" name="noctr" class="form-control" required value="<?= $project['no_ctr'] ?>">
            </div>
            <label class="col-sm-2 col-form-label">Jenis Kontrak*</label>
            <div class="col-sm-4">
              <select class="form-control" required name="tipectr">
                <option value="">-- Pilih -- </option>
                <?php foreach ($tipe as $key => $value) { ?>
                  <option <?= $value == $project['type_ctr'] ? "selected" : ""; ?> value="<?= $value ?>"><?= $value ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nilai Kontrak*</label>
            <div class="col-sm-4">
              <input type="text" maxlength="255" class="form-control" name="value" required value="<?= $project['value'] ?>">
            </div>
            <label class="col-sm-2 col-form-label">Pembimbing*</label>
            <div class="col-sm-4">
              <select class="form-control" required name="mentor">
                <option value="">-- Pilih -- </option>
                <?php foreach ($pembimbing as $key => $value) { ?>
                  <option <?= $value['user_id'] == $project['mentor_id'] ? "selected" : ""; ?> value="<?= $value['user_id'] ?>"><?= $value['fullname'] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">No & Tgl SPMK*</label>
            <div class="col-sm-4">
              <input type="text" maxlength="255" class="form-control" name="spmk" required value="<?= $project['spmk'] ?>">
            </div>
            <label class="col-sm-2 col-form-label">Lampiran*</label>
            <div class="col-sm-4">
              <input type="file" class="form-control" name="att">
              <a target="_blank" href="<?= site_url('project/dwnld/project/' . $project['attachment']) ?>"><?= $project['attachment'] ?></a>
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
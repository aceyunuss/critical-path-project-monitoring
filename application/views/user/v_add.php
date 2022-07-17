<form method="POST" action="<?= site_url('user/go_add') ?>" enctype="multipart/form-data">
  <div class="row">

  </div>
  <div class="row">
    <div class="col-lg-7">
      <section class="widget">
        <div class="widget-body">
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Nama*</label>
            <div class="col-sm-8">
              <input type="text" maxlength="255" class="form-control" name="name" required>
            </div>

          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Email*</label>
            <div class="col-sm-8">
              <input type="email" maxlength="255" class="form-control" name="email" required>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Jenis Kelamin*</label>
            <div class="col-sm-8">
              <select class="form-control" name="gender" required>
                <option value="">-- Pilih -- </option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Tempat Lahir*</label>
            <div class="col-sm-8">
              <input type="text" name="birthplace" class="form-control" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Tanggal Lahir*</label>
            <div class="col-sm-8">
              <input type="date" id="datefield" name="birthdate" class="needed datetimepicker form-control" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Password*</label>
            <div class="col-sm-4">
              <input type="password" maxlength="255" class="form-control" name="password" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Role*</label>
            <div class="col-sm-8">
              <select class="form-control" required name="role">
                <option value="">-- Pilih -- </option>
                <?php foreach ($role as $key => $value) { ?>
                  <option value="<?= $value ?>"><?= $value ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">No. Handphone*</label>
            <div class="col-sm-8">
              <input type="number" min="0" maxlength="255" class="form-control" name="phone" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Kelas</label>
            <div class="col-sm-8">
              <select class="form-control" name="class">
                <option value="">-- Pilih -- </option>
                <?php foreach ($class as $key => $value) { ?>
                  <option value="<?= $value['cls_id'] ?>"><?= $value['cls_name'] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <br>

        </div>
      </section>
    </div>

    <div class="col-lg-5">
      <section class="widget">
        <div class="widget-body">
          <div class="form-group row">
            <img src="<?= base_url('assets/img/def.png') ?>" class="w-100">
          </div>
          <div class="form-group-row">
            <div class="col-sm-12">
              <input type="file" class="form-control file" name="pict">
            </div>
          </div>
        </div>
      </section>
    </div>


    <div class="col-lg-12">
      <center>
        <input type="hidden" name="status" value="" id="status">
        <a style="font-size: 16px;" onclick="history.back()" class="btn btn-outline-secondary btn-sm">Kembali</a>
        &nbsp;&nbsp;
        <button style="font-size: 16px;" type="submit" class="btn btn-info btn-sm act">Simpan</button>
      </center>
    </div>


  </div>
</form>
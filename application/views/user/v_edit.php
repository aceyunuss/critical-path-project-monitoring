<form method="POST" action="<?= site_url('user/go_edit') ?>">
  <div class="row">
    <div class="col-lg-12">
      <section class="widget">
        <div class="widget-body">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-7">
              <input type="text" maxlength="255" class="form-control" name="name" required value="<?= $usr['fullname'] ?>">
              <input type="hidden" name="user_id" value="<?= $usr['user_id'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-3">
              <input type="date" id="datefield" name="birthdate" class="needed datetimepicker form-control" required value="<?= substr($usr['birthdate'], 0, 10) ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-3">
              <select class="form-control" name="gender" required>
                <option value="">-- Pilih -- </option>
                <option <?= $usr['gender'] == "L" ? "selected" : ""; ?> value="L">Laki-laki</option>
                <option <?= $usr['gender'] == "P"  ? "selected" : ""; ?> value="P">Perempuan</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-7">
              <input type="email" maxlength="255" class="form-control" name="email" required value="<?= $usr['email'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-7">
              <input type="password" maxlength="255" class="form-control" name="password">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-3">
              <select class="form-control" required name="role">
                <option value="">-- Pilih -- </option>
                <?php foreach ($role as $key => $value) { ?>
                  <option <?= $value ==  $usr['role'] ? "selected" : ""; ?> value="<?= $value ?>"><?= $value ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">No. Telp</label>
            <div class="col-sm-3">
              <input type="number" min="0" maxlength="255" class="form-control" name="phone" required value="<?= $usr['phone'] ?>">
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
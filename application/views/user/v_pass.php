<form method="POST" action="<?= site_url('user/go_pass') ?>">
  <div class="row">
    <div class="col-lg-12">
      <section class="widget">
        <div class="widget-body">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-7">
              <input type="text" maxlength="255" class="form-control" name="name" readonly value="<?= $usr['fullname'] ?>">
              <input type="hidden" name="user_id" value="<?= $usr['user_id'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-7">
              <input type="email" maxlength="255" class="form-control" name="email" readonly value="<?= $usr['email'] ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-7">
              <input type="password" maxlength="255" class="form-control" name="password">
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
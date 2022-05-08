<form method="POST" action="<?= site_url('progress/go_update') ?>" enctype="multipart/form-data">
  <div class="row">
    <div class="col-lg-12">

      <section class="widget">
        <div class="widget-body">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Proyek</label>
            <div class="col-sm-10">
              <label class="col-form-label"><?= $projectdetail['project_name'] ?></label>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Deskripsi Proyek</label>
            <div class="col-sm-10">
              <label class="col-form-label"><?= $projectdetail['description'] ?></label>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Durasi</label>
            <div class="col-sm-10">
              <label class="col-form-label"><?= $projectdetail['duration'] ?> hari</label>
            </div>
          </div>
        </div>
      </section>

      <section class="widget">
        <div class="widget-body">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Catatan</label>
            <div class="col-sm-9">
              <textarea class="form-control" required name="note"></textarea>
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
            <input type="hidden" name="detail_id" value="<?= $projectdetail['detail_id'] ?>">
            <input type="hidden" name="project_id" value="<?= $projectdetail['project_id'] ?>">
            <a style="font-size: 16px;" onclick="history.back()" class="btn btn-outline-secondary btn-sm">Kembali</a>
            &nbsp;&nbsp;
            <button style="font-size: 16px;" type="submit" class="btn btn-info btn-sm act">Simpan</button>
          </center>
        </div>
      </section>
    </div>
  </div>
</form>
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
              <label class="col-form-label"><?= $projectdetail['note'] ?></label>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Lampiran</label>
            <div class="col-sm-7">
              <label class="col-form-label">
                <a target="_blank" href="<?= site_url('project/dwnld/progress/' . $projectdetail['progress_att']) ?>"><?= $projectdetail['progress_att'] ?></a>
              </label>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Diupdate Oleh</label>
            <div class="col-sm-9">
              <label class="col-form-label"><?= $projectdetail['updated_by'] ?></label>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Diupdate</label>
            <div class="col-sm-9">
              <label class="col-form-label"><?= $projectdetail['updated_at'] ?></label>
            </div>
          </div>
          <br>
          <center>
            <a style="font-size: 16px;" onclick="history.back()" class="btn btn-outline-secondary btn-sm">Kembali</a>
            &nbsp;&nbsp;
          </center>
        </div>
      </section>
    </div>
  </div>
</form>
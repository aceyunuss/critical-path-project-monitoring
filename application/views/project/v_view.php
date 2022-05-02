<form method="POST" action="#" enctype="multipart/form-data">
  <div class="row">
    <div class="col-lg-12">
      <section class="widget">
        <div class="widget-body">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Proyek</label>
            <div class="col-sm-10">
              <label class="col-form-label"><?= $project['project_name'] ?></label>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Deskripsi Proyek</label>
            <div class="col-sm-10">
              <label class="col-form-label"><?= $project['description'] ?></label>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Mulai</label>
            <div class="col-sm-10">
              <label class="col-form-label"><?= substr($project['start_date'], 0, 10) ?></label>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Instansi</label>
            <div class="col-sm-10">
              <label class="col-form-label"><?= $project['instance'] ?></label>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Pembimbing</label>
            <div class="col-sm-10">
              <label class="col-form-label"><?= $project['mentor_name'] ?></label>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Lampiran</label>
            <div class="col-sm-10">
              <label class="col-form-label">
                <a target="_blank" href="<?= site_url('project/dwnld/project/' . $project['attachment']) ?>"><?= $project['attachment'] ?></a>
              </label>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
              <label class="col-form-label"><?= $project['stat'] ?></label>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Progres</label>
            <div class="col-sm-10">
              <label class="col-form-label"><?= $project['progress'] ?> %</label>
            </div>
          </div>
          <br>
          <center>
            <input type="hidden" name="status" value="" id="status">
            <a style="font-size: 16px;" onclick="history.back()" class="btn btn-outline-secondary btn-sm">Kembali</a>
            &nbsp;&nbsp;
          </center>
        </div>
      </section>
    </div>
  </div>
</form>
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
              <textarea class="form-control" <?= $projectdetail['percentage'] != 0 ? "readonly" : "" ?> required name="note"><?= $projectdetail['note'] ?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Lampiran</label>
            <div class="col-sm-7">
              <?php if ($projectdetail['percentage'] != 0) { ?>
                <a target="_blank" href="<?= site_url('project/dwnld/progress/' . $projectdetail['progress_att']) ?>"><?= $projectdetail['progress_att'] ?></a>
              <?php } else { ?>
                <input type="file" class="form-control" <?= $projectdetail['percentage'] != 0 ? "disabled" : "" ?> name="att">
              <?php } ?>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Catatan PBM</label>
            <div class="col-sm-9">
              <textarea class="form-control" name="xn" <?= $projectdetail['percentage'] != 50 ? "readonly" : "" ?>><?= $projectdetail['ext_note'] ?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Komentar</label>
            <div class="col-sm-9">
              <textarea class="form-control" required name="xr" <?= $projectdetail['percentage'] != 80 ? "readonly" : "" ?>><?= $projectdetail['ext_reply'] ?></textarea>
            </div>
          </div>
          <br>
          <center>
            <input type="hidden" name="detail_id" value="<?= $projectdetail['detail_id'] ?>">
            <input type="hidden" name="project_id" value="<?= $projectdetail['project_id'] ?>">
            <input type="hidden" name="prc" value="<?= $projectdetail['percentage'] ?>">
            <a style="font-size: 16px;" onclick="history.back()" class="btn btn-outline-secondary btn-sm">Kembali</a>
            &nbsp;&nbsp;
            <button style="font-size: 16px;" type="submit" class="btn btn-info btn-sm act">Simpan</button>
          </center>
        </div>
      </section>
    </div>
  </div>
</form>
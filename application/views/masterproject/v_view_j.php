<div class="row">
  <div class="col-lg-12">
    <section class="widget">
      <div class="widget-body">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nama Proyek</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= $project['project_name'] ?></label>
          </div>
          <label class="col-sm-2 col-form-label">Tanggal PHO</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= substr($project['pho'], 0, 10) ?></label>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Deskripsi Proyek</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= $project['description'] ?></label>
          </div>
          <label class="col-sm-2 col-form-label">Tanggal FHO</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= substr($project['fho'], 0, 10) ?></label>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Pemilik Proyek</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= $project['owner'] ?></label>
          </div>
          <label class="col-sm-2 col-form-label">Tanggal Mulai</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= substr($project['start_date'], 0, 10) ?></label>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Lokasi</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= $project['location'] ?></label>
          </div>
          <label class="col-sm-2 col-form-label">Jenis Proyek</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= $project['type'] ?></label>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">No & Tgl Kontrak</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= $project['no_ctr'] ?></label>
          </div>
          <label class="col-sm-2 col-form-label">Jenis Kontrak</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= $project['type_ctr'] ?></label>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nilai Kontrak</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= $project['value'] ?></label>
          </div>
          <label class="col-sm-2 col-form-label">Pembimbing</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= $project['mentor_name'] ?></label>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">No & Tgl SPMK</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= $project['spmk'] ?></label>
          </div>
          <label class="col-sm-2 col-form-label">Lampiran</label>
          <div class="col-sm-4">
            <label class="col-form-label">
              <a target="_blank" href="<?= site_url('project/dwnld/project/' . $project['attachment']) ?>"><?= $project['attachment'] ?></a>
            </label>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Status</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= $project['stat'] ?></label>
          </div>
          <label class="col-sm-2 col-form-label">Progres</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= $project['progress'] ?> %</label>
          </div>
        </div>
        <br>
      </div>
    </section>

    <section class="widget">
      <div class="widget-body">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Murid</label>
          <div class="col-sm-4">
            <?php foreach ($member as $k => $v) { ?>
              <li><?= $v['member_name'] ?></li>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>

    <?php if (!empty($detail)) {
      include('v_cpm.php');
    } ?>

  </div>
</div>
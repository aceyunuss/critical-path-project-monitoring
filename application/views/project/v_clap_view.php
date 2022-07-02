<div class="row">
  <div class="col-lg-12">
    <section class="widget">
      <div class="widget-body">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nama Proyek</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= $project['project_name'] ?></label>
          </div>
          <label class="col-sm-2 col-form-label">Pembimbing</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= $project['mentor_name'] ?></label>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Deskripsi Proyek</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= $project['description'] ?></label>
          </div>
          <label class="col-sm-2 col-form-label">Lampiran</label>
          <div class="col-sm-4">
            <label class="col-form-label">
              <a target="_blank" href="<?= site_url('project/dwnld/project/' . $project['attachment']) ?>"><?= $project['attachment'] ?></a>
            </label>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Tanggal Mulai</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= substr($project['start_date'], 0, 10) ?></label>
          </div>
          <label class="col-sm-2 col-form-label">Status</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= $project['stat'] ?></label>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Tanggal Selsai</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= substr($project['end_date'], 0, 10) ?></label>
          </div>
          <label class="col-sm-2 col-form-label">Progres</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= $project['progress'] ?> %</label>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Pemilik Proyek</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= $project['owner'] ?></label>
          </div>
          <label class="col-sm-2 col-form-label">Murid</label>
          <div class="col-sm-4">
            <label class="col-form-label">
              <?php foreach ($member as $k => $v) { ?>
                <li><?= $v['member_name'] ?></li>
              <?php } ?>
            </label>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Tipe</label>
          <div class="col-sm-4">
            <label class="col-form-label"><?= $project['type'] ?></label>
          </div>
          <label class="col-sm-2 col-form-label">Hasil Akhir</label>
          <div class="col-sm-4">
            <label class="col-form-label"> <a target="_blank" href="<?= site_url('project/dwnld/project/' . $project['final_att']) ?>"><?= $project['final_att'] ?></a></label>
          </div>
        </div>
        
      </div>
    </section>

    <section class="widget">
      <div class="widget-body">

        <table class="cpmtable table table-bordered table-lg mt-lg mb-0">
          <thead>
            <tr>
              <th style="text-align:center; width: 10%">Kode</th>
              <th style="text-align:center; width: 60%">Deskripsi</th>
              <th style="text-align:center; width: 10%">Durasi</th>
              <th style="text-align:center; width: 20%">Predecessor</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ((array)$detail as $key => $value) {  ?>
              <tr>
                <td>
                  <center><?= $value['code'] ?></center>
                </td>
                <td><?= $value['description'] ?></td>
                <td>
                  <center><?= $value['duration'] ?> hari</center>
                </td>
                <td>
                  <center><?= $value['predecessor'] ?></center>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </section>

    <section class="widget">
      <div class="widget-body">
        <center>
          <a style="font-size: 16px;" onclick="history.back()" class="btn btn-outline-secondary btn-sm">Kembali</a>
          &nbsp;&nbsp;
          <a onclick="alert('Berhasil mencetak laporan project')" style="font-size: 16px;" href="<?= site_url('project/dwnld/project/' . $project['final_att']) ?>" class="btn btn-primary btn-sm">Download</a>
          &nbsp;&nbsp;
        </center>
      </div>
    </section>
  </div>
</div>
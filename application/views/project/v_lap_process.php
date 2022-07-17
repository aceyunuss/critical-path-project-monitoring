<form action="<?= site_url('project/go_lap_process') ?>" method="POST" enctype="multipart/form-data">
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
            <?php if (!empty($project['end_date'])) { ?>
              <label class="col-sm-2 col-form-label">Tanggal Selesai</label>
              <div class="col-sm-4">
                <label class="col-form-label"><?= substr($project['end_date'], 0, 10) ?></label>
              </div>
            <?php } else { ?>
              <div class="col-sm-6"></div>
            <?php } ?>
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
                  <li><?= $v['member_name'] . " (" . $v['cls_name'] . ")" ?></li>
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
              <?php if ($project['status'] == 'P') { ?>
                <input type="file" class="form-control" name="fnl" required>
              <?php } else { ?>
                <label class="col-form-label"> <a target="_blank" href="<?= site_url('project/dwnld/project/' . $project['final_att']) ?>"><?= $project['final_att'] ?></a></label>
              <?php } ?>
            </div>
          </div>
        </div>
      </section>

      <!-- <section class="widget">
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
      </section> -->

      <section class="widget">
        <div class="widget-body">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Catatan</label>
            <div class="col-sm-9">
              <textarea class="form-control" name="<?= $project['status'] == 'V' ? 'npm' : 'nkp' ?>"></textarea>
            </div>
          </div>
          <center>
            <input type="hidden" name="project_id" value="<?= $project['project_id'] ?>">
            <input type="hidden" name="status" value="" id="status">
            <a style="font-size: 16px;" onclick="history.back()" class="btn btn-outline-secondary btn-sm">Kembali</a>
            <?php if ($project['status'] == 'P') { ?>
              <button style="font-size: 16px;" type="submit" class="btn btn-info btn-sm act" data-stat="y">Simpan</button>
            <?php } else { ?>
              <button style="font-size: 16px;" type="submit" class="btn btn-danger btn-sm act" data-stat="n">Tanggapi</button>
              <button style="font-size: 16px;" type="submit" class="btn btn-info btn-sm act" data-stat="y"><?= $project['status'] == 'V' ? "Verifikasi" : "Approved" ?></button>
            <?php } ?>
          </center>
        </div>
      </section>


    </div>
  </div>
</form>


<script>
  $(document).ready(function() {
    $('.act').click(function() {
      let stat = $(this).data("stat");
      $('#status').val(stat)
    })

  })
</script>
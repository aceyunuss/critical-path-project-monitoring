<div class="row">
  <div class="col-lg-12">
    <section class="widget">
      <div class="widget-body">
        <div class="table-responsive">
          <table class="table" id="usrtbl">
            <thead>
              <tr>
                <th>Aksi</th>
                <th>Nama Proyek</th>
                <th>Pemilik Proyek</th>
                <th>Pembimbing</th>
                <th>Status</th>
                <th>Progres</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ((array)$projectlist as $key => $value) { ?>
                <tr>
                  <td>
                    <center>
                      <?php $prc = (is_null($value['pm']) && is_null($value['pd'])) ?  "btn-success" : "btn-secondary disabled"; ?>
                      <a href="<?= site_url('project/viewj/' . $value['project_id']) ?>" class="btn btn-sm btn-outline-secondary">Lihat</a>
                      <a href="<?= site_url('project/editj/' . $value['project_id']) ?>" class="btn btn-sm btn-success">Ubah</a>
                    </center>
                  </td>
                  <td><?= $value['project_name'] ?></td>
                  <td><?= $value['owner'] ?></td>
                  <td><?= $value['mentor_name'] ?></td>
                  <td>
                    <?php $bg = ($value['status'] == "B" ? "warning" : ($value['status'] == "D" ? "primary" : "success")) ?>
                    <span class="badge bg-<?= $bg ?>"><?= $value['stat'] ?></span>
                  </td>
                  <td>
                    <abbr title="<?= $value['progress'] ?> %">
                      <div class="progress-bar progress-sm bg-<?= $value['progress'] <= 25 ? 'danger' : ($value['progress'] <= 50 ? 'warning' : 'primary') ?> js-progress-animate" style="width: <?= $value['progress'] ?>%;" data-width="<?= $value['progress'] ?>"></div>
                    </abbr>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('#usrtbl').DataTable();
  });
</script>
<div class="row">
  <div class="col-lg-12">
    <section class="widget">
      <div class="widget-body">
        <div class="table-responsive">
          <table class="table" id="usrtbl">
            <thead>
              <tr>
                <th>Aksi</th>
                <th>Deskripsi</th>
                <th>Proyek</th>
                <th>Mentor</th>
                <th>Durasi</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($projecdetail as $key => $value) { ?>
                <tr>
                  <td>
                    <a href="<?= site_url('progress/view/' . $value['detail_id']) ?>" class="btn btn-sm btn-outline-secondary">Lihat</a>
                  </td>
                  <td><?= $value['description'] ?></td>
                  <td><?= $value['project_name'] ?></td>
                  <td><?= $value['mentor_name'] ?></td>
                  <td><?= $value['duration'] ?> hari</td>
                  <?php
                  switch ($value['percentage']) {
                    case '0':
                      $bg = 'bg-gray';
                      break;
                    case '50':
                      $bg = 'bg-success';
                      break;
                    case '80':
                      $bg = 'bg-warning';
                      break;
                    case '100':
                      $bg = 'bg-primary';
                      break;

                    default:
                      # code...
                      break;
                  } ?>
                  <td> <span class="badge <?= $bg ?>"><?= $value['status'] ?> </span></td>
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
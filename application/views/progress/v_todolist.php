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
              </tr>
            </thead>
            <tbody>
              <?php foreach ($projecdetail as $key => $value) { ?>
                <tr>
                  <td>
                    <a href="<?= site_url('progress/update/' . $value['detail_id']) ?>" class="btn btn-sm btn-success">Proses</a>
                  </td>
                  <td><?= $value['description'] ?></td>
                  <td><?= $value['project_name'] ?></td>
                  <td><?= $value['mentor_name'] ?></td>
                  <td><?= $value['duration'] ?> hari</td>
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
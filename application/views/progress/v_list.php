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
                  <td>
                    <?php if (empty($value['updated_at'])) { ?>
                      <span class="badge bg-warning">Belum dikerjakan</span>
                    <?php } else { ?>
                      <span class="badge bg-success">Sudah dikerjakan</span>
                    <?php } ?>
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
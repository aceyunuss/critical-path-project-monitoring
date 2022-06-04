<div class="row">
  <div class="col-lg-12">
    <section class="widget">

      <div class="widget-controls widget-controls">
        <?php if ($this->session->userdata('role') == 'Pembimbing') { ?>
          <p><a class="btn btn-info" href="<?= site_url('user/add') ?>"><i class="fa fa-plus"></i> Tambah Data</a></p>
        <?php } ?>
      </div>
      <br>
      <br>

      <div class="widget-body">

        <div class="table-responsive">
          <table class="table" id="usrtbl">
            <thead>
              <tr>
                <th>Aksi</th>
                <th>Nama</th>
                <th>Role</th>
                <th>Email</th>
                <th>No. Telp</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($userlist as $key => $value) { ?>
                <tr>
                  <td>
                    <a href="<?= site_url('user/edit/' . $value['user_id']) ?>" class="btn btn-sm btn-success">Ubah</a>
                    <?php if ($this->session->userdata('role') == 'Pembimbing') { ?>
                      <a href="<?= site_url('user/delete/' . $value['user_id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
                    <?php } ?>
                  </td>
                  <td><?= $value['fullname'] ?></td>
                  <td><?= $value['role'] ?></td>
                  <td><?= $value['email'] ?></td>
                  <td><?= $value['phone'] ?></td>
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
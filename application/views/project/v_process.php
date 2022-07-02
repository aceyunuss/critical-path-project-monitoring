<form method="POST" action="<?= site_url('project/go_process') ?>" enctype="multipart/form-data">
  <input type="hidden" name="project_id" value="<?= $project['project_id'] ?>">
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
            <label class="col-sm-2 col-form-label">Pemilik Proyek</label>
            <div class="col-sm-10">
              <label class="col-form-label"><?= $project['owner'] ?></label>
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
        </div>
      </section>

      <section class="widget">
        <div class="widget-body">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Murid</label>
            <div class="col-sm-10">
              <span id="member-container">
                <select required class="select2 js-example-responsive" multiple="multiple" style="width: 100%;" id="member" name="member[]">
                  <?php foreach ($member as $key => $value) { ?>
                    <option value="<?= $value['user_id'] ?>"> <?= $value['fullname'] ?> </option>
                  <?php } ?>
                </select>
              </span>
            </div>
          </div>
        </div>
      </section>

      <section class="widget">
        <div class="widget-body">
          <p><a class="btn btn-success pop" data-toggle="modal" data-target="#modal_max" href="<?= site_url('project/add') ?>"><i class="fa fa-plus"></i> Tambah Data</a></p>

          <table class="cpmtable table table-bordered table-lg mt-lg mb-0">
            <thead>
              <tr>
                <th style="text-align:center; width: 10%">#</th>
                <th style="text-align:center; width: 10%">Kode</th>
                <th style="text-align:center; width: 50%">Deskripsi</th>
                <th style="text-align:center; width: 10%">Durasi</th>
                <th style="text-align:center; width: 20%">Predecessor</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
          <hr>
          <br>
          <center>
            <a style="font-size: 16px;" onclick="history.back()" class="btn btn-outline-secondary btn-sm">Kembali</a>
            &nbsp;&nbsp;
            <button style="font-size: 16px;" type="submit" class="btn btn-info btn-sm act">Simpan</button>
          </center>
        </div>
      </section>
    </div>
  </div>
</form>


<div class="modal fade" id="modal_max" tabindex="-1" role="dialog" aria-labelledby="modal_maxLabel" aria-hidden="true" data-backdrop="">
  <div class="modal-dialog  modal-dialog-centered modal-lg" class="overflow-y: initial !important" role="document" style="width:57%;">
    <div class="modal-content" style="background-color: white;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_maxLabel"></h4>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Kode</label>
          <div class="col-sm-3">
            <input type="text" maxlength="255" class="form-control" id="code" value="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Deskripsi</label>
          <div class="col-sm-10">
            <input type="text" maxlength="255" class="form-control" id="desc" value="">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Durasi</label>
          <div class="col-sm-2">
            <input type="number" min="0" class="form-control" id="duration" value="" placeholder="(hari)">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Predecessor</label>
          <div class="col-sm-10">
            <span id="pred-container">
              <select class="select2 js-example-responsive" multiple="multiple" style="width: 100%" id="pred">
              </select>
            </span>
          </div>
        </div>
        <br>
        <center>
          <button style="font-size: 16px;" class="btn btn-info btn-sm add">Tambah</button>
        </center>

      </div>
    </div>
  </div>
</div>



<style>
  #pred-container .select2-results__option--highlighted {
    background-color: #3875d7 !important;
  }

  #member-container .select2-results__option--highlighted {
    background-color: #3875d7 !important;
  }
</style>


<script>
  $(document).ready(function() {

    $("#pred").select2({
      theme: "classic",
      dropdownParent: "#pred-container"
    });

    $("#member").select2({
      theme: "classic",
      dropdownParent: "#member-container"
    });


    $('.add').click(function() {
      let rw = $('.cpmtable tr').length
      let code = $('#code').val()
      let desc = $('#desc').val()
      let duration = $('#duration').val()
      let pred = $('#pred').val() === null ? "" : $('#pred').val();

      if (code == "" || desc == "" || duration == "") {
        alert('Harap lengkapi form!')

      } else if (rw > 1 && pred == "") {

        alert("Predecessor harus diisi!")

      } else {

        tbody = '<tr data-row=' + code + '>\
                    <td><center>\
                      <i class="remove fa fa-trash-o"></i>\
                    <center></td>\
                    <td><center>' + code + '</center></td>\
                    <input class="coderow code_' + code + '" type="hidden" value="' + code + '" name="code[]">\
                    <td>' + desc + '</td>\
                    <input class="desc_' + code + '" type="hidden" value="' + desc + '" name="desc[]">\
                    <td><center>' + duration + ' hari</center></td>\
                    <input class="duration_' + code + '" type="hidden" value="' + duration + '" name="duration[]">\
                    <td><center>' + pred + '</center></td>\
                    <input class="pred_' + code + '" type="hidden" value="' + pred + '" name="pred[]">\
                  </tr>';

        $('.cpmtable tbody').append(tbody)
        $('#code, #desc, #duration, #pred').val('')
        $('#modal_max').modal('hide');

      }
    })


    function checkRowVal(tv) {

      let ret = false

      $('.stable tr').each(function(a, b) {
        let value = $('.sc', b).text();
        console.log(value)

        if (value == tv) {
          ret = true
        }
      });

      return ret
    }


    $(document).on('click', '.remove, .del', function() {
      if (confirm("Anda yakin ingin menghapus?")) {
        $(this).parent().parent().parent().remove();
      }
    })

    $(document).on('click', '.pop', function() {

      let selpred = "";
      $('#pred').html('');
      $('.cpmtable tr').each(function() {
        logi = $(this).find(".coderow").val();
        if (logi != undefined) {
          selpred += '<option value="' + logi + '">' + logi + '</option>';
        }
      });
      $('#pred').append(selpred)
    })

  })
</script>
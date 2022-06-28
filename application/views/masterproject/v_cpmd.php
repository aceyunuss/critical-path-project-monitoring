<section class="widget">
  <div class="widget-body">
    <form method="POST" action="<?= site_url('project/go_editj') ?>" enctype="multipart/form-data">
      <input type="hidden" name="project_id" value="<?= $project['project_id'] ?>">
      <table class="cpmtable table table-bordered table-lg mt-lg mb-0">
        <thead>
          <tr>
            <!-- <th style="text-align:center; width: 10%">#</th> -->
            <th style="text-align:center; width: 10%">Kode</th>
            <th style="text-align:center; width: 50%">Deskripsi</th>
            <th style="text-align:center; width: 10%">Durasi (hari)</th>
            <th style="text-align:center; width: 20%">Predecessor</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ((array)$detail as $key => $value) {  ?>
            <tr>
              <!-- <td>
              <a class="btn btn-success pop" data-toggle="modal" data-target="#modal_max" href="<?= site_url('project/add') ?>">Ubah</a>
            </td> -->
              <td>
                <center><?= $value['code'] ?></center>
              </td>
              <td><?= $value['description'] ?></td>
              <td>
                <center>
                  <input <?= $value['percentage'] > 0 ? "readonly" : "" ?> type="number" value="<?= $value['duration'] ?>" class="form-control" name="duration[<?= $value['detail_id'] ?>]">
                </center>
              </td>
              <td>
                <center><?= $value['predecessor'] ?></center>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <br>
      <div id="point">
      </div>
      <br>
      <br>
      <center>
        <a style="font-size: 16px;" href="<?= site_url('project/jadwal') ?>" class="btn btn-outline-secondary btn-sm">Kembali</a>
        &nbsp;&nbsp;
        <button style="font-size: 16px;" type="submit" class="btn btn-info btn-sm act">Simpan</button>
      </center>
    </form>
  </div>
</section>

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
            <input type="text" maxlength="255" class="form-control" id="code" value="" readonly>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Deskripsi</label>
          <div class="col-sm-10">
            <input type="text" maxlength="255" class="form-control" id="desc" value="" readonly>
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


<script>
  google.charts.load('current', {
    'packages': ['gantt']
  });
  google.charts.setOnLoadCallback(drawChart);

  function daysToMilliseconds(days) {
    return days * 24 * 60 * 60 * 1000;
  }

  function drawChart() {
    var data = new google.visualization.DataTable();
    var cpm = <?= $cpm; ?>;
    var cpmchart = [];

    cpm.forEach(element => {
      cpmchart.push([
        element[0],
        element[0],
        element[0],
        element[1] != null ? new Date(element[1]) : null,
        null,
        element[2],
        element[3],
        element[4],
      ]);
    });

    data.addColumn('string', 'Task ID');
    data.addColumn('string', 'Task Name');
    data.addColumn('string', 'Resource');
    data.addColumn('date', 'Start Date');
    data.addColumn('date', 'End Date');
    data.addColumn('number', 'Duration');
    data.addColumn('number', 'Percent Complete');
    data.addColumn('string', 'Dependencies');

    data.addRows(cpmchart)

    var options = {
      height: 275,
      gantt: {
        criticalPathEnabled: true,
        criticalPathStyle: {
          stroke: '#e64a19',
          strokeWidth: 5
        }
      }
    };

    var chart = new google.visualization.Gantt(document.getElementById('point'));
    chart.draw(data, options);
  }
</script>
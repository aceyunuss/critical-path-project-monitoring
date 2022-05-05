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
          <label class="col-sm-2 col-form-label">Instansi</label>
          <div class="col-sm-10">
            <label class="col-form-label"><?= $project['instance'] ?></label>
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
        <br>
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
        <br>
        <div id="point">
        </div>
        <br>
        <br>
        <center>
          <a style="font-size: 16px;" onclick="history.back()" class="btn btn-outline-secondary btn-sm">Kembali</a>
          &nbsp;&nbsp;
        </center>
      </div>
    </section>

  </div>
</div>


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
    data.addColumn('string', 'Task ID');
    data.addColumn('string', 'Task Name');
    data.addColumn('string', 'Resource');
    data.addColumn('date', 'Start Date');
    data.addColumn('date', 'End Date');
    data.addColumn('number', 'Duration');
    data.addColumn('number', 'Percent Complete');
    data.addColumn('string', 'Dependencies');

    data.addRows([
      ['Chapter0', 'Math', null, new Date(2015, 0, 1), new Date(2015, 0, 5), null, 100, null],
      ['Chapter1', 'Ven diagram', 'write', null, new Date(2015, 0, 9), daysToMilliseconds(3), 25, 'Chapter0,chapter4'],
      ['chapter2', 'Geometery', 'write', null, new Date(2015, 0, 7), daysToMilliseconds(1), 20, 'Chapter0'],
      ['chapter3', 'Algebra', 'complete', null, new Date(2015, 0, 10), daysToMilliseconds(1), 0, 'chapter2,Chapter1'],
      ['chapter4', 'Trigonometry', 'write', null, new Date(2015, 0, 6), daysToMilliseconds(1), 100, 'Chapter0']
    ]);

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
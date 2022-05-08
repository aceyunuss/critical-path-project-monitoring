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
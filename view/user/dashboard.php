<?php
  require('C:/xampp/htdocs/ccrud/view/template/header.php');
  require('C:/xampp/htdocs/ccrud/view/template/navbar.php');
  require('C:/xampp/htdocs/ccrud/view/template/sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Rekapulasi Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-7">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    Prediksi
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <input type="date" class="form-control">
                    </li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 337px;" width="674" height="500" class="chartjs-render-monitor"></canvas>
                  </div>
              </div>
                <!-- /.card-body -->
            </div>
          <!-- /.card -->
          </div>
          <div class="col-5">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    Hasil Panen
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                    </li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <table class="table table-striped">
                  <tr>
                    <th>Tanggal Panen</th>
                    <th>Harga Panen</th>
                    <th>Berat</th>
                  </tr>
                  <?php foreach($data as $d){?>
                  <tr>
                    <td><?=$d['tanggal_panen']?></td>
                    <td>Rp <?=$d['harga']?></td>
                    <td><?=$d['berat']?> Kg</td>
                  </tr>
                  <?php }?>
                  
                </table>
              </div>
                <!-- /.card-body -->
            </div>
          <!-- /.card -->
          </div>
          
        </div>
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    Edukasi
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                    </li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <div class="row">
                  <?php foreach($data1 as $d){?>
                  <div class="col-4">
                    <div class="card bg-dark" style="padding:15px">
                      <h4><?=$d['judul']?></h4>
                      <p align="justify" style="font-size:13px"><?=$d['isi']?></p>
                      <div align="right" style="font-size:13px"><a href="index.php?edukasi"><button class="btn btn-warning">Read More</button></a></div>
                    </div>
                  </div>
                  <?php }?>
                </div>
              </div>
                <!-- /.card-body -->
            </div>
          <!-- /.card -->
          
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php
  require('view/template/footer.php');
  ?>
  <script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : [
        <?php foreach($data as $d){?>
            '<?=$d['tanggal_panen']?>',
        <?php }?>
      ],
      datasets: [
        {
          label               : 'Berat',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [
        <?php foreach($data as $d){?>
            '<?=$d['berat']?>',
        <?php }?>
      ],
        },
        {
          label               : 'Harga',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [
        <?php foreach($data as $d){?>
            '<?=$d['harga']?>',
        <?php }?>
      ],
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Chrome',
          'IE',
          'FireFox',
          'Safari',
          'Opera',
          'Navigator',
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = $.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
</script>
 
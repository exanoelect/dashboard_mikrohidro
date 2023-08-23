<?php
// query data details
require 'function.php';
// $waktu = mysqli_query($koneksi, "SELECT timestamp FROM data_sensor ORDER BY timestamp asc");
// $suhu = mysqli_query($koneksi, "SELECT temperature FROM data_sensor ORDER BY timestamp asc");
// $humidity = mysqli_query($koneksi, "SELECT humidity FROM data_sensor ORDER BY timestamp asc");
// $rpm = mysqli_query($koneksi, "SELECT rpm FROM data_sensor ORDER BY timestamp asc");
// $voltage = mysqli_query($koneksi, "SELECT voltage FROM data_sensor ORDER BY timestamp asc");
// $current = mysqli_query($koneksi, "SELECT current FROM data_sensor ORDER BY timestamp asc");
// $status = mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp desc limit 2");
// $status2 = mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp desc limit 1");
// $tampilWilayah = "Tidak ada";
// $tampilWilayah="Wilayah Belum dimasukkan";

// $datarow = data_default();
// $data = data_default();
// $alldata = alldata_default();
$grafikRpm = mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp desc limit 10");
$grafik_wpress = mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp desc limit 10");
$grafik_env = mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp desc limit 10");
$grafik_cur = mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp desc limit 10");
$grafik_vol = mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp desc limit 10");
$grafik_temp = mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp desc limit 10");


$cardrpm = mysqli_query($koneksi, "SELECT rpm FROM data_sensor ORDER BY timestamp DESC LIMIT 1");
$cardwpress = mysqli_query($koneksi, "SELECT wpress FROM data_sensor ORDER BY timestamp DESC LIMIT 1");
$cardconsumer = mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp DESC LIMIT 1");



$status = mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp DESC LIMIT 1");
$alldata = all_data();
$time =  mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp DESC LIMIT 1");
// $lokasi = mysqli_query($koneksi, "SELECT location FROM data_lokasi");
$tmp = mysqli_query($koneksi, "SELECT tmp FROM data_sensor ORDER BY timestamp ASC LIMIT 1");
$hum = mysqli_query($koneksi, "SELECT hum FROM data_sensor ORDER BY timestamp ASC");
$altd = mysqli_query($koneksi, "SELECT altd FROM data_sensor ORDER BY timestamp ASC");
$temp= mysqli_query($koneksi, "SELECT tmp FROM data_sensor order by timestamp desc limit 10");
$rpm = mysqli_query($koneksi, "SELECT rpm FROM data_sensor order by timestamp desc limit 10");
$wpress = mysqli_query($koneksi, "SELECT wpress FROM data_sensor ORDER BY timestamp desc limit 10");
$adc0 = mysqli_query($koneksi, "SELECT adc0 FROM data_sensor ORDER BY timestamp desc limit 10");
$adc1 = mysqli_query($koneksi, "SELECT adc1 FROM data_sensor ORDER BY timestamp desc limit 10");
$adc2 = mysqli_query($koneksi, "SELECT adc2 FROM data_sensor ORDER BY timestamp desc limit 10");
$irms0 = mysqli_query($koneksi, "SELECT irms0 FROM data_sensor ORDER BY timestamp desc limit 10");
$irms1 = mysqli_query($koneksi, "SELECT irms1 FROM data_sensor ORDER BY timestamp desc limit 10");
$irms2 = mysqli_query($koneksi, "SELECT irms2 FROM data_sensor ORDER BY timestamp desc limit 10");
// $irms3 = mysqli_query($koneksi, "SELECT irms3 FROM data_sensor ORDER BY timestamp desc limit 5");
// $irms4 = mysqli_query($koneksi, "SELECT irms4 FROM data_sensor ORDER BY timestamp desc limit 5");
// $irms5 = mysqli_query($koneksi, "SELECT irms5 FROM data_sensor ORDER BY timestamp desc limit 5");
// $irms6 = mysqli_query($koneksi, "SELECT irms6 FROM data_sensor ORDER BY timestamp desc limit 5");
// $irms7 = mysqli_query($koneksi, "SELECT irms7 FROM data_sensor ORDER BY timestamp desc limit 5");
// $irms8 = mysqli_query($koneksi, "SELECT irms8 FROM data_sensor ORDER BY timestamp desc limit 5");

//image
$img_outdoor = mysqli_query($koneksi, "SELECT * FROM data_image ORDER BY id DESC LIMIT 1");
$img_indoor = mysqli_query($koneksi, "SELECT * FROM data_image2 ORDER BY id DESC LIMIT 1");


$date = date('Y-d-m h:i:s', time());
// //Kondisi apakah berhasil atau tidak
// if( isset($_POST['reset'])) {
   
//    mysqli_query($koneksi,"insert into data_sensor values('$date','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1')");
  	
// }
// else
// {
//     echo ""; 
// }


?>   
<?php 
if($koneksi){ 
     echo "";
 }
// else {
//     echo "Disconnected";
// }


// if( isset($_GET['login']))
// {
//     $data = cari_data($_GET["wilayah"]);
//     $datarow = data_row($_GET["wilayah"]); 
//     $tempat = $_GET['wilayah'];
//     $waktu = mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp DESC"); 
//     $suhu = mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp desc");
//     $humidity = mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp desc");
//     $rpm = mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp desc");
//     $voltage = mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp desc");
//     $current = mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp desc");
//     $alldata = all_data($_GET["wilayah"]);
//     $get = $_GET['wilayah'];
//     $status = mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp desc limit 2");
//     $status2 = mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp desc limit 1");
//     $tampilWilayah=$_GET['wilayah']; 
    
//     // switch koneksi
//     $switch_koneksi = switch_koneksi($GET["wilayah"]);
// }

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>DASHBOARD PLTMH</title>

    <!-- Custom fonts for this template-->
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />

    <!-- CHART JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


  <style>
   .scroll
   {
    height: 400px;
    overflow: scroll;
   }  
  </style>
  </head>

  <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="dashboard.php"
        >
          <div class="sidebar-brand-icon rotate-n-15"></div>
          <div class="sidebar-brand-text mx-3">
            PLTMH Monitoring
          </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>DASHBOARD</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Interface</div>

        <!-- Nav Item Charts -->
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-sign-out-alt"></i>
            <span>LOG OUT</span>
          </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- SideBar Toggler (SideBar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-cicle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid mt-4">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">
                <?php 
                  echo 'PLTMH Kemuning';
                ?>
              </h1>
                    <?php foreach($time as $tes2): ?>
                    <?php endforeach; ?>
                    <?php foreach($status as $tes): ?>
                    <?php endforeach; ?>
                    <!-- <?php foreach($lokasi as $tes3): ?>
                    <?php endforeach; ?> -->
                      
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Log View Alarm
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <!-- log alarm -->
      .... data tabel  


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-primary">
                        <input type="radio" name="hari" id="hari_id" autocomplete="off"> Hari
                      </label>
                      <label class="btn btn-primary">
                        <input type="radio" name="bulan" id="bulan_id" autocomplete="off"> Bulan
                      </label>
                      <label class="btn btn-primary">
                        <input type="radio" name="tahun" id="tahun_id" autocomplete="off"> Tahun
                      </label>
                    </div>
             
            </div>

            <!-- Content Row -->
            <div class="row">

              <!--Card - Data Sensor RPM Turbin -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-primary text-uppercase mb-1"
                        >
                          RPM Turbin
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <?php 
                          foreach($cardrpm  as $rowrpm): 
                          ?> 
                          <?= $rowrpm['rpm'].' '.'RPM';                
                          ?>
                          <?php 
                          endforeach;
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card - Data Sensor Water Pressure -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-success text-uppercase mb-1"
                        >
                          Water Pressure
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <?php 
                          foreach($cardwpress as $rowwpress): 
                          ?> 
                          <?= $rowwpress['wpress'].' '.'BAR';                
                          ?>
                          <?php 
                          endforeach;
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card - Data Sensor Consumer Load -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-info text-uppercase mb-1"
                        >
                          Consumen Current
                        </div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div
                              class="h5 mb-0 mr-3 font-weight-bold text-gray-800"
                            >
                            <?php 
                          foreach($cardconsumer  as $rowconsumer): 
                          ?> 
                          <?= $rowconsumer['irms1'].' '.'AMPERE';                
                          ?>
                          <?php 
                          endforeach;
                          ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card - Data Sensor Dummy Load -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-warning text-uppercase mb-1"
                        >
                          Dummy Current
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php 
                          foreach($cardconsumer  as $rowdummy): 
                          ?> 
                          <?= $rowdummy['irms2'].' '.'AMPERE';                
                          ?>
                          <?php 
                          endforeach;
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Content Row -->
            <div class="row">
             
            <!-- Area Chart -->
              <div class="col-xl-6 col-lg-5">
            
              <div class="card shadow mb-4">
                  <!-- Card Header - Image 1 -->
                  <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                  >
                    <h6 class="m-0 font-weight-bold text-primary">OUTDOOR CAMERA</h6>
                  </div>

                  <!-- Card Body -->
                  <div class="card-body">
                      
                          <?php 
                          while($row = mysqli_fetch_array($img_outdoor))
                          {
                          ?>
                                                            
                            <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" class="img-fluid" alt="Responsive image" >'; ?> </td>
                                                                
                          <?php
                          }
                          
                          ?>
                          
                   </div>
                </div>

                <div class="card shadow mb-4">
                  <!-- Card Header - Image 2 -->
                  <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                  >
                    <h6 class="m-0 font-weight-bold text-primary">INDOOR CAMERA</h6>
                  </div>

                  <!-- Card Body -->
                  <div class="card-body">
                      
                      <?php 
                        while($row = mysqli_fetch_array($img_indoor))
                        {
                        ?>
                                                           
                          <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" class="img-fluid" alt="Responsive image" >'; ?> 
                                                               
                        <?php
                        }
                        
                      ?>
                       
                   </div>
                </div>
                
                <div class="card shadow mb-4">
                  <!-- Card Header - RPM -->
                  <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                  >
                    <h6 class="m-0 font-weight-bold text-primary">RPM</h6>
                  </div>

                  <!-- Card Body -->
                  <div class="card-body">
                      <div class="chart-area">
                         <!-- <canvas id="myAreaChart1"></canvas> -->
                         <canvas id="myAreaChartRpm"></canvas>
                         <script>
                           var ctx = document.getElementById("myAreaChartRpm");
                            var myLineChart = new Chart(ctx, {
                              type: "line",
                              data: {
                                labels: [<?php while ($b = mysqli_fetch_array($grafikRpm)) { echo '"' . $b['timestamp'] . '",';}?>],
                                datasets: [
                                  {
                                    label: "RPM",
                                    lineTension: 0.3,
                                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                                    borderColor: "rgba(78, 115, 223, 1)",
                                    pointRadius: 3,
                                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                                    pointBorderColor: "rgba(78, 115, 223, 1)",
                                    pointHoverRadius: 3,
                                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                                    pointHitRadius: 10,
                                    pointBorderWidth: 2,
                                    data: [
                                      <?php while ($b = mysqli_fetch_array($rpm)) { echo '"' . $b['rpm'] . '",';}?> 
                                    ],
                                  },
                                ],
                              },
                              options: {
                                maintainAspectRatio: false,
                                layout: {
                                  padding: {
                                    left: 10,
                                    right: 25,
                                    top: 25,
                                    bottom: 0,
                                  },
                                },
                                scales: {
                                  xAxes: [
                                    {
                                      time: {
                                        unit: "date",
                                      },
                                      gridLines: {
                                        display: false,
                                        drawBorder: false,
                                      },
                                      ticks: {
                                        maxTicksLimit: 7,
                                      },
                                    },
                                  ],
                                  yAxes: [
                                    {
                                      ticks: {
                                        maxTicksLimit: 5,
                                        padding: 10,
                                        // Include a dollar sign in the ticks
                                        callback: function (value, index, values) {
                                          return "$" + number_format(value);
                                        },
                                      },
                                      gridLines: {
                                        color: "rgb(234, 236, 244)",
                                        zeroLineColor: "rgb(234, 236, 244)",
                                        drawBorder: false,
                                        borderDash: [2],
                                        zeroLineBorderDash: [2],
                                      },
                                    },
                                  ],
                                },
                                legend: {
                                  display: false,
                                },
                                tooltips: {
                                  backgroundColor: "rgb(255,255,255)",
                                  bodyFontColor: "#858796",
                                  titleMarginBottom: 10,
                                  titleFontColor: "#6e707e",
                                  titleFontSize: 14,
                                  borderColor: "#dddfeb",
                                  borderWidth: 1,
                                  xPadding: 15,
                                  yPadding: 15,
                                  displayColors: false,
                                  intersect: false,
                                  mode: "index",
                                  caretPadding: 10,
                                  callbacks: {
                                    label: function (tooltipItem, chart) {
                                      var datasetLabel =
                                        chart.datasets[tooltipItem.datasetIndex].label || "";
                                      return datasetLabel + ": $" + number_format(tooltipItem.yLabel);
                                    },
                                  },
                                },
                              },
                            });
                         </script>
                       </div>
                   </div>
                </div>

                <div class="card shadow mb-4">

                  <!-- Card Header - Water Pressure -->
                  <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                  >
                    <h6 class="m-0 font-weight-bold text-primary">WATER PRESSURE</h6>
                  </div>

                  <!-- Card Body -->
                  <div class="card-body">
                      <div class="chart-area">
                         <!-- <canvas id="myAreaChart1"></canvas> -->
                         <canvas id="myAreaChartWaterPressure"></canvas>
                         <script>
                           var ctx = document.getElementById("myAreaChartWaterPressure");
                            var myLineChart = new Chart(ctx, {
                              type: "line",
                              data: {
                                labels: [<?php while ($b = mysqli_fetch_array($grafik_wpress)) { echo '"' . $b['timestamp'] . '",';}?>],
                                datasets: [
                                  {
                                    label: "Water Pressure",
                                    lineTension: 0.3,
                                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                                    borderColor: "rgba(78, 115, 223, 1)",
                                    pointRadius: 3,
                                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                                    pointBorderColor: "rgba(78, 115, 223, 1)",
                                    pointHoverRadius: 3,
                                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                                    pointHitRadius: 10,
                                    pointBorderWidth: 2,
                                    data: [
                                      <?php while ($b = mysqli_fetch_array($wpress)) { echo '"' . $b['wpress'] . '",';}?> 
                                    ],
                                  },
                                ],
                              },
                              options: {
                                maintainAspectRatio: false,
                                layout: {
                                  padding: {
                                    left: 10,
                                    right: 25,
                                    top: 25,
                                    bottom: 0,
                                  },
                                },
                                scales: {
                                  xAxes: [
                                    {
                                      time: {
                                        unit: "date",
                                      },
                                      gridLines: {
                                        display: false,
                                        drawBorder: false,
                                      },
                                      ticks: {
                                        maxTicksLimit: 7,
                                      },
                                    },
                                  ],
                                  yAxes: [
                                    {
                                      ticks: {
                                        maxTicksLimit: 5,
                                        padding: 10,
                                        // Include a dollar sign in the ticks
                                        callback: function (value, index, values) {
                                          return "$" + number_format(value);
                                        },
                                      },
                                      gridLines: {
                                        color: "rgb(234, 236, 244)",
                                        zeroLineColor: "rgb(234, 236, 244)",
                                        drawBorder: false,
                                        borderDash: [2],
                                        zeroLineBorderDash: [2],
                                      },
                                    },
                                  ],
                                },
                                legend: {
                                  display: false,
                                },
                                tooltips: {
                                  backgroundColor: "rgb(255,255,255)",
                                  bodyFontColor: "#858796",
                                  titleMarginBottom: 10,
                                  titleFontColor: "#6e707e",
                                  titleFontSize: 14,
                                  borderColor: "#dddfeb",
                                  borderWidth: 1,
                                  xPadding: 15,
                                  yPadding: 15,
                                  displayColors: false,
                                  intersect: false,
                                  mode: "index",
                                  caretPadding: 10,
                                  callbacks: {
                                    label: function (tooltipItem, chart) {
                                      var datasetLabel =
                                        chart.datasets[tooltipItem.datasetIndex].label || "";
                                      return datasetLabel + ": $" + number_format(tooltipItem.yLabel);
                                    },
                                  },
                                },
                              },
                            });
                         </script>
                       </div>
                   </div>
                </div>
              </div>

              <!-- Coloum 2 -->
              <div class="col-xl-6 col-lg-5">
              <div class="row" >

                                <!-- Temperature Indicator -->
                                <div class="col-xl-4 mb-4">
                                <?php 
                                    if($tes['tmp'] == 0)
                                      // mysqli_query($koneksi, "INSERT INTO data_sensor (sensor, time, status) VALUES(  )")
                                    {

                                      ?>
                                       <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Temperature 
                                            <div class="text-white-50 small"></div>
                                            

                                        </div>
                                      </div> 
                                      <?php                                                                    
                                    }
                                    else
                                    {
                                      ?>
                                      <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Temperature
                                            <div class="text-white-50 small"></div>
                                        </div>
                                      </div> 
                                      <?php
                                    }
                                    ?>                                    
                                </div>

                                <!-- Humidity Indicator -->
                                <div class="col-lg-4 mb-4">                                 
                                  <?php 
                                    if($tes['hum'] == 0)
                                    {
                                      ?>
                                       <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Humidity
                                            <div class="text-white-50 small"></div>
                                        </div>
                                      </div> 
                                      <?php                                                                    
                                    }
                                    else
                                    {
                                      ?>
                                      <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Humidity
                                            <div class="text-white-50 small"></div>
                                        </div>
                                      </div> 
                                      <?php
                                    }
                                    ?>                                                                  
                                </div>

                                <!-- RPM Indicator -->
                                <div class="col-lg-4 mb-4">
                                    <?php 
                                    if($tes['rpm']  <= 730)
                                    {
                                      ?>
                                       <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            RPM
                                            <div class="text-white-50 small"></div>
                                        </div>
                                      </div> 
                                      <?php                                                                    
                                    }
                                    else
                                    {
                                      ?>
                                      <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            RPM
                                            <div class="text-white-50 small"></div>
                                        </div>
                                      </div> 
                                      <?php
                                    }
                                    ?> 
                                </div>

                                <!-- Pressure Indicator -->
                                <div class="col-lg-4 mb-4">
                                <?php 
                                    if($tes['wpress'] <= 7.5 )
                                    {
                                      ?>
                                       <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Water Pressure
                                            <div class="text-white-50 small"></div>
                                        </div>
                                      </div> 
                                      <?php                                                                    
                                    }
                                    else
                                    {
                                      ?>
                                      <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Water Pressure
                                            <div class="text-white-50 small"></div>
                                        </div>
                                      </div> 
                                      <?php
                                    }
                                    ?> 
                                </div>

                                <!-- Load Indicator -->
                                <div class="col-lg-4 mb-4">
                                <?php 
                                    if($tes['adc0'] < 210 || $tes['adc0'] > 250)
                                    {
                                      ?>
                                       <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Generator Voltage
                                            <div class="text-white-50 small"></div>
                                        </div>
                                      </div> 
                                      <?php                                                                    
                                    }
                                    else
                                    {
                                      ?>
                                      <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Generator Voltage
                                            <div class="text-white-50 small"></div>
                                        </div>
                                      </div> 
                                      <?php
                                    }
                                    ?> 
                                </div>

                                <!-- Dummy Load Indicator -->
                                <div class="col-lg-4 mb-4">
                                    <?php 
                                    if($tes['adc1'] < 210 || $tes['adc1'] >250)
                                    {
                                      ?>
                                       <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Consumen Voltage
                                            <div class="text-white-50 small"></div>
                                        </div>
                                      </div> 
                                      <?php                                                                    
                                    }
                                    else
                                    {
                                      ?>
                                      <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Consumen Voltage
                                            <div class="text-white-50 small"></div>
                                        </div>
                                      </div> 
                                      <?php
                                    }
                                    ?> 
                                </div>

                                <!-- Voltage Indicator -->
                                <div class="col-lg-4 mb-4">
                                <?php 
                                    if($tes['adc2']  < 50)
                                    {
                                      ?>
                                       <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Dummy Voltage
                                            <div class="text-white-50 small"></div>
                                        </div>
                                      </div> 
                                      <?php                                                                    
                                    }
                                    else
                                    {
                                      ?>
                                      <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Dummy Voltage
                                            <div class="text-white-50 small"></div>
                                        </div>
                                      </div> 
                                      <?php
                                    }
                                    ?> 
                                </div>

                                

                                <!-- Current 0 Indicator -->
                                <div class="col-lg-4 mb-4">
                                <?php 
                                    if($tes['irms0'] <=5)
                                    {
                                      ?>
                                       <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Generator Current
                                            <div class="text-white-50 small"></div>
                                        </div>
                                      </div> 
                                      <?php                                                                    
                                    }
                                    else
                                    {
                                      ?>
                                      <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Generator Current
                                            <div class="text-white-50 small"></div>
                                        </div>
                                      </div> 
                                      <?php
                                    }
                                    ?> 
                                </div>

                                <!-- Current 1 Indicator -->
                                <div class="col-lg-4 mb-4">
                                <?php 
                                    if($tes['irms1'] <= 0.5)
                                    {
                                      ?>
                                       <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Consumen Current
                                            <div class="text-white-50 small"></div>
                                        </div>
                                      </div> 
                                      <?php                                                                    
                                    }
                                    else
                                    {
                                      ?>
                                      <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Consumen Current
                                            <div class="text-white-50 small"></div>
                                        </div>
                                      </div> 
                                      <?php
                                    }
                                    ?> 
                                </div>

                                <!-- Current 2 Indicator -->
                                <div class="col-lg-4 mb-4">
                                <?php 
                                    if($tes['irms2'] <= 0.5)
                                    {
                                      ?>
                                       <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Dummy Current
                                            <div class="text-white-50 small"></div>
                                        </div>
                                      </div> 
                                      <?php                                                                    
                                    }
                                    else
                                    {
                                      ?>
                                      <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Dummy Current
                                            <div class="text-white-50 small"></div>
                                        </div>
                                      </div> 
                                      <?php
                                    }
                                    ?> 
                                </div>

                                
                            </div>
                            
                  <div class="card shadow mb-4">
                  <!-- Card Header - Humidity -->
                  <div
                    class="col-xl-6 col-lg-5 card-header py-3 d-flex flex-row align-items-center justify-content-between"
                  >
                    <h6 class="m-0 font-weight-bold text-primary">ENVIRONMENT</h6>
                  </div>

                  <!-- Card Body -->
                  <div class="card-body">
                      <div class="chart-area">
                        <!-- <canvas id="myAreaChart1"></canvas> -->
                        <canvas id="myAreaChartHumidity"></canvas>
                         <script>
                           var ctx = document.getElementById("myAreaChartHumidity");
                            var myLineChart = new Chart(ctx, {
                              type: "line",
                              data: {
                                labels: [<?php while ($b = mysqli_fetch_array($grafik_env)) { echo '"' . $b['timestamp'] . '",';}?>],
                                datasets: [
                                  {
                                    label: "Humidity",
                                    lineTension: 0.3,
                                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                                    borderColor: "#FC1708",
                                    pointRadius: 3,
                                    pointBackgroundColor: "#FC1708",
                                    pointBorderColor: "#FC1708",
                                    pointHoverRadius: 3,
                                    pointHoverBackgroundColor: "#FC1708",
                                    pointHoverBorderColor: "#FC1708",
                                    pointHitRadius: 10,
                                    pointBorderWidth: 2,
                                    data: [
                                      <?php while ($b = mysqli_fetch_array($hum)) { echo '"' . $b['hum'] . '",';}?> 
                                    ],
                                  },
                                  {
                                    label: "Temperature",
                                    lineTension: 0.3,
                                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                                    borderColor: "rgba(78, 115, 223, 1)",
                                    pointRadius: 3,
                                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                                    pointBorderColor: "rgba(78, 115, 223, 1)",
                                    pointHoverRadius: 3,
                                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                                    pointHitRadius: 10,
                                    pointBorderWidth: 2,
                                    data: [
                                      <?php while ($b = mysqli_fetch_array($temp)) { echo '"' . $b['tmp'] . '",';}?> 
                                    ],
                                  },
                                ],
                              },
                              options: {
                                maintainAspectRatio: false,
                                layout: {
                                  padding: {
                                    left: 10,
                                    right: 25,
                                    top: 25,
                                    bottom: 0,
                                  },
                                },
                                scales: {
                                  xAxes: [
                                    {
                                      time: {
                                        unit: "date",
                                      },
                                      gridLines: {
                                        display: false,
                                        drawBorder: false,
                                      },
                                      ticks: {
                                        maxTicksLimit: 7,
                                      },
                                    },
                                  ],
                                  yAxes: [
                                    {
                                      ticks: {
                                        maxTicksLimit: 5,
                                        padding: 10,
                                        // Include a dollar sign in the ticks
                                        callback: function (value, index, values) {
                                          return "$" + number_format(value);
                                        },
                                      },
                                      gridLines: {
                                        color: "rgb(234, 236, 244)",
                                        zeroLineColor: "rgb(234, 236, 244)",
                                        drawBorder: false,
                                        borderDash: [2],
                                        zeroLineBorderDash: [2],
                                      },
                                    },
                                  ],
                                },
                                legend: {
                                  display: false,
                                },
                                tooltips: {
                                  backgroundColor: "rgb(255,255,255)",
                                  bodyFontColor: "#858796",
                                  titleMarginBottom: 10,
                                  titleFontColor: "#6e707e",
                                  titleFontSize: 14,
                                  borderColor: "#dddfeb",
                                  borderWidth: 1,
                                  xPadding: 15,
                                  yPadding: 15,
                                  displayColors: false,
                                  intersect: false,
                                  mode: "index",
                                  caretPadding: 10,
                                  callbacks: {
                                    label: function (tooltipItem, chart) {
                                      var datasetLabel =
                                        chart.datasets[tooltipItem.datasetIndex].label || "";
                                      return datasetLabel + ": $" + number_format(tooltipItem.yLabel);
                                    },
                                  },
                                },
                              },
                            });
                         </script>
                      </div>
                   </div>
                </div>

                <div class="card shadow mb-4">
                  <!-- Card Header - Current -->
                  <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                  >
                    <h6 class="m-0 font-weight-bold text-primary">CURRENT</h6>
                  </div>

                  <!-- Card Body -->
                  <div class="card-body">
                      <div class="chart-area">
                            <!-- <canvas id="myAreaChart1"></canvas> -->
                        <canvas id="myAreaChartCurrent"></canvas>
                         <script>
                           var ctx = document.getElementById("myAreaChartCurrent");
                            var myLineChart = new Chart(ctx, {
                              type: "line",
                              data: {
                                labels: [<?php while ($b = mysqli_fetch_array($grafik_cur)) { echo '"' . $b['timestamp'] . '",';}?>],
                                datasets: [
                                  {
                                    label: "Generator Current",
                                    lineTension: 0.3,
                                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                                    borderColor: "#FC1708",
                                    pointRadius: 3,
                                    pointBackgroundColor: "#FC1708",
                                    pointBorderColor: "#FC1708",
                                    pointHoverRadius: 3,
                                    pointHoverBackgroundColor: "#FC1708",
                                    pointHoverBorderColor: "#FC1708",
                                    pointHitRadius: 10,
                                    pointBorderWidth: 2,
                                    data: [
                                      <?php while ($b = mysqli_fetch_array($irms0)) { echo '"' . $b['irms0'] . '",';}?> 
                                    ],
                                    
                                  },
                                  {
                                    label: "Consumen Current",
                                    lineTension: 0.3,
                                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                                    borderColor: "rgba(78, 115, 223, 1)",
                                    pointRadius: 3,
                                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                                    pointBorderColor: "rgba(78, 115, 223, 1)",
                                    pointHoverRadius: 3,
                                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                                    pointHitRadius: 10,
                                    pointBorderWidth: 2,
                                    data: [
                                      <?php while ($b = mysqli_fetch_array($irms1)) { echo '"' . $b['irms1'] . '",';}?> 
                                    ],
                                  },
                                  {
                                    label: "Dummy Current",
                                    lineTension: 0.3,
                                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                                    borderColor: "#03BB1F",
                                    pointRadius: 3,
                                    pointBackgroundColor: "#03BB1F",
                                    pointBorderColor: "#03BB1F",
                                    pointHoverRadius: 3,
                                    pointHoverBackgroundColor: "#03BB1F",
                                    pointHoverBorderColor: "#03BB1F",
                                    pointHitRadius: 10,
                                    pointBorderWidth: 2,
                                    data: [
                                      <?php while ($b = mysqli_fetch_array($irms2)) { echo '"' . $b['irms2'] . '",';}?> 
                                    ],
                                    
                                  },
                                  // {
                                  //   label: "Irms2",
                                  //   lineTension: 0.3,
                                  //   backgroundColor: "rgba(78, 115, 223, 0.05)",
                                  //   borderColor: "#FCA708",
                                  //   pointRadius: 3,
                                  //   pointBackgroundColor: "#FCA708",
                                  //   pointBorderColor: "#FCA708",
                                  //   pointHoverRadius: 3,
                                  //   pointHoverBackgroundColor: "#FCA708",
                                  //   pointHoverBorderColor: "#FCA708",
                                  //   pointHitRadius: 10,
                                  //   pointBorderWidth: 2,
                                  //   data: [
                                  //     <?php while ($b = mysqli_fetch_array($irms1)) { echo '"' . $b['irms2'] . '",';}?> 
                                  //   ],
                                  // },
                                ],
                              },
                              options: {
                                maintainAspectRatio: false,
                                layout: {
                                  padding: {
                                    left: 10,
                                    right: 25,
                                    top: 25,
                                    bottom: 0,
                                  },
                                },
                                scales: {
                                  xAxes: [
                                    {
                                      time: {
                                        unit: "date",
                                      },
                                      gridLines: {
                                        display: false,
                                        drawBorder: false,
                                      },
                                      ticks: {
                                        maxTicksLimit: 7,
                                      },
                                    },
                                  ],
                                  yAxes: [
                                    {
                                      ticks: {
                                        maxTicksLimit: 5,
                                        padding: 10,
                                        // Include a dollar sign in the ticks
                                        callback: function (value, index, values) {
                                          return "$" + number_format(value);
                                        },
                                      },
                                      gridLines: {
                                        color: "rgb(234, 236, 244)",
                                        zeroLineColor: "rgb(234, 236, 244)",
                                        drawBorder: false,
                                        borderDash: [2],
                                        zeroLineBorderDash: [2],
                                      },
                                    },
                                  ],
                                },
                                legend: {
                                  display: false,
                                },
                                tooltips: {
                                  backgroundColor: "rgb(255,255,255)",
                                  bodyFontColor: "#858796",
                                  titleMarginBottom: 10,
                                  titleFontColor: "#6e707e",
                                  titleFontSize: 14,
                                  borderColor: "#dddfeb",
                                  borderWidth: 1,
                                  xPadding: 15,
                                  yPadding: 15,
                                  displayColors: false,
                                  intersect: false,
                                  mode: "index",
                                  caretPadding: 10,
                                  callbacks: {
                                    label: function (tooltipItem, chart) {
                                      var datasetLabel =
                                        chart.datasets[tooltipItem.datasetIndex].label || "";
                                      return datasetLabel + ": $" + number_format(tooltipItem.yLabel);
                                    },
                                  },
                                },
                              },
                            });
                         </script>
                       </div>
                   </div>
                </div>

                <div class="card shadow mb-4">
                  <!-- Card Header - Voltage -->
                  <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                  >
                    <h6 class="m-0 font-weight-bold text-primary">VOLTAGE</h6>
                  </div>

                  <!-- Card Body -->
                  <div class="card-body">
                      <div class="chart-area">
                            <!-- <canvas id="myAreaChart1"></canvas> -->
                        <canvas id="myAreaChartVoltage"></canvas>
                         <script>
                           var ctx = document.getElementById("myAreaChartVoltage");
                            var myLineChart = new Chart(ctx, {
                              type: "line",
                              data: {
                                labels: [<?php while ($b = mysqli_fetch_array($grafik_vol)) { echo '"' . $b['timestamp'] . '",';}?>],
                                datasets: [
                                  {
                                    label: "Generator Voltage",
                                    lineTension: 0.3,
                                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                                    borderColor: "#FC1708",
                                    pointRadius: 3,
                                    pointBackgroundColor: "#FC1708",
                                    pointBorderColor: "#FC1708",
                                    pointHoverRadius: 3,
                                    pointHoverBackgroundColor: "#FC1708",
                                    pointHoverBorderColor: "#FC1708",
                                    pointHitRadius: 10,
                                    pointBorderWidth: 2,
                                    data: [
                                      <?php while ($b = mysqli_fetch_array($adc0)) { echo '"' . $b['adc0'] . '",';}?> 
                                    ],
                                    
                                  },
                                  {
                                    label: "Consumen Voltage",
                                    lineTension: 0.3,
                                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                                    borderColor: "rgba(78, 115, 223, 1)",
                                    pointRadius: 3,
                                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                                    pointBorderColor: "rgba(78, 115, 223, 1)",
                                    pointHoverRadius: 3,
                                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                                    pointHitRadius: 10,
                                    pointBorderWidth: 2,
                                    data: [
                                      <?php while ($b = mysqli_fetch_array($adc1)) { echo '"' . $b['adc1'] . '",';}?> 
                                    ],
                                  },
                                  {
                                    label: "Dummy Voltage",
                                    lineTension: 0.3,
                                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                                    borderColor: "#03BB1F",
                                    pointRadius: 3,
                                    pointBackgroundColor: "#03BB1F",
                                    pointBorderColor: "#03BB1F",
                                    pointHoverRadius: 3,
                                    pointHoverBackgroundColor: "#03BB1F",
                                    pointHoverBorderColor: "#03BB1F",
                                    pointHitRadius: 10,
                                    pointBorderWidth: 2,
                                    data: [
                                      <?php while ($b = mysqli_fetch_array($adc2)) { echo '"' . $b['adc2'] . '",';}?> 
                                    ],
                                    
                                  },
                                  // {
                                  //   label: "Irms2",
                                  //   lineTension: 0.3,
                                  //   backgroundColor: "rgba(78, 115, 223, 0.05)",
                                  //   borderColor: "#FCA708",
                                  //   pointRadius: 3,
                                  //   pointBackgroundColor: "#FCA708",
                                  //   pointBorderColor: "#FCA708",
                                  //   pointHoverRadius: 3,
                                  //   pointHoverBackgroundColor: "#FCA708",
                                  //   pointHoverBorderColor: "#FCA708",
                                  //   pointHitRadius: 10,
                                  //   pointBorderWidth: 2,
                                  //   data: [
                                  //     
                                  //   ],
                                  // },
                                ],
                              },
                              options: {
                                maintainAspectRatio: false,
                                layout: {
                                  padding: {
                                    left: 10,
                                    right: 25,
                                    top: 25,
                                    bottom: 0,
                                  },
                                },
                                scales: {
                                  xAxes: [
                                    {
                                      time: {
                                        unit: "date",
                                      },
                                      gridLines: {
                                        display: false,
                                        drawBorder: false,
                                      },
                                      ticks: {
                                        maxTicksLimit: 7,
                                      },
                                    },
                                  ],
                                  yAxes: [
                                    {
                                      ticks: {
                                        maxTicksLimit: 5,
                                        padding: 10,
                                        // Include a dollar sign in the ticks
                                        callback: function (value, index, values) {
                                          return "$" + number_format(value);
                                        },
                                      },
                                      gridLines: {
                                        color: "rgb(234, 236, 244)",
                                        zeroLineColor: "rgb(234, 236, 244)",
                                        drawBorder: false,
                                        borderDash: [2],
                                        zeroLineBorderDash: [2],
                                      },
                                    },
                                  ],
                                },
                                legend: {
                                  display: false,
                                },
                                tooltips: {
                                  backgroundColor: "rgb(255,255,255)",
                                  bodyFontColor: "#858796",
                                  titleMarginBottom: 10,
                                  titleFontColor: "#6e707e",
                                  titleFontSize: 14,
                                  borderColor: "#dddfeb",
                                  borderWidth: 1,
                                  xPadding: 15,
                                  yPadding: 15,
                                  displayColors: false,
                                  intersect: false,
                                  mode: "index",
                                  caretPadding: 10,
                                  callbacks: {
                                    label: function (tooltipItem, chart) {
                                      var datasetLabel =
                                        chart.datasets[tooltipItem.datasetIndex].label || "";
                                      return datasetLabel + ": $" + number_format(tooltipItem.yLabel);
                                    },
                                  },
                                },
                              },
                            });
                         </script>
                       </div>
                   </div>




                </div>
              </div>
              
              


            </div> 
       
          
             <!-- Begin Page Content -->
             <div class="container-fluid">




</div>
<!-- /.container-fluid -->



                    <!-- Content Row for Table -->       
           <div class="row">            
           <div class="col-xl-12 col-lg-7">

                  <!-- DataTales Example -->
                  <div class="card shadow mb-4">

                      <div class="card-header py-3">
                      <h6 class="font-weight-bold text-primary">DETAILS TABLE</h6>

                          <!-- <form action="laporan-excel.php" method="GET"> -->
                          <a target="_blank" href="laporan-excel.php" class="btn btn-danger mb-2">Download Data Excel</a> 
                          <!-- <button type="button" name="downloadExcel" class="btn btn-danger mb-2">Download Data Excel</button>
                          </form> -->
                           
                          
                          <!-- filter -->
                          <form action="#" method="GET" >
                            <div class="form-row align-items-center">
                              <div class="col-auto">
                                <label class="sr-only" for="inlineFormInput">Name</label>
                                <input type="date" name="date1" class="form-control mb-2" id="inlineFormInput" placeholder="Masukkan tanggal ke-1">
                              </div>
                              <div class="col-auto">
                                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                <div class="input-group mb-2">
                                  
                                  <input type="date" name="date2" class="form-control" id="inlineFormInputGroup" placeholder="Masukkan tanggal ke-2">
                                </div>
                              </div>
                              
                              <div class="col-auto">
                                <button type="submit" name="filter" class="btn btn-primary mb-2">Cari</button>
                              </div>
                            </div>
                          </form>
                          
                      </div>
                      <div class="card-body">
                                    <div class="table-responsive">
                                        <div class="scroll">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="">
                                            <thead>
                                                <tr style="position: sticky; top: 0;  background: #4e73df;">
                                                    
                                                    <th style="color: white;">TIME</th>
                                                    <th style="color: white;">TEMPERATUR</th>
                                                    <th style="color: white;">HUMIDITY</th>
                                                    <th style="color: white;">ALTITUDE</th>
                                                    <th style="color: white;">RPM</th>
                                                    <th style="color: white;">WATER PRESSURE</th>
                                                    <th style="color: white;">GENERATOR VOLTAGE</th>
                                                    <th style="color: white;">CONSUMEN VOLTAGE</th>
                                                    <th style="color: white;">DUMMY VOLTAGE</th>
                                                    <th style="color: white;">GENERATOR CURRENT</th>
                                                    <th style="color: white;">CONSUMEN CURRENT</th>
                                                    <th style="color: white;">DUMMY CURRENT</th>
                                                    
                                                </tr>
                                            </thead>

                                            <?php 
                                            //jika tanggal dari dan tanggal ke ada maka
                                            if(isset($_GET['date1']) && isset($_GET['date2'])){
                                                // tampilkan data yang sesuai dengan range tanggal yang dicari 
                                                $data = mysqli_query($koneksi, "SELECT * FROM data_sensor WHERE timestamp BETWEEN '".$_GET['date1']."' and '".$_GET['date2']."' ORDER BY timestamp DESC");
                                            }else{
                                                //jika tidak ada tanggal dari dan tanggal ke maka tampilkan seluruh data
                                                $data = mysqli_query($koneksi, "SELECT * FROM data_sensor ORDER BY timestamp DESC");		
                                            }
                                            
                                            while($d = mysqli_fetch_array($data)){
                                            ?>
                                            <tbody>
                                                <tr>
                                                    
                                                    <td><?= $d["timestamp"]; ?></td>
                                                    <td><?= $d["tmp"]; ?></td>
                                                    <td><?= $d["hum"]; ?></td>
                                                    <td><?= $d["altd"]; ?></td>
                                                    <td><?= $d["rpm"]; ?></td>
                                                    <td><?= $d["wpress"]; ?></td>
                                                    <td><?= $d["adc0"]; ?></td>
                                                    <td><?= $d["adc1"]; ?></td>
                                                    <td><?= $d["adc2"]; ?></td>
                                                    <td><?= $d["irms0"]; ?></td>
                                                    <td><?= $d["irms1"]; ?></td>
                                                    <td><?= $d["irms2"]; ?></td>
                                                    
                                                </tr>   
                                                <?php } ?>
                                            </tbody>
                                            
                                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                    </div>

                   
           
        <!-- End of Main Content -->

        

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Powered by &copy; Parametrik Solusi Integrasi 2022 (Version 1.0)</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true"></span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Cancel
            </button>
            <a class="btn btn-primary" href="index.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-area-demo-1.js"></script>
    <script src="js/demo/chart-area-demo-2.js"></script>
    <script src="js/demo/chart-area-demo-3.js"></script>
    <script src="js/demo/chart-area-demo-4.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- Boostrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>

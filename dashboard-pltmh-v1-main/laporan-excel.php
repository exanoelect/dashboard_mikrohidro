<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Export Excel</title>
  </head>
  <body>
  <?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data-monitoring.xlsx");
	?>

    <?php 
    include "function.php";
    ?>
  <table class="table table-bordered">
  <thead>
    <tr>
        <th>TIME</th>
        <th>TEMPERATUR</th>
        <th>HUMIDITY</th>
        <th>ALTITUDE</th>
        <th>RPM</th>
        <th>WATER PRESSURE</th>
        <th>GENERATOR VOLTAGE</th>
        <th>CONSUMEN VOLTAGE</th>
        <th>DUMMY VOLTAGE</th>
        <th>GENERATOR CURRENT</th>
        <th>CONSUMEN CURRENT</th>
        <th>DUMMY CURRENT</th>
    </tr>
  </thead>
  <?php 
                                            //jika tanggal dari dan tanggal ke ada maka
                                            if(isset($_GET['date1']) && isset($_GET['date2'])){
                                                // tampilkan data yang sesuai dengan range tanggal yang dicari 
                                                $data = mysqli_query($koneksi, "SELECT * FROM data_sensor WHERE timestamp BETWEEN '".$_GET['date1']."' and '".$_GET['date2']."'");
                                            }else{
                                                //jika tidak ada tanggal dari dan tanggal ke maka tampilkan seluruh data
                                                $data = mysqli_query($koneksi, "SELECT * FROM data_sensor");		
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














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
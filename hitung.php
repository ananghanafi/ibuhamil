<?php
if(isset($_POST['contoh'])){
  session_start();
  $_SESSION['arrX']   = array();
  $_SESSION['arrY']   = array();
  $_SESSION['field1'] = "Luas Bangunan";
  $_SESSION['field2'] = "Harga Rumah";
  $_SESSION['arrX']   = array(1400, 1600, 1700, 1875, 1100, 1550, 2350, 2450, 1425, 1700);
  $_SESSION['arrY']   = array(245, 312, 279, 308, 199, 219, 405, 324, 319, 255);
  header('Location: k-medoid.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Algoritma K-Medoids</title>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/custom.css">
     <link href="style.css" rel="stylesheet">
    <script src="jquery-2.1.4.min.js"></script>
    <script src="Chart.js"></script>


  </head>

  <body id="bodyhitung">
    <div class="wrapper">
      <div class="container" id="container-hitung">
        <br><br>

        <ul class="breadcrumb">
          <li><a style="font-family: 'Montserrat';" href="index.php">Home</a></li>
          <li><a style="font-family: 'Montserrat';" href="hitung.php">Hitung</a></li>
        </ul>

        <form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <input type="file" name="file" style="margin-left:2%; font-family: 'Montserrat';" >
        <br>
        <input type="submit" name="insert" value="Baca File" style="margin-left:2%; font-family: 'Montserrat';" class="btn btn-success" >
        </form>
        <br>
        <div class="outer">
          <div class="inner">
            <table class="table table-bordered table-condensed table-hover ">
            <?php

            if (isset($_REQUEST['insert'])) {
              $row = 1;
              ini_set('auto_detect_line_endings',TRUE);
              if (($handle = fopen($_FILES['file']['tmp_name'], 'r+')) !== FALSE) {
                  while (($data = fgetcsv($handle, 10000, ",")) !== FALSE) {

                      $num = count($data);

                      echo "<tr>";
                      for ($c=0; $c < $num; $c++) {

                          if ($row == 1) {
                              echo "<th>" . $data[$c] . "</th>\n";
                          } else {
                              echo "<td>" . $data[$c] . "</td>\n";
                          }
                      }

                      echo "</tr>\n";
                      $row++;
                  }
                  ini_set('auto_detect_line_endings',FALSE);
                  fclose($handle);
              }
            }
            
            ?>
            </table>
          </div>
        </div>
            <br><br>
            <button style="margin-left:50%; font-family: 'Montserrat';" class="btn btn-success"><a  type="button" href="\ibuhamil\k-medoidMan.php">Hitung</a></button>
<!-- DONUT CHART -->
<!--           <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Chart</h3>
            </div>

                <canvas id="mycanvas" style="margin-left:35%;" width="256" height="256"> -->
                <!-- <canvas id="pieChart" style="height:250px"></canvas> -->
            <!-- /.box-body -->
          <!-- </div> -->
          <!-- /.box -->
<!--           </div>

    </div> -->
<!-- 
<button style="margin-left:50%; font-family: 'Montserrat';" class="btn btn-success" type="button" onclick="tambahInput()">Tambah Input</button> -->

<!-- <script>
      $(document).ready(function(){
        var ctx = $("#mycanvas").get(0).getContext("2d");

        //pie chart data
        //sum of values = 360
        var data = [
          {
            value: 270,
            color: "cornflowerblue",
            highlight: "lightskyblue",
            label: "Corn Flower Blue"
          },
          {
            value: 50,
            color: "lightgreen",
            highlight: "yellowgreen",
            label: "Lightgreen"
          },
          {
            value: 40,
            color: "orange",
            highlight: "darkorange",
            label: "Orange"
          },      {
        value    : 700,
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'Chrome'
      },
      {
        value    : 500,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'IE'
      },
      {
        value    : 400,
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : 'FireFox'
      },
      {
        value    : 600,
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : 'Safari'
      },
      {
        value    : 300,
        color    : '#3c8dbc',
        highlight: '#3c8dbc',
        label    : 'Opera'
      },
      {
        value    : 100,
        color    : '#d2d6de',
        highlight: '#d2d6de',
        label    : 'Navigator'
      }

        ];

        //draw
        var piechart = new Chart(ctx).Doughnut(data);

      });
    </script> -->
  </body>
</html>

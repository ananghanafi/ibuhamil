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

  </head>
  <body id="bodyhitung">

    <div class="wrapper">
          <div class="container" id="container-hitung">
              <br/><br/>

              <ul class="breadcrumb">
                <li><a style="font-family: 'Montserrat';" href="index.php">Home</a></li>
                <li><a style="font-family: 'Montserrat';" href="hitung.php">Hitung</a></li>
              </ul>

<div class="outer">
    <div class="inner">
      <table class="table table-bordered table-condensed table-hover ">
      <?php
      $row = 1;
      ini_set('auto_detect_line_endings',TRUE);
      if (($handle = fopen("DatasetIbuHamil.csv", "r")) !== FALSE) {
          while (($data = fgetcsv($handle, 1050, ",")) !== FALSE) {

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
      ?>
      </table>
   </div>
</div>
            <div class="tab-content no-padding">
<!--               Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
            </div>

              <!-- <h2>Algoritma K-Medoids</h2>
              <p style="font-size:12pt;">Untuk melakukan perhitungan dengan menggunakan algoritma k-medoids. Input beberapa data untuk digunakan dalam memperoleh hasil.
                Jika ingin melihat contoh hasil silahkan pilih tombol contoh.
                Jika ingin menginputkan data silahkan klik tomboh input data</p><br/><br/>
<!--                 <div class="inti"> -->
<!--                 <div class="col-md-3">
                    <button style="font-family: 'Montserrat';" type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">Input Data</button>
                    <div id="myModal" class="modal fade" role="dialog"> -->
 <!--                  <div class="modal-dialog"> -->

                    <!-- Modal content-->
<!--                     <div class="modal-content"> -->
                      <!-- <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 clas3="modal-title">INPUT DATA</h3>
                      </div> -->
<!-- 
                      <div class="modal-body"> -->
                       <!--  <body>
                       
                        <form action="" method="post" enctype="multipart/form-data" name="ContohUploadCSV" id="ContohUploadCSV">
                          <p>Pilih file csv
                            <input type="file" name="filecsv" id="filecsv" />
                        </p>
                          <p>
                            <a href="example.php" class="btn btn-default" name="button" id="button">Kirim</a> -->
                            <!-- <input type="submit" name="button" id="button" value="Kirim" /> -->
<!--                         </p>
                        </form>
                        </body>
 -->
<!--                           <button style="margin-left:2%; font-family: 'Montserrat';" class="btn btn-success" type="button" onclick="tambahInput()">Tambah Input</button><br/><br/> -->
<!--                           <form method="post" onsubmit="return validate()" action="session.php">
                            <input type="hidden" name="manual" value="1">
                            <table>
                              <thead>
                                <tr>
                                  <td id="inputnya"><input class="form-control" type="text" name="field1" placeholder="Masukan Nama Field" required></td>
                                  <td id="inputnya"><input class="form-control" type="text" name="field2" placeholder="Masukan Nama Field" required></td>
                                  <td id="tombolx"></td>
                                </tr>
                              </thead>
                              <tbody id="nilai-input">
                              </tbody>
                            </table>
                            <br/><br/>
                            <button style="margin-left:2%; font-family: 'Montserrat';" class="btn btn-primary" type="submit">Hitung !</button>
                          </form>  -->
<!--                       </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>

                    </div>

                  </div> -->
<!--                 </div> -->
<!--                 </div> -->
<!--                 <div class="col-md-4">
                      <form method="post">
                        <button style="font-family: 'Montserrat';" class="btn btn-warning" type="submit" name="contoh">Contoh</button>
                      </form>
                </div> -->
            <!--   </div> -->

          </div>

    </div>

  </body>
</html>

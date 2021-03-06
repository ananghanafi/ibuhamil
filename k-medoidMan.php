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
          <li><a style="font-family: 'Montserrat';" href="hitung.php">Medoids</a></li>
        </ul>
<?php








$nilai=array(
	array(2,28,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","P",3100,"ya","tidak","tidak",6,"tidak",30,7,"kadang-kadang","tidak","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih bening",1,1,"ya","tidak",45,150,54,21,"baik","baik","tidak","tidak",100,70,36,81,23,"tidak","baik","baik","karies","tidak","baik","baik","tidak","tidak","tidak","baik","tidak",23,30,"baik","tidak","tidak",0,144,"tidak",11.36,0,0,"B","Kehamilan-Resiko-Rendah"),
	array(2,25,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3300,"ya","tidak","tidak",7,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",55,146,59,29,"baik","baik","tidak","tidak",90,70,36,81,23,"tidak","baik","baik","karies","tidak","baik","baik","ada","tidak","tidak","baik","tidak",2,14,"baik","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah"),
	array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","P",3400,"ya","tidak","tidak",7,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",46,151,46,24,"baik","baik","tidak","tidak",100,70,34,81,24,"tidak","baik","baik","baik","tidak","baik","baik","tidak","tidak","tidak","baik","tidak",21,14,"baik","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah"),
	array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","P",3400,"ya","tidak","tidak",7,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",46,151,46,24,"normal","baik","tidak","tidak",100,70,34,81,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",21,14,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3000,"ya","tidak","tidak",4,"tidak",28,10,"kadang-kadang","tidak","tidak","aktif","tidak","menurun","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",60,153,59,27,"normal","baik","tidak","tidak",100,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",30,33,"normal","tidak","tidak",0,144,"tidak",10.38,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,33,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2000,"ya","tidak","tidak",5,"tidak",28,7,"terus-menerus","terus-menerus","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",55,150,51,27,"normal","baik","tidak","tidak",90,60,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","ada",15,14,"normal","tidak","tidak",0,144,"tidak",9.18,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,29,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",4300,"ya","tidak","tidak",4,"tidak",28,7,"kadang-kadang","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,160,168,27,"normal","baik","tidak","tidak",100,60,37,81,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",6,19,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,34,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","L",3900,"ya","tidak","tidak",1,"tidak",28,7,"tidak","kadang-kadang","ada","jarang","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","pernah","tidak","tidak",1,1,"tidak","tidak",55,162,59,32,"normal","baik","tidak","tidak",110,70,37,81,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",15,16,"normal","tidak","tidak",0,144,"tidak",9.28,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,20,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3400,"ya","tidak","tidak",4,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",65,155,76,33,"normal","baik","tidak","tidak",120,80,36,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",26,34,"normal","tidak","tidak",0,144,"tidak",10.48,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(1,22,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,155,64,20,"normal","baik","tidak","tidak",110,70,35,81,25,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,17,"normal","tidak","tidak",0,144,"tidak",11.16,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(3,27,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3300,"ya","tidak","tidak",4,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","ada","tidak",1,1,"ya","tidak",56,161,65,25,"normal","baik","tidak","tidak",120,80,36,76,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",2,12,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(3,33,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","P",3600,"ya","tidak","tidak",5,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",70,158,90,35,"normal","baik","tidak","tidak",120,70,37,80,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,8,"normal","tidak","tidak",0,144,"tidak",14.15,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",2,"tidak",28,7,"tidak","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,148,41,22,"normal","baik","tidak","tidak",120,60,36,80,18,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",24,24,"normal","tidak","tidak",0,144,"tidak",8.3,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,25,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",2600,"ya","tidak","tidak",4,"tidak",30,6,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",64,158,67,31,"normal","baik","tidak","tidak",120,70,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","ada",0,6,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3600,"ya","tidak","tidak",11,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",50,160,52,27,"normal","baik","tidak","tidak",90,70,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,9,"normal","tidak","tidak",0,144,"tidak",9.37,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,28,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2600,"ya","tidak","tidak",1,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",37,150,37,22,"normal","baik","tidak","tidak",90,60,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,6,"normal","tidak","tidak",0,144,"tidak",8.41,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,24,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3500,"ya","tidak","tidak",3,"tidak",28,7,"tidak","kadang-kadang","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",45,150,59,27,"normal","baik","tidak","tidak",90,60,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,10,"normal","tidak","tidak",0,144,"tidak",10.1,0,0,"O","Kehamilan-Resiko-Rendah",),
		array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3400,"ya","tidak","tidak",1,"tidak",28,6,"kadang-kadang","tidak","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",43,151,41,20,"normal","baik","tidak","tidak",100,70,36,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",0,9,"normal","tidak","tidak",0,144,"tidak",8.37,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(3,35,"tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"ya",30,4,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","tidak",1,1,"tidak","tidak",54,146,50,27,"normal","baik","tidak","tidak",120,70,36,80,18,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",12,18,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(1,25,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,5,"tidak","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",54,153,49,23,"normal","baik","tidak","tidak",100,70,36,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",0,5,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(4,36,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3400,"ya","tidak","tidak",3,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",60,151,64,23,"normal","baik","tidak","tidak",120,80,37,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",28,28,"normal","tidak","tidak",0,144,"tidak",12.42,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(4,34,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3300,"ya","tidak","tidak",12,"tidak",28,4,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",60,157,70,26,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",29,31,"normal","tidak","tidak",0,144,"tidak",11.71,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(2,25,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3300,"ya","tidak","tidak",3,"tidak",30,5,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",49,146,54,24,"normal","baik","tidak","tidak",100,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",17,18,"normal","tidak","tidak",0,144,"tidak",10.18,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,27,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2600,"ya","tidak","tidak",6,"tidak",28,7,"tidak","tidak","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",49,155,64,27,"normal","baik","tidak","tidak",90,60,36,81,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",24,26,"normal","tidak","tidak",0,140,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,24,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2200,"ya","tidak","tidak",3,"ya",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",52,149,55,26,"normal","baik","tidak","tidak",100,60,36,82,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",12,23,"normal","tidak","tidak",0,152,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(4,35,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3000,"ya","tidak","tidak",1,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","tidak",1,1,"tidak","tidak",47,161,48,27,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",32,36,"normal","tidak","tidak",0,126,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(3,33,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3000,"ya","tidak","tidak",10,"tidak",28,7,"tidak","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,158,52,27,"normal","baik","tidak","tidak",120,80,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,12,"normal","tidak","tidak",0,144,"tidak",10.31,0,0,"B","Kehamilan-Resiko-Tinggi",),
		array(3,27,"tidak","ya","tidak","ya","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",3500,"ya","tidak","tidak",0,"ya",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","tidak",1,1,"ya","tidak",49,152,51,25,"normal","baik","tidak","tidak",120,80,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,16,"normal","tidak","tidak",0,144,"tidak",14.7,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(1,29,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,146,53,26,"normal","baik","tidak","tidak",110,70,36,80,18,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",21,31,"normal","tidak","tidak",0,139,"tidak",10.6,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,24,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3400,"ya","tidak","tidak",4,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,156,55,28,"normal","baik","ya","tidak",90,60,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,6,"normal","tidak","tidak",0,144,"tidak",9.4,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(3,22,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2000,"ya","tidak","tidak",5,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",52,151,54,29,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",0,6,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(1,35,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",50,156,56,25,"normal","baik","tidak","tidak",110,80,37,60,24,"tidak","normal","cyanosis","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",2,12,"normal","tidak","tidak",0,144,"tidak",12.7,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(2,34,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",3500,"ya","tidak","tidak",6,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,160,72,28,"normal","baik","tidak","tidak",90,60,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",21,29,"normal","tidak","tidak",0,144,"tidak",13.3,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(1,20,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","tidak","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih",1,1,"ya","tidak",62,144,62,30,"normal","baik","tidak","tidak",120,80,37,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,2,"normal","tidak","tidak",0,144,"tidak",13.57,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,24,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",2900,"ya","tidak","tidak",2,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","ada","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",45,156,56,22,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",30,32,"normal","tidak","tidak",0,140,"tidak",10.8,0,0,"AB","Kehamilan-Resiko-Tinggi",),
	array(3,28,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3600,"ya","tidak","tidak",8,"tidak",28,7,"tidak","tidak","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",54,156,70,33,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",18,23,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3200,"ya","tidak","tidak",1,"tidak",32,7,"kadang-kadang","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih bening",1,1,"ya","tidak",42,150,44,21,"normal","baik","tidak","tidak",110,60,37,73,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,14,"normal","tidak","tidak",0,144,"tidak",9.3,0,0,"B","Kehamilan-Resiko-Tinggi",),
		array(1,22,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",48,153,59,26,"normal","baik","tidak","tidak",90,60,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",28,36,"normal","tidak","tidak",0,144,"tidak",13.26,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(2,35,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2600,"ya","tidak","tidak",7,"tidak",28,5,"kadang-kadang","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",57,156,59,28,"normal","baik","tidak","tidak",150,80,36,80,18,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",2,12,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(1,21,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",30,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","pernah","tidak","tidak",1,1,"tidak","tidak",60,155,73,27,"normal","baik","tidak","tidak",100,70,36,84,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",32,39,"normal","tidak","kepala",0,140,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,33,"tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","L",2800,"ya","tidak","tidak",5,"tidak",28,7,"kadang-kadang","tidak","tidak","aktif","ada","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",60,149,62,29,"normal","baik","tidak","tidak",120,80,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",16,26,"normal","tidak","tidak",0,148,"tidak",11.8,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(3,25,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",3300,"ya","tidak","tidak",2,"tidak",27,7,"tidak","tidak","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",70,155,59,27,"normal","baik","tidak","tidak",90,60,36,84,18,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","ada",24,29,"normal","tidak","tidak",0,128,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(1,19,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",40,144,42,22,"normal","baik","tidak","tidak",100,60,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",5,16,"normal","tidak","tidak",0,144,"tidak",9.25,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,32,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3300,"ya","tidak","tidak",6,"tidak",28,7,"kadang-kadang","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",45,155,54,27,"normal","baik","tidak","tidak",120,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",29,23,"normal","tidak","tidak",0,158,"tidak",12.08,0,0,"AB","Kehamilan-Resiko-Rendah",),
	array(1,15,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,150,50,25,"normal","baik","tidak","tidak",110,80,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",15,14,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(3,36,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","P",4200,"ya","tidak","tidak",6,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",46,157,59,22,"normal","baik","tidak","tidak",120,80,37,80,20,"tidak","normal","normal","normal","leher","normal","normal","tidak","tidak","tidak","normal","tidak",30,34,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,24,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3500,"ya","tidak","tidak",3,"tidak",28,7,"tidak","kadang-kadang","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",45,150,59,27,"normal","baik","tidak","tidak",90,60,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,11,"normal","tidak","tidak",0,144,"tidak",10.1,0,0,"O","Kehamilan-Resiko-Rendah",),
		array(2,28,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3200,"ya","tidak","tidak",9,"tidak",28,7,"tidak","tidak","ada","aktif","tidak","baik","ada","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",46,167,61,27,"normal","baik","tidak","tidak",90,60,37,84,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,12,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3900,"ya","tidak","tidak",6,"tidak",28,7,"tidak","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",48,153,62,28,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",11.13,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(4,34,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3100,"ya","tidak","tidak",2,"tidak",28,3,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",42,148,45,24,"normal","baik","tidak","tidak",110,70,36,82,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,6,"normal","tidak","tidak",0,144,"tidak",10.4,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,31,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3100,"ya","tidak","tidak",6,"tidak",28,7,"tidak","tidak","tidak","jarang","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",52,155,58,26,"normal","baik","tidak","tidak",110,70,37,82,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,15,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(1,22,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",40,148,41,22,"normal","baik","tidak","tidak",90,70,36,81,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",19,20,"normal","tidak","tidak",0,144,"tidak",14.28,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,40,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2700,"ya","tidak","tidak",12,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,156,53,24,"normal","baik","tidak","tidak",120,70,36,80,18,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","oederma","tidak",16,22,"normal","tidak","tidak",0,146,"tidak",12.6,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(4,36,"tidak","ya","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3000,"ya","tidak","tidak",9,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",52,145,60,32,"normal","baik","tidak","tidak",100,60,37,82,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",26,37,"normal","tidak","kepala",0,150,"tidak",11.8,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(2,36,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3500,"ya","tidak","tidak",10,"tidak",28,6,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",70,157,70,30,"normal","baik","tidak","tidak",120,70,36,80,20,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",2,12,"normal","tidak","tidak",0,144,"tidak",13.79,0,0,"B","Kehamilan-Resiko-SangatTinggi",),
	array(1,24,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",38,146,43,22,"normal","baik","tidak","tidak",110,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",19,24,"normal","tidak","tidak",0,131,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,28,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2500,"ya","tidak","tidak",8,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","menurun","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",53,145,51,26,"normal","baik","tidak","tidak",110,70,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,4,"normal","tidak","tidak",0,144,"tidak",12.9,0,0,"A","Kehamilan-Resiko-Tinggi",),
		array(4,33,"tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",3300,"ya","tidak","tidak",1,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",62,153,59,27,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,7,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(3,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2800,"ya","tidak","tidak",3,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,158,70,27,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","ada",0,8,"normal","tidak","tidak",0,144,"tidak",11.2,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(2,23,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2700,"ya","tidak","tidak",2,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,163,60,27,"normal","baik","tidak","tidak",110,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,8,"normal","tidak","tidak",0,144,"tidak",11.34,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(1,21,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,151,53,26,"normal","baik","tidak","tidak",90,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",12,24,"normal","tidak","tidak",0,144,"tidak",13.13,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(3,38,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3600,"ya","tidak","tidak",5,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",70,158,90,35,"normal","baik","tidak","tidak",120,70,37,80,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,8,"normal","tidak","tidak",0,144,"tidak",14.15,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(2,22,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3200,"ya","tidak","tidak",2,"tidak",28,7,"tidak","kadang-kadang","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih susu",1,1,"tidak","tidak",42,160,49,12,"normal","baik","tidak","tidak",100,70,36,80,18,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",17,18,"normal","tidak","tidak",0,153,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,24,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3600,"ya","tidak","tidak",1,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",50,160,52,27,"normal","baik","tidak","tidak",90,70,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,9,"normal","tidak","tidak",0,144,"tidak",8.24,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,25,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",3300,"ya","tidak","tidak",3,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","jarang","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",58,148,59,27,"normal","baik","tidak","tidak",90,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,9,"normal","tidak","tidak",0,144,"tidak",16.2,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(1,19,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,6,"tidak","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,149,60,27,"normal","baik","tidak","tidak",110,70,36,80,18,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",14,22,"normal","tidak","tidak",0,143,"tidak",17.56,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,28,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3100,"ya","tidak","tidak",5,"tidak",28,7,"kadang-kadang","tidak","tidak","aktif","tidak","menurun","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",45,155,59,27,"normal","baik","tidak","tidak",120,80,36,81,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",25,34,"normal","tidak","tidak",0,137,"tidak",14.2,0,0,"O","Kehamilan-Resiko-Tinggi",),
		array(1,21,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","aktif","ada","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",45,150,59,27,"normal","baik","ya","tidak",100,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",9.9,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(2,35,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2650,"ya","tidak","tidak",7,"tidak",28,5,"kadang-kadang","tidak","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",57,156,59,28,"normal","baik","tidak","tidak",150,80,36,80,18,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",2,12,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,17,"tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",40,155,51,22,"normal","baik","tidak","tidak",110,70,36,84,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",1,17,"normal","tidak","tidak",0,144,"tidak",12.6,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(1,18,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",55,149,63,26,"normal","baik","tidak","tidak",100,90,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",24,26,"normal","tidak","tidak",0,144,"tidak",12.4,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(1,25,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",39,141,42,23,"normal","baik","tidak","tidak",120,80,36,81,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",10,14,"normal","tidak","tidak",0,144,"tidak",12.83,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","L",3300,"ya","tidak","tidak",12,"tidak",28,5,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",60,155,59,30,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",33,39,"normal","tidak","sungsang",0,144,"tidak",15.63,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(4,28,"tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","ya","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","L",3500,"ya","tidak","tidak",6,"tidak",28,7,"tidak","tidak","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,153,78,33,"normal","baik","tidak","tidak",120,90,36,80,18,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",0,5,"normal","tidak","tidak",0,144,"tidak",10.16,0,0,"AB","Kehamilan-Resiko-Tinggi",),
	array(2,28,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2500,"ya","tidak","tidak",8,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","menurun","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",53,145,51,26,"normal","baik","tidak","tidak",110,70,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,4,"normal","tidak","tidak",0,144,"tidak",12.9,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(2,40,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2700,"ya","tidak","tidak",12,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,156,53,24,"normal","baik","tidak","tidak",120,70,36,80,18,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","oederma","tidak",16,22,"normal","tidak","tidak",0,146,"tidak",12.6,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(5,30,"tidak","ya","tidak","ya","ya","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","P",3300,"ya","tidak","ya",1,"tidak",30,10,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",60,155,71,29,"normal","baik","tidak","tidak",130,80,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",31,34,"normal","tidak","tidak",0,148,"tidak",10.27,0,0,"B","Kehamilan-Resiko-SangatTinggi",),
		array(3,35,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2800,"ya","tidak","tidak",10,"tidak",28,7,"kadang-kadang","tidak","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",56,152,57,28,"normal","baik","tidak","tidak",130,80,36,81,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,4,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(3,35,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2700,"ya","tidak","tidak",5,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak",1,1,"tidak","tidak",59,144,63,27,"normal","baik","tidak","tidak",100,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",26,25,"normal","tidak","tidak",0,150,"tidak",9.3,0,0,"A","Kehamilan-Resiko-SangatTinggi",),
	array(1,23,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,5,"kadang-kadang","tidak","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","putih kental",1,1,"tidak","tidak",53,157,54,25,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,8,"normal","tidak","tidak",0,144,"tidak",9.29,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(2,20,"tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,161,49,23,"normal","baik","tidak","tidak",180,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,12,"normal","tidak","tidak",0,144,"tidak",11.7,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(4,39,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3000,"ya","tidak","tidak",5,"tidak",28,7,"tidak","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",58,150,56,29,"normal","baik","tidak","tidak",110,70,36,84,20,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,10,"normal","tidak","tidak",0,144,"tidak",11.2,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3500,"ya","tidak","tidak",8,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",48,157,48,25,"normal","baik","tidak","tidak",90,70,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,16,"normal","tidak","tidak",0,153,"tidak",11.9,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(2,37,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3400,"ya","tidak","tidak",2,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,145,43,23,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","ada",14,20,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,27,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3400,"ya","tidak","tidak",4,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",65,155,76,33,"normal","baik","tidak","tidak",120,80,36,81,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",26,34,"normal","tidak","tidak",0,144,"tidak",10.48,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(1,20,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",55,155,55,27,"normal","baik","tidak","tidak",110,70,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,12,"normal","tidak","tidak",0,135,"tidak",12.65,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(5,29,"tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","P",2100,"ya","tidak","tidak",1,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",55,146,59,29,"normal","baik","tidak","tidak",90,70,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","ada","tidak","tidak","normal","tidak",1,15,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
		array(3,32,"tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","L",3900,"tidak","tidak","tidak",4,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",60,154,73,30,"normal","baik","tidak","tidak",150,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",24,24,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3500,"ya","tidak","tidak",3,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,151,53,24,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,5,"normal","tidak","tidak",0,144,"tidak",7.5,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2500,"ya","tidak","tidak",6,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",55,158,57,26,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,10,"normal","tidak","tidak",0,144,"tidak",11.76,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,22,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3200,"ya","tidak","tidak",2,"tidak",28,7,"tidak","kadang-kadang","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih susu",1,1,"tidak","tidak",42,160,49,22,"normal","baik","tidak","tidak",100,70,36,80,18,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",17,18,"normal","tidak","tidak",0,153,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(6,36,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3500,"ya","tidak","tidak",10,"ya",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",84,158,85,33,"normal","baik","tidak","tidak",120,80,36,81,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",3,12,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(3,22,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",1100,"tidak","tidak","ya",2,"ya",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",63,144,76,30,"normal","baik","tidak","tidak",110,70,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",28,28,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,29,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3500,"ya","tidak","tidak",7,"tidak",28,7,"tidak","tidak","ada","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",60,157,59,26,"normal","baik","tidak","tidak",100,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",13.23,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(1,30,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","ada","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih susu",1,1,"ya","tidak",54,147,50,28,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",14.5,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,31,"tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",54,151,54,26,"normal","baik","tidak","tidak",90,60,36,88,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",16,12,"normal","tidak","tidak",0,156,"tidak",14.5,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(1,24,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,151,63,27,"normal","baik","tidak","tidak",110,80,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",15,20,"normal","tidak","tidak",0,136,"tidak",10.8,0,0,"A","Kehamilan-Resiko-Rendah",),
		array(2,39,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2000,"ya","tidak","tidak",6,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,153,65,27,"normal","baik","tidak","tidak",110,70,37,82,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,12,"normal","tidak","tidak",0,144,"tidak",14.02,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(3,38,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3600,"ya","tidak","tidak",5,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",70,158,90,35,"normal","baik","tidak","tidak",120,70,37,80,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,8,"normal","tidak","tidak",0,144,"tidak",14.15,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(3,22,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",1100,"tidak","tidak","ya",3,"ya",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",63,144,76,30,"normal","baik","tidak","tidak",110,70,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",28,28,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(3,22,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2000,"ya","tidak","tidak",5,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",52,151,54,29,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","ada","teraba","tidak","normal","tidak",0,6,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,28,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2300,"ya","tidak","tidak",3,"tidak",40,4,"kadang-kadang","tidak","ada","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",55,149,53,28,"normal","baik","tidak","tidak",150,70,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",24,22,"normal","tidak","tidak",0,144,"tidak",13,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(1,35,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",50,156,56,25,"normal","baik","tidak","tidak",110,80,37,80,24,"tidak","normal","cyanosis","normal","tidak","normal","normal","tidak","teraba","tidak","normal","ada",2,12,"normal","tidak","tidak",0,144,"tidak",12.7,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(2,24,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",2900,"ya","tidak","tidak",1,"tidak",15,7,"tidak","tidak","tidak","aktif","tidak","baik","ada","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",45,156,56,22,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","ada",30,32,"normal","tidak","tidak",0,140,"tidak",10.8,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(1,21,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",30,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","pernah","tidak","tidak",1,1,"tidak","tidak",60,155,73,27,"normal","baik","tidak","tidak",100,70,36,84,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","ada",33,39,"normal","tidak","kepala",0,140,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3900,"ya","tidak","tidak",6,"tidak",28,7,"tidak","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",48,153,62,28,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",11.13,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(3,36,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","P",4200,"ya","tidak","tidak",6,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",46,157,59,22,"normal","baik","tidak","tidak",120,80,37,80,20,"tidak","normal","normal","normal","leher","normal","normal","tidak","teraba","tidak","normal","tidak",30,34,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
		array(2,24,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3500,"ya","tidak","tidak",3,"tidak",28,7,"tidak","kadang-kadang","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",45,150,59,27,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",0,11,"normal","tidak","tidak",0,144,"tidak",10.1,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(1,24,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,5,"tidak","tidak","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","pernah","tidak","tidak",1,1,"ya","tidak",54,155,68,27,"normal","baik","tidak","tidak",100,70,36,80,18,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","ada",32,39,"normal","tidak","kepala",0,145,"tidak",11.56,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(2,35,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",2400,"ya","tidak","tidak",12,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",58,155,60,30,"normal","baik","tidak","tidak",110,70,37,80,25,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",18,20,"normal","tidak","tidak",0,144,"tidak",18.5,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(2,25,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3100,"ya","tidak","tidak",6,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",55,157,57,26,"normal","baik","tidak","tidak",100,70,36,84,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",0,8,"normal","tidak","tidak",0,144,"tidak",13.41,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",2500,"ya","tidak","tidak",6,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",55,158,57,26,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",0,11,"normal","tidak","tidak",0,144,"tidak",11.76,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(4,42,"tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",0,"tidak","tidak","ya",3,"ya",28,7,"kadang-kadang","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",54,153,59,27,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","ada","teraba","tidak","normal","tidak",24,22,"normal","tidak","tidak",0,144,"tidak",9.5,0,0,"A","Kehamilan-Resiko-SangatTinggi",),
	array(1,23,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",74,149,80,31,"normal","baik","tidak","tidak",90,70,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",22,22,"normal","tidak","tidak",0,157,"tidak",11.9,0,0,"AB","Kehamilan-Resiko-Rendah",),
	array(2,34,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",3200,"ya","tidak","tidak",9,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",54,146,48,22,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","ada",22,24,"normal","tidak","tidak",0,144,"tidak",12.42,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(3,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3800,"ya","tidak","tidak",2,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,158,70,27,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","teraba","tidak","normal","ada",2,8,"normal","tidak","tidak",0,144,"tidak",11.2,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(3,33,"tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",4000,"ya","tidak","tidak",8,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",58,140,63,29,"normal","baik","tidak","tidak",110,80,36,84,22,"tidak","normal","normal","karies","tidak","normal","normal","ada","teraba","tidak","normal","ada",27,32,"normal","tidak","tidak",0,131,"tidak",12.8,0,0,"B","Kehamilan-Resiko-SangatTinggi",),
		array(3,36,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3500,"ya","tidak","tidak",6,"tidak",28,7,"kadang-kadang","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",50,153,62,27,"normal","baik","tidak","tidak",90,60,36,81,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",0,10,"normal","tidak","tidak",0,144,"tidak",13.6,0,0,"AB","Kehamilan-Resiko-Tinggi",),
	array(3,27,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","L",3200,"ya","tidak","tidak",2,"tidak",28,7,"kadang-kadang","tidak","tidak","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",44,148,42,23,"normal","baik","ya","tidak",80,50,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,7,"normal","tidak","tidak",0,144,"tidak",11.23,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(2,32,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3300,"ya","tidak","tidak",6,"tidak",28,7,"kadang-kadang","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",45,155,54,27,"normal","baik","tidak","tidak",120,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",29,23,"normal","tidak","tidak",0,158,"tidak",12.08,0,0,"AB","Kehamilan-Resiko-Rendah",),
	array(2,33,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2400,"ya","tidak","tidak",2,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,147,51,24,"normal","baik","tidak","tidak",110,70,37,80,20,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","ada",22,36,"normal","tidak","kepala",0,153,"tidak",12.3,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(1,23,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,5,"terus-menerus","tidak","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","putih kental",1,1,"tidak","tidak",53,157,54,25,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,8,"normal","tidak","tidak",0,144,"tidak",9.29,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(2,27,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak",0,"ya","tidak","tidak",1,"tidak",28,6,"tidak","tidak","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih bening",1,1,"ya","tidak",54,154,52,30,"normal","baik","tidak","tidak",100,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,6,"normal","tidak","tidak",0,144,"tidak",13.9,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(1,28,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",54,148,46,27,"normal","baik","tidak","tidak",100,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",8,12,"normal","tidak","tidak",0,144,"tidak",16,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,27,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2600,"ya","tidak","tidak",2,"tidak",28,7,"tidak","tidak","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",38,152,45,21,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",25,25,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,25,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3100,"ya","tidak","tidak",6,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",55,157,57,26,"normal","baik","tidak","tidak",100,70,36,84,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,8,"normal","tidak","tidak",0,144,"tidak",13.41,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,31,"tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","ya","tidak","P",3400,"ya","tidak","tidak",1,"tidak",28,7,"tidak","terus-menerus","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",55,148,59,28,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","ada","tidak","tidak","normal","tidak",0,8,"normal","tidak","tidak",0,144,"tidak",9.2,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
		array(3,24,"ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3000,"ya","tidak","tidak",5,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",97,155,101,27,"normal","baik","tidak","tidak",130,90,26,81,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",18,20,"normal","tidak","tidak",0,144,"tidak",13.13,0,0,"A","Kehamilan-Resiko-SangatTinggi",),
	array(2,29,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",3400,"ya","tidak","tidak",2,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",54,168,59,27,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","ada",38,31,"normal","tidak","tidak",0,156,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(1,20,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",45,161,51,26,"normal","baik","tidak","tidak",100,70,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",22,22,"normal","tidak","tidak",0,144,"tidak",12.8,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(2,29,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2600,"ya","tidak","tidak",5,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","jarang","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",43,153,46,27,"normal","baik","tidak","tidak",110,70,37,84,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",11.16,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,28,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3100,"ya","tidak","tidak",3,"tidak",28,7,"tidak","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,151,106,42,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",36,33,"normal","tidak","tidak",0,144,"tidak",10.2,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(1,18,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",55,149,63,26,"normal","baik","tidak","tidak",100,90,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",25,27,"normal","tidak","tidak",0,144,"tidak",12.4,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(1,21,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","tidak","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,154,83,33,"normal","baik","tidak","tidak",120,80,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,5,"normal","tidak","tidak",0,144,"tidak",16,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(2,33,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2500,"ya","tidak","tidak",9,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",45,153,46,24,"normal","baik","tidak","tidak",110,60,36,88,22,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",26,29,"normal","tidak","tidak",0,156,"tidak",11.15,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(2,37,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3400,"ya","tidak","tidak",2,"tidak",28,7,"tidak","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,145,43,23,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","ada",14,20,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(3,38,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3600,"ya","tidak","tidak",5,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",70,158,90,35,"normal","baik","tidak","tidak",120,70,37,80,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,8,"normal","tidak","tidak",0,144,"tidak",14.15,0,0,"B","Kehamilan-Resiko-Tinggi",),
		array(2,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2600,"ya","tidak","tidak",6,"tidak",28,7,"tidak","tidak","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",49,155,64,27,"normal","baik","tidak","tidak",90,60,36,81,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",24,24,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,39,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2000,"ya","tidak","tidak",6,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",54,153,65,27,"normal","baik","tidak","tidak",110,70,37,82,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,12,"normal","tidak","tidak",0,144,"tidak",14.02,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(1,21,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","tidak","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,154,63,27,"normal","baik","tidak","tidak",110,80,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",18,20,"normal","tidak","tidak",0,145,"tidak",10.4,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(2,24,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3100,"ya","tidak","tidak",3,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",54,161,54,24,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",22,24,"normal","lintang","tidak",0,144,"tidak",11.5,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(2,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3200,"ya","tidak","tidak",7,"tidak",28,7,"tidak","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",49,156,50,27,"normal","baik","tidak","tidak",100,70,36,84,20,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,7,"normal","tidak","tidak",0,144,"tidak",13.09,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(1,21,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","aktif","ada","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",45,150,59,27,"normal","baik","ya","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",9.9,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(3,32,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",4100,"ya","tidak","tidak",10,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","jarang","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",54,150,65,31,"normal","baik","tidak","tidak",110,70,37,81,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",3,12,"normal","tidak","tidak",0,144,"tidak",13.26,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(1,30,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih susu",1,1,"tidak","tidak",50,148,52,27,"normal","baik","tidak","tidak",90,60,37,82,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,16,"normal","tidak","tidak",0,144,"tidak",12.18,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(3,32,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3100,"ya","tidak","tidak",1,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,153,48,22,"normal","baik","tidak","tidak",130,70,36,88,24,"tidak","normal","normal","normal","tidak","normal","benjolan","tidak","teraba","tidak","normal","tidak",18,20,"normal","tidak","tidak",0,133,"tidak",8.75,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,30,"tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",52,164,68,24,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",30,34,"normal","tidak","tidak",0,147,"tidak",15.6,0,0,"B","Kehamilan-Resiko-Tinggi",),
		array(5,35,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3800,"ya","tidak","tidak",5,"tidak",28,7,"tidak","tidak","tidak","aktif","ada","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",45,154,72,30,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"AB","Kehamilan-Resiko-SangatTinggi",),
	array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3900,"ya","tidak","tidak",6,"tidak",28,7,"tidak","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",48,153,62,28,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",11.13,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(2,24,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3100,"ya","tidak","tidak",2,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",68,155,75,30,"normal","baik","tidak","tidak",110,80,36,84,20,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","ada",1,18,"normal","tidak","tidak",0,144,"tidak",12.4,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(2,32,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","tidak","tidak","P",3200,"ya","tidak","tidak",7,"tidak",28,7,"tidak","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",48,155,48,25,"normal","baik","ya","tidak",120,80,36,80,20,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","ada",0,8,"normal","tidak","tidak",0,144,"tidak",9.6,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,23,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",2700,"ya","tidak","tidak",2,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",80,158,80,33,"normal","baik","tidak","tidak",100,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,7,"normal","tidak","tidak",0,144,"tidak",13.68,1,0,"B","Kehamilan-Resiko-Rendah",),
	array(2,33,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2400,"ya","tidak","tidak",6,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",35,152,34,20,"normal","baik","tidak","tidak",110,70,36,84,20,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",22,24,"normal","tidak","tidak",0,144,"tidak",15.11,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(2,24,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3100,"ya","tidak","tidak",3,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",54,161,54,24,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",22,24,"normal","lintang","tidak",0,144,"tidak",11.5,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(2,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3200,"ya","tidak","tidak",7,"tidak",28,7,"tidak","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",49,156,50,27,"normal","baik","tidak","tidak",100,70,36,84,20,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,7,"normal","tidak","tidak",0,144,"tidak",13.09,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(1,21,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","aktif","ada","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",45,150,59,20,"normal","baik","ya","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",9.9,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(3,32,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",4100,"ya","tidak","tidak",10,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","jarang","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",54,150,65,31,"normal","baik","tidak","tidak",110,70,37,81,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",3,12,"normal","tidak","tidak",0,144,"tidak",13.26,0,0,"O","Kehamilan-Resiko-Tinggi",),
		array(3,32,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3100,"ya","tidak","tidak",1,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,153,48,22,"normal","baik","tidak","tidak",130,70,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",18,20,"normal","tidak","tidak",0,133,"tidak",9.3,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,30,"tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",52,164,68,24,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",30,34,"normal","tidak","tidak",0,147,"tidak",15.6,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(5,35,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3800,"ya","tidak","tidak",5,"tidak",28,7,"tidak","tidak","tidak","aktif","ada","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",45,154,72,30,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"AB","Kehamilan-Resiko-SangatTinggi",),
	array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3900,"ya","tidak","tidak",6,"tidak",28,7,"tidak","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",48,153,62,28,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",11.13,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(3,35,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3000,"ya","tidak","tidak",5,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,147,48,26,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","ada",3,12,"normal","tidak","tidak",0,144,"tidak",10.24,0,0,"B","Kehamilan-Resiko-SangatTinggi",),
	array(3,30,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",3200,"ya","tidak","tidak",3,"tidak",28,7,"tidak","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",45,156,59,27,"normal","baik","tidak","tidak",110,70,37,82,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,18,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,27,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",2100,"ya","tidak","tidak",5,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,160,84,35,"normal","baik","tidak","tidak",100,60,37,80,20,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","ada",0,6,"normal","tidak","tidak",0,144,"tidak",12.05,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(4,28,"tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",2800,"ya","tidak","tidak",1,"tidak",27,8,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,153,59,33,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",0,7,"normal","tidak","tidak",0,144,"tidak",16.27,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(4,39,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3000,"ya","tidak","tidak",5,"tidak",28,7,"tidak","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",58,150,56,29,"normal","baik","tidak","tidak",110,70,36,84,20,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,10,"normal","tidak","tidak",0,144,"tidak",11.2,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,32,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3300,"ya","tidak","tidak",6,"tidak",28,7,"kadang-kadang","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",45,155,54,27,"normal","baik","tidak","tidak",120,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",29,23,"normal","tidak","tidak",0,158,"tidak",12.1,0,0,"AB","Kehamilan-Resiko-Rendah",),
		array(2,33,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2900,"ya","tidak","tidak",4,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,159,64,30,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",6,16,"normal","tidak","tidak",0,155,"tidak",12.6,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2800,"ya","tidak","tidak",3,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,158,70,27,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","ada",2,8,"normal","tidak","tidak",0,144,"tidak",11.2,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(4,42,"tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3300,"tidak","tidak","tidak",3,"ya",28,7,"kadang-kadang","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",54,153,59,27,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",9.5,0,0,"A","Kehamilan-Resiko-SangatTinggi",),
	array(1,21,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","tidak","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,154,63,27,"normal","baik","tidak","tidak",110,80,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",18,20,"normal","tidak","tidak",0,145,"tidak",10.4,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(2,23,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2700,"ya","tidak","tidak",2,"tidak",28,7,"kadang-kadang","tidak","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",55,156,60,29,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,10,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,27,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3000,"ya","tidak","tidak",7,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","jarang","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",53,161,63,26,"normal","baik","tidak","tidak",100,70,37,81,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,13,"normal","tidak","tidak",0,144,"tidak",11.76,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(2,23,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3200,"ya","tidak","tidak",3,"tidak",28,7,"tidak","kadang-kadang","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",50,146,59,27,"normal","baik","tidak","tidak",100,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",33,38,"normal","tidak","kepala",0,140,"tidak",8.6,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(2,17,"tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",40,155,51,22,"normal","baik","tidak","tidak",110,70,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",16,17,"normal","tidak","tidak",0,144,"tidak",12.6,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(2,37,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",3100,"ya","tidak","tidak",7,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",51,156,57,23,"normal","baik","tidak","tidak",100,70,36,80,24,"tidak","normal","normal","karies","tidak","normal","normal","ada","tidak","tidak","normal","tidak",30,39,"normal","bujur","kepala",0,148,"tidak",11.83,0,0,"B","Kehamilan-Resiko-SangatTinggi",),
	array(3,31,"tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","P",2400,"ya","tidak","tidak",2,"tidak",28,7,"tidak","terus-menerus","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",55,148,59,28,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","ada","tidak","tidak","normal","tidak",0,8,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
		array(2,27,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3000,"ya","tidak","tidak",5,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",49,157,52,26,"normal","baik","tidak","tidak",90,60,32,81,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,5,"normal","tidak","tidak",0,144,"tidak",13.52,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,25,"ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3000,"ya","tidak","tidak",3,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",50,162,52,23,"normal","baik","tidak","tidak",100,70,36,70,20,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","ada",0,8,"normal","tidak","tidak",0,144,"tidak",9.43,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(1,16,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",38,149,43,24,"normal","baik","tidak","tidak",100,70,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",2,12,"normal","tidak","tidak",0,144,"tidak",9.13,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(2,28,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2300,"ya","tidak","tidak",3,"tidak",40,7,"kadang-kadang","tidak","ada","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",55,149,53,28,"normal","baik","tidak","tidak",100,70,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",18,20,"normal","tidak","tidak",0,144,"tidak",13,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,27,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3400,"ya","tidak","tidak",7,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",46,152,46,24,"normal","baik","tidak","tidak",100,70,32,81,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,14,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3900,"ya","tidak","tidak",5,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",56,163,68,30,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,13,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,28,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3000,"ya","tidak","tidak",1,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",45,150,58,27,"normal","baik","tidak","tidak",80,60,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",9.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,34,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",3200,"ya","tidak","tidak",9,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",54,146,48,22,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",22,24,"normal","tidak","tidak",0,144,"tidak",12.42,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(2,23,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",2700,"ya","tidak","tidak",2,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",80,158,80,33,"normal","baik","tidak","tidak",100,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,7,"normal","tidak","tidak",0,144,"tidak",13.25,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(1,24,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",38,146,43,22,"normal","baik","tidak","tidak",110,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",19,24,"normal","tidak","tidak",0,131,"tidak",10.8,0,0,"A","Kehamilan-Resiko-Rendah",),
		array(4,35,"tidak","tidak","P","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3,"ya","tidak","tidak",1,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","tidak",1,1,"tidak","tidak",47,161,48,27,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",32,56,"normal","tidak","tidak",0,126,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(3,27,"tidak","ya","tidak","ya","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",3500,"tidak","tidak","ya",2,"ya",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","tidak",1,1,"ya","tidak",49,152,51,25,"normal","baik","tidak","tidak",120,80,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,16,"normal","tidak","tidak",0,144,"tidak",14.3,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,24,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",2900,"ya","tidak","tidak",2,"tidak",15,7,"tidak","tidak","tidak","aktif","tidak","baik","ada","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",45,156,56,22,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",30,30,"normal","tidak","tidak",0,140,"tidak",10.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(1,19,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",40,145,42,22,"normal","baik","tidak","tidak",100,60,36,81,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,16,"normal","tidak","tidak",0,144,"tidak",10.34,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,33,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3700,"ya","tidak","tidak",2,"tidak",28,7,"kadang-kadang","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",85,149,79,38,"normal","baik","tidak","tidak",120,90,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,7,"normal","tidak","tidak",0,144,"tidak",10.5,3,0,"B","Kehamilan-Resiko-Tinggi",),
	array(1,31,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",37,142,36,20,"normal","baik","tidak","tidak",90,60,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,10,"normal","tidak","tidak",0,144,"tidak",11.3,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(1,20,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",55,155,55,27,"normal","baik","tidak","tidak",110,70,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,12,"normal","tidak","tidak",0,135,"tidak",12.65,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,34,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",2800,"tidak","tidak","ya",2,"ya",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",85,165,85,33,"normal","baik","tidak","tidak",120,80,36,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",0,5,"normal","tidak","tidak",0,144,"tidak",8.7,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(3,33,"tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","L",2800,"ya","tidak","tidak",5,"tidak",28,7,"kadang-kadang","tidak","tidak","aktif","ada","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",46,149,42,29,"normal","baik","tidak","tidak",120,80,36,81,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",16,26,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(3,22,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2000,"ya","tidak","tidak",5,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",52,151,54,29,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",0,6,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
		array(5,36,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","L",3100,"ya","tidak","tidak",3,"tidak",38,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",73,161,79,32,"normal","baik","tidak","tidak",110,70,36,83,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",0,6,"normal","tidak","tidak",0,144,"tidak",13.27,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(1,18,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",60,155,59,28,"normal","baik","tidak","tidak",90,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",17,30,"normal","tidak","tidak",0,149,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(1,22,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",30,6,"kadang-kadang","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","pernah","tidak","tidak",1,1,"ya","tidak",56,159,63,27,"normal","baik","tidak","tidak",90,60,36,80,20,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","ada",31,34,"normal","tidak","kepala",0,148,"tidak",11.45,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(1,17,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",63,154,62,27,"normal","baik","tidak","tidak",90,60,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,10,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,27,"tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",2800,"ya","tidak","tidak",6,"tidak",28,4,"kadang-kadang","tidak","ada","jarang","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",59,160,61,25,"normal","baik","tidak","tidak",110,70,36,80,20,"tidak","normal","normal","karies","leher","normal","normal","ada","tidak","tidak","normal","ada",3,18,"normal","tidak","tidak",0,152,"tidak",12.03,0,0,"AB","Kehamilan-Resiko-SangatTinggi",),
	array(2,22,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3200,"ya","tidak","tidak",2,"tidak",28,7,"kadang-kadang","tidak","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",69,157,74,27,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",15,27,"normal","tidak","tidak",0,144,"tidak",9.5,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(2,29,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3400,"ya","tidak","tidak",6,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,150,66,32,"normal","baik","tidak","tidak",90,70,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",28,36,"normal","tidak","kepala",0,150,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,29,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2900,"ya","tidak","tidak",6,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","tidak",1,1,"ya","tidak",54,158,49,24,"normal","baik","tidak","tidak",100,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","teraba","normal","tidak",2,12,"normal","tidak","tidak",0,144,"tidak",11.97,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(1,21,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","tidak",1,1,"ya","tidak",54,152,51,28,"normal","baik","tidak","tidak",120,90,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",0,8,"normal","tidak","tidak",0,144,"tidak",11.46,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(1,21,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",50,143,53,27,"normal","baik","tidak","tidak",100,70,37,80,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","ada",32,37,"normal","tidak","kepala",0,138,"tidak",11.75,0,0,"AB","Kehamilan-Resiko-Tinggi",),
		array(2,25,"tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","jarang","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",50,150,59,27,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",24,22,"normal","tidak","tidak",0,144,"tidak",9.7,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(4,33,"tidak","ya","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",3300,"ya","tidak","tidak",1,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",62,153,59,27,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",0,7,"normal","tidak","tidak",0,144,"tidak",10.1,0,0,"A","Kehamilan-Resiko-SangatTinggi",),
	array(4,36,"tidak","ya","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","L",3000,"ya","tidak","tidak",9,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",52,145,60,32,"normal","baik","tidak","tidak",100,60,37,82,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",26,37,"normal","tidak","kepala",0,150,"tidak",11.2,0,0,"B","Kehamilan-Resiko-SangatTinggi",),
	array(2,25,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2600,"ya","tidak","tidak",2,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",37,150,37,22,"normal","baik","tidak","tidak",90,60,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,6,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(1,24,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,6,"tidak","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",55,145,55,27,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,18,"normal","lintang","tidak",0,144,"tidak",12.9,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(4,34,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3000,"ya","tidak","tidak",4,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",61,146,62,32,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,31,"tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","P",3100,"ya","tidak","tidak",1,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",51,148,59,27,"normal","baik","tidak","tidak",100,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(1,30,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","aktif","ada","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",54,165,59,39,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",10,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,27,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3100,"ya","tidak","tidak",7,"tidak",28,7,"kadang-kadang","tidak","tidak","jarang","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,146,57,27,"normal","baik","tidak","tidak",100,60,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",17,20,"normal","tidak","tidak",0,157,"tidak",16.9,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3400,"ya","tidak","tidak",3,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",54,159,53,27,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","ada",0,10,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
		array(2,31,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3000,"ya","tidak","tidak",8,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih susu",1,1,"ya","tidak",50,150,49,27,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,11,"normal","tidak","tidak",0,144,"tidak",12.3,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(2,28,"ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","ya",0,"ya",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","pernah","ada","tidak",1,1,"ya","tidak",37,144,40,26,"normal","baik","tidak","tidak",90,50,36,81,16,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",0,10,"normal","tidak","tidak",0,144,"tidak",9.23,0,0,"B","Kehamilan-Resiko-SangatTinggi",),
	array(1,24,"ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","ada","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih susu",1,1,"ya","tidak",53,151,53,27,"normal","baik","tidak","tidak",100,60,36,81,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","ada",2,14,"normal","bujur","tidak",0,130,"tidak",12.8,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",2100,"ya","tidak","tidak",3,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",52,154,51,25,"normal","baik","tidak","tidak",90,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",3,16,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,32,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","tidak","tidak","P",3100,"ya","tidak","tidak",7,"tidak",28,7,"tidak","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",48,155,49,25,"normal","baik","ya","tidak",120,80,36,80,20,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","ada",0,8,"normal","tidak","tidak",0,144,"tidak",9.6,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,28,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3200,"ya","tidak","tidak",8,"tidak",28,7,"kadang-kadang","tidak","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","pernah","ada","tidak",1,1,"ya","tidak",39,24,45,30,"normal","baik","tidak","tidak",100,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",14.89,1,2,"O","Kehamilan-Resiko-Rendah",),
	array(2,24,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3100,"ya","tidak","tidak",4,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","jarang","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",54,146,79,24,"normal","baik","tidak","tidak",110,70,37,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",13,18,"normal","tidak","tidak",0,144,"tidak",11.05,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(1,36,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","aktif","ada","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","pernah","tidak","tidak",1,1,"tidak","tidak",68,160,78,27,"normal","baik","tidak","tidak",110,70,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","oederma","tidak",25,28,"normal","tidak","tidak",0,155,"tidak",12.5,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(2,37,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",3200,"ya","tidak","tidak",1,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",74,160,76,33,"normal","baik","tidak","tidak",120,80,36,80,20,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",0,4,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(1,25,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,8,"kadang-kadang","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih bening",1,1,"ya","tidak",44,158,53,24,"normal","baik","tidak","tidak",120,70,37,70,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","ada",25,27,"normal","tidak","tidak",0,144,"tidak",9.4,0,0,"O","Kehamilan-Resiko-Tinggi",),
		array(2,39,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2800,"ya","tidak","tidak",6,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",54,153,65,27,"normal","baik","tidak","tidak",110,70,37,82,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,12,"normal","tidak","tidak",0,144,"tidak",14.02,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(1,20,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",55,155,55,27,"normal","baik","tidak","tidak",110,70,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,12,"normal","tidak","tidak",0,135,"tidak",12.65,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(5,29,"tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","P",1800,"ya","tidak","tidak",1,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",55,146,59,29,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","ada","tidak","tidak","normal","tidak",2,15,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(1,35,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",50,156,56,25,"normal","baik","tidak","tidak",110,80,37,80,24,"tidak","normal","cyanosis","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",2,12,"normal","tidak","tidak",0,144,"tidak",12.7,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(1,25,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",39,141,42,23,"normal","baik","tidak","tidak",120,80,36,81,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,14,"normal","tidak","tidak",0,144,"tidak",12.83,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak",2500,"ya","tidak","tidak",6,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",55,158,57,26,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,11,"normal","tidak","tidak",0,144,"tidak",11.76,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,38,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3600,"ya","tidak","tidak",5,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",70,158,90,35,"normal","baik","tidak","tidak",120,70,37,80,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,8,"normal","tidak","tidak",0,144,"tidak",14.15,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(1,30,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",68,165,72,27,"normal","baik","tidak","tidak",120,80,36,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,8,"normal","tidak","tidak",0,144,"tidak",13.16,0,0,"AB","Kehamilan-Resiko-Rendah",),
	array(1,22,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","tidak","tidak","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",36,144,40,22,"normal","baik","tidak","tidak",90,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",20,28,"normal","tidak","tidak",0,144,"tidak",10.86,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(3,24,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",2800,"ya","tidak","tidak",2,"ya",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",85,165,85,33,"normal","baik","tidak","tidak",120,80,36,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",0,5,"normal","tidak","tidak",0,144,"tidak",8.7,0,0,"A","Kehamilan-Resiko-Tinggi",),
		array(1,23,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",74,149,80,31,"normal","baik","tidak","tidak",90,70,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",22,22,"normal","tidak","tidak",0,144,"tidak",11.9,0,0,"AB","Kehamilan-Resiko-Rendah",),
	array(2,29,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2600,"ya","tidak","tidak",5,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","jarang","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",43,153,46,27,"normal","baik","tidak","tidak",110,70,37,84,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",11.16,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3200,"ya","tidak","tidak",1,"tidak",32,7,"kadang-kadang","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih bening",1,1,"ya","tidak",42,150,44,21,"normal","baik","tidak","tidak",110,60,37,73,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,14,"normal","tidak","tidak",0,144,"tidak",9.3,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(1,24,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",30,7,"kadang-kadang","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih bening",1,1,"tidak","tidak",51,150,54,24,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",25,25,"normal","tidak","tidak",0,144,"tidak",10.2,1,0,"B","Kehamilan-Resiko-Rendah",),
	array(1,30,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","ada","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih susu",1,1,"tidak","tidak",54,147,50,28,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","karies","leher","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",14.5,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,31,"tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","ya",0,"ya",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",54,151,54,26,"normal","baik","tidak","tidak",90,60,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,12,"normal","tidak","tidak",0,156,"tidak",14.5,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,24,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3100,"ya","tidak","tidak",3,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,157,63,27,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",15,20,"normal","tidak","tidak",0,136,"tidak",10.8,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(6,36,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3500,"ya","tidak","tidak",10,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",84,158,85,33,"normal","baik","tidak","tidak",120,80,36,81,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",3,14,"normal","tidak","tidak",0,144,"tidak",9.2,0,0,"B","Kehamilan-Resiko-SangatTinggi",),
	array(2,29,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3500,"ya","tidak","tidak",7,"tidak",28,7,"tidak","tidak","ada","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",60,157,59,26,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",13.23,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,33,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3600,"ya","tidak","tidak",5,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",70,158,90,35,"normal","baik","tidak","tidak",120,70,37,80,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,8,"normal","tidak","tidak",0,144,"tidak",14.15,0,0,"B","Kehamilan-Resiko-Rendah",),
		array(3,33,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3000,"ya","tidak","tidak",10,"tidak",28,7,"tidak","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,158,52,27,"normal","baik","tidak","tidak",120,80,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,12,"normal","tidak","tidak",0,144,"tidak",10.31,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(2,25,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3300,"ya","tidak","tidak",4,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",39,150,42,22,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",3,12,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,22,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2000,"ya","tidak","tidak",5,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",52,151,54,29,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","ada","teraba","tidak","normal","tidak",0,6,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(1,21,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",50,143,53,27,"normal","baik","tidak","tidak",100,70,37,80,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","ada",32,37,"normal","tidak","kepala",0,138,"tidak",11.75,0,0,"AB","Kehamilan-Resiko-Tinggi",),
	array(4,36,"tidak","ya","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","L",3000,"ya","tidak","tidak",9,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",52,145,60,32,"normal","baik","tidak","tidak",100,60,37,82,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",26,37,"normal","tidak","kepala",0,150,"tidak",11.2,0,0,"B","Kehamilan-Resiko-SangatTinggi",),
	array(2,29,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",2900,"ya","tidak","tidak",6,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","tidak",1,1,"ya","tidak",54,158,49,24,"normal","baik","tidak","tidak",100,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","teraba","normal","tidak",2,12,"normal","tidak","tidak",0,144,"tidak",11.97,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,24,"tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",2500,"ya","tidak","tidak",1,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",85,149,82,37,"normal","baik","tidak","tidak",100,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",1,16,"normal","tidak","tidak",0,144,"tidak",10.2,0,0,"A","Kehamilan-Resiko-SangatTinggi",),
	array(1,27,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",44,151,45,24,"normal","baik","tidak","tidak",100,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",13.5,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(5,34,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","P",3500,"ya","tidak","tidak",1,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","pernah","ada","tidak",1,1,"ya","tidak",54,150,54,25,"normal","baik","tidak","tidak",108,71,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","P",2300,"ya","tidak","tidak",5,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",34,145,46,22,"normal","baik","tidak","tidak",120,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",29,32,"normal","tidak","sungsang",0,145,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
		array(3,36,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3200,"ya","tidak","tidak",5,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",40,150,42,27,"normal","baik","tidak","tidak",100,60,36,81,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",3,12,"normal","tidak","tidak",0,144,"tidak",11.45,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(1,19,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","jarang","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",49,165,67,27,"normal","baik","tidak","tidak",110,70,37,82,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",26,37,"normal","tidak","kepala",0,145,"tidak",15.2,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(3,34,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3000,"ya","tidak","tidak",8,"tidak",28,4,"tidak","kadang-kadang","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih susu",1,1,"ya","tidak",56,156,69,27,"normal","baik","tidak","tidak",140,90,36,84,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",31,34,"normal","tidak","tidak",0,144,"tidak",11.91,0,0,"AB","Kehamilan-Resiko-Tinggi",),
	array(2,23,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2500,"ya","tidak","tidak",2,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,163,60,27,"normal","baik","tidak","tidak",110,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,10,"normal","tidak","tidak",0,144,"tidak",11.34,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(4,34,"tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","tidak","tidak","P",3200,"ya","tidak","tidak",7,"tidak",28,7,"tidak","tidak","tidak","aktif","ada","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","pernah","tidak","tidak",1,1,"tidak","tidak",54,154,64,25,"normal","baik","tidak","tidak",120,70,36,80,18,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","oederma","ada",30,30,"normal","bujur","tidak",0,140,"tidak",10.9,0,0,"B","Kehamilan-Resiko-SangatTinggi",),
	array(2,29,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",2400,"ya","tidak","tidak",1,"tidak",28,7,"tidak","terus-menerus","tidak","aktif","tidak","baik","ada","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",38,153,40,20,"normal","baik","tidak","tidak",90,60,36,84,20,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","ada",2,20,"normal","tidak","tidak",0,144,"tidak",9.8,0,0,"A","Kehamilan-Resiko-SangatTinggi",),
	array(3,35,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3100,"ya","tidak","tidak",5,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","jarang","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,157,59,27,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,7,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(3,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3500,"ya","tidak","tidak",2,"tidak",28,7,"tidak","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,163,46,27,"normal","baik","tidak","tidak",100,60,37,81,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",0,6,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,27,"tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3000,"ya","tidak","tidak",3,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,161,54,24,"normal","baik","tidak","tidak",110,70,37,80,20,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",24,24,"normal","tidak","tidak",0,144,"tidak",10.85,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(1,27,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",35,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",55,151,57,28,"normal","baik","tidak","tidak",110,60,36,84,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",0,5,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
		array(3,35,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","L",2500,"ya","tidak","tidak",10,"tidak",28,5,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",54,145,51,25,"normal","baik","tidak","tidak",120,80,36,82,18,"ruam","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",23,29,"normal","bujur","tidak",0,143,"tidak",12.59,0,0,"A","Kehamilan-Resiko-SangatTinggi",),
	array(2,34,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3200,"ya","tidak","tidak",9,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",68,150,93,31,"normal","baik","tidak","tidak",120,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",28,30,"normal","tidak","tidak",0,135,"tidak",16,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(2,32,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3100,"ya","tidak","tidak",6,"tidak",30,7,"kadang-kadang","tidak","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih bening",1,1,"ya","tidak",45,150,54,26,"normal","baik","tidak","tidak",100,70,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",23,30,"normal","tidak","tidak",0,144,"tidak",11.36,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(6,29,"tidak","tidak","tidak","tidak","ya","ya","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",1700,"ya","tidak","tidak",1,"tidak",28,7,"terus-menerus","terus-menerus","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih susu",1,1,"ya","tidak",90,167,87,30,"normal","baik","tidak","tidak",90,60,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","ada","tidak","tidak","normal","tidak",2,12,"normal","tidak","tidak",0,144,"tidak",9.9,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(1,34,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,5,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",63,165,70,30,"normal","baik","tidak","tidak",130,70,37,82,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","ada",32,37,"normal","tidak","kepala",0,140,"tidak",12.13,0,0,"AB","Kehamilan-Resiko-Tinggi",),
	array(4,34,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3400,"ya","tidak","tidak",9,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",59,161,60,26,"normal","baik","ya","tidak",90,70,32,81,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,6,"normal","tidak","tidak",0,144,"tidak",12.6,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(3,24,"tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",30,4,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","putih susu",1,1,"tidak","tidak",54,146,50,27,"normal","baik","tidak","tidak",120,70,36,80,18,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",1,18,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,33,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",2600,"ya","tidak","tidak",4,"tidak",30,6,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",64,158,67,31,"normal","baik","tidak","tidak",120,70,36,81,23,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","ada",0,6,"normal","tidak","tidak",0,144,"tidak",14.33,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2500,"ya","tidak","tidak",1,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,153,69,27,"normal","baik","tidak","tidak",120,75,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,24,"normal","tidak","tidak",0,144,"tidak",10.3,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(3,25,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",3300,"ya","tidak","tidak",8,"tidak",27,7,"tidak","tidak","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",70,155,59,27,"normal","baik","tidak","tidak",90,60,36,84,18,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","ada",24,28,"normal","tidak","tidak",0,128,"tidak",14.7,0,0,"AB","Kehamilan-Resiko-Tinggi",),
		array(1,31,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,5,"tidak","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",54,153,49,23,"normal","baik","tidak","tidak",100,70,36,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",0,5,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,27,"tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",54,147,71,28,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,16,"normal","tidak","tidak",0,144,"tidak",13.15,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(2,35,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3100,"ya","tidak","tidak",13,"tidak",30,5,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",50,151,51,25,"normal","baik","tidak","tidak",100,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",24,32,"normal","tidak","tidak",0,144,"tidak",13.08,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,23,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",2800,"ya","tidak","tidak",5,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",41,150,59,30,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,13,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(1,21,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,5,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",55,160,63,28,"normal","baik","tidak","tidak",100,70,36,80,20,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","ada",30,33,"normal","bujur","tidak",0,140,"tidak",10.66,1,0,"O","Kehamilan-Resiko-Rendah",),
	array(1,23,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",27,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",53,163,59,27,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,14,"normal","tidak","tidak",0,144,"tidak",13.93,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(1,30,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,155,60,27,"normal","baik","tidak","tidak",110,70,36,81,23,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,16,"normal","tidak","tidak",0,144,"tidak",11.8,0,0,"AB","Kehamilan-Resiko-Rendah",),
	array(3,32,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",4100,"ya","tidak","tidak",5,"tidak",28,7,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",85,155,94,35,"normal","baik","tidak","tidak",100,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",33,38,"normal","tidak","lintang",0,137,"tidak",11.41,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,34,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3000,"ya","tidak","tidak",4,"tidak",30,7,"kadang-kadang","kadang-kadang","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih susu",1,1,"ya","tidak",47,150,55,25,"normal","baik","ya","tidak",160,90,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",26,28,"normal","tidak","tidak",0,145,"tidak",11.36,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(1,25,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","tidak","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",55,148,62,23,"normal","baik","tidak","tidak",90,70,36,80,24,"tidak","normal","cyanosis","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,17,"normal","tidak","tidak",0,145,"tidak",12.34,0,0,"O","Kehamilan-Resiko-Rendah",),
		array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3300,"ya","tidak","tidak",5,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","jarang","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",47,152,51,29,"normal","baik","tidak","tidak",110,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,16,"normal","tidak","tidak",0,140,"tidak",11.6,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3000,"ya","tidak","tidak",2,"tidak",28,7,"terus-menerus","kadang-kadang","tidak","aktif","tidak","menurun","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",60,153,67,25,"normal","baik","tidak","tidak",140,90,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",3,33,"normal","tidak","tidak",0,145,"tidak",10.1,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,35,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3400,"ya","tidak","tidak",8,"tidak",28,7,"terus-menerus","terus-menerus","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","putih bening",1,1,"ya","tidak",54,155,59,23,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,17,"normal","tidak","tidak",0,145,"tidak",9.12,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(1,19,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",30,7,"kadang-kadang","tidak","ada","jarang","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",49,160,57,33,"normal","baik","tidak","tidak",110,70,36,80,22,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",24,22,"normal","tidak","tidak",0,145,"tidak",13.21,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(2,34,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3200,"ya","tidak","tidak",3,"tidak",30,7,"kadang-kadang","terus-menerus","ada","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",57,160,63,27,"normal","baik","tidak","tidak",140,90,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",32,37,"normal","tidak","sungsang",0,145,"tidak",11.3,0,0,"A","Kehamilan-Resiko-SangatTinggi",),
	array(2,22,"tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","tidak","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",65,165,76,29,"normal","baik","tidak","tidak",120,80,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",25,27,"normal","bujur","tidak",0,145,"tidak",10.1,0,0,"AB","Kehamilan-Resiko-Tinggi",),
	array(1,21,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",55,164,64,30,"normal","baik","tidak","tidak",110,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",18,20,"normal","tidak","tidak",0,145,"tidak",11.16,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(3,32,"tidak","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3200,"ya","tidak","tidak",4,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","baik","ada","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih kental",1,1,"ya","tidak",57,163,65,24,"normal","baik","tidak","tidak",140,90,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",2,12,"normal","tidak","tidak",0,145,"tidak",9.36,0,0,"A","Kehamilan-Resiko-SangatTinggi",),
	array(3,35,"tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3300,"ya","tidak","tidak",5,"tidak",28,6,"terus-menerus","terus-menerus","ada","tidak","ada","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",70,165,90,26,"normal","baik","tidak","tidak",150,90,37,82,20,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","oederma","tidak",2,11,"normal","tidak","tidak",0,145,"tidak",14.15,0,0,"B","Kehamilan-Resiko-SangatTinggi",),
	array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3000,"ya","tidak","tidak",3,"tidak",28,7,"kadang-kadang","tidak","ada","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",54,160,60,22,"normal","baik","tidak","tidak",120,70,37,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",25,26,"normal","tidak","tidak",0,145,"tidak",11.47,0,0,"O","Kehamilan-Resiko-Rendah",),
		array(3,29,"ya","tidak","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3400,"ya","tidak","tidak",4,"tidak",28,7,"kadang-kadang","tidak","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",68,155,73,33,"normal","baik","tidak","tidak",120,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",0,10,"normal","tidak","tidak",0,145,"tidak",9.93,0,0,"B","Kehamilan-Resiko-SangatTinggi",),
	array(2,33,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3200,"ya","tidak","tidak",11,"tidak",28,4,"kadang-kadang","kadang-kadang","tidak","jarang","ada","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,167,61,30,"normal","baik","tidak","tidak",150,90,37,80,20,"tidak","normal","cyanosis","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,20,"normal","tidak","tidak",0,145,"tidak",11.23,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(2,27,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3100,"ya","tidak","tidak",3,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","ada","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",51,157,55,26,"normal","baik","tidak","tidak",90,60,37,88,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,19,"normal","tidak","tidak",0,140,"tidak",12.1,0,0,"A","Kehamilan-Resiko-SangatTinggi",),
	array(1,24,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"terus-menerus","terus-menerus","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih susu",1,1,"tidak","tidak",48,150,53,28,"normal","baik","ya","tidak",90,60,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,10,"normal","tidak","tidak",0,140,"tidak",9.15,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3000,"ya","tidak","tidak",1,"tidak",28,7,"kadang-kadang","terus-menerus","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih bening",1,1,"ya","tidak",52,158,59,26,"normal","baik","tidak","tidak",120,80,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",23,24,"normal","lintang","tidak",0,157,"tidak",9.2,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(3,35,"tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3500,"ya","tidak","tidak",4,"tidak",28,7,"kadang-kadang","tidak","ada","tidak","tidak","menurun","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",60,150,66,26,"normal","baik","tidak","tidak",120,70,37,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,18,"normal","tidak","tidak",0,145,"tidak",11.2,0,0,"A","Kehamilan-Resiko-SangatTinggi",),
	array(2,25,"tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",30,5,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",48,160,55,26,"normal","baik","tidak","tidak",110,70,36,84,22,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,12,"kelainan","tidak","tidak",0,145,"tidak",12.37,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(3,36,"ya","tidak","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3500,"ya","tidak","tidak",3,"tidak",28,7,"terus-menerus","terus-menerus","ada","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",59,156,64,35,"normal","baik","tidak","tidak",120,80,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","ada",22,24,"normal","tidak","tidak",0,145,"tidak",12.7,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(2,34,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3300,"ya","tidak","tidak",12,"tidak",30,6,"kadang-kadang","tidak","ada","aktif","ada","menurun","ada","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",60,157,68,30,"normal","baik","tidak","tidak",150,90,36,82,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","ada",23,30,"normal","tidak","tidak",0,130,"tidak",11.71,0,0,"A","Kehamilan-Resiko-SangatTinggi",),
	array(1,26,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",30,7,"kadang-kadang","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","pernah","tidak","tidak",1,1,"tidak","tidak",49,150,54,29,"normal","baik","tidak","tidak",90,70,37,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",33,37,"normal","tidak","sungsang",0,140,"tidak",11.67,0,0,"O","Kehamilan-Resiko-Tinggi",),
		array(1,23,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",30,7,"tidak","tidak","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",51,149,60,28,"normal","baik","tidak","tidak",90,60,37,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",22,26,"normal","tidak","tidak",0,140,"tidak",12.42,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(2,24,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3400,"ya","tidak","tidak",5,"tidak",30,7,"kadang-kadang","tidak","tidak","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",52,155,55,25,"normal","baik","tidak","tidak",100,70,36,80,20,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",24,23,"normal","tidak","tidak",0,140,"tidak",11.32,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(5,35,"tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",3200,"ya","tidak","tidak",3,"tidak",30,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","putih susu",1,1,"ya","tidak",55,161,62,22,"normal","baik","ya","tidak",120,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",22,25,"normal","tidak","tidak",0,145,"tidak",12.3,0,0,"B","Kehamilan-Resiko-SangatTinggi",),
	array(3,33,"ya","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3300,"ya","tidak","tidak",4,"tidak",28,7,"terus-menerus","kadang-kadang","tidak","tidak","ada","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",52,158,55,25,"normal","baik","tidak","tidak",150,90,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,12,"normal","tidak","tidak",0,155,"tidak",11.13,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(2,27,"tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,5,"kadang-kadang","kadang-kadang","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",50,155,54,22,"normal","baik","tidak","tidak",120,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,16,"normal","tidak","tidak",0,145,"tidak",8.3,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(1,35,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",48,149,53,22,"normal","baik","tidak","tidak",120,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","ada",30,31,"normal","bujur","tidak",0,145,"tidak",9.9,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,24,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3300,"ya","tidak","tidak",5,"tidak",28,7,"kadang-kadang","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",54,163,55,38,"normal","baik","tidak","tidak",110,60,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,13,"normal","tidak","tidak",0,145,"tidak",12.42,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,30,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3200,"ya","tidak","tidak",5,"tidak",30,10,"kadang-kadang","kadang-kadang","ada","tidak","ada","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",52,155,55,20,"normal","baik","tidak","tidak",150,90,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","oederma","tidak",24,22,"normal","tidak","tidak",0,135,"tidak",11.56,3,0,"B","Kehamilan-Resiko-Tinggi",),
	array(2,22,"tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih kental",1,1,"ya","tidak",60,151,64,27,"normal","baik","tidak","tidak",90,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",22,22,"normal","tidak","tidak",0,140,"tidak",11.41,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(1,20,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","kadang-kadang","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","pernah","tidak","tidak",1,1,"tidak","tidak",52,157,54,33,"normal","baik","tidak","tidak",110,70,37,84,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,9,"normal","tidak","tidak",0,140,"tidak",12.42,0,0,"B","Kehamilan-Resiko-Rendah",),
		array(3,29,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3300,"ya","tidak","tidak",1,"tidak",28,7,"kadang-kadang","tidak","tidak","jarang","ada","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",53,147,57,29,"normal","baik","tidak","tidak",130,80,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",32,37,"normal","tidak","sungsang",0,140,"tidak",12.42,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(1,17,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","putih bening",1,1,"tidak","tidak",50,165,56,29,"normal","baik","tidak","tidak",90,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,12,"normal","tidak","tidak",0,140,"tidak",11.2,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(2,24,"tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",2,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","ada","baik","ada","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",51,156,54,32,"normal","baik","tidak","tidak",110,70,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",29,30,"normal","tidak","tidak",0,140,"tidak",12.7,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(1,18,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","tidak","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",47,155,53,28,"normal","baik","tidak","tidak",110,70,36,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",25,26,"normal","tidak","tidak",0,145,"tidak",14.3,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(4,30,"tidak","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3100,"ya","tidak","tidak",1,"tidak",30,7,"terus-menerus","tidak","tidak","aktif","tidak","menurun","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",50,152,56,27,"normal","baik","tidak","tidak",140,90,32,82,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",20,21,"normal","tidak","tidak",0,139,"tidak",11.13,0,0,"A","Kehamilan-Resiko-SangatTinggi",),
	array(5,36,"tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3200,"ya","tidak","tidak",3,"tidak",30,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih susu",1,1,"ya","tidak",55,157,63,27,"normal","baik","tidak","tidak",120,90,36,80,24,"tidak","normal","normal","karies","tidak","normal","normal","ada","teraba","tidak","normal","tidak",27,29,"normal","tidak","tidak",0,145,"tidak",13.21,0,0,"B","Kehamilan-Resiko-SangatTinggi",),
	array(2,24,"ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3200,"ya","tidak","tidak",3,"tidak",28,7,"terus-menerus","kadang-kadang","ada","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",49,159,54,25,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,14,"normal","tidak","tidak",0,145,"tidak",9.9,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(1,25,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"tidak","tidak","tidak","jarang","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",51,152,56,24,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",27,28,"normal","tidak","tidak",0,145,"tidak",12.3,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(3,35,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3400,"ya","tidak","tidak",9,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",58,157,64,28,"normal","baik","tidak","tidak",140,90,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",18,20,"normal","tidak","tidak",0,145,"tidak",13.41,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(2,25,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3400,"ya","tidak","tidak",3,"tidak",28,7,"terus-menerus","terus-menerus","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih susu",1,1,"ya","tidak",55,155,58,25,"normal","baik","tidak","tidak",110,70,37,88,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",25,28,"normal","bujur","tidak",0,145,"tidak",8.7,0,0,"O","Kehamilan-Resiko-Tinggi",),
		array(3,30,"tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3100,"ya","tidak","tidak",6,"tidak",28,7,"tidak","tidak","ada","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",53,158,57,31,"normal","baik","tidak","tidak",90,70,36,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,11,"normal","tidak","tidak",0,140,"tidak",11.41,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(4,41,"tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3000,"ya","tidak","tidak",6,"tidak",28,6,"kadang-kadang","kadang-kadang","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",50,154,55,26,"normal","baik","ya","tidak",160,90,37,82,20,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","ada",18,20,"normal","tidak","tidak",0,140,"tidak",11.2,0,0,"A","Kehamilan-Resiko-SangatTinggi",),
	array(1,22,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,6,"kadang-kadang","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih kental",1,1,"tidak","tidak",48,150,53,30,"normal","baik","tidak","tidak",110,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",33,37,"normal","tidak","kepala",0,140,"tidak",12.7,0,0,"AB","Kehamilan-Resiko-Rendah",),
	array(3,34,"tidak","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3100,"ya","tidak","tidak",6,"tidak",28,7,"terus-menerus","kadang-kadang","ada","tidak","ada","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",51,151,57,30,"normal","baik","tidak","tidak",150,90,36,80,18,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","oederma","tidak",15,24,"normal","tidak","tidak",0,140,"tidak",12.42,3,0,"B","Kehamilan-Resiko-Tinggi",),
	array(3,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3000,"ya","tidak","tidak",2,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",53,158,59,26,"normal","baik","tidak","tidak",90,70,36,88,24,"tidak","normal","cyanosis","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",0,8,"normal","tidak","tidak",0,140,"tidak",12.42,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,27,"tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",4,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","aktif","tidak","baik","ada","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",59,149,63,27,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",27,28,"kelainan","tidak","tidak",0,140,"tidak",9.29,0,0,"AB","Kehamilan-Resiko-SangatTinggi",),
	array(3,37,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3100,"ya","tidak","tidak",5,"tidak",28,7,"kadang-kadang","tidak","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","pernah","tidak","tidak",1,1,"ya","tidak",54,148,62,31,"normal","baik","tidak","tidak",150,90,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,15,"normal","tidak","tidak",0,148,"tidak",12.3,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(3,28,"ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3300,"ya","tidak","tidak",1,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",47,146,50,32,"normal","baik","tidak","tidak",90,60,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",2,12,"normal","tidak","tidak",0,128,"tidak",8.5,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(2,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3300,"ya","tidak","tidak",5,"tidak",28,5,"kadang-kadang","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",50,153,54,24,"normal","baik","tidak","tidak",110,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",22,23,"normal","tidak","tidak",0,140,"tidak",11.2,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,28,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3400,"ya","tidak","tidak",2,"tidak",28,7,"terus-menerus","kadang-kadang","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",49,154,53,28,"normal","baik","ya","tidak",110,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",25,27,"normal","tidak","tidak",0,158,"tidak",13.41,0,0,"A","Kehamilan-Resiko-Tinggi",),
		array(1,20,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",27,7,"kadang-kadang","tidak","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",53,155,57,22,"normal","baik","tidak","tidak",110,70,36,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,13,"normal","tidak","tidak",0,145,"tidak",12.56,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(3,31,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3400,"ya","tidak","tidak",2,"tidak",30,7,"terus-menerus","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih susu",1,1,"ya","tidak",51,152,55,23,"normal","baik","tidak","tidak",150,80,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,15,"normal","tidak","tidak",0,145,"tidak",9.4,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(1,35,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,4,"kadang-kadang","kadang-kadang","tidak","tidak","ada","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",50,148,54,28,"normal","baik","tidak","tidak",140,90,36,80,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","oederma","tidak",1,19,"normal","tidak","tidak",0,145,"tidak",13.41,0,0,"AB","Kehamilan-Resiko-Tinggi",),
	array(2,29,"tidak","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3300,"ya","tidak","tidak",3,"tidak",28,7,"kadang-kadang","tidak","ada","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",49,150,53,26,"normal","baik","tidak","tidak",90,70,36,82,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",20,23,"kelainan","tidak","tidak",0,145,"tidak",10.13,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(2,25,"tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",3,"tidak",28,7,"kadang-kadang","tidak","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",53,157,58,23,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,12,"normal","tidak","tidak",0,145,"tidak",11.41,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(3,32,"tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",3300,"ya","tidak","tidak",3,"tidak",28,7,"kadang-kadang","terus-menerus","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ada","putih kental",1,1,"tidak","tidak",56,155,60,24,"normal","baik","tidak","tidak",120,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","ada",2,15,"normal","tidak","tidak",0,145,"tidak",12.9,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(3,36,"ya","tidak","tidak","tidak","tidak","tidak","ya","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3400,"ya","tidak","tidak",2,"tidak",28,7,"terus-menerus","kadang-kadang","ada","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",51,155,55,28,"normal","baik","tidak","tidak",140,90,37,80,20,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","ada",24,22,"normal","tidak","tidak",0,135,"tidak",13.13,0,0,"A","Kehamilan-Resiko-SangatTinggi",),
	array(4,36,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3100,"ya","tidak","tidak",6,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",55,150,60,24,"normal","baik","tidak","tidak",110,70,37,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",28,31,"normal","lintang","tidak",0,145,"tidak",11.2,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3300,"ya","tidak","tidak",2,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","putih susu",1,1,"tidak","tidak",48,149,53,30,"normal","baik","tidak","tidak",140,90,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",33,37,"normal","tidak","kepala",0,145,"tidak",12.7,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(1,19,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",47,148,53,25,"normal","baik","tidak","tidak",100,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,16,"normal","tidak","tidak",0,145,"tidak",12.9,0,0,"B","Kehamilan-Resiko-Rendah",),
		array(5,34,"tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3000,"ya","tidak","tidak",4,"tidak",28,5,"kadang-kadang","kadang-kadang","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",61,152,65,24,"normal","baik","tidak","tidak",110,70,37,88,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",1,18,"normal","tidak","tidak",0,145,"tidak",11.2,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(3,31,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3300,"ya","tidak","tidak",1,"tidak",28,7,"terus-menerus","kadang-kadang","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","pernah","tidak","tidak",1,1,"ya","tidak",53,148,59,30,"normal","baik","tidak","tidak",110,70,37,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",22,22,"normal","tidak","tidak",0,153,"tidak",8.4,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(1,30,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,6,"kadang-kadang","tidak","ada","aktif","ada","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",51,165,54,28,"normal","baik","tidak","tidak",110,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",22,24,"normal","bujur","tidak",0,140,"tidak",9.5,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3000,"ya","tidak","tidak",5,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","jarang","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih bening",1,1,"tidak","tidak",49,148,53,30,"normal","baik","tidak","tidak",100,70,37,80,18,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",24,24,"normal","tidak","tidak",0,140,"tidak",16.9,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,25,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3000,"ya","tidak","tidak",4,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",51,157,53,25,"normal","baik","tidak","tidak",90,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,11,"normal","tidak","tidak",0,140,"tidak",11.41,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(2,30,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3300,"ya","tidak","tidak",6,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",51,150,54,33,"normal","baik","tidak","tidak",110,70,37,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",20,22,"normal","tidak","tidak",0,145,"tidak",12.3,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,27,"tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",2,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih susu",1,1,"ya","tidak",49,150,53,20,"normal","baik","tidak","tidak",90,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,12,"normal","tidak","tidak",0,156,"tidak",11.41,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(2,25,"tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","baik","ada","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","tidak",1,1,"ya","tidak",51,153,53,24,"normal","baik","tidak","tidak",110,60,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",18,21,"normal","tidak","tidak",0,136,"tidak",12.9,0,0,"AB","Kehamilan-Resiko-SangatTinggi",),
	array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3000,"ya","tidak","tidak",2,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih kental",1,1,"tidak","tidak",51,154,53,27,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,14,"normal","tidak","tidak",0,145,"tidak",11.76,0,0,"AB","Kehamilan-Resiko-Rendah",),
	array(2,31,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3300,"ya","tidak","tidak",6,"tidak",28,7,"terus-menerus","terus-menerus","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",50,155,51,20,"normal","baik","tidak","tidak",120,80,37,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",21,24,"normal","lintang","tidak",0,145,"tidak",9.6,0,0,"B","Kehamilan-Resiko-Tinggi",),
		array(2,27,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3100,"ya","tidak","tidak",4,"tidak",28,7,"kadang-kadang","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","putih bening",1,1,"tidak","tidak",46,148,50,31,"normal","baik","tidak","tidak",110,70,36,84,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,11,"normal","tidak","tidak",0,145,"tidak",14.89,0,0,"A","Kehamilan-Resiko-Rendah",),
	array(2,23,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3300,"ya","tidak","tidak",2,"tidak",28,5,"kadang-kadang","tidak","ada","jarang","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih kental",1,1,"tidak","tidak",48,146,50,24,"normal","baik","tidak","tidak",90,70,36,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",32,37,"normal","tidak","kepala",0,145,"tidak",11.05,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(1,36,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,5,"kadang-kadang","tidak","tidak","aktif","ada","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",68,162,78,24,"normal","baik","tidak","tidak",150,90,36,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","oederma","ada",26,28,"normal","tidak","tidak",0,145,"tidak",12.5,3,0,"B","Kehamilan-Resiko-Tinggi",),
	array(3,27,"tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3300,"ya","tidak","tidak",2,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","tidak",1,1,"ya","tidak",52,160,56,30,"normal","baik","ya","tidak",120,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","ada",0,8,"normal","tidak","tidak",0,145,"tidak",12.3,0,0,"AB","Kehamilan-Resiko-Tinggi",),
	array(1,16,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"terus-menerus","terus-menerus","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih susu",1,1,"ya","tidak",47,153,50,28,"normal","baik","tidak","tidak",90,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",22,25,"normal","tidak","tidak",0,140,"tidak",12.3,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(3,39,"tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",3300,"ya","tidak","tidak",6,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",59,155,65,26,"normal","baik","tidak","tidak",140,90,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",1,15,"normal","tidak","tidak",0,140,"tidak",14.02,0,0,"B","Kehamilan-Resiko-SangatTinggi",),
	array(1,22,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",32,7,"kadang-kadang","tidak","ada","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak",1,1,"ya","tidak",55,153,57,35,"normal","baik","tidak","tidak",90,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",32,37,"normal","tidak","sungsang",0,140,"tidak",9.6,0,0,"B","Kehamilan-Resiko-SangatTinggi",),
	array(5,32,"tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","L",3100,"ya","tidak","tidak",1,"tidak",28,7,"terus-menerus","kadang-kadang","ada","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",55,150,58,30,"normal","baik","tidak","tidak",100,70,37,88,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",1,17,"normal","tidak","tidak",0,140,"tidak",11.45,0,0,"B","Kehamilan-Resiko-SangatTinggi",),
	array(1,35,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih kental",1,1,"ya","tidak",50,153,54,29,"normal","baik","tidak","tidak",110,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,14,"normal","tidak","tidak",0,156,"tidak",9.8,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(1,26,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",51,147,53,28,"normal","baik","tidak","tidak",110,70,37,82,22,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,17,"normal","tidak","tidak",0,145,"tidak",12.83,0,0,"AB","Kehamilan-Resiko-Rendah",),
		array(2,31,"tidak","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3100,"ya","tidak","tidak",5,"tidak",28,5,"tidak","kadang-kadang","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",53,163,57,25,"normal","baik","tidak","tidak",150,90,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,14,"normal","tidak","tidak",0,145,"tidak",12.5,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(3,39,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3000,"ya","tidak","tidak",4,"tidak",28,6,"terus-menerus","tidak","ada","tidak","ada","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",70,160,81,22,"normal","baik","tidak","tidak",150,90,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","oederma","ada",2,11,"normal","tidak","tidak",0,145,"tidak",12.59,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(1,27,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","menurun","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak",1,1,"tidak","tidak",50,152,52,27,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,17,"normal","tidak","tidak",0,145,"tidak",13.16,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(1,21,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih susu",1,1,"tidak","tidak",40,147,43,27,"normal","baik","tidak","tidak",100,70,37,80,20,"tidak","normal","cyanosis","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",32,37,"normal","tidak","kepala",0,145,"tidak",11.76,0,0,"AB","Kehamilan-Resiko-Rendah",),
	array(3,24,"tidak","ya","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3200,"ya","tidak","tidak",2,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",51,165,54,25,"normal","baik","ya","tidak",110,70,37,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",0,10,"normal","tidak","tidak",0,140,"tidak",13.9,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,26,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3300,"ya","tidak","tidak",4,"tidak",28,7,"kadang-kadang","terus-menerus","tidak","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",49,154,51,26,"normal","baik","tidak","tidak",90,60,37,84,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",1,16,"normal","tidak","tidak",0,140,"tidak",11.97,0,0,"AB","Kehamilan-Resiko-Rendah",),
	array(3,28,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3100,"ya","tidak","tidak",1,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",51,157,54,28,"normal","baik","tidak","tidak",130,80,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,13,"normal","tidak","tidak",0,140,"tidak",8.7,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(2,25,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3000,"ya","tidak","tidak",3,"tidak",28,7,"terus-menerus","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","putih susu",1,1,"ya","tidak",54,159,56,29,"normal","baik","tidak","tidak",120,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",18,21,"normal","lintang","tidak",0,145,"tidak",9.4,0,0,"AB","Kehamilan-Resiko-Tinggi",),
	array(2,24,"tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",2,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","menurun","ada","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",49,151,51,25,"normal","baik","tidak","tidak",120,90,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",18,20,"normal","tidak","tidak",0,145,"tidak",12.5,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(1,25,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,6,"tidak","tidak","tidak","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih bening",1,1,"tidak","tidak",50,153,52,28,"normal","baik","tidak","tidak",90,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",24,25,"normal","tidak","tidak",0,133,"tidak",13.5,0,0,"AB","Kehamilan-Resiko-Rendah",),
		array(5,33,"tidak","tidak","tidak","tidak","ya","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","P",3300,"ya","tidak","tidak",1,"tidak",28,7,"kadang-kadang","kadang-kadang","tidak","jarang","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,153,56,30,"normal","baik","tidak","tidak",120,70,37,80,24,"tidak","normal","normal","karies","tidak","normal","normal","ada","tidak","tidak","normal","tidak",24,27,"normal","tidak","tidak",0,147,"tidak",11.45,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(2,25,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3200,"ya","tidak","tidak",3,"tidak",28,7,"tidak","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih susu",1,1,"tidak","tidak",42,150,48,27,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",23,29,"normal","tidak","tidak",0,145,"tidak",12.59,0,0,"B","Kehamilan-Resiko-Rendah",),
	array(4,36,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3100,"ya","tidak","tidak",4,"tidak",28,7,"terus-menerus","kadang-kadang","ada","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",49,152,52,33,"normal","baik","tidak","tidak",140,90,36,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",22,25,"normal","tidak","tidak",0,145,"tidak",11.45,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(1,18,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","tidak","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih kental",1,1,"tidak","tidak",49,167,57,27,"normal","baik","tidak","tidak",110,70,36,82,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","tidak",33,37,"normal","tidak","kepala",0,145,"tidak",12.6,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,34,"ya","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3200,"ya","tidak","tidak",6,"tidak",28,6,"kadang-kadang","kadang-kadang","ada","jarang","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",54,153,58,26,"normal","baik","tidak","tidak",150,90,36,84,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","teraba","tidak","normal","ada",30,33,"normal","tidak","tidak",0,145,"tidak",11.91,0,0,"O","Kehamilan-Resiko-Tinggi",),
	array(3,22,"tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3100,"ya","tidak","tidak",2,"tidak",28,7,"terus-menerus","kadang-kadang","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih bening",1,1,"ya","tidak",50,162,53,28,"normal","baik","tidak","tidak",100,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,12,"normal","tidak","tidak",0,145,"tidak",9.6,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(4,33,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3100,"ya","tidak","tidak",5,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","aktif","ada","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",54,152,63,27,"normal","baik","tidak","tidak",140,90,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","oederma","ada",23,30,"normal","tidak","tidak",0,145,"tidak",11.36,3,0,"B","Kehamilan-Resiko-SangatTinggi",),
	array(2,29,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3000,"ya","tidak","tidak",1,"tidak",28,7,"kadang-kadang","terus-menerus","tidak","aktif","tidak","baik","ada","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",48,150,51,29,"normal","baik","tidak","tidak",110,70,37,88,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",18,21,"normal","tidak","tidak",0,157,"tidak",12.59,0,0,"A","Kehamilan-Resiko-SangatTinggi",),
	array(4,35,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3100,"ya","tidak","tidak",4,"tidak",28,7,"terus-menerus","kadang-kadang","ada","aktif","ada","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","putih susu",1,1,"ya","tidak",54,160,58,27,"normal","baik","ya","tidak",140,90,37,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",24,24,"normal","tidak","tidak",0,145,"tidak",13.5,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(3,31,"ya","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3000,"ya","tidak","tidak",1,"tidak",28,5,"terus-menerus","terus-menerus","ada","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",52,159,53,22,"normal","baik","tidak","tidak",120,80,32,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,8,"normal","tidak","tidak",0,145,"tidak",12.5,0,0,"A","Kehamilan-Resiko-Tinggi",),
		array(3,26,"tidak","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3100,"ya","tidak","tidak",2,"tidak",28,7,"kadang-kadang","terus-menerus","ada","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"ya","tidak",51,157,54,25,"normal","baik","tidak","tidak",110,70,36,82,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",33,38,"normal","tidak","sungsang",0,131,"tidak",9.5,0,0,"O","Kehamilan-Resiko-SangatTinggi",),
	array(1,27,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,7,"kadang-kadang","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",53,148,55,27,"normal","baik","tidak","tidak",90,60,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",32,37,"normal","tidak","kepala",0,145,"tidak",12.6,0,0,"AB","Kehamilan-Resiko-Rendah",),
	array(3,35,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3100,"ya","tidak","tidak",6,"tidak",28,5,"terus-menerus","kadang-kadang","ada","aktif","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","ya","tidak","ada","putih bening",1,1,"ya","tidak",60,150,67,37,"normal","baik","tidak","tidak",130,80,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",26,28,"normal","lintang","tidak",0,145,"tidak",12.59,0,0,"B","Kehamilan-Resiko-Tinggi",),
	array(2,32,"tidak","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3000,"ya","tidak","tidak",7,"tidak",28,7,"tidak","tidak","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",57,158,60,24,"normal","baik","tidak","tidak",140,80,36,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",29,30,"normal","tidak","tidak",0,157,"tidak",16,0,0,"AB","Kehamilan-Resiko-Tinggi",),
	array(2,27,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3300,"ya","tidak","tidak",5,"tidak",28,5,"kadang-kadang","tidak","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",49,152,54,25,"normal","baik","tidak","tidak",90,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",32,37,"normal","tidak","kepala",0,145,"tidak",11.91,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(3,36,"tidak","tidak","tidak","tidak","ya","ya","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","L",3300,"ya","tidak","tidak",4,"tidak",28,5,"terus-menerus","terus-menerus","ada","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","tidak",1,1,"ya","tidak",89,162,86,29,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","ada","tidak","tidak","normal","tidak",2,14,"normal","tidak","tidak",0,145,"tidak",12.5,0,0,"A","Kehamilan-Resiko-SangatTinggi",),
	array(1,19,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",0,"tidak","tidak","tidak",0,"tidak",28,5,"kadang-kadang","tidak","ada","aktif","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"ya","tidak",51,160,54,26,"normal","baik","tidak","tidak",110,70,37,80,24,"tidak","normal","normal","karies","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",22,28,"normal","tidak","tidak",0,131,"tidak",12.13,0,0,"O","Kehamilan-Resiko-Rendah",),
	array(2,28,"tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",0,"tidak","tidak","tidak",3,"tidak",28,7,"kadang-kadang","tidak","ada","tidak","tidak","baik","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",55,157,59,25,"normal","baik","tidak","tidak",100,70,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",29,30,"kelainan","tidak","tidak",0,145,"tidak",12.5,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(3,34,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3000,"ya","tidak","tidak",3,"tidak",30,6,"terus-menerus","kadang-kadang","ada","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"tidak","tidak",47,148,50,30,"normal","baik","tidak","tidak",150,90,36,80,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","ada",32,37,"normal","tidak","lintang",0,145,"tidak",11.75,0,0,"B","Kehamilan-Resiko-SangatTinggi",),
	array(3,31,"tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3000,"ya","tidak","tidak",4,"tidak",28,5,"tidak","kadang-kadang","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",49,155,52,28,"normal","baik","tidak","tidak",140,90,37,88,20,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","oederma","tidak",2,11,"normal","tidak","tidak",0,158,"tidak",12.5,0,0,"O","Kehamilan-Resiko-Tinggi",),
		array(2,25,"tidak","tidak","tidak","tidak","ya","tidak","ya","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","P",3300,"ya","tidak","tidak",2,"tidak",28,7,"kadang-kadang","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",1,1,"tidak","tidak",45,150,50,32,"normal","baik","tidak","tidak",110,70,36,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",2,16,"normal","lintang","tidak",0,153,"tidak",9.5,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(3,23,"tidak","ya","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3000,"ya","tidak","tidak",2,"tidak",28,7,"kadang-kadang","kadang-kadang","ada","tidak","tidak","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ada","putih bening",1,1,"ya","tidak",51,157,54,33,"normal","baik","ya","tidak",110,70,36,82,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,9,"normal","tidak","tidak",0,140,"tidak",13.59,0,0,"A","Kehamilan-Resiko-Tinggi",),
	array(3,30,"tidak","tidak","tidak","ya","ya","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","L",3100,"ya","tidak","tidak",3,"tidak",28,7,"kadang-kadang","tidak","tidak","tidak","tidak","baik","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","tidak","tidak",1,1,"ya","tidak",75,152,79,20,"normal","baik","tidak","tidak",140,90,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","normal","tidak",0,7,"normal","tidak","tidak",0,140,"tidak",11.6,3,0,"B","Kehamilan-Resiko-Tinggi",),
	array(1,36,"tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak",3100,"ya","tidak","tidak",4,"tidak",28,7,"terus-menerus","terus-menerus","ada","tidak","ada","menurun","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","ya","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","tidak","pernah","ada","tidak",1,1,"tidak","tidak",49,157,51,25,"normal","baik","tidak","tidak",150,90,37,80,24,"tidak","normal","normal","normal","tidak","normal","normal","tidak","tidak","tidak","oederma","tidak",18,21,"normal","bujur","tidak",0,145,"tidak",11.46,0,0,"AB","Kehamilan-Resiko-Tinggi",),
//	array(),

); 
echo"<strong>Algoritma K-Medoids </strong><br>";
// echo"<strong>Nilai Centroid (Random) </strong><br>";
// for ($j=0; $j <401 ; $j++) { 
// 		for ($i=0; $i < 117 ; $i++) { 
// //	echo $nilai[$j] [$i].", ";
// 	} 
// 	echo "<br>"."Sebanyak $j"."<br>";
// }
//Insialisasi
				for ($p=1; $p <=3  ; $p++) { 
					for ($y=1; $y <= 6 ; $y++) { 
							${'modus'.$p.'Hamil'.$y} =0;
					}
					for ($y=15; $y <= 42 ; $y++) { 
						${'modus'.$p.'Ui'.$y} = 0;
					}
					for ($x=2; $x <=20 ; $x++) { 
						${'modus'.$p.'Ya'.$x} = 0;
						${'modus'.$p.'Tidak'.$x} = 0;
					}
					for ($x=21; $x <=21 ; $x++) { 
							${'modus'.$p.'L'.$x} = 0;
							${'modus'.$p.'P'.$x} = 0;
							${'modus'.$p.'TidakLP'.$x} = 0;
					}
					for ($y=0; $y <= 4300 ; $y++) { 
							${'modus'.$p.'W'.$y} = 0;

					}
					for ($x=23; $x <=25 ; $x++) { 
							${'modus'.$p.'YaX'.$x} = 0;
							${'modus'.$p.'TidakX'.$x} = 0;
					}
					for ($y=0; $y <= 13 ; $y++) { 
							${'modus'.$p.'HamilAA'.$y} = 0;
					}
					for ($x=27; $x <=27 ; $x++) { 
							${'modus'.$p.'YaAB'.$x} = 0;
							${'modus'.$p.'TidakAB'.$x} = 0;
					}
					for ($y=15; $y <= 40 ; $y++) { 
							${'modus'.$p.'HamilAC'.$y} = 0;
					}
					for ($y=3; $y <= 10 ; $y++) { 
							${'modus'.$p.'HamilAD'.$y} = 0;
					}			
					for ($x=30; $x <=74 ; $x++) { 
							${'modus'.$p.'YaAE'.$x} = 0;
							${'modus'.$p.'TidakAE'.$x} = 0;
							${'modus'.$p.'KadangAE'.$x} = 0;
							${'modus'.$p.'TerusAE'.$x} = 0;
							${'modus'.$p.'AdaAE'.$x} = 0;
							${'modus'.$p.'MenurunAE'.$x} = 0;
							${'modus'.$p.'BaikAE'.$x} = 0;
							${'modus'.$p.'JarangAE'.$x} = 0;
							${'modus'.$p.'AktifAE'.$x} = 0;
							${'modus'.$p.'PernahAE'.$x} = 0;
							${'modus'.$p.'PutihBAE'.$x} = 0;
							${'modus'.$p.'PutihSAE'.$x} = 0;
							${'modus'.$p.'PutihAE'.$x} = 0;
							${'modus'.$p.'PutihKAE'.$x} = 0;						
					}
					for ($y=1; $y <= 4 ; $y++) { 
							${'modus'.$p.'HamilBX'.$y} = 0;
					}
					for ($y=1; $y <= 1 ; $y++) { 
							${'modus'.$p.'HamilBY'.$y} = 0;
					}
					for ($x=77; $x <=78 ; $x++) {
							${'modus'.$p.'YaBZ'.$x} = 0;
							${'modus'.$p.'TidakBZ'.$x} = 0;
					}

					for ($y=34; $y <= 97 ; $y++) { 
							${'modus'.$p.'CB'.$y}=  0;
					}
					for ($y=24; $y <= 168 ; $y++) { 
							${'modus'.$p.'CC'.$y} = 0;
					}
					for ($y=34; $y <= 168 ; $y++) { 
							${'modus'.$p.'CD'.$y} = 0;
					}
					for ($y=12; $y <= 42 ; $y++) { 
							${'modus'.$p.'CE'.$y} = 0;
					}
					for ($x=83; $x <=86 ; $x++) { 
							${'modus'.$p.'YaCF'.$x} = 0;
							${'modus'.$p.'TidakCF'.$x} = 0;
							${'modus'.$p.'NormalCF'.$x} = 0;
							${'modus'.$p.'BaikCF'.$x} = 0;
					}
					for ($y=80; $y <= 180 ; $y++) { 
							${'modus'.$p.'CJ'.$y} = 0;
					}
					for ($y=50; $y <= 90 ; $y++) { 
							${'modus'.$p.'CK'.$y} = 0;
					}
					for ($y=26; $y <= 37 ; $y++) { 
							${'modus'.$p.'CL'.$y} = 0;
					}
					for ($y=60; $y <= 88 ; $y++) { 
							${'modus'.$p.'CM'.$y} = 0;
					}
					for ($y=16; $y <= 25 ; $y++) { 
							${'modus'.$p.'CN'.$y} = 0;
					}
					for ($x=92; $x <=103 ; $x++) { 
							${'modus'.$p.'YaCO'.$x} = 0;
							${'modus'.$p.'TidakCO'.$x} = 0;
							${'modus'.$p.'NormalCO'.$x} = 0;
							${'modus'.$p.'KariesCO'.$x} = 0;
							${'modus'.$p.'BaikCO'.$x} = 0;
							${'modus'.$p.'CyanosisCO'.$x} = 0;
							${'modus'.$p.'TerabaCO'.$x} = 0;
							${'modus'.$p.'OedermaCO'.$x} = 0;
							${'modus'.$p.'AdaCO'.$x} = 0;
					}
					for ($y=0; $y <= 38 ; $y++) { 
							${'modus'.$p.'DA'.$y} = 0;
					}
					for ($y=2; $y <= 56 ; $y++) { 
							${'modus'.$p.'DB'.$y} = 0;
					}
					for ($x=106; $x <=108 ; $x++) { 
							${'modus'.$p.'YaDC'.$x} = 0;
							${'modus'.$p.'TidakDC'.$x} = 0;
							${'modus'.$p.'NormalDC'.$x} = 0;
							${'modus'.$p.'BujurDC'.$x} = 0;
							${'modus'.$p.'KepalaDC'.$x} = 0;
							${'modus'.$p.'LintangDC'.$x} = 0;
							${'modus'.$p.'SungsangDC'.$x} = 0;
							${'modus'.$p.'KelainanDC'.$x} = 0;
					}
					for ($y=0; $y <= 1 ; $y++) { 
							${'modus'.$p.'DF'.$y} =0;
					}
					for ($y=126; $y <= 158 ; $y++) { 
							${'modus'.$p.'DG'.$y} = 0;
					}
					for ($x=111; $x <=111 ; $x++) { 
							${'modus'.$p.'YaDH'.$x} = 0;
							${'modus'.$p.'TidakDH'.$x} = 0;
					}
					${'max1DI'} = 0;
					$idmax1DI = 0;
					//${'idmax1DI'} = 0;
					for ($y=7; $y <= 15 ; $y++) { 
						for ($z=0; $z <100 ; $z++) { 
							 $cekNilai = $y.".".$z;
							 $floatval = floatval($cekNilai);
							//echo "cekNilai ".$cekNilai."<br>";
								${'modus'.$p.'DI'.$floatval} =0;{
				        		${'max1DI'} = 0;
				       			$idmax1DI = 0;
							}
						}
					}
					for ($y=0; $y <= 1 ; $y++) { 
							${'modus'.$p.'DJ'.$y} = 0;
					}
					for ($y=0; $y <= 1 ; $y++) { 
							${'modus'.$p.'DK'.$y} = 0;
					}
					for ($x=115; $x <=115 ; $x++) { 
							${'modus'.$p.'ADL'.$x} = 0;
							${'modus'.$p.'BDL'.$x} = 0;
							${'modus'.$p.'ODL'.$x} = 0;
							${'modus'.$p.'ABDL'.$x} =0;
					}
					for ($x=116; $x <=116 ; $x++) { 
							${'modus'.$p.'ResikoSTDM'.$x} = 0;
							${'modus'.$p.'ResikoTDM'.$x} = 0;
							${'modus'.$p.'ResikoRDM'.$x} = 0;
					}
					${'cekBanyakCluster'.$p}=0;
					${'nilaiKeJs'.$p} = 0;
					for ($k=0; $k <401 ; $k++) { 

						// ${'barisCluster'.$p} [$k]=array(); 
						${'barisCluster1'.$k} =0;
						${'barisCluster2'.$k} =0;
						//${'barisCluster'.$p} [$k]=0; 
					}
				}

//Mau menampilkan nilai centroid Random


$k=0;
$cekCentroid1 = " ";
$cekCentroid2 = " ";
$cekCentroid3 = " ";

while ( $k < 100 ) {
	$acak = rand(0,401);
	//echo "acak ".$acak;
	if ($nilai[$acak][116]=="Kehamilan-Resiko-Rendah"){
	//echo "Rendah";
		for ($h=0; $h < 117 ; $h++) { 
			$ambilCentroidBaru1 [$h] = $nilai [$acak][$h];
		}
	 	$cekCentroid1 = "ada1";
	}elseif ($nilai[$acak][116]=="Kehamilan-Resiko-Tinggi") {
		//echo "Tinggi";
		for ($h=0; $h < 117 ; $h++) { 
			$ambilCentroidBaru2 [$h] = $nilai [$acak][$h];
		}
		$cekCentroid2 = "ada2";
	}elseif ($nilai[$acak][116]=="Kehamilan-Resiko-SangatTinggi") {
		//echo "Sangat Tinggi";
		for ($h=0; $h < 117 ; $h++) { 
			$ambilCentroidBaru3 [$h] = $nilai [$acak][$h];
		}
		$cekCentroid3 = "ada3";
	}elseif ($cekCentroid1 == "ada1" & $cekCentroid2 == "ada2" & $cekCentroid3 == "ada3") {
		break;
	}
	
	$k++;

}
//Penampilan Centroid 1,2,3
echo "ambilCentroid 1 "."<br>";
for ($k=0; $k < 117  ; $k++) { 
echo "".$ambilCentroidBaru1 [$k].", " ;
}
echo"<hr>";
echo "ambilCentroid 2 "."<br>";
for ($k=0; $k < 117  ; $k++) { 
echo "".$ambilCentroidBaru2 [$k].", " ;
	
}
echo"<hr>";
echo "ambilCentroid 3 "."<br>";
for ($k=0; $k < 117  ; $k++) { 
echo "".$ambilCentroidBaru3 [$k].", " ;
	
}
echo "<br>";
echo "<hr>";
		//Menghitung clustering di kelas Kehamilan-Resiko-Rendah
$SLamaCentroid1 = 0;
		$nilaiCentroid1=0;
		$tempNum=0;
		for ($j=0; $j <401 ; $j++) { 
			$nilaiHasilCentroid1 = 0;
			for ($m=0; $m < 117; $m++) { 
				//Kategorikal (Dengan Simple Mathching)
				//Dilakukan dengan simple matching (nilai kategorik jika sama bernilai 0 dan 1 jika berbeda)
				if(($m >= 2 && $m <= 21) || ($m >= 23 && $m <= 25) || ($m==27) || ($m >= 30 && $m <= 74) || ($m >= 77 && $m <= 78) || ($m >= 83 && $m <= 86) || ($m >= 92 && $m <= 103) || ($m >= 106 && $m <= 108) || ($m == 111) || ($m >= 115 && $m <= 116)){
					if ($nilai[$j][$m] == $ambilCentroidBaru1 [$m]) {
						//echo "True ".$m;
						$nilaiCentroid1 = 1;
						//echo "Nilai centroid1 ".$nilaiCentroid1;
					}else{
						//echo "false ".$m;
						$nilaiCentroid1 = 0;
					}				
					//echo "Kategorikal ".$m."<br>";		
				}
				//Numerik (Dengan Manhattan Distance)
				//Menghitung jarak (absolute) 
				else{
					$tempNum = $ambilCentroidBaru1[$m] - $nilai[$j][$m];
					//echo "Nilai Centroid Sebelum".$m." ".$tempNum;
					$nilaiCentroid1 = abs($tempNum);
					//echo "Nilai Centroid Sesudah Temp ".$nilaiCentroid1. "<br>";
				}
				$nilaiHasilCentroid1 += $nilaiCentroid1;
			}
			//echo "<br>";
			// echo "Nilai centroid1 "."Baris ke ".$j." hasil ".$nilaiHasilCentroid1."<br>";
		//	$SLamaCentroid1 = 0;
			$nilaiTotalCentroid1[$j]=0;
			$nilaiTotalCentroid1[$j]=$nilaiHasilCentroid1;
			$SLamaCentroid1 +=$nilaiHasilCentroid1; 
			//echo "Nilai centroid1 "."Baris ke ".$j." hasil ".$nilaiTotalCentroid1[$j]."<br>";
		}
		//echo "<hr>";
		//Menghitung clustering di kelas Kehamilan-Resiko-Tinggi
		$SLamaCentroid2 =0;
		$nilaiCentroid2=0;
		$tempNum2=0;
		for ($j=0; $j <401 ; $j++) { 
			$nilaiHasilCentroid2 = 0;
			for ($m=0; $m < 117; $m++) { 
				//Kategorikal (Dengan Simple Mathching)
				//Dilakukan dengan simple matching (nilai kategorik jika sama bernilai 0 dan 1 jika berbeda)
				if(($m >= 2 && $m <= 21) || ($m >= 23 && $m <= 25) || ($m==27) || ($m >= 30 && $m <= 74) || ($m >= 77 && $m <= 78) || ($m >= 83 && $m <= 86) || ($m >= 92 && $m <= 103) || ($m >= 106 && $m <= 108) || ($m == 111) || ($m >= 115 && $m <= 116)){
					if ($nilai[$j][$m] == $ambilCentroidBaru2 [$m]) {
						//echo "True ".$m;
						$nilaiCentroid2 = 1;
						//echo "Nilai centroid1 ".$nilaiCentroid1;
					}else{
						//echo "false ".$m;
						$nilaiCentroid2 = 0;
					}					
					//echo "Kategorikal ".$m."<br>";		
				}
				//Numerik (Dengan Manhattan Distance)
				//Menghitung jarak (absolute) 
				else{
					$tempNum2 = $ambilCentroidBaru2[$m] - $nilai[$j][$m];
					//echo "Nilai Centroid Sebelum".$m." ".$tempNum;
					$nilaiCentroid2 = abs($tempNum2);
					//echo "Nilai Centroid Sesudah Temp ".$nilaiCentroid1. "<br>";
				}
				$nilaiHasilCentroid2 += $nilaiCentroid2;
			}
			//echo "<br>";
			// echo "Nilai centroid2 "."Baris ke ".$j." hasil ".$nilaiHasilCentroid2."<br>";
		//	$SLamaCentroid2 =0;
			$nilaiTotalCentroid2[$j]=0;
			$nilaiTotalCentroid2[$j]=$nilaiHasilCentroid2;
			$SLamaCentroid2 +=$nilaiHasilCentroid2; 
		}
		//echo "<hr>";
		//Menghitung clustering di kelas Kehamilan-Resiko-SangatTinggi
		$SLamaCentroid3 = 0;
		$nilaiCentroid3=0;
		$tempNum3=0;
		for ($j=0; $j <401 ; $j++) { 
			$nilaiHasilCentroid3 = 0;
			for ($m=0; $m < 117; $m++) {
				//Kategorikal (Dengan Simple Mathching)
				//Dilakukan dengan simple matching (nilai kategorik jika sama bernilai 0 dan 1 jika berbeda)
				if(($m >= 2 && $m <= 21) || ($m >= 23 && $m <= 25) || ($m==27) || ($m >= 30 && $m <= 74) || ($m >= 77 && $m <= 78) || ($m >= 83 && $m <= 86) || ($m >= 92 && $m <= 103) || ($m >= 106 && $m <= 108) || ($m == 111) || ($m >= 115 && $m <= 116)){
					if ($nilai[$j][$m] == $ambilCentroidBaru3[$m]) {
						//echo "True ".$m;
						$nilaiCentroid3 = 1;
						//echo "Nilai centroid1 ".$nilaiCentroid1;
					}else{
						//echo "false ".$m;
						$nilaiCentroid3 = 0;
					}
							
					//echo "Kategorikal ".$m."<br>";
				
				}
				//Numerik (Dengan Manhattan Distance)
				//Menghitung jarak (absolute) 
				else{
					$tempNum3 = $ambilCentroidBaru3[$m] - $nilai[$j][$m];
					//echo "Nilai Centroid Sebelum".$m." ".$tempNum;
					$nilaiCentroid3 = abs($tempNum3);
					//echo "Nilai Centroid Sesudah Temp ".$nilaiCentroid1. "<br>";
				}
				$nilaiHasilCentroid3 += $nilaiCentroid3;
				// if ($m==116) {
				// 	echo "Nilai centroid1 "."Baris ke ".$j." hasil ".$nilaiHasilCentroid3."<br>";
				// }
			}
			//echo "<br>";
			// echo "Nilai centroid3 "."Baris ke ".$j." hasil ".$nilaiHasilCentroid3."<br>";
			//$SLamaCentroid3 = 0;
			$nilaiTotalCentroid3[$j]=0;
			$nilaiTotalCentroid3[$j]=$nilaiHasilCentroid3;
			$SLamaCentroid3 +=$nilaiHasilCentroid3; 
		}
		$Slama=$SLamaCentroid1+ $SLamaCentroid2+ $SLamaCentroid3;
//echo"<strong>Nilai Simple Matching (Kategorik) </strong><br>";
for ($iterasi=1; $iterasi < 10; $iterasi++) { 
//	echo "Iterasi ke ".$iterasi." Ambil ".$ambilCentroidBaru1 [0]." Ambil ".$ambilCentroidBaru2 [0]." Ambil ".$ambilCentroidBaru3 [0];
			$Sbaru = 0;
			$S = 0;
			$SBaruCentroidBaru1 = 0;
			$SBaruCentroidBaru2 = 0;
			$SBaruCentroidBaru3 = 0;
	// $Slama = 0;
	// $Sbaru = 0;
// ini_set('max_execution_time', 300);
	//	 				$Slama = 0;
	//$Sbaru = 0;
		// echo "SLama ". $Slama;

		 // $Slama = $SLamaCentroid1+ $SLamaCentroid2+ $SLamaCentroid3;
		//echo "<hr>";
		// $cekBanyakCluster1 = 0;
		// $cekBanyakCluster2 = 0;
		// $cekBanyakCluster3 = 0;
		for ($l=0; $l < 401 ; $l++) { 
			//Menentukan nilai terdekat yang di tentukan di kelas Centroid yang mana

			//$CeknilaiTerkecil= array($nilaiHasilCentroid1[$l],$nilaiHasilCentroid2[$l],$nilaiHasilCentroid3[$l]);
			$CeknilaiTerkecil= array($nilaiTotalCentroid1[$l],$nilaiTotalCentroid2[$l],$nilaiTotalCentroid3[$l]);
			$nilaiTerkecil[$l] = min($CeknilaiTerkecil);
			//echo "".$nilaiTerkecil[$l]." Baris Ke ".$l."<br>";
			
			//Menentukan nilai kelas centroid baru
			if($nilaiTerkecil[$l]==$nilaiTotalCentroid1[$l]){
			//	echo "Baris ke ".$l." Ikut Cluster 1 "."<br>";
				$ikutCluster1[$l] = $nilaiTerkecil[$l]; 
				// $barisCluster1[$l] = $l;
				${'barisCluster1'.$l}=$l;
			//	${'barisCluster1'.$l} = $l;

				// echo "Cluster1 "."<br>";
				// for ($i=0; $i <117 ; $i++) { 
				// 	echo "".$nilai[$l] [$i].", ";
				// }
				$cekBanyakCluster1 ++;
				//Penentuan nilai modus setiap kolom di cluster rendah
					for ($y=1; $y <= 6 ; $y++) { 
						if ($nilai[$l] [0] == $y) {
							${'tambah'.$y} = 1;
							${'modus1Hamil'.$y} += ${'tambah'.$y};
						}
					}
					for ($y=15; $y <= 42 ; $y++) { 
						if ($nilai[$l] [1] == $y) {
							${'tambahb'.$y} = 1;
							${'modus1Ui'.$y} += ${'tambahb'.$y};
						}
					}
					for ($x=2; $x <=20 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYa = 1;
							${'modus1Ya'.$x} += $tambahYa;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidak = 1;
							${'modus1Tidak'.$x} += $tambahTidak;
						}
					}
					for ($x=21; $x <=21 ; $x++) { 
						if($nilai[$l] [$x]=="L"){
							$tambahL = 1;
							${'modus1L'.$x} += $tambahL;
						}elseif($nilai[$l] [$x]=="P"){
							$tambahP = 1;
							${'modus1P'.$x} += $tambahP;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakLP = 1;
							${'modus1TidakLP'.$x} += $tambahTidakLP;
						}
					}
					for ($y=0; $y <= 4300 ; $y++) { 
						if ($nilai[$l] [22] == $y) {
							${'tambahb'.$y} = 1;
							${'modus1W'.$y} += ${'tambahb'.$y};
						}
					}
					for ($x=23; $x <=25 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaX = 1;
							${'modus1YaX'.$x} += $tambahYaX;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakX = 1;
							${'modus1TidakX'.$x} += $tambahTidakX;
						}
					}
					for ($y=0; $y <= 13 ; $y++) { 
						if ($nilai[$l] [26] == $y) {
							${'tambahAA'.$y} = 1;
							${'modus1HamilAA'.$y} += ${'tambahAA'.$y};
						}
					}
					for ($x=27; $x <=27 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaAB = 1;
							${'modus1YaAB'.$x} += $tambahYaAB;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakAB = 1;
							${'modus1TidakAB'.$x} += $tambahTidakAB;
						}
					}
					for ($y=15; $y <= 40 ; $y++) { 
						if ($nilai[$l] [28] == $y) {
							${'tambahAC'.$y} = 1;
							${'modus1HamilAC'.$y} += ${'tambahAC'.$y};
						}
					}
					for ($y=3; $y <= 10 ; $y++) { 
						if ($nilai[$l] [29] == $y) {
							${'tambahAD'.$y} = 1;
							${'modus1HamilAD'.$y} += ${'tambahAD'.$y};
						}
					}			
					for ($x=30; $x <=74 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaAE = 1;
							${'modus1YaAE'.$x} += $tambahYaAE;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakAE = 1;
							${'modus1TidakAE'.$x} += $tambahTidakAE;
						}elseif($nilai[$l] [$x]=="kadang-kadang"){
							$tambahKadangAE = 1;
							${'modus1KadangAE'.$x} += $tambahKadangAE;
						}elseif($nilai[$l] [$x]=="terus-menerus"){
							$tambahTerusAE = 1;
							${'modus1TerusAE'.$x} += $tambahTerusAE;
						}elseif($nilai[$l] [$x]=="ada"){
							$tambahAdaAE = 1;
							${'modus1AdaAE'.$x} += $tambahAdaAE;
						}elseif($nilai[$l] [$x]=="menurun"){
							$tambahMenurunAE = 1;
							${'modus1MenurunAE'.$x} += $tambahMenurunAE;
						}elseif($nilai[$l] [$x]=="baik"){
							$tambahBaikAE = 1;
							${'modus1BaikAE'.$x} += $tambahBaikAE;
						}elseif($nilai[$l] [$x]=="jarang"){
							$tambahJarangAE = 1;
							${'modus1JarangAE'.$x} += $tambahJarangAE;
						}elseif($nilai[$l] [$x]=="aktif"){
							$tambahAktifAE = 1;
							${'modus1AktifAE'.$x} += $tambahAktifAE;
						}elseif($nilai[$l] [$x]=="pernah"){
							$tambahPernahAE = 1;
							${'modus1PernahAE'.$x} += $tambahPernahAE;
						}elseif($nilai[$l] [$x]=="putih bening"){
							$tambahPutihBAE = 1;
							${'modus1PutihBAE'.$x} += $tambahPutihBAE;
						}elseif($nilai[$l] [$x]=="putih susu"){
							$tambahPutihSAE = 1;
							${'modus1PutihSAE'.$x} += $tambahPutihSAE;
						}elseif($nilai[$l] [$x]=="putih"){
							$tambahPutihAE = 1;
							${'modus1PutihAE'.$x} += $tambahPutihAE;
						}elseif($nilai[$l] [$x]=="putih kental"){
							$tambahPutihKAE = 1;
							${'modus1PutihKAE'.$x} += $tambahPutihKAE;
						}
					}
					for ($y=1; $y <= 4 ; $y++) { 
						if ($nilai[$l] [75] == $y) {
							${'tambahBX'.$y} = 1;
							${'modus1HamilBX'.$y} += ${'tambahBX'.$y};
						}
					}
					for ($y=1; $y <= 1 ; $y++) { 
						if ($nilai[$l] [76] == $y) {
							${'tambahBY'.$y} = 1;
							${'modus1HamilBY'.$y} += ${'tambahBY'.$y};
						}
					}
					for ($x=77; $x <=78 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaBZ = 1;
							${'modus1YaBZ'.$x} += $tambahYaBZ;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakBZ = 1;
							${'modus1TidakBZ'.$x} += $tambahTidakBZ;
						}
					}

					for ($y=34; $y <= 97 ; $y++) { 
						if ($nilai[$l] [79] == $y) {
							${'tambahCB'.$y} = 1;
							${'modus1CB'.$y} += ${'tambahCB'.$y};
						}
					}
					for ($y=24; $y <= 168 ; $y++) { 
						if ($nilai[$l] [80] == $y) {
							${'tambahCC'.$y} = 1;
							${'modus1CC'.$y} += ${'tambahCC'.$y};
						}
					}
					for ($y=34; $y <= 168 ; $y++) { 
						if ($nilai[$l] [81] == $y) {
							${'tambahCD'.$y} = 1;
							${'modus1CD'.$y} += ${'tambahCD'.$y};
						}
					}
					for ($y=12; $y <= 42 ; $y++) { 
						if ($nilai[$l] [82] == $y) {
							${'tambahCE'.$y} = 1;
							${'modus1CE'.$y} += ${'tambahCE'.$y};
						}
					}
					for ($x=83; $x <=86 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaCF = 1;
							${'modus1YaCF'.$x} += $tambahYaCF;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakCF = 1;
							${'modus1TidakCF'.$x} += $tambahTidakCF;
						}elseif($nilai[$l] [$x]=="normal"){
							$tambahTidakCF = 1;
							${'modus1NormalCF'.$x} += $tambahTidakCF;
						}elseif($nilai[$l] [$x]=="baik"){
							$tambahTidakCF = 1;
							${'modus1BaikCF'.$x} += $tambahTidakCF;
						}
					}
					for ($y=80; $y <= 180 ; $y++) { 
						if ($nilai[$l] [87] == $y) {
							${'tambahCJ'.$y} = 1;
							${'modus1CJ'.$y} += ${'tambahCJ'.$y};
						}
					}
					for ($y=50; $y <= 90 ; $y++) { 
						if ($nilai[$l] [88] == $y) {
							${'tambahCK'.$y} = 1;
							${'modus1CK'.$y} += ${'tambahCK'.$y};
						}
					}
					for ($y=26; $y <= 37 ; $y++) { 
						if ($nilai[$l] [89] == $y) {
							${'tambahCL'.$y} = 1;
							${'modus1CL'.$y} += ${'tambahCL'.$y};
						}
					}
					for ($y=60; $y <= 88 ; $y++) { 
						if ($nilai[$l] [90] == $y) {
							${'tambahCM'.$y} = 1;
							${'modus1CM'.$y} += ${'tambahCM'.$y};
						}
					}
					for ($y=16; $y <= 25 ; $y++) { 
						if ($nilai[$l] [91] == $y) {
							${'tambahCN'.$y} = 1;
							${'modus1CN'.$y} += ${'tambahCN'.$y};
						}
					}
					for ($x=92; $x <=103 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaCO = 1;
							${'modus1YaCO'.$x} += $tambahYaCO;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakCO = 1;
							${'modus1TidakCO'.$x} += $tambahTidakCO;
						}elseif($nilai[$l] [$x]=="normal"){
							$tambahNormalCO = 1;
							${'modus1NormalCO'.$x} += $tambahNormalCO;
						}elseif($nilai[$l] [$x]=="karies"){
							$tambahKariesCO = 1;
							${'modus1KariesCO'.$x} += $tambahKariesCO;
						}elseif($nilai[$l] [$x]=="cyanosis"){
							$tambahCyanosisCO = 1;
							${'modus1CyanosisCO'.$x} += $tambahCyanosisCO;
						}elseif($nilai[$l] [$x]=="teraba"){
							$tambahTerabaCO = 1;
							${'modus1TerabaCO'.$x} += $tambahTerabaCO;
						}elseif($nilai[$l] [$x]=="oederma"){
							$tambahOedermaCO = 1;
							${'modus1OedermaCO'.$x} += $tambahOedermaCO;
						}elseif($nilai[$l] [$x]=="ada"){
							$tambahAdaCO = 1;
							${'modus1AdaCO'.$x} += $tambahAdaCO;
						}
					}
					for ($y=0; $y <= 38 ; $y++) { 
						if ($nilai[$l] [104] == $y) {
							${'tambahDA'.$y} = 1;
							${'modus1DA'.$y} += ${'tambahDA'.$y};
						}
					}
					for ($y=2; $y <= 56 ; $y++) { 
						if ($nilai[$l] [105] == $y) {
							${'tambahDB'.$y} = 1;
							${'modus1DB'.$y} += ${'tambahDB'.$y};
						}
					}
					for ($x=106; $x <=108 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaDC= 1;
							${'modus1YaDC'.$x} += $tambahYaDC;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakDC = 1;
							${'modus1TidakDC'.$x} += $tambahTidakDC;
						}elseif($nilai[$l] [$x]=="normal"){
							$tambahNormalDC = 1;
							${'modus1NormalDC'.$x} += $tambahNormalDC;
						}elseif($nilai[$l] [$x]=="bujur"){
							$tambahBujurDC = 1;
							${'modus1BujurDC'.$x} += $tambahBujurDC;
						}elseif($nilai[$l] [$x]=="kepala"){
							$tambahKepalaDC = 1;
							${'modus1KepalaDC'.$x} += $tambahKepalaDC;
						}elseif($nilai[$l] [$x]=="lintang"){
							$tambahLintangDC = 1;
							${'modus1LintangDC'.$x} += $tambahLintangDC;
						}elseif($nilai[$l] [$x]=="sungsang"){
							$tambahSungsangDC = 1;
							${'modus1SungsangDC'.$x} += $tambahSungsangDC;
						}elseif($nilai[$l] [$x]=="kelainan"){
							$tambahKelainanDC = 1;
							${'modus1KelainanDC'.$x} += $tambahKelainanDC;
						}
					}
					for ($y=0; $y <= 1 ; $y++) { 
						if ($nilai[$l] [109] == $y) {
							${'tambahDF'.$y} = 1;
							${'modus1DF'.$y} += ${'tambahDF'.$y};
						}
					}
					for ($y=126; $y <= 158 ; $y++) { 
						if ($nilai[$l] [110] == $y) {
							${'tambahDG'.$y} = 1;
							${'modus1DG'.$y} += ${'tambahDG'.$y};
						}
					}
					for ($x=111; $x <=111 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaDH = 1;
							${'modus1YaDH'.$x} += $tambahYaDH;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakDH = 1;
							${'modus1TidakDH'.$x} += $tambahTidakDH;
						}
					}
					// for ($y=7; $y <= 15 ; $y++) { 
					// 	for ($z=0; $z <100 ; $z++) { 
					// 		 $cekNilai = $y.".".$z;
					// 		 $floatval = floatval($cekNilai);
					// 		//echo "cekNilai ".$cekNilai."<br>";
					// 		if ($nilai[$l] [112] == $floatval) {
					// 			${'tambahDI'.$floatval} = 1;
					// 			${'modus1DI'.$floatval} += ${'tambahDI'.$floatval};
					// 		}
					// 	}
					// }
					${'max1DI'} = 0;
					$idmax1DI = 0;
					//${'idmax1DI'} = 0;
					for ($y=7; $y <= 15 ; $y++) { 
						for ($z=0; $z <100 ; $z++) { 
							 $cekNilai = $y.".".$z;
							 $floatval = floatval($cekNilai);
							//echo "cekNilai ".$cekNilai."<br>";
							if ($nilai[$l] [112] == $floatval) {
								${'tambahDI'.$floatval} = 1;
								${'modus1DI'.$floatval} += ${'tambahDI'.$floatval};
								if (${'max1DI'} < ${'modus1DI'.$floatval}) {
				        		${'max1DI'} = ${'modus1DI'.$floatval};
				       			$idmax1DI = $floatval;
				       			// echo "hhahahaha".$idmax1DI;
				   			}
							}
						}
					}
					for ($y=0; $y <= 1 ; $y++) { 
						if ($nilai[$l] [113] == $y) {
							${'tambahDJ'.$y} = 1;
							${'modus1DJ'.$y} += ${'tambahDJ'.$y};
						}
					}
					for ($y=0; $y <= 1 ; $y++) { 
						if ($nilai[$l] [114] == $y) {
							${'tambahDK'.$y} = 1;
							${'modus1DK'.$y} += ${'tambahDK'.$y};
						}
					}
					for ($x=115; $x <=115 ; $x++) { 
						if($nilai[$l] [$x]=="A"){
							$tambahADL = 1;
							${'modus1ADL'.$x} += $tambahADL;
						}elseif($nilai[$l] [$x]=="B"){
							$tambahBDL = 1;
							${'modus1BDL'.$x} += $tambahBDL;
						}elseif($nilai[$l] [$x]=="O"){
							$tambahODL = 1;
							${'modus1ODL'.$x} += $tambahODL;
						}elseif($nilai[$l] [$x]=="AB"){
							$tambahABDL = 1;
							${'modus1ABDL'.$x} += $tambahABDL;
						}
					}
					for ($x=116; $x <=116 ; $x++) { 
						if($nilai[$l] [$x]=="Kehamilan-Resiko-SangatTinggi"){
							$tambahResikoSTDM = 1;
							${'modus1ResikoSTDM'.$x} += $tambahResikoSTDM;
						}elseif($nilai[$l] [$x]=="Kehamilan-Resiko-Tinggi"){
							$tambahResikoTDM = 1;
							${'modus1ResikoTDM'.$x} += $tambahResikoTDM;
						}elseif($nilai[$l] [$x]=="Kehamilan-Resiko-Rendah"){
							$tambahResikoRDM = 1;
							${'modus1ResikoRDM'.$x} += $tambahResikoRDM;
						}
					}

			}elseif($nilaiTerkecil[$l]==$nilaiTotalCentroid2[$l]){
				//echo "Baris ke ".$l." Ikut Cluster 2 "."<br>";
				$cekBanyakCluster2 ++;
				// echo "Cluster2 "."<br>";
				// $ikutCluster2[$l] = $nilaiTerkecil[$l];
				// for ($i=0; $i < 117 ; $i++) { 
				// echo $nilai[$l] [$i].", ";
				// } 
				// for ($i=0; $i <117 ; $i++) { 
				// 	$cluster2 [$l][$i] = $nilai[$l] [$i];
				// }
								//$barisCluster2=$l;
				${'barisCluster2'.$l}=$l;
				// $barisCluster2[$l] = $l;
				// echo "Cluster2 "."<br>";
				// for ($i=0; $i <117 ; $i++) { 
				// 	echo "".$nilai[$l] [$i].", ";
				// }
				//Penentuan nilai modus setiap kolom di cluster tinggi
					for ($y=1; $y <= 6 ; $y++) { 
						if ($nilai[$l] [0] == $y) {
							${'tambahT'.$y} = 1;
							${'modus2Hamil'.$y} += ${'tambahT'.$y};
						}
					}
					for ($y=15; $y <= 42 ; $y++) { 
						if ($nilai[$l] [1] == $y) {
							${'tambahbT'.$y} = 1;
							${'modus2Ui'.$y} += ${'tambahbT'.$y};
						}
					}
					for ($x=2; $x <=20 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaT = 1;
							${'modus2Ya'.$x} += $tambahYaT;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakT = 1;
							${'modus2Tidak'.$x} += $tambahTidakT;
						}
					}
					for ($x=21; $x <=21 ; $x++) { 
						if($nilai[$l] [$x]=="L"){
							$tambahLT = 1;
							${'modus2L'.$x} += $tambahLT;
						}elseif($nilai[$l] [$x]=="P"){
							$tambahPT = 1;
							${'modus2P'.$x} += $tambahPT;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakLPT = 1;
							${'modus2TidakLP'.$x} += $tambahTidakLPT;
						}
					}
					for ($y=0; $y <= 4300 ; $y++) { 
						if ($nilai[$l] [22] == $y) {
							${'tambahbT'.$y} = 1;
							${'modus2W'.$y} += ${'tambahbT'.$y};
						}
					}
					for ($x=23; $x <=25 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaXT = 1;
							${'modus2YaX'.$x} += $tambahYaXT;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakXT = 1;
							${'modus2TidakX'.$x} += $tambahTidakXT;
						}
					}
					for ($y=0; $y <= 13 ; $y++) { 
						if ($nilai[$l] [26] == $y) {
							${'tambahAAT'.$y} = 1;
							${'modus2HamilAA'.$y} += ${'tambahAAT'.$y};
						}
					}
					for ($x=27; $x <=27 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaABT = 1;
							${'modus2YaAB'.$x} += $tambahYaABT;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakABT = 1;
							${'modus2TidakAB'.$x} += $tambahTidakABT;
						}
					}
					for ($y=15; $y <= 40 ; $y++) { 
						if ($nilai[$l] [28] == $y) {
							${'tambahACT'.$y} = 1;
							${'modus2HamilAC'.$y} += ${'tambahACT'.$y};
						}
					}
					for ($y=3; $y <= 10 ; $y++) { 
						if ($nilai[$l] [29] == $y) {
							${'tambahADT'.$y} = 1;
							${'modus2HamilAD'.$y} += ${'tambahADT'.$y};
						}
					}			
					for ($x=30; $x <=74 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaAET = 1;
							${'modus2YaAE'.$x} += $tambahYaAET;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakAET = 1;
							${'modus2TidakAE'.$x} += $tambahTidakAET;
						}elseif($nilai[$l] [$x]=="kadang-kadang"){
							$tambahKadangAET = 1;
							${'modus2KadangAE'.$x} += $tambahKadangAET;
						}elseif($nilai[$l] [$x]=="terus-menerus"){
							$tambahTerusAET = 1;
							${'modus2TerusAE'.$x} += $tambahTerusAET;
						}elseif($nilai[$l] [$x]=="ada"){
							$tambahAdaAET = 1;
							${'modus2AdaAE'.$x} += $tambahAdaAET;
						}elseif($nilai[$l] [$x]=="menurun"){
							$tambahMenurunAET = 1;
							${'modus2MenurunAE'.$x} += $tambahMenurunAET;
						}elseif($nilai[$l] [$x]=="baik"){
							$tambahBaikAET = 1;
							${'modus2BaikAE'.$x} += $tambahBaikAET;
						}elseif($nilai[$l] [$x]=="jarang"){
							$tambahJarangAET = 1;
							${'modus2JarangAE'.$x} += $tambahJarangAET;
						}elseif($nilai[$l] [$x]=="aktif"){
							$tambahAktifAET = 1;
							${'modus2AktifAE'.$x} += $tambahAktifAET;
						}elseif($nilai[$l] [$x]=="pernah"){
							$tambahPernahAET = 1;
							${'modus2PernahAE'.$x} += $tambahPernahAET;
						}elseif($nilai[$l] [$x]=="putih bening"){
							$tambahPutihBAET = 1;
							${'modus2PutihBAE'.$x} += $tambahPutihBAET;
						}elseif($nilai[$l] [$x]=="putih susu"){
							$tambahPutihSAET = 1;
							${'modus2PutihSAE'.$x} += $tambahPutihSAET;
						}elseif($nilai[$l] [$x]=="putih"){
							$tambahPutihAET = 1;
							${'modus2PutihAE'.$x} += $tambahPutihAET;
						}elseif($nilai[$l] [$x]=="putih kental"){
							$tambahPutihKAET = 1;
							${'modus2PutihKAE'.$x} += $tambahPutihKAET;
						}
					}
					for ($y=1; $y <= 4 ; $y++) { 
						if ($nilai[$l] [75] == $y) {
							${'tambahBXT'.$y} = 1;
							${'modus2HamilBX'.$y} += ${'tambahBXT'.$y};
						}
					}
					for ($y=1; $y <= 1 ; $y++) { 
						if ($nilai[$l] [76] == $y) {
							${'tambahBYT'.$y} = 1;
							${'modus2HamilBY'.$y} += ${'tambahBYT'.$y};
						}
					}
					for ($x=77; $x <=78 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaBZT = 1;
							${'modus2YaBZ'.$x} += $tambahYaBZT;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakBZT = 1;
							${'modus2TidakBZ'.$x} += $tambahTidakBZT;
						}
					}

					for ($y=34; $y <= 97 ; $y++) {
						if ($nilai[$l] [79] == $y) {
							${'tambahCBT'.$y} = 1;
							${'modus2CB'.$y} += ${'tambahCBT'.$y};
						}
					}
					for ($y=24; $y <= 168 ; $y++) { 
						if ($nilai[$l] [80] == $y) {
							${'tambahCCT'.$y} = 1;
							${'modus2CC'.$y} += ${'tambahCCT'.$y};
						}
					}
					for ($y=34; $y <= 168 ; $y++) { 
						if ($nilai[$l] [81] == $y) {
							${'tambahCDT'.$y} = 1;
							${'modus2CD'.$y} += ${'tambahCDT'.$y};
						}
					}
					for ($y=12; $y <= 42 ; $y++) { 
						if ($nilai[$l] [82] == $y) {
							${'tambahCET'.$y} = 1;
							${'modus2CE'.$y} += ${'tambahCET'.$y};
						}
					}
					for ($x=83; $x <=86 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaCFT = 1;
							${'modus2YaCF'.$x} += $tambahYaCFT;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakCFT = 1;
							${'modus2TidakCF'.$x} += $tambahTidakCFT;
						}elseif($nilai[$l] [$x]=="normal"){
							$tambahTidakCFT = 1;
							${'modus2NormalCF'.$x} += $tambahTidakCFT;
						}elseif($nilai[$l] [$x]=="baik"){
							$tambahTidakCF = 1;
							${'modus2BaikCF'.$x} += $tambahTidakCF;
						}
					}
					for ($y=80; $y <= 180 ; $y++) { 
						if ($nilai[$l] [87] == $y) {
							${'tambahCJT'.$y} = 1;
							${'modus2CJ'.$y} += ${'tambahCJT'.$y};
						}
					}
					for ($y=50; $y <= 90 ; $y++) { 
						if ($nilai[$l] [88] == $y) {
							${'tambahCKT'.$y} = 1;
							${'modus2CK'.$y} += ${'tambahCKT'.$y};
						}
					}
					for ($y=26; $y <= 37 ; $y++) { 
						if ($nilai[$l] [89] == $y) {
							${'tambahCLT'.$y} = 1;
							${'modus2CL'.$y} += ${'tambahCLT'.$y};
						}
					}
					for ($y=60; $y <= 88 ; $y++) { 
						if ($nilai[$l] [90] == $y) {
							${'tambahCMT'.$y} = 1;
							${'modus2CM'.$y} += ${'tambahCMT'.$y};
						}
					}
					for ($y=16; $y <= 25 ; $y++) { 
						if ($nilai[$l] [91] == $y) {
							${'tambahCNT'.$y} = 1;
							${'modus2CN'.$y} += ${'tambahCNT'.$y};
						}
					}
					for ($x=92; $x <=103 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaCOT = 1;
							${'modus2YaCO'.$x} += $tambahYaCOT;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakCOT = 1;
							${'modus2TidakCO'.$x} += $tambahTidakCOT;
						}elseif($nilai[$l] [$x]=="normal"){
							$tambahNormalCOT = 1;
							${'modus2NormalCO'.$x} += $tambahNormalCOT;
						}elseif($nilai[$l] [$x]=="karies"){
							$tambahKariesCOT = 1;
							${'modus2KariesCO'.$x} += $tambahKariesCOT;
						}elseif($nilai[$l] [$x]=="cyanosis"){
							$tambahCyanosisCOT = 1;
							${'modus2CyanosisCO'.$x} += $tambahCyanosisCOT;
						}elseif($nilai[$l] [$x]=="teraba"){
							$tambahTerabaCOT = 1;
							${'modus2TerabaCO'.$x} += $tambahTerabaCOT;
						}elseif($nilai[$l] [$x]=="oederma"){
							$tambahOedermaCOT = 1;
							${'modus2OedermaCO'.$x} += $tambahOedermaCOT;
						}elseif($nilai[$l] [$x]=="ada"){
							$tambahAdaCOT = 1;
							${'modus2AdaCO'.$x} += $tambahAdaCOT;
						}
					}
					for ($y=0; $y <= 38 ; $y++) { 
						if ($nilai[$l] [104] == $y) {
							${'tambahDAT'.$y} = 1;
							${'modus2DA'.$y} += ${'tambahDAT'.$y};
						}
					}
					for ($y=2; $y <= 56 ; $y++) { 
						if ($nilai[$l] [105] == $y) {
							${'tambahDBT'.$y} = 1;
							${'modus2DB'.$y} += ${'tambahDBT'.$y};
						}
					}
					for ($x=106; $x <=108 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaDCT= 1;
							${'modus2YaDC'.$x} += $tambahYaDCT;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakDCT = 1;
							${'modus2TidakDC'.$x} += $tambahTidakDCT;
						}elseif($nilai[$l] [$x]=="normal"){
							$tambahNormalDCT = 1;
							${'modus2NormalDC'.$x} += $tambahNormalDCT;
						}elseif($nilai[$l] [$x]=="bujur"){
							$tambahBujurDCT = 1;
							${'modus2BujurDC'.$x} += $tambahBujurDCT;
						}elseif($nilai[$l] [$x]=="kepala"){
							$tambahKepalaDCT = 1;
							${'modus2KepalaDC'.$x} += $tambahKepalaDCT;
						}elseif($nilai[$l] [$x]=="lintang"){
							$tambahLintangDCT = 1;
							${'modus2LintangDC'.$x} += $tambahLintangDCT;
						}elseif($nilai[$l] [$x]=="sungsang"){
							$tambahSungsangDCT = 1;
							${'modus2SungsangDC'.$x} += $tambahSungsangDCT;
						}elseif($nilai[$l] [$x]=="kelainan"){
							$tambahKelainanDCT = 1;
							${'modus2KelainanDC'.$x} += $tambahKelainanDCT;
						}
					}
					for ($y=0; $y <= 1 ; $y++) { 
						if ($nilai[$l] [109] == $y) {
							${'tambahDFT'.$y} = 1;
							${'modus2DF'.$y} += ${'tambahDFT'.$y};
						}
					}
					for ($y=126; $y <= 158 ; $y++) { 
						if ($nilai[$l] [110] == $y) {
							${'tambahDGT'.$y} = 1;
							${'modus2DG'.$y} += ${'tambahDGT'.$y};
						}
					}
					for ($x=111; $x <=111 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaDHT = 1;
							${'modus2YaDHT'.$x} += $tambahYaDHT;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakDHT = 1;
							${'modus2TidakDH'.$x} += $tambahTidakDHT;
						}
					}
			//		$tempIni = 0;
					// for ($y=7; $y <= 15 ; $y++) { 
					// 	for ($z=0; $z <100 ; $z++) { 
					// 		 $cekNilaiT = $y.".".$z;
					// 		 $floatvalT = floatval($cekNilaiT);
					// 		//echo "cekNilai ".$cekNilai."<br>";
					// 		if ($nilai[$l] [112] == $floatvalT) {
					// 			${'tambahDIT'.$floatvalT} = 1;
					// 			${'modus2DI'.$floatvalT} += ${'tambahDIT'.$floatvalT};
					// 		}
					// 	}
					// }
					${'max2DI'} = 0;
					${'idmax2DI'} = 0;
					for ($y=7; $y <= 15 ; $y++) { 
						for ($z=0; $z <100 ; $z++) { 
							 $cekNilaiT = $y.".".$z;
							 $floatvalT = floatval($cekNilaiT);
							//echo "cekNilai ".$cekNilai."<br>";
							if ($nilai[$l] [112] == $floatvalT) {
								${'tambahDIT'.$floatvalT} = 1;
								${'modus2DI'.$floatvalT} += ${'tambahDIT'.$floatvalT};
								if (${'max2DI'} < ${'modus2DI'.$floatvalT}) {
				        		${'max2DI'} = ${'modus2DI'.$floatvalT};
				       			${'idmax2DI'} =$floatvalT;
				   				}
							}
						}
					}
					for ($y=0; $y <= 1 ; $y++) { 
						if ($nilai[$l] [113] == $y) {
							${'tambahDJT'.$y} = 1;
							${'modus2DJ'.$y} += ${'tambahDJT'.$y};
						}
					}
					for ($y=0; $y <= 1 ; $y++) { 
						if ($nilai[$l] [114] == $y) {
							${'tambahDKT'.$y} = 1;
							${'modus2DK'.$y} += ${'tambahDKT'.$y};
						}
					}
					for ($x=115; $x <=115 ; $x++) { 
						if($nilai[$l] [$x]=="A"){
							$tambahADLT = 1;
							${'modus2ADL'.$x} += $tambahADLT;
						}elseif($nilai[$l] [$x]=="B"){
							$tambahBDLT = 1;
							${'modus2BDL'.$x} += $tambahBDLT;
						}elseif($nilai[$l] [$x]=="O"){
							$tambahODLT = 1;
							${'modus2ODL'.$x} += $tambahODLT;
						}elseif($nilai[$l] [$x]=="AB"){
							$tambahABDLT = 1;
							${'modus2ABDL'.$x} += $tambahABDLT;
						}
					}
					for ($x=116; $x <=116 ; $x++) { 
						if($nilai[$l] [$x]=="Kehamilan-Resiko-SangatTinggi"){
							$tambahResikoSTDMT = 1;
							${'modus2ResikoSTDM'.$x} += $tambahResikoSTDMT;
						}elseif($nilai[$l] [$x]=="Kehamilan-Resiko-Tinggi"){
							$tambahResikoTDMT = 1;
							${'modus2ResikoTDM'.$x} += $tambahResikoTDMT;
						}elseif($nilai[$l] [$x]=="Kehamilan-Resiko-Rendah"){
							$tambahResikoRDMT = 1;
							${'modus2ResikoRDM'.$x} += $tambahResikoRDMT;
						}
					}
			}else{
				//echo "Baris ke ".$l." Ikut Cluster 3 "."<br>";
				$cekBanyakCluster3 ++;
				// echo "Cluster3 "."<br>";
				//$barisCluster3=$l;
				${'barisCluster3'.$l}=$l;
				 //$barisCluster3[$l] = $l;
				//$ikutCluster3[$l] = $nilaiTerkecil[$l]; 
				// for ($i=0; $i <117 ; $i++) { 
				// 	$cluster3 [$l][$i] = $nilai[$l] [$i];
				// }
				// for ($i=0; $i < 117 ; $i++) { 
				// 	$cluster3 [$cekBanyakCluster3] []
				// }
				
				// for ($i=0; $i <117 ; $i++) { 
				// 	echo "".$nilai[$l] [$i].", ";
				// }
				// for ($i=0; $i < 117 ; $i++) { 
				// echo $nilai[$l] [$i].", ";
				// } 

				 $barisCluster3 = $l;
				//Penentuan nilai modus setiap kolom di cluster sangat tinggi
					for ($y=1; $y <= 6 ; $y++) { 
						if ($nilai[$l] [0] == $y) {
							${'tambahST'.$y} = 1;
							${'modus3Hamil'.$y} += ${'tambahST'.$y};
						}
					}
					for ($y=15; $y <= 42 ; $y++) { 
						if ($nilai[$l] [1] == $y) {
							${'tambahbST'.$y} = 1;
							${'modus3Ui'.$y} += ${'tambahbST'.$y};
						}
					}
					for ($x=2; $x <=20 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaST = 1;
							${'modus3Ya'.$x} += $tambahYaST;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakST = 1;
							${'modus3Tidak'.$x} += $tambahTidakST;
						}
					}
					for ($x=21; $x <=21 ; $x++) { 
						if($nilai[$l] [$x]=="L"){
							$tambahLST = 1;
							${'modus3L'.$x} += $tambahLST;
						}elseif($nilai[$l] [$x]=="P"){
							$tambahPST = 1;
							${'modus3P'.$x} += $tambahPST;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakLPST = 1;
							${'modus3TidakLP'.$x} += $tambahTidakLPST;
						}
					}
					for ($y=0; $y <= 4300 ; $y++) { 
						if ($nilai[$l] [22] == $y) {
							${'tambahbST'.$y} = 1;
							${'modus3W'.$y} += ${'tambahbST'.$y};
						}
					}
					for ($x=23; $x <=25 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaXST = 1;
							${'modus3YaX'.$x} += $tambahYaXST;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakXST = 1;
							${'modus3TidakX'.$x} += $tambahTidakXST;
						}
					}
					for ($y=0; $y <= 13 ; $y++) { 
						if ($nilai[$l] [26] == $y) {
							${'tambahAAST'.$y} = 1;
							${'modus3HamilAA'.$y} += ${'tambahAAST'.$y};
						}
					}
					for ($x=27; $x <=27 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaABST = 1;
							${'modus3YaAB'.$x} += $tambahYaABST;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakABST = 1;
							${'modus3TidakAB'.$x} += $tambahTidakABST;
						}
					}
					for ($y=15; $y <= 40 ; $y++) { 
						if ($nilai[$l] [28] == $y) {
							${'tambahACST'.$y} = 1;
							${'modus3HamilAC'.$y} += ${'tambahACST'.$y};
						}
					}
					for ($y=3; $y <= 10 ; $y++) { 
						if ($nilai[$l] [29] == $y) {
							${'tambahADST'.$y} = 1;
							${'modus3HamilAD'.$y} += ${'tambahADST'.$y};
						}
					}			
					for ($x=30; $x <=74 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaAEST = 1;
							${'modus3YaAE'.$x} += $tambahYaAEST;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakAEST = 1;
							${'modus3TidakAE'.$x} += $tambahTidakAEST;
						}elseif($nilai[$l] [$x]=="kadang-kadang"){
							$tambahKadangAEST = 1;
							${'modus3KadangAE'.$x} += $tambahKadangAEST;
						}elseif($nilai[$l] [$x]=="terus-menerus"){
							$tambahTerusAEST = 1;
							${'modus3TerusAE'.$x} += $tambahTerusAEST;
						}elseif($nilai[$l] [$x]=="ada"){
							$tambahAdaAEST = 1;
							${'modus3AdaAE'.$x} += $tambahAdaAEST;
						}elseif($nilai[$l] [$x]=="menurun"){
							$tambahMenurunAEST = 1;
							${'modus3MenurunAE'.$x} += $tambahMenurunAEST;
						}elseif($nilai[$l] [$x]=="baik"){
							$tambahBaikAEST = 1;
							${'modus3BaikAE'.$x} += $tambahBaikAEST;
						}elseif($nilai[$l] [$x]=="jarang"){
							$tambahJarangAEST = 1;
							${'modus3JarangAE'.$x} += $tambahJarangAEST;
						}elseif($nilai[$l] [$x]=="aktif"){
							$tambahAktifAEST = 1;
							${'modus3AktifAE'.$x} += $tambahAktifAEST;
						}elseif($nilai[$l] [$x]=="pernah"){
							$tambahPernahAE = 1;
							${'modus1PernahAE'.$x} += $tambahPernahAE;
						}elseif($nilai[$l] [$x]=="putih bening"){
							$tambahPutihBAEST = 1;
							${'modus3PutihBAE'.$x} += $tambahPutihBAEST;
						}elseif($nilai[$l] [$x]=="putih susu"){
							$tambahPutihSAEST = 1;
							${'modus3PutihSAE'.$x} += $tambahPutihSAEST;
						}elseif($nilai[$l] [$x]=="putih"){
							$tambahPutihAEST = 1;
							${'modus3PutihAE'.$x} += $tambahPutihAEST;
						}elseif($nilai[$l] [$x]=="putih kental"){
							$tambahPutihKAEST = 1;
							${'modus3PutihKAE'.$x} += $tambahPutihKAEST;
						}
					}
					for ($y=1; $y <= 4 ; $y++) { 
						if ($nilai[$l] [75] == $y) {
							${'tambahBXST'.$y} = 1;
							${'modus3HamilBX'.$y} += ${'tambahBXST'.$y};
						}
					}
					for ($y=1; $y <= 1 ; $y++) { 
						if ($nilai[$l] [76] == $y) {
							${'tambahBYST'.$y} = 1;
							${'modus3HamilBY'.$y} += ${'tambahBYST'.$y};
						}
					}
					$tambahYaBZST = 0;
					for ($x=77; $x <=78 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaBZST = 1;
							${'modus3YaBZ'.$x} += $tambahYaBZST;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakBZST = 1;
							${'modus3TidakBZ'.$x} += $tambahTidakBZST;
						}
					}

					for ($y=34; $y <= 97 ; $y++) { 
						if ($nilai[$l] [79] == $y) {
							${'tambahCBST'.$y} = 1;
							${'modus3CB'.$y} += ${'tambahCBST'.$y};
						}
					}
					for ($y=24; $y <= 168 ; $y++) { 
						if ($nilai[$l] [80] == $y) {
							${'tambahCCST'.$y} = 1;
							${'modus3CC'.$y} += ${'tambahCCST'.$y};
						}
					}
					for ($y=34; $y <= 168 ; $y++) { 
						if ($nilai[$l] [81] == $y) {
							${'tambahCDST'.$y} = 1;
							${'modus3CD'.$y} += ${'tambahCDST'.$y};
						}
					}
					for ($y=12; $y <= 42 ; $y++) { 
						if ($nilai[$l] [82] == $y) {
							${'tambahCEST'.$y} = 1;
							${'modus3CE'.$y} += ${'tambahCEST'.$y};
						}
					}
					for ($x=83; $x <=86 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaCFST = 1;
							${'modus3YaCF'.$x} += $tambahYaCFST;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakCFST = 1;
							${'modus3TidakCF'.$x} += $tambahTidakCFST;
						}elseif($nilai[$l] [$x]=="normal"){
							$tambahTidakCFST = 1;
							${'modus3NormalCF'.$x} += $tambahTidakCFST;
						}elseif($nilai[$l] [$x]=="baik"){
							$tambahTidakCFST = 1;
							${'modus3BaikCF'.$x} += $tambahTidakCFST;
						}
					}
					for ($y=80; $y <= 180 ; $y++) { 
						if ($nilai[$l] [87] == $y) {
							${'tambahCJST'.$y} = 1;
							${'modus3CJ'.$y} += ${'tambahCJST'.$y};
						}
					}
					for ($y=50; $y <= 90 ; $y++) { 
						if ($nilai[$l] [88] == $y) {
							${'tambahCKST'.$y} = 1;
							${'modus3CK'.$y} += ${'tambahCKST'.$y};
						}
					}
					for ($y=26; $y <= 37 ; $y++) { 
						if ($nilai[$l] [89] == $y) {
							${'tambahCLST'.$y} = 1;
							${'modus3CL'.$y} += ${'tambahCLST'.$y};
						}
					}
					for ($y=60; $y <= 88 ; $y++) { 
						if ($nilai[$l] [90] == $y) {
							${'tambahCMST'.$y} = 1;
							${'modus3CM'.$y} += ${'tambahCMST'.$y};
						}
					}
					for ($y=16; $y <= 25 ; $y++) { 
						if ($nilai[$l] [91] == $y) {
							${'tambahCNST'.$y} = 1;
							${'modus3CN'.$y} += ${'tambahCNST'.$y};
						}
					}
					for ($x=92; $x <=103 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaCOST = 1;
							${'modus3YaCO'.$x} += $tambahYaCOST;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakCOST = 1;
							${'modus3TidakCO'.$x} += $tambahTidakCOST;
						}elseif($nilai[$l] [$x]=="normal"){
							$tambahNormalCOST = 1;
							${'modus3NormalCO'.$x} += $tambahNormalCOST;
						}elseif($nilai[$l] [$x]=="karies"){
							$tambahKariesCOST = 1;
							${'modus3KariesCO'.$x} += $tambahKariesCOST;
						}elseif($nilai[$l] [$x]=="cyanosis"){
							$tambahCyanosisCOST = 1;
							${'modus3CyanosisCO'.$x} += $tambahCyanosisCOST;
						}elseif($nilai[$l] [$x]=="teraba"){
							$tambahTerabaCOST = 1;
							${'modus3TerabaCO'.$x} += $tambahTerabaCOST;
						}elseif($nilai[$l] [$x]=="oederma"){
							$tambahOedermaCOST = 1;
							${'modus3OedermaCO'.$x} += $tambahOedermaCOST;
						}elseif($nilai[$l] [$x]=="ada"){
							$tambahAdaCOST = 1;
							${'modus3AdaCO'.$x} += $tambahAdaCOST;
						}
					}
					for ($y=0; $y <= 38 ; $y++) { 
						if ($nilai[$l] [104] == $y) {
							${'tambahDAST'.$y} = 1;
							${'modus3DA'.$y} += ${'tambahDAST'.$y};
						}
					}
					for ($y=2; $y <= 56 ; $y++) { 
						if ($nilai[$l] [105] == $y) {
							${'tambahDBST'.$y} = 1;
							${'modus3DB'.$y} += ${'tambahDBST'.$y};
						}
					}
					for ($x=106; $x <=108 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaDCST= 1;
							${'modus3YaDC'.$x} += $tambahYaDCST;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakDCST = 1;
							${'modus3TidakDC'.$x} += $tambahTidakDCST;
						}elseif($nilai[$l] [$x]=="normal"){
							$tambahNormalDCST = 1;
							${'modus3NormalDC'.$x} += $tambahNormalDCST;
						}elseif($nilai[$l] [$x]=="bujur"){
							$tambahBujurDCST = 1;
							${'modus3BujurDC'.$x} += $tambahBujurDCST;
						}elseif($nilai[$l] [$x]=="kepala"){
							$tambahKepalaDCST = 1;
							${'modus3KepalaDC'.$x} += $tambahKepalaDCST;
						}elseif($nilai[$l] [$x]=="lintang"){
							$tambahLintangDCST = 1;
							${'modus3LintangDC'.$x} += $tambahLintangDCST;
						}elseif($nilai[$l] [$x]=="sungsang"){
							$tambahSungsangDCST = 1;
							${'modus3SungsangDC'.$x} += $tambahSungsangDCST;
						}elseif($nilai[$l] [$x]=="kelainan"){
							$tambahKelainanDCST = 1;
							${'modus3KelainanDC'.$x} += $tambahKelainanDCST;
						}
					}
					for ($y=0; $y <= 1 ; $y++) { 
						if ($nilai[$l] [109] == $y) {
							${'tambahDFST'.$y} = 1;
							${'modus3DF'.$y} += ${'tambahDFST'.$y};
						}
					}
					for ($y=126; $y <= 158 ; $y++) { 
						if ($nilai[$l] [110] == $y) {
							${'tambahDGST'.$y} = 1;
							${'modus3DG'.$y} += ${'tambahDGST'.$y};
						}
					}
					for ($x=111; $x <=111 ; $x++) { 
						if($nilai[$l] [$x]=="ya"){
							$tambahYaDHST = 1;
							${'modus3YaDH'.$x} += $tambahYaDHST;
						}elseif($nilai[$l] [$x]=="tidak"){
							$tambahTidakDHST = 1;
							${'modus3TidakDH'.$x} += $tambahTidakDHST;
						}
					}
					// for ($y=7; $y <= 15 ; $y++) { 
					// 	for ($z=0; $z <100 ; $z++) { 
					// 		 $cekNilaiST = $y.".".$z;
					// 		 $floatvalST = floatval($cekNilaiST);
					// 		//echo "cekNilai ".$cekNilai."<br>";
					// 		if ($nilai[$l] [112] == $floatvalST) {
					// 			${'tambahDITS'.$floatval} = 1;
					// 			${'modus3DI'.$floatval} += ${'tambahDITS'.$floatval};
					// 		}
					// 	}

					// }

					${'max3DI'} = 0;
					$idmax3DI = 0;
					for ($y=7; $y <= 15 ; $y++) { 
						for ($z=0; $z <100 ; $z++) {
							 $cekNilaST = $y.".".$z;
							 $floatvaST = floatval($cekNilaST);
							//echo "cekNilai ".$cekNilai."<br>";
							if ($nilai[$l] [112] == $floatvaST) {
								${'tambahDST'.$floatvaST} = 1;
								${'modus3DI'.$floatvaST} += ${'tambahDST'.$floatvaST};
								if (${'max3DI'} < ${'modus3DI'.$floatvaST}) {
				        		${'max3DI'} = ${'modus3DI'.$floatvaST};
				       			$idmax3DI= $floatvaST;
				   			}
							}
						}
					}
					for ($y=0; $y <= 1 ; $y++) { 
						if ($nilai[$l] [113] == $y) {
							${'tambahDJST'.$y} = 1;
							${'modus3DJ'.$y} += ${'tambahDJST'.$y};
						}
					}
					for ($y=0; $y <= 1 ; $y++) { 
						if ($nilai[$l] [114] == $y) {
							${'tambahDKST'.$y} = 1;
							${'modus3DK'.$y} += ${'tambahDKST'.$y};
						}
					}
					for ($x=115; $x <=115 ; $x++) { 
						if($nilai[$l] [$x]=="A"){
							$tambahADLST = 1;
							${'modus3ADL'.$x} += $tambahADLST;
						}elseif($nilai[$l] [$x]=="B"){
							$tambahBDLST = 1;
							${'modus3BDL'.$x} += $tambahBDLST;
						}elseif($nilai[$l] [$x]=="O"){
							$tambahODLST = 1;
							${'modus3ODL'.$x} += $tambahODLST;
						}elseif($nilai[$l] [$x]=="AB"){
							$tambahABDLST = 1;
							${'modus3ABDL'.$x} += $tambahABDLST;
						}
					}
					for ($x=116; $x <=116 ; $x++) { 
						if($nilai[$l] [$x]=="Kehamilan-Resiko-SangatTinggi"){
							$tambahResikoSTDMST = 1;
							${'modus3ResikoSTDM'.$x} += $tambahResikoSTDMST;
						}elseif($nilai[$l] [$x]=="Kehamilan-Resiko-Tinggi"){
							$tambahResikoTDMST = 1;
							${'modus3ResikoTDM'.$x} += $tambahResikoTDMST;
						}elseif($nilai[$l] [$x]=="Kehamilan-Resiko-Rendah"){
							$tambahResikoRDMST = 1;
							${'modus3ResikoRDM'.$x} += $tambahResikoRDMST;
						}
					}		
			}

		}

				       			// echo "Cek coba W ".${'idmax2DI'}." Dan L ".$nilaiMax." Dan Tidak ".${'max1DI'}." Dan Tidak ".${'modus'.$t.'PutihSAE74'};

		// echo "halo ".$cekBanyakCluster1." Haii ".$cekBanyakCluster2." disini ".$cekBanyakCluster3;
		//Menentukan nilai 3 centroid baru

			//Pemilihan nilai modus setiap kolom
			for ($t=1; $t <=3 ; $t++) { 
				${'max'.$t.'A'} =0;
				${'idmax'.$t.'A'} =0;
				for ($y=1; $y <= 6 ; $y++) { 
					if (${'max'.$t.'A'} < ${'modus'.$t.'Hamil'.$y}) {
			        	${'max'.$t.'A'} = ${'modus'.$t.'Hamil'.$y};
			       		${'idmax'.$t.'A'} = $y;
			   		}
				}
				${'max'.$t.'B'} =0;
				${'idmax'.$t.'B'} =0;
				for ($y=15; $y <= 42 ; $y++) { 
					if (${'max'.$t.'B'} < ${'modus'.$t.'Ui'.$y}) {
			        	${'max'.$t.'B'} = ${'modus'.$t.'Ui'.$y};
			       		${'idmax'.$t.'B'} = $y;
			   		}
				}
				for ($x=2; $x <=20 ; $x++) { 
					//$max = $
					${'max'.$x} = ${'modus'.$t.'Tidak'.$x};
					if (${'max'.$x} < ${'modus'.$t.'Ya'.$x}){
			       		//${'idmax'.$t.'C'} = $x;
			       		${'max'.$t.'C'} [$x] = "ya" ;
					}else{
			       		//${'idmax'.$t.'C'} = $x;
			       		${'max'.$t.'C'} [$x] = "tidak";
					}
					// echo "HahaGG ".${'max'.$t.'C'} [$x]." Pada kolom ke ".$x;
					//echo "Haha ".${'maxA'.$t} [$x]." Pada kolom ke ".$x;
				}
				for ($x=21; $x <=21 ; $x++) { 
					//$max = $
					${'max'.$x} = ${'modus'.$t.'TidakLP'.$x};
					//echo "Haha ".${'max'.$t.'V'}." Pada kolom ke ".$x;
					if (${'max'.$x} < ${'modus'.$t.'L'.$x}){
			       		if (${'modus'.$t.'L'.$x} < ${'modus'.$t.'P'.$x}) {
			       			//${'idmax'.$t.'V'} = $x;
			       			${'max'.$t.'V'} [$x] = "P";
			       		}else{
			       			//${'idmax'.$t.'V'} = $x;
			       			${'max'.$t.'V'} [$x] = "L";
			       		}
					}
					elseif (${'max'.$x} < ${'modus'.$t.'P'.$x}) {
			       			//${'idmax'.$t.'V'} = $x;
			       			${'max'.$t.'V'} [$x] = "P";
			       	}
			       	else{
			       			//${'idmax'.$t.'V'} = $x;
			       			${'max'.$t.'V'} [$x] = "tidak";
			       	}
				}
				${'max'.$t.'W'}=0;
				${'idmax'.$t.'W'} = 0;
				for ($y=0; $y <= 4300 ; $y++) { 
					if (${'max'.$t.'W'} < ${'modus'.$t.'W'.$y}) {
			        	${'max'.$t.'W'} = ${'modus'.$t.'W'.$y};
			       		${'idmax'.$t.'W'} = $y;
			   		}
				}
				for ($x=23; $x <=25 ; $x++) { 
					${'max'.$x} = ${'modus'.$t.'TidakX'.$x};
					if (${'max'.$x} < ${'modus'.$t.'YaX'.$x}){
			       		//${'idmax'.$x.'X'} = $x;
			       		${'max'.$t.'X'} [$x] = "ya" ;
					}else{
			       		//${'idmax'.$x.'X'} = $x;
			       		${'max'.$t.'X'} [$x] = "tidak";
					}

				}
				${'max'.$t.'AA'}=0;
				${'idmax'.$t.'AA'} = 0;
				for ($y=0; $y <= 13 ; $y++) { 
					if (${'max'.$t.'AA'} < ${'modus'.$t.'HamilAA'.$y}) {
			        	${'max'.$t.'AA'} = ${'modus'.$t.'HamilAA'.$y};
			       		${'idmax'.$t.'AA'} = $y;
			   		}
				}
				for ($x=27; $x <=27 ; $x++) { 
					${'max'.$x} = ${'modus'.$t.'TidakAB'.$x};
					if (${'max'.$x} < ${'modus'.$t.'YaAB'.$x}){
			       		//${'idmax'.$x.'AB'} = $x;
			       		${'max'.$t.'AB'} [$x] = "ya" ;
					}else{
			       		//${'idmax'.$x.'AB'} = $x;
			       		${'max'.$t.'AB'} [$x] = "tidak";
					}
				}
				${'max'.$t.'AC'}=0;
				${'idmax'.$t.'AC'} = 0;
				for ($y=15; $y <= 40 ; $y++) { 
					if (${'max'.$t.'AC'} < ${'modus'.$t.'HamilAC'.$y}) {
			        	${'max'.$t.'AC'} = ${'modus'.$t.'HamilAC'.$y};
			       		${'idmax'.$t.'AC'} = $y;
			   		}
				}
				${'max'.$t.'AD'}=0;
				${'idmax'.$t.'AD'} = 0;
				for ($y=3; $y <= 10 ; $y++) { 
					if (${'max'.$t.'AD'} < ${'modus'.$t.'HamilAD'.$y}) {
			        	${'max'.$t.'AD'} = ${'modus'.$t.'HamilAD'.$y};
			       		${'idmax'.$t.'AD'} = $y;
			   		}
				}
			
				for ($x=30; $x <=74 ; $x++) { 
					if ($x==30 || $x==31) {
						${'max'.$x} = ${'modus'.$t.'TidakAE'.$x};
						//echo "Haha ".${'max'.$t.'V'}." Pada kolom ke ".$x;
						if (${'max'.$x} < ${'modus'.$t.'KadangAE'.$x}){
				       		if (${'modus'.$t.'KadangAE'.$x} < ${'modus'.$t.'TerusAE'.$x}) {
				       			//${'idmax'.$t.'AE'} = $x;
				       			${'max'.$t.'AE'} [$x] = "terus-menerus";
				       		}else{
				       			//${'idmax'.$t.'AE'} = $x;
				       			${'max'.$t.'AE'} [$x] = "kadang-kadang";
				       		}
						}
						elseif (${'max'.$x} < ${'modus'.$t.'TerusAE'.$x}) {
				       			//${'idmax'.$t.'AE'} = $x;
				       			${'max'.$t.'AE'} [$x] = "terus-menerus";
				       	}
				       	else{
				       		//	${'idmax'.$t.'AE'} = $x;
				       			${'max'.$t.'AE'} [$x] = "tidak";
				       	}
				       	
					}elseif ($x==32) {
						${'max'.$x} = ${'modus'.$t.'TidakAE'.$x};
						if (${'max'.$x} < ${'modus'.$t.'AdaAE'.$x}){
				       		${'idmax'.$t.'AE'} = $x;
				       		${'max'.$t.'AE'} [$x] = "ada" ;
						}else{
				       		${'idmax'.$t.'AE'} = $x;
				       		${'max'.$t.'AE'} [$x] = "tidak";
						}			
					}elseif ($x==33) {
						${'max'.$x} = ${'modus'.$t.'TidakAE'.$x};
						//echo "Haha ".${'max'.$t.'V'}." Pada kolom ke ".$x;
						if (${'max'.$x} < ${'modus'.$t.'AktifAE'.$x}){
				       		if (${'modus'.$t.'AktifAE'.$x} < ${'modus'.$t.'JarangAE'.$x}) {
				       			//${'idmax'.$t.'AE'} = $x;
				       			${'max'.$t.'AE'} [$x] = "jarang";
				       		}else{
				       			//${'idmax'.$t.'AE'} = $x;
				       			${'max'.$t.'AE'} [$x] = "aktif";
				       		}
						}
						elseif (${'max'.$x} < ${'modus'.$t.'JarangAE'.$x}) {
				       			//${'idmax'.$t.'AE'} = $x;
				       			${'max'.$t.'AE'} [$x] = "jarang";
				       	}
				       	else{
				       		//	${'idmax'.$t.'AE'} = $x;
				       			${'max'.$t.'AE'} [$x] = "tidak";
				       	}
					}elseif ($x==34) {
						${'max'.$x} = ${'modus'.$t.'TidakAE'.$x};
						if (${'max'.$x} < ${'modus'.$t.'AdaAE'.$x}){
				       		${'idmax'.$t.'AE'} = $x;
				       		${'max'.$t.'AE'} [$x] = "ada" ;
						}else{
				       		${'idmax'.$x.'AE'} = $x;
				       		${'max'.$t.'AE'} [$x] = "tidak";
						}			
					}elseif ($x==35) {
						${'max'.$x} = ${'modus'.$t.'BaikAE'.$x};
						if (${'max'.$x} < ${'modus'.$t.'MenurunAE'.$x}){
				       		${'idmax'.$t.'AE'} = $x;
				       		${'max'.$t.'AE'} [$x] = "menurun" ;
						}else{
				       		${'idmax'.$t.'AE'} = $x;
				       		${'max'.$t.'AE'} [$x] = "baik";
						}			
					}elseif ($x==35) {
						${'max'.$x} = ${'modus'.$t.'TidakAE'.$x};
						if (${'max'.$x} < ${'modus'.$t.'AdaAE'.$x}){
				       		${'idmax'.$t.'AE'} = $x;
				       		${'max'.$t.'AE'} [$x] = "ada" ;
						}else{
				       		${'idmax'.$t.'AE'} = $x;
				       		${'max'.$t.'AE'} [$x] = "tidak";
						}			
					}elseif ($x==35 || $x<=71) {
						${'max'.$x} = ${'modus'.$t.'TidakAE'.$x};
						if (${'max'.$x} < ${'modus'.$t.'YaAE'.$x}){
				       		//${'idmax'.$x.'AB'} = $x;
				       		${'max'.$t.'AE'} [$x] = "ya" ;
						}else{
				       		//${'idmax'.$x.'AB'} = $x;
				       		${'max'.$t.'AE'} [$x] = "tidak";
						}
					}elseif ($x==72) {
						${'max'.$x} = ${'modus'.$t.'TidakAE'.$x};
						if (${'max'.$x} < ${'modus'.$t.'PernahAE'.$x}){
				       		${'idmax'.$t.'AE'} = $x;
				       		${'max'.$t.'AE'} [$x] = "pernah" ;
						}else{
				       		${'idmax'.$t.'AE'} = $x;
				       		${'max'.$t.'AE'} [$x] = "tidak";
						}			
					}elseif ($x==73) {
						${'max'.$x} = ${'modus'.$t.'TidakAE'.$x};
						if (${'max'.$x} < ${'modus'.$t.'AdaAE'.$x}){
				       		${'idmax'.$t.'AE'} = $x;
				       		${'max'.$t.'AE'} [$x] = "ada" ;
						}else{
				       		${'idmax'.$t.'AE'} = $x;
				       		${'max'.$t.'AE'} [$x] = "tidak";
						}		

					}
					elseif ($x==74) {
						$nilaiMax = max(${'modus'.$t.'PutihBAE'.$x},${'modus'.$t.'PutihSAE'.$x},
							${'modus'.$t.'PutihKAE'.$x},${'modus'.$t.'PutihAE'.$x},${'modus'.$t.'TidakAE'.$x});
						//echo "Nilai AE ".$nilaiMax;
						if ($nilaiMax == ${'modus'.$t.'PutihBAE'.$x}) {
							${'max'.$t.'AE'} [$x] = "putih bening";
						}elseif ($nilaiMax == ${'modus'.$t.'PutihSAE'.$x}) {
							${'max'.$t.'AE'} [$x] ="putih susu";
						}elseif ($nilaiMax == ${'modus'.$t.'PutihKAE'.$x}) {
							${'max'.$t.'AE'} [$x] = "putih kental";
						}
						elseif ($nilaiMax == ${'modus'.$t.'PutihAE'.$x}) {
							${'max'.$t.'AE'} [$x] = "putih";
						}elseif($nilaiMax ==${'modus'.$t.'TidakAE'.$x} ){
							${'max'.$t.'AE'} [$x] = "tidak";
						}

					}

				}
				${'max'.$t.'BX'}=0;
				${'idmax'.$t.'BX'} = 0;
				for ($y=1; $y <= 4 ; $y++) {
					if (${'max'.$t.'BX'} < ${'modus'.$t.'HamilBX'.$y}) {
			        	${'max'.$t.'BX'} = ${'modus'.$t.'HamilBX'.$y};
			       		${'idmax'.$t.'BX'} = $y;
			   		}
				}
				${'max'.$t.'BY'}=0;
				${'idmax'.$t.'BY'} = 0;
				for ($y=1; $y <= 1 ; $y++) { 
					if (${'max'.$t.'BY'} < ${'modus'.$t.'HamilBY'.$y}) {
			        	${'max'.$t.'BY'} = ${'modus'.$t.'HamilBY'.$y};
			       		${'idmax'.$t.'BY'} = $y;
			   		}
				}
				for ($x=77; $x <=78 ; $x++) { 
					${'max'.$x} = ${'modus'.$t.'TidakBZ'.$x};
					if (${'max'.$x} < ${'modus'.$t.'YaBZ'.$x}){
			       		//${'idmax'.$x.'AB'} = $x;
			       		${'max'.$t.'BZ'} [$x] = "ya" ;
					}else{
			       		//${'idmax'.$x.'AB'} = $x;
			       		${'max'.$t.'BZ'} [$x] = "tidak";
					}
				}
				${'max'.$t.'CB'}=0;
				${'idmax'.$t.'CB'} = 0;
				for ($y=34; $y <= 97 ; $y++) { 
					if (${'max'.$t.'CB'} < ${'modus'.$t.'CB'.$y}) {
			        	${'max'.$t.'CB'} = ${'modus'.$t.'CB'.$y};
			       		${'idmax'.$t.'CB'} = $y;
			   		}
				}
				${'max'.$t.'CC'}=0;
				${'idmax'.$t.'CC'} = 0;
				for ($y=24; $y <= 168 ; $y++) { 
					if (${'max'.$t.'CC'} < ${'modus'.$t.'CC'.$y}) {
			        	${'max'.$t.'CC'} = ${'modus'.$t.'CC'.$y};
			       		${'idmax'.$t.'CC'} = $y;
			   		}
				}
				${'max'.$t.'CD'}=0;
				${'idmax'.$t.'CD'} = 0;
				for ($y=34; $y <= 168 ; $y++) { 
					if (${'max'.$t.'CD'} < ${'modus'.$t.'CD'.$y}) {
			        	${'max'.$t.'CD'} = ${'modus'.$t.'CD'.$y};
			       		${'idmax'.$t.'CD'} = $y;
			   		}
				}
				${'max'.$t.'CE'}=0;
				${'idmax'.$t.'CE'} = 0;
				for ($y=12; $y <= 42 ; $y++) { 
					if (${'max'.$t.'CE'} < ${'modus'.$t.'CE'.$y}) {
			        	${'max'.$t.'CE'} = ${'modus'.$t.'CE'.$y};
			       		${'idmax'.$t.'CE'} = $y;
			   		}
				}
				for ($x=83; $x <=86 ; $x++) { 
					${'nilaiMax'.$x} = max(${'modus'.$t.'YaCF'.$x},${'modus'.$t.'TidakCF'.$x},
					${'modus'.$t.'NormalCF'.$x},${'modus'.$t.'BaikCF'.$x});
					if (${'nilaiMax'.$x} == ${'modus'.$t.'YaCF'.$x}) {
						${'max'.$t.'CF'} [$x] = "ya";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'TidakCF'.$x}) {
						${'max'.$t.'CF'} [$x] ="tidak";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'NormalCF'.$x}) {
						${'max'.$t.'CF'} [$x] = "normal";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'BaikCF'.$x}) {
						${'max'.$t.'CF'} [$x] = "baik";
					}
				}
				${'max'.$t.'CJ'}=0;
				${'idmax'.$t.'CJ'} = 0;
				for ($y=80; $y <= 180 ; $y++) { 
					if (${'max'.$t.'CJ'} < ${'modus'.$t.'CJ'.$y}) {
			        	${'max'.$t.'CJ'} = ${'modus'.$t.'CJ'.$y};
			       		${'idmax'.$t.'CJ'} = $y;
			   		}
				}
				${'max'.$t.'CK'}=0;
				${'idmax'.$t.'CK'} = 0;
				for ($y=50; $y <= 90 ; $y++) { 
					if (${'max'.$t.'CK'} < ${'modus'.$t.'CK'.$y}) {
			        	${'max'.$t.'CK'} = ${'modus'.$t.'CK'.$y};
			       		${'idmax'.$t.'CK'} = $y;
			   		}
				}
				${'max'.$t.'CL'}=0;
				${'idmax'.$t.'CL'} = 0;
				for ($y=26; $y <= 37 ; $y++) { 
					if (${'max'.$t.'CL'} < ${'modus'.$t.'CL'.$y}) {
			        	${'max'.$t.'CL'} = ${'modus'.$t.'CL'.$y};
			       		${'idmax'.$t.'CL'} = $y;
			   		}
				}
				${'max'.$t.'CM'}=0;
				${'idmax'.$t.'CM'} = 0;
				for ($y=60; $y <= 88 ; $y++) { 
					if (${'max'.$t.'CM'} < ${'modus'.$t.'CM'.$y}) {
			        	${'max'.$t.'CM'} = ${'modus'.$t.'CM'.$y};
			       		${'idmax'.$t.'CM'} = $y;
			   		}
				}
				${'max'.$t.'CN'}=0;
				${'idmax'.$t.'CN'} = 0;
				for ($y=16; $y <= 25 ; $y++) { 
					if (${'max'.$t.'CN'} < ${'modus'.$t.'CN'.$y}) {
			        	${'max'.$t.'CN'} = ${'modus'.$t.'CN'.$y};
			       		${'idmax'.$t.'CN'} = $y;
			   		}
				}
				for ($x=92; $x <=103 ; $x++) { 
				${'nilaiMax'.$x} = max(${'modus'.$t.'YaCO'.$x},${'modus'.$t.'TidakCO'.$x},
									${'modus'.$t.'NormalCO'.$x},${'modus'.$t.'KariesCO'.$x},${'modus'.$t.'CyanosisCO'.$x},${'modus'.$t.'TerabaCO'.$x},${'modus'.$t.'OedermaCO'.$x},${'modus'.$t.'AdaCO'.$x});
					if (${'nilaiMax'.$x} == ${'modus'.$t.'YaCO'.$x}) {
						${'max'.$t.'CO'} [$x] = "ya";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'TidakCO'.$x}) {
						${'max'.$t.'CO'} [$x] ="tidak";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'NormalCO'.$x}) {
						${'max'.$t.'CO'} [$x] = "normal";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'KariesCO'.$x}) {
						${'max'.$t.'CO'} [$x] = "karies";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'CyanosisCO'.$x}) {
						${'max'.$t.'CO'} [$x] = "cyanosis";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'AdaCO'.$x}) {
						${'max'.$t.'CO'} [$x] = "ada";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'OedermaCO'.$x}) {
						${'max'.$t.'CO'} [$x] = "oederma";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'TerabaCO'.$x}) {
						${'max'.$t.'CO'} [$x] = "teraba";
					}
				}
				${'max'.$t.'DA'} =0;
				${'idmax'.$t.'DA'} =0;
				for ($y=0; $y <= 38 ; $y++) { 
					if (${'max'.$t.'DA'} < ${'modus'.$t.'DA'.$y}) {
			        	${'max'.$t.'DA'} = ${'modus'.$t.'DA'.$y};
			       		${'idmax'.$t.'DA'} = $y;
			   		}
				}
				${'max'.$t.'DB'} =0;
				${'idmax'.$t.'DB'} =0;
				for ($y=2; $y <= 56 ; $y++) { 
					if (${'max'.$t.'DB'} < ${'modus'.$t.'DB'.$y}) {
			        	${'max'.$t.'DB'} = ${'modus'.$t.'DB'.$y};
			       		${'idmax'.$t.'DB'} = $y;
			   		}
				}
				for ($x=106; $x <=108 ; $x++) { 
					${'nilaiMax'.$x} = max(${'modus'.$t.'YaDC'.$x},${'modus'.$t.'TidakDC'.$x},
									${'modus'.$t.'NormalDC'.$x},${'modus'.$t.'BujurDC'.$x},${'modus'.$t.'KepalaDC'.$x},${'modus'.$t.'LintangDC'.$x},${'modus'.$t.'SungsangDC'.$x},${'modus'.$t.'KelainanDC'.$x});
					if (${'nilaiMax'.$x} == ${'modus'.$t.'YaDC'.$x}) {
						${'max'.$t.'DC'} [$x] = "ya";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'TidakDC'.$x}) {
						${'max'.$t.'DC'} [$x] ="tidak";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'NormalDC'.$x}) {
						${'max'.$t.'DC'} [$x] = "normal";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'BujurCO'.$x}) {
						${'max'.$t.'DC'} [$x] = "bujur";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'KepalaDC'.$x}) {
						${'max'.$t.'DC'} [$x] = "kepala";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'LintangDC'.$x}) {
						${'max'.$t.'DC'} [$x] = "lintang";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'SungsangDC'.$x}) {
						${'max'.$t.'DC'} [$x] = "sungsang";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'KelainanDC'.$x}) {
						${'max'.$t.'DC'} [$x] = "kelainan";
					}
				}
				${'max'.$t.'DF'} =0;
				${'idmax'.$t.'DF'} =0;
				for ($y=0; $y <= 1 ; $y++) { 
					if (${'max'.$t.'DF'} < ${'modus'.$t.'DF'.$y}) {
			        	${'max'.$t.'DF'} = ${'modus'.$t.'DF'.$y};
			       		${'idmax'.$t.'DF'} = $y;
			   		}
				}
				${'max'.$t.'DG'} =0;
				${'idmax'.$t.'DG'} =0;
				for ($y=126; $y <= 158 ; $y++) { 
					if (${'max'.$t.'DG'} < ${'modus'.$t.'DG'.$y}) {
			        	${'max'.$t.'DG'} = ${'modus'.$t.'DG'.$y};
			       		${'idmax'.$t.'DG'} = $y;
			   		}
				}

				for ($x=111; $x <=111 ; $x++) { 
					${'max'.$x} = ${'modus'.$t.'TidakDH'.$x};
					if (${'max'.$x} < ${'modus'.$t.'YaDH'.$x}){
			       		//${'idmax'.$x.'AB'} = $x;
			       		${'max'.$t.'DH'} [$x] = "ya" ;
					}else{
			       		//${'idmax'.$x.'AB'} = $x;
			       		${'max'.$t.'DH'} [$x] = "tidak";
					}
				}
				// ${'max'.$t.'DI'} =0;
				// ${'idmax'.$t.'DI'} =0;
				// for ($y=7; $y <= 15 ; $y++) { 
				// 	for ($z=0; $z <100 ; $z++) { 
				// 		 $cekNilaiT = $y.".".$z;
				// 		 $floatvalT = floatval($cekNilaiT);
				// 		//echo "cekNilai ".$cekNilai."<br>";
				// 		if ($nilai[$l] [112] == $floatvalT) {
				// 			if (${'max'.$t.'DI'} < ${'modus'.$t.'DI'.$floatvalT}) {
				//         		${'max'.$t.'DI'} = ${'modus'.$t.'DI'.$floatvalT};
				//        			${'idmax'.$t.'DI'} = $floatvalT;
				//    			}
				// 		}
				// 	}
				// }
				// ${'max'.$t.'DI'} =0;
				// ${'idmax'.$t.'DI'} =0;
				// for ($y=7; $y <= 15 ; $y++) { 
				// 	if (${'max'.$t.'DI'} < ${'modus'.$t.'DI'.$y}) {
			 //        	${'max'.$t.'DI'} = ${'modus'.$t.'DI'.$y};
			 //       		${'idmax'.$t.'DI'} = $y;
			 //   		}
				// }
				${'max'.$t.'DJ'} =0;
				${'idmax'.$t.'DJ'} =0;
				for ($y=0; $y <= 1 ; $y++) { 
					if (${'max'.$t.'DJ'} < ${'modus'.$t.'DJ'.$y}) {
			        	${'max'.$t.'DJ'} = ${'modus'.$t.'DJ'.$y};
			       		${'idmax'.$t.'DJ'} = $y;
			   		}
				}
				${'max'.$t.'DK'} =0;
				${'idmax'.$t.'DK'} =0;
				for ($y=0; $y <= 1 ; $y++) { 
					if (${'max'.$t.'DK'} < ${'modus'.$t.'DK'.$y}) {
			        	${'max'.$t.'DK'} = ${'modus'.$t.'DK'.$y};
			       		${'idmax'.$t.'DK'} = $y;
			   		}
				}
				for ($x=115; $x <=115 ; $x++) { 
					${'nilaiMax'.$x} = max(${'modus'.$t.'ADL'.$x},${'modus'.$t.'BDL'.$x},
									${'modus'.$t.'ODL'.$x},${'modus'.$t.'ABDL'.$x});
					if (${'nilaiMax'.$x} == ${'modus'.$t.'ADL'.$x}) {
						${'max'.$t.'DL'} [$x] = "A";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'BDL'.$x}) {
						${'max'.$t.'DL'} [$x] ="B";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'ODL'.$x}) {
						${'max'.$t.'DL'} [$x] = "O";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'ABDL'.$x}) {
						${'max'.$t.'DL'} [$x] = "AB";
					}
				}
				${'max'.$t.'DM'} [116] = "";
				for ($x=116; $x <=116 ; $x++) { 
					${'nilaiMax'.$x} = max(${'modus'.$t.'ResikoSTDM'.$x},${'modus'.$t.'ResikoTDM'.$x},${'modus'.$t.'ResikoRDM'.$x});
					if (${'nilaiMax'.$x} == ${'modus'.$t.'ResikoSTDM'.$x}) {
						${'max'.$t.'DM'} [$x] ="Kehamilan-Resiko-SangatTinggi";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'ResikoTDM'.$x}) {
						${'max'.$t.'DM'} [$x] = "Kehamilan-Resiko-Tinggi";
					}elseif (${'nilaiMax'.$x} == ${'modus'.$t.'ResikoRDM'.$x}) {
						${'max'.$t.'DM'} [$x] = "Kehamilan-Resiko-Rendah";
					}
				}
			//	${'sb'.$t.'DM'} = ${'max'.$t.'DM'} [116];

					// echo "Cek coba W ".${'modus2DI'.$floatvalT}." Dan L ".$nilaiMax." Dan Tidak ".${'max'.$t.'DI'}." Dan Tidak ".${'modus'.$t.'PutihSAE74'};
				//echo "Cek coba ".$modus1P." Dan ".$modus1L." Dan ".$modus1TidakLP;
		//	}
			}

		//echo "ambilCentroidBaru 1 "."<br>";

		for ($k=1; $k <= 3  ; $k++) { 
		// 		echo "Cek coba W ".${'idmax'.$k.'DI'}." Dan L ".$nilaiMax." Dan Tidak ".${'max1DI'}." Dan Tidak ".${'modus'.$t.'PutihSAE74'};
		${'ambilCentroidBaru'.$k} = array(${'idmax'.$k.'A'},${'idmax'.$k.'B'},"".${'max'.$k.'C'} [2],"".${'max'.$k.'C'} [3],"".${'max'.$k.'C'} [4],"".${'max'.$k.'C'} [5],"".${'max'.$k.'C'} [6],"".${'max'.$k.'C'} [7],"".${'max'.$k.'C'} [8],"".${'max'.$k.'C'} [9],"".${'max'.$k.'C'} [10],"".${'max'.$k.'C'} [11],"".${'max'.$k.'C'} [12],"".${'max'.$k.'C'} [13],"".${'max'.$k.'C'} [14],"".${'max'.$k.'C'} [15],"".${'max'.$k.'C'} [16],"".${'max'.$k.'C'} [17],"".${'max'.$k.'C'} [18],"".${'max'.$k.'C'} [19],"".${'max'.$k.'C'} [20],"".${'max'.$k.'V'} [21],${'idmax'.$k.'W'},"".${'max'.$k.'X'} [23],"".${'max'.$k.'X'} [24],"".${'max'.$k.'X'} [25],"".${'idmax'.$k.'AA'},"".${'max'.$k.'AB'}[27],${'idmax'.$k.'AC'},${'idmax'.$k.'AD'},"".${'max'.$k.'AE'} [30],"".${'max'.$k.'AE'} [31],"".${'max'.$k.'AE'} [32],"".${'max'.$k.'AE'} [33],"".${'max'.$k.'AE'} [34],"".${'max'.$k.'AE'} [35],"".${'max'.$k.'AE'} [36],"".${'max'.$k.'AE'} [37],"".${'max'.$k.'AE'} [38],"".${'max'.$k.'AE'} [39],"".${'max'.$k.'AE'} [40],"".${'max'.$k.'AE'} [41],"".${'max'.$k.'AE'} [42],"".${'max'.$k.'AE'} [43],"".${'max'.$k.'AE'} [44],"".${'max'.$k.'AE'} [45],"".${'max'.$k.'AE'} [46],"".${'max'.$k.'AE'} [47],"".${'max'.$k.'AE'} [48],"".${'max'.$k.'AE'} [49],"".${'max'.$k.'AE'} [50],"".${'max'.$k.'AE'} [51],"".${'max'.$k.'AE'} [52],"".${'max'.$k.'AE'} [53],"".${'max'.$k.'AE'} [54],"".${'max'.$k.'AE'} [55],"".${'max'.$k.'AE'} [56],"".${'max'.$k.'AE'} [57],"".${'max'.$k.'AE'} [58],"".${'max'.$k.'AE'} [59],"".${'max'.$k.'AE'} [60],"".${'max'.$k.'AE'} [61],"".${'max'.$k.'AE'} [62],"".${'max'.$k.'AE'} [63],"".${'max'.$k.'AE'} [64],"".${'max'.$k.'AE'} [65],"".${'max'.$k.'AE'} [66],"".${'max'.$k.'AE'} [67],"".${'max'.$k.'AE'} [68],"".${'max'.$k.'AE'} [69],"".${'max'.$k.'AE'} [70],"".${'max'.$k.'AE'} [71],"".${'max'.$k.'AE'} [72],"".${'max'.$k.'AE'} [73],"".${'max'.$k.'AE'} [74],${'idmax'.$k.'BX'},${'idmax'.$k.'BY'},"".${'max'.$k.'BZ'} [77],"".${'max'.$k.'BZ'} [78],${'idmax'.$k.'CB'},${'idmax'.$k.'CC'},${'idmax'.$k.'CD'},${'idmax'.$k.'CE'},"".${'max'.$k.'CF'} [83],"".${'max'.$k.'CF'} [84],"".${'max'.$k.'CF'} [85],"".${'max'.$k.'CF'} [86],${'idmax'.$k.'CJ'},${'idmax'.$k.'CK'},${'idmax'.$k.'CL'},${'idmax'.$k.'CM'},${'idmax'.$k.'CN'},"".${'max'.$k.'CO'} [92],"".${'max'.$k.'CO'} [93],"".${'max'.$k.'CO'} [94],"".${'max'.$k.'CO'} [95],"".${'max'.$k.'CO'} [96],"".${'max'.$k.'CO'} [97],"".${'max'.$k.'CO'} [98],"".${'max'.$k.'CO'} [99],"".${'max'.$k.'CO'} [100],"".${'max'.$k.'CO'} [101],"".${'max'.$k.'CO'} [102],"".${'max'.$k.'CO'} [103],${'idmax'.$k.'DA'},${'idmax'.$k.'DB'},"".${'max'.$k.'DC'} [106],"".${'max'.$k.'DC'} [107],"".${'max'.$k.'DC'} [108],${'idmax'.$k.'DF'},${'idmax'.$k.'DG'},"".${'max'.$k.'DH'}[111],${'idmax'.$k.'DI'},${'idmax'.$k.'DJ'},${'idmax'.$k.'DK'},"".${'max'.$k.'DL'} [115],"".${'max'.$k.'DM'} [116]) ;
		}
	//	echo "<hr>";
		//echo "ambilCentroidBaru 1 "."<hr>";
		// for ($i=0; $i <117 ; $i++) { 
		// 	echo "".$ambilCentroidBaru1 [$i].",";
		// }
		//echo "ambilCentroidBaru 2 "."<hr>";
		// for ($i=0; $i <117 ; $i++) { 
		// 	echo "".$ambilCentroidBaru2 [$i].",";
		// }
		//echo "ambilCentroidBaru 3 "."<hr>";
		// for ($i=0; $i <117 ; $i++) { 
		// 	echo "".$ambilCentroidBaru3 [$i].",";
		// }
//			$CeknilaiTerkecil= array($nilaiTotalCentroid1[$l],$nilaiTotalCentroid2[$l],$nilaiTotalCentroid3[$l]);
		for ($j=0; $j < 401 ; $j++) { 
			if (${'barisCluster1'.$j} == $j) {
				//echo "baris ke ".$j." Cluster 1";
				// for ($j=0; $j < 117 ; $j++) { 
				// 	echo "".$nilai[$i][$j].", ";
				// }
				$nilaiHasilCentroidBaru1 = 0;
				for ($m=0; $m < 117; $m++) { 
					//Kategorikal (Dengan Simple Mathching)
					//Dilakukan dengan simple matching (nilai kategorik jika sama bernilai 0 dan 1 jika berbeda)
					if(($m >= 2 && $m <= 21) || ($m >= 23 && $m <= 25) || ($m==27) || ($m >= 30 && $m <= 74) || ($m >= 77 && $m <= 78) || ($m >= 83 && $m <= 86) || ($m >= 92 && $m <= 103) || ($m >= 106 && $m <= 108) || ($m == 111) || ($m >= 115 && $m <= 116)){
						if ($nilai[$j][$m] == $ambilCentroidBaru1 [$m]) {
							//echo "True ".$m;
							$nilaiCentroidBaru1 = 1;
							//echo "Nilai centroid1 ".$nilaiCentroid1;
						}else{
							//echo "false ".$m;
							$nilaiCentroidBaru1 = 0;
						}					
						//echo "Kategorikal ".$m."<br>";		
					}
					//Numerik (Dengan Manhattan Distance)
					//Menghitung jarak (absolute) 
					else{
						$tempNumBaru1 = $ambilCentroidBaru1 [$m] - $nilai[$j][$m];
						//echo "Nilai Centroid Sebelum".$m." ".$tempNum;
						$nilaiCentroidBaru1 = abs($tempNumBaru1);
						//echo "Nilai Centroid Sesudah Temp ".$nilaiCentroid1. "<br>";
					}
					$nilaiHasilCentroidBaru1 += $nilaiCentroidBaru1;
				}
				//echo "<br>";
				// echo "Nilai centroid2 "."Baris ke ".$j." hasil ".$nilaiHasilCentroidBaru1."<br>";
			//	$SBaruCentroidBaru1 = 0;
				$nilaiTotalCentroid1[$j]=0;
				$nilaiTotalCentroid1[$j]=$nilaiHasilCentroidBaru1;
				$SBaruCentroidBaru1 +=$nilaiHasilCentroidBaru1; 
			}elseif (${'barisCluster2'.$j}== $j) {
				//echo "baris ke ".$j." Cluster 2";
				// for ($j=0; $j < 117 ; $j++) { 
				// 	echo "".$nilai[$i][$j].", ";
				// }
				$nilaiHasilCentroidBaru2 = 0;
				for ($m=0; $m < 117; $m++) { 
					//Kategorikal (Dengan Simple Mathching)
					//Dilakukan dengan simple matching (nilai kategorik jika sama bernilai 0 dan 1 jika berbeda)
					if(($m >= 2 && $m <= 21) || ($m >= 23 && $m <= 25) || ($m==27) || ($m >= 30 && $m <= 74) || ($m >= 77 && $m <= 78) || ($m >= 83 && $m <= 86) || ($m >= 92 && $m <= 103) || ($m >= 106 && $m <= 108) || ($m == 111) || ($m >= 115 && $m <= 116)){
						if ($nilai[$j][$m] == $ambilCentroidBaru2 [$m]) {
							//echo "True ".$m;
							$nilaiCentroidBaru2 = 1;
							//echo "Nilai centroid1 ".$nilaiCentroid1;
						}else{
							//echo "false ".$m;
							$nilaiCentroidBaru2 = 0;
						}					
						//echo "Kategorikal ".$m."<br>";		
					}
					//Numerik (Dengan Manhattan Distance)
					//Menghitung jarak (absolute) 
					else{
						$tempNumBaru2 = $ambilCentroidBaru2 [$m] - $nilai[$j][$m];
						//echo "Nilai Centroid Sebelum".$m." ".$tempNum;
						$nilaiCentroidBaru2 = abs($tempNumBaru2);
						//echo "Nilai Centroid Sesudah Temp ".$nilaiCentroid1. "<br>";
					}
					$nilaiHasilCentroidBaru2 += $nilaiCentroidBaru2;
				}
				//echo "<br>";
				// echo "Nilai centroid2 "."Baris ke ".$j." hasil ".$nilaiHasilCentroidBaru2."<br>";
				//$SBaruCentroidBaru2 = 0 ;
				$nilaiTotalCentroid2[$j]=0;
				$nilaiTotalCentroid2[$j]=$nilaiHasilCentroidBaru2;

				$SBaruCentroidBaru2 +=$nilaiHasilCentroidBaru2; 
			// 					echo " jjjj ".$SBaruCentroidBaru2;
			// echo "jjR ".$nilaiHasilCentroidBaru2;
			}else {
				//echo "baris ke ".$j." Cluster 3";
				// for ($j=0; $j < 117 ; $j++) { 
				// 	echo "".$nilai[$i][$j].", ";
				// }
				$nilaiHasilCentroidBaru3 = 0;
				for ($m=0; $m < 117; $m++) { 
					//Kategorikal (Dengan Simple Mathching)
					//Dilakukan dengan simple matching (nilai kategorik jika sama bernilai 0 dan 1 jika berbeda)
					if(($m >= 2 && $m <= 21) || ($m >= 23 && $m <= 25) || ($m==27) || ($m >= 30 && $m <= 74) || ($m >= 77 && $m <= 78) || ($m >= 83 && $m <= 86) || ($m >= 92 && $m <= 103) || ($m >= 106 && $m <= 108) || ($m == 111) || ($m >= 115 && $m <= 116)){
						if ($nilai[$j][$m] == $ambilCentroidBaru3 [$m]) {
							//echo "True ".$m;
							$nilaiCentroidBaru3 = 1;
							//echo "Nilai centroid1 ".$nilaiCentroid1;
						}else{
							//echo "false ".$m;
							$nilaiCentroidBaru3 = 0;
						}					
						//echo "Kategorikal ".$m."<br>";		
					}
					//Numerik (Dengan Manhattan Distance)
					//Menghitung jarak (absolute) 
					else{
						$tempNumBaru3 = $ambilCentroidBaru3 [$m] - $nilai[$j][$m];
						//echo "Nilai Centroid Sebelum".$m." ".$tempNum;
						$nilaiCentroidBaru3 = abs($tempNumBaru3);
						//echo "Nilai Centroid Sesudah Temp ".$nilaiCentroid1. "<br>";
					}
					$nilaiHasilCentroidBaru3 += $nilaiCentroidBaru3;
				}
				//echo "<br>";
				// echo "Nilai centroid2 "."Baris ke ".$j." hasil ".$nilaiHasilCentroidBaru3."<br>";
				//$SBaruCentroidBaru3 = 0;
				$nilaiTotalCentroid3[$j]=0;
				$nilaiTotalCentroid3[$j]=$nilaiHasilCentroidBaru3;
				$SBaruCentroidBaru3 +=$nilaiHasilCentroidBaru3; 
			}
		}
		$Sbaru = $SBaruCentroidBaru1 + $SBaruCentroidBaru2 + $SBaruCentroidBaru3; 
	//	$S = 0;
		//$Sbaru = $nilaiHasilCentroidBaru1 + $nilaiHasilCentroidBaru2+$nilaiHasilCentroidBaru3
		//echo "SBaru ".$Sbaru;
		//Menghitung simpangan S, S = total cost baru – total cost lama.  S < 0 maka tukar non medoids dengan medoids
		$S= $Sbaru - $Slama;
		//echo "STok ".$S." SBaru ".$Sbaru." SLama ".$Slama;
		if ($S<0) {
			$Slama = $Sbaru;

		//	echo "rasi ke ".$iterasi." Ambil ".$ambilCentroidBaru1 [0]." Ambil ".$ambilCentroidBaru2 [0]." Ambil ".$ambilCentroidBaru3 [0];

		}else{
			//echo "<hr>";
			// echo "<br>";
			// echo "Hasil Akhir Cluster";
			// echo "<br>";
			for ($j=0; $j < 401 ; $j++) { 
				if (${'barisCluster1'.$j} == $j) {
					echo "baris ke ".$j." Cluster 1";
					$nilaiHasilCentroidBaru1 = 0;
					$nilaiKeJs1++;
					//echo "<br>";

					// for ($m=0; $m < 117; $m++) { 
					// 	echo " ".$nilai[$j][$m].",";
					// }
				}elseif (${'barisCluster2'.$j} == $j) {
					echo "baris ke ".$j." Cluster 2";
					$nilaiHasilCentroidBaru2 = 0;
					$nilaiKeJs2++;
					//echo "<br>";
					// for ($m=0; $m < 117; $m++) { 
					// 	echo " ".$nilai[$j][$m].",";
					// }
				}else {
					echo "baris ke ".$j." Cluster 3";
					$nilaiHasilCentroidBaru3 = 0;
					$nilaiKeJs3++;
					//echo "<br>";
					// for ($m=0; $m < 117; $m++) { 
					// 	echo " ".$nilai[$j][$m].",";
					// }
				}
			}
			break;

		}

}

?>
<br>
<hr>
<?php echo"<strong>Algoritma C5 </strong><br>"; ?>
<br>
<hr>
<?php
    // ini_set('max_execution_time', 90); 
$banyakBaris= 400;
// $hasildfd = -(20/28)*(log(20, 2)- log(28,2)) - (8/28)*(log(8, 2)- log(28,2));
// echo "Hasil fkfj ".$hasildfd;
$hasildfd = -(1/28)*(log(20, 2)- log(1,2)) - (8/28)*(log(8, 2)- log(28,2));
echo "Hasil fkfj ".$hasildfd;
	for ($p=1; $p <=3  ; $p++) { 
		${'ctKeJS'.$p}= 0;
		$tambahSemuaRA = 0 ;
		$tambahSemuaTA = 0;
		$tambahSemuaSTA = 0 ;
		$hasilEntropiTotalA = 0;
		$tambahSemuaRB = 0 ;
		$tambahSemuaTB = 0;
		$tambahSemuaSTB = 0 ;
		$hasilEntropiTotalB = 0;
		$tambahSemuaRDV = 0 ;
		$tambahSemuaTDV= 0;
		$tambahSemuaSTDV = 0 ;
		$hasilEntropiTotalV = 0;
		$tambahSemuaRW = 0 ;
		$tambahSemuaTW= 0;
		$tambahSemuaSTW = 0 ;
		$hasilEntropiTotalW = 0;
		$tambahSemuaRX = 0 ;
		$tambahSemuaTX= 0;
		$tambahSemuaSTX = 0 ;
		$hasilEntropiTotalX= 0;
		$tambahSemuaRAA = 0 ;
		$tambahSemuaTAA= 0;
		$tambahSemuaSTAA = 0 ;
		$hasilEntropiTotalAA = 0;
		$tambahSemuaRAB = 0 ;
		$tambahSemuaTAB= 0;
		$tambahSemuaSTAB = 0 ;
		$hasilEntropiTotalAB = 0;
		$tambahSemuaRAC = 0 ;
		$tambahSemuaTAC= 0;
		$tambahSemuaSTAC = 0 ;
		$hasilEntropiTotalAC = 0;
		$tambahSemuaRAD = 0 ;
		$tambahSemuaRAE = 0 ;
		$tambahSemuaTAE= 0;
		$tambahSemuaSTAE = 0 ;
		$hasilEntropiTotalAE = 0;
				$tambahSemuaRBX = 0 ;
		$tambahSemuaTBX= 0;
		$tambahSemuaSTBX = 0 ;
		$hasilEntropiTotalBX = 0;
						$tambahSemuaRBY = 0 ;
		$tambahSemuaTBY= 0;
		$tambahSemuaSTBY = 0 ;
		$hasilEntropiTotalBY = 0;
						$tambahSemuaRBZ = 0 ;
		$tambahSemuaTBZ= 0;
		$tambahSemuaSTBZ = 0 ;
		$hasilEntropiTotalBZ = 0;
						$tambahSemuaRCB = 0 ;
		$tambahSemuaTCB= 0;
		$tambahSemuaSTCB = 0 ;
		$hasilEntropiTotalCB = 0;
		$tambahSemuaRCC = 0 ;
		$tambahSemuaTCC= 0;
		$tambahSemuaSTCC = 0 ;
		$hasilEntropiTotalCC = 0;
		$tambahSemuaRCD = 0 ;
		$tambahSemuaTCD= 0;
		$tambahSemuaSTCD = 0 ;
		$hasilEntropiTotalCD = 0;
		$tambahSemuaRCE = 0 ;
		$tambahSemuaTCE= 0;
		$tambahSemuaSTCE = 0 ;
		$hasilEntropiTotalCE = 0;
		$tambahSemuaRCB = 0 ;
		$tambahSemuaTCF= 0;
		$tambahSemuaSTCF = 0 ;
		$hasilEntropiTotalCF = 0;
		$tambahSemuaRCJ = 0 ;
		$tambahSemuaTCJ= 0;
		$tambahSemuaSTCJ = 0 ;
		$hasilEntropiTotalCJ = 0;
		$tambahSemuaRCK = 0 ;
		$tambahSemuaTCK= 0;
		$tambahSemuaSTCK = 0 ;
		$hasilEntropiTotalCK = 0;
		$tambahSemuaRCL = 0 ;
		$tambahSemuaTCL= 0;
		$tambahSemuaSTCL = 0 ;
		$hasilEntropiTotalCL = 0;
		$tambahSemuaRCM = 0 ;
		$tambahSemuaTCM= 0;
		$tambahSemuaSTCM = 0 ;
		$hasilEntropiTotalCM = 0;
		$tambahSemuaRCN = 0 ;
		$tambahSemuaTCN= 0;
		$tambahSemuaSTCN = 0 ;
		$hasilEntropiTotalCN = 0;
		$tambahSemuaRCO = 0 ;
		$tambahSemuaTCO= 0;
		$tambahSemuaSTCO = 0 ;
		$hasilEntropiTotalCO = 0;
		$tambahSemuaTAD= 0;
		$tambahSemuaSTAD = 0 ;
		$hasilEntropiTotalAD = 0;
		$tambahSemuaRDA = 0 ;
		$tambahSemuaTDA= 0;
		$tambahSemuaSTDA = 0 ;
		$hasilEntropiTotalDA = 0;
		$tambahSemuaRDB = 0;
		$tambahSemuaTDB = 0;
		$tambahSemuaSTDB = 0;
		$hasilEntropiTotalDB = 0;
				$tambahSemuaRDC = 0;
		$tambahSemuaTDC = 0;
		$tambahSemuaSTDC = 0;
		$hasilEntropiTotalDC = 0;
				$tambahSemuaRDF = 0;
		$tambahSemuaTDF = 0;
		$tambahSemuaSTDF = 0;
		$hasilEntropiTotalDF = 0;
				$tambahSemuaRDG = 0;
		$tambahSemuaTDG = 0;
		$tambahSemuaSTDG = 0;
		$hasilEntropiTotalDG = 0;
				$tambahSemuaRDH = 0;
		$tambahSemuaTDH = 0;
		$tambahSemuaSTDH = 0;
		$hasilEntropiTotalDH = 0;
				$tambahSemuaRDI = 0;
		$tambahSemuaTDI = 0;
		$tambahSemuaSTDI = 0;
		$hasilEntropiTotalDI = 0;
				$tambahSemuaRDJ = 0;
		$tambahSemuaTDJ = 0;
		$tambahSemuaSTDJ = 0;
		$hasilEntropiTotalDJ = 0;
				$tambahSemuaRDK = 0;
		$tambahSemuaTDK = 0;
		$tambahSemuaSTDK = 0;
		$hasilEntropiTotalDK = 0;
				$tambahSemuaRDL = 0;
		$tambahSemuaTDL = 0;
		$tambahSemuaSTDL = 0;
		$hasilEntropiTotalDL = 0;

		for ($y=1; $y <= 6 ; $y++) { 
				${'ct'.$p.'Hamil'.$y} =0;
		}
		for ($y=15; $y <= 42 ; $y++) { 
			${'ct'.$p.'Ui'.$y} = 0;
		}
		for ($x=2; $x <=20 ; $x++) { 
			${'ct'.$p.'Ya'.$x} = 0;
			${'ct'.$p.'Tidak'.$x} = 0;
		${'tambahSemuaRC'.$x} = 0 ;
		${'tambahSemuaTC'.$x} = 0;
		${'tambahSemuaSTC'.$x} = 0 ;
		${'hasilEntropiTotalC'.$x} = 0;
				${'totalYaC'.$y}=0; 
				${'totalTidakC'.$y}=0; 
		}
		for ($x=21; $x <=21 ; $x++) { 
				${'ct'.$p.'L'.$x} = 0;
				${'ct'.$p.'P'.$x} = 0;
				${'ct'.$p.'LP'.$x} = 0;
				$hasilInformationGainV=0;
		}
		for ($y=0; $y <= 4300 ; $y++) { 
				${'ct'.$p.'W'.$y} = 0;
				${'s'.$p.'tambahw'.$y}=0; 
				$hasilInformationGainW=0;
		}
		for ($x=23; $x <=25 ; $x++) { 
				${'ct'.$p.'YaX'.$x} = 0;
				${'ct'.$p.'TidakX'.$x} = 0;
				${'tambahSemuaRDX'.$x} = 0;
				${'tambahSemuaTDX'.$x}= 0;
				${'tambahSemuaSTDX'.$x} = 0 ;
				${'hasilEntropiTotalX'.$x} = 0;
		}
		for ($y=0; $y <= 13 ; $y++) { 
				${'ct'.$p.'HamilAA'.$y} = 0;
				${'s'.$p.'tambahAA'.$y}=0; 
		}
		for ($x=27; $x <=27 ; $x++) { 
				${'ct'.$p.'YaAB'.$x} = 0;
				${'ct'.$p.'TidakAB'.$x} = 0;
				$hasilInformationGainAB=0;
		}
		for ($y=15; $y <= 40 ; $y++) { 
				${'ct'.$p.'HamilAC'.$y} = 0;
				${'s'.$p.'tambahAC'.$y}=0; 
		}
		for ($y=3; $y <= 10 ; $y++) { 
				${'ct'.$p.'HamilAD'.$y} = 0;
				${'s'.$p.'tambahAD'.$y}=0; 
		}			
		for ($x=30; $x <=74 ; $x++) { 
				${'ct'.$p.'YaAE'.$x} = 0;
				${'ct'.$p.'TidakAE'.$x} = 0;
				${'ct'.$p.'KadangAE'.$x} = 0;
				${'ct'.$p.'TerusAE'.$x} = 0;
				${'ct'.$p.'AdaAE'.$x} = 0;
				${'ct'.$p.'MenurunAE'.$x} = 0;
				${'ct'.$p.'BaikAE'.$x} = 0;
				${'ct'.$p.'JarangAE'.$x} = 0;
				${'ct'.$p.'AktifAE'.$x} = 0;
				${'ct'.$p.'PernahAE'.$x} = 0;
				${'ct'.$p.'PutihBAE'.$x} = 0;
				${'ct'.$p.'PutihSAE'.$x} = 0;
				${'ct'.$p.'PutihAE'.$x} = 0;
				${'ct'.$p.'PutihKAE'.$x} = 0;
				// 				${'ct'.$p.'YaAE'.$x} = 1;
				// ${'ct'.$p.'TidakAE'.$x} = 1;
				// ${'ct'.$p.'KadangAE'.$x} = 1;
				// ${'ct'.$p.'TerusAE'.$x} = 1;
				// ${'ct'.$p.'AdaAE'.$x} = 1;
				// ${'ct'.$p.'MenurunAE'.$x} = 1;
				// ${'ct'.$p.'BaikAE'.$x} = 1;
				// ${'ct'.$p.'JarangAE'.$x} = 1;
				// ${'ct'.$p.'AktifAE'.$x} = 1;
				// ${'ct'.$p.'PernahAE'.$x} = 1;
				// ${'ct'.$p.'PutihBAE'.$x} = 1;
				// ${'ct'.$p.'PutihSAE'.$x} = 1;
				// ${'ct'.$p.'PutihAE'.$x} = 1;
				// ${'ct'.$p.'PutihKAE'.$x} = 1;							
		}
		for ($y=1; $y <= 4 ; $y++) { 
				${'ct'.$p.'HamilBX'.$y} = 0;
				${'s'.$p.'tambahBX'.$y}=0; 
		}
		for ($y=1; $y <= 1 ; $y++) { 
				${'ct'.$p.'HamilBY'.$y} = 0;
				${'s'.$p.'tambahBY'.$y}=0; 
		}
		for ($x=77; $x <=78 ; $x++) {
				${'ct'.$p.'YaBZ'.$x} = 0;
				${'ct'.$p.'TidakBZ'.$x} = 0;
		}

		for ($y=34; $y <= 97 ; $y++) { 
				${'ct'.$p.'CB'.$y}=  0;
				${'s'.$p.'tambahCB'.$y}=0; 
		}
		for ($y=24; $y <= 168 ; $y++) { 
				${'ct'.$p.'CC'.$y} = 0;
				${'s'.$p.'tambahCC'.$y}=0; 
		}
		for ($y=34; $y <= 168 ; $y++) { 
				${'ct'.$p.'CD'.$y} = 0;
				${'s'.$p.'tambahCD'.$y}=0; 
		}
		for ($y=12; $y <= 42 ; $y++) { 
				${'ct'.$p.'CE'.$y} = 0;
				${'s'.$p.'tambahCE'.$y}=0; 
		}
		for ($x=83; $x <=86 ; $x++) { 
				${'ct'.$p.'YaCF'.$x} = 0;
				${'ct'.$p.'TidakCF'.$x} = 0;
				${'ct'.$p.'NormalCF'.$x} = 0;
				${'ct'.$p.'BaikCF'.$x} = 0;
				${'hasilEntropiTotalCF'.$x} = 0;
		}
		for ($y=80; $y <= 180 ; $y++) { 
				${'ct'.$p.'CJ'.$y} = 0;
				${'s'.$p.'tambahCJ'.$y}=0; 
		}
		for ($y=50; $y <= 90 ; $y++) { 
				${'ct'.$p.'CK'.$y} = 0;
				${'s'.$p.'tambahCK'.$y}=0; 
		}
		for ($y=26; $y <= 37 ; $y++) { 
				${'ct'.$p.'CL'.$y} = 0;
				${'s'.$p.'tambahCL'.$y}=0; 
		}
		for ($y=60; $y <= 88 ; $y++) { 
				${'ct'.$p.'CM'.$y} = 0;
				${'s'.$p.'tambahCM'.$y}=0; 
		}
		for ($y=16; $y <= 25 ; $y++) { 
				${'ct'.$p.'CN'.$y} = 0;
				${'s'.$p.'tambahCN'.$y}=0; 
		}
		for ($x=92; $x <=103 ; $x++) { 
				${'ct'.$p.'YaCO'.$x} = 0;
				${'ct'.$p.'TidakCO'.$x} = 0;
				${'ct'.$p.'NormalCO'.$x} = 0;
				${'ct'.$p.'KariesCO'.$x} = 0;
				${'ct'.$p.'BaikCO'.$x} = 0;
				${'ct'.$p.'CyanosisCO'.$x} = 0;
				${'ct'.$p.'TerabaCO'.$x} = 0;
				${'ct'.$p.'OedermaCO'.$x} = 0;
				${'ct'.$p.'AdaCO'.$x} = 0;
				${'hasilEntropiTotalCO'.$x} = 0;
				${'hasilEntropiOedermaCO'.$x} = 0;

				
		}
		for ($y=0; $y <= 38 ; $y++) { 
				${'ct'.$p.'DA'.$y} = 0;
				${'s'.$p.'tambahDA'.$y}=0; 
		}
		for ($y=2; $y <= 56 ; $y++) { 
				${'ct'.$p.'DB'.$y} = 0;
				${'s'.$p.'tambahDB'.$y}=0; 
		}
		for ($x=106; $x <=108 ; $x++) { 
				${'ct'.$p.'YaDC'.$x} = 0;
				${'ct'.$p.'TidakDC'.$x} = 0;
				${'ct'.$p.'AdaDC'.$x} = 0;
				${'ct'.$p.'NormalDC'.$x} = 0;
				${'ct'.$p.'BujurDC'.$x} = 0;
				${'ct'.$p.'KepalaDC'.$x} = 0;
				${'ct'.$p.'LintangDC'.$x} = 0;
				${'ct'.$p.'SungsangDC'.$x} = 0;
				${'ct'.$p.'KelainanDC'.$x} = 0;
		}
		for ($y=0; $y <= 1 ; $y++) { 
				${'ct'.$p.'DF'.$y} =0;
				${'s'.$p.'tambahDF'.$y}=0; 
		}
		for ($y=126; $y <= 158 ; $y++) { 
				${'ct'.$p.'DG'.$y} = 0;
				${'s'.$p.'tambahDG'.$y}=0; 
		}
		for ($x=111; $x <=111 ; $x++) { 
				${'ct'.$p.'YaDH'.$x} = 0;
				${'ct'.$p.'TidakDH'.$x} = 0;
				$hasilInformationGainDH=0;

		}
		${'max1DI'} = 0;
		$idmax1DI = 0;
		//${'idmax1DI'} = 0;
		for ($y=7; $y <= 15 ; $y++) { 
			for ($z=0; $z <100 ; $z++) { 
				 $cekNilai = $y.".".$z;
				 $floatval = floatval($cekNilai);
				//echo "cekNilai ".$cekNilai."<br>";
					${'ct'.$p.'DI'.$floatval} =0;{
	        		${'max1DI'} = 0;
	       			${'s'.$p.'tambahDI'.$floatval} = 1;
				}
			}
		}
			for ($y=0; $y <= 1 ; $y++) { 
				${'ct'.$p.'DJ'.$y} = 0;
				${'s'.$p.'tambahDJ'.$y} = 0;
		}
		for ($y=0; $y <= 1 ; $y++) { 
				${'ct'.$p.'DK'.$y} = 0;
				${'s'.$p.'tambahDK'.$y}=0; 
		}
		for ($x=115; $x <=115 ; $x++) { 
				${'ct'.$p.'ADL'.$x} = 0;
				${'ct'.$p.'BDL'.$x} = 0;
				${'ct'.$p.'ODL'.$x} = 0;
				${'ct'.$p.'ABDL'.$x} =0;
				$hasilInformationGainDL=0;
		}
		// for ($x=116; $x <=116 ; $x++) { 
		// 		${'ct'.$p.'ResikoSTDM'.$x} = 0;
		// 		${'ct'.$p.'ResikoTDM'.$x} = 0;
		// 		${'ct'.$p.'ResikoRDM'.$x} = 0;
		// }
	}
					for ($y=1; $y <= 6 ; $y++) { 
							${'ctHamil'.$y} =0;
					}
					for ($y=15; $y <= 42 ; $y++) { 
						${'ctUi'.$y} = 0;
					}
					for ($x=2; $x <=20 ; $x++) { 
						${'ctYa'.$x} = 0;
						${'ctTidak'.$x} = 0;
					}
					for ($x=21; $x <=21 ; $x++) { 
							${'ctL'.$x} = 0;
							${'ctP'.$x} = 0;
							${'ctLP'.$x} = 0;
							${'ctTidakLP'.$x} = 0;
					}
					for ($y=0; $y <= 4300 ; $y++) { 
							${'ctW'.$y} = 1;

					}
					for ($x=23; $x <=25 ; $x++) { 
							${'ctYaX'.$x} = 1;
							${'ctTidakX'.$x} = 0;
					}
					for ($y=0; $y <= 13 ; $y++) { 
							${'ctHamilAA'.$y} = 0;
					}
					for ($x=27; $x <=27 ; $x++) { 
							${'ctYaAB'.$x} = 0;
							${'ctTidakAB'.$x} = 0;
					}
					for ($y=15; $y <= 40 ; $y++) { 
							${'ctHamilAC'.$y} = 1;
					}
					for ($y=3; $y <= 10 ; $y++) { 
							${'ctHamilAD'.$y} = 1;
					}			
					for ($x=30; $x <=74 ; $x++) { 
							// ${'ctYaAE'.$x} = 0;
							// ${'ctTidakAE'.$x} = 0;
							// ${'ctKadangAE'.$x} = 0;
							// ${'ctTerusAE'.$x} = 0;
							// ${'ctAdaAE'.$x} = 0;
							// ${'ctMenurunAE'.$x} = 0;
							// ${'ctBaikAE'.$x} = 0;
							// ${'ctJarangAE'.$x} = 0;
							// ${'ctAktifAE'.$x} = 0;
							// ${'ctPernahAE'.$x} = 0;
							// ${'ctPutihBAE'.$x} = 0;
							// ${'ctPutihSAE'.$x} = 0;
							// ${'ctPutihAE'.$x} = 0;
							// ${'ctPutihKAE'.$x} = 0;		
														${'ctYaAE'.$x} = 1;
							${'ctTidakAE'.$x} = 1;
							${'ctKadangAE'.$x} = 1;
							${'ctTerusAE'.$x} = 1;
							${'ctAdaAE'.$x} = 1;
							${'ctMenurunAE'.$x} = 1;
							${'ctBaikAE'.$x} = 1;
							${'ctJarangAE'.$x} =1;
							${'ctAktifAE'.$x} = 1;
							${'ctPernahAE'.$x} = 1;
							${'ctPutihBAE'.$x} = 1;
							${'ctPutihSAE'.$x} = 1;
							${'ctPutihAE'.$x} = 1;
							${'ctPutihKAE'.$x} = 1;						
					}
					for ($y=1; $y <= 4 ; $y++) { 
							${'ctHamilBX'.$y} = 1;
					}
					for ($y=1; $y <= 1 ; $y++) { 
							${'ctHamilBY'.$y} = 1;
					}
					for ($x=77; $x <=78 ; $x++) {
							${'ctYaBZ'.$x} = 1;
							${'ctTidakBZ'.$x} = 1;
					}

					for ($y=34; $y <= 97 ; $y++) { 
							${'ctCB'.$y}= 1;
					}
					for ($y=24; $y <= 168 ; $y++) { 
							${'ctCC'.$y} = 1;
					}
					for ($y=34; $y <= 168 ; $y++) { 
							${'ctCD'.$y} = 1;
					}
					for ($y=12; $y <= 42 ; $y++) { 
							${'ctCE'.$y} = 1;
					}
					for ($x=83; $x <=86 ; $x++) { 
							${'ctYaCF'.$x} = 1;
							${'ctTidakCF'.$x} = 1;
							${'ctNormalCF'.$x} = 1;
							${'ctBaikCF'.$x} = 1;
					}
					for ($y=80; $y <= 180 ; $y++) { 
							${'ctCJ'.$y} = 1;
					}
					for ($y=50; $y <= 90 ; $y++) { 
							${'ctCK'.$y} = 1;
					}
					for ($y=26; $y <= 37 ; $y++) { 
							${'ctCL'.$y} = 1;
					}
					for ($y=60; $y <= 88 ; $y++) { 
							${'ctCM'.$y} = 1;
					}
					for ($y=16; $y <= 25 ; $y++) { 
							${'ctCN'.$y} = 1;
					}
					for ($x=92; $x <=103 ; $x++) { 
							${'ctYaCO'.$x} = 1;
							${'ctTidakCO'.$x} = 1;
							${'ctNormalCO'.$x} = 1;
							${'ctKariesCO'.$x} = 1;
							${'ctBaikCO'.$x} = 1;
							${'ctCyanosisCO'.$x} = 1;
							${'ctTerabaCO'.$x} = 1;
							${'ctOedermaCO'.$x} = 1;
							${'ctAdaCO'.$x} = 1;
					}
					for ($y=0; $y <= 38 ; $y++) { 
							${'ctDA'.$y} = 1;
					}
					for ($y=2; $y <= 56 ; $y++) { 
							${'ctDB'.$y} = 1;
					}
					for ($x=106; $x <=108 ; $x++) { 
							${'ctYaDC'.$x} = 1;
							${'ctTidakDC'.$x} = 1;
							${'ctNormalDC'.$x} = 1;
							${'ctBujurDC'.$x} = 1;
							${'ctKepalaDC'.$x} = 1;
							${'ctLintangDC'.$x} = 1;
							${'ctSungsangDC'.$x} = 1;
							${'ctKelainanDC'.$x} = 1;
					}
					for ($y=0; $y <= 1 ; $y++) { 
							${'ctDF'.$y} =1;
					}
					for ($y=126; $y <= 158 ; $y++) { 
							${'ctDG'.$y} = 1;
					}
					for ($x=111; $x <=111 ; $x++) { 
							${'ctYaDH'.$x} = 1;
							${'ctTidakDH'.$x} = 1;
					}
					${'max1DI'} = 1;
					$idmax1DI = 1;
					//${'idmax1DI'} = 1;
					for ($y=7; $y <= 15 ; $y++) { 
						for ($z=0; $z <100 ; $z++) { 
							 $cekNilai = $y.".".$z;
							 $floatval = floatval($cekNilai);
							//echo "cekNilai ".$cekNilai."<br>";
								${'ctDI'.$floatval} = 1;{
				        		${'max1DI'} = 1;
				       			$idmax1DI = 1;
							}
						}
					}
					for ($y=0; $y <= 1 ; $y++) { 
							${'ctDJ'.$y} = 1;
					}
					for ($y=0; $y <= 1 ; $y++) { 
							${'ctDK'.$y} = 1;
					}
					for ($x=115; $x <=115 ; $x++) { 
							${'ctADL'.$x} = 1;
							${'ctBDL'.$x} = 1;
							${'ctODL'.$x} = 1;
							${'ctABDL'.$x} = 1;
					}
					// for ($x=116; $x <=116 ; $x++) { 
					// 		${'ct'.$p.'ResikoSTDM'.$x} = 0;
					// 		${'ct'.$p.'ResikoTDM'.$x} = 0;
					// 		${'ct'.$p.'ResikoRDM'.$x} = 0;
					// }

for ($l=0; $l < $banyakBaris ; $l++) { 
	for ($y=1; $y <= 6 ; $y++) { 
		if ($nilai[$l] [0] == $y) {
			${'tambah'.$y} = 1;
			${'ctHamil'.$y} += ${'tambah'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambah'.$y} = 1;
				${'ct1Hamil'.$y} += ${'s1tambah'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambah'.$y} = 1;
				${'ct2Hamil'.$y} += ${'s2tambah'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambah'.$y} = 1;
				${'ct3Hamil'.$y} += ${'s3tambah'.$y};
			}
		}
	}
	for ($y=15; $y <= 42 ; $y++) { 
		if ($nilai[$l] [1] == $y) {
			${'tambahb'.$y} = 1;
			${'ctUi'.$y} += ${'tambahb'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahb'.$y} = 1;
				${'ct1Ui'.$y} += ${'s1tambahb'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahb'.$y} = 1;
				${'ct2Ui'.$y} += ${'s2tambahb'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahb'.$y} = 1;
				${'ct3Ui'.$y} += ${'s3tambahb'.$y};
			}
		}
	}
	for ($x=2; $x <=20 ; $x++) { 
		if($nilai[$l] [$x]=="ya"){
			$tambahYa = 1;
			${'ctYa'.$x} += $tambahYa;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$tambah1Ya = 1;
				${'ct1Ya'.$x} += $tambah1Ya;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$tambah2Ya = 1;
				${'ct2Ya'.$x} += $tambah2Ya;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$tambah3Ya = 1;
				${'ct3Ya'.$x} += $tambah3Ya;
			}
		}elseif($nilai[$l] [$x]=="tidak"){
			$tambahTidak = 1;
			${'ctTidak'.$x} += $tambahTidak;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$tambah1Tidak = 1;
				${'ct1Tidak'.$x} += $tambah1Tidak;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$tambah2Tidak = 1;
				${'ct2Tidak'.$x} += $tambah2Tidak;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$tambah3Tidak = 1;
				${'ct3Tidak'.$x} += $tambah3Tidak;
			}
		}
	}
	for ($x=21; $x <=21 ; $x++) { 
		if($nilai[$l] [$x]=="L"){
			$tambahL = 1;
			${'ctL'.$x} += $tambahL;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahL = 1;
				${'ct1L'.$x} += $s1tambahL;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahL = 1;
				${'ct2L'.$x} += $s2tambahL;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahL = 1;
				${'ct3L'.$x} += $s3tambahL;
			}
		}elseif($nilai[$l] [$x]=="P"){
			$tambahP = 1;
			${'ctP'.$x} += $tambahP;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahP = 1;
				${'ct1P'.$x} += $s1tambahP;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahP = 1;
				${'ct2P'.$x} += $s2tambahP;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahP = 1;
				${'ct3P'.$x} += $s3tambahP;
			}
		}elseif($nilai[$l] [$x]=="tidak"){
			$tambahTidakLP = 1;
			${'ctTidakLP'.$x} += $tambahTidakLP;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahLP = 1;
				${'ct1LP'.$x} += $s1tambahLP;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahLP = 1;
				${'ct2LP'.$x} += $s2tambahLP;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahLP = 1;
				${'ct3LP'.$x} += $s3tambahLP;
			}
		}
	}
	for ($y=0; $y <= 4300 ; $y++) { 
		if ($nilai[$l] [22] == $y) {
			${'tambahw'.$y} = 1;
			${'ctW'.$y} += ${'tambahw'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahw'.$y} = 1;
				${'ct1W'.$y} += ${'s1tambahw'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahw'.$y} = 1;
				${'ct2W'.$y} += ${'s2tambahw'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahw'.$y} = 1;
				${'ct3W'.$y} += ${'s3tambahw'.$y};
			}
		}
	}
	for ($x=23; $x <=25 ; $x++) { 
		if($nilai[$l] [$x]=="ya"){
			$tambahYaX = 1;
			${'ctYaX'.$x} += $tambahYaX;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahYaX = 1;
				${'ct1YaX'.$x} += $s1tambahYaX;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahYaX = 1;
				${'ct2YaX'.$x} += $s2tambahYaX;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahYaX = 1;
				${'ct3YaX'.$x} += $s3tambahYaX;
			}
		}elseif($nilai[$l] [$x]=="tidak"){
			$tambahTidakX = 1;
			${'ctTidakX'.$x} += $tambahTidakX;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahTidakX = 1;
				${'ct1TidakX'.$x} += $s1tambahTidakX;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahTidakX = 1;
				${'ct2TidakX'.$x} += $s2tambahTidakX;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahTidakX = 1;
				${'ct3TidakX'.$x} += $s3tambahTidakX;
			}
		}
	}
	for ($y=0; $y <= 13 ; $y++) { 
		if ($nilai[$l] [26] == $y) {
			${'tambahAA'.$y} = 1;
			${'ctHamilAA'.$y} += ${'tambahAA'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahAA'.$y} = 1;
				${'ct1HamilAA'.$y} += ${'s1tambahAA'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahAA'.$y} = 1;
				${'ct2HamilAA'.$y} += ${'s2tambahAA'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahAA'.$y} = 1;
				${'ct3HamilAA'.$y} += ${'s3tambahAA'.$y};
			}
		}
	}
	for ($x=27; $x <=27 ; $x++) { 
		if($nilai[$l] [$x]=="ya"){
			$tambahYaAB = 1;
			${'ctYaAB'.$x} += $tambahYaAB;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahYaAB = 1;
				${'ct1YaAB'.$x} += $s1tambahYaAB;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahYaAB = 1;
				${'ct2YaAB'.$x} += $s2tambahYaAB;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahYaAB = 1;
				${'ct3YaAB'.$x} += $s3tambahYaAB;
			}
		}elseif($nilai[$l] [$x]=="tidak"){
			$tambahTidakAB = 1;
			${'ctTidakAB'.$x} += $tambahTidakAB;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahTidakAB = 1;
				${'ct1TidakAB'.$x} += $s1tambahTidakAB;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahTidakAB = 1;
				${'ct2TidakAB'.$x} += $s2tambahTidakAB;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahTidakAB = 1;
				${'ct3TidakAB'.$x} += $s3tambahTidakAB;
			}
		}
	}
	for ($y=15; $y <= 40 ; $y++) { 
		if ($nilai[$l] [28] == $y) {
			${'tambahAC'.$y} = 1;
			${'ctHamilAC'.$y} += ${'tambahAC'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahAC'.$y} = 1;
				${'ct1HamilAC'.$y} += ${'s1tambahAC'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahAC'.$y} = 1;
				${'ct2HamilAC'.$y} += ${'s2tambahAC'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahAC'.$y} = 1;
				${'ct3HamilAC'.$y} += ${'s3tambahAC'.$y};
			}
		}
	}
	for ($y=3; $y <= 10 ; $y++) { 
		if ($nilai[$l] [29] == $y) {
			${'tambahAD'.$y} = 1;
			${'ctHamilAD'.$y} += ${'tambahAD'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahAD'.$y} = 1;
				${'ct1HamilAD'.$y} += ${'s1tambahAD'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahAD'.$y} = 1;
				${'ct2HamilAD'.$y} += ${'s2tambahAD'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahAD'.$y} = 1;
				${'ct3HamilAD'.$y} += ${'s3tambahAD'.$y};
			}
		}
	}			
	for ($x=30; $x <=74 ; $x++) { 
		if($nilai[$l] [$x]=="ya"){
			$tambahYaAE = 1;
			${'ctYaAE'.$x} += $tambahYaAE;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahYaAE = 1;
				${'ct1YaAE'.$x} += $s1tambahYaAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahYaAE = 1;
				${'ct2YaAE'.$x} += $s2tambahYaAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahYaAE = 1;
				${'ct3YaAE'.$x} += $s3tambahYaAE;
			}
		}elseif($nilai[$l] [$x]=="tidak"){
			$tambahTidakAE = 1;
			${'ctTidakAE'.$x} += $tambahTidakAE;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahTidakAE = 1;
				${'ct1TidakAE'.$x} += $s1tambahTidakAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahTidakAE = 1;
				${'ct2TidakAE'.$x} += $s2tambahTidakAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahTidakAE = 1;
				${'ct3TidakAE'.$x} += $s3tambahTidakAE;
			}
		}elseif($nilai[$l] [$x]=="kadang-kadang"){
			$tambahKadangAE = 1;
			${'ctKadangAE'.$x} += $tambahKadangAE;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahKadangAE = 1;
				${'ct1KadangAE'.$x} += $s1tambahKadangAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahKadangAE = 1;
				${'ct2KadangAE'.$x} += $s2tambahKadangAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahKadangAE = 1;
				${'ct3KadangAE'.$x} += $s3tambahKadangAE;
			}
		}elseif($nilai[$l] [$x]=="terus-menerus"){
			$tambahTerusAE = 1;
			${'ctTerusAE'.$x} += $tambahTerusAE;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahTerusAE = 1;
				${'ct1TerusAE'.$x} += $s1tambahTerusAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahTerusAE = 1;
				${'ct2TerusAE'.$x} += $s2tambahTerusAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahTerusAE = 1;
				${'ct3TerusAE'.$x} += $s3tambahTerusAE;
			}
		}elseif($nilai[$l] [$x]=="ada"){
			$tambahAdaAE = 1;
			${'ctAdaAE'.$x} += $tambahAdaAE;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahAdaAE = 1;
				${'ct1AdaAE'.$x} += $s1tambahAdaAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahAdaAE = 1;
				${'ct2AdaAE'.$x} += $s2tambahAdaAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahAdaAE = 1;
				${'ct3AdaAE'.$x} += $s3tambahAdaAE;
			}
		}elseif($nilai[$l] [$x]=="menurun"){
			$tambahMenurunAE = 1;
			${'ctMenurunAE'.$x} += $tambahMenurunAE;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahMenurunAE = 1;
				${'ct1MenurunAE'.$x} += $s1tambahMenurunAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahMenurunAE = 1;
				${'ct2MenurunAE'.$x} += $s2tambahMenurunAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahMenurunAE = 1;
				${'ct3MenurunAE'.$x} += $s3tambahMenurunAE;
			}
		}elseif($nilai[$l] [$x]=="baik"){
			$tambahBaikAE = 1;
			${'ctBaikAE'.$x} += $tambahBaikAE;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahBaikAE = 1;
				${'ct1BaikAE'.$x} += $s1tambahBaikAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahBaikAE = 1;
				${'ct2BaikAE'.$x} += $s2tambahBaikAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahBaikAE = 1;
				${'ct3BaikAE'.$x} += $s3tambahBaikAE;
			}
		}elseif($nilai[$l] [$x]=="jarang"){
			$tambahJarangAE = 1;
			${'ctJarangAE'.$x} += $tambahJarangAE;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahJarangAE = 1;
				${'ct1JarangAE'.$x} += $s1tambahJarangAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahJarangAE = 1;
				${'ct2JarangAE'.$x} += $s2tambahJarangAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahJarangAE = 1;
				${'ct3JarangAE'.$x} += $s3tambahJarangAE;
			}
		}elseif($nilai[$l] [$x]=="aktif"){
			$tambahAktifAE = 1;
			${'ctAktifAE'.$x} += $tambahAktifAE;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahAktifAE = 1;
				${'ct1AktifAE'.$x} += $s1tambahAktifAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahAktifAE = 1;
				${'ct2AktifAE'.$x} += $s2tambahAktifAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahAktifAE = 1;
				${'ct3AktifAE'.$x} += $s3tambahAktifAE;
			}
		}elseif($nilai[$l] [$x]=="pernah"){
			$tambahPernahAE = 1;
			${'ctPernahAE'.$x} += $tambahPernahAE;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahPernahAE = 1;
				${'ct1PernahAE'.$x} += $s1tambahPernahAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahPernahAE = 1;
				${'ct2PernahAE'.$x} += $s2tambahPernahAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahPernahAE = 1;
				${'ct3PernahAE'.$x} += $s3tambahPernahAE;
			}
		}elseif($nilai[$l] [$x]=="putih bening"){
			$tambahPutihBAE = 1;
			${'ctPutihBAE'.$x} += $tambahPutihBAE;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahPutihBAE = 1;
				${'ct1PutihBAE'.$x} += $s1tambahPutihBAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahPutihBAE = 1;
				${'ct2PutihBAE'.$x} += $s2tambahPutihBAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahPutihBAE = 1;
				${'ct3PutihBAE'.$x} += $s3tambahPutihBAE;
			}
		}elseif($nilai[$l] [$x]=="putih susu"){
			$tambahPutihSAE = 1;
			${'ctPutihSAE'.$x} += $tambahPutihSAE;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahPutihSAE = 1;
				${'ct1PutihSAE'.$x} += $s1tambahPutihSAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahPutihSAE = 1;
				${'ct2PutihSAE'.$x} += $s2tambahPutihSAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahPutihSAE = 1;
				${'ct3PutihSAE'.$x} += $s3tambahPutihSAE;
			}
		}elseif($nilai[$l] [$x]=="putih"){
			$tambahPutihAE = 1;
			${'ctPutihAE'.$x} += $tambahPutihAE;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahPutihAE = 1;
				${'ct1PutihAE'.$x} += $s1tambahPutihAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahPutihAE = 1;
				${'ct2PutihAE'.$x} += $s2tambahPutihAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahPutihAE = 1;
				${'ct3PutihAE'.$x} += $s3tambahPutihAE;
			}
		}elseif($nilai[$l] [$x]=="putih kental"){
			$tambahPutihKAE = 1;
			${'ctPutihKAE'.$x} += $tambahPutihKAE;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahPutihKAE = 1;
				${'ct1PutihKAE'.$x} += $s1tambahPutihKAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahPutihKAE = 1;
				${'ct2PutihKAE'.$x} += $s2tambahPutihKAE;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahPutihKAE = 1;
				${'ct3PutihKAE'.$x} += $s3tambahPutihKAE;
			}
		}
	}
	for ($y=1; $y <= 4 ; $y++) { 
		if ($nilai[$l] [75] == $y) {
			${'tambahBX'.$y} = 1;
			${'ctHamilBX'.$y} += ${'tambahBX'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahBX'.$y} = 1;
				${'ct1HamilBX'.$y} += ${'s1tambahBX'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahBX'.$y} = 1;
				${'ct2HamilBX'.$y} += ${'s2tambahBX'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahBX'.$y} = 1;
				${'ct3HamilBX'.$y} += ${'s3tambahBX'.$y};
			}
		}
	}
	for ($y=1; $y <= 1 ; $y++) { 
		if ($nilai[$l] [76] == $y) {
			${'tambahBY'.$y} = 1;
			${'ctHamilBY'.$y} += ${'tambahBY'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahBY'.$y} = 1;
				${'ct1HamilBY'.$y} += ${'s1tambahBY'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahBY'.$y} = 1;
				${'ct2HamilBY'.$y} += ${'s2tambahBY'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahBY'.$y} = 1;
				${'ct3HamilBY'.$y} += ${'s3tambahBY'.$y};
			}
		}
	}
	for ($x=77; $x <=78 ; $x++) { 
		if($nilai[$l] [$x]=="ya"){
			$tambahYaBZ = 1;
			${'ctYaBZ'.$x} += $tambahYaBZ;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahYaBZ = 1;
				${'ct1YaBZ'.$x} += $s1tambahYaBZ;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahYaBZ = 1;
				${'ct2YaBZ'.$x} += $s2tambahYaBZ;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahYaBZ = 1;
				${'ct3YaBZ'.$x} += $s3tambahYaBZ;
			}
		}elseif($nilai[$l] [$x]=="tidak"){
			$tambahTidakBZ = 1;
			${'ctTidakBZ'.$x} += $tambahTidakBZ;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahTidakBZ = 1;
				${'ct1TidakBZ'.$x} += $s1tambahTidakBZ;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahTidakBZ = 1;
				${'ct2TidakBZ'.$x} += $s2tambahTidakBZ;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahTidakBZ = 1;
				${'ct3TidakBZ'.$x} += $s3tambahTidakBZ;
			}
		}
	}

	for ($y=34; $y <= 97 ; $y++) { 
		if ($nilai[$l] [79] == $y) {
			${'tambahCB'.$y} = 1;
			${'ctCB'.$y} += ${'tambahCB'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahCB'.$y} = 1;
				${'ct1CB'.$y} += ${'s1tambahCB'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahCB'.$y} = 1;
				${'ct2CB'.$y} += ${'s2tambahCB'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahCB'.$y} = 1;
				${'ct3CB'.$y} += ${'s3tambahCB'.$y};
			}
		}
	}
	for ($y=24; $y <= 168 ; $y++) { 
		if ($nilai[$l] [80] == $y) {
			${'tambahCC'.$y} = 1;
			${'ctCC'.$y} += ${'tambahCC'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahCC'.$y} = 1;
				${'ct1CC'.$y} += ${'s1tambahCC'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahCC'.$y} = 1;
				${'ct2CC'.$y} += ${'s2tambahCC'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahCC'.$y} = 1;
				${'ct3CC'.$y} += ${'s3tambahCC'.$y};
			}
		}
	}
	for ($y=34; $y <= 168 ; $y++) { 
		if ($nilai[$l] [81] == $y) {
			${'tambahCD'.$y} = 1;
			${'ctCD'.$y} += ${'tambahCD'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahCD'.$y} = 1;
				${'ct1CD'.$y} += ${'s1tambahCD'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahCD'.$y} = 1;
				${'ct2CD'.$y} += ${'s2tambahCD'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahCD'.$y} = 1;
				${'ct3CD'.$y} += ${'s3tambahCD'.$y};
			}
		}
	}
	for ($y=12; $y <= 42 ; $y++) { 
		if ($nilai[$l] [82] == $y) {
			${'tambahCE'.$y} = 1;
			${'ctCE'.$y} += ${'tambahCE'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahCE'.$y} = 1;
				${'ct1CE'.$y} += ${'s1tambahCE'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahCE'.$y} = 1;
				${'ct2CE'.$y} += ${'s2tambahCE'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahCE'.$y} = 1;
				${'ct3CE'.$y} += ${'s3tambahCE'.$y};
			}
		}
	}
	for ($x=83; $x <=86 ; $x++) { 
		if($nilai[$l] [$x]=="ya"){
			$tambahYaCF = 1;
			${'ctYaCF'.$x} += $tambahYaCF;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahYaCF = 1;
				${'ct1YaCF'.$x} += $s1tambahYaCF;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahYaCF = 1;
				${'ct2YaCF'.$x} += $s2tambahYaCF;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahYaCF = 1;
				${'ct3YaCF'.$x} += $s3tambahYaCF;
			}
		}elseif($nilai[$l] [$x]=="tidak"){
			$tambahTidakCF = 1;
			${'ctTidakCF'.$x} += $tambahTidakCF;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahTidakCF = 1;
				${'ct1TidakCF'.$x} += $s1tambahTidakCF;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahTidakCF = 1;
				${'ct2TidakCF'.$x} += $s2tambahTidakCF;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahTidakCF = 1;
				${'ct3TidakCF'.$x} += $s3tambahTidakCF;
			}
		}elseif($nilai[$l] [$x]=="normal"){
			$tambahTidakCF = 1;
			${'ctNormalCF'.$x} += $tambahTidakCF;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahTidakCF = 1;
				${'ct1NormalCF'.$x} += $s1tambahTidakCF;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahTidakCF = 1;
				${'ct2NormalCF'.$x} += $s2tambahTidakCF;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahTidakCF = 1;
				${'ct3NormalCF'.$x} += $s3tambahTidakCF;
			}
		}elseif($nilai[$l] [$x]=="baik"){
			$tambahTidakCF = 1;
			${'ctBaikCF'.$x} += $tambahTidakCF;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahTidakCF = 1;
				${'ct1BaikCF'.$x} += $s1tambahTidakCF;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahTidakCF = 1;
				${'ct2BaikCF'.$x} += $s2tambahTidakCF;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahTidakCF = 1;
				${'ct3BaikCF'.$x} += $s3tambahTidakCF;
			}
		}
	}
	for ($y=80; $y <= 180 ; $y++) { 
		if ($nilai[$l] [87] == $y) {
			${'tambahCJ'.$y} = 1;
			${'ctCJ'.$y} += ${'tambahCJ'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahCJ'.$y} = 1;
				${'ct1CJ'.$y} += ${'s1tambahCJ'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahCJ'.$y} = 1;
				${'ct2CJ'.$y} += ${'s2tambahCJ'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahCJ'.$y} = 1;
				${'ct3CJ'.$y} += ${'s3tambahCJ'.$y};
			}
		}
	}
	for ($y=50; $y <= 90 ; $y++) { 
		if ($nilai[$l] [88] == $y) {
			${'tambahCK'.$y} = 1;
			${'ctCK'.$y} += ${'tambahCK'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahCK'.$y} = 1;
				${'ct1CK'.$y} += ${'s1tambahCK'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahCK'.$y} = 1;
				${'ct2CK'.$y} += ${'s2tambahCK'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahCK'.$y} = 1;
				${'ct3CK'.$y} += ${'s3tambahCK'.$y};
			}
		}
	}
	for ($y=26; $y <= 37 ; $y++) { 
		if ($nilai[$l] [89] == $y) {
			${'tambahCL'.$y} = 1;
			${'ctCL'.$y} += ${'tambahCL'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahCL'.$y} = 1;
				${'ct1CL'.$y} += ${'s1tambahCL'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahCL'.$y} = 1;
				${'ct2CL'.$y} += ${'s2tambahCL'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahCL'.$y} = 1;
				${'ct3CL'.$y} += ${'s3tambahCL'.$y};
			}
		}
	}
	for ($y=60; $y <= 88 ; $y++) { 
		if ($nilai[$l] [90] == $y) {
			${'tambahCM'.$y} = 1;
			${'ctCM'.$y} += ${'tambahCM'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahCM'.$y} = 1;
				${'ct1CM'.$y} += ${'s1tambahCM'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahCM'.$y} = 1;
				${'ct2CM'.$y} += ${'s2tambahCM'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahCM'.$y} = 1;
				${'ct3CM'.$y} += ${'s3tambahCM'.$y};
			}
		}
	}
	for ($y=16; $y <= 25 ; $y++) { 
		if ($nilai[$l] [91] == $y) {
			${'tambahCN'.$y} = 1;
			${'ctCN'.$y} += ${'tambahCN'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahCN'.$y} = 1;
				${'ct1CN'.$y} += ${'s1tambahCN'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahCN'.$y} = 1;
				${'ct2CN'.$y} += ${'s2tambahCN'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahCN'.$y} = 1;
				${'ct3CN'.$y} += ${'s3tambahCN'.$y};
			}
		}
	}
	for ($x=92; $x <=103 ; $x++) { 
		if($nilai[$l] [$x]=="ya"){
			$tambahYaCO = 1;
			${'ctYaCO'.$x} += $tambahYaCO;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahYaCO = 1;
				${'ct1YaCO'.$x} += $s1tambahYaCO;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahYaCO = 1;
				${'ct2YaCO'.$x} += $s2tambahYaCO;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahYaCO = 1;
				${'ct3YaCO'.$x} += $s3tambahYaCO;
			}
		}elseif($nilai[$l] [$x]=="tidak"){
			$tambahTidakCO = 1;
			${'ctTidakCO'.$x} += $tambahTidakCO;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahTidakCO = 1;
				${'ct1TidakCO'.$x} += $s1tambahTidakCO;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahTidakCO = 1;
				${'ct2TidakCO'.$x} += $s2tambahTidakCO;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahTidakCO = 1;
				${'ct3TidakCO'.$x} += $s3tambahTidakCO;
			}
		}elseif($nilai[$l] [$x]=="normal"){
			$tambahNormalCO = 1;
			${'ctNormalCO'.$x} += $tambahNormalCO;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahNormalCO = 1;
				${'ct1NormalCO'.$x} += $s1tambahNormalCO;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahNormalCO = 1;
				${'ct2NormalCO'.$x} += $s2tambahNormalCO;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahNormalCO = 1;
				${'ct3NormalCO'.$x} += $s3tambahNormalCO;
			}
		}elseif($nilai[$l] [$x]=="karies"){
			$tambahKariesCO = 1;
			${'ctKariesCO'.$x} += $tambahKariesCO;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahKariesCO = 1;
				${'ct1KariesCO'.$x} += $s1tambahKariesCO;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahKariesCO = 1;
				${'ct2KariesCO'.$x} += $s2tambahKariesCO;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahKariesCO = 1;
				${'ct3KariesCO'.$x} += $s3tambahKariesCO;
			}
		}elseif($nilai[$l] [$x]=="cyanosis"){
			$tambahCyanosisCO = 1;
			${'ctCyanosisCO'.$x} += $tambahCyanosisCO;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahCyanosisCO = 1;
				${'ct1CyanosisCO'.$x} += $s1tambahCyanosisCO;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahCyanosisCO = 1;
				${'ct2CyanosisCO'.$x} += $s2tambahCyanosisCO;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahCyanosisCO = 1;
				${'ct3CyanosisCO'.$x} += $s3tambahCyanosisCO;
			}
		}elseif($nilai[$l] [$x]=="teraba"){
			$tambahTerabaCO = 1;
			${'ctTerabaCO'.$x} += $tambahTerabaCO;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahTerabaCO = 1;
				${'ct1TerabaCO'.$x} += $s1tambahTerabaCO;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahTerabaCO = 1;
				${'ct2TerabaCO'.$x} += $s2tambahTerabaCO;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahTerabaCO = 1;
				${'ct3TerabaCO'.$x} += $s3tambahTerabaCO;
			}
		}elseif($nilai[$l] [$x]=="oederma"){
			$tambahOedermaCO = 1;
			${'ctOedermaCO'.$x} += $tambahOedermaCO;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahOedermaCO = 1;
				${'ct1OedermaCO'.$x} += $s1tambahOedermaCO;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahOedermaCO = 1;
				${'ct2OedermaCO'.$x} += $s2tambahOedermaCO;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahOedermaCO = 1;
				${'ct3OedermaCO'.$x} += $s3tambahOedermaCO;
			}
		}elseif($nilai[$l] [$x]=="ada"){
			$tambahAdaCO = 1;
			${'ctAdaCO'.$x} += $tambahAdaCO;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahAdaCO = 1;
				${'ct1AdaCO'.$x} += $s1tambahAdaCO;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahAdaCO = 1;
				${'ct2AdaCO'.$x} += $s2tambahAdaCO;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahAdaCO = 1;
				${'ct3AdaCO'.$x} += $s3tambahAdaCO;
			}
		}
	}
	for ($y=0; $y <= 38 ; $y++) { 
		if ($nilai[$l] [104] == $y) {
			${'tambahDA'.$y} = 1;
			${'ctDA'.$y} += ${'tambahDA'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahDA'.$y} = 1;
				${'ct1DA'.$y} += ${'s1tambahDA'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahDA'.$y} = 1;
				${'ct2DA'.$y} += ${'s2tambahDA'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahDA'.$y} = 1;
				${'ct3DA'.$y} += ${'s3tambahDA'.$y};
			}
		}
	}
	for ($y=2; $y <= 56 ; $y++) { 
		if ($nilai[$l] [105] == $y) {
			${'tambahDB'.$y} = 1;
			${'ctDB'.$y} += ${'tambahDB'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahDB'.$y} = 1;
				${'ct1DB'.$y} += ${'s1tambahDB'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahDB'.$y} = 1;
				${'ct2DB'.$y} += ${'s2tambahDB'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahDB'.$y} = 1;
				${'ct3DB'.$y} += ${'s3tambahDB'.$y};
			}
		}
	}
	for ($x=106; $x <=108 ; $x++) { 
		if($nilai[$l] [$x]=="ya"){
			$tambahYaDC= 1;
			${'ctYaDC'.$x} += $tambahYaDC;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahYaDC= 1;
				${'ct1YaDC'.$x} += $s1tambahYaDC;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahYaDC= 1;
				${'ct2YaDC'.$x} += $s2tambahYaDC;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahYaDC= 1;
				${'ct3YaDC'.$x} += $s3tambahYaDC;
			}
		}elseif($nilai[$l] [$x]=="tidak"){
			$tambahTidakDC = 1;
			${'ctTidakDC'.$x} += $tambahTidakDC;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahTidakDC = 1;
				${'ct1TidakDC'.$x} += $s1tambahTidakDC;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahTidakDC = 1;
				${'ct2TidakDC'.$x} += $s2tambahTidakDC;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahTidakDC = 1;
				${'ct3TidakDC'.$x} += $s3tambahTidakDC;
			}
		}elseif($nilai[$l] [$x]=="normal"){
			$tambahNormalDC = 1;
			${'ctNormalDC'.$x} += $tambahNormalDC;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahNormalDC = 1;
				${'ct1NormalDC'.$x} += $s1tambahNormalDC;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahNormalDC = 1;
				${'ct2NormalDC'.$x} += $s2tambahNormalDC;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahNormalDC = 1;
				${'ct3NormalDC'.$x} += $s3tambahNormalDC;
			}
		}elseif($nilai[$l] [$x]=="bujur"){
			$tambahBujurDC = 1;
			${'ctBujurDC'.$x} += $tambahBujurDC;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahBujurDC = 1;
				${'ct1BujurDC'.$x} += $s1tambahBujurDC;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahBujurDC = 1;
				${'ct2BujurDC'.$x} += $s2tambahBujurDC;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahBujurDC = 1;
				${'ct3BujurDC'.$x} += $s3tambahBujurDC;
			}
		}elseif($nilai[$l] [$x]=="kepala"){
			$tambahKepalaDC = 1;
			${'ctKepalaDC'.$x} += $tambahKepalaDC;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahKepalaDC = 1;
				${'ct1KepalaDC'.$x} += $s1tambahKepalaDC;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahKepalaDC = 1;
				${'ct2KepalaDC'.$x} += $s2tambahKepalaDC;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahKepalaDC = 1;
				${'ct3KepalaDC'.$x} += $s3tambahKepalaDC;
			}
		}elseif($nilai[$l] [$x]=="lintang"){
			$tambahLintangDC = 1;
			${'ctLintangDC'.$x} += $tambahLintangDC;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahLintangDC = 1;
				${'ct1LintangDC'.$x} += $s1tambahLintangDC;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahLintangDC = 1;
				${'ct2LintangDC'.$x} += $s2tambahLintangDC;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahLintangDC = 1;
				${'ct3LintangDC'.$x} += $s3tambahLintangDC;
			}
		}elseif($nilai[$l] [$x]=="sungsang"){
			$tambahSungsangDC = 1;
			${'ctSungsangDC'.$x} += $tambahSungsangDC;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahSungsangDC = 1;
				${'ct1SungsangDC'.$x} += $s1tambahSungsangDC;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahSungsangDC = 1;
				${'ct2SungsangDC'.$x} += $s2tambahSungsangDC;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahSungsangDC = 1;
				${'ct3SungsangDC'.$x} += $s3tambahSungsangDC;
			}
		}elseif($nilai[$l] [$x]=="kelainan"){
			$tambahKelainanDC = 1;
			${'ctKelainanDC'.$x} += $tambahKelainanDC;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahKelainanDC = 1;
				${'ct1KelainanDC'.$x} += $s1tambahKelainanDC;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahKelainanDC = 1;
				${'ct2KelainanDC'.$x} += $s2tambahKelainanDC;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahKelainanDC = 1;
				${'ct3KelainanDC'.$x} += $s3tambahKelainanDC;
			}
		}
	}
	for ($y=0; $y <= 1 ; $y++) { 
		if ($nilai[$l] [109] == $y) {
			${'tambahDF'.$y} = 1;
			${'ctDF'.$y} += ${'tambahDF'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahDF'.$y} = 1;
				${'ct1DF'.$y} += ${'s1tambahDF'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahDF'.$y} = 1;
				${'ct2DF'.$y} += ${'s2tambahDF'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahDF'.$y} = 1;
				${'ct3DF'.$y} += ${'s3tambahDF'.$y};
			}
		}
	}
	for ($y=126; $y <= 158 ; $y++) { 
		if ($nilai[$l] [110] == $y) {
			${'tambahDG'.$y} = 1;
			${'ctDG'.$y} += ${'tambahDG'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahDG'.$y} = 1;
				${'ct1DG'.$y} += ${'s1tambahDG'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahDG'.$y} = 1;
				${'ct2DG'.$y} += ${'s2tambahDG'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahDG'.$y} = 1;
				${'ct3DG'.$y} += ${'s3tambahDG'.$y};
			}
		}
	}
	for ($x=111; $x <=111 ; $x++) { 
		if($nilai[$l] [$x]=="ya"){
			$tambahYaDH = 1;
			${'ctYaDH'.$x} += $tambahYaDH;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahYaDH = 1;
				${'ct1YaDH'.$x} += $s1tambahYaDH;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahYaDH = 1;
				${'ct2YaDH'.$x} += $s2tambahYaDH;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahYaDH = 1;
				${'ct3YaDH'.$x} += $s3tambahYaDH;
			}
		}elseif($nilai[$l] [$x]=="tidak"){
			$tambahTidakDH = 1;
			${'ctTidakDH'.$x} += $tambahTidakDH;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahTidakDH = 1;
				${'ct1TidakDH'.$x} += $s1tambahTidakDH;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahTidakDH = 1;
				${'ct2TidakDH'.$x} += $s2tambahTidakDH;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahTidakDH = 1;
				${'ct3TidakDH'.$x} += $s3tambahTidakDH;
			}
		}
	}
	${'max1DI'} = 0;
	$idmax1DI = 0;
	//${'idmax1DI'} = 0;
	for ($y=7; $y <= 15 ; $y++) { 
		for ($z=0; $z <100 ; $z++) { 
			 $cekNilai = $y.".".$z;
			 $floatval = floatval($cekNilai);
			//echo "cekNilai ".$cekNilai."<br>";
			if ($nilai[$l] [112] == $floatval) {
				${'tambahDI'.$floatval} = 1;
				${'ctDI'.$floatval} += ${'tambahDI'.$floatval};
			    if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
			    	${'s1tambahDI'.$floatval} = 1;
					${'ct1DI'.$y} += ${'s1tambahDI'.$floatval};
				}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
			    	${'s2tambahDI'.$floatval} = 1;
					${'ct2DI'.$y} += ${'s2tambahDI'.$floatval};
				}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
			    	${'s3tambahDI'.$floatval} = 1;
					${'ct3DI'.$y} += ${'s3tambahDI'.$floatval};
				}
			}
		}
	}
	for ($y=0; $y <= 1 ; $y++) { 
		if ($nilai[$l] [113] == $y) {
			${'tambahDJ'.$y} = 1;
			${'ctDJ'.$y} += ${'tambahDJ'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahDJ'.$y} = 1;
				${'ct1DJ'.$y} += ${'s1tambahDJ'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahDJ'.$y} = 1;
				${'ct2DJ'.$y} += ${'s2tambahDJ'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahDJ'.$y} = 1;
				${'ct3DJ'.$y} += ${'s3tambahDJ'.$y};
			}
		}
	}
	for ($y=0; $y <= 1 ; $y++) { 
		if ($nilai[$l] [114] == $y) {
			${'tambahDK'.$y} = 1;
			${'ctDK'.$y} += ${'tambahDK'.$y};
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				${'s1tambahDK'.$y} = 1;
				${'ct1DK'.$y} += ${'s1tambahDK'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				${'s2tambahDK'.$y} = 1;
				${'ct2DK'.$y} += ${'s2tambahDK'.$y};
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				${'s3tambahDK'.$y} = 1;
				${'ct3DK'.$y} += ${'s3tambahDK'.$y};
			}
		}
	}
	for ($x=115; $x <=115 ; $x++) { 
		if($nilai[$l] [$x]=="A"){
			$tambahADL = 1;
			${'ctADL'.$x} += $tambahADL;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahADL = 1;
				${'ct1ADL'.$x} += $s1tambahADL;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahADL = 1;
				${'ct2ADL'.$x} += $s2tambahADL;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahADL = 1;
				${'ct3ADL'.$x} += $s3tambahADL;
			}
		}elseif($nilai[$l] [$x]=="B"){
			$tambahBDL = 1;
			${'ctBDL'.$x} += $tambahBDL;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahBDL = 1;
				${'ct1BDL'.$x} += $s1tambahBDL;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahBDL = 1;
				${'ct2BDL'.$x} += $s2tambahBDL;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahBDL = 1;
				${'ct3BDL'.$x} += $s3tambahBDL;
			}
		}elseif($nilai[$l] [$x]=="O"){
			$tambahODL = 1;
			${'ctODL'.$x} += $tambahODL;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahODL = 1;
				${'ct1ODL'.$x} += $s1tambahODL;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahODL = 1;
				${'ct2ODL'.$x} += $s2tambahODL;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahODL = 1;
				${'ct3ODL'.$x} += $s3tambahODL;
			}
		}elseif($nilai[$l] [$x]=="AB"){
			$tambahABDL = 1;
			${'ctABDL'.$x} += $tambahABDL;
			if ($nilai[$l] [116]=="Kehamilan-Resiko-Rendah") {
				$s1tambahABDL = 1;
				${'ct1ABDL'.$x} += $s1tambahABDL;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-Tinggi") {
				$s2tambahABDL = 1;
				${'ct2ABDL'.$x} += $s2tambahABDL;
			}elseif ($nilai[$l] [116]=="Kehamilan-Resiko-SangatTinggi") {
				$s3tambahABDL = 1;
				${'ct3ABDL'.$x} += $s3tambahABDL;
			}
		}
	}
	// for ($x=116; $x <=116 ; $x++) { 
	// 	if($nilai[$l] [$x]=="Kehamilan-Resiko-SangatTinggi"){
	// 		$tambahResikoSTDM = 1;
	// 		${'ctResikoSTDM'.$x} += $tambahResikoSTDM;

	// 	}elseif($nilai[$l] [$x]=="Kehamilan-Resiko-Tinggi"){
	// 		$tambahResikoTDM = 1;
	// 		${'ctResikoTDM'.$x} += $tambahResikoTDM;
	// 	}elseif($nilai[$l] [$x]=="Kehamilan-Resiko-Rendah"){
	// 		$tambahResikoRDM = 1;
	// 		${'ctResikoRDM'.$x} += $tambahResikoRDM;
	// 	}
	// }
	
}
	for ($y=1; $y <= 4 ; $y++) { 
		$tambahSemuaRA += ${'ct1Hamil'.$y} ;
		$tambahSemuaTA += ${'ct2Hamil'.$y} ;
		$tambahSemuaSTA += ${'ct3Hamil'.$y} ;
		${'hasilEntropiA'.$y}= - ${'ct1Hamil'.$y}  /${'ctHamil'.$y} *(log(${'ct1Hamil'.$y} ,2) - log(${'ctHamil'.$y} , 2)) - ${'ct2Hamil'.$y} /${'ctHamil'.$y} *(log(${'ct2Hamil'.$y} ,2) - log(${'ctHamil'.$y} , 2))- ${'ct3Hamil'.$y} /${'ctHamil'.$y} *(log(${'ct3Hamil'.$y}  ,2) - log(${'ctHamil'.$y} , 2));
		$tempHasilEntropiTotalA = (${'ctHamil'.$y} /$banyakBaris)*${'hasilEntropiA'.$y};

		//Entropi Total
		$hasilEntropiTotalA += $tempHasilEntropiTotalA;
		echo "hasilEntropiTotalA ".$hasilEntropiTotalA;		
	}
			//Semua
		$hasilEntropiSemuaA = - $tambahSemuaRA /$banyakBaris*(log($tambahSemuaRA ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTA,2) - log($banyakBaris, 2))- $tambahSemuaSTA/$banyakBaris*(log($tambahSemuaSTA,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaA ".$hasilEntropiSemuaA;
		//Information Gain
		$hasilInformationGainA = $hasilEntropiSemuaA - $hasilEntropiTotalA;
		echo "hasilInformationGainA ".$hasilInformationGainA;

	for ($y=15; $y <= 42 ; $y++) { 
		$tambahSemuaRB += ${'ct1Ui'.$y} ;
		$tambahSemuaTB += ${'ct2Ui'.$y} ;
		$tambahSemuaSTB += ${'ct3Ui'.$y} ;
		echo "tempHasilEntropiTotalCek  ".$tambahSemuaSTB ;
		${'hasilEntropiB'.$y}= - ${'ct1Ui'.$y}  /${'ctUi'.$y}*(log(${'ct1Ui'.$y} ,2) - log(${'ctUi'.$y}, 2)) - ${'ct2Ui'.$y} /${'ctUi'.$y}*(log(${'ct2Ui'.$y} ,2) - log(${'ctUi'.$y}, 2))- ${'ct3Ui'.$y} /${'ctUi'.$y}*(log(${'ct3Ui'.$y}  ,2) - log(${'ctUi'.$y}, 2));
		if(is_nan(${'hasilEntropiB'.$y})){
			${'hasilEntropiB'.$y}=0;
		}
		$tempHasilEntropiTotalB = (${'ctUi'.$y} /$banyakBaris)*${'hasilEntropiB'.$y};
		echo "tempHasilEntropiTotalA ".$tempHasilEntropiTotalB;
		//Entropi Total
		$hasilEntropiTotalB += $tempHasilEntropiTotalB;
		echo "hasilEntropiTotalB ".$hasilEntropiTotalB;		
	}
			//Semua
		$hasilEntropiSemuaB = - $tambahSemuaRB /$banyakBaris*(log($tambahSemuaRB ,2) - log($banyakBaris, 2)) - $tambahSemuaTB/$banyakBaris*(log($tambahSemuaTB,2) - log($banyakBaris, 2))- $tambahSemuaSTB/$banyakBaris*(log($tambahSemuaSTB,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaB ".$hasilEntropiSemuaB;
		//Information Gain
		$hasilInformationGainB = $hasilEntropiSemuaB - $hasilEntropiTotalB;
		echo "hasilInformationGainB ".$hasilInformationGainB;
	
	for ($x=2; $x <=20 ; $x++) { 
		${'tambahSemuaRC'.$x} = ${'ct1Ya'.$x} + ${'ct1Tidak'.$x} ;
		${'tambahSemuaTC'.$x} = ${'ct2Ya'.$x} + ${'ct2Tidak'.$x} ;
		${'tambahSemuaSTC'.$x} = ${'ct3Ya'.$x} + ${'ct3Tidak'.$x} ;
		${'totalYaC'.$x} = ${'ct1Ya'.$x} +${'ct2Ya'.$x} +${'ct2Ya'.$x} +1;
		${'totalTidakC'.$x} =  ${'ct1Tidak'.$x}+ ${'ct2Tidak'.$x}+ ${'ct3Tidak'.$x}+1;
		//echo "R ".${'tambahSemuaRC'.$x}." T ".${'tambahSemuaTC'.$x}." ST ".${'tambahSemuaSTC'.$x};
	//	$hasildfd = -(20/28)*(log(20, 2)- log(28,2)) - (8/28)*(log(8, 2)- log(28,2));
		//Semua
		${'hasilEntropiSemuaC'.$x}= - ${'tambahSemuaRC'.$x} /$banyakBaris*(log(${'tambahSemuaRC'.$x} ,2) - log($banyakBaris, 2)) - ${'tambahSemuaTC'.$x}/$banyakBaris*(log(${'tambahSemuaTC'.$x},2) - log($banyakBaris, 2))- ${'tambahSemuaSTC'.$x}/$banyakBaris*(log(${'tambahSemuaSTC'.$x},2) - log($banyakBaris, 2));

		${'hasilEntropiYaC'.$x}= - ${'ct1Ya'.$x}/${'totalYaC'.$x}*(log(${'ct1Ya'.$x} ,2) - log(${'totalYaC'.$x}, 2)) - ${'ct2Ya'.$x}/${'totalYaC'.$x}*(log(${'ct2Ya'.$x},2) - log(${'totalYaC'.$x}, 2))- ${'ct3Ya'.$x}/${'totalYaC'.$x}*(log(${'ct3Ya'.$x} ,2) - log(${'totalYaC'.$x}, 2));
		 echo "stringYa ".${'totalYaC'.$x};
		// //Tidak		
		${'hasilEntropiTidakC'.$x}= - ${'ct1Tidak'.$x}  /${'totalTidakC'.$x}*(log(${'ct1Tidak'.$x} ,2) - log(${'totalTidakC'.$x}, 2)) - ${'ct2Tidak'.$x}/${'totalTidakC'.$x}*(log(${'ct2Tidak'.$x},2) - log(${'totalTidakC'.$x}, 2))- ${'ct3Tidak'.$x}/${'totalTidakC'.$x}*(log(${'ct3Tidak'.$x} ,2) - log(${'totalTidakC'.$x}, 2));
		echo "stringTidak ".${'hasilEntropiTidakC'.$x};
		${'tempHasilEntropiTotalYaC'.$x}= ( ${'totalYaC'.$x}/$banyakBaris)*${'hasilEntropiYaC'.$x};
		${'tempHasilEntropiTotalTidakC'.$x}=  (${'totalTidakC'.$x}/$banyakBaris)*${'hasilEntropiTidakC'.$x};
		if(is_nan(${'hasilEntropiYaC'.$x}) || is_nan(${'tempHasilEntropiTotalYaC'.$x})){
			${'hasilEntropiYaC'.$x}=0;
			${'tempHasilEntropiTotalYaC'.$x} = 0;
		}if(is_nan(${'hasilEntropiTidakC'.$x})||${'tempHasilEntropiTotalTidakC'.$x}){
			${'hasilEntropiTidakC'.$x}=0;
			${'tempHasilEntropiTotalTidakC'.$x} = 0;
		}
		//Entropi Total
		${'hasilEntropiTotalX'.$x}= ${'tempHasilEntropiTotalYaC'.$x}+${'tempHasilEntropiTotalTidakC'.$x};

		echo "hasilEntropiTotalC ".${'hasilEntropiTotalC'.$x};
		//Information Gain
		${'hasilInformationGainC'.$x} = ${'hasilEntropiSemuaC'.$x} - ${'hasilEntropiTotalC'.$x};
			echo "hasilInformationGainC ".${'hasilInformationGainC'.$x}." ke ".$x;
	}
	for ($x=21; $x <=21 ; $x++) { 

		${'tambahSemuaRV'.$x} = ${'ct1L'.$x} + ${'ct1P'.$x} + ${'ct1LP'.$x} ;
		${'tambahSemuaTV'.$x} =  ${'ct2L'.$x} + ${'ct2P'.$x} + ${'ct2LP'.$x} ;
		${'tambahSemuaSTV'.$x} =  ${'ct3L'.$x} + ${'ct3P'.$x} + ${'ct3LP'.$x};

	//	$hasildfd = -(20/28)*(log(20, 2)- log(28,2)) - (8/28)*(log(8, 2)- log(28,2));
		//Semua
		${'hasilEntropiSemuaV'.$x}= - ${'tambahSemuaRV'.$x} /$banyakBaris*(log(${'tambahSemuaRV'.$x} ,2) - log($banyakBaris, 2)) - ${'tambahSemuaTV'.$x}/$banyakBaris*(log(${'tambahSemuaTV'.$x},2) - log($banyakBaris, 2))- ${'tambahSemuaSTV'.$x}/$banyakBaris*(log(${'tambahSemuaSTV'.$x},2) - log($banyakBaris, 2));
		${'hasilEntropiLV'.$x}= - ${'ct1L'.$x}  /${'ctL'.$x}*(log(${'ct1L'.$x} ,2) - log(${'ctL'.$x}, 2)) - ${'ct2L'.$x}/${'ctL'.$x}*(log(${'ct2L'.$x},2) - log(${'ctL'.$x}, 2))- ${'ct3L'.$x}/${'ctL'.$x}*(log(${'ct3L'.$x} ,2) - log(${'ctL'.$x}, 2));
		${'hasilEntropiPV'.$x}= - ${'ct1P'.$x}  /${'ctP'.$x}*(log(${'ct1P'.$x} ,2) - log(${'ctP'.$x}, 2)) - ${'ct2P'.$x}/${'ctP'.$x}*(log(${'ct2P'.$x},2) - log(${'ctP'.$x}, 2))- ${'ct3P'.$x}/${'ctP'.$x}*(log(${'ct3P'.$x} ,2) - log(${'ctP'.$x}, 2));
		${'hasilEntropiLPV'.$x}= - ${'ct1LP'.$x}  /${'ctTidakLP'.$x}*(log(${'ct1LP'.$x} ,2) - log(${'ctTidakLP'.$x}, 2)) - ${'ct2LP'.$x}/${'ctTidakLP'.$x}*(log(${'ct2LP'.$x},2) - log(${'ctTidakLP'.$x}, 2))- ${'ct3LP'.$x}/${'ctTidakLP'.$x}*(log(${'ct3LP'.$x} ,2) - log(${'ctTidakLP'.$x}, 2));

		${'tempHasilEntropiEntropiTotalPV'.$x} = ( ${'ctP'.$x}/$banyakBaris)*${'hasilEntropiPV'.$x}; 
		${'tempHasilEntropiEntropiTotalLV'.$x} = ( ${'ctL'.$x}/$banyakBaris)*${'hasilEntropiLV'.$x}; 
		${'tempHasilEntropiEntropiTotalLPV'.$x} = ( ${'ctLP'.$x}/$banyakBaris)*${'hasilEntropiLPV'.$x}; 

		if(is_nan(${'hasilEntropiLV'.$x} )|| is_nan(${'tempHasilEntropiEntropiTotalLV'.$x})){
			 ${'hasilEntropiLV'.$x}=0;
			${'tempHasilEntropiEntropiTotalLV'.$x} = 0;
		}if (is_nan(${'hasilEntropiPV'.$x})|| is_nan(${'tempHasilEntropiEntropiTotalPV'.$x})) {
			${'hasilEntropiPV'.$x}=0;
			${'tempHasilEntropiEntropiTotalPV'.$x} = 0;
		}if (is_nan(${'hasilEntropiLPV'.$x})|| is_nan(${'tempHasilEntropiEntropiTotalLPV'.$x})) {
			${'hasilEntropiLPV'.$x}=0;
			${'tempHasilEntropiEntropiTotalLPV'.$x} = 0;
		}

		//Entropi Total
		${'hasilEntropiTotalV'.$x}= ${'tempHasilEntropiEntropiTotalPV'.$x} + ${'tempHasilEntropiEntropiTotalLV'.$x} + ${'tempHasilEntropiEntropiTotalLPV'.$x} ;

		//Information Gain
		${'hasilInformationGainV'.$x} = ${'hasilEntropiSemuaV'.$x} - ${'hasilEntropiTotalV'.$x};
			echo "hasilInformationGainV ".${'hasilInformationGainV'.$x}." ke ".$x;

	}
	for ($y=0; $y <= 4300 ; $y++) { 
		$tambahSemuaRW += ${'s1tambahw'.$y} ;
		$tambahSemuaTW += ${'s2tambahw'.$y};
		$tambahSemuaSTW += ${'s3tambahw'.$y} ;
			${'hasilEntropiW'.$y}= - ${'s1tambahw'.$y}  /${'ctW'.$y}*(log(${'s1tambahw'.$y} ,2) - log(${'ctW'.$y}, 2)) - ${'s2tambahw'.$y} /${'ctW'.$y}*(log(${'s2tambahw'.$y} ,2) - log(${'ctW'.$y}, 2))- ${'s3tambahw'.$y}/${'ctW'.$y}*(log(${'s3tambahw'.$y}  ,2) - log(${'ctW'.$y}, 2));

		$tempHasilEntropiTotalW = ${'ctW'.$y} /$banyakBaris*${'hasilEntropiW'.$y};
		if (is_nan($tempHasilEntropiTotalW)) {
			$tempHasilEntropiTotalW =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalW += $tempHasilEntropiTotalW;
	//	echo "hasilEntropiTotalW ".$hasilEntropiTotalW;
	}
			//Semua
		$hasilEntropiSemuaW = - $tambahSemuaRW /$banyakBaris*(log($tambahSemuaRW ,2) - log($banyakBaris, 2)) - $tambahSemuaTW/$banyakBaris*(log($tambahSemuaTW,2) - log($banyakBaris, 2))- $tambahSemuaSTW/$banyakBaris*(log($tambahSemuaSTW,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaW ".$hasilEntropiSemuaW;
		//Information Gain
		$hasilInformationGainW = $hasilEntropiSemuaW - $hasilEntropiTotalW;
		echo "hasilInformationGainW ".$hasilInformationGainW;

	for ($x=23; $x <=25 ; $x++) { 
		${'tambahSemuaRX'.$x} = ${'ct1YaX'.$x} + ${'ct1TidakX'.$x} ;
		${'tambahSemuaTX'.$x} = ${'ct2YaX'.$x} + ${'ct2TidakX'.$x} ;
		${'tambahSemuaSTX'.$x} = ${'ct3YaX'.$x} + ${'ct3TidakX'.$x} ;
		//Semua
		${'hasilEntropiSemuaX'.$x}= - ${'tambahSemuaRX'.$x} /$banyakBaris*(log(${'tambahSemuaRX'.$x} ,2) - log($banyakBaris, 2)) - ${'tambahSemuaTX'.$x}/$banyakBaris*(log(${'tambahSemuaTX'.$x},2) - log($banyakBaris, 2))- ${'tambahSemuaSTX'.$x}/$banyakBaris*(log(${'tambahSemuaSTX'.$x},2) - log($banyakBaris, 2));
		// echo "string ".${'hasilEntropiSemuaC'.$x};

		${'hasilEntropiYaX'.$x}= - ${'ct1YaX'.$x}  /${'ctYaX'.$x}*(log(${'ct1YaX'.$x} ,2) - log(${'ctYaX'.$x}, 2)) - ${'ct2YaX'.$x}/${'ctYaX'.$x}*(log(${'ct2YaX'.$x},2) - log(${'ctYaX'.$x}, 2))- ${'ct3YaX'.$x}/${'ctYaX'.$x}*(log(${'ct3YaX'.$x} ,2) - log(${'ctYaX'.$x}, 2));
		//Tidak		
		${'hasilEntropiTidakX'.$x}= - ${'ct1TidakX'.$x}  /${'ctTidakX'.$x}*(log(${'ct1TidakX'.$x} ,2) - log(${'ctTidakX'.$x}, 2)) - ${'ct2TidakX'.$x}/${'ctTidakX'.$x}*(log(${'ct2TidakX'.$x},2) - log(${'ctTidakX'.$x}, 2))- ${'ct3TidakX'.$x}/${'ctTidakX'.$x}*(log(${'ct3TidakX'.$x} ,2) - log(${'ctTidakX'.$x}, 2));
		${'tempHasilEntropiTotalYaX'.$x}= ( ${'ctYaX'.$x}/$banyakBaris)*${'hasilEntropiYaX'.$x};
		${'tempHasilEntropiTotalTidakX'.$x}=  (${'ctTidakX'.$x}/$banyakBaris)*${'hasilEntropiTidakX'.$x};
		if(is_nan(${'hasilEntropiYaX'.$x}) || is_nan(${'tempHasilEntropiTotalYaX'.$x})){
			${'hasilEntropiYaX'.$x}=0;
			${'tempHasilEntropiTotalYaX'.$x} = 0;
		}if(is_nan(${'hasilEntropiTidakX'.$x})||${'tempHasilEntropiTotalTidakX'.$x}){
			${'hasilEntropiTidakX'.$x}=0;
			${'tempHasilEntropiTotalTidakX'.$x} = 0;
		}
		//Entropi Total
		${'hasilEntropiTotalX'.$x}= ${'tempHasilEntropiTotalYaX'.$x}+${'tempHasilEntropiTotalTidakX'.$x};
		echo "hasilEntropiTotalC ".${'hasilEntropiTotalX'.$x};
		//Information Gain
		${'hasilInformationGainX'.$x} = ${'hasilEntropiSemuaX'.$x} - ${'hasilEntropiTotalX'.$x};
			echo "hasilInformationGainX ".${'hasilInformationGainX'.$x}." ke ".$x;
	}
	for ($y=0; $y <= 13 ; $y++) { 
		$tambahSemuaRAA += ${'s1tambahAA'.$y} ;
		$tambahSemuaTAA += ${'s2tambahAA'.$y};
		$tambahSemuaSTAA += ${'s3tambahAA'.$y} ;
		${'hasilEntropiAA'.$y}= - ${'s1tambahAA'.$y}  /${'ctHamilAA'.$y}*(log(${'s1tambahAA'.$y} ,2) - log(${'ctHamilAA'.$y}, 2)) - ${'s2tambahAA'.$y} /${'ctHamilAA'.$y}*(log(${'s2tambahAA'.$y} ,2) - log(${'ctHamilAA'.$y}, 2))- ${'s3tambahAA'.$y}/${'ctHamilAA'.$y}*(log(${'s3tambahAA'.$y}  ,2) - log(${'ctHamilAA'.$y}, 2));

		$tempHasilEntropiTotalAA = ${'ctHamilAA'.$y} /$banyakBaris*${'hasilEntropiAA'.$y};
		if (is_nan($tempHasilEntropiTotalAA)) {
			$tempHasilEntropiTotalAA =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalAA += $tempHasilEntropiTotalAA;
		echo "hasilEntropiTotalAA ".$hasilEntropiTotalAA;
	}
			//Semua
		$hasilEntropiSemuaAA = - $tambahSemuaRAA /$banyakBaris*(log($tambahSemuaRAA ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTAA,2) - log($banyakBaris, 2))- $tambahSemuaSTAA/$banyakBaris*(log($tambahSemuaSTAA,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaAA ".$hasilEntropiSemuaAA;
		//Information Gain
		$hasilInformationGainAA = $hasilEntropiSemuaAA - $hasilEntropiTotalAA;
		echo "hasilInformationGainAA ".$hasilInformationGainAA;
	for ($x=27; $x <=27 ; $x++) { 
		${'tambahSemuaRAB'.$x} = ${'ct1YaAB'.$x} + ${'ct1TidakAB'.$x} ;
		${'tambahSemuaTAB'.$x} = ${'ct2YaAB'.$x} + ${'ct2TidakAB'.$x} ;
		${'tambahSemuaSTAB'.$x} = ${'ct3YaAB'.$x} + ${'ct3TidakAB'.$x} ;
		//Semua
		${'hasilEntropiSemuaAB'.$x}= - ${'tambahSemuaRAB'.$x} /$banyakBaris*(log(${'tambahSemuaRAB'.$x} ,2) - log($banyakBaris, 2)) - ${'tambahSemuaTAB'.$x}/$banyakBaris*(log(${'tambahSemuaTAB'.$x},2) - log($banyakBaris, 2))- ${'tambahSemuaSTAB'.$x}/$banyakBaris*(log(${'tambahSemuaSTAB'.$x},2) - log($banyakBaris, 2));
		// echo "string ".${'hasilEntropiSemuaC'.$x};
		${'hasilEntropiYaAB'.$x}= - ${'ct1YaAB'.$x}  /${'ctYaAB'.$x}*(log(${'ct1YaAB'.$x} ,2) - log(${'ctYaAB'.$x}, 2)) - ${'ct2YaAB'.$x}/${'ctYaAB'.$x}*(log(${'ct2YaAB'.$x},2) - log(${'ctYaAB'.$x}, 2))- ${'ct3YaAB'.$x}/${'ctYaAB'.$x}*(log(${'ct3YaAB'.$x} ,2) - log(${'ctYaAB'.$x}, 2));
		//Tidak		
		${'hasilEntropiTidakAB'.$x}= - ${'ct1TidakAB'.$x}  /${'ctTidakAB'.$x}*(log(${'ct1TidakAB'.$x} ,2) - log(${'ctTidakAB'.$x}, 2)) - ${'ct2TidakAB'.$x}/${'ctTidakAB'.$x}*(log(${'ct2TidakAB'.$x},2) - log(${'ctTidakAB'.$x}, 2))- ${'ct3TidakAB'.$x}/${'ctTidakAB'.$x}*(log(${'ct3TidakAB'.$x} ,2) - log(${'ctTidakAB'.$x}, 2));
		if(is_nan(${'hasilEntropiYaAB'.$x})){
			${'hasilEntropiYaAB'.$x}=0;
		}if(is_nan(${'hasilEntropiTidakAB'.$x})){
			${'hasilEntropiTidakAB'.$x}=0;
		}
		//Entropi Total
		${'hasilEntropiTotalAB'.$x}= ( ${'ctYaAB'.$x}/$banyakBaris)*${'hasilEntropiYaAB'.$x}  + (${'ctTidakAB'.$x}/$banyakBaris)*${'hasilEntropiTidakAB'.$x};
		echo "hasilEntropiTotalAB ".${'hasilEntropiTotalAB'.$x};
		//Information Gain
		${'hasilInformationGainAB'.$x} = ${'hasilEntropiSemuaAB'.$x} - ${'hasilEntropiTotalAB'.$x};
			echo "hasilInformationGainAB ".${'hasilInformationGainAB'.$x}." ke ".$x;
	}
	for ($y=15; $y <= 40 ; $y++) { 
		$tambahSemuaRAC += ${'s1tambahAC'.$y} ;
		$tambahSemuaTAC += ${'s2tambahAC'.$y};
		$tambahSemuaSTAC += ${'s3tambahAC'.$y} ;
		${'hasilEntropiAC'.$y}= - ${'s1tambahAC'.$y}  /${'ctHamilAC'.$y}*(log(${'s1tambahAC'.$y} ,2) - log(${'ctHamilAC'.$y}, 2)) - ${'s2tambahAC'.$y} /${'ctHamilAC'.$y}*(log(${'s2tambahAC'.$y} ,2) - log(${'ctHamilAC'.$y}, 2))- ${'s3tambahAC'.$y}/${'ctHamilAC'.$y}*(log(${'s3tambahAC'.$y}  ,2) - log(${'ctHamilAC'.$y}, 2));

		$tempHasilEntropiTotalAC = ${'ctHamilAC'.$y} /$banyakBaris*${'hasilEntropiAC'.$y};
		if (is_nan($tempHasilEntropiTotalAC)) {
			$tempHasilEntropiTotalAC =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalAC += $tempHasilEntropiTotalAC;
		echo "hasilEntropiTotalAC ".$hasilEntropiTotalAC;
	}
			//Semua
		$hasilEntropiSemuaAC = - $tambahSemuaRAC /$banyakBaris*(log($tambahSemuaRAC ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTAC,2) - log($banyakBaris, 2))- $tambahSemuaSTAC/$banyakBaris*(log($tambahSemuaSTAC,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaAC ".$hasilEntropiSemuaAC;
		//Information Gain
		$hasilInformationGainAC = $hasilEntropiSemuaAC - $hasilEntropiTotalAC;
		echo "hasilInformationGainAC ".$hasilInformationGainAC;
	for ($y=3; $y <= 10 ; $y++) { 
		$tambahSemuaRAD += ${'s1tambahAD'.$y} ;
		$tambahSemuaTAD += ${'s2tambahAD'.$y};
		$tambahSemuaSTAD += ${'s3tambahAD'.$y} ;
		${'hasilEntropiAD'.$y}= - ${'s1tambahAD'.$y}  /${'ctHamilAD'.$y}*(log(${'s1tambahAD'.$y} ,2) - log(${'ctHamilAD'.$y}, 2)) - ${'s2tambahAD'.$y} /${'ctHamilAD'.$y}*(log(${'s2tambahAD'.$y} ,2) - log(${'ctHamilAD'.$y}, 2))- ${'s3tambahAD'.$y}/${'ctHamilAD'.$y}*(log(${'s3tambahAD'.$y}  ,2) - log(${'ctHamilAD'.$y}, 2));

		$tempHasilEntropiTotalAD = ${'ctHamilAD'.$y} /$banyakBaris*${'hasilEntropiAD'.$y};
		if (is_nan($tempHasilEntropiTotalAD)) {
			$tempHasilEntropiTotalAD =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalAD += $tempHasilEntropiTotalAD;
		echo "hasilEntropiTotalAD ".$hasilEntropiTotalAD;
	}
			//Semua
		$hasilEntropiSemuaAD = - $tambahSemuaRAD /$banyakBaris*(log($tambahSemuaRAD ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTAD,2) - log($banyakBaris, 2))- $tambahSemuaSTAD/$banyakBaris*(log($tambahSemuaSTAD,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaAD ".$hasilEntropiSemuaAD;
		//Information Gain
		$hasilInformationGainAD = $hasilEntropiSemuaAD - $hasilEntropiTotalAD;
		echo "hasilInformationGainAD ".$hasilInformationGainAD;		
	for ($x=30; $x <=74 ; $x++) { 
		${'tambahSemuaRAE'.$x} = ${'ct1YaAE'.$x} + ${'ct1TidakAE'.$x} + ${'ct1KadangAE'.$x} + ${'ct1TerusAE'.$x} + ${'ct1AdaAE'.$x} + ${'ct1MenurunAE'.$x} + ${'ct1BaikAE'.$x} + ${'ct1JarangAE'.$x} + ${'ct1AktifAE'.$x} + ${'ct1PernahAE'.$x} + ${'ct1PutihBAE'.$x} + ${'ct1PutihSAE'.$x} + ${'ct1PutihAE'.$x} + ${'ct1PutihKAE'.$x} ;
		${'tambahSemuaTAE'.$x} = ${'ct2YaAE'.$x} + ${'ct2TidakAE'.$x} + ${'ct2KadangAE'.$x} + ${'ct2TerusAE'.$x} + ${'ct2AdaAE'.$x} + ${'ct2MenurunAE'.$x} + ${'ct2BaikAE'.$x} + ${'ct2JarangAE'.$x} + ${'ct2AktifAE'.$x} + ${'ct2PernahAE'.$x} + ${'ct2PutihBAE'.$x} + ${'ct2PutihSAE'.$x} + ${'ct2PutihAE'.$x} + ${'ct2PutihKAE'.$x} ;
		${'tambahSemuaSTAE'.$x} = ${'ct3YaAE'.$x} + ${'ct3TidakAE'.$x} + ${'ct3KadangAE'.$x} + ${'ct3TerusAE'.$x} + ${'ct3AdaAE'.$x} + ${'ct3MenurunAE'.$x} + ${'ct3BaikAE'.$x} + ${'ct3JarangAE'.$x} + ${'ct3AktifAE'.$x} + ${'ct3PernahAE'.$x} + ${'ct3PutihBAE'.$x} + ${'ct3PutihSAE'.$x} + ${'ct3PutihAE'.$x} + ${'ct3PutihKAE'.$x} ;
// echo "SemuaRAE ".${'tambahSemuaRAE'.$x};
// echo "SemuaTAE ".${'tambahSemuaTAE'.$x} ;
// echo "SemuaSTAE ".${'tambahSemuaSTAE'.$x};
		//Semua
		${'hasilEntropiSemuaAE'.$x}= - ${'tambahSemuaRAE'.$x} /$banyakBaris*(log(${'tambahSemuaRAE'.$x} ,2) - log($banyakBaris, 2)) - ${'tambahSemuaTAE'.$x}/$banyakBaris*(log(${'tambahSemuaTAE'.$x},2) - log($banyakBaris, 2))- ${'tambahSemuaSTAE'.$x}/$banyakBaris*(log(${'tambahSemuaSTAE'.$x},2) - log($banyakBaris, 2));

		${'hasilEntropiYaAE'.$x}= - ${'ct1YaAE'.$x}  /${'ctYaAE'.$x}*(log(${'ct1YaAE'.$x} ,2) - log(${'ctYaAE'.$x}, 2)) - ${'ct2YaAE'.$x}/${'ctYaAE'.$x}*(log(${'ct2YaAE'.$x},2) - log(${'ctYaAE'.$x}, 2))- ${'ct3YaAE'.$x}/${'ctYaAE'.$x}*(log(${'ct3YaAE'.$x} ,2) - log(${'ctYaAE'.$x}, 2));
	 // echo "string ".${'hasilEntropiYaAE'.$x};
		//Tidak		
		${'hasilEntropiTidakAE'.$x}= - ${'ct1TidakAE'.$x}  /${'ctTidakAE'.$x}*(log(${'ct1TidakAE'.$x} ,2) - log(${'ctTidakAE'.$x}, 2)) - ${'ct2TidakAE'.$x}/${'ctTidakAE'.$x}*(log(${'ct2TidakAE'.$x},2) - log(${'ctTidakAE'.$x}, 2))- ${'ct3TidakAE'.$x}/${'ctTidakAE'.$x}*(log(${'ct3TidakAE'.$x} ,2) - log(${'ctTidakAE'.$x}, 2));
		//Kadang	
		${'hasilEntropiKadangAE'.$x}= - ${'ct1KadangAE'.$x}  /${'ctKadangAE'.$x}*(log(${'ct1KadangAE'.$x} ,2) - log(${'ctKadangAE'.$x}, 2)) - ${'ct2KadangAE'.$x}/${'ctKadangAE'.$x}*(log(${'ct2KadangAE'.$x},2) - log(${'ctKadangAE'.$x}, 2))- ${'ct3KadangAE'.$x}/${'ctKadangAE'.$x}*(log(${'ct3KadangAE'.$x} ,2) - log(${'ctKadangAE'.$x}, 2));
			//Terus	
		${'hasilEntropiTerusAE'.$x}= - ${'ct1TerusAE'.$x}  /${'ctTerusAE'.$x}*(log(${'ct1TerusAE'.$x} ,2) - log(${'ctTerusAE'.$x}, 2)) - ${'ct2TerusAE'.$x}/${'ctTerusAE'.$x}*(log(${'ct2TerusAE'.$x},2) - log(${'ctTerusAE'.$x}, 2))- ${'ct3TerusAE'.$x}/${'ctTerusAE'.$x}*(log(${'ct3TerusAE'.$x} ,2) - log(${'ctTerusAE'.$x}, 2));
			//Ada
		${'hasilEntropiAdaAE'.$x}= - ${'ct1AdaAE'.$x}  /${'ctAdaAE'.$x}*(log(${'ct1AdaAE'.$x} ,2) - log(${'ctAdaAE'.$x}, 2)) - ${'ct2AdaAE'.$x}/${'ctAdaAE'.$x}*(log(${'ct2AdaAE'.$x},2) - log(${'ctAdaAE'.$x}, 2))- ${'ct3AdaAE'.$x}/${'ctAdaAE'.$x}*(log(${'ct3AdaAE'.$x} ,2) - log(${'ctAdaAE'.$x}, 2));
			//Menurun
		${'hasilEntropiMenurunAE'.$x}= - ${'ct1MenurunAE'.$x}  /${'ctMenurunAE'.$x}*(log(${'ct1MenurunAE'.$x} ,2) - log(${'ctMenurunAE'.$x}, 2)) - ${'ct2MenurunAE'.$x}/${'ctMenurunAE'.$x}*(log(${'ct2MenurunAE'.$x},2) - log(${'ctMenurunAE'.$x}, 2))- ${'ct3MenurunAE'.$x}/${'ctMenurunAE'.$x}*(log(${'ct3MenurunAE'.$x} ,2) - log(${'ctMenurunAE'.$x}, 2));
			//Baik
		${'hasilEntropiBaikAE'.$x}= - ${'ct1BaikAE'.$x}  /${'ctBaikAE'.$x}*(log(${'ct1BaikAE'.$x} ,2) - log(${'ctBaikAE'.$x}, 2)) - ${'ct2BaikAE'.$x}/${'ctBaikAE'.$x}*(log(${'ct2BaikAE'.$x},2) - log(${'ctBaikAE'.$x}, 2))- ${'ct3BaikAE'.$x}/${'ctBaikAE'.$x}*(log(${'ct3BaikAE'.$x} ,2) - log(${'ctBaikAE'.$x}, 2));
			//Jarang
		${'hasilEntropiJarangAE'.$x}= - ${'ct1JarangAE'.$x}  /${'ctJarangAE'.$x}*(log(${'ct1JarangAE'.$x} ,2) - log(${'ctJarangAE'.$x}, 2)) - ${'ct2JarangAE'.$x}/${'ctJarangAE'.$x}*(log(${'ct2JarangAE'.$x},2) - log(${'ctJarangAE'.$x}, 2))- ${'ct3JarangAE'.$x}/${'ctJarangAE'.$x}*(log(${'ct3JarangAE'.$x} ,2) - log(${'ctJarangAE'.$x}, 2));
			//Aktif		
		${'hasilEntropiAktifAE'.$x}= - ${'ct1AktifAE'.$x}  /${'ctAktifAE'.$x}*(log(${'ct1AktifAE'.$x} ,2) - log(${'ctAktifAE'.$x}, 2)) - ${'ct2AktifAE'.$x}/${'ctAktifAE'.$x}*(log(${'ct2AktifAE'.$x},2) - log(${'ctAktifAE'.$x}, 2))- ${'ct3AktifAE'.$x}/${'ctAktifAE'.$x}*(log(${'ct3AktifAE'.$x} ,2) - log(${'ctAktifAE'.$x}, 2));
			//Pernah	
		${'hasilEntropiPernahAE'.$x}= - ${'ct1PernahAE'.$x}  /${'ctPernahAE'.$x}*(log(${'ct1PernahAE'.$x} ,2) - log(${'ctPernahAE'.$x}, 2)) - ${'ct2PernahAE'.$x}/${'ctPernahAE'.$x}*(log(${'ct2PernahAE'.$x},2) - log(${'ctPernahAE'.$x}, 2))- ${'ct3PernahAE'.$x}/${'ctPernahAE'.$x}*(log(${'ct3PernahAE'.$x} ,2) - log(${'ctPernahAE'.$x}, 2));
			//PutihB	
		${'hasilEntropiPutihBAE'.$x}= - ${'ct1PutihBAE'.$x}  /${'ctPutihBAE'.$x}*(log(${'ct1PutihBAE'.$x} ,2) - log(${'ctPutihBAE'.$x}, 2)) - ${'ct2PutihBAE'.$x}/${'ctPutihBAE'.$x}*(log(${'ct2PutihBAE'.$x},2) - log(${'ctPutihBAE'.$x}, 2))- ${'ct3PutihBAE'.$x}/${'ctPutihBAE'.$x}*(log(${'ct3PutihBAE'.$x} ,2) - log(${'ctPutihBAE'.$x}, 2));
			//PutihS
		${'hasilEntropiPutihSAE'.$x}= - ${'ct1PutihSAE'.$x}  /${'ctPutihSAE'.$x}*(log(${'ct1PutihSAE'.$x} ,2) - log(${'ctPutihSAE'.$x}, 2)) - ${'ct2PutihSAE'.$x}/${'ctPutihSAE'.$x}*(log(${'ct2PutihSAE'.$x},2) - log(${'ctPutihSAE'.$x}, 2))- ${'ct3PutihSAE'.$x}/${'ctPutihSAE'.$x}*(log(${'ct3PutihSAE'.$x} ,2) - log(${'ctPutihSAE'.$x}, 2));
			//Putih
		${'hasilEntropiPutihAE'.$x}= - ${'ct1PutihAE'.$x}  /${'ctPutihAE'.$x}*(log(${'ct1PutihAE'.$x} ,2) - log(${'ctPutihAE'.$x}, 2)) - ${'ct2PutihAE'.$x}/${'ctPutihAE'.$x}*(log(${'ct2PutihAE'.$x},2) - log(${'ctPutihAE'.$x}, 2))- ${'ct3PutihAE'.$x}/${'ctPutihAE'.$x}*(log(${'ct3PutihAE'.$x} ,2) - log(${'ctPutihAE'.$x}, 2));
			//PutihK	
		${'hasilEntropiPutihKAE'.$x}= - ${'ct1PutihKAE'.$x}  /${'ctPutihKAE'.$x}*(log(${'ct1PutihKAE'.$x} ,2) - log(${'ctPutihKAE'.$x}, 2)) - ${'ct2PutihKAE'.$x}/${'ctPutihKAE'.$x}*(log(${'ct2PutihKAE'.$x},2) - log(${'ctPutihKAE'.$x}, 2))- ${'ct3PutihKAE'.$x}/${'ctPutihKAE'.$x}*(log(${'ct3PutihKAE'.$x} ,2) - log(${'ctTidakAE'.$x}, 2));
				//Entropi Temp 
		//${'temphasilEntropiTotalAE'.$x}= ( ${'totalYaAB'.$x}/$banyakBaris)*${'hasilEntropiYaAB'.$x};
		${'tempHasilEntropiYaAE'.$x} = (${'ctYaAE'.$x}/$banyakBaris)*${'hasilEntropiYaAE'.$x};
		${'tempHasilEntropiTidakAE'.$x}= (${'ctTidakAE'.$x}/$banyakBaris)*${'hasilEntropiTidakAE'.$x};
		${'tempHasilEntropiKadangAE'.$x} = (${'ctKadangAE'.$x}/$banyakBaris)*${'hasilEntropiKadangAE'.$x};
		${'tempHasilEntropiTerusAE'.$x} = (${'ctTerusAE'.$x}/$banyakBaris)*${'hasilEntropiTerusAE'.$x};
		${'tempHasilEntropiAdaAE'.$x} = (${'ctAdaAE'.$x}/$banyakBaris)*${'hasilEntropiAdaAE'.$x};
		${'tempHasilEntropiMenurunAE'.$x} =(${'ctMenurunAE'.$x}/$banyakBaris)*${'hasilEntropiMenurunAE'.$x};
		${'tempHasilEntropiBaikAE'.$x}=(${'ctBaikAE'.$x}/$banyakBaris)*${'hasilEntropiBaikAE'.$x};
		${'tempHasilEntropiJarangAE'.$x}=(${'ctJarangAE'.$x}/$banyakBaris)*${'hasilEntropiJarangAE'.$x};
		${'tempHasilEntropiAktifAE'.$x}= (${'ctAktifAE'.$x}/$banyakBaris)*${'hasilEntropiAktifAE'.$x};
		${'tempHasilEntropiPernahAE'.$x}= (${'ctPernahAE'.$x}/$banyakBaris)*${'hasilEntropiPernahAE'.$x};
		${'tempHasilEntropiPutihBAE'.$x}= (${'ctPutihBAE'.$x}/$banyakBaris)*${'hasilEntropiPutihBAE'.$x};
		${'tempHasilEntropiPutihSAE'.$x}= (${'ctPutihSAE'.$x}/$banyakBaris)*${'hasilEntropiPutihSAE'.$x};
		${'tempHasilEntropiPutihAE'.$x}= (${'ctPutihAE'.$x}/$banyakBaris)*${'hasilEntropiPutihAE'.$x};
		${'tempHasilEntropiPutihKAE'.$x}= (${'ctPutihKAE'.$x}/$banyakBaris)*${'hasilEntropiPutihKAE'.$x};


		if(is_nan(${'hasilEntropiYaAE'.$x})||is_nan(${'tempHasilEntropiYaAE'.$x})){
			${'hasilEntropiYaAE'.$x}=0;
			${'tempHasilEntropiYaAE'.$x} = 0;
		}if(is_nan(${'hasilEntropiTidakAE'.$x})||is_nan(${'tempHasilEntropiTidakAE'.$x})){
			${'hasilEntropiTidakAE'.$x}=0;
			${'tempHasilEntropiTidakAE'.$x}=0;
		}if(is_nan(${'hasilEntropiKadangAE'.$x})||is_nan(${'tempHasilEntropiKadangAE'.$x})){
			${'hasilEntropiKadangAE'.$x}=0;
			${'tempHasilEntropiKadangAE'.$x}=0;
		}if(is_nan(${'hasilEntropiTerusAE'.$x})||is_nan(${'tempHasilEntropiTerusAE'.$x})){
			${'hasilEntropiTerusAE'.$x}=0;
			${'tempHasilEntropiTerusAE'.$x} = 0;
		}if(is_nan(${'hasilEntropiAdaAE'.$x})||is_nan(${'tempHasilEntropiAdaAE'.$x})){
			${'hasilEntropiAdaAE'.$x}=0;
			${'tempHasilEntropiAdaAE'.$x}=0;
		}if(is_nan(${'hasilEntropiMenurunAE'.$x})||is_nan(${'tempHasilEntropiMenurunAE'.$x})){
			${'hasilEntropiMenurunAE'.$x}=0;
			${'tempHasilEntropiMenurunAE'.$x}=0;
		}if(is_nan(${'hasilEntropiBaikAE'.$x})||is_nan(${'tempHasilEntropiBaikAE'.$x})){
			${'hasilEntropiBaikAE'.$x}=0;
			${'tempHasilEntropiBaikAE'.$x}=0;
		}if(is_nan(${'hasilEntropiJarangAE'.$x})||is_nan(${'tempHasilEntropiJarangAE'.$x})){
			${'hasilEntropiJarangAE'.$x}=0;
			${'tempHasilEntropiJarangAE'.$x}=0;
		}if(is_nan(${'hasilEntropiAktifAE'.$x})||is_nan(${'tempHasilEntropiAktifAE'.$x})){
			${'hasilEntropiAktifAE'.$x}=0;
			${'tempHasilEntropiAktifAE'.$x}=0;
		}if(is_nan(${'hasilEntropiPernahAE'.$x})||is_nan(${'tempHasilEntropiPernahAE'.$x})){
			${'hasilEntropiPernahAE'.$x}=0;
			${'tempHasilEntropiPernahAE'.$x}=0;
		}if(is_nan(${'hasilEntropiPutihBAE'.$x})||is_nan(${'tempHasilEntropiPutihBAE'.$x})){
			${'hasilEntropiPutihBAE'.$x}=0;
			${'tempHasilEntropiPutihBAE'.$x}=0;
		}if(is_nan(${'hasilEntropiPutihSAE'.$x})||is_nan(${'tempHasilEntropiPutihSAE'.$x})){
			${'hasilEntropiPutihSAE'.$x}=0;
			${'tempHasilEntropiPutihSAE'.$x}=0;
		}if(is_nan(${'hasilEntropiPutihAE'.$x})||is_nan(${'tempHasilEntropiPutihAE'.$x})){
			${'hasilEntropiPutihAE'.$x}=0;
			${'tempHasilEntropiPutihAE'.$x}=0;
		}if(is_nan(${'hasilEntropiPutihKAE'.$x})||is_nan(${'tempHasilEntropiPutihKAE'.$x})){
			${'hasilEntropiPutihKAE'.$x}=0;
			${'tempHasilEntropiPutihKAE'.$x}=0;
		}

		//Entropi Total
		${'hasilEntropiTotalAE'.$x}= ${'tempHasilEntropiYaAE'.$x} + ${'tempHasilEntropiTidakAE'.$x} + ${'tempHasilEntropiKadangAE'.$x} + ${'tempHasilEntropiTerusAE'.$x}+ ${'tempHasilEntropiAdaAE'.$x}+ ${'tempHasilEntropiMenurunAE'.$x}+ ${'tempHasilEntropiBaikAE'.$x}+ ${'tempHasilEntropiJarangAE'.$x}+ ${'tempHasilEntropiAktifAE'.$x}+ ${'tempHasilEntropiPernahAE'.$x}+ ${'tempHasilEntropiPutihBAE'.$x}+ ${'tempHasilEntropiPutihSAE'.$x}+ ${'tempHasilEntropiPutihAE'.$x}+ ${'tempHasilEntropiPutihKAE'.$x};
		echo "HasilEntropiTotalAE ".${'hasilEntropiTotalAE'.$x};

		//Information Gain
		${'hasilInformationGainAE'.$x} = ${'hasilEntropiSemuaAE'.$x} - ${'hasilEntropiTotalAE'.$x};
			echo "hasilInformationGainAE ".${'hasilInformationGainAE'.$x}." ke ".$x;
	}
	for ($y=1; $y <= 4 ; $y++) { 
		$tambahSemuaRBX += ${'s1tambahBX'.$y} ;
		$tambahSemuaTBX += ${'s2tambahBX'.$y};
		$tambahSemuaSTBX += ${'s3tambahBX'.$y} ;
		${'hasilEntropiBX'.$y}= - ${'s1tambahBX'.$y}  /${'ctHamilBX'.$y}*(log(${'s1tambahBX'.$y} ,2) - log(${'ctHamilBX'.$y}, 2)) - ${'s2tambahBX'.$y} /${'ctHamilBX'.$y}*(log(${'s2tambahBX'.$y} ,2) - log(${'ctHamilBX'.$y}, 2))- ${'s3tambahBX'.$y}/${'ctHamilBX'.$y}*(log(${'s3tambahBX'.$y}  ,2) - log(${'ctHamilBX'.$y}, 2));

		$tempHasilEntropiTotalBX = ${'ctHamilBX'.$y} /$banyakBaris*${'hasilEntropiBX'.$y};
		if (is_nan($tempHasilEntropiTotalBX)) {
			$tempHasilEntropiTotalBX =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalBX += $tempHasilEntropiTotalBX;
		echo "hasilEntropiTotalBX ".$hasilEntropiTotalBX;
	}
			//Semua
		$hasilEntropiSemuaBX = - $tambahSemuaRBX /$banyakBaris*(log($tambahSemuaRBX ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTBX,2) - log($banyakBaris, 2))- $tambahSemuaSTBX/$banyakBaris*(log($tambahSemuaSTBX,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaBX ".$hasilEntropiSemuaBX;
		//Information Gain
		$hasilInformationGainBX = $hasilEntropiSemuaBX - $hasilEntropiTotalBX;
		echo "hasilInformationGainBX ".$hasilInformationGainBX;
	for ($y=1; $y <= 1 ; $y++) { 
		$tambahSemuaRBY += ${'s1tambahBY'.$y} ;
		$tambahSemuaTBY += ${'s2tambahBY'.$y};
		$tambahSemuaSTBY += ${'s3tambahBY'.$y} ;
		${'hasilEntropiBY'.$y}= - ${'s1tambahBY'.$y}  /${'ctHamilBY'.$y}*(log(${'s1tambahBY'.$y} ,2) - log(${'ctHamilBY'.$y}, 2)) - ${'s2tambahBY'.$y} /${'ctHamilBY'.$y}*(log(${'s2tambahBY'.$y} ,2) - log(${'ctHamilBY'.$y}, 2))- ${'s3tambahBY'.$y}/${'ctHamilBY'.$y}*(log(${'s3tambahBY'.$y}  ,2) - log(${'ctHamilBY'.$y}, 2));

		$tempHasilEntropiTotalBY = ${'ctHamilBY'.$y} /$banyakBaris*${'hasilEntropiBY'.$y};
		if (is_nan($tempHasilEntropiTotalBY)) {
			$tempHasilEntropiTotalBY =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalBY += $tempHasilEntropiTotalBY;
		echo "hasilEntropiTotalBY ".$hasilEntropiTotalBY;
	}
			//Semua
		$hasilEntropiSemuaBY = - $tambahSemuaRBY /$banyakBaris*(log($tambahSemuaRBY ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTBY,2) - log($banyakBaris, 2))- $tambahSemuaSTBY/$banyakBaris*(log($tambahSemuaSTBY,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaBY ".$hasilEntropiSemuaBY;
		//Information Gain
		$hasilInformationGainBY = $hasilEntropiSemuaBY - $hasilEntropiTotalBY;
		echo "hasilInformationGainBY ".$hasilInformationGainBY;
	for ($x=77; $x <=78 ; $x++) { 
		${'tambahSemuaRBZ'.$x} = ${'ct1YaBZ'.$x} + ${'ct1TidakBZ'.$x} ;
		${'tambahSemuaTBZ'.$x} = ${'ct2YaBZ'.$x} + ${'ct2TidakBZ'.$x} ;
		${'tambahSemuaSTBZ'.$x} = ${'ct3YaBZ'.$x} + ${'ct3TidakBZ'.$x} ;
		//Semua
		${'hasilEntropiSemuaBZ'.$x}= - ${'tambahSemuaRBZ'.$x} /$banyakBaris*(log(${'tambahSemuaRBZ'.$x} ,2) - log($banyakBaris, 2)) - ${'tambahSemuaTBZ'.$x}/$banyakBaris*(log(${'tambahSemuaTBZ'.$x},2) - log($banyakBaris, 2))- ${'tambahSemuaSTBZ'.$x}/$banyakBaris*(log(${'tambahSemuaSTBZ'.$x},2) - log($banyakBaris, 2));
		// echo "string ".${'hasilEntropiSemuaC'.$x};

		${'hasilEntropiYaBZ'.$x}= - ${'ct1YaBZ'.$x}  /${'ctYaBZ'.$x}*(log(${'ct1YaBZ'.$x} ,2) - log(${'ctYaBZ'.$x}, 2)) - ${'ct2YaBZ'.$x}/${'ctYaBZ'.$x}*(log(${'ct2YaBZ'.$x},2) - log(${'ctYaBZ'.$x}, 2))- ${'ct3YaBZ'.$x}/${'ctYaBZ'.$x}*(log(${'ct3YaBZ'.$x} ,2) - log(${'ctYaBZ'.$x}, 2));
		//Tidak		
		${'hasilEntropiTidakBZ'.$x}= - ${'ct1TidakBZ'.$x}  /${'ctTidakBZ'.$x}*(log(${'ct1TidakBZ'.$x} ,2) - log(${'ctTidakBZ'.$x}, 2)) - ${'ct2TidakBZ'.$x}/${'ctTidakBZ'.$x}*(log(${'ct2TidakBZ'.$x},2) - log(${'ctTidakBZ'.$x}, 2))- ${'ct3TidakBZ'.$x}/${'ctTidakBZ'.$x}*(log(${'ct3TidakBZ'.$x} ,2) - log(${'ctTidakBZ'.$x}, 2));

		${'hasilEntropiYaBZ'.$x} = ( ${'ctYaBZ'.$x}/$banyakBaris)*${'hasilEntropiYaBZ'.$x} ;
		${'hasilEntropiTidakBZ'.$x} = (${'ctTidakBZ'.$x}/$banyakBaris)*${'hasilEntropiTidakBZ'.$x};
		if(is_nan(${'hasilEntropiYaBZ'.$x})||${'hasilEntropiYaBZ'.$x}){
			${'hasilEntropiYaBZ'.$x}=0;
			${'hasilEntropiYaBZ'.$x}=0;
		}if(is_nan(${'hasilEntropiTidakBZ'.$x})||${'hasilEntropiTidakBZ'.$x}){
			${'hasilEntropiTidakBZ'.$x}=0;
			${'hasilEntropiTidakBZ'.$x}=0;
		}
		//Entropi Total
		${'hasilEntropiTotalBZ'.$x}= ${'hasilEntropiYaBZ'.$x}+${'hasilEntropiTidakBZ'.$x};
		echo "hasilEntropiTotalBZ ".${'hasilEntropiTotalBZ'.$x};
		//Information Gain
		${'hasilInformationGainBZ'.$x} = ${'hasilEntropiSemuaBZ'.$x} - ${'hasilEntropiTotalBZ'.$x};
			echo "hasilInformationGainBZ ".${'hasilInformationGainBZ'.$x}." ke ".$x;
	}

	for ($y=34; $y <= 97 ; $y++) { 
		$tambahSemuaRCB += ${'s1tambahCB'.$y} ;
		$tambahSemuaTCB += ${'s2tambahCB'.$y};
		$tambahSemuaSTCB += ${'s3tambahCB'.$y} ;
		${'hasilEntropiCB'.$y}= - ${'s1tambahCB'.$y}  /$banyakBaris*(log(${'s1tambahCB'.$y} ,2) - log($banyakBaris, 2)) - ${'s2tambahCB'.$y} /$banyakBaris*(log(${'s2tambahCB'.$y} ,2) - log($banyakBaris, 2))- ${'s3tambahCB'.$y}/$banyakBaris*(log(${'s3tambahCB'.$y}  ,2) - log($banyakBaris, 2));

		$tempHasilEntropiTotalCB = ${'ctCB'.$y} /$banyakBaris*${'hasilEntropiCB'.$y};
		if (is_nan($tempHasilEntropiTotalCB)) {
			$tempHasilEntropiTotalCB =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalCB += $tempHasilEntropiTotalCB;
		echo "hasilEntropiTotalCB ".$hasilEntropiTotalCB;
	}
			//Semua
		$hasilEntropiSemuaCB = - $tambahSemuaRCB /$banyakBaris*(log($tambahSemuaRCB ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTCB,2) - log($banyakBaris, 2))- $tambahSemuaSTCB/$banyakBaris*(log($tambahSemuaSTCB,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaCB ".$hasilEntropiSemuaCB;
		//Information Gain
		$hasilInformationGainCB = $hasilEntropiSemuaCB - $hasilEntropiTotalCB;
		echo "hasilInformationGainCB ".$hasilInformationGainCB;
	for ($y=24; $y <= 168 ; $y++) { 
		$tambahSemuaRCC += ${'s1tambahCC'.$y} ;
		$tambahSemuaTCC += ${'s2tambahCC'.$y};
		$tambahSemuaSTCC += ${'s3tambahCC'.$y} ;
		${'hasilEntropiCC'.$y}= - ${'s1tambahCC'.$y}  /${'ctCC'.$y}*(log(${'s1tambahCC'.$y} ,2) - log(${'ctCC'.$y}, 2)) - ${'s2tambahCC'.$y} /${'ctCC'.$y}*(log(${'s2tambahCC'.$y} ,2) - log(${'ctCC'.$y}, 2))- ${'s3tambahCC'.$y}/${'ctCC'.$y}*(log(${'s3tambahCC'.$y}  ,2) - log(${'ctCC'.$y}, 2));

		$tempHasilEntropiTotalCC = ${'ctCC'.$y} /$banyakBaris*${'hasilEntropiCC'.$y};
		if (is_nan($tempHasilEntropiTotalCC)) {
			$tempHasilEntropiTotalCC =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalCC += $tempHasilEntropiTotalCC;
		echo "hasilEntropiTotalCC ".$hasilEntropiTotalCC;
	}
			//Semua
		$hasilEntropiSemuaCC = - $tambahSemuaRCC /$banyakBaris*(log($tambahSemuaRCC ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTCC,2) - log($banyakBaris, 2))- $tambahSemuaSTCC/$banyakBaris*(log($tambahSemuaSTCC,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaCC ".$hasilEntropiSemuaCC;
		//Information Gain
		$hasilInformationGainCC = $hasilEntropiSemuaCC - $hasilEntropiTotalCC;
		echo "hasilInformationGainCC ".$hasilInformationGainCC;
	for ($y=34; $y <= 168 ; $y++) { 
		$tambahSemuaRCD += ${'s1tambahCD'.$y} ;
		$tambahSemuaTCD += ${'s2tambahCD'.$y};
		$tambahSemuaSTCD += ${'s3tambahCD'.$y} ;
		${'hasilEntropiCD'.$y}= - ${'s1tambahCD'.$y} /${'ctCD'.$y}*(log(${'s1tambahCD'.$y} ,2) - log(${'ctCD'.$y}, 2)) - ${'s2tambahCD'.$y} /${'ctCD'.$y}*(log(${'s2tambahCD'.$y} ,2) - log(${'ctCD'.$y}, 2))- ${'s3tambahCD'.$y}/${'ctCD'.$y}*(log(${'s3tambahCD'.$y}  ,2) - log(${'ctCD'.$y}, 2));

		$tempHasilEntropiTotalCD = ${'ctCD'.$y} /$banyakBaris*${'hasilEntropiCD'.$y};
		if (is_nan($tempHasilEntropiTotalCD)) {
			$tempHasilEntropiTotalCD =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalCD += $tempHasilEntropiTotalCD;
		echo "hasilEntropiTotalCD ".$hasilEntropiTotalCD;
	}
			//Semua
		$hasilEntropiSemuaCD = - $tambahSemuaRCD /$banyakBaris*(log($tambahSemuaRCD ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTCD,2) - log($banyakBaris, 2))- $tambahSemuaSTCD/$banyakBaris*(log($tambahSemuaSTCD,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaCD ".$hasilEntropiSemuaCD;
		//Information Gain
		$hasilInformationGainCD = $hasilEntropiSemuaCD - $hasilEntropiTotalCD;
		echo "hasilInformationGainCD ".$hasilInformationGainCD;
	for ($y=12; $y <= 42 ; $y++) { 
		$tambahSemuaRCE += ${'s1tambahCE'.$y} ;
		$tambahSemuaTCE += ${'s2tambahCE'.$y};
		$tambahSemuaSTCE += ${'s3tambahCE'.$y} ;
		${'hasilEntropiCE'.$y}= - ${'s1tambahCE'.$y}  /${'ctCE'.$y}*(log(${'s1tambahCE'.$y} ,2) - log(${'ctCE'.$y}, 2)) - ${'s2tambahCE'.$y} /${'ctCE'.$y}*(log(${'s2tambahCE'.$y} ,2) - log(${'ctCE'.$y}, 2))- ${'s3tambahCE'.$y}/${'ctCE'.$y}*(log(${'s3tambahCE'.$y}  ,2) - log(${'ctCE'.$y}, 2));

		$tempHasilEntropiTotalCE = ${'ctCE'.$y} /$banyakBaris*${'hasilEntropiCE'.$y};
		if (is_nan($tempHasilEntropiTotalCE)) {
			$tempHasilEntropiTotalCE =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalCE += $tempHasilEntropiTotalCE;
		echo "hasilEntropiTotalCE ".$hasilEntropiTotalCE;
	}
			//Semua
		$hasilEntropiSemuaCE = - $tambahSemuaRCE /$banyakBaris*(log($tambahSemuaRCE ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTCE,2) - log($banyakBaris, 2))- $tambahSemuaSTCE/$banyakBaris*(log($tambahSemuaSTCE,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaCE ".$hasilEntropiSemuaCE;
		//Information Gain
		$hasilInformationGainCE = $hasilEntropiSemuaCE - $hasilEntropiTotalCE;
		echo "hasilInformationGainCE ".$hasilInformationGainCE;
	for ($x=83; $x <=86 ; $x++) { 
		${'tambahSemuaRCF'.$x} = ${'ct1YaCF'.$x} + ${'ct1TidakCF'.$x}+ ${'ct1NormalCF'.$x}+ ${'ct1BaikCF'.$x};
		${'tambahSemuaTCF'.$x} = ${'ct2YaCF'.$x} + ${'ct2TidakCF'.$x} + ${'ct2NormalCF'.$x}+ ${'ct2BaikCF'.$x} ;
		${'tambahSemuaSTCF'.$x} = ${'ct3YaCF'.$x} + ${'ct3TidakCF'.$x} + ${'ct3NormalCF'.$x}+ ${'ct3BaikCF'.$x} ;
		//Semua
		${'hasilEntropiSemuaCF'.$x}= - ${'tambahSemuaRCF'.$x} /$banyakBaris*(log(${'tambahSemuaRCF'.$x} ,2) - log($banyakBaris, 2)) - ${'tambahSemuaTCF'.$x}/$banyakBaris*(log(${'tambahSemuaTCF'.$x},2) - log($banyakBaris, 2))- ${'tambahSemuaSTCF'.$x}/$banyakBaris*(log(${'tambahSemuaSTCF'.$x},2) - log($banyakBaris, 2));
		// echo "string ".${'hasilEntropiSemuaC'.$x};

		${'hasilEntropiYaCF'.$x}= - ${'ct1YaCF'.$x}  /${'ctYaCF'.$x}*(log(${'ct1YaCF'.$x} ,2) - log(${'ctYaCF'.$x}, 2)) - ${'ct2YaCF'.$x}/${'ctYaCF'.$x}*(log(${'ct2YaCF'.$x},2) - log(${'ctYaCF'.$x}, 2))- ${'ct3YaCF'.$x}/${'ctYaCF'.$x}*(log(${'ct3YaCF'.$x} ,2) - log(${'ctYaCF'.$x}, 2));
		//Normal	
		${'hasilEntropiNormalCF'.$x}= - ${'ct1NormalCF'.$x}  /${'ctNormalCF'.$x}*(log(${'ct1NormalCF'.$x} ,2) - log(${'ctNormalCF'.$x}, 2)) - ${'ct2NormalCF'.$x}/${'ctNormalCF'.$x}*(log(${'ct2NormalCF'.$x},2) - log(${'ctNormalCF'.$x}, 2))- ${'ct3NormalCF'.$x}/${'ctNormalCF'.$x}*(log(${'ct3NormalCF'.$x} ,2) - log(${'ctNormalCF'.$x}, 2));
		//Tidak		
		${'hasilEntropiTidakCF'.$x}= - ${'ct1TidakCF'.$x}  /${'ctTidakCF'.$x}*(log(${'ct1TidakCF'.$x} ,2) - log(${'ctTidakCF'.$x}, 2)) - ${'ct2TidakCF'.$x}/${'ctTidakCF'.$x}*(log(${'ct2TidakCF'.$x},2) - log(${'ctTidakCF'.$x}, 2))- ${'ct3TidakCF'.$x}/${'ctTidakCF'.$x}*(log(${'ct3TidakCF'.$x} ,2) - log(${'ctTidakCF'.$x}, 2));
		//Baik
		${'hasilEntropiBaikCF'.$x}= - ${'ct1BaikCF'.$x}  /${'ctBaikCF'.$x}*(log(${'ct1BaikCF'.$x} ,2) - log(${'ctBaikCF'.$x}, 2)) - ${'ct2BaikCF'.$x}/${'ctBaikCF'.$x}*(log(${'ct2BaikCF'.$x},2) - log(${'ctBaikCF'.$x}, 2))- ${'ct3BaikCF'.$x}/${'ctBaikCF'.$x}*(log(${'ct3BaikCF'.$x} ,2) - log(${'ctBaikCF'.$x}, 2));

		${'tempHasilEntropiYaCF'.$x} = (${'ctYaCF'.$x}/$banyakBaris)*${'hasilEntropiYaCF'.$x};
		${'tempHasilEntropiTidakCF'.$x} = (${'ctTidakCF'.$x}/$banyakBaris)*${'hasilEntropiTidakCF'.$x};
		${'tempHasilEntropiNormalCF'.$x} = (${'ctNormalCF'.$x}/$banyakBaris)*${'hasilEntropiNormalCF'.$x};
		${'tempHasilEntropiBaikCF'.$x}= (${'ctBaikCF'.$x}/$banyakBaris)*${'hasilEntropiBaikCF'.$x};

		if(is_nan(${'hasilEntropiYaCF'.$x})||${'tempHasilEntropiYaCF'.$x}){
			${'hasilEntropiYaCF'.$x}=0;
			${'tempHasilEntropiYaCF'.$x}=0;
		}if(is_nan(${'hasilEntropiTidakCF'.$x})||${'tempHasilEntropiTidakCF'.$x}){
			${'hasilEntropiTidakCF'.$x}=0;
			${'tempHasilEntropiTidakCF'.$x}=0;
		}if(is_nan(${'hasilEntropiNormalCF'.$x})||${'tempHasilEntropiNormalCF'.$x}){
			${'hasilEntropiNormalCF'.$x}=0;
			${'tempHasilEntropiNormalCF'.$x}=0;
		}if(is_nan(${'hasilEntropiBaikCF'.$x})||${'tempHasilEntropiBaikCF'.$x}){
			${'hasilEntropiBaikCF'.$x}=0;
			${'tempHasilEntropiBaikCF'.$x}=0;
		}
		//Entropi Total
		${'tempHasilEntropiTotalCF'.$x}= ${'tempHasilEntropiYaCF'.$x} + ${'tempHasilEntropiTidakCF'.$x} + ${'tempHasilEntropiNormalCF'.$x} + ${'tempHasilEntropiBaikCF'.$x};
		echo "hasilEntropiTotalCF ".${'hasilEntropiTotalCF'.$x};
		//Information Gain
		${'hasilInformationGainCF'.$x} = ${'hasilEntropiSemuaCF'.$x} - ${'hasilEntropiTotalCF'.$x};
			echo "hasilInformationGainCF ".${'hasilInformationGainCF'.$x}." ke ".$x;
	}
	for ($y=80; $y <= 180 ; $y++) { 
		$tambahSemuaRCJ += ${'s1tambahCJ'.$y} ;
		$tambahSemuaTCJ += ${'s2tambahCJ'.$y};
		$tambahSemuaSTCJ += ${'s3tambahCJ'.$y} ;
		${'hasilEntropiCJ'.$y}= - ${'s1tambahCJ'.$y}  /${'ctCJ'.$y}*(log(${'s1tambahCJ'.$y} ,2) - log(${'ctCJ'.$y}, 2)) - ${'s2tambahCJ'.$y} /${'ctCJ'.$y}*(log(${'s2tambahCJ'.$y} ,2) - log(${'ctCJ'.$y}, 2))- ${'s3tambahCJ'.$y}/${'ctCJ'.$y}*(log(${'s3tambahCJ'.$y}  ,2) - log(${'ctCJ'.$y}, 2));

		$tempHasilEntropiTotalCJ = ${'ctCJ'.$y} /$banyakBaris*${'hasilEntropiCJ'.$y};
		if (is_nan($tempHasilEntropiTotalCJ)) {
			$tempHasilEntropiTotalCJ =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalCJ += $tempHasilEntropiTotalCJ;
		echo "hasilEntropiTotalCJ ".$hasilEntropiTotalCJ;
	}
			//Semua
		$hasilEntropiSemuaCJ = - $tambahSemuaRCJ /$banyakBaris*(log($tambahSemuaRCJ ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTCJ,2) - log($banyakBaris, 2))- $tambahSemuaSTCJ/$banyakBaris*(log($tambahSemuaSTCJ,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaCJ ".$hasilEntropiSemuaCJ;
		//Information Gain
		$hasilInformationGainCJ = $hasilEntropiSemuaCJ - $hasilEntropiTotalCJ;
		echo "hasilInformationGainCJ ".$hasilInformationGainCJ;
	for ($y=50; $y <= 90 ; $y++) { 
		$tambahSemuaRCK += ${'s1tambahCK'.$y} ;
		$tambahSemuaTCK += ${'s2tambahCK'.$y};
		$tambahSemuaSTCK += ${'s3tambahCK'.$y} ;
		${'hasilEntropiCK'.$y}= - ${'s1tambahCK'.$y}  /${'ctCK'.$y}*(log(${'s1tambahCK'.$y} ,2) - log(${'ctCK'.$y}, 2)) - ${'s2tambahCK'.$y} /${'ctCK'.$y}*(log(${'s2tambahCK'.$y} ,2) - log(${'ctCK'.$y}, 2))- ${'s3tambahCK'.$y}/${'ctCK'.$y}*(log(${'s3tambahCK'.$y}  ,2) - log(${'ctCK'.$y}, 2));

		$tempHasilEntropiTotalCK = ${'ctCK'.$y} /$banyakBaris*${'hasilEntropiCK'.$y};
		if (is_nan($tempHasilEntropiTotalCK)) {
			$tempHasilEntropiTotalCK =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalCK += $tempHasilEntropiTotalCK;
		echo "hasilEntropiTotalCK ".$hasilEntropiTotalCK;
	}
			//Semua
		$hasilEntropiSemuaCK = - $tambahSemuaRCK /$banyakBaris*(log($tambahSemuaRCK ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTCK,2) - log($banyakBaris, 2))- $tambahSemuaSTCK/$banyakBaris*(log($tambahSemuaSTCK,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaCK ".$hasilEntropiSemuaCK;
		//Information Gain
		$hasilInformationGainCK = $hasilEntropiSemuaCK - $hasilEntropiTotalCK;
		echo "hasilInformationGainCK ".$hasilInformationGainCK;
	for ($y=26; $y <= 37 ; $y++) { 
		$tambahSemuaRCL += ${'s1tambahCL'.$y} ;
		$tambahSemuaTCL += ${'s2tambahCL'.$y};
		$tambahSemuaSTCL += ${'s3tambahCL'.$y} ;
		${'hasilEntropiCL'.$y}= - ${'s1tambahCL'.$y}  /${'ctCL'.$y}*(log(${'s1tambahCL'.$y} ,2) - log(${'ctCL'.$y}, 2)) - ${'s2tambahCL'.$y} /${'ctCL'.$y}*(log(${'s2tambahCL'.$y} ,2) - log(${'ctCL'.$y}, 2))- ${'s3tambahCL'.$y}/${'ctCL'.$y}*(log(${'s3tambahCL'.$y}  ,2) - log(${'ctCL'.$y}, 2));

		$tempHasilEntropiTotalCL = ${'ctCL'.$y} /$banyakBaris*${'hasilEntropiCL'.$y};
		if (is_nan($tempHasilEntropiTotalCL)) {
			$tempHasilEntropiTotalCL =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalCL += $tempHasilEntropiTotalCL;
		echo "hasilEntropiTotalCL ".$hasilEntropiTotalCL;
	}
			//Semua
		$hasilEntropiSemuaCL = - $tambahSemuaRCL /$banyakBaris*(log($tambahSemuaRCL ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTCL,2) - log($banyakBaris, 2))- $tambahSemuaSTCL/$banyakBaris*(log($tambahSemuaSTCL,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaCL ".$hasilEntropiSemuaCL;
		//Information Gain
		$hasilInformationGainCL = $hasilEntropiSemuaCL - $hasilEntropiTotalCL;
		echo "hasilInformationGainCL ".$hasilInformationGainCL;
	for ($y=60; $y <= 88 ; $y++) { 
		$tambahSemuaRCM += ${'s1tambahCM'.$y} ;
		$tambahSemuaTCM += ${'s2tambahCM'.$y};
		$tambahSemuaSTCM += ${'s3tambahCM'.$y} ;
		${'hasilEntropiCM'.$y}= - ${'s1tambahCM'.$y}  /${'ctCM'.$y}*(log(${'s1tambahCM'.$y} ,2) - log(${'ctCM'.$y}, 2)) - ${'s2tambahCM'.$y} /${'ctCM'.$y}*(log(${'s2tambahCM'.$y} ,2) - log(${'ctCM'.$y}, 2))- ${'s3tambahCM'.$y}/${'ctCM'.$y}*(log(${'s3tambahCM'.$y}  ,2) - log(${'ctCM'.$y}, 2));

		$tempHasilEntropiTotalCM = ${'ctCM'.$y} /$banyakBaris*${'hasilEntropiCM'.$y};
		if (is_nan($tempHasilEntropiTotalCM)) {
			$tempHasilEntropiTotalCM =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalCM += $tempHasilEntropiTotalCM;
		echo "hasilEntropiTotalCM ".$hasilEntropiTotalCM;
	}
			//Semua
		$hasilEntropiSemuaCM = - $tambahSemuaRCM /$banyakBaris*(log($tambahSemuaRCM ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTCM,2) - log($banyakBaris, 2))- $tambahSemuaSTCM/$banyakBaris*(log($tambahSemuaSTCM,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaCM ".$hasilEntropiSemuaCM;
		//Information Gain
		$hasilInformationGainCM = $hasilEntropiSemuaCM - $hasilEntropiTotalCM;
		echo "hasilInformationGainCM ".$hasilInformationGainCM;
	for ($y=16; $y <= 25 ; $y++) { 
		$tambahSemuaRCN += ${'s1tambahCN'.$y} ;
		$tambahSemuaTCN += ${'s2tambahCN'.$y};
		$tambahSemuaSTCN += ${'s3tambahCN'.$y} ;
		${'hasilEntropiCN'.$y}= - ${'s1tambahCN'.$y}  /${'ctCN'.$y}*(log(${'s1tambahCN'.$y} ,2) - log(${'ctCN'.$y}, 2)) - ${'s2tambahCN'.$y} /${'ctCN'.$y}*(log(${'s2tambahCN'.$y} ,2) - log(${'ctCN'.$y}, 2))- ${'s3tambahCN'.$y}/${'ctCN'.$y}*(log(${'s3tambahCN'.$y}  ,2) - log(${'ctCN'.$y}, 2));

		$tempHasilEntropiTotalCN = ${'ctCN'.$y} /$banyakBaris*${'hasilEntropiCN'.$y};
		if (is_nan($tempHasilEntropiTotalCN)) {
			$tempHasilEntropiTotalCN =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalCN += $tempHasilEntropiTotalCN;
		echo "hasilEntropiTotalCN ".$hasilEntropiTotalCN;
	}
			//Semua
		$hasilEntropiSemuaCN = - $tambahSemuaRCN /$banyakBaris*(log($tambahSemuaRCN ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTCN,2) - log($banyakBaris, 2))- $tambahSemuaSTCN/$banyakBaris*(log($tambahSemuaSTCN,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaCN ".$hasilEntropiSemuaCN;
		//Information Gain
		$hasilInformationGainCN = $hasilEntropiSemuaCN - $hasilEntropiTotalCN;
		echo "hasilInformationGainCN ".$hasilInformationGainCN;
	for ($x=92; $x <=103 ; $x++) { 
		${'tambahSemuaRCO'.$x} = ${'ct1YaCO'.$x} + ${'ct1TidakCO'.$x} + ${'ct1NormalCO'.$x} + ${'ct1BaikCO'.$x}+${'ct1KariesCO'.$x}+ ${'ct1CyanosisCO'.$x}+${'ct1TerabaCO'.$x}+ ${'ct1OedermaCO'.$x}+ ${'ct1AdaCO'.$x};
		${'tambahSemuaTCO'.$x} = ${'ct2YaCO'.$x} + ${'ct2TidakCO'.$x} + ${'ct2NormalCO'.$x}+ ${'ct2BaikCO'.$x}+${'ct2KariesCO'.$x}+ ${'ct2CyanosisCO'.$x}+${'ct2TerabaCO'.$x}+ ${'ct2OedermaCO'.$x}+ ${'ct2AdaCO'.$x} ;
		${'tambahSemuaSTCO'.$x} = ${'ct3YaCO'.$x} + ${'ct3TidakCO'.$x} + ${'ct3NormalCO'.$x}+ ${'ct3BaikCO'.$x} +${'ct3KariesCO'.$x}+ ${'ct3CyanosisCO'.$x}+${'ct3TerabaCO'.$x}+ ${'ct3OedermaCO'.$x}+ ${'ct3AdaCO'.$x};
		//Semua
		${'hasilEntropiSemuaCO'.$x}= - ${'tambahSemuaRCO'.$x} /$banyakBaris*(log(${'tambahSemuaRCO'.$x} ,2) - log($banyakBaris, 2)) - ${'tambahSemuaTCO'.$x}/$banyakBaris*(log(${'tambahSemuaTCO'.$x},2) - log($banyakBaris, 2))- ${'tambahSemuaSTCO'.$x}/$banyakBaris*(log(${'tambahSemuaSTCO'.$x},2) - log($banyakBaris, 2));
		// echo "string ".${'hasilEntropiSemuaC'.$x};

		${'hasilEntropiYaCO'.$x}= - ${'ct1YaCO'.$x}  /${'ctYaCO'.$x}*(log(${'ct1YaCO'.$x} ,2) - log(${'ctYaCO'.$x}, 2)) - ${'ct2YaCO'.$x}/${'ctYaCO'.$x}*(log(${'ct2YaCO'.$x},2) - log(${'ctYaCO'.$x}, 2))- ${'ct3YaCO'.$x}/${'ctYaCO'.$x}*(log(${'ct3YaCO'.$x} ,2) - log(${'ctYaCO'.$x}, 2));
		//Normal	
		${'hasilEntropiNormalCO'.$x}= - ${'ct1NormalCO'.$x}  /${'ctNormalCO'.$x}*(log(${'ct1NormalCO'.$x} ,2) - log(${'ctNormalCO'.$x}, 2)) - ${'ct2NormalCO'.$x}/${'ctNormalCO'.$x}*(log(${'ct2NormalCO'.$x},2) - log(${'ctNormalCO'.$x}, 2))- ${'ct3NormalCO'.$x}/${'ctNormalCO'.$x}*(log(${'ct3NormalCO'.$x} ,2) - log(${'ctNormalCO'.$x}, 2));
		//Tidak		
		${'hasilEntropiTidakCO'.$x}= - ${'ct1TidakCO'.$x}  /${'ctTidakCO'.$x}*(log(${'ct1TidakCO'.$x} ,2) - log(${'ctTidakCO'.$x}, 2)) - ${'ct2TidakCO'.$x}/${'ctTidakCO'.$x}*(log(${'ct2TidakCO'.$x},2) - log(${'ctTidakCO'.$x}, 2))- ${'ct3TidakCO'.$x}/${'ctTidakCO'.$x}*(log(${'ct3TidakCO'.$x} ,2) - log(${'ctTidakCO'.$x}, 2));
		//Baik
		${'hasilEntropiBaikCO'.$x}= - ${'ct1BaikCO'.$x}  /${'ctBaikCO'.$x}*(log(${'ct1BaikCO'.$x} ,2) - log(${'ctBaikCO'.$x}, 2)) - ${'ct2BaikCO'.$x}/${'ctBaikCO'.$x}*(log(${'ct2BaikCO'.$x},2) - log(${'ctBaikCO'.$x}, 2))- ${'ct3BaikCO'.$x}/${'ctBaikCO'.$x}*(log(${'ct3BaikCO'.$x} ,2) - log(${'ctBaikCO'.$x}, 2));
		//Karies
		${'hasilEntropiKariesCO'.$x}= - ${'ct1KariesCO'.$x}  /${'ctKariesCO'.$x}*(log(${'ct1KariesCO'.$x} ,2) - log(${'ctKariesCO'.$x}, 2)) - ${'ct2KariesCO'.$x}/${'ctKariesCO'.$x}*(log(${'ct2KariesCO'.$x},2) - log(${'ctKariesCO'.$x}, 2))- ${'ct3KariesCO'.$x}/${'ctKariesCO'.$x}*(log(${'ct3KariesCO'.$x} ,2) - log(${'ctKariesCO'.$x}, 2));
		//Cyanosis
		${'hasilEntropiCyanosisCO'.$x}= - ${'ct1CyanosisCO'.$x}  /${'ctCyanosisCO'.$x}*(log(${'ct1CyanosisCO'.$x} ,2) - log(${'ctCyanosisCO'.$x}, 2)) - ${'ct2CyanosisCO'.$x}/${'ctCyanosisCO'.$x}*(log(${'ct2CyanosisCO'.$x},2) - log(${'ctCyanosisCO'.$x}, 2))- ${'ct3CyanosisCO'.$x}/${'ctCyanosisCO'.$x}*(log(${'ct3CyanosisCO'.$x} ,2) - log(${'ctCyanosisCO'.$x}, 2));
		//Teraba
		${'hasilEntropiTerabaCO'.$x}= - ${'ct1TerabaCO'.$x}  /${'ctTerabaCO'.$x}*(log(${'ct1TerabaCO'.$x} ,2) - log(${'ctTerabaCO'.$x}, 2)) - ${'ct2TerabaCO'.$x}/${'ctTerabaCO'.$x}*(log(${'ct2TerabaCO'.$x},2) - log(${'ctTerabaCO'.$x}, 2))- ${'ct3TerabaCO'.$x}/${'ctTerabaCO'.$x}*(log(${'ct3TerabaCO'.$x} ,2) - log(${'ctTerabaCO'.$x}, 2));
		//Ooderma
		${'hasilEntropiOedermaCO'.$x}= - ${'ct1OedermaCO'.$x}  /${'ctOedermaCO'.$x}*(log(${'ct1OedermaCO'.$x} ,2) - log(${'ctOedermaCO'.$x}, 2)) - ${'ct2OedermaCO'.$x}/${'ctOedermaCO'.$x}*(log(${'ct2OedermaCO'.$x},2) - log(${'ctOedermaCO'.$x}, 2))- ${'ct3OedermaCO'.$x}/${'ctOedermaCO'.$x}*(log(${'ct3OedermaCO'.$x} ,2) - log(${'ctOedermaCO'.$x}, 2));
		//Ada
		${'hasilEntropiAdaCO'.$x}= - ${'ct1AdaCO'.$x}  /${'ctAdaCO'.$x}*(log(${'ct1AdaCO'.$x} ,2) - log(${'ctAdaCO'.$x}, 2)) - ${'ct2AdaCO'.$x}/${'ctAdaCO'.$x}*(log(${'ct2AdaCO'.$x},2) - log(${'ctAdaCO'.$x}, 2))- ${'ct3AdaCO'.$x}/${'ctAdaCO'.$x}*(log(${'ct3AdaCO'.$x} ,2) - log(${'ctAdaCO'.$x}, 2));

		${'tempHasilEntropiYaCO'.$x} = (${'ctYaCO'.$x}/$banyakBaris)*${'hasilEntropiYaCO'.$x};
		${'tempHasilEntropiTidakCO'.$x} = (${'ctTidakCO'.$x}/$banyakBaris)*${'hasilEntropiTidakCO'.$x};
		${'tempHasilEntropiNormalCO'.$x} = (${'ctNormalCO'.$x}/$banyakBaris)*${'hasilEntropiNormalCO'.$x};
		${'tempHasilEntropiBaikCO'.$x}=(${'ctBaikCO'.$x}/$banyakBaris)*${'hasilEntropiBaikCO'.$x};
		${'tempHasilEntropiAdaCO'.$x}=(${'ctAdaCO'.$x}/$banyakBaris)*${'hasilEntropiAdaCO'.$x};
		${'tempHasilEntropiOedermaCO'.$x}=(${'ctOedermaCO'.$x}/$banyakBaris)*${'hasilEntropiOedermaCO'.$x};
		${'tempHasilEntropiTerabaCO'.$x}=(${'ctTerabaCO'.$x}/$banyakBaris)*${'hasilEntropiTerabaCO'.$x};
		${'tempHasilEntropiCyanosisCO'.$x}= (${'ctCyanosisCO'.$x}/$banyakBaris)*${'hasilEntropiCyanosisCO'.$x};
		${'tempHasilEntropiKariesCO'.$x}= (${'ctKariesCO'.$x}/$banyakBaris)*${'hasilEntropiKariesCO'.$x};

		if(is_nan(${'hasilEntropiYaCO'.$x})||is_nan(${'tempHasilEntropiYaCO'.$x})){
			${'hasilEntropiYaCO'.$x}=0;
			${'tempHasilEntropiYaCO'.$x} =0;
		}if(is_nan(${'hasilEntropiTidakCO'.$x})||is_nan(${'tempHasilEntropiTidakCO'.$x})){
			${'hasilEntropiTidakCO'.$x}=0;
			${'tempHasilEntropiTidakCO'.$x}=0;
		}if(is_nan(${'hasilEntropiNormalCO'.$x})||is_nan(${'tempHasilEntropiNormalCO'.$x})){
			${'hasilEntropiNormalCO'.$x}=0;
			${'tempHasilEntropiNormalCO'.$x}=0;
		}if(is_nan(${'hasilEntropiBaikCO'.$x})||is_nan(${'tempHasilEntropiBaikCO'.$x})){
			${'hasilEntropiBaikCO'.$x}=0;
			${'tempHasilEntropiBaikCO'.$x} = 0;
		}if(is_nan(${'hasilEntropiAdaCO'.$x})||is_nan(${'tempHasilEntropiAdaCO'.$x})){
			${'hasilEntropiAdaCO'.$x}=0;
			${'tempHasilEntropiAdaCO'.$x}=0;
		}if(is_nan(${'hasilEntropiOedermaCO'.$x})||is_nan(${'tempHasilEntropiOedermaCO'.$x})){
			${'hasilEntropiOedermaCO'.$x}=0;
			${'tempHasilEntropiOedermaCO'.$x} = 0;
		}if(is_nan(${'hasilEntropiTerabaCO'.$x})||is_nan(${'tempHasilEntropiTerabaCO'.$x})){
			${'hasilEntropiTerabaCO'.$x}=0;
			${'tempHasilEntropiTerabaCO'.$x}=0;
		}if(is_nan(${'hasilEntropiCyanosisCO'.$x})||is_nan(${'tempHasilEntropiCyanosisCO'.$x})){
			${'hasilEntropiCyanosisCO'.$x}=0;
			${'tempHasilEntropiCyanosisCO'.$x} = 0;
		}if(is_nan(${'hasilEntropiKariesCO'.$x})||is_nan(${'tempHasilEntropiKariesCO'.$x})){
			${'hasilEntropiKariesCO'.$x}=0;
			${'tempHasilEntropiKariesCO'.$x}=0;
		}
		//Entropi Total
		${'hasilEntropiTotalCO'.$x}= ${'tempHasilEntropiYaCO'.$x} + ${'tempHasilEntropiTidakCO'.$x} + ${'tempHasilEntropiNormalCO'.$x} + ${'tempHasilEntropiBaikCO'.$x}+ ${'tempHasilEntropiAdaCO'.$x}+ ${'tempHasilEntropiOedermaCO'.$x}+ ${'tempHasilEntropiTerabaCO'.$x}+ ${'tempHasilEntropiCyanosisCO'.$x}+ ${'tempHasilEntropiKariesCO'.$x};
		//Information Gain
		${'hasilInformationGainCO'.$x} = ${'hasilEntropiSemuaCO'.$x} - ${'hasilEntropiTotalCO'.$x};
			echo "hasilInformationGainCO ".${'hasilInformationGainCO'.$x}." ke ".$x;
	}
	for ($y=0; $y <= 38 ; $y++) { 
		$tambahSemuaRDA += ${'s1tambahDA'.$y} ;
		$tambahSemuaTDA += ${'s2tambahDA'.$y};
		$tambahSemuaSTDA += ${'s3tambahDA'.$y} ;
		${'hasilEntropiDA'.$y}= - ${'s1tambahDA'.$y}  /${'ctDA'.$y}*(log(${'s1tambahDA'.$y} ,2) - log(${'ctDA'.$y}, 2)) - ${'s2tambahDA'.$y} /${'ctDA'.$y}*(log(${'s2tambahDA'.$y} ,2) - log(${'ctDA'.$y}, 2))- ${'s3tambahDA'.$y}/${'ctDA'.$y}*(log(${'s3tambahDA'.$y}  ,2) - log(${'ctDA'.$y}, 2));

		$tempHasilEntropiTotalDA = ${'ctDA'.$y} /$banyakBaris*${'hasilEntropiDA'.$y};
		if (is_nan($tempHasilEntropiTotalDA)) {
			$tempHasilEntropiTotalDA =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalDA += $tempHasilEntropiTotalDA;
		echo "hasilEntropiTotalDA ".$hasilEntropiTotalDA;
	}
			//Semua
		$hasilEntropiSemuaDA = - $tambahSemuaRDA /$banyakBaris*(log($tambahSemuaRDA ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTDA,2) - log($banyakBaris, 2))- $tambahSemuaSTDA/$banyakBaris*(log($tambahSemuaSTDA,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaDA ".$hasilEntropiSemuaDA;
		//Information Gain
		$hasilInformationGainDA = $hasilEntropiSemuaDA - $hasilEntropiTotalDA;
		echo "hasilInformationGainDA ".$hasilInformationGainDA;
	for ($y=2; $y <= 56 ; $y++) { 
		$tambahSemuaRDB += ${'s1tambahDB'.$y} ;
		$tambahSemuaTDB += ${'s2tambahDB'.$y};
		$tambahSemuaSTDB += ${'s3tambahDB'.$y} ;
		${'hasilEntropiDB'.$y}= - ${'s1tambahDB'.$y}  /${'ctDB'.$y}*(log(${'s1tambahDB'.$y} ,2) - log(${'ctDB'.$y}, 2)) - ${'s2tambahDB'.$y} /${'ctDB'.$y}*(log(${'s2tambahDB'.$y} ,2) - log(${'ctDB'.$y}, 2))- ${'s3tambahDB'.$y}/${'ctDB'.$y}*(log(${'s3tambahDB'.$y}  ,2) - log(${'ctDB'.$y}, 2));

		$tempHasilEntropiTotalDB = ${'ctDB'.$y} /$banyakBaris*${'hasilEntropiDB'.$y};
		if (is_nan($tempHasilEntropiTotalDB)) {
			$tempHasilEntropiTotalDB =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalDB += $tempHasilEntropiTotalDB;
		echo "hasilEntropiTotalDB ".$hasilEntropiTotalDB;
	}
			//Semua
		$hasilEntropiSemuaDB = - $tambahSemuaRDB /$banyakBaris*(log($tambahSemuaRDB ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTDB,2) - log($banyakBaris, 2))- $tambahSemuaSTDB/$banyakBaris*(log($tambahSemuaSTDB,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaDB ".$hasilEntropiSemuaDB;
		//Information Gain
		$hasilInformationGainDB = $hasilEntropiSemuaDB - $hasilEntropiTotalDB;
		echo "hasilInformationGainDB ".$hasilInformationGainDB;
	for ($x=106; $x <=108 ; $x++) { 
		${'tambahSemuaRDC'.$x} = ${'ct1YaDC'.$x} + ${'ct1TidakDC'.$x} + ${'ct1NormalDC'.$x} + ${'ct1BujurDC'.$x}+${'ct1KepalaDC'.$x}+ ${'ct1LintangDC'.$x}+${'ct1SungsangDC'.$x}+ ${'ct1KelainanDC'.$x}+ ${'ct1AdaDC'.$x};
		${'tambahSemuaTDC'.$x} = ${'ct2YaDC'.$x} + ${'ct2TidakDC'.$x} + ${'ct2NormalDC'.$x}+ ${'ct2BujurDC'.$x}+${'ct2KepalaDC'.$x}+ ${'ct2LintangDC'.$x}+${'ct2SungsangDC'.$x}+ ${'ct2KelainanDC'.$x}+ ${'ct2AdaDC'.$x} ;
		${'tambahSemuaSTDC'.$x} = ${'ct3YaDC'.$x} + ${'ct3TidakDC'.$x} + ${'ct3NormalDC'.$x}+ ${'ct3BujurDC'.$x} +${'ct3KepalaDC'.$x}+ ${'ct3LintangDC'.$x}+${'ct3SungsangDC'.$x}+ ${'ct3KelainanDC'.$x}+ ${'ct3AdaDC'.$x};
		//Semua
		${'hasilEntropiSemuaDC'.$x}= - ${'tambahSemuaRDC'.$x} /$banyakBaris*(log(${'tambahSemuaRDC'.$x} ,2) - log($banyakBaris, 2)) - ${'tambahSemuaTDC'.$x}/$banyakBaris*(log(${'tambahSemuaTDC'.$x},2) - log($banyakBaris, 2))- ${'tambahSemuaSTDC'.$x}/$banyakBaris*(log(${'tambahSemuaSTDC'.$x},2) - log($banyakBaris, 2));
		echo "stringSemua ".${'hasilEntropiSemuaDC'.$x};

		${'hasilEntropiYaDC'.$x}= - ${'ct1YaDC'.$x}  /${'ctYaDC'.$x}*(log(${'ct1YaDC'.$x} ,2) - log(${'ctYaDC'.$x}, 2)) - ${'ct2YaDC'.$x}/${'ctYaDC'.$x}*(log(${'ct2YaDC'.$x},2) - log(${'ctYaDC'.$x}, 2))- ${'ct3YaDC'.$x}/${'ctYaDC'.$x}*(log(${'ct3YaDC'.$x} ,2) - log(${'ctYaDC'.$x}, 2));
		//Normal	
		${'hasilEntropiNormalDC'.$x}= - ${'ct1NormalDC'.$x}/${'ctNormalDC'.$x}*(log(${'ct1NormalDC'.$x} ,2) - log(${'ctNormalDC'.$x}, 2)) - ${'ct2NormalDC'.$x}/${'ctNormalDC'.$x}*(log(${'ct2NormalDC'.$x},2) - log(${'ctNormalDC'.$x}, 2))- ${'ct3NormalDC'.$x}/${'ctNormalDC'.$x}*(log(${'ct3NormalDC'.$x} ,2) - log(${'ctNormalDC'.$x}, 2));
		//Tidak		
		${'hasilEntropiTidakDC'.$x}= - ${'ct1TidakDC'.$x}  /${'ctTidakDC'.$x}*(log(${'ct1TidakDC'.$x} ,2) - log(${'ctTidakDC'.$x}, 2)) - ${'ct2TidakDC'.$x}/${'ctTidakDC'.$x}*(log(${'ct2TidakDC'.$x},2) - log(${'ctTidakDC'.$x}, 2))- ${'ct3TidakDC'.$x}/${'ctTidakDC'.$x}*(log(${'ct3TidakDC'.$x} ,2) - log(${'ctTidakDC'.$x}, 2));
		//Bujur
		${'hasilEntropiBujurDC'.$x}= - ${'ct1BujurDC'.$x}  /${'ctBujurDC'.$x}*(log(${'ct1BujurDC'.$x} ,2) - log(${'ctBujurDC'.$x}, 2)) - ${'ct2BujurDC'.$x}/${'ctBujurDC'.$x}*(log(${'ct2BujurDC'.$x},2) - log(${'ctBujurDC'.$x}, 2))- ${'ct3BujurDC'.$x}/${'ctBujurDC'.$x}*(log(${'ct3BujurDC'.$x} ,2) - log(${'ctBujurDC'.$x}, 2));
		//Kepala
		${'hasilEntropiKepalaDC'.$x}= - ${'ct1KepalaDC'.$x}  /${'ctKepalaDC'.$x}*(log(${'ct1KepalaDC'.$x} ,2) - log(${'ctKepalaDC'.$x}, 2)) - ${'ct2KepalaDC'.$x}/${'ctKepalaDC'.$x}*(log(${'ct2KepalaDC'.$x},2) - log(${'ctKepalaDC'.$x}, 2))- ${'ct3KepalaDC'.$x}/${'ctKepalaDC'.$x}*(log(${'ct3KepalaDC'.$x} ,2) - log(${'ctKepalaDC'.$x}, 2));
		//Lintang
		${'hasilEntropiLintangDC'.$x}= - ${'ct1LintangDC'.$x}  /${'ctLintangDC'.$x}*(log(${'ct1LintangDC'.$x} ,2) - log(${'ctLintangDC'.$x}, 2)) - ${'ct2LintangDC'.$x}/${'ctLintangDC'.$x}*(log(${'ct2LintangDC'.$x},2) - log(${'ctLintangDC'.$x}, 2))- ${'ct3LintangDC'.$x}/${'ctLintangDC'.$x}*(log(${'ct3LintangDC'.$x} ,2) - log(${'ctLintangDC'.$x}, 2));
		//Sungsang
		${'hasilEntropiSungsangDC'.$x}= - ${'ct1SungsangDC'.$x}  /${'ctSungsangDC'.$x}*(log(${'ct1SungsangDC'.$x} ,2) - log(${'ctSungsangDC'.$x}, 2)) - ${'ct2SungsangDC'.$x}/${'ctSungsangDC'.$x}*(log(${'ct2SungsangDC'.$x},2) - log(${'ctSungsangDC'.$x}, 2))- ${'ct3SungsangDC'.$x}/${'ctSungsangDC'.$x}*(log(${'ct3SungsangDC'.$x} ,2) - log(${'ctSungsangDC'.$x}, 2));
		//Kelainan
		${'hasilEntropiKelainanDC'.$x}= - ${'ct1KelainanDC'.$x}  /${'ctKelainanDC'.$x}*(log(${'ct1KelainanDC'.$x} ,2) - log(${'ctKelainanDC'.$x}, 2)) - ${'ct2KelainanDC'.$x}/${'ctKelainanDC'.$x}*(log(${'ct2KelainanDC'.$x},2) - log(${'ctKelainanDC'.$x}, 2))- ${'ct3KelainanDC'.$x}/${'ctKelainanDC'.$x}*(log(${'ct3KelainanDC'.$x} ,2) - log(${'ctKelainanDC'.$x}, 2));

		${'tempHasilEntropiYaDC'.$x} = (${'ctYaDC'.$x}/$banyakBaris)*${'hasilEntropiYaDC'.$x};
		${'tempHasilEntropiTidakDC'.$x}  = (${'ctTidakDC'.$x}/$banyakBaris)*${'hasilEntropiTidakDC'.$x};
		${'tempHasilEntropiNormalDC'.$x} = (${'ctNormalDC'.$x}/$banyakBaris)*${'hasilEntropiNormalDC'.$x};
		${'tempHasilEntropiBujurDC'.$x}=(${'ctBujurDC'.$x}/$banyakBaris)*${'hasilEntropiBujurDC'.$x};
		${'tempHasilEntropiKelainanDC'.$x}=(${'ctKelainanDC'.$x}/$banyakBaris)*${'hasilEntropiKelainanDC'.$x};
		${'tempHasilEntropiSungsangDC'.$x}=(${'ctSungsangDC'.$x}/$banyakBaris)*${'hasilEntropiSungsangDC'.$x};
		${'tempHasilEntropiLintangDC'.$x}=(${'ctLintangDC'.$x}/$banyakBaris)*${'hasilEntropiLintangDC'.$x};
		${'tempHasilEntropiKepalaDC'.$x}=(${'ctKepalaDC'.$x}/$banyakBaris)*${'hasilEntropiKepalaDC'.$x};

		if(is_nan(${'hasilEntropiYaDC'.$x})||is_nan(${'tempHasilEntropiYaDC'.$x})){
			${'hasilEntropiYaDC'.$x}=0;
			${'tempHasilEntropiYaDC'.$x}=0;
		}if(is_nan(${'hasilEntropiTidakDC'.$x})||is_nan(${'tempHasilEntropiTidakDC'.$x})){
			${'hasilEntropiTidakDC'.$x}=0;
			${'tempHasilEntropiTidakDC'.$x} = 0;
		}if(is_nan(${'hasilEntropiNormalDC'.$x})||is_nan(${'tempHasilEntropiNormalDC'.$x})){
			${'hasilEntropiNormalDC'.$x}=0;
			${'tempHasilEntropiNormalDC'.$x} = 0;
		}if(is_nan(${'hasilEntropiBujurDC'.$x})||is_nan(${'tempHasilEntropiBujurDC'.$x})){
			${'hasilEntropiBujurDC'.$x}=0;
			${'tempHasilEntropiBujurDC'.$x}=0;
		}if(is_nan(${'hasilEntropiKelainanDC'.$x})||is_nan(${'tempHasilEntropiKelainanDC'.$x})){
			${'hasilEntropiKelainanDC'.$x}=0;
			${'tempHasilEntropiKelaiananDC'.$x} = 0;
		}if(is_nan(${'hasilEntropiSungsangDC'.$x})||is_nan(${'tempHasilEntropiSungsangDC'.$x})){
			${'hasilEntropiSungsangDC'.$x}=0;
			${'tempHasilEntropiSungsangDC'.$x} = 0;
		}if(is_nan(${'hasilEntropiLintangDC'.$x})||is_nan(${'tempHasilEntropiLintangDC'.$x})){
			${'hasilEntropiLintangDC'.$x}=0;
			${'tempHasilEntropiLintangDC'.$x}=0;
		}if(is_nan(${'hasilEntropiKepalaDC'.$x})||is_nan(${'tempHasilEntropiKepalaDC'.$x})){
			${'hasilEntropiKepalaDC'.$x}=0;
			${'tempHasilEntropiKepalaDC'.$x}=0;
		}
		// echo "string ".${'tempHasilEntropiYaDC'.$x};
		// echo "string ".${'tempHasilEntropiTidakDC'.$x};
		// echo "string ".${'tempHasilEntropiBujurDC'.$x};
		// echo "string ".${'tempHasilEntropiSungsangDC'.$x};
		// echo "string ".${'tempHasilEntropiLintangDC'.$x};
		// echo "string ".${'tempHasilEntropiKepalaDC'.$x};
		//Entropi Total
		${'hasilEntropiTotalDC'.$x} = ${'tempHasilEntropiYaDC'.$x} + ${'tempHasilEntropiTidakDC'.$x} + ${'tempHasilEntropiNormalDC'.$x} + ${'tempHasilEntropiBujurDC'.$x}+ ${'tempHasilEntropiKelainanDC'.$x}+ ${'tempHasilEntropiSungsangDC'.$x}+ ${'tempHasilEntropiLintangDC'.$x}+ ${'tempHasilEntropiKepalaDC'.$x};
		echo "hasilEntropiTotalDC ".${'hasilEntropiTotalDC'.$x};
		if (is_nan(${'hasilEntropiTotalDC'.$x})) {
			${'hasilEntropiTotalDC'.$x} = 0;
		}
		//Information Gain
		${'hasilInformationGainDC'.$x} = ${'hasilEntropiSemuaDC'.$x} - ${'hasilEntropiTotalDC'.$x};
			echo "hasilInformationGainDC ".${'hasilInformationGainDC'.$x}." ke ".$x;
	}
	for ($y=0; $y <= 1 ; $y++) { 
		$tambahSemuaRDF += ${'s1tambahDF'.$y} ;
		$tambahSemuaTDF += ${'s2tambahDF'.$y};
		$tambahSemuaSTDF += ${'s3tambahDF'.$y} ;
		${'hasilEntropiDF'.$y}= - ${'s1tambahDF'.$y}  /${'ctDF'.$y}*(log(${'s1tambahDF'.$y} ,2) - log(${'ctDF'.$y}, 2)) - ${'s2tambahDF'.$y} /${'ctDF'.$y}*(log(${'s2tambahDF'.$y} ,2) - log(${'ctDF'.$y}, 2))- ${'s3tambahDF'.$y}/${'ctDF'.$y}*(log(${'s3tambahDF'.$y}  ,2) - log(${'ctDF'.$y}, 2));

		$tempHasilEntropiTotalDF = ${'ctDF'.$y} /$banyakBaris*${'hasilEntropiDF'.$y};
		if (is_nan($tempHasilEntropiTotalDF)) {
			$tempHasilEntropiTotalDF =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalDF += $tempHasilEntropiTotalDF;
		echo "hasilEntropiTotalDF ".$hasilEntropiTotalDF;
	}
			//Semua
		$hasilEntropiSemuaDF = - $tambahSemuaRDF /$banyakBaris*(log($tambahSemuaRDF ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTDF,2) - log($banyakBaris, 2))- $tambahSemuaSTDF/$banyakBaris*(log($tambahSemuaSTDF,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaDF ".$hasilEntropiSemuaDF;
		//Information Gain
		$hasilInformationGainDF = $hasilEntropiSemuaDF - $hasilEntropiTotalDF;
		echo "hasilInformationGainDF ".$hasilInformationGainDF;
	for ($y=126; $y <= 158 ; $y++) { 
		$tambahSemuaRDG += ${'s1tambahDG'.$y} ;
		$tambahSemuaTDG += ${'s2tambahDG'.$y};
		$tambahSemuaSTDG += ${'s3tambahDG'.$y} ;
		${'hasilEntropiDG'.$y}= - ${'s1tambahDG'.$y}  /${'ctDG'.$y}*(log(${'s1tambahDG'.$y} ,2) - log(${'ctDG'.$y}, 2)) - ${'s2tambahDG'.$y} /${'ctDG'.$y}*(log(${'s2tambahDG'.$y} ,2) - log(${'ctDG'.$y}, 2))- ${'s3tambahDG'.$y}/${'ctDG'.$y}*(log(${'s3tambahDG'.$y}  ,2) - log(${'ctDG'.$y}, 2));

		$tempHasilEntropiTotalDG = ${'ctDG'.$y} /$banyakBaris*${'hasilEntropiDG'.$y};
		if (is_nan($tempHasilEntropiTotalDG)) {
			$tempHasilEntropiTotalDG =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalDG += $tempHasilEntropiTotalDG;
		echo "hasilEntropiTotalDG ".$hasilEntropiTotalDG;
	}
			//Semua
		$hasilEntropiSemuaDG = - $tambahSemuaRDG /$banyakBaris*(log($tambahSemuaRDG ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTDG,2) - log($banyakBaris, 2))- $tambahSemuaSTDG/$banyakBaris*(log($tambahSemuaSTDG,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaDG ".$hasilEntropiSemuaDG;
		//Information Gain
		$hasilInformationGainDG = $hasilEntropiSemuaDG - $hasilEntropiTotalDG;
		echo "hasilInformationGainDG ".$hasilInformationGainDG;
	for ($x=111; $x <=111 ; $x++) { 
		${'tambahSemuaRDH'.$x} = ${'ct1YaDH'.$x} + ${'ct1TidakDH'.$x} ;
		${'tambahSemuaTDH'.$x} = ${'ct2YaDH'.$x} + ${'ct2TidakDH'.$x} ;
		${'tambahSemuaSTDH'.$x} = ${'ct3YaDH'.$x} + ${'ct3TidakDH'.$x} ;
		//Semua
		${'hasilEntropiSemuaDH'.$x}= - ${'tambahSemuaRDH'.$x} /$banyakBaris*(log(${'tambahSemuaRDH'.$x} ,2) - log($banyakBaris, 2)) - ${'tambahSemuaTDH'.$x}/$banyakBaris*(log(${'tambahSemuaTDH'.$x},2) - log($banyakBaris, 2))- ${'tambahSemuaSTDH'.$x}/$banyakBaris*(log(${'tambahSemuaSTDH'.$x},2) - log($banyakBaris, 2));
		// echo "string ".${'hasilEntropiSemuaC'.$x};

		${'hasilEntropiYaDH'.$x}= - ${'ct1YaDH'.$x}  /${'ctYaDH'.$x}*(log(${'ct1YaDH'.$x} ,2) - log(${'ctYaDH'.$x}, 2)) - ${'ct2YaDH'.$x}/${'ctYaDH'.$x}*(log(${'ct2YaDH'.$x},2) - log(${'ctYaDH'.$x}, 2))- ${'ct3YaDH'.$x}/${'ctYaDH'.$x}*(log(${'ct3YaDH'.$x} ,2) - log(${'ctYaDH'.$x}, 2));
		//Tidak		
		${'hasilEntropiTidakDH'.$x}= - ${'ct1TidakDH'.$x}  /${'ctTidakDH'.$x}*(log(${'ct1TidakDH'.$x} ,2) - log(${'ctTidakDH'.$x}, 2)) - ${'ct2TidakDH'.$x}/${'ctTidakDH'.$x}*(log(${'ct2TidakDH'.$x},2) - log(${'ctTidakDH'.$x}, 2))- ${'ct3TidakDH'.$x}/${'ctTidakDH'.$x}*(log(${'ct3TidakDH'.$x} ,2) - log(${'ctTidakDH'.$x}, 2));
		if(is_nan(${'hasilEntropiYaDH'.$x})){
			${'hasilEntropiYaDH'.$x}=0;
		}if(is_nan(${'hasilEntropiTidakDH'.$x})){
			${'hasilEntropiTidakDH'.$x}=0;
		}
		//Entropi Total
		${'hasilEntropiTotalDH'.$x}= ( ${'ctYaDH'.$x}/$banyakBaris)*${'hasilEntropiYaDH'.$x}  + (${'ctTidakDH'.$x}/$banyakBaris)*${'hasilEntropiTidakDH'.$x};
		echo "hasilEntropiTotalDH ".${'hasilEntropiTotalDH'.$x};
		//Information Gain
		${'hasilInformationGainDH'.$x} = ${'hasilEntropiSemuaDH'.$x} - ${'hasilEntropiTotalDH'.$x};
			echo "hasilInformationGainDH ".${'hasilInformationGainDH'.$x}." ke ".$x;
	}
	$hasilInformationGainDI=0;
	for ($y=7; $y <= 15 ; $y++) { 
		for ($z=0; $z <100 ; $z++) { 
			 $cekNilai = $y.".".$z;
			 $floatval = floatval($cekNilai);
			$tambahSemuaRDI += ${'s1tambahDI'.$floatval};
			$tambahSemuaTDI += ${'s2tambahDI'.$floatval};
			$tambahSemuaSTDI += ${'s3tambahDI'.$floatval} ;
			${'hasilEntropiDI'.$y}= - ${'s1tambahDI'.$floatval} /${'ctDI'.$y}*(log(${'s1tambahDI'.$floatval},2) - log(${'ctDI'.$y}, 2)) - ${'s2tambahDI'.$floatval} /${'ctDI'.$y}*(log(${'s2tambahDI'.$floatval} ,2) - log(${'ctDI'.$y}, 2))- ${'s3tambahDI'.$floatval}/${'ctDI'.$y}*(log(${'s3tambahDI'.$floatval}  ,2) - log(${'ctDI'.$y}, 2));

			$tempHasilEntropiTotalDI = ${'ctDI'.$y} /$banyakBaris*${'hasilEntropiDI'.$y};
			if (is_nan($tempHasilEntropiTotalDI)) {
				$tempHasilEntropiTotalDI =0;
			}

			//Entropi Total
			$hasilEntropiTotalDI += $tempHasilEntropiTotalDI;
			echo "hasilEntropiTotalDI ".$hasilEntropiTotalDI;
		}
	}
				//Semua
		$hasilEntropiSemuaDI = - $tambahSemuaRDI /$banyakBaris*(log($tambahSemuaRDI ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTDI,2) - log($banyakBaris, 2))- $tambahSemuaSTDI/$banyakBaris*(log($tambahSemuaSTDI,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaDI ".$hasilEntropiSemuaDI;
		//Information Gain
		$hasilInformationGainDI = $hasilEntropiSemuaDI - $hasilEntropiTotalDI;
		echo "hasilInformationGainDI ".$hasilInformationGainDI;
	for ($y=0; $y <= 1 ; $y++) { 
		$tambahSemuaRDJ += ${'s1tambahDJ'.$y} ;
		$tambahSemuaTDJ += ${'s2tambahDJ'.$y};
		$tambahSemuaSTDJ += ${'s3tambahDJ'.$y} ;
		${'hasilEntropiDJ'.$y}= - ${'s1tambahDJ'.$y}  /${'ctDJ'.$y}*(log(${'s1tambahDJ'.$y} ,2) - log(${'ctDJ'.$y}, 2)) - ${'s2tambahDJ'.$y} /${'ctDJ'.$y}*(log(${'s2tambahDJ'.$y} ,2) - log(${'ctDJ'.$y}, 2))- ${'s3tambahDJ'.$y}/${'ctDJ'.$y}*(log(${'s3tambahDJ'.$y}  ,2) - log(${'ctDJ'.$y}, 2));

		$tempHasilEntropiTotalDJ = ${'ctDJ'.$y} /$banyakBaris*${'hasilEntropiDJ'.$y};
		if (is_nan($tempHasilEntropiTotalDJ)) {
			$tempHasilEntropiTotalDJ =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalDJ += $tempHasilEntropiTotalDJ;
		echo "hasilEntropiTotalDJ ".$hasilEntropiTotalDJ;
	}
			//Semua
		$hasilEntropiSemuaDJ = - $tambahSemuaRDJ /$banyakBaris*(log($tambahSemuaRDJ ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTDJ,2) - log($banyakBaris, 2))- $tambahSemuaSTDJ/$banyakBaris*(log($tambahSemuaSTDJ,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaDJ ".$hasilEntropiSemuaDJ;
		//Information Gain
		$hasilInformationGainDJ = $hasilEntropiSemuaDJ - $hasilEntropiTotalDJ;
		echo "hasilInformationGainDJ ".$hasilInformationGainDJ;
	for ($y=0; $y <= 1 ; $y++) { 
		$tambahSemuaRDK += ${'s1tambahDK'.$y} ;
		$tambahSemuaTDK += ${'s2tambahDK'.$y};
		$tambahSemuaSTDK += ${'s3tambahDK'.$y} ;
		${'hasilEntropiDK'.$y}= - ${'s1tambahDK'.$y}  /${'ctDK'.$y}*(log(${'s1tambahDK'.$y} ,2) - log(${'ctDK'.$y}, 2)) - ${'s2tambahDK'.$y} /${'ctDK'.$y}*(log(${'s2tambahDK'.$y} ,2) - log(${'ctDK'.$y}, 2))- ${'s3tambahDK'.$y}/${'ctDK'.$y}*(log(${'s3tambahDK'.$y}  ,2) - log(${'ctDK'.$y}, 2));

		$tempHasilEntropiTotalDK = ${'ctDK'.$y} /$banyakBaris*${'hasilEntropiDK'.$y};
		if (is_nan($tempHasilEntropiTotalDK)) {
			$tempHasilEntropiTotalDK =0;
		}
	
		//Entropi Total
		$hasilEntropiTotalDK += $tempHasilEntropiTotalDK;
		echo "hasilEntropiTotalDK ".$hasilEntropiTotalDK;
	}
			//Semua
		$hasilEntropiSemuaDK = - $tambahSemuaRDK /$banyakBaris*(log($tambahSemuaRDK ,2) - log($banyakBaris, 2)) - $tambahSemuaTA/$banyakBaris*(log($tambahSemuaTDK,2) - log($banyakBaris, 2))- $tambahSemuaSTDK/$banyakBaris*(log($tambahSemuaSTDK,2) - log($banyakBaris, 2));
		echo "hasilEntropiSemuaDK ".$hasilEntropiSemuaDK;
		//Information Gain
		$hasilInformationGainDK = $hasilEntropiSemuaDK - $hasilEntropiTotalDK;
		echo "hasilInformationGainDK ".$hasilInformationGainDK;
	for ($x=115; $x <=115 ; $x++) { 
		${'tambahSemuaRDL'.$x} = ${'ct1ADL'.$x} + ${'ct1BDL'.$x} + ${'ct1ODL'.$x} + ${'ct1ABDL'.$x};
		${'tambahSemuaTDL'.$x} = ${'ct2ADL'.$x} + ${'ct2BDL'.$x} + ${'ct2ODL'.$x}+ ${'ct2ABDL'.$x} ;
		${'tambahSemuaSTDL'.$x} = ${'ct3ADL'.$x} + ${'ct3BDL'.$x} + ${'ct3ODL'.$x}+ ${'ct3ABDL'.$x};
		//Semua
		${'hasilEntropiSemuaDL'.$x}= - ${'tambahSemuaRDL'.$x} /$banyakBaris*(log(${'tambahSemuaRDL'.$x} ,2) - log($banyakBaris, 2)) - ${'tambahSemuaTDL'.$x}/$banyakBaris*(log(${'tambahSemuaTDL'.$x},2) - log($banyakBaris, 2))- ${'tambahSemuaSTDL'.$x}/$banyakBaris*(log(${'tambahSemuaSTDL'.$x},2) - log($banyakBaris, 2));
		// echo "string ".${'hasilEntropiSemuaC'.$x};
		//A
		${'hasilEntropiADL'.$x}= - ${'ct1ADL'.$x}  /${'ctADL'.$x}*(log(${'ct1ADL'.$x} ,2) - log(${'ctADL'.$x}, 2)) - ${'ct2ADL'.$x}/${'ctADL'.$x}*(log(${'ct2ADL'.$x},2) - log(${'ctADL'.$x}, 2))- ${'ct3ADL'.$x}/${'ctADL'.$x}*(log(${'ct3ADL'.$x} ,2) - log(${'ctADL'.$x}, 2));
		//O
		${'hasilEntropiODL'.$x}= - ${'ct1ODL'.$x}  /${'ctODL'.$x}*(log(${'ct1ODL'.$x} ,2) - log(${'ctODL'.$x}, 2)) - ${'ct2ODL'.$x}/${'ctODL'.$x}*(log(${'ct2ODL'.$x},2) - log(${'ctODL'.$x}, 2))- ${'ct3ODL'.$x}/${'ctODL'.$x}*(log(${'ct3ODL'.$x} ,2) - log(${'ctODL'.$x}, 2));
		//B	
		${'hasilEntropiBDL'.$x}= - ${'ct1BDL'.$x}  /${'ctBDL'.$x}*(log(${'ct1BDL'.$x} ,2) - log(${'ctBDL'.$x}, 2)) - ${'ct2BDL'.$x}/${'ctBDL'.$x}*(log(${'ct2BDL'.$x},2) - log(${'ctBDL'.$x}, 2))- ${'ct3BDL'.$x}/${'ctBDL'.$x}*(log(${'ct3BDL'.$x} ,2) - log(${'ctBDL'.$x}, 2));
		//AB
		${'hasilEntropiABDL'.$x}= - ${'ct1ABDL'.$x}  /${'ctABDL'.$x}*(log(${'ct1ABDL'.$x} ,2) - log(${'ctABDL'.$x}, 2)) - ${'ct2ABDL'.$x}/${'ctABDL'.$x}*(log(${'ct2ABDL'.$x},2) - log(${'ctABDL'.$x}, 2))- ${'ct3ABDL'.$x}/${'ctABDL'.$x}*(log(${'ct3ABDL'.$x} ,2) - log(${'ctABDL'.$x}, 2));
		
		${'tempHasilEntropiADL'.$x}= (${'ctADL'.$x}/$banyakBaris)*${'hasilEntropiADL'.$x};
		${'tempHasilEntropiODL'.$x}= (${'ctADL'.$x}/$banyakBaris)*${'hasilEntropiADL'.$x};
		${'tempHasilEntropiBDL'.$x}=(${'ctBDL'.$x}/$banyakBaris)*${'hasilEntropiBDL'.$x};
		${'tempHasilEntropiABDL'.$x}= (${'ctABDL'.$x}/$banyakBaris)*${'hasilEntropiABDL'.$x};
		

		if(is_nan(${'hasilEntropiADL'.$x})||is_nan(${'tempHasilEntropiADL'.$x})){
			${'hasilEntropiADL'.$x}=0;
			${'tempHasilEntropiADL'.$x}=0;
		}if(is_nan(${'hasilEntropiBDL'.$x})||${'tempHasilEntropiBDL'.$x}){
			${'hasilEntropiBDL'.$x}=0;
			${'tempHasilEntropiBDL'.$x}=0;
		}if(is_nan(${'hasilEntropiODL'.$x})||is_nan(${'tempHasilEntropiODL'.$x})){
			${'hasilEntropiODL'.$x}=0;
			${'tempHasilEntropiODL'.$x}=0;
		}if(is_nan(${'hasilEntropiABDL'.$x})||is_nan(${'tempHasilEntropiABDL'.$x})){
			${'hasilEntropiABDL'.$x}=0;
			${'tempHasilEntropiABDL'.$x}=0;
		}
		//Entropi Total
		${'hasilEntropiTotalDL'.$x}=${'tempHasilEntropiADL'.$x}+${'tempHasilEntropiODL'.$x}+${'tempHasilEntropiBDL'.$x}+${'tempHasilEntropiABDL'.$x} ;
		echo "hasilEntropiTotalDL ".${'hasilEntropiTotalDL'.$x};
		//Information Gain
		${'hasilInformationGainDL'.$x} = ${'hasilEntropiSemuaDL'.$x} - ${'hasilEntropiTotalDL'.$x};
			echo "hasilInformationGainDL ".${'hasilInformationGainDL'.$x}." ke ".$x;
	}
	// for ($x=116; $x <=116 ; $x++) { 
	// 	if($nilai[$l] [$x]=="Kehamilan-Resiko-SangatTinggi"){
	// 		$tambahResikoSTDM = 1;
	// 		${'ctResikoSTDM'.$x} += $tambahResikoSTDM;

	// 	}elseif($nilai[$l] [$x]=="Kehamilan-Resiko-Tinggi"){
	// 		$tambahResikoTDM = 1;
	// 		${'ctResikoTDM'.$x} += $tambahResikoTDM;
	// 	}elseif($nilai[$l] [$x]=="Kehamilan-Resiko-Rendah"){
	// 		$tambahResikoRDM = 1;
	// 		${'ctResikoRDM'.$x} += $tambahResikoRDM;
	// 	}
	// }

	$InformationGain = array($hasilInformationGainA, $hasilInformationGainB, $hasilInformationGainC2,$hasilInformationGainC3,$hasilInformationGainC3,$hasilInformationGainC5,$hasilInformationGainC6,$hasilInformationGainC7,$hasilInformationGainC8,$hasilInformationGainC9,$hasilInformationGainC10,$hasilInformationGainC11,$hasilInformationGainC12,$hasilInformationGainC13,$hasilInformationGainC14,$hasilInformationGainC15,$hasilInformationGainC16,$hasilInformationGainC17,$hasilInformationGainC18,$hasilInformationGainC19,$hasilInformationGainC20, $hasilInformationGainV,$hasilInformationGainW, $hasilInformationGainX23, $hasilInformationGainX24, $hasilInformationGainX25, $hasilInformationGainAA, $hasilInformationGainAB,$hasilInformationGainAC,$hasilInformationGainAD, $hasilInformationGainAE30,$hasilInformationGainAE31,$hasilInformationGainAE32,$hasilInformationGainAE33,$hasilInformationGainAE34,$hasilInformationGainAE35,$hasilInformationGainAE36,$hasilInformationGainAE37,$hasilInformationGainAE38,$hasilInformationGainAE39,$hasilInformationGainAE40,$hasilInformationGainAE41,$hasilInformationGainAE42,$hasilInformationGainAE43,$hasilInformationGainAE44,$hasilInformationGainAE45,$hasilInformationGainAE46,$hasilInformationGainAE47,$hasilInformationGainAE48,$hasilInformationGainAE49,$hasilInformationGainAE50,$hasilInformationGainAE51,$hasilInformationGainAE52,$hasilInformationGainAE53,$hasilInformationGainAE54,$hasilInformationGainAE55,$hasilInformationGainAE56,$hasilInformationGainAE57,$hasilInformationGainAE58,$hasilInformationGainAE59,$hasilInformationGainAE60,$hasilInformationGainAE61,$hasilInformationGainAE62,$hasilInformationGainAE63,$hasilInformationGainAE64,$hasilInformationGainAE65,$hasilInformationGainAE66,$hasilInformationGainAE67,$hasilInformationGainAE68,$hasilInformationGainAE69,$hasilInformationGainAE70,$hasilInformationGainAE71,$hasilInformationGainAE72,$hasilInformationGainAE73,$hasilInformationGainAE74,$hasilInformationGainBX,$hasilInformationGainBY,$hasilInformationGainBZ77,$hasilInformationGainBZ78,$hasilInformationGainCB, $hasilInformationGainCC, $hasilInformationGainCD, $hasilInformationGainCE, $hasilInformationGainCF83,$hasilInformationGainCF84,$hasilInformationGainCF85, $hasilInformationGainCF86,$hasilInformationGainCJ, $hasilInformationGainCK, $hasilInformationGainCL, $hasilInformationGainCM, $hasilInformationGainCN,$hasilInformationGainCO92,$hasilInformationGainCO93,$hasilInformationGainCO94,$hasilInformationGainCO95,$hasilInformationGainCO96,$hasilInformationGainCO97,$hasilInformationGainCO98,$hasilInformationGainCO99,$hasilInformationGainCO100,$hasilInformationGainCO101,$hasilInformationGainCO102,$hasilInformationGainCO103,$hasilInformationGainDA,$hasilInformationGainDB,$hasilInformationGainDC106,$hasilInformationGainDC107,$hasilInformationGainDC108,$hasilInformationGainDF,$hasilInformationGainDG,$hasilInformationGainDH,$hasilInformationGainDI,$hasilInformationGainDJ,$hasilInformationGainDK, $hasilInformationGainDL);
	rsort($InformationGain); //reverse sort
	//print_r($InformationGain);
	$jumlah=count($InformationGain);  
	for($x=0;$x<$jumlah;$x++) {
	         echo $InformationGain[$x];  
	         echo " ".$x."<br>";  
	}
	//Pembentukan Rule
	for ($j=0; $j <401 ; $j++) { 
		if ($nilai[$j][113] == 1) {
				$ctKeJS1++;
		}elseif ($nilai[$j][113] == 3) {
			$ctKeJS2++;
		}elseif ($nilai[$j][113] == 0) {
			if ($nilai[$j][114] == 2) {
				$ctKeJS1++;
			}elseif ($nilai[$j][114] == 0) {
				if ($nilai[$j][89] == 26) {
					$ctKeJS3++;
				}elseif ($nilai[$j][89] == 32) {
					$ctKeJS1++;
				}elseif ($nilai[$j][89] == 36) {
					if ($nilai[$j][2] == "tidak") {
						if ($nilai[$j][88] == 50) {
							$ctKeJS1++;
						}elseif ($nilai[$j][88] == 60) {
							$ctKeJS3++;
						}elseif ($nilai[$j][88] == 70) {
							$ctKeJS2++;
						}elseif ($nilai[$j][88] == 80) {
							$ctKeJS1++;
						}
					}elseif ($nilai[$j][2] == "ya") {
						$ctKeJS3++;
					}
					
				}else{
					$ctKeJS1++;
				}
			}
		}

	}
?>
<!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Hasil Cluster/Klasifikasi C5</h3>
            </div>

                <canvas id="mycanvas2" style="margin-left:35%;" width="256" height="256">
                <!-- <canvas id="pieChart" style="height:250px"></canvas> -->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
<!--           </div>

    </div> -->
<!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Hasil Cluster K Medoid</h3>
            </div>

                <canvas id="mycanvas" style="margin-left:35%;" width="256" height="256">
                <!-- <canvas id="pieChart" style="height:250px"></canvas> -->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>

    </div>
<!-- 
<button style="margin-left:50%; font-family: 'Montserrat';" class="btn btn-success" type="button" onclick="tambahInput()">Tambah Input</button> -->


<!-- 
<button style="margin-left:50%; font-family: 'Montserrat';" class="btn btn-success" type="button" onclick="tambahInput()">Tambah Input</button> -->

<script>
      $(document).ready(function(){
        var ctx = $("#mycanvas2").get(0).getContext("2d");

        //pie chart data
        //sum of values = 360
        var data = [
          {
            value: <?php echo json_encode($ctKeJS1, JSON_NUMERIC_CHECK); ?>,
            color: "cornflowerblue",
            highlight: "lightskyblue",
            label: "(Kehamilan Rendah) Sebanyak "
          },
          {
            value: <?php echo json_encode($ctKeJS2, JSON_NUMERIC_CHECK); ?>,
            color: "lightgreen",
            highlight: "yellowgreen",
            label: "(Kehamilan Tinggi) Sebanyak "
          },
          {
            value: <?php echo json_encode($ctKeJS3, JSON_NUMERIC_CHECK); ?>,
            color: "orange",
            highlight: "darkorange",
            label: "(Kehamilan Sangat Tinggi) Sebanyak "
          }

        ];

        //draw
        var piechart = new Chart(ctx).Doughnut(data);

      });
    </script>
    <script>
      $(document).ready(function(){
        var ctx = $("#mycanvas").get(0).getContext("2d");

        //pie chart data
        //sum of values = 360
        var data = [
          {
            value: <?php echo json_encode($nilaiKeJs1, JSON_NUMERIC_CHECK); ?>,
            color: "cornflowerblue",
            highlight: "lightskyblue",
            label: "(Kehamilan Rendah) Sebanyak "
          },
          {
            value: <?php echo json_encode($nilaiKeJs2, JSON_NUMERIC_CHECK); ?>,
            color: "lightgreen",
            highlight: "yellowgreen",
            label: "(Kehamilan Tinggi) Sebanyak "
          },
          {
            value: <?php echo json_encode($nilaiKeJs3, JSON_NUMERIC_CHECK); ?>,
            color: "orange",
            highlight: "darkorange",
            label: "(Kehamilan Sangat Tinggi) Sebanyak "
          }

        ];

        //draw
        var piechart = new Chart(ctx).Doughnut(data);

      });
    </script>
  </body>
</html>


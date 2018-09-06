<?php


/*$file = fopen('DatasetIbuHamil.csv', 'r');
while (!feof($file)) {//membaca file dari awal sampai akhir
	$content = fgetcsv($file); //membaca file
	$count = count($content);
	for ($i=0; $i <$count ; $i++) { 
		echo $content[$i]."\n";
	}
	echo "<br/>";
}
while (($line = fgetcsv($file)) !== FALSE) {
  //$line is an array of the csv elements
  print_r($line);
}
fclose($file);*/

// $file = fopen("DatasetIbuHamil.csv","r");

// while(! feof($file))
//   {
//  print_r(fgetcsv($file));
//   }

// fclose($file);

// $csv = array();
// $nilaicsv = array();
// $lines = file('DatasetIbuHamil.csv', FILE_IGNORE_NEW_LINES);

// foreach ($lines as $key => $value)
// {
//     $csv[$key] = str_getcsv($value);
//  //   $nilaicsv[$value];
//  //   print_r($csv);
// }

// //echo '<pre>';
// print_r($csv);
// //echo '</pre>';

// $csvFile ='DatasetIbuHamil.csv';
// function readCSV($csvFile){
//     $file_handle = fopen('DatasetIbuHamil.csv', 'r');
//     while (!feof($file_handle) ) {
//         $line_of_text[] = fgetcsv($file_handle, 10000);
//     }
//     fclose($file_handle);
//     return $line_of_text;
// }
 
 
// // // Set path to CSV file
// // // $csvFile = 'test.csv';
// $csv = readCSV($csvFile);
// echo '<pre>';
// print_r($csv);
// echo '</pre>';

//$namafile = $_FILES['filecsv']['tmp_name']
$row = 1;
if (($handle = fopen('DatasetIbuHamil.csv', "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 10000, ";")) !== FALSE) {
        $num = count($data);
        echo "<p> $num data di baris $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] ;
        }
    }
    fclose($handle);
}

?>

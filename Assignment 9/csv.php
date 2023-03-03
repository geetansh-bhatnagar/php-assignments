<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');
    body{
      font-family: 'Ubuntu', sans-serif;
    }
    table {
    border-collapse: collapse;
    width: 100%;
}

th,
td {
    text-align: left;
    padding: 8px;
    border-bottom: 1px solid #ddd;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

h1 {
    margin-left: 500px;
    color: red;
}


  </style>
<?php

class FileUploader
{
    private $phpFile;
    private $phpFileTmp;

      // a simple constructor
    public function __construct($phpFile, $phpFileTmp)
    {  
      // print_r(error_get_last());
        $this->phpFile = $phpFile;
        $this->phpFileTmp = $phpFileTmp;
    }
  // this function will convert csv file and dispay it's content in table
    public function displayTable()
    {  echo '<table border="5">';
        $start_row = 1;
        
        if (($csv_file = fopen($this->phpFileTmp, "r")) !== FALSE) {
                 
            while (($read_data = fgetcsv($csv_file, 1000, ",")) !== FALSE) {
                $column_count = count($read_data);
                echo '<tr>';
                $start_row++;
                for ($c = 0; $c < $column_count; $c++) {
                    echo ""."<td>".$read_data[$c] . "</td>";
                }
                echo '</tr>';
            }
            fclose($csv_file);
        }
        echo '</table>';
        echo "<br>";
    }
    // function to update csv file
    public function updateCsv($newData)
    {    echo "<h1>"."Updated CSV file"."</h1>"."<br>"."<br>";
        $fp = fopen($this->phpFileTmp, 'a');
        fputcsv($fp, $newData);
        fclose($fp);
    }
}

if (isset($_POST['submit'])) {

    $phpFile = $_FILES['php_file']['name'];
    
   
    $phpFileTmp = $_FILES['php_file']['tmp_name'];

    $fileUploader = new FileUploader($phpFile, $phpFileTmp);
    echo "<h1>"."CSV file"."</h1>";
    $fileUploader->displayTable();

    if ($phpFile == 'biostats.csv') {
      $newData = array('Geetansh', 'M', 21, 80, 170);
      $fileUploader->updateCsv($newData);
  } elseif ($phpFile == 'cities.csv') {
      $newData = array(42, 7, 7, 'N', 8, 8, 8, 'W', 'Ajmer', 'RJ');
      $fileUploader->updateCsv($newData);
  } elseif ($phpFile = 'airtravel.csv') {
      $newData = array('FEB-12', 700, 500, 600);
      $fileUploader->updateCsv($newData);
  } else {
    $newData = array('FEB-1', 700, 500, 600);
  }
   

    $fileUploader = new FileUploader($phpFile, $phpFileTmp);
    $fileUploader->displayTable();

}
?>
</body>
</html>

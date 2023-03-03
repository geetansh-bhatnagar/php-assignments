<?php

class FileUploader
{
    private $phpFile;
    private $phpFileTmp;

    public function __construct($phpFile, $phpFileTmp)
    {  
      // print_r(error_get_last());
        $this->phpFile = $phpFile;
        $this->phpFileTmp = $phpFileTmp;
    }

    public function displayTable()
    {
        

        echo '<table border="1">';
        $start_row = 1;
        if (($csv_file = fopen($this->phpFileTmp, "r")) !== FALSE) {
                 
            while (($read_data = fgetcsv($csv_file, 1000, ",")) !== FALSE) {
                $column_count = count($read_data);
                echo '<tr>';
                $start_row++;
                for ($c = 0; $c < $column_count; $c++) {
                    echo "<td>".$read_data[$c] . "</td>";
                }
                echo '</tr>';
            }
            fclose($csv_file);
        }
        echo '</table>';
        echo "<br>";
    }

    public function updateCsv($newData)
    {    echo "Updated table"."<br>"."<br>";
        $fp = fopen($this->phpFileTmp, 'a');
        fputcsv($fp, $newData);
        fclose($fp);
    }
}

if (isset($_POST['submit'])) {

    $phpFile = $_FILES['php_file']['name'];
    
    var_dump($phpFile);
    $phpFileTmp = $_FILES['php_file']['tmp_name'];

    $fileUploader = new FileUploader($phpFile, $phpFileTmp);
    $fileUploader->displayTable();

    $newData = array(4, 4, 4, 'Y');
    $fileUploader->updateCsv($newData);

    $fileUploader = new FileUploader($phpFile, $phpFileTmp);
    $fileUploader->displayTable();

}
?>

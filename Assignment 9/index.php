<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Csv </title>
    
    <style>
   .container{
    text-align: center;
    margin-top: 20%;
    font-family: 'Ubuntu', sans-serif;
    border : 10px;
   }
</style>
</head>

<body>
    
  <div class="container"  >
  <h2>Reading and updating csv file using php</h2>
<form action="csv.php" method="post" enctype="multipart/form-data">
<label for="myfile">Select a file:</label>
<input type="file" id="php_file" name="php_file" accept=".csv"  > <br> <br>
  <input type="submit" value="OPEN" name="submit" style="background-color: yellow; border-color: aliceblue; border: 0px; width: 185px;
    height: 41px; font-size: 25px;
    border-radius: 11px; cursor: pointer;" >
</form> 
</div>
</body>
</html>
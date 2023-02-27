<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form  method="post">
        <h3>Enter your user name</h3>
        <input type="text" name="name">
        <input type="submit" value="submit name">
    </form>
    <?php

$name = $_POST['name'];
echo "<h3> Hello $name </h3>";
?>

    
</body>
</html>
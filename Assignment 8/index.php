<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rss feed </title>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');
   .container{
    text-align: center;
    margin-top: 20%;
    font-family: 'Ubuntu', sans-serif;
   }
</style>
</head>

<body>
    
  <div class="container"  >
  <h2>Reading RSS feed using php</h2>
<form action="rssfeed.php" method="post">
  <input type="text" placeholder="Enter website feed url" name="rssurl" style="height: 29px;
    width: 289px;">
  <br> <br>
  <input type="submit" value="Submit" style="background-color: yellow; border-color: aliceblue; border: 0px;
  width: 185px;
    height: 41px; font-size: 25px;
    border-radius: 11px; cursor: pointer;" >
</form> 
</div>
</body>
</html>
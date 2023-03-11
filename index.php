<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first PHP webpage with user input">
    <meta name="keywords" content="immaculata, ICS2O">
    <meta name="author" content="Noah Smith">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Street Name and Street Number, in PHP</title>
  </head>
  <body>
    <form action="./address.php" method="post" target="result">
    <?php echo "<h1>Street Name and Street Number, in PHP</h1>" ?>
      <label for="street-number">Street Number: </label>
      <input type="number" id="street-number" placeholder="Street Number" name="street-number">
      <br>
      <br>
      <label for="street-name">Street Name: </label>
      <input type="text" id="first-name" placeholder="Street Name" name="street-name">
      <br>
      <br>
      <input type="submit" value="Enter">
			<br>
      <br>	
    </form>
    <div id="result"></div>
    <center>
      <iframe id="result" name="result">
				Your address is <?php echo $_POST["street-number"]; ?> <?php echo $_POST["street-name"]; ?>.
      </iframe>
    </center>
  </body>
</html>
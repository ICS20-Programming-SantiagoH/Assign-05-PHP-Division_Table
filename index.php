<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Remainder Calculator">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Santiago Hewett">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png" />
    <link rel="manifest" href="./favicon/site.webmanifest" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Remainder Calculator</title>
  </head>
  <body>
    <center>
    <!-- php echo to print the html to the page -->
<?php 
echo "<h1>Remainder Calculator</h1>";
?>
<?php
echo "<h3>Please Entre a Number you Want the Remainder of(Use min and max for the area of numbers you want the remainder of).</h3>";
?>

<!-- Function and direction toward results -->
    <form action="./results.php" method="post" target="results">
      <form action=" javascript: enterClicked()">
        <!-- User Info -->
      <label for="userNumber"> Please Enter your Number:</label>
      <input type="number" id="userNumber" placeholder="Ex.6" step="1" name="userNumber"><br><br>

        <label for="min"> Please Enter your min Number:</label>
      <input type="number" id="min" placeholder="Ex.9" step="1" name="min"><br><br>

        <label for="max"> Please Enter your max Number:</label>
      <input type="number" id="max" placeholder="Ex.15" step="1" name="max"><br><br>

        <label for="display">Display options:</label>
        <select name="display" id="display">
  <option value="Min to Max">Min to Max</option>
  <option value="Max to Min">Max to Min</option>
</select><br><br>
                
      <input type="submit" value="Submit response"> 
    </form>
    
    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">			
      results
    </iframe>
      <!-- Remainder image -->
      <img src="./images/remainder.jpg" alt="remainder" width="300" height="175"/>
  </body>
</html>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
    echo '<p>Hello World!</p>';
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $conn = new mysqli($servername, $username, $password);
    if ($conn) {
      echo "Connected to MySQL successfully<br>";
    }
    else {
      echo "Failed to connect to MySQL<br>";
    }
    ?>
  </body>
</html>

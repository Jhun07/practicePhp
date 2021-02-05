
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php</title>
</head>
<body>

<form method = "index.php" action = "post">
        Enter your name <input type="name" placeholder ="Enter your name..">

        Enter your password
        <input type="password" placeholder ="Enter password..">

        <input type="submit" value="submit">
    </form>



   <?php 
    $name = $_POST["name"];
    echo "<br>";
    $spass = $_POST["password"]; 
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";
    
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO user(user_name,user_password)
    VALUES ('$name', '$spass')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
  ?> 


</body>
</html>

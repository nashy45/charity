<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'charity_platform');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password= $_POST['password'];
  $role = $_POST['role'];

  do{
        if( empty($name) || empty($email) || empty($password) || empty($role) ){
        $errorMesssage = "All the fields are required";
        break;
        }

        //add new compte to database
        $sql="INSERT INTO admin (name, email, password, role) 
        VALUES ('$name', '$email','$password', '$role')";
            $result = $link->query($sql);

        if (!$result) {
            $errorMesssage ="Invalid query: " . $link->error;
            break;
        }



  $name = "";
  $Email = "";
  $Password = "";
  $role = "";
  


  $successMessage="account added correctly";

  header("location:index.php");
  exit;

  }while(false);
}
  
?> 
<?php include 'users.php' ?>
<?php include 'album.php' ?>

<?php


$db = new mysqli('localhost', 'root', '', 'euro2021', '3307');

/*if($db){
    print("CONNECTED");
}
*/

// Check connection
if ($db -> connect_errno) {
  echo "Failed to connect to MySQL: " . $db -> connect_error;
  exit();
}

/*
$users = get_users();
while($row = mysqli_fetch_array($users)){
    echo "<br>";
    echo $row['password'];
}
*/

?>
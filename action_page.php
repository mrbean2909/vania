Здравствуйте, <?php echo htmlspecialchars($_POST['name']); ?><?php echo htmlspecialchars($_POST['fam']); ?>.
Вы записались на <?php echo($_POST['date']); ?> число.
на <?php echo htmlspecialchars($_POST['time']); ?>.



<?php
$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$mark = $_POST['cars'];
// $model = $_POST['model'];

$servername = "localhost";
  
// In my case, user name will be root
$username = "root";
  
// Password is empty
$password = "";
$bd = "autosrevis";
// Creating a connection
$conn = new mysqli($servername, 
            $username, $password, $bd);

// Check connection
if ($conn->connect_error) {
    die("Connection failure: " 
        . $conn->connect_error);
}else{
    echo"успех";
}

$sql = mysqli_query($conn, "INSERT INTO `zapis` (`name`, `datetime`, `tel`, `mark`, `email`) VALUES ('{$name}', '2008-10-23 10:37:22', '{$tel}', '{$mark}', '{$email}')");

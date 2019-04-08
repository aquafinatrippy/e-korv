 <?php
$servername = "localhost";
$dbusername = "vhost73108s0";
$dbpassword = "TA18ekorv";

try {
    $conn = new PDO("mysql:host=$servername;dbname=vhost73108s0", $dbusername, $dbpassword);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
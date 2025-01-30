
<?php
if( isset($_POST["register_submit_button"]) )
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "data";

    $conn = new mysqli($servername, $username, $password, $database);
    // Check the connection
    if ($conn->connect_error) {
        //die("Connection failed: " . $conn->connect_error);
        echo "<h1>Connected Failed</h1>";
    }
    echo "<h1>Connected successfully</h1>";
}
?>
<?php
include 'connect.php';

$dir = $_POST['deldir'];

// set up basic connection
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

if (ftp_rmdir($conn_id, $dir)) {
    echo "Successfully deleted $dir\n";
} else {
    echo "There was a problem while deleting $dir\n";
}

ftp_close($conn_id);

?>
<button><a href="fileupload.html">Back</a></button>

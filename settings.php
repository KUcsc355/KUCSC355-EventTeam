<?php
function connect() {
    $host = 'localhost';
    $name = 'eventeam_aitp';
    $pass = 'n0pa$$w0rd';
    $user = 'eventeam_admin';
/*
    $connection = mysqli_connect($host, $user, $pass, $name) or
        die("Cannot connect to $host as $user: " . mysqli_error($connection));
*/
    return new mysqli($host, $user, $pass, $name);
}

function disconnect($db) {
    // $db->close();
    mysqli_close($db);
}
?>

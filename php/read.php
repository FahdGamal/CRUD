<?php
    include "dbconn.php";
    $sql = "SELECT * FROM users ORDER BY id DESC";
    $res = mysqli_query($conn, $sql);
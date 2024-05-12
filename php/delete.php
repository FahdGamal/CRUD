<?php
    if (isset($_GET['id'])) {
        include "../dbconn.php";
        $id = ($_GET["id"]);

        $sql = "DELETE FROM users WHERE id = '$id'";
        mysqli_query($conn, $sql);
        header("Location: ../read.php?delete=Deleted Successfuly");
    }
    else{
        header("Location: read.php?error=!!!!");
    }
?>
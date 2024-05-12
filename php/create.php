<?php
    include "../dbconn.php";
    if (isset($_POST["create"])) {
        function test_data($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $name = test_data($_POST["name"]);
        $email = test_data($_POST["email"]);
        if (empty($name)) {
            header("Location: ../index.php?error=Name is Required");
        }
        elseif (empty($email)) {
            header("Location: ../index.php?error=Email is Required");
        }
        else{
            $sql = "INSERT INTO users(name, email) VALUES ('$name', '$email')";
            $res = mysqli_query($conn, $sql);
            if ($res) 
                header("Location: ../read.php?success=successfuly created");
            else
                header("Location: ../index.php?error=Unknown Error");
        }
    }
?>
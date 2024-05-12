<?php
    if (isset($_GET['id'])) {
        include "dbconn.php";
        function test_data($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id = test_data($_GET["id"]);
        $sql = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)) {
            $row = mysqli_fetch_assoc($result);
        }
        else{
            header("Location: read.php?error=loooooooooool");
        }
    }
    elseif (isset($_POST["update"])) {
        include "../dbconn.php";
        function test_data($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $name = test_data($_POST["name"]);
        $email = test_data($_POST["email"]);
        $id =  test_data($_POST["id"]);

        if (empty($name)) {
            header("Location: ../update.php?error=Name is Required");
        }
        elseif (empty($email)) {
            header("Location: ../update.php?error=Email is Required");
        }
        else{
            
            $sql = "UPDATE users SET name = '$name', email = '$email' WHERE id = $id";
            $res = mysqli_query($conn, $sql);

            if ($res) {
                header("Location: ../read.php?success=successfuly updated");
            }
            else{
                header("Location: ../udpate.php?error=Unknown Error");
            }


        }
    }
    else{
        header("Location: read.php?error=!!!!");
    }
?>
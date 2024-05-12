<?php
    include "php/read.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="box">
            <h4 class="display-4 text-center">All Words</h4>
            <?php if (isset($_GET["success"])) { ?>
                <div class="alert alert-success" role="alert"><?=$_GET["success"]?></div>
            <?php }elseif (isset($_GET["delete"])) {?>
                 <div class="alert alert-danger" role="alert"><?=$_GET["delete"]?></div>
            <?php } ?>
            <?php if (mysqli_num_rows($res) > 0) {?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Word</th>
                        <th scope="col">Definition</th>
                        <!-- <th scope="col">Update</th>
                        <th scope="col">Delete</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i = 0;
                        while ($rows = mysqli_fetch_assoc($res)) {
                        $i++;
                    ?>
                    <tr>
                        <th scope="row"><?=$i?></th>
                        <td><?php echo strtoupper($rows["name"][0]). substr($rows["name"], 1)?></td>
                        <td><?=$rows["email"]?></td>
                        <!-- <td><a href="update.php?id= #$rows['id']?>" class="btn btn-outline-success">Update</a></td>
                        <td><a href="php/delete.php?id= =$rows['id']?>" class="btn btn-outline-danger">Delete</a></td> -->
                        <td></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } ?>
            <div class="link-right">
                <a href="index.php" class="link-primary">Record</a>
            </div>
        </div>
    </div>
</body>

</html>
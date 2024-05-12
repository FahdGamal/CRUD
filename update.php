<?php include "php/update.php"; ?>
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
        <form action="php/update.php" method="post">
            <div class="form-group">
                <h4 class="display-4 text-center">Update</h4>
                <hr>
                <?php if (isset($_GET["error"])) { ?>
                <div class="alert alert-danger" role="alert"><?=$_GET["error"]?></div>
                <?php } ?>
                <label for="name">Name</label>
                <input type="text" name="name"
                       class="form-control"
                       id="name" 
                     
                       value="<?=$row['name']?>" >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email"
                       class="form-control" id="email"
                       value="<?=$row['email']?>">
            </div>

            <div class="form-group">
               
                <input type="text" name="id"
                       class="form-control" id="id"
                       value="<?=$row['id']?>" hidden>
            </div>
            <button type="submit" name="update" class="btn btn-success">Update</button>
            <a href="read.php" class="link-primary">View</a>
        </form>
    </div>
</body>

</html>
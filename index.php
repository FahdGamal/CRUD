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
        <form action="php/create.php" method="post">
            <div class="form-group">
                <h4 class="display-4 text-center">Record New Word</h4>
                <hr>
               
                <label for="name">Word</label>
                <input type="text" name="name"
                       class="form-control"
                       id="name" 
                       placeholder="Enter The Word"
                       value="<?php if(isset($_GET["name"]))
                                    echo $_GET["name"]?>" >
                <?php if(isset($_GET["error"])){ if (($_GET["error"])==  "Name is Required" ) { ?>
                                        <span class=" alert-danger" role="alert"><?=$_GET["error"]?></span>
                <?php }} ?>
            </div> 
            <div class="form-group">
                <label for="email">Definition</label>
                <input type="text" name="email"
                       class="form-control" id="email"
                       placeholder="Enter your Definition"
                       value="<?php if(isset($_GET["email"]))
                                    echo $_GET["email"]?>">
                <?php if(isset($_GET["error"])){ if (($_GET["error"])==  "Email is Required" ) { ?>
                                        <span class=" alert-danger" role="alert"><?=$_GET["error"]?></span>
                <?php }} ?>
            </div>
            <button type="submit" name="create" class="btn btn-primary">Record</button>
            <a href="read.php" class="link-primary">View</a>
        </form>
    </div>
</body>
</html>
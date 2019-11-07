<?php  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <main class="container mt-5">
        <form location="index.php" method="post">
            <div class="form-group">
                <label for="username" class="form-label">Username:</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="form-group">
                <label for="tweet" class="form-label">Tweet:</label>
                <textarea class="form-control" id="tweet" rows="3" name="body "></textarea>
            </div>
                <input type="submit" value="skicka" class="btn btn-primary">
        </form>
    </main>

    <div class="mt-5">
        <p class="lead">
        <?php
            $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
            $body = filter_input(INPUT_POST, "body", FILTER_SANITIZE_SPECIAL_CHARS);
            //echo $username, ' ';
            //echo $body;
        ?>
        <div class="card">
            <h5 class="card-header"><?= $username ?></h5>
            <div class="card-body">
                <p class="card-text"><?= $body ?></p>
            </div>
        </div>
        </p>
    </div>
</body>

</html>
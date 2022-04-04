

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Template</title>
</head>


<body>
<section class="bg-dark text-light pt-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1><?php echo fread(fopen($_SESSION["result"][$y][3], "r"), filesize($_SESSION["result"][$y][3])); ?></h1>
                    <p class="lead my-4">
                    <?php echo date($_SESSION["result"][$y][8]) ?>
                    </p>
                    <p class="lead my-4">
                    <?php echo $_SESSION["result"][$y][4] ?>
                    </p>
                    <button class="btn btn-success btn-lg my-4"> <a href="auction.php?offer_id=<?php echo $_SESSION["result"][$y][0]?>" class="text-dark" style="text-decoration: none;">Go to auction</a></button>
                    </div>
                <img class="img-fluid d-sm-block" style="width: 20%; height: 20%;" src="<?php echo $_SESSION["result"][$y][2]; ?>" alt="trade">
            </div>
        </div>
    </section>
</body>

</html>



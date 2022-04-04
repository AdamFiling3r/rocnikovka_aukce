<?php
require_once "includes/connect.php";

?>
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
    <title>Main</title>
</head>
<?php
include_once "navbar.php";
?>

<body>
    <?php
    for ($y = 0; $y < sizeof($_SESSION["result"]); $y++) {
        if($_SESSION["result"][$y][7] == 0){ 
        include("includes/template_card.inc.php");
        }
    }
    ?>
 <?php
    include_once("footer.php");
    ?>
    
</body>

</html>
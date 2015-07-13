<?php

require_once __DIR__.'/vendor/autoload.php';


use Sun\Flash;
use Sun\Session;
$flash = new Flash();
$session = new Session();
$flash->confirm("fdsf","go to see");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


</head>
<body>

<?php include(__DIR__.'/view/flash.php') ?>

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    $(function () {
        $('.flash-modal').modal();

    })
</script>
</body>
</html>




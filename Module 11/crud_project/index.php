<?php
    require_once "inc/functions.php";
    $info = '';
    $task = $_GET ['task'] ?? 'report';
    if('seed'== $task){
        seed(DB_NAME);
        $info = "Seeding completed";
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>CRUD Project</title>
</head>
<body>
    <div class="container mx-auto text-center pt-5">
        <h2>Simple PHP Crud Operation</h2>
        <p>A simple project</p>
        <?php include_once ('inc/templates/nav.php') ?>
    </div>
    <p>
        <?php if ($info !='') {
            echo "{$info}";
        } ?>
    </p>
</body>
</html>
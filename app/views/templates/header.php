<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'];?></title>
    <script src="https://kit.fontawesome.com/88f7f8719e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php if($_GET['url'] == "user/login" || $_GET['url'] == "user/regis"){?>
        <link rel="stylesheet" href="<?= BASE_URL?>/css/style.css">
    <?php } else{?>
        <link rel="stylesheet" href="<?=BASE_URL?>/css/styleGeneral.css">
    <?php } ?>
    </head>
<body>
    
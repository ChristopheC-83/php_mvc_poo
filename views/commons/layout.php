<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= ROOT ?>public/style/custom.css">
    <meta name="description" content="<?= $description ?>">
    <title><?= $title ?></title>
</head>

<body class="d-flex flex-column min-vh-100">

    <?php require_once("./views/commons/navbar.php")  ?>

    <div class="flex-grow-1 container">
        <?= $content ?>
    </div>


    <?php require_once("./views/commons/footer.php")  ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
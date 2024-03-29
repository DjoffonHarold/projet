
<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?= $pageTitle ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- plugins -->
    <link rel="stylesheet" href="public/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
</head>
<body >
    <script src="public/js/script.js"></script>
    <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>
    <script src="public/js/jQuery/jquery.min.js"></script>
    <?php if ($pageTitle == "Service") {?>
    <script src="public/js/calendar.js"></script>
    <script src="public/js/rendezvous.js"></script>
    <?php } else if ($pageTitle == "Medecin Acceuil") {?>
    <script src="public/js/medecin.js"></script>
    <?php } else if ($pageTitle == "Examens") {?>
    <script src="public/js/examens.js"></script>
    <?php } else if ($pageTitle == "Connexion") {?>
    <script src="public/js/main.js"></script>
    <?php }?>



<!-- Leader Header -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obanshire Cub Scouts</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="<?= BASE_URL; ?>https://fonts.googleapis.com" async>
    <link rel="preconnect" href="<?= BASE_URL; ?>https://fonts.gstatic.com" crossorigin async>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" async>
    <link rel="preconnect" href="<?= BASE_URL; ?>https://fonts.googleapis.com" async>
    <link rel="preconnect" href="<?= BASE_URL; ?>https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" async>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" defer>

    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" defer>


    <!-- Custom CSS -->
    <link href="<?= BASE_URL ?>assets/CSS/styles.css" rel="stylesheet" defer>

</head>

<body>

    <!-- Header -->
    <header id="header" class="header d-flex align-items-center fixed-top leader-header">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="<?= BASE_URL ?>index" class="logo d-flex align-items-center">
                <img src="<?= BASE_URL ?>logo" alt="logo">
            </a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
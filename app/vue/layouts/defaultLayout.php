<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?? 'Blogorama'?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet"  href="/css/style.css">
</head>
<body>
<!-- Bloc Header-->
<header>
    <nav class="navbar navbar-expand-lg" style="background-color: #3C4245">
        <div class="container-fluid p-3">
            <div class="collapse navbar-collapse justify-content-center fs-2 ">
                <?php if(isset($_SESSION['id']) && $_SESSION['id']) {?>
                <ul class="navbar-nav gap-4 testBorder">
                    <li class="nav-item">
                        <a class="nav-link active text-light" href="<?= $router->generate('index', ['id' => $_SESSION['id']])?>">My home</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-monospace nav-link text-light" href="<?= $router->generate('allPosts')?>">Blogo-space</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-monospace nav-link text-light" href="<?= $router->generate('writePost')?>">Write an article</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-monospace nav-link text-light" href="<?= $router->generate('login')?>">Sign out</a>
                    </li>
                    <?php
                }
                ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main role="main">
    <?= $pageContent ?? '' ?>
</main>

<!-- Bloc Footer-->

<hr>
<div class="my-5">
    <footer>
        <div class="text-center p-3 text-light" style="background-color: #3C4245;">
            Blogorama | © 2023 Copyright:
            <a class="text-light text-decoration-none fw-bold" href="https://killianfilatre.fr">Killian Filâtre </a>
            <?php if(isset($_SESSION['id']) && $_SESSION['id']) {?>
            | You are
            <a class="text-light text-decoration-none fw-bold" href="<?= $router->generate('menuAdmin')?>">Administrator </a>
            <?php } ?>

        </div>
        <!-- Copyright -->
    </footer>
</div>
<script src="https://kit.fontawesome.com/18e2e0bb4c.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>
</html>
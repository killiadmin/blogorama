<?php
$title = 'Registration';
?>

<!--<div class="container p-3">
    <a href="/">
        <i style="color: #3C4245" class="fa-solid fa-arrow-left fa-2xl"></i>
    </a>
</div>-->

<div class="bg-image d-flex justify-content-center text-center">
    <img src="./assets/logo_01.png">
</div>

<form class="container" method="POST" action="../app/controllers/createUserController.php" style="width: 600px;">
    <div class="mb-3">
        <label class="form-label" for="name">Name :</label>
        <input class="form-control" type="text" name="name" id="name" required>
    </div>

    <div class="mb-3">
        <label class="form-label" for="username">Username :</label>
        <input class="form-control" type="text" name="username" id="username" required>
    </div>

    <div class="mb-3">
        <label class="form-label" for="quote">Quote :</label>
        <input class="form-control" type="text" name="quote" id="quote" required>
    </div>

    <div class="mb-3">
        <label class="form-label" for="mail">Mail :</label>
        <input class="form-control" type="email" name="mail" id="mail" required>
    </div>

    <div class="mb-3">
        <label  class="form-label" for="password">Password :</label>
        <input class="form-control" type="password" name="password" id="password" required>
    </div>

   <!-- <div class="mb-3">
        <p>Who are you ? : </p>
        <div class="container d-flex align-items-baseline gap-3">
            <input type="radio" name="author" value="author" id="author" required>
            <label class="form-label" for="author">Author</label>
            <input type="radio" name="editor" id="editor" required>
            <label class="form-label" for="editor">Editor</label>
            <input type="radio" name="reader" id="reader" required>
            <label class="form-label" for="reader">Reader</label>
        </div>
    </div>-->

    <div class="d-flex justify-content-between">
        <a href="/">
            <i class="fa-solid fa-arrow-left fa-2xl" title="Return to login menu" style="color: #3C4245"></i>
        </a>
        <button class="btn btn-secondary" type="submit" name="submit">Sign Up</button>
    </div>
</form>

<script src="https://kit.fontawesome.com/18e2e0bb4c.js" crossorigin="anonymous"></script>


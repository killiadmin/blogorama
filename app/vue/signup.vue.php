<?php
$title = 'Registration';
?>

<div class="bg-image d-flex justify-content-center text-center">
    <img src="./assets/logo_01.png">
</div>

<form class="container" method="POST" action="" style="width: 600px;">

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

    <div class="d-flex justify-content-between">
        <a href="/">
            <i class="fa-solid fa-arrow-left fa-2xl" title="Return to login menu" style="color: #3C4245"></i>
        </a>
        <button class="btn btn-secondary" type="submit" name="validateSignUp">Sign Up</button>
    </div>
</form>

<script src="https://kit.fontawesome.com/18e2e0bb4c.js" crossorigin="anonymous"></script>


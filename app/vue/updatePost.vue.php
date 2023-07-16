<?php
$title = 'Update your post';
?>

<div class="container mt-4">
    <h1>Update your post</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="titre">Title :</label>
            <input type="text" class="form-control" id="titre" name="titre" required>
        </div>

        <div class="form-group">
            <label for="chapo">Chapo :</label>
            <textarea class="form-control" id="chapo" name="chapo" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="contenu">Content :</label>
            <textarea class="form-control" id="contenu" name="contenu" rows="10" required></textarea>
        </div>
        <div class="d-flex flex-row-reverse m-3">
            <button type="submit" class="btn btn-secondary">Update your post</button>
        </div>
    </form>
</div>

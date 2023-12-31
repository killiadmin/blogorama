<?php
$title = 'Blogospace';
$nameAuthor = '';
$usernameAuthor = '';
?>

<?php foreach ($postsCreate ?? [] as $post):
    foreach ($usersRegistered ?? [] as $user):
        $userId = $user['id'];
        $userAssociated = $post['idUserAssociated'];

        if ($userId === $userAssociated){
            $nameAuthor = $user['name'];
            $usernameAuthor = $user['username'];
        }
    endforeach;
?>

<div class="card m-3 p-3">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h3 class="card-title"><?= $post['title']; ?></h3>
            <a href="#">
                <i class="fa-solid fa-trash fa-lg" style="color: #3C4245"></i>
            </a>
        </div>
        <p class="card-text"><?= $post['chapo']; ?></p>
        <div class="d-flex flex-row-reverse">
            <p>&nbsp;<strong>Posted the : </strong><?= $post['dateCreate']; ?></p>
            <p><strong>Author : </strong><?= $nameAuthor,' ', $usernameAuthor; ?>&nbsp;</p>
        </div>
        <div class="d-flex flex-row-reverse">
            <a href="<?= $router->generate('post', ['id' => $post['id']])?>" class="btn btn-secondary">Go somewhere</a>
        </div>
    </div>
</div>
<?php endforeach; ?>
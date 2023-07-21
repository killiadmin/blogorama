<?php
$title = 'Mode Administrator';
$usersDesactivated = 0;

foreach ($usersRegistered ?? [] as $user){
    if ($user['activated'] === '0') {
        $usersDesactivated++;
    }
}
?>

<div class="container">
    <h1 class="my-4">Dashboard</h1>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Users registered</h5>
                    <p class="card-text">Total : <?= count($usersRegistered ?? []) ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Articles written</h5>
                    <p class="card-text">Total : <?= count($postsCreate ?? []) ?? []?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Top article</h5>
                    <p class="card-text">Total : 200</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Users desactivate</h5>
                    <p class="card-text">Total : <?= $usersDesactivated ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Comments create</h5>
                    <p class="card-text">Total : 50</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Top user</h5>
                    <p class="card-text">Total : 200</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="col-md-12">
        <h2>List of registered users</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>&nbsp;</th>
                <th>Name</th>
                <th>Username</th>
                <th>Mail</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($usersRegistered ?? [] as $user):
                $userStatus = ($user['activated'] == 0) ? 'Desactivated' : 'Activated';
                ?>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['username']; ?></td>
                    <td><?= $user['mail']; ?></td>
                    <td class="d-flex justify-content-between"><?= $userStatus ?>
                        <button class="btn btn-danger">Desactivate</button>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

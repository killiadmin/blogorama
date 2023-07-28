<?php
$title = 'Article de john Doe';

$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$parse_url = parse_url($url);
$postId = basename($parse_url['path']);

foreach ($postsCreate as $post):
    if ($postId === $post['id']) {
        foreach ($usersRegistered ?? [] as $user):
            if ($user['id'] === $post['idUserAssociated']) {
            ?>
              <!--Begin Construct the bloc article-->
            <article class="d-flex flex-column align-items-center m-3">
                <header>
                    <h2 class="text-center"><?= $post['title'] ?></h2>
                    <p class="metadata">Publié le <?= $post['dateCreate'] ?> par <?= $user['name'] .' '.$user['username'] ?></p>
                </header>

                <p class="m-3 p-3" style="max-width: 800px;"><?= $post['content'] ?></p>

                <footer class="d-flex justify-content-evenly" style="width: 100%;">
                    <p>Author's social network : <a href="#" class="badge bg-secondary">Github</a>, <a href="#"
                                                                                                       class="badge bg-secondary">Twitter</a>,
                        <a href="#" class="badge bg-secondary">Linkedin</a></p>
                    <a href="<?= $router->generate('updatePost', ['id' => 50]) ?>" style="color: #3C4245;"><i
                                class="fa-regular fa-pen-to-square xl"></i></a>
                </footer>
            </article>
                <?php
            }
        endforeach;
        ?>
<hr>
        <section id="comments">
            <div class="d-flex flex-column align-items-center">
                <h3>Comments</h3>
                <?php foreach ($commentsCreate ?? [] as $comment):
                    foreach ($usersRegistered ?? [] as $user):
                        if ($comment['idPostAssociated'] === $post['id'] && $comment['idUserAssociated'] === $user['id']) {
                            ?>
                            <div class="comment" style="width: 500px;">
                                <div class="comment-info d-flex gap-2">
                                    <p class="comment-author"><strong>Author : </strong><?= $user['name'] ?></p>
                                    <p class="comment-date"><strong>Publié le : </strong><?= $comment['dateCreate']?></p>
                                </div>
                                <div class="comment-content d-flex flex-row-reverse" >
                                    <p><?= $comment['content'] ?></p>
                                </div>
                                <hr>
                            </div>
                            <?php
                        }
                        ?>
                    <?php endforeach;
                endforeach; ?>
            </div>
        </section>
        <?php
    }
endforeach;
?>
    <form class="p-3">
        <h4>Express yourself</h4>

        <div class="form-group">
            <label for="message">Your comment :</label>
            <textarea id="message" name="message" class="form-control"></textarea>
        </div>
        <div class="d-flex flex-row-reverse m-3">
            <button type="submit" class="btn btn-secondary">Send my comment</button>
        </div>
    </form>



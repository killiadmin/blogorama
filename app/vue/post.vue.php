<?php
$title = 'Article de john Doe';
?>

<article class="d-flex flex-column align-items-center m-3">
    <header>
        <h2>Titre de l'article</h2>
        <p class="metadata">Publié le 15 juillet 2023 par John Doe</p>
    </header>

    <p class="m-3 p-3" style="max-width: 800px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquet justo nec nulla tempus consectetur. Vivamus eget ultrices diam.
        Sed hendrerit nisl ac semper vulputate. Nulla vitae arcu rutrum, faucibus dui sed, venenatis felis. Aliquam ultricies tristique fringilla.
        Vestibulum tristique lectus quis velit cursus, ut molestie enim finibus. Nulla id varius turpis. Integer et massa sed massa eleifend dapibus.
        Cras vitae tempor elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
        Fusce id tellus id mauris iaculis pellentesque. Nunc vitae interdum est. Curabitur aliquet augue vitae velit fermentum efficitur.
        Fusce dignissim pulvinar mauris, sed tempus quam euismod vitae.

        Sed auctor metus vel orci varius, id fringilla velit vestibulum. Donec in enim vitae metus laoreet bibendum. Morbi sed sapien at lacus varius vestibulum.
        Pellentesque fringilla, purus a faucibus pretium, est eros iaculis lacus, et luctus massa tortor non erat.
        Quisque vel justo vitae lectus malesuada convallis eu eu tellus. Morbi ut est sit amet est vulputate tincidunt.
        Aliquam erat volutpat. Integer ullamcorper risus at risus condimentum venenatis. Suspendisse sed nunc ac mi accumsan varius non vitae velit.
        Vestibulum lacinia posuere nunc, ac malesuada quam sagittis id. Sed nec ante mi.
        Etiam consequat, metus sed fringilla tristique, lorem lectus iaculis ipsum, nec faucibus nunc mi vel ligula.
        Integer ac odio eu eros convallis gravida. Mauris sem mauris, luctus a sapien vel, fermentum feugiat tortor. Fusce vitae bibendum velit.
    </p>

    <footer class="d-flex justify-content-evenly" style="width: 100%;">
        <p>Author's social network : <a href="#" class="badge bg-secondary">Github</a>, <a href="#" class="badge bg-secondary">Twitter</a>, <a href="#" class="badge bg-secondary">Linkedin</a></p>
        <a href="<?= $router->generate('updatePost', ['id' => 50])?>" style="color: #3C4245;"><i class="fa-regular fa-pen-to-square xl"></i></a>
    </footer>
</article>

<hr>

<section id="comments">
    <div class="d-flex flex-column align-items-center">
        <h3>Comments</h3>

        <div class="comment" style="width: 500px;">
            <div class="comment-info">
                <p class="comment-author">Author : John Doe</p>
                <p class="comment-date">Publié le : 15 juillet 2023</p>
            </div>
            <div class="comment-content">
                <p>Ceci est un commentaire intéressant.
            </div>
            <hr>
        </div>

        <div class="comment" style="width: 500px;">
            <div class="comment-info">
                <p class="comment-author">Author : Jane Smith</p>
                <p class="comment-date">Publié le : 16 juillet 2023</p>
            </div>
            <div class="comment-content">
                <p>Je suis totalement d'accord avec l'auteur de cet article.</p>
            </div>
        </div>
    </div>

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
</section>


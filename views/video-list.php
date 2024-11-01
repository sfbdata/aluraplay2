<?php
require_once __DIR__ . '/inicio-html.php';
/** @var \aluraplay\Entity\Video[] $videolist */
?>

    <ul class="videos__container" alt="videos alura">
        <?php foreach ($videolist as $video): ?>
            <li class="videos__item">
                <?php if ($video->getFilepath() !== null): ?>
                    <a href="<?= $video->url; ?>">
                    <img src="/img/uploads/<?= $video->getFilepath(); ?>" style="width: 72%" alt="" />
                </a>
                <?php else: ?>
                <iframe width="100%" height="72%" src="<?= $video->url ?>"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                <?php endif; ?>
                <div class="descricao-video">
                    <img src="img/logo.png" alt="logo canal alura">
                    <h3><?= $video->title ?></h3>
                    <div class="acoes-video">
                        <a href="/editar-video?id=<?=$video->id;?>">Editar</a>
                        <a href="/remover-capa?id=<?=$video->id;?>">Remover capa</a>
                        <a href="/remover-video?id=<?=$video->id;?>">Excluir</a>

                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php require_once __DIR__ . '/fim-html.php';

<nav class="breadcrumb">
    <a href="home">Inicio</a>

    <?php foreach ($breadcrumb as $item): ?>
    <span>/</span>

    <?php if ($item['url']): ?>
        <a href="<?= $item['url'] ?>"><?= $item['label'] ?></a>
    <?php else: ?>
        <span><?= $item['label'] ?></span>
    <?php endif; ?>

    <?php endforeach; ?>
</nav>

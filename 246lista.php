<ul>
    <?php foreach ($tiquet as $producto) { ?>
        <li>
            <?= $producto["nombre"] ?>, <?= $producto["precio"] ?>, <?= euros2pesetas($producto["precio"]) ?>

        </li>
    <?php        } ?>
</ul>
<p>Total: <?= $total ?>, <?= euros2pesetas($total) ?></p>
<?php

//d($typeAll);?>

<h3 class="type_title">Cliquez sur un type pour voir tous les Pokémons de ce type</h3>

<div class="typeAll">
        <?php foreach($typeAll as $currentType): ?>
            <div class="currentType">
                <a href="<?= $absoluteURL ?>/type/<?=$currentType->getId()?>">
                    <div class="<?=$currentType->getName()?>"><?=$currentType->getname()?></div>
                </a>
            </div>
        <?php endforeach;?>
    </div>
<?php

// d($pokemonAll);?>

<div>
    <div class="pokemon">
        <?php foreach($pokemonAll as $currentPokemon): ?>
            <div class="pokemon_content">
                <a href="<?= $absoluteURL ?>/detail/<?=$currentPokemon->getNumber()?>">
                    <img src="<?= $_SERVER['BASE_URI'] ?>/img/<?=$currentPokemon->getNumber()?>.png" alt="Pokemon">
                    <div>#<?=$currentPokemon->getNumber()?> <?=$currentPokemon->getName()?></div>
                </a>
            </div>
        <?php endforeach;?>
    </div>
</div>


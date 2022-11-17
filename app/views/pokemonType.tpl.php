<?php

//d($pokemonByType);?>

<div class="pokemon">
        <?php foreach($pokemonByType as $currentPokemon): ?>
            <div class="pokemon_content">
                <a href="<?= $absoluteURL ?>/detail/<?=$currentPokemon->getNumber()?>">
                    <img src="<?= $_SERVER['BASE_URI'] ?>/img/<?=$currentPokemon->getNumber()?>.png" alt="Pokemon">
                    <div>#<?=$currentPokemon->getNumber()?> <?=$currentPokemon->getName()?></div>
                </a>
            </div>
        <?php endforeach;?>
    </div>
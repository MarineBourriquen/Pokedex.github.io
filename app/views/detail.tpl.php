<?php

//d($pokemonById);

?>
<h1 class="detail">Détails de <?=$pokemonById->getName()?></h1>

<div class="pokemon_container">
    <div class="currentPokemon_image">
        <img src="<?= $_SERVER['BASE_URI'] ?>/img/<?=$pokemonById->getNumber()?>.png" alt="currentPokemon">
    </div>

    <div class="currentpokemon_content">
        <h2>#<?=$pokemonById->getNumber()?> <?=$pokemonById->getName()?></h2>
        <?php foreach($typeByPokemon as $currentType):?>
            <span class="<?=$currentType->getName()?>"><?=$currentType->getname()?></span>
        <?php endforeach;?>

        <h3>Statistiques</h3>
        <div class="stats">
            <div class="stats_name">PV</div>
            <div class="stats_value"><?=$pokemonById->getHp()?></div>
            <div class="stat_container">
                <div class="bar_value" style="width:<?php echo ($pokemonById->getHp() * 100) / 255 ?>%"></div>
            </div>
        </div>
        <div class="stats">
            <div class="stats_name">Attaque</div>
            <div class="stats_value"><?=$pokemonById->getAttack()?></div>
            <div class="stat_container">
                <div class="bar_value" style="width:<?php echo ($pokemonById->getAttack() * 100) / 255 ?>%"></div>
            </div>
        </div>
        <div class="stats">
            <div class="stats_name">Défense</div>
            <div class="stats_value"><?=$pokemonById->getDefense()?></div>
            <div class="stat_container">
                <div class="bar_value" style="width:<?php echo ($pokemonById->getDefense() * 100) / 255 ?>%"></div>
            </div>
        </div>
        <div class="stats">
            <div class="stats_name">Attaque Spé.</div>
            <div class="stats_value"><?=$pokemonById->getSpe_attack()?></div>
            <div class="stat_container">
                <div class="bar_value" style="width:<?php echo ($pokemonById->getSpe_attack() * 100) / 255 ?>%"></div>
            </div>
        </div>
        <div class="stats">
            <div class="stats_name">Défense Spé.</div>
            <div class="stats_value"><?=$pokemonById->getSpe_defense()?></div>
            <div class="stat_container">
                <div class="bar_value" style="width:<?php echo ($pokemonById->getSpe_defense() * 100) / 255 ?>%"></div>
            </div>
        </div>
        <div class="stats">
            <div class="stats_name">Vitesse</div>
            <div class="stats_value"><?=$pokemonById->getSpeed()?></div>
            <div class="stat_container">
                <div class="bar_value" style="width:<?php echo ($pokemonById->getSpeed() * 100) / 255 ?>%"></div>
            </div>
        </div>

    </div>
</div>

<div class="detail">
    <a href="<?= $router->generate( "main-home")?>">Revenir à la liste</a>
</div>
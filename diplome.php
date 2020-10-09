<?php
$diplomas = [
    'years' => ['1994-1995', '1995-1997', '1997-1998', '1999-2000'],
    'titles' => ['Apprenti Géologue', 'BTS Géologie', 'Ingénieur Terraformeur', 'Fugitif'],
    'schools' => ['Ecole de Jumba', 'Lycée Professionnel de Tantalogue', 'Université de Tantalogue', 'Vaisseau carcéral du système XD6545'],
    'descriptions' => ['Année de mise à niveau en géologie.',
        'Spécialisation en terraformation, géologie, vulcanologie, océanographie.',
        'Master en restructuration efficace des planètes par désintégration.',
        'Recherche et exploitation des failles d\'un vaisseau carcéral.'],
];
?>

<div class="diploma_div">
    <?php for ($i = 0; $i < 2; $i++) {
        ?>
        <div class="diploma">
        <?php foreach ($diplomas as $study => $diploma) { ?>
            <p class="<?= $study ?>"><?= $diplomas[$study][$i]; ?></p>
        <?php }
        ?></div><?php
    }
    ?>
</div>
<div class="diploma_div">
    <?php for ($i = 2; $i < count($diplomas['years']); $i++) {
        ?>
        <div class="diploma">
        <?php foreach ($diplomas as $study => $diploma) { ?>
            <p class="<?= $study ?>"><?= $diplomas[$study][$i]; ?></p>
        <?php }
        ?></div><?php
    }
    ?>
</div>

<?php
$diplomas = [
    'years' => ['1999-2000', '1995-1998', '1995-1998', '1994-1995'],
    'titles' => ['Fugitif', 'Ingénieur Terraformeur', 'BTS Géologie', 'Apprenti Géologue'],
    'schools' => ['Vaissea carcéral du système XD6545', 'Université de Tantalogue', 'Lycée Professionnel de Tantalogue', 'Ecole de Jumba Joobika'],
    'descriptions' => ['Recherche et exploitation des failles d\'un vaisseau carcéral.',
        'Master en restructuration efficace des planètes par désintégration.',
        'Spécialisation en terraformation, géologie, vulcanologie, océanographie',
        'Année de mise à niveau en géologie.'],
];
?>

<div class="diploma_div">
    <?php for ($i = 0; $i < count($diplomas['years']); $i++) {
        ?>
        <div class="diploma">
        <?php foreach ($diplomas as $study => $diploma) { ?>
            <p class="<?= $study ?>"><?= $diplomas[$study][$i]; ?></p>
        <?php }
        ?></div><?php
    }
    ?>
</div>

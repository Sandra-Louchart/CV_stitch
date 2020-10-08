<?php
$experiences = [
    'years' => ['2000-2002', '2002-2005', '2005-2018', '2018-2020'],
    'job' => ['Experience 626', 'Destructeur', 'Chasseur de prime', 'Professeur des écoles stagiaires.'],
    'company' => ['Jumba industrie', 'Jumba entreprise', 'Hawaï academy', 'Education nationale.'],
    'description' => ['J\'ai été la fabuleuse expérience de Jumba durant 2 ans avant de m\'enfuir pour éviter une mort certaine.',
        'Je suis venu ici pour détruire le monde. J\'ai pu créer de nombreux projets pour arriver à mon objectif final...',
        'Ne voulant plus quitter la terre, j\'ai entrepris une reconversion professionnelle afin d\'aider la terre à pouvoir vivre avec des expériences extrateresstres.',
        'Après avoir attrapé toutes les expériences et survécu à toutes mes aventures, j\'ai décidé d\'apprendre au plus jeune.'],
];
?>

<div class="exp_div">
    <?php for ($i = 0; $i < count($experiences['years']); $i++) {
        ?>
    <div class="exp<?= $i + 1 ?>">
        <?php foreach ($experiences as $job => $experience) { ?>
            <p class="<?= $job ?>"><?= $experiences[$job][$i]; ?></p>
        <?php }
        ?></div><?php
    }
    ?>
</div>

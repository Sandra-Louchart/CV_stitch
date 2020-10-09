<?php
$experiences = [
    'years' => ['2000-2002', '2002-2005', '2005-2018', '2018-2020'],
    'job' => ['Experience 626', 'Destructeur', 'Chasseur de prime', 'Professeur des écoles stagiaires.'],
    'company' => ['Jumba Industrie', 'Jumba Entreprise', 'Hawaï Academie', 'Education nationale.'],
    'description' => ['J\'ai été la fabuleuse expérience de Jumba durant 2 ans avant de m\'enfuir pour éviter une mort certaine.',
        'Je suis venu ici pour détruire ce Monde. J\'ai pu créer de nombreux projets pour arriver à mon objectif final...',
        'Ne voulant plus quitter la Terre, j\'ai entrepris une reconversion professionnelle afin d\'aider la Terre à vivre avec des expériences extraterrestres.',
        'Après avoir attrapé toutes les expériences et survécu à toutes mes aventures, j\'ai décidé d\'apprendre aux plus jeunes.'],
];
?>

<div class="experience_div">
    <?php for ($i = 0; $i < 2; $i++) {
        ?>
    <div class="experience">
        <?php foreach ($experiences as $job => $experience) { ?>
            <p class="<?= $job ?>"><?= $experiences[$job][$i]; ?></p>
        <?php }
        ?></div><?php
    }
    ?>
</div>
<div class="experience_div">
    <?php for ($i = 2; $i < count($experiences['years']); $i++) {
        ?>
        <div class="experience">
        <?php foreach ($experiences as $job => $experience) { ?>
            <p class="<?= $job ?>"><?= $experiences[$job][$i]; ?></p>
        <?php }
        ?></div><?php
    }
    ?>
</div>

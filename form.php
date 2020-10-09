    <h2 id="contact">Me contacter</h2>

    <?php
    $subjects = [
        'sujet 1' => 'Demande de renseignements complémentaires',
        'sujet 2' => 'Demande d\'entretien',
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') :
        foreach ($_POST as $name => $input) {
            $data[$name] = trim($input);
        }

        if (empty($data['user_name'])) {
            $errors[] = 'Veuillez remplir votre nom';
        }

        if (!key_exists($data['subject'], $subjects)) {
            $errors[] = 'Valeur incorrecte du sujet';
        }

        if (empty($data['user_email'])) {
            $errors[] = 'Veuillez renseigner un email';
        } elseif (!filter_var($data['user_email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'format de l\'email incorrect';
        }

        if (!empty($errors)) : ?>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else :
            ?> <p><?= 'Merci !'; ?></p>
            <p><?= 'Stitch content'; ?></p>
        <?php endif;
    endif;
    ?>


    <form action="" method="post">
        <div>
            <label for="name">Nom :</label>
            <input type="text"
                   id="name"
                   name="user_name"
                   placeholder="Stitch"
                   value="<?= $data['user_name'] ?? '' ?>"
            >
        </div>
        <div>
            <label for="email">E-mail :</label>
            <input type="email"
                   id="email"
                   name="user_email"
                   placeholder="lilo@example.com"
                   value="<?= $data['user_email'] ?? '' ?>"
            >
        </div>
        <div>
            <label for="subject">Sujet</label>
            <select name="subject" id="subject">
                <?php foreach ($subjects as $optionValue => $subject) : ?>
                    <option
                        <?php if (!empty($data['subject']) && $optionValue === $data['subject']) : ?>
                            selected
                        <?php endif; ?>
                        value="<?= $optionValue ?>">
                        <?= $subject ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg"
                      name="user_message"
                      rows="4"
                      cols="50"
                      placeholder="Je m'appelle Stitch...."
            ><?= $data['user_message'] ?? '' ?></textarea>
        </div>
        <div class="button">
            <button type="submit" id="btn">Envoyer</button>
        </div>
    </form>
